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
include("../nav.php");

?>
<div id="dashboard-page">

    <?php
    include("../sidebar.php");
    ?>
    <div id="main-wrapper" class="p-4 p-md-5">
        <div id="vehicle-detail-view" class="fade-in">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-detail.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Vehicle Details</h3>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="container-fluid bg-white p-0">
                    <div class="d-flex detail-row">
                        <div class="detail-label">Fleet No:</div>
                        <div>VH-789</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Manager Name:</div>
                        <div>John Doe</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Manager Email:</div>
                        <div>john.doe@example.com</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Make/Model:</div>
                        <div>Volkswagen Voyage</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Registration:</div>
                        <div>KA-01-AB-1234</div>
                    </div>
                    
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Type:</div>
                        <div>Truck</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Status (Serviceable or Unserviceable):</div>
                        <div><span class="status-badge">Active</span></div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Assigned Driver:</div>
                        <div>John Doe (DRV-001)</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Last Service Date:</div>
                        <div>15 Jan 2024</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Next Service Due:</div>
                        <div>15 Mar 2024</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Base / Site: </div>
                        <div>Enugu Depot</div>
                    </div>
                    <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Fuel Level:</div>
                    <div>85%</div>
                </div> -->
                    <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Mileage:</div>
                    <div>85,250 km</div>
                </div> -->
                    <div class="d-flex detail-row">
                        <div class="detail-label">Client/Vehicle Owner:</div>
                        <div>Rahul Sharma</div>
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