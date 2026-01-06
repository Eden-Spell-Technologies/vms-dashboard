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

   <!-- service & maintenance -->
          <div id="service-history-view" class="fade-in">
            <div id="service-table-view">
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
                <h3 class="fw-bold m-0">Service / Maintenance</h3>
              </div>

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#addServiceModal"
              >
                + Log New Service
              </button>
            </div>

            <div class="row g-3 mb-4">
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

            <div class="bg-white rounded-4 p-4 shadow-sm border">
              <div
                class="d-flex justify-content-between align-items-center mb-3"
              >
                <h5 class="fw-bold m-0">Historical Maintenance Log</h5>
                <button class="btn btn-sm secondary-hover rounded-pill px-3">
                  <i class="fas fa-download me-1"></i> Export CSV
                </button>
              </div>

              <div class="table-responsive">
                <table
                  class="table table-hover align-middle"
                  style="min-width: 1000px"
                >
                  <thead class="table-light">
                    <tr>
                      <th class="border-0">Date</th>
                      <th class="border-0">Provider</th>
                      <th class="border-0">Contract</th>
                      <th class="border-0">Service Type</th>
                      <th class="border-0 text-center">Wear & Tear</th>
                      <th class="border-0 text-center">Safety Status</th>
                      <th class="border-0">Status</th>
                      <th class="border-0">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="fw-bold text-dark">15 Dec 2025</div>
                      </td>
                      <td>
                        <div class="fw-bold">AutoMaster Hub</div>
                      </td>
                      <td>
                        <div class="text-primary">#CNT-99812</div>
                      </td>
                      <td>
                        <span
                          class="badge bg-primary-subtle text-primary border border-primary-subtle px-2"
                          >Major Service</span
                        >
                      </td>
                      <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                          <span class="dot bg-success" title="Tyres: OK"></span>
                          <span
                            class="dot bg-warning"
                            title="Exhaust: Near Limit"
                          ></span>
                          <span
                            class="dot bg-success"
                            title="Brakes: OK"
                          ></span>
                        </div>
                        <small class="text-muted" style="font-size: 10px"
                          >T / E / B</small
                        >
                      </td>
                      <td class="text-center">
                        <i
                          class="fas fa-check-circle text-success"
                          title="All Safety Systems Passed"
                        ></i>
                        <small
                          class="d-block text-muted"
                          style="font-size: 10px"
                          >Passed</small
                        >
                      </td>
                      <td>
                        <span class="badge bg-success">Completed</span>
                      </td>

                       <td>
                            <a class="btn btn-sm btn-light border" href="./service-form.php">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                      
                    </tr>

                    <tr>
                      <td>
                        <div class="fw-bold text-dark">12 Oct 2025</div>
                      </td>
                      <td>
                        <div class="fw-bold">Ali Khan (Mechanic)</div>
                      </td>
                      <td>
                        <div class="text-muted">No Contract</div>
                      </td>
                      <td>
                        <span
                          class="badge bg-secondary-subtle text-secondary border border-secondary-subtle px-2"
                          >Minor Fix</span
                        >
                      </td>
                      <td class="text-center">
                        <div class="d-flex justify-content-center gap-1">
                          <span class="dot bg-success"></span>
                          <span class="dot bg-success"></span>
                          <span class="dot bg-success"></span>
                        </div>
                      </td>
                      <td class="text-center">
                        <i
                          class="fas fa-exclamation-triangle text-warning"
                          title="Lighting System Needs Attention"
                        ></i>
                        <small
                          class="d-block text-muted"
                          style="font-size: 10px"
                          >Check Lighting</small
                        >
                      </td>
                      <td>
                        <span class="badge bg-success">Completed</span>
                      </td>
                      <td>
                            <a class="btn btn-sm btn-light border" href="./service-form.php">
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
                <input type="text" class="form-control border-dark shadow-sm" value="Minor Bump - Left headlight replaced" />
            </div>

            <div class="col-md-12">
                <label class="small fw-bold mb-1">Description of Work Done</label>
                <textarea class="form-control border-dark shadow-sm" rows="2">Oil change, brake inspection, and filter replacement.</textarea>
            </div>

            <div class="col-md-12">
                <label class="small fw-bold mb-1">Physical Inspection Remarks</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Body work clean, tire pressure optimal." />
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

<?php include("../footer.php"); ?>