<?php
  include("../header_meta.php");
  ?>

<!-- sign up form -->
<div id="signup-view" class="login-container  fade-in">
    <div class="login-card shadow-lg animate__animated animate__fadeInUp" style="max-width: 500px">
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
            <form id="signupForm">
                <div class="row g-3">
                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-uppercase">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i
                                    class="fas fa-id-card text-muted"></i></span>
                            <input type="text" class="form-control bg-light border-0" placeholder="John Doe" required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-uppercase">Email Address</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i
                                    class="fas fa-envelope text-muted"></i></span>
                            <input type="email" class="form-control bg-light border-0" placeholder="name@company.com"
                                required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-uppercase">Phone Number</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-0"><i
                                    class="fas fa-phone text-muted"></i></span>
                            <input type="tel" class="form-control bg-light border-0" placeholder="+92 300 1234567"
                                required />
                        </div>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label small fw-bold text-uppercase">Your Role</label>
                        <select class="form-select bg-light border-0">
                            <option selected disabled>Choose your role...</option>
                            <option>User</option>
                            <option>Admin</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label class="form-label small fw-bold text-uppercase">Password</label>
                        <input type="password" class="form-control bg-light border-0" placeholder="••••••••" required />
                    </div>

                    <div class="col-12">
                        <label class="form-label small fw-bold text-uppercase">Confirm Password</label>
                        <input type="password" class="form-control bg-light border-0" placeholder="••••••••" required />
                    </div>
                </div>

                <div class="my-4 form-check">
                    <input type="checkbox" class="form-check-input" id="terms" required />
                    <label class="form-check-label small text-muted" for="terms">
                        I agree to the
                        <a href="#" class="text-decoration-none" style="color: var(--primary)">Terms of Service</a>
                    </label>
                </div>

                <button type="submit" class="btn secondary-color w-100 py-3 fw-bold rounded-pill shadow-sm">
                    CREATE ACCOUNT <i class="fas fa-user-plus ms-2"></i>
                </button>

                <div class="text-center mt-4">
                    <p class="small text-muted mb-0">
                        Already have an account?
                        <a href="./login.php" class="fw-bold text-decoration-none"
                            style="color: var(--primary)">Log In</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>