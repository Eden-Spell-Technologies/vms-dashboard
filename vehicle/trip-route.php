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

        <!-- route and destination -->
        <div id="route-mgmt-view" class="px-4 px-md-5 py-4">
            <div id="route-table-view">
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

                        <h3 class="fw-bold">Trip & Route</h3>
                    </div>

                    <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
                        data-bs-target="#newRouteModal">
                        + Create New Trip
                    </button>
                </div>

                <div class="row g-3 mb-3">
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

                <div class="bg-white rounded-4 p-2 shadow-sm border">
                    <div class="table-responsive p-2">
                        <table id="destinationLogTable" class="table table-hover align-middle w-100 scrollable-tbody">
                            <thead class="table-light">
                                <tr>
                                    <th>Route</th>
                                    <th>Driver Name</th>
                                    <th>Destination</th>
                                    <th>Weather</th>
                                    <th>Road</th>        
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody id="trip-table-body">
                                <tr>
                                    <td class="">Main Highway</td>
                                    <td>Zaid Ali</td>
                                    
                                    <td>Lahore</td>
                                    <td><i class="fas fa-sun text-warning me-1"></i> Sunny</td>
                                    <td>Smooth</td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./trip-route-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="">GT Road</td>
                                    <td>Ali Raza</td>
                                    
                                    <td>Peshawar</td>
                                    <td><i class="fas fa-cloud-showers-heavy text-info me-1"></i> Rainy</td>
                                    <td>Rough</td>
                                   
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./trip-route-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="">GT Road</td>
                                    <td>Ali Raza</td>
                                    
                                    <td>Peshawar</td>
                                    <td><i class="fas fa-cloud-showers-heavy text-info me-1"></i> Rainy</td>
                                    <td>Rough</td>
                                   
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./trip-route-form.php">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="">GT Road</td>
                                    <td>Ali Raza</td>
                                    
                                    <td>Peshawar</td>
                                    <td><i class="fas fa-cloud-showers-heavy text-info me-1"></i> Rainy</td>
                                    <td>Rough</td>
                                   
                                   
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-light border shadow-sm" href="./trip-route-form.php">
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
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <div class="modal-body p-4" style="background-color: #f8f9fa">
                    <form class="row g-3 px-2">

                        <div class="col-md-6">
                            <label class="small fw-bold mb-1">Date of Trip</label>
                            <input type="text" class="form-control border-dark shadow-sm" value="05-Jan-2026" />
                        </div>

                        <div class="col-md-6">
                            <label class="small fw-bold mb-1">Route Name</label>
                            <input type="text" class="form-control border-dark shadow-sm"
                                value="Main Highway Section A" />
                        </div>

                        <div class="col-md-6">
                            <label class="small fw-bold mb-1">Driver Name</label>
                            <input type="text" class="form-control border-dark shadow-sm" value="Zaid Ali" />
                        </div>



                        <div class="col-md-6">
                            <label class="small fw-bold mb-1">Driver Mate Name</label>
                            <input type="text" class="form-control border-dark shadow-sm" value="Aslam Khan" />
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
                            <input type="text" class="form-control border-dark shadow-sm "
                                value="Thokar Niaz Baig, Lahore" />
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
                            <select id="waybillSelect" class="form-select border-dark shadow-sm">
                                <option value="">Select or Search Waybill...</option>
                                <option value="WB-12345678" selected>WB-12345678</option>
                                <option value="WB-12345679">WB-12345679</option>
                                <option value="WB-12345680">WB-12345680</option>
                                <option value="WB-12345681">WB-12345681</option>
                                <option value="WB-12345682">WB-12345682</option>
                            </select>
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