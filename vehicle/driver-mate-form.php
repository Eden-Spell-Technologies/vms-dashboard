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
        <div id="driver-mate-detail-view" class=" px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./driver-mate-detail.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Driver Mate Details</h3>
            </div>


            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row">
                    <div class="col-md-2 text-center mb-3">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto shadow-sm"
                            style="
                      width: 120px;
                      height: 120px;
                      border: 3px solid var(--navy);
                    ">
                            <i class="fas fa-user-tie fa-4x text-muted"></i>
                        </div>
                        <span class="badge bg-success mt-2">Verified</span>
                    </div>

                    <div class="col-md-10 px-4">


                        <div class="container-fluid p-0">
                            <div class="d-flex detail-row">
                                <div class="detail-label">Full Name:</div>
                                <div class="fw-bold">Ali Raza</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Address:</div>
                                <div>Flat B-402, North Karachi</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Phone Number:</div>
                                <div class="fw-bold text-success">+92 345 1234567</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Date Employed:</div>
                                <div>10-Jan-2023</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Date of Birth:</div>
                                <div>15-Aug-1995</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver License Number (where applicable):</div>
                                <div class="fw-bold">ML-KAR-9988</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Emergency Contact Name:</div>
                                <div>Kamran Raza</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Emergency Contact Phone Number:</div>
                                <div>+92 300 9988776</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Assigned / Approved Vehicle / Plate Number:</div>
                                <div class="fw-bold">VH-789 (ABC-123)</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">License Category / Class:</div>
                                <div>LTV / Helper</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">License Expiry Date:</div>
                                <div class="text-danger">25-Dec-2028</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">National ID / Passport:</div>
                                <div>42101-9876543-1</div>
                            </div>



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