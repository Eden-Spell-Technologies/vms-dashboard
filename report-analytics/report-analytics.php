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
    <div id="main-wrapper" class="">
        <?php
        include("../nav.php");

        ?>

        <!-- vehicle management -->
        <div id="report" class="px-4 px-md-5 py-4">
            <!-- <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h3 class="fw-bold">Vehicle Operations</h3>
                    <p class="text-muted">Select an option to view details</p>
                </div>
                <a href="../index.php">
                    <button class="btn secondary-color rounded-pill px-3" title="Back">
                        <i class="fas fa-arrow-left"></i> Back
                    </button>
                </a>
            </div> -->
            <div class="row g-4">
                <div class="col-md-6 col-xl-4">
                    <a class="vms-service-card text-decoration-none" href="./total-vehicle.php">
                        <div class="icon-wrapper  bg-blue-light">
                            <i class="fas fa-truck fa-lg"></i>
                        </div>
                        <h5>Total Vehicle</h5>
                        <p>Complete fleet inventory and operational status overview</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="vms-service-card text-decoration-none" href="./trip.php">
                        <div class="icon-wrapper bg-orange-light">
                            <i class="fas fa-gas-pump fa-lg"></i>
                        </div>
                        <h5>Trip Expenses</h5>
                        <p>Track fuel consumption and miscellaneous trip costs</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="vms-service-card text-decoration-none" href="./incident.php">
                        <div class="icon-wrapper bg-yellow-light" >
                            <i class="fas fa-exclamation-triangle fa-lg"></i>
                        </div>
                        <h5>Incident & Intervention</h5>
                        <p>Emergency logs, breakdown reports and on-road support</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="vms-service-card text-decoration-none" href="./kpi-reports.php">
                        <div class="icon-wrapper bg-orange-light">
                            <i class="fas fa-chart-line fa-lg"></i>
                        </div>
                        <h5>Key Performance Indicators</h5>
                        <p>Analytics, fuel efficiency, and driver safety performance</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>