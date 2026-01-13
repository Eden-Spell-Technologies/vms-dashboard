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
        <div id="goods-inspection-view" class="px-4 px-md-5 py-4">
            <div class="d-md-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <a class="btn secondary-hover rounded-circle me-3" href="../index.php" title="Back"
                        style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="fw-bold">On Board Goods Inspection</h3>
                </div>
                <div>
                    <button class="btn secondary-color rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#addInspectionModal">
                        + Add New Inspection
                    </button>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-primary text-white">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">124</h4>
                            <small class="">Inspections</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-success text-white">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">115</h4>
                            <small class="">Cleared / Safe</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-danger text-white">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">09</h4>
                            <small class="">Issues Found</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-xl-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-warning text-dark">
                            <i class="fas fa-truck-loading"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">05</h4>
                            <small class="">In Progress</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-white rounded-4 p-2 shadow-sm border">
                <div class="table-responsive p-2">
                    <table id="inspectionTable" class="table table-hover align-middle scrollable-tbody"
                        style="width:100%">
                        <thead class="table-light">
                            <tr>
                                <th>Fleet No</th>
                                <th>Route</th>
                                <th>Qty (D/O)</th>
                                <th>Cargo Secured</th>
                                <th>Inspection</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>VH-789</td>
                                <td>Karachi → Sukkur</td>
                                <td>300 / 500</td>

                                <td class="text-center">
                                    Yes
                                </td>
                                <td>Cleared</td>
                                <td class="text-center">
                                    <a href="./goods-inspection-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>VH-789</td>
                                <td>Karachi → Sukkur</td>
                                <td>300 / 500</td>

                                <td class="text-center">
                                    Yes
                                </td>
                                <td>Cleared</td>
                                <td class="text-center">
                                    <a href="./goods-inspection-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>VH-789</td>
                                <td>Karachi → Sukkur</td>
                                <td>300 / 500</td>

                                <td class="text-center">
                                    Yes
                                </td>
                                <td>Cleared</td>
                                <td class="text-center">
                                    <a href="./goods-inspection-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>VH-789</td>
                                <td>Karachi → Sukkur</td>
                                <td>300 / 500</td>

                                <td class="text-center">
                                    Yes
                                </td>
                                <td>Cleared</td>
                                <td class="text-center">
                                    <a href="./goods-inspection-form.php" class="btn btn-sm btn-light border">
                                        <i class="fas fa-eye"></i>
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

<div class="modal fade" id="addInspectionModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-clipboard-check me-2"></i>New Goods Inspection
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Fleet No</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="VH-789" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Date</label>
                        <input type="date" class="form-control border-dark shadow-sm"
                            value="<?php echo date('Y-m-d'); ?>" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Time</label>
                        <input type="time" class="form-control border-dark shadow-sm"
                            value="<?php echo date('H:i'); ?>" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Inspection Type</label>
                        <select class="form-select border-dark shadow-sm">
                            <option>Pre-Departure</option>
                            <option>En-Route</option>
                            <option>Arrival</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Inspection Location</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Enter Location" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Vehicle / Lorry Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="ABC-123" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Route (From – To)</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Karachi to Lahore" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Auto-filled" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver Phone / ID</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Auto-filled" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Goods Description</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Auto-filled" />
                    </div>

                    <div class="col-md-4">
                        <label class="small fw-bold mb-1">Waybill Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" />
                    </div>
                    <div class="col-md-4">
                        <label class="small fw-bold mb-1">Declared Quantity</label>
                        <input type="number" class="form-control border-dark shadow-sm" />
                    </div>
                    <div class="col-md-4">
                        <label class="small fw-bold mb-1">Observed Quantity</label>
                        <input type="number" class="form-control border-dark shadow-sm" />
                    </div>

                    <div class="col-md-4">
                        <label class="small fw-bold">Cargo Properly Secured?</label>
                        <select class="form-select border-dark shadow-sm py-1">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="small fw-bold">Goods Match Waybill?</label>
                        <select class="form-select border-dark shadow-sm py-1">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="small fw-bold">Unauthorised Items?</label>
                        <select class="form-select border-dark shadow-sm py-1">
                            <option>No</option>
                            <option>Yes</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="small fw-bold">Doors/Tarpaulin Secure?</label>
                        <select class="form-select border-dark shadow-sm py-1">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="small fw-bold">Visible Damage?</label>
                        <select class="form-select border-dark shadow-sm py-1">
                            <option>No</option>
                            <option>Yes</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-3">
                        <label class="small fw-bold">Inspection Status</label>
                        <select class="form-select border-dark shadow-sm py-1 fw-bold text-primary">
                            <option>Cleared</option>
                            <option>Not Cleared</option>
                        </select>
                    </div>

                    <div class="col-12 mt-3">
                        <label class="small fw-bold mb-1">Remarks</label>
                        <textarea class="form-control border-dark shadow-sm" rows="2"></textarea>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
                            Save Inspection Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>