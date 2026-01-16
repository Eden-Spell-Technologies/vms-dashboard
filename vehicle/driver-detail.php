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

    <!-- driver detail -->
    <div id="check-driver-view" class="px-4 px-md-5 py-4 ">
      <div id="driver-table-view">
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

            <h3 class="fw-bold">Driver Details</h3>
          </div>

          <div>
            <!-- <a class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" href="./driver-mate-detail.php">
              Driver Mate Detail
            </a> -->

            <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
              data-bs-target="#addDriverModal">
              + Add New Driver
            </button>
          </div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-6 col-xl-3">
            <div class="stat-card shadow-sm">
              <div class="icon-box bg-success text-white">
                <i class="fas fa-users"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">89</h4>
                <small class="">Total Drivers</small>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="stat-card shadow-sm">
              <div class="icon-box bg-primary text-white">
                <i class="fas fa-car"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">65</h4>
                <small class="">On Duty</small>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="stat-card shadow-sm">
              <div class="icon-box bg-warning text-dark">
                <i class="fas fa-star"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">4.8</h4>
                <small class="">Avg Rating</small>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3">
            <div class="stat-card shadow-sm">
              <div class="icon-box bg-danger text-white">
                <i class="fas fa-clock"></i>
              </div>
              <div>
                <h4 class="fw-bold m-0">12</h4>
                <small class="">Off Duty</small>
              </div>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-4 p-2 shadow-sm border">
          <div class="table-responsive p-2">
            <table id="tripsTable" class="table table-hover align-middle w-100 scrollable-tbody">
              <thead class="table-light">
                <tr>
                  <th>Full Name</th>
                  <th>Driver's License Number</th>
                  <th>License Category / Class</th>
                  <th>License Expiry Date</th>

                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="fw-bold text-primary">John Doe</td>
                  <td>DL-987654321</td>
                  <td>HTV</td>
                  <td>12-Dec-2028</td>

                  <td class="text-center">
                    <a href="./driver-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="fw-bold text-primary">John Doe</td>
                  <td>DL-987654321</td>
                  <td>LTV</td>
                  <td>12-Dec-2028</td>

                  <td class="text-center">
                    <a href="./driver-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="fw-bold text-primary">John Doe</td>
                  <td>DL-987654321</td>
                  <td>HTV</td>
                  <td>12-Dec-2028</td>

                  <td class="text-center">
                    <a href="./driver-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
                      <i class="fas fa-eye text-primary"></i>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="fw-bold text-primary">John Doe</td>
                  <td>DL-987654321</td>
                  <td>LTV</td>
                  <td>12-Dec-2028</td>

                  <td class="text-center">
                    <a href="./driver-detail-form.php" class="btn btn-sm btn-light border shadow-sm">
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
<div class="modal fade" id="addDriverModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content border-0 rounded-4 overflow-hidden">
      <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="addDriverMateModalLabel">
          <i class="fas fa-user-edit me-2"></i>Add Driver
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">

          <div class="col-md-6">
            <label class="small fw-bold mb-1">First Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="John " />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Last Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Doe" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Address</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Plot 45, Street 10, Karachi" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Phone Number</label>
            <input type="tel" class="form-control border-dark shadow-sm" value="+92 300 1234567" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Date of Birth</label>
            <input type="date" class="form-control border-dark shadow-sm" value="1990-05-15" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">National ID / Passport Number</label>
            <input type="text" class="form-control border-dark shadow-sm" value="42101-1234567-1" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Date Employed</label>
            <input type="text" class="form-control border-dark shadow-sm" value="01-Jan-2022" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Driver's License Number</label>
            <input type="text" class="form-control border-dark shadow-sm" value="DL-987654321" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">License Category / Class</label>
            <select class="form-select border-dark shadow-sm">
              <option selected disabled>Select License Class...</option>

              <option value="ltv">LTV (Light Transport Vehicle)</option>
              <option value="htv">HTV (Heavy Transport Vehicle)</option>
              <option value="psv">PSV (Public Service Vehicle)</option>
              <option value="motorcycle_car">Motorcycle / Car</option>

              <option value="heavy_machinery">Heavy Machinery Operator License</option>
              <option value="tractor_commercial">Tractor (Commercial)</option>

              <option value="ltv_htv">LTV / HTV Combined</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">License Expiry Date</label>
            <input type="date" class="form-control border-dark shadow-sm" value="2028-12-12" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Assigned Vehicle / Plate Number</label>
            <select class="form-select border-dark shadow-sm">
              <option selected disabled>Choose Vehicle / Plate No...</option>

              <option value="vh789">VH-789 (ABC-123) - Toyota Corolla</option>
              <option value="vh456">VH-456 (XYZ-789) - Volkswagen Voyage</option>

              <option value="tr102">TR-102 (KHI-4567) - Hino Truck</option>
              <option value="tr305">TR-305 (LHR-8899) - Isuzu HGV</option>

              <option value="eq55">EQ-55 (No Plate) - CAT Excavator</option>
              <option value="eq12">EQ-12 (P-990) - JCB Forklift</option>

              <option value="gn01">GN-01 (Static) - Cummins Generator</option>
            </select>
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Emergency Contact Name</label>
            <input type="text" class="form-control border-dark shadow-sm" value="Jane Doe" />
          </div>

          <div class="col-md-6">
            <label class="small fw-bold mb-1">Emergency Contact Phone Number</label>
            <input type="tel" class="form-control border-dark shadow-sm" value="+92 321 7654321" />
          </div>

          <div class="col-md-6 mb-2">
            <label class="small fw-bold mb-1">Driver Photograph</label>
            <input type="file" class="form-control border-dark shadow-sm" accept="image/*" />
          </div>

          <div class="col-12 text-center mt-4">
            <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
              Save Details
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>