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

        <!-- impoundment -->
        <div id="impoundment-detail-view" class="px-4 px-md-5 py-4">
            <div id="impound-table-view">
                <div class="d-md-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <a class="btn secondary-hover rounded-circle me-3" href="./incident-intervention.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
                            <i class="fas fa-arrow-left"></i>
                        </a>
                        <h3 class="fw-bold text-navy m-0">Impoundment</h3>
                    </div>
                    <button class="btn secondary-color rounded-pill px-4 shadow-sm" data-bs-toggle="modal"
                        data-bs-target="#impoundmentModal">
                        <i class="fas fa-plus me-2"></i> Add New Impoundment
                    </button>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-danger-subtle text-danger">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">14</h4>
                                <small class="">Current Impounds</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-warning-subtle text-warning">
                                <i class="fas fa-file-invoice"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">05</h4>
                                <small class="">Pending Tickets</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-success-subtle text-success">
                                <i class="fas fa-undo"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">28</h4>
                                <small class="">Released This Month</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 p-2 shadow-sm border ">
                    <div class="table-responsive p-2">
                        <table id="impoundmentTable" class="table table-hover align-middle w-100 scrollable-tbody">
                            <thead class="table-light text-secondary small text-uppercase">
                                <tr>
                                    <th class="ps-3">Reference No</th>
                                    <th>Driver Name</th>
                                    <th>Reason</th>
                                     <th>Authority</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-3">
                                       REF-108245
                                    </td>
                                    <td>Muhammad Ahmed</td>
                                    
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal">Obstruction</span>
                                    </td>
                                    <td>Traffic Police</td>
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./impoundment-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                       REF-108245
                                    </td>
                                    <td>Muhammad Ahmed</td>
                                    
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal">Obstruction</span>
                                    </td>
                                    <td>Traffic Police</td>
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./impoundment-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                       REF-108245
                                    </td>
                                    <td>Muhammad Ahmed</td>
                                    
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal">Obstruction</span>
                                    </td>
                                    <td>Traffic Police</td>
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./impoundment-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="ps-3">
                                       REF-108245
                                    </td>
                                    <td>Muhammad Ahmed</td>
                                    
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal">Obstruction</span>
                                    </td>
                                    <td>Traffic Police</td>
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./impoundment-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    <?php include("../footer.php"); ?>
    </div>
</div>

<!-- ================= MODAL ================= -->
<div class="modal fade" id="impoundmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold" id="vehicleDetailsModalLabel">
                    <i class="fas fa-truck-loading me-2"></i>Add Impoundment Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Reference Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="REF-108245" readonly />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Date of Impoundment</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="22 Dec 2025 | 11:30 AM" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Vehicle Plate / Model</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="VH-789 - Toyota Hilux" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Muhammad Ahmed" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Location / Yard</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Central Depot Yard - B4" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Authority Involved</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Traffic Police, RTO" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Reason of Impoundment</label>
                        <select class="form-select border-dark shadow-sm">
                            <option selected>Obstruction</option>
                            <option>Non-Payment or ticket</option>
                            <option>Illegal parking</option>
                            <option>Document issues</option>
                            <option>Vehicle safety</option>
                            <option>Others</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Vehicle Status / Location Packed</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Confirmed / Secured" />
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button"
                            class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white"
                            style="background-color: #your-secondary-color;">
                            Submit Impoundment Record
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

