<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Temporary login (NO credential check)
    $_SESSION['user'] = 'authenticated_user';
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <div id="login-view" class="login-container">
        <div class="login-card shadow-lg animate__animated animate__zoomIn">
            <div class="login-header text-center">
                <img src="../img/logo.png" class="logo-img mb-2" alt="Logo" />
                <h2 class="fw-bold m-0">CHAMPS VMA</h2>
                <p class="small opacity-75">Vehicle Monitoring & Management System</p>
            </div>

            <div class="login-body p-3 p-md-4">
                <?php if (!empty($error))
                    echo "<p class='text-danger text-center'>$error</p>"; ?>

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="text-end mb-2">
                        <a href="./forgotpassword.php" class="small text-decoration-none text-muted fw-bold">Forgot
                            Password?</a>
                    </div>

                    <button type="submit" name="login" class="btn secondary-color w-100 py-3 fw-bold rounded-pill">
                        LOG IN <i class="fas fa-sign-in-alt ms-2"></i>
                    </button>

                    <div class="text-center mt-4">
                        <p class="small text-muted mb-0">
                            Don't have an account?
                            <a href="./signup.php" class="fw-bold text-decoration-none"
                                style="color: var(--primary)">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>