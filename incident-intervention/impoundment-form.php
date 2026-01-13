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
        <div id="impound-detail-view" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./impoundment.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Impoundment</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="container-fluid p-0">
                            <div class="d-flex detail-row">
                                <div class="detail-label">Reference Number:</div>
                                <div id="det-imp-ref">REF-108245</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Date of Impoundment:</div>
                                <div id="det-imp-date">22 Dec 2025 | 11:30 AM</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Vehicle Plate Number:</div>
                                <div id="det-imp-plate">VH-789 - Toyota Hilux</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver Name:</div>
                                <div id="det-imp-driver">Muhammad Ahmed</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Location:</div>
                                <div id="det-imp-location">Central Depot Yard - B4</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Reason for Impoundment:</div>
                                <div id="det-imp-reason">
                                    <div class="">Obstruction</div>
                                    <ul class="small text-muted mb-0" style="list-style: none; padding-left: 0;">
                                        <li>- Non-Payment or ticket or emblems</li>
                                        <li>- Illegal parking</li>
                                        <li>- Document issues</li>
                                        <li>- Vehicle safety (low thread, lights)</li>
                                        <li>- Others</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Authority Involved:</div>
                                <div id="det-imp-authority">Traffic Police, RTO</div>
                            </div>

                            <div class="d-flex detail-row border-bottom-0">
                                <div class="detail-label">Vehicle Status / Location Packed:</div>
                                <div id="det-imp-status">Confirmed / Secured</div>
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-5">
                        <div class="text-center p-2 ">
                                <img src="../img/impoundment.jfif"
                                    alt="Truck Image" class="img-fluid" style="max-height: 300px; object-fit: contain;">
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