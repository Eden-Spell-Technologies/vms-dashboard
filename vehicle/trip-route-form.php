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
        <div id="route-detail-view" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a href="./trip-route.php" class="btn secondary-hover rounded-circle me-3" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Trip & Route</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">


                <div class="row ">
                    <div class="col-xl-7">
                        <div class="container-fluid p-0">
                            <div class="d-flex detail-row">
                                <div class="detail-label">Date of Trip:</div>
                                <div id="detail-trip-date">05-Jan-2026</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Route:</div>
                                <div id="detail-route">Main Highway Section A</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver Name:</div>
                                <div id="detail-driver">Zaid Ali</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Driver Mate Name:</div>
                                <div id="detail-mate-name">Aslam Khan</div>
                            </div>


                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    Vehicle Registration Number:
                                </div>
                                <div id="detail-vehicle">VH-789</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Port/Point of Departure:</div>
                                <div id="detail-departure-port">Port Qasim, Karachi</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Current Location:</div>
                                <div id="detail-current-location">Hyderabad Junction</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Final Destination:</div>
                                <div id="detail-destination" class="fw-bold text-danger">
                                    Thokar Niaz Baig, Lahore
                                </div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">Goods Transported:</div>
                                <div id="detail-goods">Electronics</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Load or Content Details:</div>
                                <div id="detail-load">500 kg</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Departure Time:</div>
                                <div id="detail-departure-time">06:00 AM</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Weather Conditions:</div>
                                <div id="detail-weather">Sunny</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Road Conditions:</div>
                                <div id="detail-road">Smooth</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    Waybill No (where applicable):
                                </div>
                                <div id="detail-waybill">WB-12345678</div>
                            </div>

                            <div class="d-flex detail-row">
                                <div class="detail-label">
                                    Expected date of arrival at destination:
                                </div>
                                <div id="detail-expected-arrival" class="fw-bold">
                                    07-Jan-2026
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class=" p-3 h-100">
                             <h5 class="fw-bold mb-0 text-danger text-center mb-2">Destination - Islamabad</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <small class="text-muted"><i class="fas fa-car me-1"></i> Drive</small>
                                </div>
                                <div class="text-end">
                                    <span class="badge bg-light text-dark border">2h 26m</span>
                                </div>
                            </div>

                            <div class="rounded-3 overflow-hidden mb-3 border" style="height: 250px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106203.18956976935!2d72.936058913936!3d33.68442015383921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515133d452ce!2sIslamabad%2C%20Islamabad%20Capital%20Territory!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h6 class="fw-bold mb-0">2h 26m (188 km)</h6>
                                    <small class="text-muted">via AH1/M-1</small>
                                </div>
                                <a href="https://www.google.com/maps/dir//Islamabad" target="_blank"
                                    class="btn btn-primary btn-sm rounded-pill px-3">
                                    <i class="fas fa-directions me-1"></i> Directions
                                </a>
                            </div>

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
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>