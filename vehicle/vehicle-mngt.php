<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
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
    <div id="main-wrapper" class="">
        <?php
        include("../nav.php");

        ?>

        <div id="vehicle-mgmt-view" class="px-4 px-md-5 py-4">
           <div class="row align-items-center mb-4">
                <div class="col-md-7 col-xl-9">
                    <h2 class="fw-bold  tracking-tight mb-1">Vehicle Managment</h2>
                </div>

                <div class="col-md-5 col-xl-3">
                    <div class="d-flex justify-content-md-end mt-3 mt-md-0">

                        <div class="input-group shadow-sm border rounded-3">
                            <select class="form-select  border-0 py-2  small " 
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

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./vehicle-detail.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-primary-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-primary text-white me-4">
                                    <i class="fas fa-info-circle fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">142</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Vehicle Details</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-primary fw-bold p-2 small">
                                        Total
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./driver-detail.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-success-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-success text-white me-4">
                                    <i class="fas fa-user-tie fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">89</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Driver Details</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-success fw-bold p-2 small">
                                        Active
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./driver-mate-detail.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-info-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-info text-white me-4">
                                    <i class="fas fa-user-friends fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">45</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Driver Mate</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-info fw-bold p-2 small">
                                        Staff
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./trip-route.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-warning-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-warning text-white me-4">
                                    <i class="fas fa-route fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">12</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Trip & Route</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-warning fw-bold p-2 small">
                                        Live
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./waybill-list.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-primary-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-primary text-white me-4">
                                    <i class="fas fa-file-invoice fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">1,240</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Total Waybills</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-primary fw-bold p-2 small">
                                        All Time
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./waybill-awaiting.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-warning-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-warning text-white me-4">
                                    <i class="fas fa-hourglass-half fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">18</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Awaiting Waybills</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-warning fw-bold p-2 small">
                                        Pending
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./waybill-allocated.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-success-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-success text-white me-4">
                                    <i class="fas fa-truck-loading fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">56</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Allocated Waybills</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-success fw-bold p-2 small">
                                        Assigned
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-xl-4">
                    <a class="text-decoration-none metric-card border-0 rounded-5 shadow-hover h-100 d-block"
                        href="./service.php">
                        <div class="card-body p-4 position-relative overflow-hidden">
                            <div class="metric-shape bg-secondary-subtle"></div>
                            <div class="d-flex align-items-center position-relative">
                                <div class="icon-glow bg-secondary text-white me-4">
                                    <i class="fas fa-clock-rotate-left fa-lg"></i>
                                </div>
                                <div>
                                    <h3 class="fw-bolder mb-0 text-dark">04</h3>
                                    <p class="text-muted small fw-bold mb-0 opacity-75">Maintenance</p>
                                </div>
                                <div class="ms-auto text-end">
                                    <span class="badge rounded-pill bg-light text-secondary fw-bold p-2 small">
                                        Due
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row g-4 mt-2 ">
                <div class="col-xl-8">
                    <div class="card border-0 rounded-5 shadow-sm h-100 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="d-md-flex justify-content-between align-items-start mb-4">
                                <div class="mb-md-0 mb-3">
                                    <h5 class="fw-bold mb-1 text-dark">Fleet Performance Metrics</h5>
                                    <p class="text-muted small mb-0">Monthly analysis of trips efficiency vs. fuel
                                        consumption</p>
                                </div>
                                <div class="d-flex align-items-center gap-2 ">
                                    <span
                                        class="badge bg-success-subtle text-success border border-success-subtle rounded-pill px-3 py-2">
                                        <i class="fas fa-arrow-up me-1"></i> 12% Growth
                                    </span>
                                    <button class="btn btn-light btn-sm rounded-pill px-2 shadow-none border">
                                        <i class="far fa-calendar-alt me-1"></i> Last 6 Months
                                    </button>
                                </div>
                            </div>
                            <div style="height: 320px; width: 100%;">
                                <canvas id="performanceLineChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card border-0 rounded-5 shadow-sm h-100 overflow-hidden">
                        <div class="card-body p-4">
                            <div class="text-start mb-4">
                                <h5 class="fw-bold mb-1 text-dark">Utilization Status</h5>
                                <p class="text-muted small mb-0">Live vehicle availability across regions</p>
                            </div>

                            <div style="height: 250px; position: relative;" class="my-4">
                                <canvas id="statusDonutChart"></canvas>
                                <div
                                    style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center;">
                                    <span class="d-block text-muted small fw-bold text-uppercase"
                                        style="letter-spacing: 1px;">Fleet</span>
                                    <h2 class="fw-bolder mb-0 text-dark">142</h2>
                                    <span class="badge bg-primary rounded-pill small">Units</span>
                                </div>
                            </div>

                            <div class="mt-4 pt-2 border-top">
                                <div class="row g-2">
                                    <div class="col-4 text-center border-end">
                                        <div class="small fw-bold text-dark">Active</div>
                                        <div class="h6 mb-0 text-success fw-bold">70%</div>
                                    </div>
                                    <div class="col-4 text-center border-end">
                                        <div class="small fw-bold text-dark">Service</div>
                                        <div class="h6 mb-0 text-danger fw-bold">15%</div>
                                    </div>
                                    <div class="col-4 text-center">
                                        <div class="small fw-bold text-dark">Idle</div>
                                        <div class="h6 mb-0 text-warning fw-bold">15%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mt-2 ">
                <div class="col-xl-6">
                    <div class="card border-0 rounded-5 shadow-sm h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="fw-bold mb-0">Recent Activity</h5>
                                <a href="#" class="text-primary text-decoration-none small fw-bold">View All</a>
                            </div>

                            <div class="timeline-wrapper">
                                <div class="d-flex mb-4 position-relative">
                                    <div class="activity-line"></div>
                                    <div class="icon-sm bg-primary-subtle text-primary rounded-circle me-3 z-index-1">
                                        <i class="fas fa-plus-circle"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold small text-dark">New Vehicle Onboarded</p>
                                        <p class="text-muted extra-small mb-0">VMS-8820 (Hino Truck) added to Fleet A •
                                            5 mins ago</p>
                                    </div>
                                </div>

                                <div class="col-md-12 d-flex mb-4 position-relative">
                                    <div class="icon-sm bg-info-subtle text-info rounded-circle me-3 z-index-1">
                                        <i class="fas fa-user-tag"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold small text-dark">Driver Assigned</p>
                                        <p class="text-muted extra-small mb-0">Zahid Khan assigned to VMS-1102 • Route:
                                            Karachi-LHR • 45 mins ago</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4 position-relative">
                                    <div class="icon-sm bg-success-subtle text-success rounded-circle me-3 z-index-1">
                                        <i class="fas fa-clipboard-check"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold small text-dark">Inspection Completed</p>
                                        <p class="text-muted extra-small mb-0">VMS-9941 passed monthly fitness test •
                                            Verified by Inspector Ali • 2 hours ago</p>
                                    </div>
                                </div>

                                <div class="d-flex mb-4 position-relative">
                                    <div class="icon-sm bg-warning-subtle text-warning rounded-circle me-3 z-index-1">
                                        <i class="fas fa-file-invoice"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold small text-dark">Document Expiry Alert</p>
                                        <p class="text-muted extra-small mb-0">VMS-2024 Insurance expiring in 3 days •
                                            Action Required • 5 hours ago</p>
                                    </div>
                                </div>

                                <div class="d-flex position-relative">
                                    <div
                                        class="icon-sm bg-secondary-subtle text-secondary rounded-circle me-3 z-index-1">
                                        <i class="fas fa-toggle-on"></i>
                                    </div>
                                    <div>
                                        <p class="mb-0 fw-bold small text-dark">Vehicle Status Updated</p>
                                        <p class="text-muted extra-small mb-0">VMS-7822 changed from 'Idle' to
                                            'In-Transit' • 8 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card border-0 rounded-5 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-4">Active Fleet Status</h5>
                            <div class="table-responsive">
                                <table class="table table-hover align-middle border-0">
                                    <thead class="bg-light">
                                        <tr>
                                            <th class="border-0 small fw-bold text-muted">VEHICLE</th>
                                            <th class="border-0 small fw-bold text-muted">DRIVER</th>
                                            <th class="border-0 small fw-bold text-muted">STATUS</th>
                                            <th class="border-0 small fw-bold text-muted text-end">LOCATION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="border-0 fw-bold small text-dark">VMS-7822</td>
                                            <td class="border-0 text-muted small">Ahmed Ali</td>
                                            <td class="border-0"><span
                                                    class="badge bg-success-subtle text-success rounded-pill px-2 py-1">On
                                                    Trip</span></td>
                                            <td class="border-0 text-muted small text-end">Lahore</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 fw-bold small text-dark">VMS-1102</td>
                                            <td class="border-0 text-muted small">Zahid Khan</td>
                                            <td class="border-0"><span
                                                    class="badge bg-warning-subtle text-warning rounded-pill px-2 py-1">Loading</span>
                                            </td>
                                            <td class="border-0 text-muted small text-end">Karachi</td>
                                        </tr>
                                        <tr>
                                            <td class="border-0 fw-bold small text-dark">VMS-9941</td>
                                            <td class="border-0 text-muted small">Sajid Shah</td>
                                            <td class="border-0"><span
                                                    class="badge bg-danger-subtle text-danger rounded-pill px-2 py-1">Stuck</span>
                                            </td>
                                            <td class="border-0 text-muted small text-end">Rawalpindi</td>
                                        </tr>
                                    </tbody>
                                </table>
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