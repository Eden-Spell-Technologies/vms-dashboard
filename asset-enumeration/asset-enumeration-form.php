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
                <a class="btn secondary-hover rounded-circle me-3" href="./asset-enumeration.php" style="
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ddd;
          ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Asset Enumeration</h3>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="row">
                    <div class="col-xl-7">
                        <div class="container-fluid bg-white p-0">

                            <div class="d-flex detail-row">
                                <div class="detail-label">Fleet light Vehicles</div>
                                <div class="">Pickups</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Trucks / HGVS</div>
                                <div class="">10-wheelers</div>
                            </div>


                            <div class="d-flex detail-row">
                                <div class="detail-label">Heavy Equipment & Machinery</div>
                                <div>Forklifts</div>
                            </div>
                            <div class="d-flex detail-row">
                                <div class="detail-label">Plant & Industrial Assets</div>
                                <div class="">Boiler machines</div>
                            </div>


                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="text-center p-2 ">
                            <img src="../img/asset.png" alt="Truck Image" class="img-fluid"
                                style="max-height: 200px; object-fit: contain;">
                        </div>
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