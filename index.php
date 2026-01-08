


<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: ./auth/login.php");
    exit();
}
?>

<?php
  include("nav.php");

?>
<div id="dashboard-page"  >
  
    <?php 
include("sidebar.php");
?>
<div id="main-wrapper">
  
<div class="p-4 p-md-5">
          <div id="dashboard-view" class="fade-in">
            <div class="row g-4 mb-5">
              <div class="col-xl-4 col-md-6">
                <div
                  class="action-card"
                 
                >
                  <a href="./vehicle/vehicle-mngt.php" style="text-decoration: none; color: inherit;">
                    <div
                    class="icon-box bg-primary-subtle text-primary mx-auto mb-3"
                  >
                    <i class="fas fa-bus-alt"></i>
                  </div>
                  <h5 class="fw-bold">Vehicle Management</h5>
                  <p class="small text-white">
                    Manage fleet, drivers & history
                  </p>
                </div>
                  </a>
              </div>
              <div class="col-xl-4 col-md-6">
                <div
                  class="action-card"
                  
                >
                <a href="./incident-intervention/incident-intervention.php" style="text-decoration: none; color: inherit ">
                  <div
                    class="icon-box bg-success-subtle text-success mx-auto mb-3"
                  >
                    <i class="fas fa-tools"></i>
                  </div>
                  <h5 class="fw-bold">Incident & Intervention</h5>
                  <p class="small text-white">Repairs & reports</p>
                </a>
                  
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div
                  class="action-card"
                  
                >
                <a href="./goods-inspections/goods-inspection.php" style="text-decoration: none; color: inherit ">
                  <div
                    class="icon-box bg-blue-light mx-auto mb-3"
                  >
                    <i class="fas fa-clipboard-check "></i>
                  </div>
                   <h5 class="fw-bold">On Board Goods Inspection</h5>
                   <p class="small text-white">Verification of cargo and inventory logs</p>
                </a>
                  
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="action-card">
                  <div
                    class="icon-box bg-warning-subtle text-warning mx-auto mb-3"
                  >
                    <i class="fas fa-location-dot"></i>
                  </div>
                  <h5 class="fw-bold">Vehicle Tracking</h5>
                  <p class="small text-white">Real-time GPS status</p>
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="action-card">
                  <div class="icon-box bg-info-subtle text-info mx-auto mb-3">
                    <i class="fas fa-boxes-stacked"></i>
                  </div>
                  <h5 class="fw-bold">Asset Enumeration</h5>
                  <p class="small text-white">Stock & inventory</p>
                </div>
              </div>
              <div class="col-xl-4 col-md-6">
                <div class="action-card">
                  <div
                    class="icon-box bg-success-subtle text-success mx-auto mb-3"
                  >
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <h5 class="fw-bold">Reports & Analytics</h5>
                  <p class="small text-white">Data insights & performance</p>
                </div>
              </div>
            </div>
          </div>

          <!-- vehicle management -->
          <div id="vehicle-mgmt-view" class="hidden fade-in">
            <div class="d-flex justify-content-between align-items-center mb-5">
              <div>
                <h3 class="fw-bold">Vehicle Operations</h3>
                <p class="text-muted">Select an option to view details</p>
              </div>
              <button
                class="btn secondary-color rounded-pill px-3"
                onclick="showView('dashboard-view', 'Dashboard Overview')"
                title="Back"
              >
                <i class="fas fa-arrow-left"></i> Back
              </button>
            </div>
            <div class="row g-4">
              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('check-vehicle-view', 'Check Vehicle Details')"
                >
                  <div class="icon-wrapper bg-blue-light">
                    <i class="fas fa-info-circle fa-lg"></i>
                  </div>
                  <h5>Vehicle Details</h5>
                  <p>Detailed vehicle information and history logs</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('check-driver-view', 'Check Driver Details')"
                >
                  <div class="icon-wrapper bg-green-light">
                    <i class="fas fa-user-tie fa-lg"></i>
                  </div>
                  <h5>Driver Details</h5>
                  <p>Driver profiles, licenses and route assignments</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('route-mgmt-view', 'Route & Destination Details')"
                >
                  <div class="icon-wrapper bg-yellow-light">
                    <i class="fas fa-route fa-lg"></i>
                  </div>
                  <h5>Trip & Route</h5>
                  <p>Plan and track delivery routes and history</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('waybill-details-view', 'Check Waybill Details')"
                >
                  <div class="icon-wrapper bg-orange-light">
                    <i class="fas fa-file-invoice-dollar fa-lg"></i>
                  </div>
                  <h5>Waybill & Tracking</h5>
                  <p>Shipment documentation and billing records</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('service-history-view', 'Check Service History')"
                >
                  <div class="icon-wrapper bg-blue-light">
                    <i class="fas fa-clock-rotate-left fa-lg"></i>
                  </div>
                  <h5>Service / Maintenance</h5>
                  <p>Maintenance logs and service schedules</p>
                </div>
              </div>
            </div>
          </div>

          <!-- incident and intervention -->
          <div id="incident-mgmt-view" class="hidden fade-in">
            <div class="d-flex justify-content-between align-items-center mb-5">
              <div>
                <h3 class="fw-bold">Incident & Intervention</h3>
                <p class="text-muted">
                  Emergency reporting and field intervention management
                </p>
              </div>
              <button
                class="btn secondary-color rounded-pill px-4"
                onclick="showView('dashboard-view', 'Dashboard Overview')"
              >
                <i class="fas fa-arrow-left"></i> Back
              </button>
            </div>

            <div class="row g-4">
              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('impoundment-detail-view', 'Impoundment Details')"
                >
                  <div class="icon-wrapper bg-blue-light">
                    <i class="fas fa-gavel fa-lg"></i>
                  </div>
                  <h5>Impoundment</h5>
                  <p>Legal vehicle seizures and impound lot tracking</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('breakdown-detail-view', 'Vehicle Breakdown Details')"
                >
                  <div class="icon-wrapper bg-orange-light">
                    <i class="fas fa-car-crash fa-lg"></i>
                  </div>
                  <h5>Vehicle Breakdown</h5>
                  <p>Mechanical failure reports and roadside assistance</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('detention-detail-view', 'Illegal Detention Details')"
                >
                  <div class="icon-wrapper bg-yellow-light">
                    <i class="fas fa-handcuffs fa-lg"></i>
                  </div>
                  <h5>Illegal Detention</h5>
                  <p>Records of unauthorized custody by authorities</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('accident-detail-view', 'Accident Reporting')"
                >
                  <div
                    class="icon-wrapper bg-red-light"
                    style="background-color: #fef2f2; color: #dc2626"
                  >
                    <i class="fas fa-ambulance fa-lg"></i>
                  </div>
                  <h5>Accident</h5>
                  <p>Emergency crash reporting and damage assessment</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('bugged-down-view', 'Vehicle Bugged Down')"
                >
                  <div class="icon-wrapper bg-green-light">
                    <i class="fas fa-truck-pickup fa-lg"></i>
                  </div>
                  <h5>Vehicle Bugged Down</h5>
                  <p>Recovery for vehicles stuck in off-road terrain</p>
                </div>
              </div>

              <div class="col-md-4 col-lg-4">
                <div
                  class="vms-service-card"
                  onclick="showView('incident-history-view', 'Complete Incident History')"
                >
                  <div class="icon-wrapper bg-blue-light">
                    <i class="fas fa-history fa-lg"></i>
                  </div>
                  <h5>Incident History</h5>
                  <p>Archive of all past interventions and case resolutions</p>
                </div>
              </div>
            </div>
          </div>

          <!-- vehicle detail -->
          <div id="check-vehicle-view" class="hidden fade-in">
            <div id="vehicle-table-view">
              <div
                class="d-md-flex justify-content-between align-items-center mb-4"
              >
                <div class="d-flex align-items-center">
                  <button
                    class="btn secondary-hover rounded-circle me-3"
                    onclick="showView('vehicle-mgmt-view', 'Dashboard Overview')"
                    style="
                      width: 40px;
                      height: 40px;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                    "
                  >
                    <i class="fas fa-arrow-left"></i>
                  </button>

                  <h3 class="fw-bold mb-0">Vehicle Details</h3>
                </div>

                <button
                  class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                  data-bs-toggle="modal"
                  data-bs-target="#addVehicleModal"
                >
                  + Add New Vehicle
                </button>
              </div>

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
                    <div
                      class="icon-box bg-purple text-white"
                      style="background: #8e44ad"
                    >
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

              <div class="bg-white rounded-4 p-4 shadow-sm mt-3">
                <h5 class="fw-bold mb-3">Vehicle Log Table</h5>
                <div class="table-responsive">
                  <table class="table table-hover align-middle">
                    <thead class="table-light">
                      <tr>
                        <th>Date</th>
                        <th>Driver</th>
                        <th>Vehicle Make</th>
                        <th>Vehicle Model</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Registration</th>
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
                        <td>Enugu</td>
                        <td>Festac Town</td>
                        <td>123456</td>
                        <td><span class="badge bg-success">Active</span></td>
                        <td>
                          <button
                            class="btn btn-sm btn-light border"
                            onclick="toggleVehicleDetail(true)"
                          >
                            <i class="fas fa-eye"></i>
                          </button>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div id="vehicle-detail-view" class="d-none fade-in">
              <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleVehicleDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Vehicle Details</h3>
              </div>

              <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="container-fluid bg-white p-0">
                <div class="d-flex detail-row">
                    <div class="detail-label">Fleet No:</div>
                    <div>VH-789</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Make/Model:</div>
                    <div>Volkswagen Voyage</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Registration:</div>
                    <div>KA-01-AB-1234</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Vehicle Type:</div>
                    <div>Truck</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Status (Serviceable or Unserviceable):</div>
                    <div><span class="status-badge">Active</span></div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Assigned Driver:</div>
                    <div>John Doe (DRV-001)</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Last Service Date:</div>
                    <div>15 Jan 2024</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Next Service Due:</div>
                    <div>15 Mar 2024</div>
                </div>
                <div class="d-flex detail-row">
                    <div class="detail-label">Base / Site: </div>
                    <div>Enugu Depot</div>
                </div>
                <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Fuel Level:</div>
                    <div>85%</div>
                </div> -->
                <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Mileage:</div>
                    <div>85,250 km</div>
                </div> -->
                <div class="d-flex detail-row">
                    <div class="detail-label">Client/Vehicle Owner:</div>
                    <div>Rahul Sharma</div>
                </div>
            </div>
              </div>
            </div>
          </div>

          <!-- driver detail -->
          <div id="check-driver-view" class="hidden fade-in">
            <div id="driver-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('vehicle-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Driver Details</h3>
              </div>

             <div>
               <button
                class="btn secondary-hover rounded-pill px-4 mt-md-0 mt-3"
                 onclick="showView('driver-mate-view', 'Driver Mate Details')"
              >
                Driver Mate Detail
              </button>

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
                            <button class="btn btn-sm btn-light border" onclick="toggleDriverDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
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
                            <button class="btn btn-sm btn-light border" onclick="toggleDriverDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

            <div id="driver-detail-view" class="d-none fade-in">
              <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleDriverDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Driver Details</h3>
              </div>
              <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <div class="row">
                <div class="col-md-2 text-center mb-3">
                  <div
                    class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto shadow-sm"
                    style="
                      width: 120px;
                      height: 120px;
                      border: 3px solid var(--navy);
                    "
                  >
                    <i class="fas fa-user-tie fa-4x text-muted"></i>
                  </div>
                  <span class="badge bg-success mt-2">Verified</span>
                </div>

                <div class="col-md-10">
                  <div class="container-fluid p-0">
                    <div class="d-flex detail-row">
                      <div class="detail-label">Full Name:</div>
                      <div>John Doe</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Address:</div>
                      <div>Plot 45, Street 10, Karachi</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Phone Number:</div>
                      <div>+92 300 1234567</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Date Employed:</div>
                      <div>01-Jan-2022</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Date of Birth:</div>
                      <div>15-May-1990</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver's License Number:</div>
                      <div>DL-987654321</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Emergency Contact Name:</div>
                      <div>Jane Doe</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        Emergency Contact Phone Number:
                      </div>
                      <div>+92 321 7654321</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        Assigned Vehicle / Plate Number:
                      </div>
                      <div>VH-789 (ABC-123)</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">License Category / Class:</div>
                      <div>HTV / LTV</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">License Expiry Date:</div>
                      <div>12-Dec-2028</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        National ID / Passport Number:
                      </div>
                      <div>42101-1234567-1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>

           
          </div>

          <!-- driver mate detail -->
          <div id="driver-mate-view" class="hidden fade-in">
            <div id="driver-mate-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('check-driver-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Driver Mate Details</h3>
              </div>

            
              

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#addDriverModal"
              >
                + Add New Driver Mate
              </button>
             
            </div>

            <div class="row g-3 mb-4">
  <div class="col-md-3">
    <div class="stat-card shadow-sm">
      <div class="icon-box bg-success text-white">
        <i class="fas fa-hands-helping"></i>
      </div>
      <div>
        <h4 class="fw-bold m-0" id="total-mates">85</h4>
        <small class="">Total Mates</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="stat-card shadow-sm">
      <div class="icon-box bg-primary text-white">
        <i class="fas fa-truck-loading"></i>
      </div>
      <div>
        <h4 class="fw-bold m-0" id="active-mates">60</h4>
        <small class="">On Trip</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="stat-card shadow-sm">
      <div class="icon-box bg-warning text-dark">
        <i class="fas fa-user-check"></i>
      </div>
      <div>
        <h4 class="fw-bold m-0" id="mate-rating">4.5</h4>
        <small class="">Performance</small>
      </div>
    </div>
  </div>

  <div class="col-md-3">
    <div class="stat-card shadow-sm">
      <div class="icon-box bg-danger text-white">
        <i class="fas fa-user-slash"></i>
      </div>
      <div>
        <h4 class="fw-bold m-0" id="off-duty-mates">25</h4>
        <small class="">Available</small>
      </div>
    </div>
  </div>
</div>

             <div class="bg-white rounded-4 p-4 shadow-sm border mt-3">
  <h5 class="fw-bold mb-3">Motor Mate: Recent Trips & Performance</h5>
  <div class="table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th>Date</th>
          <th>Trip ID</th>
          <th>Assigned Driver</th> <th>Vehicle</th>
          <th>Route</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2025-12-20</td>
          <td>#TRP-502</td>
          <td>John Doe</td>
          <td>VH-789</td>
          <td>Karachi → Hyderabad</td>
          <td><span class="badge bg-success">Completed</span></td>
          <td>
            <button class="btn btn-sm btn-light border" onclick="toggleDriverMateDetail(true)">
              <i class="fas fa-eye"></i>
            </button>
          </td>
        </tr>
        <tr>
          <td>2025-12-18</td>
          <td>#TRP-488</td>
          <td>John Doe</td>
          <td>VH-789</td>
          <td>Karachi → Sukkur</td>
          <td><span class="badge bg-success">Completed</span></td>
          <td>
            <button class="btn btn-sm btn-light border" onclick="toggleDriverMateDetail(true)">
              <i class="fas fa-eye"></i>
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
            </div>

            <div id="driver-mate-detail-view" class="d-none fade-in">
              <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleDriverMateDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Driver Mate Details</h3>
              </div>
  

  <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
    <div class="row">
       <div class="col-md-2 text-center mb-3">
                  <div
                    class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto shadow-sm"
                    style="
                      width: 120px;
                      height: 120px;
                      border: 3px solid var(--navy);
                    "
                  >
                    <i class="fas fa-user-tie fa-4x text-muted"></i>
                  </div>
                  <span class="badge bg-success mt-2">Verified</span>
                </div>

      <div class="col-md-10 px-4">
        
        
        <div class="container-fluid p-0">
          <div class="d-flex detail-row">
            <div class="detail-label">Full Name:</div>
            <div class="fw-bold">Ali Raza</div>
          </div>
          <div class="d-flex detail-row">
            <div class="detail-label">Address:</div>
            <div>Flat B-402, North Karachi</div>
          </div>
           <div class="d-flex detail-row">
            <div class="detail-label">Phone Number:</div>
            <div class="fw-bold text-success">+92 345 1234567</div>
          </div>
           <div class="d-flex detail-row">
            <div class="detail-label">Date Employed:</div>
            <div>10-Jan-2023</div>
          </div>
         
          <div class="d-flex detail-row">
            <div class="detail-label">Date of Birth:</div>
            <div>15-Aug-1995</div>
          </div>

           <div class="d-flex detail-row">
            <div class="detail-label">Driver License Number (where applicable):</div>
            <div class="fw-bold">ML-KAR-9988</div>
          </div>

          <div class="d-flex detail-row">
            <div class="detail-label">Emergency Contact Name:</div>
            <div>Kamran Raza</div>
          </div>
          <div class="d-flex detail-row">
            <div class="detail-label">Emergency Contact Phone Number:</div>
            <div>+92 300 9988776</div>
          </div>

           <div class="d-flex detail-row">
            <div class="detail-label">Assigned / Approved Vehicle / Plate Number:</div>
            <div class="fw-bold">VH-789 (ABC-123)</div>
          </div>

           <div class="d-flex detail-row">
            <div class="detail-label">License Category / Class:</div>
            <div>LTV / Helper</div>
          </div>
          <div class="d-flex detail-row">
            <div class="detail-label">License Expiry Date:</div>
            <div class="text-danger">25-Dec-2028</div>
          </div>
          
           <div class="d-flex detail-row">
            <div class="detail-label">National ID / Passport:</div>
            <div>42101-9876543-1</div>
          </div>

          
         
        </div>
      </div>
    </div>
  </div>
            </div>
          </div>

          <!-- route and destination -->
          <div id="route-mgmt-view" class="hidden fade-in">
            <div id="route-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('vehicle-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Trip & Route</h3>
              </div>

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#newRouteModal"
              >
                + Create New Route
              </button>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-info text-white">
                    <i class="fas fa-route"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">12</h4>
                    <small class="">Active Routes</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-success text-white">
                    <i class="fas fa-check-circle"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">45</h4>
                    <small class="">Completed Today</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-warning text-dark">
                    <i class="fas fa-clock"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">3</h4>
                    <small class="">Delayed</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">1</h4>
                    <small class="">Blocked Route</small>
                  </div>
                </div>
              </div>
            </div>

             <div class="bg-white rounded-4 p-4 shadow-sm">
              <div
                class="d-flex justify-content-between align-items-center mb-3"
              >
                <h5 class="fw-bold m-0">Recent Destination Log</h5>
                <button class="btn btn-sm secondary-hover">
                  <i class="fas fa-download me-1"></i> Export Log
                </button>
              </div>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Trip ID</th>
                      <th>Company</th>
                      <th>Vehicle</th>
                      <th>Driver</th>
                      <th>Origin</th>
                      <th>Destination</th>
                      <th>Goods</th>
                      <th>Load/Content</th>
                      <th>Departure</th>
                      <th>Weather</th>
                      <th>Road</th>
                      <th>Status</th>
                      <th>Arrival Time</th>
                      <th>Notes</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="trip-table-body">
                    <tr>
                      <td>#TRP-1080</td>
                      <td>ABC Logistics</td>
                      <td>VH-789</td>
                      <td>Zaid Ali</td>
                      <td>Karachi</td>
                      <td>Lahore</td>
                      <td>Electronics</td>
                      <td>500 kg</td>
                      <td>06:00 AM</td>
                      <td>Sunny</td>
                      <td>Smooth</td>
                      <td><span class="badge bg-success">Arrived</span></td>
                      <td>21 Dec, 10:30 PM</td>
                      <td>No issues</td>
                      <td>
                            <button class="btn btn-sm btn-light border" onclick="toggleRouteDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                    <tr>
                      <td>#TRP-1081</td>
                      <td>XYZ Transport</td>
                      <td>VH-112</td>
                      <td>John Doe</td>
                      <td>Islamabad</td>
                      <td>Peshawar</td>
                      <td>Furniture</td>
                      <td>2 Tons</td>
                      <td>09:00 AM</td>
                      <td>Rainy</td>
                      <td>Rough</td>
                      <td>
                        <span class="badge bg-warning text-dark">Delayed</span>
                      </td>
                      <td>--</td>
                      <td>Traffic on motorway</td>
                      <td>
                            <button class="btn btn-sm btn-light border" onclick="toggleRouteDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

           <div id="route-detail-view" class="d-none fade-in">
            <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleRouteDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Trip & Route</h3>
              </div>
             <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              

              <div class="row align-items-center">
                <div class="col-md-12">
                  <div class="container-fluid p-0">
                    <div class="d-flex detail-row">
                      <div class="detail-label">Route ID:</div>
                      <div id="detail-route-id">RT-PK-99</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Date of Trip:</div>
                      <div id="detail-trip-date">05-Jan-2026</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Route:</div>
                      <div id="detail-route">Main Highway Section A</div>
                    </div>

                    <!-- <div class="d-flex detail-row">
                      <div class="detail-label">Company Name:</div>
                      <div id="detail-company-name">ABC Logistics</div>
                    </div> -->
                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver Name:</div>
                      <div id="detail-driver">Zaid Ali</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver Number:</div>
                      <div id="detail-driver-number">+92 300 1112233</div>
                    </div>
                    <div class="d-flex detail-row align-items-center">
                      <div class="detail-label">Driver Photograph:</div>
                      <div id="detail-driver-photo">
                        <img
                          src="path_to_driver_image.jpg"
                          alt="Driver"
                          class="img-thumbnail"
                          style="width: 100px; height: 100px; object-fit: cover"
                        />
                      </div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver License:</div>
                      <div id="detail-driver-license">DL-XYZ-786</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Motor Mate Name:</div>
                      <div id="detail-mate-name">Aslam Khan</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Motor Mate Phone Number:</div>
                      <div id="detail-mate-phone">+92 321 4455667</div>
                    </div>
                    <div class="d-flex detail-row align-items-center">
                      <div class="detail-label">Motor Mate Photograph:</div>
                      <div id="detail-mate-photo">
                        <img
                          src="path_to_mate_image.jpg"
                          alt="Motor Mate"
                          class="img-thumbnail"
                          style="width: 100px; height: 100px; object-fit: cover"
                        />
                      </div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Motor Mate License:</div>
                      <div id="detail-mate-license">ML-ABC-123</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        Vehicle Registration Number:
                      </div>
                      <div id="detail-vehicle">VH-789</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Port/Point of Departure:</div>
                      <div id="detail-departure-port">Port Qasim, Karachi</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Current Location:</div>
                      <div id="detail-current-location">Hyderabad Junction</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Final Destination:</div>
                      <div id="detail-destination" class="fw-bold text-danger">
                        Thokar Niaz Baig, Lahore
                      </div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Goods Transported:</div>
                      <div id="detail-goods">Electronics</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Load or Content Details:</div>
                      <div id="detail-load">500 kg</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Departure Time:</div>
                      <div id="detail-departure-time">06:00 AM</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Weather Conditions:</div>
                      <div id="detail-weather">Sunny</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">Road Conditions:</div>
                      <div id="detail-road">Smooth</div>
                    </div>
                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        Waybill No (where applicable):
                      </div>
                      <div id="detail-waybill">WB-12345678</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">
                        Expected date of arrival at destination:
                      </div>
                      <div id="detail-expected-arrival" class="fw-bold">
                        07-Jan-2026
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           
          </div>

          <!-- service history -->
          <div id="service-history-view" class="hidden fade-in">
            <div id="service-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('vehicle-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
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
                            <button class="btn btn-sm btn-light border" onclick="toggleServiceDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
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
                            <button class="btn btn-sm btn-light border" onclick="toggleServiceDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

            <div id="service-detail-view" class="d-none fade-in">
              <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleServiceDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Service / Maintenance</h3>
              </div>
              <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <div class="row ">
                <div class="col-12">
                  <div class="d-flex detail-row">
                    <div class="detail-label">Date of Service:</div>
                    <div id="service-date">05-Jan-2026</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Description of Work Done:</div>
                    <div id="work-description">
                      Oil change, brake inspection, and filter replacement.
                    </div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Vehicle Plate Number:</div>
                    <div id="vehicle-plate">VH-789 (ABC-123)</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Odometer Reading / Mileage:</div>
                    <div id="odometer-reading">85,250 km</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Parts Replaced:</div>
                    <div id="parts-replaced">Oil Filter, Brake Pads</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">
                      Service Provider / Mechanic Name:
                    </div>
                    <div id="mechanic-name">City Auto Workshop</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Service Record Number:</div>
                    <div id="service-record-no">SR-99821</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">
                      Type of Service (Routine / Repair / Breakdown):
                    </div>
                    <div id="service-type">Repair</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">
                      Next Service Due (Date or Mileage):
                    </div>
                    <div id="next-service-due">95,000 km or 05-July-2026</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Date of Service:</div>
                    <div id="service-date">05-Jan-2026</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Description of Work Done:</div>
                    <div id="work-description">
                      Oil change, brake inspection, and filter replacement.
                    </div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Accident History:</div>
                    <div id="accident-history">
                      <span class="badge bg-warning text-dark">Minor Bump</span>
                      <p class="mb-0 mt-1 small text-muted">
                        Damage sustained severity: Low - Left headlight
                        replaced.
                      </p>
                    </div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">
                      Remark on Physical Inspection:
                    </div>
                    <div id="physical-inspection" class="fst-italic">
                      Body work clean, tire pressure optimal.
                    </div>
                  </div>
                </div>
              </div>
            </div>

            </div>
          </div>

          <!-- waybill detail -->
          <div id="waybill-details-view" class="hidden fade-in">
            <div id="waybill-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('vehicle-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Waybill & Tracking</h3>
              </div>

              <div class="d-flex gap-2">
                <button class="btn secondary-hover rounded-pill px-3">
                  <i class="fas fa-print"></i>
                </button>
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
                            <button class="btn btn-sm btn-light border" onclick="toggleWaybillDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
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
                            <button class="btn btn-sm btn-light border" onclick="toggleWaybillDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>


            <div id="waybill-detail-view" class="d-none fade-in">
              <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleWaybillDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Waybill & Tracking</h3>
              </div>
              <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <div class="row pt-4">
                <div class="col-12">
                  <div class="d-flex detail-row">
                    <div class="detail-label">Waybill Number:</div>
                    <div class="fw-bold" id="waybill-no">WB-5520</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Date:</div>
                    <div id="date">20 Dec 2025</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Sender Name:</div>
                    <div id="sender-name">Global Logistics Inc.</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Receiver Name:</div>
                    <div id="receiver-name">Green Energy Corp</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Pickup Location:</div>
                    <div id="pickup-location">Port Qasim, Karachi</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Delivery Location:</div>
                    <div id="delivery-location">Industrial Area, Lahore</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Description of Goods:</div>
                    <div id="goods-desc">Electronics / Solar Panels</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Quantity:</div>
                    <div id="total-quantity">45 Units / 4,500 KG</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Vehicle Plate Number:</div>
                    <div id="vehicle-plate">VH-789 (ABC-123)</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Driver Name:</div>
                    <div id="driver-name">Ahmed Khan</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Motor Mate Name:</div>
                    <div id="motor-mate-name">Ali Raza</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Date Dispatched:</div>
                    <div id="date-dispatched">20 Dec 2025</div>
                  </div>

                  <div class="d-flex detail-row text-secondary">
                    <div class="detail-label">Last Checkpoint:</div>
                    <div id="last-checkpoint">Hyderabad Toll Plaza</div>
                  </div>

                  <div class="d-flex detail-row fw-bold text-success">
                    <div class="detail-label">Current Checkpoint:</div>
                    <div id="current-checkpoint">Moro Service Area</div>
                  </div>

                  <div class="d-flex detail-row text-primary">
                    <div class="detail-label">Next Checkpoint:</div>
                    <div id="next-checkpoint">Sukkur Interchange</div>
                  </div>

                  <div class="d-flex detail-row">
                    <div class="detail-label">Remarks/Observations:</div>
                    <div id="remarks" class="fst-italic text-muted">
                      Vehicle running on schedule.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>  
          </div>

          <!-- impoundment -->
          <div id="impoundment-detail-view" class="hidden fade-in">
            <div id="impound-table-view">
              <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold text-navy m-0">Impoundment Report</h3>
              </div>
              <button
                class="btn secondary-color rounded-pill px-4 shadow-sm"
                data-bs-toggle="modal"
                data-bs-target="#impoundReportModal"
              >
                <i class="fas fa-plus me-2"></i>New Impound Report
              </button>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="stat-card shadow-sm border-0">
                  <div class="icon-box bg-danger-subtle text-danger">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">14</h4>
                    <small class="">Current Impounds</small>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat-card shadow-sm border-0">
                  <div class="icon-box bg-warning-subtle text-warning">
                    <i class="fas fa-file-invoice"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">05</h4>
                    <small class="">Pending Tickets</small>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat-card shadow-sm border-0">
                  <div class="icon-box bg-success-subtle text-success">
                    <i class="fas fa-undo"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">28</h4>
                    <small class="">Released This Month</small>
                  </div>
                </div>
              </div>
            </div>

             <div class="bg-white rounded-4 p-4 shadow-sm border">
              <div
                class="d-flex justify-content-between align-items-center mb-4"
              >
                <h5 class="fw-bold m-0 text-navy">
                  Submitted Impoundment Records
                </h5>
                <div class="d-flex gap-2">
                  <input
                    type="text"
                    class="form-control form-control-sm border-2"
                    placeholder="Search Vehicle ID..."
                    style="width: 200px"
                  />
                  <button class="btn btn-sm secondary-hover">
                    <i class="fas fa-filter"></i>
                  </button>
                </div>
              </div>

              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead
                    class="table-light text-secondary small text-uppercase"
                  >
                    <tr>
                      <th class="ps-3">Vehicle & Driver</th>
                      <th>Company</th>
                      <th>Authority</th>
                      <th>Reason</th>
                      <th>Date & Time</th>
                      <th>Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="ps-3">
                        <div class="d-flex align-items-center">
                          <div
                            class="rounded-circle bg-danger-subtle p-2 me-3 text-danger"
                          >
                            <i class="fas fa-truck"></i>
                          </div>
                          <div>
                            <div class="fw-bold">VH-789</div>
                            <small class="text-muted">Muhammad Ahmed</small>
                          </div>
                        </div>
                      </td>
                      <td><small class="fw-bold">ABC Logistics</small></td>
                      <td><small>Traffic Police</small></td>
                      <td>
                        <span class="badge bg-light text-dark border"
                          >Obstruction</span
                        >
                      </td>
                      <td><small>22 Dec 2025, 11:30 AM</small></td>
                      <td><span class="badge bg-danger">Impounded</span></td>
                     <td>
                            <button class="btn btn-sm btn-light border" onclick="toggleImpoundDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

           <div id="impound-detail-view" class="d-none fade-in">
            <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleImpoundDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Impoundment Report</h3>
              </div>
             <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="container-fluid p-0">
                    <div class="d-flex detail-row">
                      <div class="detail-label">Reference Number:</div>
                      <div id="det-imp-ref">REF-108245</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Date of Impoundment:</div>
                      <div id="det-imp-date">22 Dec 2025 | 11:30 AM</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Vehicle Plate Number:</div>
                      <div id="det-imp-plate" >VH-789 - Toyota Hilux</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver Name:</div>
                      <div id="det-imp-driver">Muhammad Ahmed</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Location:</div>
                      <div id="det-imp-location">Central Depot Yard - B4</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Reason for Impoundment:</div>
                      <div id="det-imp-reason">
                        <div class="">Obstruction</div>
                        <ul class="small text-muted mb-0" style="list-style: none; padding-left: 0;">
                          <li>- Non-Payment or ticket or emblems</li>
                          <li>- Illegal parking</li>
                          <li>- Document issues</li>
                          <li>- Vehicle safety (low thread, lights)</li>
                          <li>- Others</li>
                        </ul>
                      </div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Authority Involved:</div>
                      <div id="det-imp-authority">Traffic Police, RTO</div>
                    </div>

                    <div class="d-flex detail-row border-bottom-0">
                      <div class="detail-label">Vehicle Status / Location Packed:</div>
                      <div id="det-imp-status">Confirmed / Secured</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div>

           
          </div>

          <!-- breakdown -->
          <div id="breakdown-detail-view" class="hidden fade-in">
           <div id="breakdown-table">
               <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-start">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <div>
                  <h3 class="fw-bold text-navy">Vehicle Breakdown</h3>
                  <p class="text-muted small">
                    Log mechanical failures and request recovery support
                  </p>
                </div>
              </div>

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#addBreakdownModal"
              >
                + Log New Breakdown
              </button>
            </div>

            <div class="row g-3 mb-4">
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

            <div class="bg-white rounded-4 p-4 shadow-sm border">
              <h5 class="fw-bold mb-3 text-navy">Recent Breakdown Logs</h5>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light text-muted small uppercase">
                    <tr>
                      <th>Vehicle ID</th>
                      <th>Issue Type</th>
                      <th>Location</th>
                      <th>Severity</th>
                      <th>Reported At</th>
                      <th>Status</th>
                      <th class="text-center">Evidence</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <strong>VH-789</strong><br /><small class="text-muted"
                          >Toyota Hilux</small
                        >
                      </td>
                      <td>
                        <span
                          class="text-truncate d-inline-block"
                          style="max-width: 150px"
                          >Axle defect, Injector defect</span
                        >
                      </td>
                      <td>
                        <small
                          ><i
                            class="fas fa-map-marker-alt text-danger me-1"
                          ></i>
                          M-2 Motorway, Mile 45</small
                        >
                      </td>
                      <td>
                        <span class="badge rounded-pill bg-danger"
                          >Critical</span
                        >
                      </td>
                      <td>23 Dec, 10:30 AM</td>
                      <td>
                        <span class="badge bg-warning text-dark"
                          ><i class="fas fa-clock me-1"></i>Awaiting Tow</span
                        >
                      </td>
                      <td class="text-center">
                        <i
                          class="fas fa-image text-primary"
                          title="View Photo"
                          style="cursor: pointer"
                        ></i>
                      </td>
                     <td>
                            <button class="btn btn-sm btn-light border" onclick="toggleBreakdownDetail(true)">
                                <i class="fas fa-eye"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                      <td>
                        <strong>VH-112</strong><br /><small class="text-muted"
                          >Suzuki Carry</small
                        >
                      </td>
                      <td>Gear selector defect</td>
                      <td>
                        <small
                          ><i
                            class="fas fa-map-marker-alt text-danger me-1"
                          ></i>
                          Saddar, Karachi</small
                        >
                      </td>
                      <td>
                        <span class="badge rounded-pill bg-info text-white"
                          >Minor</span
                        >
                      </td>
                      <td>23 Dec, 08:15 AM</td>
                      <td>
                        <span class="badge bg-success text-white"
                          ><i class="fas fa-check me-1"></i>Fixed</span
                        >
                      </td>
                      <td class="text-center">
                        <i
                          class="fas fa-image text-primary"
                          title="View Photo"
                          style="cursor: pointer"
                        ></i>
                      </td>
                      <td>
                        <button class="btn btn-sm btn-light border" onclick="toggleBreakdownDetail(true)">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
           </div>

           <div id="breakdown-detail" class="d-none fade-in ">
            <div class="d-flex align-items-center mb-4">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="toggleBreakdownDetail(false)"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>
                <h3 class="fw-bold mb-0">Vehicle Breakdown</h3>
              </div>
             <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <div class="row">
                <div class="col-md-12">
                  <div class="container-fluid p-0">
                    
                    <div class="d-flex detail-row">
                      <div class="detail-label">Vehicle Plate Number:</div>
                      <div id="det-brk-plate">VH-789 (Toyota Hilux)</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Driver Name:</div>
                      <div id="det-brk-driver">Muhammad Ahmed</div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Location:</div>
                      <div id="det-brk-location">
                        <i class="fas fa-map-marker-alt me-1"></i> M-5 Motorway (Near Sukkur)
                      </div>
                    </div>

                    <div class="d-flex detail-row">
                      <div class="detail-label">Breakdown Type:</div>
                      <div id="det-brk-type">
                        <div class="small text-muted">
                          - Gas Cut<br>
                          - Injector defect<br>
                          - Axle defect<br>
                          - oil seal defect<br>
                          - Clutch defect<br>
                          - Kick starter defect<br>
                          - Gear selector defect<br>
                          - Others (define)
                        </div>
                      </div>
                    </div>

                    <div class="d-flex detail-row border-bottom-0">
                      <div class="detail-label">Action Taken:</div>
                      <div id="det-brk-action">Recovery Vehicle Dispatched</div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
           </div>

            
          </div>

          <!-- illegal -->
          <div id="detention-detail-view" class="hidden fade-in">
            <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Illegal Detention Details</h3>
              </div>

              <button
                class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3"
                data-bs-toggle="modal"
                data-bs-target="#addDetentionModal"
              >
                + Report New Detention
              </button>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-danger text-white">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">02</h4>
                    <small class="">Active Cases</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-primary text-white">
                    <i class="fas fa-gavel"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">15</h4>
                    <small class="">Total Reported</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-success text-white">
                    <i class="fas fa-user-check"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">13</h4>
                    <small class="">Resolved/Released</small>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="stat-card shadow-sm">
                  <div class="icon-box bg-warning text-dark">
                    <i class="fas fa-file-contract"></i>
                  </div>
                  <div>
                    <h4 class="fw-bold m-0">01</h4>
                    <small class="">Legal Review</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <h6 class="text-muted mb-3">Select Active Case</h6>
              <select class="form-select mb-4 fw-bold border-2">
                <option>CASE-5590 - VH-112 (At Highway Checkpoint)</option>
              </select>

              <div class="container-fluid bg-white p-0">
                <div class="d-flex detail-row">
                  <div class="detail-label">Vehicle ID:</div>
                  <div class="fw-bold">VH-112</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Detaining Agency:</div>
                  <div>Traffic Police (Highway Division)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Officer In-charge:</div>
                  <div>Insp. Ahmed Ali</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Detention Location:</div>
                  <div>Ravi Toll Plaza, M-2 North</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Reason Cited:</div>
                  <div class="text-danger">
                    Alleged Overloading (Under Dispute)
                  </div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Detention Date/Time:</div>
                  <div>22 Dec 2025 | 10:45 AM</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Legal Status:</div>
                  <div>
                    <span class="badge bg-warning text-dark"
                      >Under Investigation</span
                    >
                  </div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Driver Status:</div>
                  <div class="text-success fw-bold">
                    Safe (At Police Station)
                  </div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Company Action:</div>
                  <div>Legal Advisor Dispatched</div>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-4 p-4 shadow-sm">
              <h5 class="fw-bold mb-3">Detention Logs</h5>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Case ID</th>
                      <th>Vehicle</th>
                      <th>Agency</th>
                      <th>Status</th>
                      <th>Resolution Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#CASE-5590</td>
                      <td>VH-112</td>
                      <td>Traffic Police</td>
                      <td><span class="badge bg-danger">Detained</span></td>
                      <td>--</td>
                      <td>
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td>#CASE-5582</td>
                      <td>VH-456</td>
                      <td>Customs</td>
                      <td><span class="badge bg-success">Released</span></td>
                      <td>15 Dec 2025</td>
                      <td>
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- accident -->
          <div id="accident-detail-view" class="hidden fade-in">
            <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div class="d-flex align-items-center">
                <button
                  class="btn secondary-hover rounded-circle me-3"
                  onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  "
                >
                  <i class="fas fa-arrow-left"></i>
                </button>

                <h3 class="fw-bold">Accident & Crash Reporting</h3>
              </div>

              <button
                class="btn secondary-color rounded-pill px-4 shadow-sm"
                data-bs-toggle="modal"
                data-bs-target="#addAccidentModal"
              >
                <i class="fas fa-plus me-1"></i> Report New Accident
              </button>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-3">
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
              <div class="col-md-3">
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
              <div class="col-md-3">
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
              <div class="col-md-3">
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

            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <h6 class="text-muted mb-3">Recent Incident Records</h6>
              <select class="form-select mb-4 fw-bold border-2">
                <option>ACC-2025-001 | VH-789 | N-5 Highway (Sahiwal)</option>
              </select>

              <div class="container-fluid bg-white p-0">
                <div class="d-flex detail-row">
                  <div class="detail-label">Vehicle ID:</div>
                  <div class="fw-bold">VH-789</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Driver Name:</div>
                  <div>Muhammad Bilal (DRV-042)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Location:</div>
                  <div>Near Sahiwal Bypass, N-5 Highway</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Date & Time:</div>
                  <div>20 Dec 2025 | 11:30 PM</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Accident Severity:</div>
                  <div><span class="badge bg-danger">Serious Damage</span></div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Casualties / Injuries:</div>
                  <div class="text-danger fw-bold">
                    Minor Injuries (Driver Safe)
                  </div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Third Party Involved:</div>
                  <div>Yes (Private Car - ABC 123)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Police FIR Status:</div>
                  <div>Registered (#FIR-990)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Insurance Claim:</div>
                  <div><span class="badge bg-primary">In Process</span></div>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-4 p-4 shadow-sm border">
              <h5 class="fw-bold mb-3">Incident Log Table</h5>
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Accident ID</th>
                      <th>Vehicle</th>
                      <th>Location</th>
                      <th>Severity</th>
                      <th>FIR Report</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#ACC-2025-001</td>
                      <td>VH-789</td>
                      <td>Sahiwal Bypass</td>
                      <td><span class="badge bg-danger">Serious</span></td>
                      <td>
                        <i class="fas fa-file-pdf text-danger me-1"></i> FIR-990
                      </td>
                      <td>
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- bugged-down -->
          <div id="bugged-down-view" class="hidden fade-in">
            <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div>
                <div class="d-flex align-items-start">
                  <button
                    class="btn secondary-hover rounded-circle me-3"
                    onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                    style="
                      width: 40px;
                      height: 40px;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                    "
                  >
                    <i class="fas fa-arrow-left"></i>
                  </button>

                  <div>
                    <h3 class="fw-bold text-navy">Vehicle Bugged Down</h3>
                    <p class="text-muted small">
                      Manage vehicles stuck in off-road conditions (Mud, Sand,
                      etc.)
                    </p>
                  </div>
                </div>
              </div>
              <div class="d-flex gap-2">
                <button
                  class="btn secondary-color rounded-pill px-4 fw-bold shadow-sm"
                  data-bs-toggle="modal"
                  data-bs-target="#addBuggedModal"
                >
                  <i class="fas fa-plus me-1"></i> Report Stuck Vehicle
                </button>
              </div>
            </div>

            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="stat-card shadow-sm p-3">
                  <div class="d-flex align-items-center">
                    <div class="icon-box bg-success-subtle text-success me-3">
                      <i class="fas fa-link"></i>
                    </div>
                    <div>
                      <h4 class="fw-bold m-0">01</h4>
                      <small class="fw-bold">UNDER RECOVERY</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="stat-card shadow-sm p-3">
                  <div class="d-flex align-items-center">
                    <div
                      class="icon-box bg-secondary-subtle text-secondary me-3"
                    >
                      <i class="fas fa-check-circle"></i>
                    </div>
                    <div>
                      <h4 class="fw-bold m-0">08</h4>
                      <small class="fw-bold">TOTAL RECOVERED</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
              <h6 class="text-muted mb-3">Active Stuck Cases</h6>
              <select class="form-select mb-4 fw-bold border-2">
                <option>VH-552 - Phansay Wala Yard (Mud Condition)</option>
              </select>

              <div class="container-fluid bg-white p-0">
                <div class="d-flex detail-row">
                  <div class="detail-label">Vehicle ID:</div>
                  <div class="fw-bold">VH-552</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Terrain Type:</div>
                  <div>Deep Mud / Soft Soil</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Location:</div>
                  <div>Construction Site - Sector G-13</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Stuck Depth:</div>
                  <div class="text-danger fw-bold">Axle Deep (Critical)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Reason for Incident:</div>
                  <div>Weather Condition</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Assigned Support:</div>
                  <div>Recovery Team A (On-route)</div>
                </div>
                <div class="d-flex detail-row">
                  <div class="detail-label">Current Status:</div>
                  <div>
                    <span class="badge bg-success">Rescue Dispatched</span>
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
                      <th>Vehicle</th>
                      <th>Terrain</th>
                      <th>Reported</th>
                      <th>Reason</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><strong>VH-552</strong></td>
                      <td>Mud</td>
                      <td>2 Hours Ago</td>
                      <td>Weather Condition</td>
                      <td>
                        <span class="badge bg-info text-white"
                          >In Progress</span
                        >
                      </td>
                      <td>
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-eye"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <!-- incident history -->
          <div id="incident-history-view" class="hidden fade-in">
            <div
              class="d-md-flex justify-content-between align-items-center mb-4"
            >
              <div>
                <div class="d-flex align-items-start">
                  <button
                    class="btn secondary-hover rounded-circle me-3"
                    onclick="showView('incident-mgmt-view', 'Dashboard Overview')"
                    style="
                      width: 40px;
                      height: 40px;
                      display: flex;
                      align-items: center;
                      justify-content: center;
                    "
                  >
                    <i class="fas fa-arrow-left"></i>
                  </button>

                  <div>
                    <h3 class="fw-bold text-navy">Incident History Log</h3>
                    <p class="text-muted small">
                      Comprehensive archive of all fleet interventions and
                      incidents
                    </p>
                  </div>
                </div>
              </div>
              <div class="d-flex gap-2">
                <button class="btn secondary-color rounded-pill px-3">
                  <i class="fas fa-download me-1"></i> Export Report
                </button>
              </div>
            </div>

            <div class="bg-white p-3 rounded-4 shadow-sm border mb-4">
              <div class="row g-2 align-items-end">
                <div class="col-md-3">
                  <label class="small fw-bold">Incident Type</label>
                  <select class="form-select border-2">
                    <option>All Incidents</option>
                    <option>Accidents</option>
                    <option>Breakdowns</option>
                    <option>Impoundments</option>
                    <option>Detentions</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label class="small fw-bold">Vehicle ID</label>
                  <input
                    type="text"
                    class="form-control border-2"
                    placeholder="e.g. VH-789"
                  />
                </div>
                <div class="col-md-3">
                  <label class="small fw-bold">Date Range</label>
                  <input type="date" class="form-control border-2" />
                </div>
                <div class="col-md-3">
                  <button class="btn secondary-color w-100 fw-bold">
                    <i class="fas fa-search me-1"></i> Filter Records
                  </button>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-4 p-4 shadow-sm border">
              <div class="table-responsive">
                <table class="table table-hover align-middle">
                  <thead class="table-light">
                    <tr>
                      <th>Ref #</th>
                      <th>Incident Type</th>
                      <th>Vehicle / Driver</th>
                      <th>Date</th>
                      <th>Resolution Status</th>
                      <th class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="fw-bold text-primary">#INC-9901</td>
                      <td>
                        <span
                          class="badge bg-danger-subtle text-danger p-2 px-3 rounded-pill"
                        >
                          <i class="fas fa-ambulance me-1"></i> Accident
                        </span>
                      </td>
                      <td>
                        <div class="fw-bold">VH-789</div>
                        <small class="text-muted">Driver: Zaid Ali</small>
                      </td>
                      <td>20 Dec 2025</td>
                      <td><span class="badge bg-success">Closed</span></td>
                      <td class="text-center">
                        <button
                          class="btn btn-sm btn-light border"
                          title="View Detailed Report"
                        >
                          <i class="fas fa-file-alt text-navy"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-primary">#INC-8852</td>
                      <td>
                        <span
                          class="badge bg-warning-subtle text-dark p-2 px-3 rounded-pill"
                        >
                          <i class="fas fa-tools me-1"></i> Breakdown
                        </span>
                      </td>
                      <td>
                        <div class="fw-bold">VH-112</div>
                        <small class="text-muted">Driver: John Doe</small>
                      </td>
                      <td>18 Dec 2025</td>
                      <td>
                        <span class="badge bg-info text-white"
                          >Maintenance</span
                        >
                      </td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-file-alt text-navy"></i>
                        </button>
                      </td>
                    </tr>
                    <tr>
                      <td class="fw-bold text-primary">#INC-7721</td>
                      <td>
                        <span
                          class="badge bg-dark text-white p-2 px-3 rounded-pill"
                        >
                          <i class="fas fa-handcuffs me-1"></i> Detention
                        </span>
                      </td>
                      <td>
                        <div class="fw-bold">VH-456</div>
                        <small class="text-muted">Driver: Bilal Ahmed</small>
                      </td>
                      <td>15 Dec 2025</td>
                      <td><span class="badge bg-danger">Legal Action</span></td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-light border">
                          <i class="fas fa-file-alt text-navy"></i>
                        </button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <div
                class="d-flex justify-content-between align-items-center mt-4"
              >
                <small class="text-muted">Showing page 1 of 12</small>
                <nav>
                  <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
 </div>
</div>

<?php 
include("footer.php");
?>
