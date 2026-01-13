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
        <div id="service-detail-view" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./service.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Service / Maintenance</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="row ">
                    <div class="col-xl-7">
                        <div class="d-flex detail-row">
                            <div class="detail-label">Date of Service:</div>
                            <div id="service-date">05-Jan-2026</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Description of Work Done:</div>
                            <div id="work-description">
                                Oil change, brake inspection, and filter replacement.
                            </div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Vehicle Plate Number:</div>
                            <div id="vehicle-plate">VH-789 (ABC-123)</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Odometer Reading / Mileage:</div>
                            <div id="odometer-reading">85,250 km</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Parts Replaced:</div>
                            <div id="parts-replaced">Oil Filter, Brake Pads</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">
                                Service Provider / Mechanic Name:
                            </div>
                            <div id="mechanic-name">City Auto Workshop</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Service Record Number:</div>
                            <div id="service-record-no">SR-99821</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">
                                Type of Service (Routine / Repair / Breakdown):
                            </div>
                            <div id="service-type">Repair</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">
                                Next Service Due (Date or Mileage):
                            </div>
                            <div id="next-service-due">95,000 km or 05-July-2026</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Date of Service:</div>
                            <div id="service-date">05-Jan-2026</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Description of Work Done:</div>
                            <div id="work-description">
                                Oil change, brake inspection, and filter replacement.
                            </div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Accident History:</div>
                            <div id="accident-history">
                                <span class="badge bg-warning text-dark">Minor Bump</span>
                                <p class="mb-0 mt-1 small text-muted">
                                    Damage sustained severity: Low - Left headlight
                                    replaced.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">
                                Remark on Physical Inspection:
                            </div>
                            <div id="physical-inspection" class="fst-italic">
                                Body work clean, tire pressure optimal.
                            </div>
                        </div>
                    </div>
                     <div class="col-xl-5">
                        <div class="text-center p-2 ">
                                <img src="../img/services.webp"
                                    alt="Truck Image" class="img-fluid" style="max-height: 350px; object-fit: contain;">
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