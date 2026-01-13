<?php
  include("../header_meta.php");
  ?>

<!-- forgot password -->
<div id="forgot-password-view" class="login-container fade-in">
    <div class="login-card shadow-lg animate__animated animate__fadeInUp">
        <div class="login-header text-center">
            <div class="login-logo">
                <div class="logo-circle shadow-sm">
                    <img src="../img/logo.png" class="logo-img" alt="Logo" />
                </div>
            </div>
            <h2 class="fw-bold m-0">CHAMPS VMA</h2>
            <p class="small opacity-75">Vehicle Monitoring & Management System</p>
        </div>

        <div class="login-body p-3 p-md-4">
            <form id="forgotPasswordForm">
                <div class="mb-4">
                    <label class="form-label small fw-bold text-uppercase">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0">
                            <i class="fas fa-envelope text-muted"></i>
                        </span>
                        <input type="email" class="form-control bg-light border-0 py-2"
                            placeholder="yourname@company.com" required />
                    </div>
                    <div class="form-text small text-muted mt-2">
                        We will send a password reset link to this email.
                    </div>
                </div>

                <button type="submit" class="btn secondary-color w-100 py-3 fw-bold rounded-pill shadow-sm">
                    SEND RESET LINK <i class="fas fa-paper-plane ms-2"></i>
                </button>

                <div class="text-center mt-4">
                    <a href="./login.php" class="fw-bold text-decoration-none small" 
                        style="color: var(--primary)">
                        <i class="fas fa-arrow-left me-1"></i> Back to Login
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>