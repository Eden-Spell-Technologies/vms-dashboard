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

                        <h3 class="fw-bold">Incident & Intervention</h3>
                    </div>

                    <div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-danger text-white">
                                <i class="fas fa-exclamation-triangle"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">04</h4>
                                <small class="">Total Incidents</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-success text-white">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">01</h4>
                                <small class="">Resolved</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-info text-white">
                                <i class="fas fa-spinner"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">03</h4>
                                <small class="">In Progress</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-dark text-white">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">03</h4>
                                <small class="">Security Alerts</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 p-2 shadow-sm border">

                    <div class="col-lg-12">
                        <div class="card border-0">
                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover align-middle text-center mb-0 global-datatable scrollable-tbody">
                                        <thead class="bg-light small fw-bold ">
                                            <tr>
                                                <th>Incident No.</th>
                                                <th>Vehicle Details</th>
                                                <th>Route</th>
                                                <th>Type of Incident</th>
                                                <th>Date of Incident</th>
                                                <th>Outcome</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="badge rounded-pill bg-danger px-3">01</span>
                                                </td>

                                                <td class="text-start">
                                                    <div class="fw-bold text-dark">HGV-789</div>
                                                    <small class="text-muted">Heavy Duty Truck</small>
                                                </td>

                                                <td>
                                                    <span class="small fw-semibold text-primary">KHI <i
                                                            class="fas fa-arrow-right mx-1"></i>
                                                        LHR</span>
                                                </td>

                                                <td>
                                                    <div
                                                        class="badge bg-warning-subtle text-warning border border-warning-subtle px-2">
                                                        Mechanical Failure
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="small fw-bold">20 Jan 2026</div>
                                                    <small class="text-muted">Time: 14:30</small>
                                                </td>

                                                <td class="">
                                                    <small class="d-block text-muted">
                                                        Repaired on-site, resumed trip
                                                    </small>
                                                </td>

                                                <td>
                                                    <span class="badge bg-success">Resolved</span>
                                                </td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><span class="badge rounded-pill bg-danger px-3">02</span></td>
                                                <td class="text-start">
                                                    <div class="fw-bold text-dark">LTV-452</div>
                                                    <small class="text-muted">Light Vehicle</small>
                                                </td>
                                                <td><span class="small fw-semibold text-primary">Local Route</span></td>
                                                <td>
                                                    <div
                                                        class="badge bg-danger-subtle text-danger border border-danger-subtle px-2">
                                                        Security Alert
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold">22 Jan 2026</div>
                                                </td>
                                                <td><small>Police Informed</small></td>
                                                <td><span class="badge bg-info">Confirmed</span></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge rounded-pill bg-danger px-3">02</span></td>
                                                <td class="text-start">
                                                    <div class="fw-bold text-dark">LTV-452</div>
                                                    <small class="text-muted">Light Vehicle</small>
                                                </td>
                                                <td><span class="small fw-semibold text-primary">Local Route</span></td>
                                                <td>
                                                    <div
                                                        class="badge bg-danger-subtle text-danger border border-danger-subtle px-2">
                                                        Security Alert
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold">22 Jan 2026</div>
                                                </td>
                                                <td><small>Police Informed</small></td>
                                                <td><span class="badge bg-info">Confirmed</span></td>
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><span class="badge rounded-pill bg-danger px-3">02</span></td>
                                                <td class="text-start">
                                                    <div class="fw-bold text-dark">LTV-452</div>
                                                    <small class="text-muted">Light Vehicle</small>
                                                </td>
                                                <td><span class="small fw-semibold text-primary">Local Route</span></td>
                                                <td>
                                                    <div
                                                        class="badge bg-danger-subtle text-danger border border-danger-subtle px-2">
                                                        Security Alert
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="small fw-bold">22 Jan 2026</div>
                                                </td>
                                                <td><small>Police Informed</small></td>
                                                <td><span class="badge bg-info">Confirmed</span></td>
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