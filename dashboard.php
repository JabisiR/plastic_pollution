<?php
$pageTitle = "Dashboard";
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

// Fetch user details
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$user_id");
$user   = mysqli_fetch_assoc($result);

// Fetch donation stats
$donationResult = mysqli_query($conn, "SELECT SUM(amount) as total, COUNT(*) as count 
                                       FROM donations WHERE user_id=$user_id");
$donationStats  = mysqli_fetch_assoc($donationResult);
$totalDonated   = $donationStats['total'] ?? 0;
$donationCount  = $donationStats['count'] ?? 0;

// Fetch donation history
$history = mysqli_query($conn, "SELECT * FROM donations WHERE user_id=$user_id 
                                ORDER BY donated_at DESC");

// Handle Profile Update
if (isset($_POST['update_profile'])) {
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $surname    = htmlspecialchars(trim($_POST['surname']));
    $email      = htmlspecialchars(trim($_POST['email']));

    if (empty($first_name) || empty($surname) || empty($email)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } else {
        $fn = mysqli_real_escape_string($conn, $first_name);
        $sn = mysqli_real_escape_string($conn, $surname);
        $em = mysqli_real_escape_string($conn, $email);

        // Check if email is taken by another user
        $emailCheck = mysqli_query($conn, "SELECT id FROM users 
                                           WHERE email='$em' AND id != $user_id");
        if (mysqli_num_rows($emailCheck) > 0) {
            $error = "That email is already used by another account.";
        } else {
            mysqli_query($conn, "UPDATE users SET first_name='$fn', surname='$sn', 
                                 email='$em' WHERE id=$user_id");
            $_SESSION['first_name'] = $first_name;
            $_SESSION['email']      = $email;
            $success = "Profile updated successfully!";

            // Refresh user data
            $result = mysqli_query($conn, "SELECT * FROM users WHERE id=$user_id");
            $user   = mysqli_fetch_assoc($result);
        }
    }
}

// Handle Password Change
if (isset($_POST['change_password'])) {
    $old_password     = $_POST['old_password'];
    $new_password     = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($old_password) || empty($new_password) || empty($confirm_password)) {
        $error = "All password fields are required.";
    } elseif (!password_verify($old_password, $user['password'])) {
        $error = "Current password is incorrect.";
    } elseif (strlen($new_password) < 6) {
        $error = "New password must be at least 6 characters.";
    } elseif ($new_password !== $confirm_password) {
        $error = "New passwords do not match.";
    } else {
        $hashed = password_hash($new_password, PASSWORD_BCRYPT);
        mysqli_query($conn, "UPDATE users SET password='$hashed' WHERE id=$user_id");
        $success = "Password changed successfully!";
    }
}

// Handle Account Deletion
if (isset($_POST['delete_account'])) {
    mysqli_query($conn, "DELETE FROM users WHERE id=$user_id");
    session_destroy();
    header("Location: index.php");
    exit();
}
?>

<?php include 'includes/navbar.php'; ?>

<div class="container py-5">

    <!-- Welcome Banner -->
    <div class="bg-success text-white rounded-4 p-4 mb-4 d-flex 
                justify-content-between align-items-center">
        <div>
            <h4 class="fw-bold mb-1">
                Welcome back, <?php echo $user['first_name']; ?>! 👋
            </h4>
            <p class="mb-0 opacity-75">
                Visitor ID: <strong><?php echo $user['visitor_id']; ?></strong>
            </p>
        </div>
        <a href="donate.php" class="btn btn-light text-success fw-bold">
            <i class="fas fa-hand-holding-heart me-2"></i>Donate Now
        </a>
    </div>

    <?php if($error): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <?php if($success): ?>
        <div class="alert alert-success"><?php echo $success; ?></div>
    <?php endif; ?>

    <!-- Stats Cards -->
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="fas fa-hand-holding-usd text-success fs-1 mb-3"></i>
                <h5 class="fw-bold">Total Donated</h5>
                <h3 class="text-success fw-bold">
                    GH₵ <?php echo number_format($totalDonated, 2); ?>
                </h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="fas fa-receipt text-primary fs-1 mb-3"></i>
                <h5 class="fw-bold">Donations Made</h5>
                <h3 class="text-primary fw-bold"><?php echo $donationCount; ?></h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm text-center p-4">
                <i class="fas fa-id-card text-warning fs-1 mb-3"></i>
                <h5 class="fw-bold">Member Since</h5>
                <h3 class="text-warning fw-bold">
                    <?php echo date('M Y', strtotime($user['created_at'])); ?>
                </h3>
            </div>
        </div>
    </div>

    <div class="row g-4">

        <!-- Update Profile -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-success mb-4">
                        <i class="fas fa-user-edit me-2"></i>Update Profile
                    </h5>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">First Name</label>
                            <input type="text" name="first_name" class="form-control"
                                   value="<?php echo $user['first_name']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Surname</label>
                            <input type="text" name="surname" class="form-control"
                                   value="<?php echo $user['surname']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" class="form-control"
                                   value="<?php echo $user['email']; ?>" required>
                        </div>
                        <button type="submit" name="update_profile" 
                                class="btn btn-success w-100 fw-bold">
                            <i class="fas fa-save me-2"></i>Save Changes
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Change Password -->
        <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-primary mb-4">
                        <i class="fas fa-lock me-2"></i>Change Password
                    </h5>
                    <form method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Current Password</label>
                            <input type="password" name="old_password" 
                                   class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">New Password</label>
                            <input type="password" name="new_password" 
                                   class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Confirm New Password</label>
                            <input type="password" name="confirm_password" 
                                   class="form-control" required>
                        </div>
                        <button type="submit" name="change_password" 
                                class="btn btn-primary w-100 fw-bold">
                            <i class="fas fa-key me-2"></i>Change Password
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Donation History -->
        <div class="col-12">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-success mb-4">
                        <i class="fas fa-history me-2"></i>Donation History
                    </h5>
                    <?php if(mysqli_num_rows($history) > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-success">
                                <tr>
                                    <th>#</th>
                                    <th>Amount (GH₵)</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; while($row = mysqli_fetch_assoc($history)): ?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td class="fw-bold text-success">
                                        GH₵ <?php echo number_format($row['amount'], 2); ?>
                                    </td>
                                    <td>
                                        <?php echo date('d M Y, h:i A', 
                                              strtotime($row['donated_at'])); ?>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                            <tfoot class="table-light">
                                <tr>
                                    <td colspan="1"><strong>Total</strong></td>
                                    <td colspan="2" class="fw-bold text-success">
                                        GH₵ <?php echo number_format($totalDonated, 2); ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <?php else: ?>
                        <div class="text-center py-4 text-muted">
                            <i class="fas fa-inbox fs-1 mb-3 d-block"></i>
                            No donations yet. 
                            <a href="donate.php" class="text-success">Make your first donation!</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- Delete Account -->
        <div class="col-12">
            <div class="card border-0 shadow-sm border-danger">
                <div class="card-body p-4">
                    <h5 class="fw-bold text-danger mb-2">
                        <i class="fas fa-trash me-2"></i>Delete Account
                    </h5>
                    <p class="text-muted">
                        This will permanently delete your account and all your data. 
                        This cannot be undone.
                    </p>
                    <button class="btn btn-danger fw-bold" 
                            onclick="confirmDelete()">
                        <i class="fas fa-trash me-2"></i>Delete My Account
                    </button>
                    <form method="POST" id="deleteForm">
                        <input type="hidden" name="delete_account" value="1">
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
function confirmDelete() {
    if (confirm("Are you sure you want to delete your account? This cannot be undone!")) {
        document.getElementById('deleteForm').submit();
    }
}
</script>

<?php include 'includes/footer.php'; ?>