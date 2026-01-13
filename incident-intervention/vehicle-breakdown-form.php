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
        <div id="breakdown-detail" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-breakdown.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Vehicle Breakdown</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="container-fluid p-0">

                            <div class="d-flex detail-row">
                                <div class="detail-label">Vehicle Plate Number:</div>
                                <div id="det-brk-plate">VH-789 (Toyota Hilux)</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver Name:</div>
                                <div id="det-brk-driver">Muhammad Ahmed</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Location:</div>
                                <div id="det-brk-location">
                                    <i class="fas fa-map-marker-alt me-1"></i> M-5 Motorway (Near Sukkur)
                                </div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Breakdown Type:</div>
                                <div id="det-brk-type">
                                    <div class="small text-muted">
                                        - Gas Cut<br>
                                        - Injector defect<br>
                                        - Axle defect<br>
                                        - oil seal defect<br>
                                        - Clutch defect<br>
                                        - Kick starter defect<br>
                                        - Gear selector defect<br>
                                        - Others (define)
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex detail-row border-bottom-0">
                                <div class="detail-label">Action Taken:</div>
                                <div id="det-brk-action">Recovery Vehicle Dispatched</div>
                            </div>

                        </div>
                    </div>
                     <div class="col-xl-5">
                        <div class="text-center p-2 ">
                                <img src="../img/breakdown.jfif"
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