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

    <!-- vehicle management -->
    <div id="vehicle-mgmt-view" class="fade-in ">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div>
                <h3 class="fw-bold">Vehicle Operations</h3>
                <p class="text-muted">Select an option to view details</p>
            </div>
            <a href="../index.php">
                <button class="btn secondary-color rounded-pill px-3"
                title="Back">
                    <i class="fas fa-arrow-left"></i> Back
                </button>
            </a>
        </div>
        <div class="row g-4">
            <div class="col-md-4 col-lg-4">
                <a class="vms-service-card text-decoration-none" href="./vehicle-detail.php">
                    <div class="icon-wrapper bg-blue-light">
                        <i class="fas fa-info-circle fa-lg"></i>
                    </div>
                    <h5>Vehicle Details</h5>
                    <p>Detailed vehicle information and history logs</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-4">
                <a class="vms-service-card text-decoration-none" href="./driver-detail.php">
                    <div class="icon-wrapper bg-green-light">
                        <i class="fas fa-user-tie fa-lg"></i>
                    </div>
                    <h5>Driver Details</h5>
                    <p>Driver profiles, licenses and route assignments</p>
             </a>
            </div>

            <div class="col-md-4 col-lg-4">
                <a class="vms-service-card text-decoration-none" href="./trip-route.php">
                    <div class="icon-wrapper bg-yellow-light">
                        <i class="fas fa-route fa-lg"></i>
                    </div>
                    <h5>Trip & Route</h5>
                    <p>Plan and track delivery routes and history</p>
                </a>
            </div>

            <div class="col-md-4 col-lg-4">
                <a class="vms-service-card text-decoration-none" href="./waybill.php">
                    <div class="icon-wrapper bg-orange-light">
                        <i class="fas fa-file-invoice-dollar fa-lg"></i>
                    </div>
                    <h5>Waybill & Tracking</h5>
                    <p>Shipment documentation and billing records</p>
</a>
            </div>

            <div class="col-md-4 col-lg-4">
                <a class="vms-service-card text-decoration-none" href="./service.php">
                    <div class="icon-wrapper bg-blue-light">
                        <i class="fas fa-clock-rotate-left fa-lg"></i>
                    </div>
                    <h5>Service / Maintenance</h5>
                    <p>Maintenance logs and service schedules</p>
</a>
            </div>
        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>