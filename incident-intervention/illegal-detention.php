<?php
session_start();
if (!isset($_SESSION['user'])) {
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


        <!-- illegal -->
        <div id="detention-detail-view" class="fade-in">
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
                    <h3 class="fw-bold">Illegal Detention</h3>
                </div>

                <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
                    data-bs-target="#illegalDetentionModal">
                    + Add New Detention
                </button>
            </div>

            <div class="row g-3 mb-4">
                <div class="col-md-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-danger text-white">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">02</h4>
                            <small class="">Active Cases</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-primary text-white">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">15</h4>
                            <small class="">Total Reported</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-success text-white">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">13</h4>
                            <small class="">Resolved/Released</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-card shadow-sm">
                        <div class="icon-box bg-warning text-dark">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <div>
                            <h4 class="fw-bold m-0">01</h4>
                            <small class="">Legal Review</small>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bg-white rounded-4 p-4 shadow-sm">
                <h5 class="fw-bold mb-3">Detention Logs</h5>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Case ID</th>
                                <th>Vehicle</th>
                                <th>Agency</th>
                                <th>Status</th>
                                <th>Resolution Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#CASE-5590</td>
                                <td>VH-112</td>
                                <td>Traffic Police</td>
                                <td><span class="badge bg-danger">Detained</span></td>
                                <td>--</td>
                                <td>
                                    <a class="btn btn-sm btn-light border" href="./illegal-detention-form.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>#CASE-5582</td>
                                <td>VH-456</td>
                                <td>Customs</td>
                                <td><span class="badge bg-success">Released</span></td>
                                <td>15 Dec 2025</td>
                                <td>
                                    <a class="btn btn-sm btn-light border" href="./illegal-detention-form.php">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ================= MODAL ================= -->
<div class="modal fade" id="illegalDetentionModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-file-invoice me-2"></i>Add Detention Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Date</label>
                        <input type="date" class="form-control border-dark shadow-sm" value="2025-12-22" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Vehicle Plate Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="VH-112" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Enter Driver Name" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Location</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            value="Ravi Toll Plaza, M-2 North" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Detaining Authority / Person</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            value="Traffic Police (Insp. Ahmed Ali)" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Duration of Detention</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="e.g. 5 Hours / 2 Days" />
                    </div>

                    <div class="col-12">
                        <label class="small fw-bold mb-1">Remarks / Comments</label>
                        <textarea class="form-control border-dark shadow-sm" rows="3"
                            placeholder="Enter any additional remarks...">Alleged Overloading (Under Dispute)</textarea>
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button"
                            class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white">
                            Submit Detention Details
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("../footer.php"); ?>