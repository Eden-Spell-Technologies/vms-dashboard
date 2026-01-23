<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}

// Ek folder peeche (root par) jaane ke liye ../ use karein
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

        <!-- incident and intervention -->
        <div id="incidents-mgmt-view" class="px-4 px-md-5 py-4">
            <div class="row align-items-center mb-4">
                <div class="col-md-7 col-xl-9">
                    <h2 class="fw-bold  tracking-tight mb-1">Incident & Intervention</h2>
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

            <div class="row g-4">
                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./impoundment.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-primary-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-primary text-white me-4">
                                    <i class="fas fa-gavel fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">08</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Impoundment</p>
                                </div>
                                <div class="ms-auto">
                                    <span
                                        class="badge rounded-pill bg-light text-primary fw-bold p-2 small">Legal</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./vehicle-breakdown.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-warning-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-warning text-white me-4">
                                    <i class="fas fa-car-crash fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">14</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Breakdown</p>
                                </div>
                                <div class="ms-auto">
                                    <span
                                        class="badge rounded-pill bg-light text-warning fw-bold p-2 small">Repair</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./illegal-detention.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-dark-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-dark text-white me-4">
                                    <i class="fas fa-handcuffs fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">03</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Illegal Detention</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge rounded-pill bg-light text-dark fw-bold p-2 small">Alert</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./accident.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-danger-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-danger text-white me-4">
                                    <i class="fas fa-ambulance fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">05</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Accident</p>
                                </div>
                                <div class="ms-auto">
                                    <span
                                        class="badge rounded-pill bg-light text-danger fw-bold p-2 small">Urgent</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./vehicle-bugged-down.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-success-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-success text-white me-4">
                                    <i class="fas fa-truck-pickup fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">11</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Bugged Down</p>
                                </div>
                                <div class="ms-auto">
                                    <span
                                        class="badge rounded-pill bg-light text-success fw-bold p-2 small">Recovery</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./route-diversion.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-info-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-info text-white me-4">
                                    <i class="fas fa-route fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">07</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Route Diversion</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge rounded-pill bg-light text-info fw-bold p-2 small">Traffic</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./driver-misconduct.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-orange-subtle"
                                style="background-color: rgba(253, 126, 20, 0.1);"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-orange text-white me-4" style="background-color: #fd7e14;">
                                    <i class="fas fa-user-slash fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">09</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Driver Misconduct</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge rounded-pill bg-light text-warning fw-bold p-2 small">HR</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./illegal-haulage.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-warning-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-warning text-white me-4">
                                    <i class="fas fa-boxes fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">22</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Illegal Haulage</p>
                                </div>
                                <div class="ms-auto">
                                    <span class="badge rounded-pill bg-light text-danger fw-bold p-2 small">Fine</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            </div>

            <div class="row g-4 mt-2 ">
                <div class="col-xl-8">
                    <div class="card border-0 rounded-5 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h5 class="fw-bold mb-1">Incident Analysis</h5>
                                    <p class="text-muted small mb-0">Monthly breakdown of reported issues</p>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-light btn-sm rounded-pill px-3 border shadow-none"
                                        type="button">
                                        Year 2026 <i class="fas fa-filter ms-1 small"></i>
                                    </button>
                                </div>
                            </div>
                            <div style="height: 320px;">
                                <canvas id="incidentBarChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card border-0 rounded-5 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="mb-4">
                                <h5 class="fw-bold mb-1">Issue Distribution</h5>
                                <p class="text-muted small mb-0">Incidents by category</p>
                            </div>
                            <div style="height: 280px;">
                                <canvas id="incidentPolarChart"></canvas>
                            </div>
                            <div class="mt-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="small text-muted">Most Frequent:</span>
                                    <span class="small fw-bold text-danger">Accidents (22%)</span>
                                </div>
                                <div class="progress" style="height: 6px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 22%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row g-4 mt-2">
                <div class="col-xl-8">
                    <div class="card border-0 rounded-5 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <div>
                                    <h5 class="fw-bold mb-1 text-dark text-uppercase"
                                        style="letter-spacing: 1px; font-size: 0.9rem;">
                                        <i class="fas fa-shield-alt text-danger me-2"></i>Critical Incidents &
                                        Interventions
                                    </h5>
                                </div>
                                <span class="badge bg-danger-subtle text-danger rounded-pill px-3">Live Feed</span>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="d-flex mb-4 position-relative">
                                    <div class="activity-line"></div>
                                    <div
                                        class="icon-sm bg-danger text-white rounded-circle me-3 z-index-1 shadow-danger">
                                        <i class="fas fa-car-crash"></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 fw-bold small text-dark">Accident Response Initiated</p>
                                            <span class="extra-small text-muted">Just Now</span>
                                        </div>
                                        <p class="text-muted extra-small mb-1">VMS-4412 • Highway N-5 • Recovery Team
                                            Dispatched</p>
                                        <span class="badge bg-warning text-dark extra-small rounded-pill">In
                                            Progress</span>
                                    </div>
                                </div>

                                <div class="d-flex mb-4 position-relative">
                                    <div class="icon-sm bg-dark text-white rounded-circle me-3 z-index-1 shadow-sm">
                                        <i class="fas fa-handcuffs"></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 fw-bold small text-dark">Illegal Detention Resolved</p>
                                            <span class="extra-small text-muted">45 mins ago</span>
                                        </div>
                                        <p class="text-muted extra-small mb-1">Driver Sajid released after Legal
                                            Intervention at Checkpost 12</p>
                                        <span
                                            class="badge bg-success text-white extra-small rounded-pill">Resolved</span>
                                    </div>
                                </div>

                                <div class="d-flex mb-4 position-relative">
                                    <div class="icon-sm bg-warning text-dark rounded-circle me-3 z-index-1">
                                        <i class="fas fa-gas-pump"></i>
                                    </div>
                                    <div class="w-100">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 fw-bold small text-dark">Fuel Siphoning Alert</p>
                                            <span class="extra-small text-muted">2 hours ago</span>
                                        </div>
                                        <p class="text-muted extra-small mb-1">Suspicious fuel drop detected in VMS-9022
                                            • Location: Bypass Road</p>
                                        <span class="badge bg-danger text-white extra-small rounded-pill">Action
                                            Required</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card border-0 rounded-5 shadow-sm h-100 bg-white overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h6 class="text-uppercase small fw-bold text-muted mb-0" style="letter-spacing: 1px;">
                                    Security Score</h6>
                                <button class="btn btn-light btn-sm rounded-circle border shadow-none"><i
                                        class="fas fa-info-circle text-muted"></i></button>
                            </div>

                            <div class="text-center py-3 position-relative">
                                <svg width="160" height="160" viewBox="0 0 100 100">
                                    <circle cx="50" cy="50" r="45" fill="none" stroke="#f1f5f9" stroke-width="8" />
                                    <circle cx="50" cy="50" r="45" fill="none" stroke="#2ec4b6" stroke-width="8"
                                        stroke-dasharray="282.7" stroke-dashoffset="56.5" stroke-linecap="round"
                                        transform="rotate(-90 50 50)"
                                        style="transition: stroke-dashoffset 1s ease-in-out;" />
                                </svg>
                                <div class="position-absolute top-50 start-50 translate-middle text-center">
                                    <h2 class="fw-bolder mb-0 text-dark">82%</h2>
                                    <small class="text-success fw-bold extra-small"><i class="fas fa-caret-up"></i>
                                        4%</small>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div
                                    class="d-flex align-items-center mb-3 p-3 rounded-4 bg-light border border-light-subtle">
                                    <div class="icon-sm bg-success text-white rounded-circle me-3 shadow-success-sm"><i
                                            class="fas fa-shield-alt"></i></div>
                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between">
                                            <p class="mb-0 small fw-bold text-dark">System Integrity</p>
                                            <span class="extra-small fw-bold text-success">Secure</span>
                                        </div>
                                        <div class="progress mt-1" style="height: 4px;">
                                            <div class="progress-bar bg-success" style="width: 90%"></div>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn secondary-color w-100 rounded-pill fw-bold py-2 mt-2">
                                    <i class="fas fa-file-medical-alt me-2"></i> View Security Audit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>