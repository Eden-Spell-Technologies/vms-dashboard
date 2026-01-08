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

    <!-- route-diversion -->
    <div id="route-diversion-view" class="">
      <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
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
              <h3 class="fw-bold text-navy">Route Diversion</h3>
            </div>
          </div>
        </div>
        <div class="d-flex gap-2">
          <button class="btn secondary-color rounded-pill px-4 fw-bold shadow-sm" data-bs-toggle="modal"
            data-bs-target="#driverMisconductModal">
            <i class="fas fa-plus me-1"></i> Add Driver Misconduct
          </button>
        </div>
      </div>

      <div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="stat-card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <div class="icon-box bg-danger-subtle text-danger me-3">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <div>
                    <h4 class="fw-bold m-0">05</h4>
                    <small class="">Total Violations</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <div class="icon-box bg-info-subtle text-info me-3">
                    <i class="fas fa-vial"></i>
                </div>
                <div>
                    <h4 class="fw-bold m-0">12</h4>
                    <small class="">Tests Conducted</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="stat-card shadow-sm p-3">
            <div class="d-flex align-items-center">
                <div class="icon-box bg-warning-subtle text-warning me-3">
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <div>
                    <h4 class="fw-bold m-0">3.2</h4>
                    <small class="">Avg. Driver Rating</small>
                </div>
            </div>
        </div>
    </div>
</div>

      

      <div class="bg-white rounded-4 p-4 shadow-sm border">
        <h5 class="fw-bold mb-3 text-navy">Recovery Logs</h5>
        <div class="table-responsive">
          <table class="table table-hover align-middle">
            <thead class="table-light">
              <tr>
                <th>Date</th>
                <th>Vehicle</th>
                <th>Cause</th>
                <th>Mental Stability</th>
                <th>Location</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>22 Dec 2025</td>
                <td>VH-552</td>
                <td>Mud</td>
                <td>Stable</td>
                <td>Islamabad</td>

                <td>
                  <a class="btn btn-sm btn-light border" href="./driver-misconduct-form.php" title="View Details">
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
<div class="modal fade" id="driverMisconductModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
  <div class="modal-header background-primary px-4 text-white">
    <h5 class="modal-title fw-bold" id="vehicleDetailsModalLabel">
      <i class="fas fa-user-shield me-2"></i>Add Driver Misconduct Record
    </h5>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>

  <div class="modal-body p-4" style="background-color: #f8f9fa">
    <form class="row g-3 px-2">

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Date</label>
        <input type="text" class="form-control border-dark shadow-sm" value="22 Dec 2025 | 11:30 AM" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Vehicle Plate Number</label>
        <input type="text" class="form-control border-dark shadow-sm" value="VH-789" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Alcohol/drug test result</label>
        <input type="text" class="form-control border-dark shadow-sm" placeholder="Add details" value="Negative" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Mental stability</label>
        <input type="text" class="form-control border-dark shadow-sm" placeholder="Add details" value="Stable" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Driver Name</label>
        <input type="text" class="form-control border-dark shadow-sm" value="Muhammad Ahmed" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Location</label>
        <input type="text" class="form-control border-dark shadow-sm" value="Central Depot Yard - B4" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Cause</label>
        <input type="text" class="form-control border-dark shadow-sm" value="Reckless Driving" placeholder="(Mud, Flood, Sand, etc.)" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Countenance/Stability</label>
        <input type="text" class="form-control border-dark shadow-sm" placeholder="Add details" value="Normal" />
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Rating of the driver</label>
        <select class="form-select border-dark shadow-sm">
          <option>1 - Poor</option>
          <option>2 - Fair</option>
          <option selected>3 - Average</option>
          <option>4 - Good</option>
          <option>5 - Excellent</option>
        </select>
      </div>

      <div class="col-md-6">
        <label class="small fw-bold mb-1">Assistant Required?</label>
        <select class="form-select border-dark shadow-sm">
          <option selected>Yes</option>
          <option>No</option>
        </select>
      </div>

      <div class="col-12">
        <label class="small fw-bold mb-1">Remarks / Comments</label>
        <textarea class="form-control border-dark shadow-sm" rows="3">Confirmed - Disciplinary action initiated based on behavioral report.</textarea>
      </div>

      <div class="col-12 text-center mt-4">
        <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white" style="background-color: #your-secondary-color;">
          Submit Misconduct Record
        </button>
      </div>
    </form>
  </div>
</div>
  </div>
</div>

<?php include("../footer.php"); ?>