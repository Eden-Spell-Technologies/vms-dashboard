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

    <!-- service & maintenance -->
    <div id="service-history-view" class="px-4 px-md-5 py-4">
      <div id="service-table-view">
        <div class="d-md-flex justify-content-between align-items-center mb-4">
          <div class="d-flex align-items-center">
            <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-mngt.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
              <i class="fas fa-arrow-left"></i>
            </a>
            <h3 class="fw-bold m-0">Service / Maintenance</h3>
          </div>

          <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
            data-bs-target="#addServiceModal">
            + Add New Service
          </button>
        </div>

        <div class="row g-3 mb-2">
          <div class="col-md-3">
            <div class="stat-card shadow-sm border-0">
              <div class="icon-box bg-danger text-white">
                <i class="fas fa-oil-can"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">08</h4>
                <small class="">Due Soon</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card shadow-sm border-0">
              <div class="icon-box bg-success text-white">
                <i class="fas fa-file-invoice-dollar"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">$4.2k</h4>
                <small class="">Monthly Cost</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card shadow-sm border-0">
              <div class="icon-box bg-primary text-white">
                <i class="fas fa-calendar-check"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">15</h4>
                <small class="">Completed</small>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="stat-card shadow-sm border-0">
              <div class="icon-box bg-warning text-dark">
                <i class="fas fa-wrench"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">02</h4>
                <small class="">In Workshop</small>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-4 p-2 shadow-sm border ">
          <div class="table-responsive p-2">
            <table id="maintenanceLogTable" class="table table-hover align-middle w-100 scrollable-tbody">
              <thead class="table-light">
                <tr>
                  <th>Vehicle Plate Number</th>
                  <th>Odometer Mileage</th>
                  <th>Parts Replaced</th>
                  <th>Service Type</th>

                  <th>Accident History</th>
                  <th class="text-center">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>VH-789 (ABC-123)</td>
                  <td>85,250 km</td>
                  <td>Oil Filter</td>
                  <td>Repair</td>

                  <td>
                    Minor Bump</td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-light border shadow-sm" href="./service-form.php">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>

               <tr>
                  <td>VH-789 (ABC-123)</td>
                  <td>85,250 km</td>
                  <td>Oil Filter</td>
                  <td>Repair</td>

                  <td>
                    Minor Bump</td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-light border shadow-sm" href="./service-form.php">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                 <tr>
                  <td>VH-789 (ABC-123)</td>
                  <td>85,250 km</td>
                  <td>Oil Filter</td>
                  <td>Repair</td>

                  <td>
                    Minor Bump</td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-light border shadow-sm" href="./service-form.php">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                 <tr>
                  <td>VH-789 (ABC-123)</td>
                  <td>85,250 km</td>
                  <td>Oil Filter</td>
                  <td>Repair</td>

                  <td>
                    Minor Bump</td>
                  <td class="text-center">
                    <a class="btn btn-sm btn-light border shadow-sm" href="./service-form.php">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                 <tr>
                  <td>VH-789 (ABC-123)</td>
                  <td>85,250 km</td>
                  <td>Oil Filter</td>
                  <td>Repair</td>

                  <td>
                    Minor Bump</td>
                  <td  class="text-center">
                    <a class="btn btn-sm btn-light border shadow-sm" href="./service-form.php">
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
<div class="modal fade" id="addServiceModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
      <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="tripDetailsModalLabel">
          <i class="fas fa-tools me-2"></i>Add Service Details
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Date of Service</label>
            <input type="text" class="form-control border-dark shadow-sm" value="05-Jan-2026" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Plate Number</label>
            <input type="text" class="form-control border-dark shadow-sm" value="VH-789 (ABC-123)" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Odometer Reading / Mileage</label>
            <input type="text" class="form-control border-dark shadow-sm" value="85,250 km" />
          </div>


          <div class="col-md-6">
            <label class="small fw-bold mb-1">Parts Replaced</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Oil Filter, Brake Pads" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Service Provider / Mechanic Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="City Auto Workshop" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Type of Service</label>
            <select class="form-select border-dark shadow-sm">
              <option>Routine</option>
              <option selected>Repair</option>
              <option>Breakdown</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Next Service Due (Date/KM)</label>
            <input type="text" class="form-control border-dark shadow-sm" value="95,000 km or 05-July-2026" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Accident History / Remarks</label>
            <input type="text" class="form-control border-dark shadow-sm"
              value="Minor Bump - Left headlight replaced" />
          </div>

          <div class="col-md-12">
            <label class="small fw-bold mb-1">Description of Work Done</label>
            <textarea class="form-control border-dark shadow-sm"
              rows="2">Oil change, brake inspection, and filter replacement.</textarea>
          </div>

          <div class="col-md-12">
            <label class="small fw-bold mb-1">Physical Inspection Remarks</label>
            <input type="text" class="form-control border-dark shadow-sm"
              value="Body work clean, tire pressure optimal." />
          </div>

          <div class="col-12 text-center mt-4">
            <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
              Save Record
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
