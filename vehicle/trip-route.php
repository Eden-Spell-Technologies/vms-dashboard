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

    <!-- route and destination -->
    <div id="route-mgmt-view" class="fade-in">
        <div id="route-table-view">
            <div class="d-md-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-mngt.php"
                 style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
                        <i class="fas fa-arrow-left"></i>
                    </a>

                    <h3 class="fw-bold">Trip & Route</h3>
                </div>

                <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
                    data-bs-target="#newRouteModal">
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
                <div class="d-flex justify-content-between align-items-center mb-3">
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
                                    <a class="btn btn-sm btn-light border" href="./trip-route-form.php">
                                        <i class="fas fa-eye"></i>
</a>
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
                                    <a class="btn btn-sm btn-light border" href="./trip-route-form.php">
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
<div class="modal fade" id="newRouteModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
           <div class="modal-content border-0 rounded-4 overflow-hidden">
    <div class="modal-header background-primary px-4 text-white">
        <h5 class="modal-title fw-bold" id="tripDetailsModalLabel">
            <i class="fas fa-map-marker-alt me-2"></i>Add Trip & Route Details
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>

    <div class="modal-body p-4" style="background-color: #f8f9fa">
        <form class="row g-3 px-2">
           
            <div class="col-md-6">
                <label class="small fw-bold mb-1">Date of Trip</label>
                <input type="text" class="form-control border-dark shadow-sm" value="05-Jan-2026" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Route Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Main Highway Section A" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Driver Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Zaid Ali" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Driver Number</label>
                <input type="tel" class="form-control border-dark shadow-sm" value="+92 300 1112233" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Driver License</label>
                <input type="text" class="form-control border-dark shadow-sm" value="DL-XYZ-786" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Driver Photograph</label>
                <input type="file" class="form-control border-dark shadow-sm" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Motor Mate Name</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Aslam Khan" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Motor Mate Phone Number</label>
                <input type="tel" class="form-control border-dark shadow-sm" value="+92 321 4455667" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Motor Mate License</label>
                <input type="text" class="form-control border-dark shadow-sm" value="ML-ABC-123" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Motor Mate Photograph</label>
                <input type="file" class="form-control border-dark shadow-sm" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Vehicle Registration Number</label>
                <input type="text" class="form-control border-dark shadow-sm" value="VH-789" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Port/Point of Departure</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Port Qasim, Karachi" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Current Location</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Hyderabad Junction" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1 ">Final Destination</label>
                <input type="text" class="form-control border-dark shadow-sm " value="Thokar Niaz Baig, Lahore" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Goods Transported</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Electronics" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Load or Content Details</label>
                <input type="text" class="form-control border-dark shadow-sm" value="500 kg" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1">Departure Time</label>
                <input type="text" class="form-control border-dark shadow-sm" value="06:00 AM" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1">Weather Conditions</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Sunny" />
            </div>

            <div class="col-md-4">
                <label class="small fw-bold mb-1">Road Conditions</label>
                <input type="text" class="form-control border-dark shadow-sm" value="Smooth" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Waybill No</label>
                <input type="text" class="form-control border-dark shadow-sm" value="WB-12345678" />
            </div>

            <div class="col-md-6">
                <label class="small fw-bold mb-1">Expected Date of Arrival</label>
                <input type="text" class="form-control border-dark shadow-sm" value="07-Jan-2026" />
            </div>

            <div class="col-12 text-center mt-4">
                <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
                    Add Trip Details
                </button>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>
</div>

<?php include("../footer.php"); ?>