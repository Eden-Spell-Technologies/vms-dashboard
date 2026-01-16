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

        <!-- driver detail -->
        <div id="check-driver-view" class="px-4 px-md-5 py-4 ">
            <div id="driver-table-view">
                <div class="d-md-flex justify-content-between align-items-center mb-2">
                    <div class="d-flex align-items-center">
                        <a class="btn secondary-hover rounded-circle me-3" href="./report-analytics.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
                            <i class="fas fa-arrow-left"></i>
                        </a>

                        <h3 class="fw-bold">Trip Expences</h3>
                    </div>

                    <div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-primary text-white">
                                <i class="fas fa-road"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">4,856</h4>
                                <small class="">Total KM Covered</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-info text-white">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">04</h4>
                                <small class="">Active Waybills</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-success text-white">
                                <i class="fas fa-gas-pump"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">Full</h4>
                                <small class="">Avg Start Fuel</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-dark text-white">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">46.2k</h4>
                                <small class="">Last Odo Reading</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 p-2 shadow-sm border">

                    <div class="col-lg-12">
                        <div class="card border-0 b">
                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover align-middle text-center mb-0 global-datatable scrollable-tbody">
                                        <thead class="bg-light">
                                            <tr class="bg-light fw-bold small"
                                                style="letter-spacing: 0.5px;">
                                                <th class="ps-4">Trip Identity</th>
                                                <th>Driver / Mate Info</th>
                                                <th>Timing</th>
                                                <th>Distance (km)</th>
                                                <th>Fuel & Health</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-4">
                                                     <span class="small fw-semibold text-primary">KHI <i
                                                            class="fas fa-arrow-right mx-1"></i>
                                                        LHR</span>
                                                    <span
                                                        class="badge bg-primary-subtle text-primary extra-small fw-normal mt-1">Waybill:
                                                        #WB-7822</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 text-center" style="width: 30px;">
                                                            <i class="fas fa-user-circle text-secondary fa-lg"></i>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-bold small text-dark">Arshad Khan</p>
                                                            <p class="text-muted extra-small mb-0">Mate: Ali Raza</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="extra-small text-dark fw-bold">D: <span
                                                            class="fw-normal text-muted">15 Jan, 09:00</span></div>
                                                    <div class="extra-small text-dark fw-bold">A: <span
                                                            class="fw-normal text-muted">16 Jan, 21:00</span></div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-light text-dark fw-bold border">1,210
                                                        km</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-success extra-small fw-bold">Fuel: 450L /
                                                            440L</span>
                                                        <span class="text-muted extra-small">Odo: 45,600 km</span>
                                                    </div>
                                                </td>

                                                <td class="text-center pe-4">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td class="ps-4">
                                                     <span class="small fw-semibold text-primary">KHI <i
                                                            class="fas fa-arrow-right mx-1"></i>
                                                        LHR</span>
                                                    <span
                                                        class="badge bg-primary-subtle text-primary extra-small fw-normal mt-1">Waybill:
                                                        #WB-7822</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 text-center" style="width: 30px;">
                                                            <i class="fas fa-user-circle text-secondary fa-lg"></i>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-bold small text-dark">Arshad Khan</p>
                                                            <p class="text-muted extra-small mb-0">Mate: Ali Raza</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="extra-small text-dark fw-bold">D: <span
                                                            class="fw-normal text-muted">15 Jan, 09:00</span></div>
                                                    <div class="extra-small text-dark fw-bold">A: <span
                                                            class="fw-normal text-muted">16 Jan, 21:00</span></div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-light text-dark fw-bold border">1,210
                                                        km</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-success extra-small fw-bold">Fuel: 450L /
                                                            440L</span>
                                                        <span class="text-muted extra-small">Odo: 45,600 km</span>
                                                    </div>
                                                </td>

                                                <td class="text-center pe-4">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td class="ps-4">
                                                     <span class="small fw-semibold text-primary">KHI <i
                                                            class="fas fa-arrow-right mx-1"></i>
                                                        LHR</span>
                                                    <span
                                                        class="badge bg-primary-subtle text-primary extra-small fw-normal mt-1">Waybill:
                                                        #WB-7822</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 text-center" style="width: 30px;">
                                                            <i class="fas fa-user-circle text-secondary fa-lg"></i>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-bold small text-dark">Arshad Khan</p>
                                                            <p class="text-muted extra-small mb-0">Mate: Ali Raza</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="extra-small text-dark fw-bold">D: <span
                                                            class="fw-normal text-muted">15 Jan, 09:00</span></div>
                                                    <div class="extra-small text-dark fw-bold">A: <span
                                                            class="fw-normal text-muted">16 Jan, 21:00</span></div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-light text-dark fw-bold border">1,210
                                                        km</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-success extra-small fw-bold">Fuel: 450L /
                                                            440L</span>
                                                        <span class="text-muted extra-small">Odo: 45,600 km</span>
                                                    </div>
                                                </td>

                                                <td class="text-center pe-4">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                             <tr>
                                                <td class="ps-4">
                                                    <span class="small fw-semibold text-primary">KHI <i
                                                            class="fas fa-arrow-right mx-1"></i>
                                                        LHR</span>
                                                    <span
                                                        class="badge bg-primary-subtle text-primary extra-small fw-normal mt-1">Waybill:
                                                        #WB-7822</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="me-2 text-center" style="width: 30px;">
                                                            <i class="fas fa-user-circle text-secondary fa-lg"></i>
                                                        </div>
                                                        <div>
                                                            <p class="mb-0 fw-bold small text-dark">Arshad Khan</p>
                                                            <p class="text-muted extra-small mb-0">Mate: Ali Raza</p>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="extra-small text-dark fw-bold">D: <span
                                                            class="fw-normal text-muted">15 Jan, 09:00</span></div>
                                                    <div class="extra-small text-dark fw-bold">A: <span
                                                            class="fw-normal text-muted">16 Jan, 21:00</span></div>
                                                </td>

                                                <td>
                                                    <span class="badge bg-light text-dark fw-bold border">1,210
                                                        km</span>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span class="text-success extra-small fw-bold">Fuel: 450L /
                                                            440L</span>
                                                        <span class="text-muted extra-small">Odo: 45,600 km</span>
                                                    </div>
                                                </td>

                                                <td class="text-center pe-4">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <?php include("../footer.php"); ?>
    </div>
</div>