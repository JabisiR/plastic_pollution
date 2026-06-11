<?php
$pageTitle = "Donate";
include 'includes/header.php';
include 'db/connection.php';

// Protect page — redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];
$success = "";
$error   = "";

// Handle Donation Submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $amount = trim($_POST['amount']);

    if (empty($amount)) {
        $error = "Please enter a donation amount.";
    } elseif (!is_numeric($amount)) {
        $error = "Donation amount must be a valid number.";
    } elseif ($amount <= 0) {
        $error = "Donation amount must be greater than zero.";
    } elseif ($amount > 100000) {
        $error = "Donation amount cannot exceed GH₵ 100,000.";
    } else {
        $safeAmount = mysqli_real_escape_string($conn, $amount);
        $sql = "INSERT INTO donations (user_id, amount) VALUES ($user_id, $safeAmount)";

        if (mysqli_query($conn, $sql)) {
            $success = "Thank you for your donation of 
                       <strong>GH₵ " . number_format($amount, 2) . "</strong>! 
                       Every contribution makes a difference. 🌍";
        } else {
            $error = "Donation failed. Please try again.";
        }
    }
}

// Fetch overall donation statistics
$statsResult = mysqli_query($conn, "SELECT SUM(amount) as grand_total, 
                                    COUNT(*) as total_count,
                                    COUNT(DISTINCT user_id) as total_donors
                                    FROM donations");
$stats = mysqli_fetch_assoc($statsResult);

// Fetch this user's total
$userTotal = mysqli_query($conn, "SELECT SUM(amount) as my_total 
                                  FROM donations WHERE user_id=$user_id");
$myStats   = mysqli_fetch_assoc($userTotal);
?>

<?php include 'includes/navbar.php'; ?>

<div class="container py-5">

    <!-- Page Header -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">
            <i class="fas fa-hand-holding-heart me-2"></i>Make a Donation
        </h2>
        <p class="text-muted lead">
            Your contribution helps us fight plastic pollution and protect our environment.
        </p>
    </div>

    <!-- Overall Stats -->
    <div class="row g-4 mb-5">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4 bg-success text-white">
                <i class="fas fa-globe fs-1 mb-3"></i>
                <h5 class="fw-bold">Total Raised</h5>
                <h3 class="fw-bold">
                    GH₵ <?php echo number_format($stats['grand_total'] ?? 0, 2); ?>
                </h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4 bg-primary text-white">
                <i class="fas fa-users fs-1 mb-3"></i>
                <h5 class="fw-bold">Total Donors</h5>
                <h3 class="fw-bold"><?php echo $stats['total_donors'] ?? 0; ?></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4 bg-warning text-white">
                <i class="fas fa-hand-holding-usd fs-1 mb-3"></i>
                <h5 class="fw-bold">My Total Donated</h5>
                <h3 class="fw-bold">
                    GH₵ <?php echo number_format($myStats['my_total'] ?? 0, 2); ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-7">

            <?php if($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
            <?php if($success): ?>
                <div class="alert alert-success"><?php echo $success; ?></div>
            <?php endif; ?>

            <!-- Donation Form -->
            <div class="card border-0 shadow">
                <div class="card-body p-5">
                    <h5 class="fw-bold text-success mb-4">
                        <i class="fas fa-donate me-2"></i>Choose Your Donation Amount
                    </h5>

                    <!-- Quick Amount Buttons -->
                    <div class="row g-2 mb-4">
                        <p class="text-muted fw-semibold mb-2">Quick Select:</p>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success w-100 
                                    quick-amount" data-amount="10">
                                GH₵10
                            </button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success w-100 
                                    quick-amount" data-amount="20">
                                GH₵20
                            </button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success w-100 
                                    quick-amount" data-amount="50">
                                GH₵50
                            </button>
                        </div>
                        <div class="col-3">
                            <button type="button" class="btn btn-outline-success w-100 
                                    quick-amount" data-amount="100">
                                GH₵100
                            </button>
                        </div>
                    </div>

                    <form method="POST" action="">
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                Or Enter Custom Amount (GH₵)
                            </label>
                            <div class="input-group input-group-lg">
                                <span class="input-group-text bg-success text-white fw-bold">
                                    GH₵
                                </span>
                                <input type="number" name="amount" id="amountField"
                                       class="form-control" placeholder="0.00"
                                       min="1" step="0.01"
                                       value="<?php echo $_POST['amount'] ?? ''; ?>" required>
                            </div>
                        </div>

                        <!-- Donor Info (read only) -->
                        <div class="bg-light rounded p-3 mb-4">
                            <p class="mb-1 text-muted fw-semibold">Donating as:</p>
                            <p class="mb-0 fw-bold text-success">
                                <i class="fas fa-user me-2"></i>
                                <?php echo $_SESSION['first_name']; ?> — 
                                <?php echo $_SESSION['email']; ?>
                            </p>
                        </div>

                        <button type="submit" class="btn btn-success w-100 fw-bold py-3 fs-5">
                            <i class="fas fa-heart me-2"></i>Donate Now
                        </button>
                    </form>
                </div>
            </div>

            <!-- Why Donate Section -->
            <div class="card border-0 shadow-sm mt-4">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-success mb-3">
                        <i class="fas fa-question-circle me-2"></i>Why Donate?
                    </h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Fund awareness campaigns across communities
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Support beach and river cleanup drives
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Help educate schools on plastic dangers
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Lobby government for stronger plastic policies
                        </li>
                        <li>
                            <i class="fas fa-check-circle text-success me-2"></i>
                            Protect oceans, wildlife and future generations
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// Quick amount buttons fill the input field
document.querySelectorAll('.quick-amount').forEach(function(btn) {
    btn.addEventListener('click', function() {
        document.getElementById('amountField').value = this.dataset.amount;

        // Highlight selected button
        document.querySelectorAll('.quick-amount').forEach(function(b) {
            b.classList.remove('btn-success');
            b.classList.add('btn-outline-success');
        });
        this.classList.remove('btn-outline-success');
        this.classList.add('btn-success');
    });
});
</script>

<?php include 'includes/footer.php'; ?>