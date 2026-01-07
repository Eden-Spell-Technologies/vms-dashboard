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
include("../nav.php");

?>
<div id="dashboard-page">

    <?php
    include("../sidebar.php");
    ?>
    <div id="main-wrapper" class="p-4 p-md-5">

        <!-- incident and intervention -->
        <div id="incident-mgmt-view" class="fade-in">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div>
                    <h3 class="fw-bold">Incident & Intervention</h3>
                    <p class="text-muted">
                        Emergency reporting and field intervention management
                    </p>
                </div>
                <a class="btn secondary-color rounded-pill px-4" href="../index.php" title="Back">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
            </div>

            <div class="row g-4">
                <div class="col-md-4 col-lg-4">
                    <a class="vms-service-card text-decoration-none" href="./impoundment.php">
                        <div class="icon-wrapper bg-blue-light">
                            <i class="fas fa-gavel fa-lg"></i>
                        </div>
                        <h5>Impoundment</h5>
                        <p>Legal vehicle seizures and impound lot tracking</p>
                    </a>
                </div>

                <div class="col-md-4 col-lg-4">
                    <a class="vms-service-card text-decoration-none" href="./vehicle-breakdown.php">
                        <div class="icon-wrapper bg-orange-light">
                            <i class="fas fa-car-crash fa-lg"></i>
                        </div>
                        <h5>Vehicle Breakdown</h5>
                        <p>Mechanical failure reports and roadside assistance</p>
                    </a>
                </div>

                <div class="col-md-4 col-lg-4">
                    <a class="vms-service-card text-decoration-none" href="./illegal-detention.php">
                        <div class="icon-wrapper bg-yellow-light">
                            <i class="fas fa-handcuffs fa-lg"></i>
                        </div>
                        <h5>Illegal Detention</h5>
                        <p>Records of unauthorized custody by authorities</p>
                    </a>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="vms-service-card" onclick="showView('accident-detail-view', 'Accident Reporting')">
                        <div class="icon-wrapper bg-red-light" style="background-color: #fef2f2; color: #dc2626">
                            <i class="fas fa-ambulance fa-lg"></i>
                        </div>
                        <h5>Accident</h5>
                        <p>Emergency crash reporting and damage assessment</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="vms-service-card" onclick="showView('bugged-down-view', 'Vehicle Bugged Down')">
                        <div class="icon-wrapper bg-green-light">
                            <i class="fas fa-truck-pickup fa-lg"></i>
                        </div>
                        <h5>Vehicle Bugged Down</h5>
                        <p>Recovery for vehicles stuck in off-road terrain</p>
                    </div>
                </div>

                <div class="col-md-4 col-lg-4">
                    <div class="vms-service-card"
                        onclick="showView('incident-history-view', 'Complete Incident History')">
                        <div class="icon-wrapper bg-blue-light">
                            <i class="fas fa-history fa-lg"></i>
                        </div>
                        <h5>Incident History</h5>
                        <p>Archive of all past interventions and case resolutions</p>
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