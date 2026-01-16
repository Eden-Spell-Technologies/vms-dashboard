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
                <div class="d-md-flex justify-content-between align-items-center mb-3">
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

                        <h3 class="fw-bold">Key Performance Indicators</h3>
                    </div>

                    <div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-success text-white">
                                <i class="fas fa-boxes"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">04</h4>
                                <small class="">Assets Audited</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-danger text-white">
                                <i class="fas fa-biohazard"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">04</h4>
                                <small class="">Unauthorize Cargo</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-warning text-dark">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">180k</h4>
                                <small class="">Total Audit Cost</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-info text-white">
                                <i class="fas fa-file-signature"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">100%</h4>
                                <small class="">Confirmation Rate</small>
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
                                        class="table table-hover align-middle mb-0 global-datatable scrollable-tbody">
                                        <thead class="bg-light small fw-bold text-center">
                                            <tr>
                                                <th>Layer 2 Category</th>
                                                <th>Unauthorized Cargo</th>
                                                <th>Audit Details</th>
                                                <th>KPI Cost</th>
                                                <th>Confirmation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-center">
                                            <tr>
                                                <td class="">
                                                    <div class="fw-bold text-success">Trucks / HGVS</div>
                                                    <small class="text-muted">Plate: ABC-1234</small>
                                                </td>
                                                <td>
                                                    <div class="badge bg-danger-subtle text-danger border p-2">
                                                        Electronic Scrap Detected
                                                    </div>
                                                </td>
                                                <td class="small">
                                                    <strong>Loc:</strong> Warehouse<br>
                                                    <strong>By:</strong> Team A
                                                </td>
                                                <td class="text-center">
                                                    <div class="fw-bold">PKR 45,000</div>
                                                    <small class="text-muted">Related Cost</small>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i>
                                                        Confirmed</span>
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
                                                <td class="">
                                                    <div class="fw-bold text-success">Trucks / HGVS</div>
                                                    <small class="text-muted">Plate: ABC-1234</small>
                                                </td>
                                                <td>
                                                    <div class="badge bg-danger-subtle text-danger border p-2">
                                                        Electronic Scrap Detected
                                                    </div>
                                                </td>
                                                <td class="small">
                                                    <strong>Loc:</strong> Warehouse<br>
                                                    <strong>By:</strong> Team A
                                                </td>
                                                <td class="text-center">
                                                    <div class="fw-bold">PKR 45,000</div>
                                                    <small class="text-muted">Related Cost</small>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i>
                                                        Confirmed</span>
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
                                                <td class="">
                                                    <div class="fw-bold text-success">Trucks / HGVS</div>
                                                    <small class="text-muted">Plate: ABC-1234</small>
                                                </td>
                                                <td>
                                                    <div class="badge bg-danger-subtle text-danger border p-2">
                                                        Electronic Scrap Detected
                                                    </div>
                                                </td>
                                                <td class="small">
                                                    <strong>Loc:</strong> Warehouse<br>
                                                    <strong>By:</strong> Team A
                                                </td>
                                                <td class="text-center">
                                                    <div class="fw-bold">PKR 45,000</div>
                                                    <small class="text-muted">Related Cost</small>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i>
                                                        Confirmed</span>
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
                                                <td class="">
                                                    <div class="fw-bold text-success">Trucks / HGVS</div>
                                                    <small class="text-muted">Plate: ABC-1234</small>
                                                </td>
                                                <td>
                                                    <div class="badge bg-danger-subtle text-danger border p-2">
                                                        Electronic Scrap Detected
                                                    </div>
                                                </td>
                                                <td class="small">
                                                    <strong>Loc:</strong> Warehouse<br>
                                                    <strong>By:</strong> Team A
                                                </td>
                                                <td class="text-center">
                                                    <div class="fw-bold">PKR 45,000</div>
                                                    <small class="text-muted">Related Cost</small>
                                                </td>
                                                <td class="text-center">
                                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i>
                                                        Confirmed</span>
                                                </td>
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