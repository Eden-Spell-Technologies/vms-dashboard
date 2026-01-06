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

    <!-- driver detail -->
          <div id="check-driver-view" class=" fade-in">
            <div id="driver-table-view">
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

                <h3 class="fw-bold">Driver Details</h3>
              </div>

             <div>
               <a
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                href="./driver-mate-detail.php"
              >
                Driver Mate Detail
</a>

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#addDriverModal"
              >
                + Add New Driver
              </button>
             </div>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-3">
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
              <div class="col-md-3">
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
              <div class="col-md-3">
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
              <div class="col-md-3">
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

             <div class="bg-white rounded-4 p-4 shadow-sm">
              <h5 class="fw-bold mb-3">Recent Trips & Performance</h5>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Date</th>
                      <th>Trip ID</th>
                      <th>Vehicle</th>
                      <th>Route</th>
                      <th>Status</th>
                      <th>Rating</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>2025-12-20</td>
                      <td>#TRP-502</td>
                      <td>VH-789</td>
                      <td>Karachi → Hyderabad</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td><i class="fas fa-star text-warning"></i> 5.0</td>
                      <td>
                            <a href="./driver-detail-form.php" class="btn btn-sm btn-light border">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                      <td>2025-12-18</td>
                      <td>#TRP-488</td>
                      <td>VH-789</td>
                      <td>Karachi → Sukkur</td>
                      <td><span class="badge bg-success">Completed</span></td>
                      <td><i class="fas fa-star text-warning"></i> 4.5</td>
                      <td>
                            <a href="./driver-detail-form.php" class="btn btn-sm btn-light border">
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
                <label class="small fw-bold mb-1">Full Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="John Doe" />
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
                <input type="text" class="form-control border-dark shadow-sm" value="HTV / LTV" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">License Expiry Date</label>
                <input type="date" class="form-control border-dark shadow-sm" value="2028-12-12" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Assigned Vehicle / Plate Number</label>
                <input type="text" class="form-control border-dark shadow-sm" value="VH-789 (ABC-123)" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Emergency Contact Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Jane Doe" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Emergency Contact Phone Number</label>
                <input type="tel" class="form-control border-dark shadow-sm" value="+92 321 7654321" />
            </div>

             <div class="col-12 mb-2">
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

<?php include("../footer.php"); ?>
