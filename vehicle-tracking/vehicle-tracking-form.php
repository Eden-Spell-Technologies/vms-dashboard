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
        <div id="vehicle-detail-view" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-tracking.php" style="
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
          ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Vehicle Tracking</h3>
            </div>

            <div class="col-lg-12 mb-4">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class=" p-2 px-3 d-flex justify-content-between align-items-center">
                            <span class="small fw-bold"><i class="fas fa-map-marked-alt me-2"></i> Real-Time Tracking
                                Map</span>
                            <button class="btn btn-sm btn-outline-light border-0"><i class="fas fa-expand"></i></button>
                        </div>
                         <div class="rounded-3 overflow-hidden mb-3 border" style="height: 250px;">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106203.18956976935!2d72.936058913936!3d33.68442015383921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515133d452ce!2sIslamabad%2C%20Islamabad%20Capital%20Territory!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="container-fluid bg-white p-0">


                    <div class="d-flex detail-row">
                        <div class="detail-label">Initial Location:</div>
                        <div class="">Saba, Pujehun District</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Initial Coordinates:</div>
                        <div class="">7.435712, -11.843278</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Final Location / Town:</div>
                        <div class="">Jumbu, Pujehun District</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Travel Duration:</div>
                        <div class="">3:35:09</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Engine Hours:</div>
                        <div class="">3:11:05</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Initial Mileage:</div>
                        <div class="">0.00 km</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Final Mileage:</div>
                        <div class="">61.66 km</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Avg Speed:</div>
                        <div class="">60 km/h</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Max Speed:</div>
                        <div class="">120 km/h</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Fuel Consumed:</div>
                        <div class="">45 Litres</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Number/Duration of Stops:</div>
                        <div class="">3 Stops / 45 Mins</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Deviation of Main Routes:</div>
                        <div class="">None / On Track</div>
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