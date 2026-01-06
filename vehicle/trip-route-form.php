<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}

// Ek folder peeche (root par) jaane ke liye ../ use karein
include("../sidebar.php");
include("../nav.php");
?>
<div id="main-wrapper" class="p-4 p-md-5">
    <div id="route-detail-view" class=" fade-in">
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


            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="container-fluid p-0">
                        <div class="d-flex detail-row">
                            <div class="detail-label">Date of Trip:</div>
                            <div id="detail-trip-date">05-Jan-2026</div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Route:</div>
                            <div id="detail-route">Main Highway Section A</div>
                        </div>

                        <!-- <div class="d-flex detail-row">
                      <div class="detail-label">Company Name:</div>
                      <div id="detail-company-name">ABC Logistics</div>
                    </div> -->
                        <div class="d-flex detail-row">
                            <div class="detail-label">Driver Name:</div>
                            <div id="detail-driver">Zaid Ali</div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Driver Number:</div>
                            <div id="detail-driver-number">+92 300 1112233</div>
                        </div>
                        <div class="d-flex detail-row align-items-center">
                            <div class="detail-label">Driver Photograph:</div>
                            <div id="detail-driver-photo">
                                <img src="path_to_driver_image.jpg" alt="Driver" class="img-thumbnail"
                                    style="width: 100px; height: 100px; object-fit: cover" />
                            </div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Driver License:</div>
                            <div id="detail-driver-license">DL-XYZ-786</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Motor Mate Name:</div>
                            <div id="detail-mate-name">Aslam Khan</div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Motor Mate Phone Number:</div>
                            <div id="detail-mate-phone">+92 321 4455667</div>
                        </div>
                        <div class="d-flex detail-row align-items-center">
                            <div class="detail-label">Motor Mate Photograph:</div>
                            <div id="detail-mate-photo">
                                <img src="path_to_mate_image.jpg" alt="Motor Mate" class="img-thumbnail"
                                    style="width: 100px; height: 100px; object-fit: cover" />
                            </div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Motor Mate License:</div>
                            <div id="detail-mate-license">ML-ABC-123</div>
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
            </div>
        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>