<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}

// Ek folder peeche (root par) jaane ke liye ../ use karein
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

        <!-- incident and intervention -->
        <div id="incident-mgmt-view" class="px-4 px-md-5 py-4">
            <!-- <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h3 class="fw-bold">Incident & Intervention</h3>
                    <p class="text-muted">
                        Emergency reporting and field intervention management
                    </p>
                </div>
                <a class="btn secondary-color rounded-pill px-4" href="../index.php" title="Back">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div> -->

            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./impoundment.php">
                        <div class="icon-wrapper bg-blue-light">
                            <i class="fas fa-gavel fa-lg"></i>
                        </div>
                        <h5>Impoundment</h5>
                        <p>Legal vehicle seizures and impound lot tracking</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./vehicle-breakdown.php">
                        <div class="icon-wrapper bg-orange-light">
                            <i class="fas fa-car-crash fa-lg"></i>
                        </div>
                        <h5>Vehicle Breakdown</h5>
                        <p>Mechanical failure reports and roadside assistance</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./illegal-detention.php">
                        <div class="icon-wrapper bg-yellow-light">
                            <i class="fas fa-handcuffs fa-lg"></i>
                        </div>
                        <h5>Illegal Detention</h5>
                        <p>Records of unauthorized custody by authorities</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./accident.php">
                        <div class="icon-wrapper bg-red-light" style="background-color: #fef2f2; color: #dc2626">
                            <i class="fas fa-ambulance fa-lg"></i>
                        </div>
                        <h5>Accident</h5>
                        <p>Emergency crash reporting and damage assessment</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./vehicle-bugged-down.php">
                        <div class="icon-wrapper bg-green-light">
                            <i class="fas fa-truck-pickup fa-lg"></i>
                        </div>
                        <h5>Vehicle Bugged Down</h5>
                        <p>Recovery for vehicles stuck in off-road terrain</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./route-diversion.php">
                        <div class="icon-wrapper bg-blue-light">
                            <i class="fas fa-route fa-lg"></i>
                        </div>
                        <h5>Route Diversion</h5>
                        <p>Manage and track temporary route changes and traffic diversions</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./driver-misconduct.php">
                        <div class="icon-wrapper bg-orange-light">
                            <i class="fas fa-user-slash fa-lg"></i>
                        </div>
                        <h5>Driver Misconduct</h5>
                        <p>Report and track violations, behavioral issues, or policy breaches</p>
                    </a>
                </div>

                <div class="col-md-6 col-xl-3">
                    <a class="vms-service-card text-decoration-none" href="./illegal-haulage.php">
                        <div class="icon-wrapper bg-yellow-light">
                            <i class="fas fa-boxes fa-lg "></i>
                        </div>
                        <h5>Illegal Haulage</h5>
                        <p>Monitor unauthorized cargo transportation and axle load violations</p>
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