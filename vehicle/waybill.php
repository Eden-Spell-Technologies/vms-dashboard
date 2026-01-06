<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}

include("../sidebar.php");
include("../nav.php");
?>


<div id="main-wrapper" class="p-4 p-md-5">

     <!-- waybill detail -->
          <div id="waybill-details-view" class="fade-in">
            <div id="waybill-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <a
                  class="btn secondary-hover rounded-circle me-3"
                  href="./vehicle-mngt.php"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
</a>

                <h3 class="fw-bold">Waybill & Tracking</h3>
              </div>

              <div class="d-flex gap-2">
                <button
                  class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                  data-bs-toggle="modal"
                  data-bs-target="#newWaybillModal"
                >
                  + Create Waybill
                </button>
              </div>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-primary text-white">
                    <i class="fas fa-file-signature"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">124</h4>
                    <small class="">Total Waybills</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-warning text-dark">
                    <i class="fas fa-truck-loading"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">18</h4>
                    <small class="">In Transit</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-success text-white">
                    <i class="fas fa-money-bill-wave"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">85%</h4>
                    <small class="">Paid Status</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-info text-white">
                    <i class="fas fa-box-open"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">2.5k</h4>
                    <small class="">Units Delivered</small>
                  </div>
                </div>
              </div>
            </div>

             <div class="bg-white rounded-4 p-4 shadow-sm">
              <h5 class="fw-bold mb-3">Recent Waybill Logs</h5>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>WB ID</th>
                      <th>Date</th>
                      <th>Destination</th>
                      <th>Client</th>
                      <th>Payment</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#WB-5520</td>
                      <td>2025-12-20</td>
                      <td>Lahore</td>
                      <td>Global Logis.</td>
                      <td><span class="badge bg-success">Paid</span></td>
                       <td>
                            <a class="btn btn-sm btn-light border" href="./waybill-form.php">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                      <td>#WB-5521</td>
                      <td>2025-12-21</td>
                      <td>Multan</td>
                      <td>Kashif Ent.</td>
                      <td>
                        <span class="badge bg-warning text-dark">Pending</span>
                      </td>
                      <td>
                            <a class="btn btn-sm btn-light border" href="./waybill-form.php">
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
<div class="modal fade" id="newWaybillModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
       <div class="modal-content border-0 rounded-4 overflow-hidden">
    <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="tripDetailsModalLabel">
            <i class="fas fa-file-invoice me-2"></i>Add Waybill & Trip Details
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">
            
            <div class="col-md-6">
                <label class="small fw-bold mb-1">Waybill Number</label>
                <input type="text" class="form-control border-dark shadow-sm" value="WB-5520" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Date</label>
                <input type="text" class="form-control border-dark shadow-sm" value="20 Dec 2025" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Sender Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Global Logistics Inc." />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Receiver Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Green Energy Corp" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Pickup Location</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Port Qasim, Karachi" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Delivery Location</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Industrial Area, Lahore" />
            </div>

            <div class="col-md-8">
                <label class="small fw-bold mb-1">Description of Goods</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Electronics / Solar Panels" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1">Quantity</label>
                <input type="text" class="form-control border-dark shadow-sm" value="45 Units / 4,500 KG" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Vehicle Plate Number</label>
                <input type="text" class="form-control border-dark shadow-sm" value="VH-789 (ABC-123)" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Driver Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Ahmed Khan" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Motor Mate Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Ali Raza" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Date Dispatched</label>
                <input type="text" class="form-control border-dark shadow-sm" value="20 Dec 2025" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1 ">Last Checkpoint</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Hyderabad Toll Plaza" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1 ">Current Checkpoint</label>
                <input type="text" class="form-control border-dark shadow-sm border-2" value="Moro Service Area" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1 ">Next Checkpoint</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Sukkur Interchange" />
            </div>

            <div class="col-12">
                <label class="small fw-bold mb-1">Remarks/Observations</label>
                <textarea class="form-control border-dark shadow-sm" rows="2">Vehicle running on schedule.</textarea>
            </div>

            <div class="col-12 text-center mt-4">
                <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white">
                    Submit Waybill Details
                </button>
            </div>
        </form>
    </div>
</div>
    </div>
</div>

<?php include("../footer.php"); ?>