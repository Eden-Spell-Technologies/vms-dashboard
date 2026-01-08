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
        <div id="driver-misconduct">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./illegal-haulage.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Illegal Haulage</h3>
            </div>
            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
                <div class="container-fluid bg-white p-0">
                    <div class="d-flex detail-row">
                        <div class="detail-label">Date:</div>
                        <div>22 Dec 2025 | 11:30 AM</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Plate Number:</div>
                        <div>VH-789</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver Name:</div>
                        <div>Muhammad Ahmed</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Location:</div>
                        <div>Check Post Alpha - Route 4</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Unauthorized Cargo Description:</div>
                        <div class="">Unlisted Commercial Electronics</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Discovered By:</div>
                        <div>Officer Zeeshan / Team B</div>
                    </div>

                    <div class="d-flex detail-row border-bottom-0">
                        <div class="detail-label">Remarks / Comments:</div>
                        <div class="fst-italic text-muted">
                            Confirmed - Unauthorized cargo detected during routine inspection. Vehicle impounded for
                            further verification.
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