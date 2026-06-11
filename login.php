<?php
$pageTitle = "Login";
include 'includes/header.php';
include 'db/connection.php';

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        $error = "Both fields are required.";
    } else {
        $safeEmail = mysqli_real_escape_string($conn, $email);
        $result    = mysqli_query($conn, "SELECT * FROM users WHERE email='$safeEmail'");
        $user      = mysqli_fetch_assoc($result);

        if ($user) {
            // Check if account is locked
            if ($user['login_attempts'] >= 3 && $user['lock_time'] !== null) {
                $lockExpiry = strtotime($user['lock_time']) + 180; // 3 minutes

                if (time() < $lockExpiry) {
                    $remaining = ceil(($lockExpiry - time()) / 60);
                    $error = "Account locked due to too many failed attempts. 
                             Try again in <strong>$remaining minute(s)</strong>.";
                } else {
                    // Lock expired — reset attempts
                    mysqli_query($conn, "UPDATE users SET login_attempts=0, 
                                 lock_time=NULL WHERE id={$user['id']}");
                    $user['login_attempts'] = 0;
                }
            }

            if (empty($error)) {
                if (password_verify($password, $user['password'])) {
                    // Correct password — reset attempts and start session
                    mysqli_query($conn, "UPDATE users SET login_attempts=0, 
                                 lock_time=NULL WHERE id={$user['id']}");

                    $_SESSION['user_id']    = $user['id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['email']      = $user['email'];
                    $_SESSION['visitor_id'] = $user['visitor_id'];

                    header("Location: dashboard.php");
                    exit();
                } else {
                    // Wrong password
                    $newAttempts = $user['login_attempts'] + 1;

                    if ($newAttempts >= 3) {
                        mysqli_query($conn, "UPDATE users SET login_attempts=$newAttempts, 
                                     lock_time=NOW() WHERE id={$user['id']}");
                        $error = "Too many failed attempts. Account locked for 
                                 <strong>3 minutes</strong>.";
                    } else {
                        mysqli_query($conn, "UPDATE users SET login_attempts=$newAttempts 
                                     WHERE id={$user['id']}");
                        $remaining = 3 - $newAttempts;
                        $error = "Incorrect password. <strong>$remaining attempt(s)</strong> remaining.";
                    }
                }
            }
        } else {
            $error = "No account found with that email address.";
        }
    }
}
?>

<?php include 'includes/navbar.php'; ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0">
                <div class="card-body p-5">
                    <h3 class="text-center fw-bold text-success mb-4">
                        <i class="fas fa-sign-in-alt me-2"></i>Login
                    </h3>

                    <?php if($error): ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endif; ?>

                    <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" name="email" class="form-control"
                                   value="<?php echo $_POST['email'] ?? ''; ?>" 
                                   placeholder="Enter your email" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" id="passwordField"
                                       class="form-control" placeholder="Enter your password" required>
                                <button class="btn btn-outline-secondary" type="button"
                                        onclick="togglePassword()">
                                    <i class="fas fa-eye" id="eyeIcon"></i>
                                </button>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                            <i class="fas fa-sign-in-alt me-2"></i>Login
                        </button>
                    </form>

                    <p class="text-center mt-3 text-muted">
                        Don't have an account? 
                        <a href="register.php" class="text-success">Register here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function togglePassword() {
    const field   = document.getElementById('passwordField');
    const icon    = document.getElementById('eyeIcon');
    if (field.type === 'password') {
        field.type  = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        field.type  = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>

<?php include 'includes/footer.php'; ?>