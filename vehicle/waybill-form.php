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
    <div id="waybill-detail-view" class="fade-in">
        <div class="d-flex align-items-center mb-4">
            <a class="btn secondary-hover rounded-circle me-3" href="./waybill.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h3 class="fw-bold mb-0">Waybill & Tracking</h3>
        </div>
        <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
            <div class="row pt-4">
                <div class="col-12">
                    <div class="d-flex detail-row">
                        <div class="detail-label">Waybill Number:</div>
                        <div class="fw-bold" id="waybill-no">WB-5520</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Date:</div>
                        <div id="date">20 Dec 2025</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Sender Name:</div>
                        <div id="sender-name">Global Logistics Inc.</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Receiver Name:</div>
                        <div id="receiver-name">Green Energy Corp</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Pickup Location:</div>
                        <div id="pickup-location">Port Qasim, Karachi</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Delivery Location:</div>
                        <div id="delivery-location">Industrial Area, Lahore</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Description of Goods:</div>
                        <div id="goods-desc">Electronics / Solar Panels</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Quantity:</div>
                        <div id="total-quantity">45 Units / 4,500 KG</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Plate Number:</div>
                        <div id="vehicle-plate">VH-789 (ABC-123)</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver Name:</div>
                        <div id="driver-name">Ahmed Khan</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Motor Mate Name:</div>
                        <div id="motor-mate-name">Ali Raza</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Date Dispatched:</div>
                        <div id="date-dispatched">20 Dec 2025</div>
                    </div>

                    <div class="d-flex detail-row text-secondary">
                        <div class="detail-label">Last Checkpoint:</div>
                        <div id="last-checkpoint">Hyderabad Toll Plaza</div>
                    </div>

                    <div class="d-flex detail-row fw-bold text-success">
                        <div class="detail-label">Current Checkpoint:</div>
                        <div id="current-checkpoint">Moro Service Area</div>
                    </div>

                    <div class="d-flex detail-row text-primary">
                        <div class="detail-label">Next Checkpoint:</div>
                        <div id="next-checkpoint">Sukkur Interchange</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Remarks/Observations:</div>
                        <div id="remarks" class="fst-italic text-muted">
                            Vehicle running on schedule.
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