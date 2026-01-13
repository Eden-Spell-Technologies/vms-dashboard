<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}
?>

<?php
  include("../header_meta.php");
  ?>
<div id="dashboard-page">

  <?php
  include("../sidebar.php");
  ?>
  <div id="main-wrapper">
    <?php
    include("../nav.php");

    ?>
        <div class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./driver-detail.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Driver Details</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row">
                   

                    <div class="col-xl-7">
                        <div class="container-fluid p-0">
                            <div class="d-flex detail-row">
                                <div class="detail-label">Full Name:</div>
                                <div>John Doe</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Address:</div>
                                <div>Plot 45, Street 10, Karachi</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Phone Number:</div>
                                <div>+92 300 1234567</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Date Employed:</div>
                                <div>01-Jan-2022</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Date of Birth:</div>
                                <div>15-May-1990</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver's License Number:</div>
                                <div>DL-987654321</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Emergency Contact Name:</div>
                                <div>Jane Doe</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    Emergency Contact Phone Number:
                                </div>
                                <div>+92 321 7654321</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    Assigned Vehicle / Plate Number:
                                </div>
                                <div>VH-789 (ABC-123)</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">License Category / Class:</div>
                                <div>HTV / LTV</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">License Expiry Date:</div>
                                <div>12-Dec-2028</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    National ID / Passport Number:
                                </div>
                                <div>42101-1234567-1</div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-5 text-center mb-3">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto shadow-sm"
                            style="
                      width: 120px;
                      height: 120px;
                      border: 3px solid var(--navy);
                    ">
                            <i class="fas fa-user-tie fa-4x text-muted"></i>
                        </div>
                        <span class="badge bg-success mt-2">Verified</span>
                        <div class="text-center p-2 ">
                            <img src="data:image/jpeg;base64,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"
                                alt="Truck Image" class="img-fluid" style="max-height: 200px; object-fit: contain;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>