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
        <div id="driver-misconduct" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./driver-misconduct.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Driver Misconduct</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="container-fluid bg-white p-0">
                            <div class="d-flex detail-row">
                                <div class="detail-label">Date:</div>
                                <div>22 Dec 2025 | 11:30 AM</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Vehicle Plate Number:</div>
                                <div class="">VH-789</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Alcohol/drug test result:</div>
                                <div class="">Negative</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Mental stability:</div>
                                <div>Stable</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver Name:</div>
                                <div>Muhammad Ahmed</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Location:</div>
                                <div>Central Depot Yard - B4</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Cause:</div>
                                <div class="">Reckless Driving</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Countenance/Stability:</div>
                                <div>Normal</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Rating of the driver:</div>
                                <div>
                                    <span class="text-warning">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </span>
                                    <span class="small ms-2">(3 - Average)</span>
                                </div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Assistant Required ?:</div>
                                <div>
                                    <span class="">Yes</span>
                                </div>
                            </div>

                            <div class="d-flex detail-row border-bottom-0">
                                <div class="detail-label">Remarks / Comments:</div>
                                <div class="fst-italic text-muted">
                                    Confirmed - Disciplinary action initiated based on behavioral report.
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-5">
                        <div class="text-center p-2 ">
                                <img src="../img/driver-misconduct.jfif"
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