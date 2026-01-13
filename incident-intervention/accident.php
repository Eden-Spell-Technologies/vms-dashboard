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

    <!-- accident -->
    <div id="accident-detail-view" class="px-4 px-md-5 py-4">
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
          <h3 class="fw-bold">Accident Report</h3>
        </div>

        <button class="btn secondary-color rounded-pill px-4 shadow-sm" data-bs-toggle="modal"
          data-bs-target="#accidentModal">
          <i class="fas fa-plus me-1"></i> Report New Accident
        </button>
      </div>

      <div class="row g-3 mb-3">
        <div class="col-md-6 col-xl-3">
          <div class="stat-card shadow-sm">
            <div class="icon-box bg-danger text-white">
              <i class="fas fa-exclamation-triangle"></i>
            </div>
            <div>
              <h4 class="fw-bold m-0">05</h4>
              <small class="">Total This Year</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat-card shadow-sm">
            <div class="icon-box bg-warning text-dark">
              <i class="fas fa-hospital"></i>
            </div>
            <div>
              <h4 class="fw-bold m-0">01</h4>
              <small class="">Medical Alerts</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat-card shadow-sm">
            <div class="icon-box bg-primary text-white">
              <i class="fas fa-shield-alt"></i>
            </div>
            <div>
              <h4 class="fw-bold m-0">03</h4>
              <small class="">Insurance Claims</small>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-3">
          <div class="stat-card shadow-sm">
            <div class="icon-box bg-success text-white">
              <i class="fas fa-check-circle"></i>
            </div>
            <div>
              <h4 class="fw-bold m-0">02</h4>
              <small class="">Resolved</small>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-white rounded-4 p-2 shadow-sm border">
        <div class="table-responsive p-2">
          <table id="accidentTable" class="table table-hover align-middle w-100 scrollable-tbody">
            <thead class="table-light text-secondary small text-uppercase">
              <tr>
                <th class="ps-3">Vehicle ID</th>
                <th>Driver Name</th>
                <th>Nature of Accident</th>
                <th>Location</th>
                
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>VH-789</td>
                 <td>
                  <div>Muhammad Bilal</div>
                </td>
                <td>
                  <span>Loaded</span>
                </td>
                <td>
                  <small><i class="fas fa-map-pin text-danger me-1"></i> Sahiwal Bypass</small>
                </td>
               
                <td class="text-center">
                  <a class="btn btn-sm btn-light border shadow-sm" href="./accident-form.php">
                    <i class="fas fa-eye text-primary"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>VH-789</td>
                 <td>
                  <div>Muhammad Bilal</div>
                </td>
                <td>
                  <span>Loaded</span>
                </td>
                <td>
                  <small><i class="fas fa-map-pin text-danger me-1"></i> Sahiwal Bypass</small>
                </td>
               
                <td class="text-center">
                  <a class="btn btn-sm btn-light border shadow-sm" href="./accident-form.php">
                    <i class="fas fa-eye text-primary"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>VH-789</td>
                 <td>
                  <div>Muhammad Bilal</div>
                </td>
                <td>
                  <span>Loaded</span>
                </td>
                <td>
                  <small><i class="fas fa-map-pin text-danger me-1"></i> Sahiwal Bypass</small>
                </td>
               
                <td class="text-center">
                  <a class="btn btn-sm btn-light border shadow-sm" href="./accident-form.php">
                    <i class="fas fa-eye text-primary"></i>
                  </a>
                </td>
              </tr>
              <tr>
                <td>VH-789</td>
                 <td>
                  <div>Muhammad Bilal</div>
                </td>
                <td>
                  <span>Loaded</span>
                </td>
                <td>
                  <small><i class="fas fa-map-pin text-danger me-1"></i> Sahiwal Bypass</small>
                </td>
               
                <td class="text-center">
                  <a class="btn btn-sm btn-light border shadow-sm" href="./accident-form.php">
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
<div class="modal fade" id="accidentModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
      <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="vehicleDetailsModalLabel">
          <i class="fas fa-exclamation-triangle me-2"></i>Add Accident Record
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Vehicle Plate Number</label>
            <input type="text" class="form-control border-dark shadow-sm" value="VH-789" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Driver Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Muhammad Bilal (DRV-042)" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Location</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Near Sahiwal Bypass, N-5 Highway" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Nature of Accident</label>
            <select class="form-select border-dark shadow-sm ">
              <option selected>Loaded</option>
              <option>Unloaded</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Status of Driver & Motor Mate</label>
            <select class="form-select border-dark shadow-sm">
              <option>Injured (Severe)</option>
              <option selected>Injured (Moderate)</option>
              <option>Minor Injuries</option>
              <option>Fatal</option>
              <option>None</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Content (Goods Type)</label>
            <select class="form-select border-dark shadow-sm">
              <option>NBL / NBC</option>
              <option selected>FMCG / Pharmaceuticals</option>
              <option>Machineries</option>
              <option>PMS / AGO</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Damage Extend</label>
            <select class="form-select border-dark shadow-sm">
              <option selected>Product Severe Damage / Product Collapse</option>
              <option>Moderate Damage</option>
              <option>Minor Damage</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Fatality Status</label>
            <select class="form-select border-dark shadow-sm">
              <option selected>No</option>
              <option>Yes</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Nature of Accident Type</label>
            <select class="form-select border-dark shadow-sm">
              <option selected>Hit by a third party</option>
              <option>Lone accident</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Damage / Injury (Yes/No)</label>
            <select class="form-select border-dark shadow-sm">
              <option selected>Yes</option>
              <option>No</option>
            </select>
          </div>

          <div class="col-12">
            <label class="small fw-bold mb-1">Action / Comments</label>
            <textarea class="form-control border-dark shadow-sm"
              rows="3">Police FIR registered (#FIR-990). Insurance claim in process. Vehicle towed to workshop.</textarea>
          </div>

          <div class="col-12 text-center mt-4">
            <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow text-white">
              Submit Incident Record
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

