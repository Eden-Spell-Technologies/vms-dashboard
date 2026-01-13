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

   <div class="px-4 px-md-5 py-4">
     <div class="d-md-flex justify-content-between align-items-center mb-4">
      <div class="d-flex align-items-center mb-3 mb-md-0">
        <a href="./vehicle-mngt.php"
          class="btn secondary-hover rounded-circle me-3 d-flex align-items-center justify-content-center"
          style="width:40px;height:40px;">
          <i class="fas fa-arrow-left"></i>
        </a>
        <h3 class="fw-bold mb-0">Vehicle Details</h3>
      </div>

      <!-- ADD VEHICLE BUTTON -->
      <button type="button" class="btn secondary-color rounded-pill px-4 " data-bs-toggle="modal"
        data-bs-target="#addVehicleModal">
        <i class="fas fa-plus me-2"></i> Add New Vehicle
      </button>
    </div>

    <!-- STATS -->
    <div class="row g-3 mb-3">
      <div class="col-md-6 col-xl-3">
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
      <div class="col-md-6 col-xl-3">
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
      <div class="col-md-6 col-xl-3">
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
      <div class="col-md-6 col-xl-3">
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
    <div class="bg-white rounded-4 p-2 shadow-sm border">
      <div class="table-responsive p-2">
        <table id="myAssetsTable" class="table table-hover align-middle w-100  scrollable-tbody">
          <thead class="table-light">
            <tr>
              <th>Fleet No</th>
              <th>Vehicle Manager Name</th>
              <th>Registration No</th>
              <th>Make</th>
              <th>Model</th>
              <th>Status</th>
              <th class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>VH-789</td>
              <td>Zaid Ali</td>
              <td>AB-1234</td>
              <td>Volkswagen</td>
              <td>Voyage</td>
              <td><span class="badge bg-success-subtle text-success border border-success px-3">Active</span></td>
              <td class="text-center">
                <a href="./vehicle-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                  <i class="fas fa-eye text-primary"></i>
                </a>
              </td>
            </tr>
             <tr>
              <td>VH-789</td>
              <td>Zaid Ali</td>
              <td>AB-1234</td>
              <td>Volkswagen</td>
              <td>Voyage</td>
              <td><span class="badge bg-success-subtle text-success border border-success px-3">Active</span></td>
              <td class="text-center">
                <a href="./vehicle-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                  <i class="fas fa-eye text-primary"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>VH-789</td>
              <td>Zaid Ali</td>
              <td>AB-1234</td>
              <td>Volkswagen</td>
              <td>Voyage</td>
              <td><span class="badge bg-success-subtle text-success border border-success px-3">Active</span></td>
              <td class="text-center">
                <a href="./vehicle-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                  <i class="fas fa-eye text-primary"></i>
                </a>
              </td>
            </tr>
            <tr>
              <td>VH-789</td>
              <td>Zaid Ali</td>
              <td>AB-1234</td>
              <td>Volkswagen</td>
              <td>Voyage</td>
              <td><span class="badge bg-success-subtle text-success border border-success px-3">Active</span></td>
              <td class="text-center">
                <a href="./vehicle-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                  <i class="fas fa-eye text-primary"></i>
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
            <label class="small fw-bold mb-1">Vehicle Manager First Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="John" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Manager Last Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Doe" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Manager Email</label>
            <input type="text" class="form-control border-dark shadow-sm" value="john.doe@example.com" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Client/Vehicle Owner First Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Rahul" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Client/Vehicle Owner Last Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Sharma" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Make/Model</label>
            <select class="form-select border-dark shadow-sm">
              <option selected disabled>Choose Make/Model</option>
              <option>Volkswagen Voyage</option>
              <option>Toyota Corolla</option>
              <option>Hino 500 Series</option>
              <option>Isuzu NPR</option>
              <option>Caterpillar Excavator</option>
              <option>JCB Backhoe Loader</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Truck No</label>
            <input type="text" class="form-control border-dark shadow-sm" value="AB-1234" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Type</label>
            <select class="form-select border-dark shadow-sm">
              <option selected disabled>Select Vehicle Type...</option>
              <option value="fleet_light">Fleet light Vehicles</option>
              <option value="trucks_hgvs">Trucks / HGVS</option>
              <option value="heavy_equipment">Heavy Equipment & Machinery</option>
              <option value="plant_industrial">Plant & Industrial Assets</option>
            </select>
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
            <label class="small fw-bold mb-1">Assigned Driver(s)</label>
            <select id="driverSelect" name="drivers[]" class="form-control border-dark shadow-sm" multiple="multiple">
              <option value="DRV-001">John Doe (DRV-001)</option>
              <option value="DRV-002">Jane Smith (DRV-002)</option>
              <option value="DRV-003">Ahmed Khan (DRV-003)</option>
              <option value="DRV-004">Robert Wilson (DRV-004)</option>
              <option value="DRV-005">Carlos Ruiz (DRV-005)</option>
            </select>
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



