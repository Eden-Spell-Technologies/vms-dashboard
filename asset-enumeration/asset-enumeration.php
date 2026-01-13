<?php
session_start();
if (!isset($_SESSION['user'])) {
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
        <div id="asset-enumeration" class="px-4 px-md-5 py-4">
            <div class="d-md-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <a class="btn secondary-hover rounded-circle me-3" href="../index.php" title="Back"
                        style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="fw-bold">Asset Enumeration</h3>
                </div>
                <div>
                    <button class="btn secondary-color rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#addAssetModal">
                        + Add Asset Enumeration
                    </button>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm border-0 rounded-4 p-3 d-flex align-items-center">
                        <div class="icon-box bg-primary text-white me-3"
                            style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-car"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0 ">45</h4> <small class="">Fleet Light Vehicles</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm border-0 rounded-4 p-3 d-flex align-items-center">
                        <div class="icon-box bg-success text-white me-3"
                            style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0 ">28</h4> <small class="">Trucks / HGVS</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm border-0 rounded-4 p-3 d-flex align-items-center">
                        <div class="icon-box bg-danger text-white me-3"
                            style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-tools"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0 ">12</h4> <small class="">Heavy Machinery</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm border-0 rounded-4 p-3 d-flex align-items-center">
                        <div class="icon-box bg-warning text-dark me-3"
                            style="width: 50px; height: 50px; border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0 ">07</h4> <small class="">Industrial Assets</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-white rounded-4 p-2 shadow-sm border">
                <div class="table-responsive p-2">
                    <table id="assetTable" class="table table-hover align-middle scrollable-tbody" style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Fleet light Vehicles</th>
                                <th>Trucks / HGVS</th>
                                <th>Heavy Equipment & Machinery</th>
                                <th>Plant & Industrial Assets</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Vans</td>
                                <td>Trailers</td>
                                <td>Excavators</td>
                                <td>Generators</td>
                                <td class="text-center">
                                    <a href="./asset-enumeration-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye me-1"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pickups</td>
                                <td>10-wheelers</td>
                                <td>Forklifts</td>
                                <td>Boiler machines</td>
                                <td class="text-center">
                                    <a href="./asset-enumeration-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye me-1"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pickups</td>
                                <td>10-wheelers</td>
                                <td>Forklifts</td>
                                <td>Boiler machines</td>
                                <td class="text-center">
                                    <a href="./asset-enumeration-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye me-1"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Pickups</td>
                                <td>10-wheelers</td>
                                <td>Forklifts</td>
                                <td>Boiler machines</td>
                                <td class="text-center">
                                    <a href="./asset-enumeration-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye me-1"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include("../footer.php"); ?>
    </div>
</div>

<div class="modal fade" id="addAssetModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-clipboard-check me-2"></i>Add Asset Enumeration
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Fleet light Vehicles</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Enter Fleet light Vehicles" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Trucks / HGVS</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Enter Trucks / HGVS" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Heavy Equipment & Machinery</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Enter Heavy Equipment & Machinery" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Plant & Industrial Assets</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Enter Plant & Industrial Assets" />
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
                            Save Asset Enumeration
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>