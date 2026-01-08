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

    <div class="d-md-flex justify-content-between align-items-center mb-4">
      <div class="d-flex align-items-center">
        <a href="./vehicle-mngt.php"
          class="btn secondary-hover rounded-circle me-3 d-flex align-items-center justify-content-center"
          style="width:40px;height:40px;">
          <i class="fas fa-arrow-left"></i>
        </a>
        <h3 class="fw-bold mb-0">Vehicle Details</h3>
      </div>

      <!-- ADD VEHICLE BUTTON -->
      <button type="button" class="btn secondary-color rounded-pill px-4" data-bs-toggle="modal"
        data-bs-target="#addVehicleModal">
        <i class="fas fa-plus me-2"></i> Add New Vehicle
      </button>
    </div>

    <!-- STATS -->
    <div class="row g-3 mb-4">
      <div class="col-md-3">
        <div class="stat-card shadow-sm">
          <div class="icon-box bg-primary text-white">
            <i class="fas fa-truck"></i>
          </div>
          <div>
            <h4 class="fw-bold m-0">142</h4>
            <small class="">Total Vehicles</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card shadow-sm">
          <div class="icon-box bg-purple text-white" style="background: #8e44ad">
            <i class="fas fa-road"></i>
          </div>
          <div>
            <h4 class="fw-bold m-0">24</h4>
            <small class="">Active Vehicles</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card shadow-sm">
          <div class="icon-box bg-success text-white">
            <i class="fas fa-user"></i>
          </div>
          <div>
            <h4 class="fw-bold m-0">89</h4>
            <small class="">Active Drivers</small>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="stat-card shadow-sm">
          <div class="icon-box bg-danger text-white">
            <i class="fas fa-wrench"></i>
          </div>
          <div>
            <h4 class="fw-bold m-0">8</h4>
            <small class="">In Maintenance</small>
          </div>
        </div>
      </div>
    </div>

    <!-- TABLE -->
    <div class="bg-white rounded-4 p-4 shadow-sm">
      <h5 class="fw-bold mb-3">Vehicle Log Table</h5>
      <div class="table-responsive">
        <table class="table table-hover align-middle">
          <thead class="table-light">
            <tr>
              <th>Date</th>
              <th>Driver</th>
              <th>Make</th>
              <th>Model</th>
             
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>2025-12-22</td>
              <td>Zaid Ali</td>
              <td>Volkswagen</td>
              <td>Voyage</td>
              <td><span class="badge bg-success">Active</span></td>
              <td>
                <a href="./vehicle-detail-form.php" class="btn btn-sm btn-light border">
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


<!-- ================= MODAL ================= -->
<div class="modal fade" id="addVehicleModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
      <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="vehicleDetailsModalLabel">
          <i class="fas fa-truck me-2"></i>Add Vehicle Details
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">


          <div class="col-md-6">
            <label class="small fw-bold mb-1">Fleet No</label>
            <input type="text" class="form-control border-dark shadow-sm" value="VH-789" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Manager Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="John Doe" />
          </div>

           <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Manager Email</label>
            <input type="text" class="form-control border-dark shadow-sm" value="john.doe@example.com" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Make/Model</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Volkswagen Voyage" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Registration</label>
            <input type="text" class="form-control border-dark shadow-sm" value="KA-01-AB-1234" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Type</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Truck" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Status (Serviceable or Unserviceable)</label>
            <select class="form-select border-dark shadow-sm">
              <option selected>Active</option>
              <option>Serviceable</option>
              <option>Unserviceable</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Assigned Driver</label>
            <input type="text" class="form-control border-dark shadow-sm" value="John Doe (DRV-001)" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Last Service Date</label>
            <input type="text" class="form-control border-dark shadow-sm" value="15 Jan 2024" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Next Service Due</label>
            <input type="text" class="form-control border-dark shadow-sm" value="15 Mar 2024" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Base / Site</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Enugu Depot" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Client/Vehicle Owner</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Rahul Sharma" />
          </div>

          <div class="col-12 text-center mt-4">
            <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
              Submite Vehicle Profile
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include("../footer.php"); ?>