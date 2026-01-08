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
        <div id="accident" class="">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./accident.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Accident Report</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">

                <div class="container-fluid bg-white p-0">
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Plate Number:</div>
                        <div class="">VH-789</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver Name:</div>
                        <div>Muhammad Bilal (DRV-042)</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Location:</div>
                        <div>Near Sahiwal Bypass, N-5 Highway</div>
                    </div>

                    <div class="d-flex detail-row bg-light py-2">
                        <div class="detail-label fw-bold">Nature of Accident:</div>
                        <div class="">Loaded</div>
                    </div>

                    <div class="ps-4 border-start border-3 ms-2">
                        <div class="d-flex detail-row">
                            <div class="detail-label">Status of Driver & Motor Mate:</div>
                            <div class="r">Injured (Moderate)</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Content (Goods Type):</div>
                            <div>FMCG / Pharmaceuticals</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label ">Damage Extend:</div>
                            <div>
                                Product Severe Damage / Product Collapse
                                <small class="d-block ">- Impacted by third party</small>
                            </div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Fatality Status:</div>
                            <div>No</div>
                        </div>

                        <div class="d-flex detail-row">
                            <div class="detail-label">Nature of Accident Type:</div>
                            <div>Hit by a third party</div>
                        </div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Damage / Injury (Yes/No):</div>
                        <div class="fw-bold">Yes</div>
                    </div>

                    <div class="d-flex detail-row border-bottom-0">
                        <div class="detail-label">Action / Comments:</div>
                        <div class="fst-italic">
                            Police FIR registered (#FIR-990). Insurance claim in process. Vehicle towed to workshop.
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