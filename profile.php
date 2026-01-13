<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php
  include("header_meta.php");
  ?>

<div id="dashboard-page">

  <?php
  include("sidebar.php");
  ?>

<div id="main-wrapper">
    <?php include("./nav.php"); ?>

    <div class="px-4 px-md-5 pt-3 ">
        <!-- <div class="mb-4">
            <h3 class="fw-bold">My Profile</h3>
            <p class="text-muted">Manage your personal information and account security</p>
        </div> -->

        <div class="row g-4">
            <div class="col-xl-4">
                <div class="card border-0 shadow-sm rounded-4 text-center p-4">
                    <div class="position-relative d-inline-block mx-auto mb-3">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=random" class="rounded-circle border p-1" width="120" height="120" style="object-fit: cover;">
                        <button class="btn btn-sm btn-primary position-absolute bottom-0 end-0 rounded-circle shadow">
                            <i class="fas fa-camera"></i>
                        </button>
                    </div>
                    <h5 class="fw-bold mb-1">John Doe</h5>
                    <p class="text-muted small mb-3">Senior Fleet Manager</p>
                    <div class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">Active Account</div>
                    
                    <hr class="my-4 text-muted opacity-25">
                    
                    <div class="text-start">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope text-primary me-3"></i>
                            <div>
                                <small class="text-muted d-block">Email Address</small>
                                <strong>admin@champs.com</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-phone-alt text-primary me-3"></i>
                            <div>
                                <small class="text-muted d-block">Contact Number</small>
                                <strong>+966 50 123 4567</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card border-0 shadow-sm rounded-4 mb-4">
                    <div class="card-header bg-transparent border-bottom py-3">
                        <h6 class="fw-bold m-0"><i class="fas fa-user-edit me-2"></i> Edit Personal Information</h6>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Full Name</label>
                                    <input type="text" class="form-control rounded-3" value="John Doe">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Designation</label>
                                    <input type="text" class="form-control rounded-3" value="Senior Fleet Manager" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Email</label>
                                    <input type="email" class="form-control rounded-3" value="admin@champs.com">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-bold">Phone Number</label>
                                    <input type="text" class="form-control rounded-3" value="+966 50 123 4567">
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn secondary-color px-4 rounded-pill">Update Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-transparent border-bottom py-3">
                        <h6 class="fw-bold m-0"><i class="fas fa-lock me-2"></i> Change Password</h6>
                    </div>
                    <div class="card-body p-4">
                        <form action="#" method="POST">
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold">Current Password</label>
                                    <input type="password" class="form-control rounded-3">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold">New Password</label>
                                    <input type="password" class="form-control rounded-3">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label small fw-bold">Confirm New Password</label>
                                    <input type="password" class="form-control rounded-3">
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn secondary-color px-4 rounded-pill">Change Password</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("./footer.php"); ?>