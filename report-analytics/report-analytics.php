<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../auth/login.php");
    exit();
}
include("../nav.php");
?>

<div id="dashboard-page">
    <?php include("../sidebar.php"); ?>

    <div id="main-wrapper" class="p-4 p-md-5">
        <div class="container-fluid p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold m-0"><i class="fas fa-analytics me-2 text-success"></i>Advanced Report & Analytics</h3>
        <div class="btn-group">
            <button class="btn secondary-color border-2 fw-bold px-4 rounded-pill me-2">
                <i class="fas fa-file-export me-2"></i>Export Report
            </button>
            <button class="btn secondary-color fw-bold px-4 rounded-pill">
                <i class="fas fa-print me-2"></i>Print Analytics
            </button>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-12">
            <div class="card border-0 bg-white rounded-4 p-4 shadow-sm overflow-hidden">
                <div class="card-header py-3">
                    <h5 class="m-0 fw-bold">1. Total Vehicles in Service</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="">
                                <tr>
                                    <th class="ps-4">Vehicle Type / Picture</th>
                                    <th>Compliance Status</th>
                                    <th>Approved Driver/s</th>
                                    <th class="text-center">Truck Mate</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="ps-4">
                                        <div class="d-flex align-items-center">
                                            <div class=" p-2 rounded me-3"><i class="fas fa-truck-moving fa-lg text-success"></i></div>
                                            <span class="">Heavy Duty HGV</span>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success-subtle text-success">Fitness Certified</span></td>
                                    <td>Zeeshan Ahmed</td>
                                    <td class="text-center">Muhammad Rafiq</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card border-0 bg-white rounded-4 p-4 shadow-sm ">
                <div class="card-header py-3">
                    <h5 class="m-0 fw-bold">2. Trip Log & Logistics</h5>
                </div>
                <div class="card-body">
    <div class="table-responsive">
        <table class="table align-middle text-center shadow-sm">
            <thead class="">
                <tr>
                    <th >Route</th>
                    <th>Waybill</th>
                    <th >Driver Name / Phone Number</th>
                    <th>Truck Mate Name / Phone Number</th>
                    <th >Trip Schedule (Dep/Arr)</th>
                    <th >Distance</th>
                    <th >Fuel Gauge</th>
                    <th >Odometer Reading</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="fw-bold text-primary">Karachi → Lahore</div>
                    </td>

                    <td>
                        <div>#WBL-99021</div>
                    </td>

                    <td>
                        <div>Ali Raza</div>
                        <span><small>0300-1234567</small></span>
                    </td>
                    
                    <td>
                        <div>Asim Khan</div>
                        <span><small>0301-7654321</small></span>
                    
                    <td class="text-start ps-3">
                        <div class="small text-danger"><strong>Out:</strong> 20 Jan | 08:00 AM</div>
                        <div class="small text-success"><strong>In:</strong> 21 Jan | 10:00 PM</div>
                    </td>
                    
                    <td>
                        <span class="badge bg-success-subtle text-success fs-6">1,210 km</span>
                    </td>
                    
                    <td>
                        <div class="small mb-1">Full / 1/4 Tank</div>
                        <div class="progress mx-auto" style="height: 6px; width: 80%;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 25%"></div>
                        </div>
                    </td>
                    
                    <td>
                        <div class="small">Start: 45,000</div>
                        <div class="small fw-bold">End: 46,210</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden mb-4">
                <div class="card-header bg-danger text-white py-3">
                    <h5 class="m-0 fw-bold">3. Incidents & Outcomes</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="fw-bold">Total Interventions:</span>
                        <span class="badge bg-danger rounded-pill px-3">02 Cases</span>
                    </div>
                    <div class="bg-light p-3 rounded-3 mb-3 border-start border-4 border-danger">
                        <p class="small mb-1 text-muted">Latest Incident</p>
                        <h6 class="fw-bold mb-1">Engine Overheat - Route Alpha</h6>
                        <span class="badge bg-warning text-dark small">Status: Resolved</span>
                    </div>
                </div>
            </div>

            <div class="card border-0 shadow-sm rounded-4 overflow-hidden border-top border-5 border-success">
                <div class="card-body text-center py-4">
                    <i class="fas fa-dollar-sign fa-2x text-success mb-2"></i>
                    <h6 class="text-muted fw-bold">KPI - RELATED COST</h6>
                    <h2 class="fw-bold text-success">PKR 125,400</h2>
                    <p class="small text-muted mb-0 text-uppercase">Financial Impact Analysis</p>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

<?php include("../footer.php"); ?>