<?php
$pageTitle = "Register";
include 'includes/header.php';
include 'db/connection.php';

$error = "";
$success = "";

// Visitor ID Generator Function
function generateVisitorID($conn) {
    do {
        $number = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        $id = "PU" . $number;
        if (!preg_match('/^PU\d{6}$/', $id)) continue;
        $check = mysqli_query($conn, "SELECT id FROM users WHERE visitor_id='$id'");
    } while (mysqli_num_rows($check) > 0);
    return $id;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = htmlspecialchars(trim($_POST['first_name']));
    $surname    = htmlspecialchars(trim($_POST['surname']));
    $email      = htmlspecialchars(trim($_POST['email']));
    $password   = $_POST['password'];
    $confirm    = $_POST['confirm_password'];

    // Validation
    if (empty($first_name) || empty($surname) || empty($email) || empty($password)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Invalid email address.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } elseif ($password !== $confirm) {
        $error = "Passwords do not match.";
    } else {
        // Check if email exists
        $checkEmail = mysqli_real_escape_string($conn, $email);
        $result = mysqli_query($conn, "SELECT id FROM users WHERE email='$checkEmail'");

        if (mysqli_num_rows($result) > 0) {
            $error = "Email already registered. Please login.";
        } else {
            $hashed    = password_hash($password, PASSWORD_BCRYPT);
            $visitorID = generateVisitorID($conn);
            $fn        = mysqli_real_escape_string($conn, $first_name);
            $sn        = mysqli_real_escape_string($conn, $surname);

            $sql = "INSERT INTO users (visitor_id, first_name, surname, email, password)
                    VALUES ('$visitorID', '$fn', '$sn', '$checkEmail', '$hashed')";

            if (mysqli_query($conn, $sql)) {
                $success = "Registration successful! Your Visitor ID is <strong>$visitorID</strong>. 
                           <a href='login.php'>Login here</a>.";
            } else {
                $error = "Registration failed. Please try again.";
            }
        }
    }
}
?>

<?php include 'includes/navbar.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h3 class="text-center fw-bold text-success mb-4">
                        <i class="fas fa-user-plus me-2"></i>Create Account
                    </h3>

                    <?php if($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>
                    <?php if($success): ?>
                        <div class="alert alert-success"><?php echo $success; ?></div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">First Name</label>
                            <input type="text" name="first_name" class="form-control" 
                                   value="<?php echo $_POST['first_name'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Surname</label>
                            <input type="text" name="surname" class="form-control"
                                   value="<?php echo $_POST['surname'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" class="form-control"
                                   value="<?php echo $_POST['email'] ?? ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password" name="password" class="form-control" required>
                            <small class="text-muted">Minimum 6 characters</small>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                            <i class="fas fa-user-plus me-2"></i>Register
                        </button>
                    </form>

                    <p class="text-center mt-3 text-muted">
                        Already have an account? <a href="login.php" class="text-success">Login here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>