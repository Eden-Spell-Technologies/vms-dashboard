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

        <!-- breakdown -->
        <div id="breakdown-detail-view" class="px-4 px-md-5 py-4">
            <div id="breakdown-table">
                <div class="d-md-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-start">
                        <a class="btn secondary-hover rounded-circle me-3" href="./incident-intervention.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
                            <i class="fas fa-arrow-left"></i>
                        </a>

                        <div>
                            <h3 class="fw-bold text-navy">Vehicle Breakdown</h3>
                            <p class="text-muted small">
                                Log mechanical failures and request recovery support
                            </p>
                        </div>
                    </div>

                    <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
                        data-bs-target="#addBreakdownModal">
                        + Log New Breakdown
                    </button>
                </div>

                <div class="row g-3 mb-2">
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm">
                            <div class="icon-box bg-primary-subtle text-primary">
                                <i class="fas fa-wrench"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">03</h4>
                                <small class="">Ongoing Repairs</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm">
                            <div class="icon-box bg-info-subtle text-info">
                                <i class="fas fa-truck-pickup"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">02</h4>
                                <small class="">Towing Assigned</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="stat-card shadow-sm">
                            <div class="icon-box bg-success-subtle text-success">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">12</h4>
                                <small class="">Fixed Today</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 p-2 shadow-sm border">
                    <div class="table-responsive p-2">
                        <table id="breakdownTable" class="table table-hover align-middle w-100 scrollable-tbody">
                            <thead class="table-light text-muted small text-uppercase">
                                <tr>
                                    <th>Vehicle ID</th>
                                    <th>Driver Name</th>
                                    <th>Location</th>
                                    <th>Breakdown Type</th>            
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        VH-789
                                    </td>
                                    <td>
                                       Ali Raza
                                    </td>
                                    <td>
                                        <small><i class="fas fa-map-marker-alt text-danger me-1"></i> M-2 Motorway, Mile
                                            45</small>
                                    </td>
                                    <td>
                                        Gas Cut
                                    </td>
                                   
                                    
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm"
                                            href="./vehicle-breakdown-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>

                               <tr>
                                    <td>
                                        VH-899
                                    </td>
                                    <td>
                                       John Deo
                                    </td>
                                    <td>
                                        <small><i class="fas fa-map-marker-alt text-danger me-1"></i> M-2 Motorway, Mile
                                            45</small>
                                    </td>
                                    <td>
                                        Clutch defect
                                    </td>
                                   
                                    
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm"
                                            href="./vehicle-breakdown-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>

                                 <tr>
                                    <td>
                                        VH-899
                                    </td>
                                    <td>
                                       John Deo
                                    </td>
                                    <td>
                                        <small><i class="fas fa-map-marker-alt text-danger me-1"></i> M-2 Motorway, Mile
                                            45</small>
                                    </td>
                                    <td>
                                        Clutch defect
                                    </td>
                                   
                                    
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm"
                                            href="./vehicle-breakdown-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        VH-899
                                    </td>
                                    <td>
                                       John Deo
                                    </td>
                                    <td>
                                        <small><i class="fas fa-map-marker-alt text-danger me-1"></i> M-2 Motorway, Mile
                                            45</small>
                                    </td>
                                    <td>
                                        Clutch defect
                                    </td>
                                   
                                    
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm"
                                            href="./vehicle-breakdown-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        VH-899
                                    </td>
                                    <td>
                                       John Deo
                                    </td>
                                    <td>
                                        <small><i class="fas fa-map-marker-alt text-danger me-1"></i> M-2 Motorway, Mile
                                            45</small>
                                    </td>
                                    <td>
                                        Clutch defect
                                    </td>
                                   
                                    
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm"
                                            href="./vehicle-breakdown-form.php">
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
<div class="modal fade" id="addBreakdownModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold" id="vehicleDetailsModalLabel">
                    <i class="fas fa-tools me-2"></i>Add Breakdown Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Vehicle Plate Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="VH-789 (Toyota Hilux)" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Muhammad Ahmed" />
                    </div>

                    <div class="col-md-12">
                        <label class="small fw-bold mb-1">Location</label>
                        <div class="input-group">
                            <span class="input-group-text border-dark bg-white"><i
                                    class="fas fa-map-marker-alt"></i></span>
                            <input type="text" class="form-control border-dark shadow-sm"
                                value="M-5 Motorway (Near Sukkur)" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Breakdown Type</label>
                        <select class="form-select border-dark shadow-sm">
                            <option value="" disabled>Select Type</option>
                            <option>Gas Cut</option>
                            <option>Injector defect</option>
                            <option>Axle defect</option>
                            <option>Oil seal defect</option>
                            <option>Clutch defect</option>
                            <option>Kick starter defect</option>
                            <option>Gear selector defect</option>
                            <option selected>Others (Define below)</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Action Taken</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            value="Recovery Vehicle Dispatched" />
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button"
                            class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white">
                            Submit Breakdown Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

