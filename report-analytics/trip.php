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
                <div class="d-md-flex justify-content-between align-items-center mb-4">
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

                <div class="row g-3 mb-4">
                    <div class="col-md-3">
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

                    <div class="col-md-3">
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

                    <div class="col-md-3">
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

                    <div class="col-md-3">
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
                                        <thead class="bg-light small fw-bold">
                                            <tr>
                                                <th>Route</th>
                                                <th>Waybill</th>
                                                <th>Driver Info</th>
                                                <th>Mate Info</th>
                                                <th>Departure</th>
                                                <th>Arrival</th>
                                                <th>Distance</th>
                                                <th>Fuel (S/E)</th>
                                                <th>Odometer</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold text-primary">KHI <i
                                                        class="fas fa-arrow-right mx-1"></i>
                                                    LHR</td>
                                                <td><span class="badge bg-light text-dark border">#WBL-99021</span></td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Ahmed</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Bilal</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-danger">08:00 AM</div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-success">10:00 PM</div>
                                                </td>
                                                <td>1,214 km</td>
                                                <td>Full / 1/4</td>
                                                <td><small>45k / 46.2k</small></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-primary">KHI <i
                                                        class="fas fa-arrow-right mx-1"></i>
                                                    LHR</td>
                                                <td><span class="badge bg-light text-dark border">#WBL-99021</span></td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Ahmed</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Bilal</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-danger">08:00 AM</div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-success">10:00 PM</div>
                                                </td>
                                                <td>1,214 km</td>
                                                <td>Full / 1/4</td>
                                                <td><small>45k / 46.2k</small></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-primary">KHI <i
                                                        class="fas fa-arrow-right mx-1"></i>
                                                    LHR</td>
                                                <td><span class="badge bg-light text-dark border">#WBL-99021</span></td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Ahmed</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Bilal</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-danger">08:00 AM</div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-success">10:00 PM</div>
                                                </td>
                                                <td>1,214 km</td>
                                                <td>Full / 1/4</td>
                                                <td><small>45k / 46.2k</small></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-primary">KHI <i
                                                        class="fas fa-arrow-right mx-1"></i>
                                                    LHR</td>
                                                <td><span class="badge bg-light text-dark border">#WBL-99021</span></td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Ahmed</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td class="">
                                                    <div class="small fw-bold">M. Bilal</div>
                                                    <small class="text-muted">0300-1234567</small>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-danger">08:00 AM</div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold text-success">10:00 PM</div>
                                                </td>
                                                <td>1,214 km</td>
                                                <td>Full / 1/4</td>
                                                <td><small>45k / 46.2k</small></td>
                                                <td>
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