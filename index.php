<?php
session_start();

if (!isset($_SESSION['user'])) {
  header("Location: ./auth/login.php");
  exit();
}
?>
<?php
include("header_meta.php");
?>

<div id="dashboard-page">

  <?php
  include("sidebar.php");
  ?>
  <div id="main-wrapper">
    <?php
    include("nav.php");

    ?>

    <div class="px-4 px-md-5 py-4">
      <div id="dashboard-view" class="fade-in">

        <div class="row align-items-center mb-4">
          <div class="col-md-7 col-xl-9">
            <h2 class="fw-bold  tracking-tight mb-1">Dashboard</h2>
          </div>

          <div class="col-md-5 col-xl-3">
            <div class="d-flex justify-content-md-end mt-3 mt-md-0">

              <div class="input-group shadow-sm border rounded-3">
                <select class="form-select border-0 py-2  small "
                  style="cursor: pointer; outline: none; box-shadow: none; background-color: #ffffff;">
                  <option value="24h">Last 24 hours</option>
                  <option value="7d" selected>Last 7 days</option>
                  <option value="14d">Last 14 days</option>
                  <option value="30d">Last 30 days</option>
                  <option value="90d">Last 90 days</option>
                  <option value="12m">All</option>
                </select>

                <button class="btn secondary-color border-1 px-3" type="button" id="filterBtn">
                  <i class="fas fa-filter small"></i>
                </button>
              </div>

            </div>
          </div>
        </div>

        <div class="row g-4 mb-5">

          <div class="col-xl-4 col-md-6">
            <a href="./report-analytics/total-vehicle.php" class="text-decoration-none">
              <div class="card metric-card border-0 rounded-5 shadow-hover h-100">
                <div class="card-body p-4 position-relative overflow-hidden">
                  <div class="metric-shape bg-primary-subtle"></div>
                  <div class="d-flex align-items-center position-relative">
                    <div class="icon-glow bg-primary text-white me-4">
                      <i class="fas fa-truck-fast fa-lg"></i>
                    </div>
                    <div>
                      <h3 class="fw-bolder mb-0 text-dark">128</h3>
                      <p class="text-muted small fw-bold mb-0 opacity-75">Total Vehicles</p>
                    </div>
                    <div class="ms-auto text-end">
                      <span class="badge rounded-pill bg-light text-success fw-bold p-2 small">
                        <i class="fas fa-caret-up"></i> 8%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-xl-4 col-md-6">
            <a href="./report-analytics/incident.php" class="text-decoration-none">
              <div class="card metric-card border-0 rounded-5 shadow-hover h-100">
                <div class="card-body p-4 position-relative overflow-hidden">
                  <div class="metric-shape bg-danger-subtle"></div>
                  <div class="d-flex align-items-center position-relative">
                    <div class="icon-glow bg-danger text-white me-4">
                      <i class="fas fa-shield-heart fa-lg"></i>
                    </div>
                    <div>
                      <h3 class="fw-bolder mb-0 text-dark">05</h3>
                      <p class="text-muted small fw-bold mb-0 opacity-75">Active Incidents</p>
                    </div>
                    <div class="ms-auto text-end">
                      <span class="badge rounded-pill bg-light text-danger fw-bold p-2 small">
                        <i class="fas fa-caret-down"></i> 2%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-xl-4 col-md-6">
            <a href="./vehicle/trip-route.php" class="text-decoration-none">
              <div class="card metric-card border-0 rounded-5 shadow-hover h-100">
                <div class="card-body p-4 position-relative overflow-hidden">
                  <div class="metric-shape bg-success-subtle"></div>
                  <div class="d-flex align-items-center position-relative">
                    <div class="icon-glow bg-success text-white me-4">
                      <i class="fas fa-map-location-dot fa-lg"></i>
                    </div>
                    <div>
                      <h3 class="fw-bolder mb-0 text-dark">42</h3>
                      <p class="text-muted small fw-bold mb-0 opacity-75">Ongoing Trips</p>
                    </div>
                    <div class="ms-auto text-end">
                      <span class="badge rounded-pill bg-light text-success fw-bold p-2 small">
                        <i class="fas fa-caret-up"></i> 12%
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-xl-4 col-md-6">
            <a href="./goods-inspections/goods-inspection.php" class="text-decoration-none">
              <div class="card metric-card border-0 rounded-5 shadow-hover h-100">
                <div class="card-body p-4 position-relative overflow-hidden">
                  <div class="metric-shape bg-info-subtle"></div>
                  <div class="d-flex align-items-center position-relative">
                    <div class="icon-glow bg-info text-white me-4">
                      <i class="fas fa-clipboard-list fa-lg"></i>
                    </div>
                    <div>
                      <h3 class="fw-bolder mb-0 text-dark">18</h3>
                      <p class="text-muted small fw-bold mb-0 opacity-75">Inspections</p>
                    </div>
                    <div class="ms-auto text-end">
                      <span class="badge rounded-pill bg-light text-primary fw-bold p-2 small">
                        Daily
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

          <div class="col-xl-4 col-md-6">
            <a href="./vehicle-tracking/vehicle-tracking.php" class="text-decoration-none">
              <div class="card metric-card border-0 rounded-5 shadow-hover h-100">
                <div class="card-body p-4 position-relative overflow-hidden">
                  <div class="metric-shape bg-warning-subtle"></div>
                  <div class="d-flex align-items-center position-relative">
                    <div class="icon-glow bg-warning text-white me-4">
                      <i class="fas fa-satellite-dish fa-lg"></i>
                    </div>
                    <div>
                      <h3 class="fw-bolder mb-0 text-dark">110</h3>
                      <p class="text-muted small fw-bold mb-0 opacity-75">Live GPS</p>
                    </div>
                    <div class="ms-auto text-end">
                      <div class="spinner-grow spinner-grow-sm text-warning" role="status"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>

        </div>


        <div class="row g-4 mb-5">
          <div class="col-xl-8 ">
            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-header bg-transparent border-0 pt-4 px-4">
                <h5 class="fw-bold mb-0">Operation Performance</h5>
                <p class="text-muted small">Monthly Trip & Incident Analytics</p>
              </div>
              <div class="card-body px-4 pb-4">
                <canvas id="mainChart" style="height: 350px;"></canvas>
              </div>
            </div>
          </div>

          <div class="col-xl-4 ">
            <div class="card border-0 shadow-sm rounded-4">
              <div class="card-header bg-transparent border-0 pt-4 px-4">
                <h5 class="fw-bold mb-0">Fleet Health</h5>
                <p class="text-muted small">Vehicle Status Overview</p>
              </div>
              <div class="card-body px-4 pb-4 d-flex align-items-center justify-content-center">
                <div style="width: 100%; max-width: 250px;">
                  <canvas id="statusChart"></canvas>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row g-4 mb-5">
        <div class="col-xl-8 col-lg-7">
          <div class="card border-0 shadow-sm rounded-5 overflow-hidden">
            <div
              class="card-header bg-white border-0 py-4 px-4 d-flex flex-column flex-sm-row justify-content-between align-items-sm-center">
              <div>
                <h5 class="fw-bold text-dark mb-1">Recent Activity Log</h5>
                <p class="text-muted small mb-0">Daily fleet movement tracking</p>
              </div>
              <div class="mt-3 mt-sm-0">
                <a href="#" class="btn secondary-color btn-sm rounded-pill px-3 fw-bold border-2">
                  View All <i class="fas fa-external-link-alt ms-1 small"></i>
                </a>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="bg-light text-secondary small text-uppercase fw-bold">
                    <tr>
                      <th class="ps-4 border-0 py-3">Vehicle & Driver</th>
                      <th class="border-0 py-3">Event</th>
                      <th class="border-0 py-3">Timeline</th>
                      <th class="pe-4 border-0 py-3 text-end">Status</th>
                    </tr>
                  </thead>
                  <tbody class="border-top-0">
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 bg-primary-subtle text-primary rounded-3 p-2 me-3">
                            <i class="fas fa-truck-pickup fa-lg"></i>
                          </div>
                          <div>
                            <div class="fw-bold text-dark mb-0">VH-789</div>
                            <div class="text-muted x-small">Zaid Ali</div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-info-subtle text-info rounded-pill px-3 py-2 fw-semibold">
                          Inspection
                        </span>
                      </td>
                      <td>
                        <div class="small fw-bold text-dark">10 mins ago</div>
                        <div class="text-muted x-small">Hub - Gate 2</div>
                      </td>
                      <td class="pe-4 text-end">
                        <div class="p-2 bg-success-subtle text-success d-inline-block rounded-circle"
                          style="width: 32px; height: 32px; line-height: 16px;">
                          <i class="fas fa-check small"></i>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td class="ps-4">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 bg-danger-subtle text-danger rounded-3 p-2 me-3">
                            <i class="fas fa-car-burst fa-lg"></i>
                          </div>
                          <div>
                            <div class="fw-bold text-dark mb-0">VH-452</div>
                            <div class="text-muted x-small">M. Usman</div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <span class="badge bg-danger-subtle text-danger rounded-pill px-3 py-2 fw-semibold">
                          Breakdown
                        </span>
                      </td>
                      <td>
                        <div class="small fw-bold text-dark">25 mins ago</div>
                        <div class="text-muted x-small">Expressway KM-45</div>
                      </td>
                      <td class="pe-4 text-end">
                        <div class="p-2 bg-warning-subtle text-warning d-inline-block rounded-circle"
                          style="width: 32px; height: 32px; line-height: 16px;">
                          <i class="fas fa-clock small"></i>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-lg-5">
          <div class="card border-0 shadow-sm rounded-5 bg-white h-100 p-2">
            <div class="card-body p-4">
              <h5 class="fw-bold mb-4 d-flex align-items-center">
                <span class="p-2 secondary-color rounded-3 me-3 text-white">
                  <i class="fas fa-radar fa-xs"></i>
                </span>
                Monitoring
              </h5>

              <div class="list-group list-group-flush gap-3 mb-4">
                <div class="list-group-item border-0 rounded-4 bg-light p-3 d-flex align-items-center">
                  <div class="flex-shrink-0 text-warning h3 mb-0 me-3">
                    <i class="fas fa-tools"></i>
                  </div>
                  <div class="flex-grow-1">
                    <h6 class="fw-bold mb-0">Service Due</h6>
                    <p class="small text-muted mb-0">4 vehicles maintenance</p>
                  </div>
                  <button class="btn btn-sm btn-white shadow-sm rounded-pill text-warning fw-bold">Fix</button>
                </div>

                <div class="list-group-item border-0 rounded-4 bg-danger-subtle p-3 d-flex align-items-center">
                  <div class="flex-shrink-0 text-danger h3 mb-0 me-3">
                    <i class="fas fa-map-pin"></i>
                  </div>
                  <div class="flex-grow-1 text-danger-emphasis">
                    <h6 class="fw-bold mb-0">Deviation</h6>
                    <p class="small mb-0 opacity-75">VH-102 out of zone</p>
                  </div>
                  <i class="fas fa-chevron-right text-danger opacity-50 ms-2"></i>
                </div>
              </div>

              <div class="bg-light p-3 rounded-4 mb-4 border border-white">
                <div class="d-flex justify-content-between align-items-center mb-2">
                  <span class="text-muted small fw-bold">Safety Compliance</span>
                  <span class="badge bg-success shadow-sm">88.4%</span>
                </div>
                <div class="progress rounded-pill shadow-inner" style="height: 10px; background: #e9ecef;">
                  <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 88%">
                  </div>
                </div>
              </div>

              <div class="row g-2">
                <div class="col-6">
                  <div class="p-3 bg-white border border-light rounded-4 text-center shadow-sm">
                    <div class="text-success fw-bold h5 mb-0">+2.4%</div>
                    <div class="text-muted x-small fw-bold">Fuel Efficiency</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="p-3 bg-white border border-light rounded-4 text-center shadow-sm">
                    <div class="text-danger fw-bold h5 mb-0">-1.2%</div>
                    <div class="text-muted x-small fw-bold">Idle Time</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
    include("footer.php");
    ?>
  </div>
</div>