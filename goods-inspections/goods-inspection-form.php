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
                <a class="btn secondary-hover rounded-circle me-3" href="./goods-inspection.php" style="
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
          ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Goods Inspection Report</h3>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="container-fluid bg-white p-0">

                    <div class="d-flex detail-row">
                        <div class="detail-label">Fleet No</div>
                        <div class="">VH-789</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Date & Time</div>
                        <div class="">2026-01-07 | 11:30 AM</div>
                    </div>
                    

                    <div class="d-flex detail-row">
                        <div class="detail-label">Inspection Location:</div>
                        <div>Central Warehouse - Yard 1</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle/Lorry No:</div>
                        <div class="">ABC-1234</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Route:</div>
                        <div>Karachi → Lahore</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver Name:</div>
                        <div>Muhammad Ahmed</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver Phone / ID:</div>
                        <div>+92 300 1234567</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Goods Description:</div>
                        <div>Industrial Electronics</div>
                    </div>
                

                    <div class="d-flex detail-row">
                        <div class="detail-label">Waybill Number:</div>
                        <div class="">WBL-99201</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Declared Quantity:</div>
                        <div>500 </div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Observed Quantity:</div>
                        <div>500 </div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Cargo Secured:</div>
                        <div class="">Yes</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Goods Match Waybill:</div>
                        <div class="">Yes</div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-flex detail-row">
                            <div class="detail-label">Unauthorised Items:</div>
                            <div class="">None</div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Doors/Tarpaulin:</div>
                            <div class="">Secure</div>
                        </div>
                        <div class="d-flex detail-row">
                            <div class="detail-label">Visible Damage:</div>
                            <div class="">No</div>
                        </div>
                    </div>
                

            
                <div class="d-flex detail-row">
                    <div class="detail-label mb-1">Remarks:</div>
                    <div class="p-2 bg-light rounded small italic text-muted">
                        All seals are intact. Cargo properly distributed and lashed. Verified by supervisor.
                    </div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label mb-1">Overall Inspection Status:</div>
                    <span class="">Cleared</span>
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