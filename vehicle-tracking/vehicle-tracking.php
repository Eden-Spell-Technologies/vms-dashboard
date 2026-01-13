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
        <div class="px-4 px-md-5 py-4">
            <div class="d-md-flex justify-content-between align-items-center mb-4">
                <div class="d-flex align-items-center">
                    <a class="btn secondary-hover rounded-circle me-3" href="../index.php" title="Back"
                        style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <h3 class="fw-bold">Vehicle Tracking</h3>
                </div>
                <div>
                    <button class="btn secondary-color rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#addTrackingModal">
                        + Add Vehicle Track
                    </button>
                </div>
            </div>
            <div class="container-fluid mt-4">
                <div class="row">
                    <div class="col-lg-12 mb-4">
                        <div class="card border-0 rounded-4 shadow-sm">
                            <div class="card-header bg-white border-0 py-3">
                                <h5 class="fw-bold m-0 text-dark">Live Fleet Overview</h5>
                            </div>
                            <div class="card-body bg-light rounded-bottom-4">
                                <div class="row g-2">
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card border-0 rounded-4 shadow-sm h-100 p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="text-muted fw-bold m-0 small">Geofences with units</h6>
                                                <span class="badge  text-success tiny-text">ONLINE DATA</span>
                                            </div>
                                            <ul class="list-group list-group-flush mt-2">
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center small border-0 px-0 py-2">
                                                    <span><i class="fas fa-seedling text-info me-2"></i>
                                                        plantation</span>
                                                    <span class="fw-bold">5</span>
                                                </li>
                                                <li
                                                    class="list-group-item d-flex justify-content-between align-items-center small border-0 px-0 py-2">
                                                    <span><i class="fas fa-wave-square text-info me-2"></i>
                                                        Gondama-Mata</span>
                                                    <span class="fw-bold">1</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <div class="card border-0 rounded-4 shadow-sm h-100 p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="text-muted fw-bold m-0 small">Connection status</h6>
                                                <span class="badge  text-success tiny-text">ONLINE DATA</span>
                                            </div>
                                            <div class="row align-items-center g-0">
                                                <div class="col-6">
                                                    <div style="height: 120px; width: 100%; position: relative;">
                                                        <canvas id="connectionChart"></canvas>
                                                        <div
                                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                            <span class="d-block fw-bold h4 m-0">46</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 ps-2">
                                                    <div class="d-flex justify-content-between mb-2 x-small">
                                                        <span><i class="fas fa-circle text-success me-1"></i>
                                                            Online</span>
                                                        <span class="fw-bold">27</span>
                                                    </div>
                                                    <div class="d-flex justify-content-between x-small">
                                                        <span><i class="fas fa-circle text-secondary me-1"></i>
                                                            Offline</span>
                                                        <span class="fw-bold">19</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xl-4">
                                        <div class="card border-0 rounded-4 shadow-sm h-100 p-3">
                                            <div class="d-flex justify-content-between align-items-center mb-3">
                                                <h6 class="text-muted fw-bold m-0 small">Motion state</h6>
                                                <span class="badge  text-success tiny-text">ONLINE DATA</span>
                                            </div>
                                            <div class="row align-items-center g-0">
                                                <div class="col-5">
                                                    <div style="height: 120px; width: 100%; position: relative;">
                                                        <canvas id="motionChart"></canvas>
                                                        <div
                                                            style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                                                            <span class="fw-bold h5 m-0">46</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-7 ps-3">
                                                    <div class="motion-labels">
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span><i class="fas fa-circle text-danger me-1"></i>
                                                                Stationary</span>
                                                            <span>15</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span><i class="fas fa-circle text-warning me-1"></i> Stat
                                                                (Ign)</span>
                                                            <span>6</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between mb-1">
                                                            <span><i class="fas fa-circle text-success me-1"></i>
                                                                Moving</span>
                                                            <span>0</span>
                                                        </div>
                                                        <div class="d-flex justify-content-between">
                                                            <span><i class="fas fa-circle text-info me-1"></i>
                                                                Other</span>
                                                            <span>25</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 mb-4">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                            <div class=" p-2 px-3 d-flex justify-content-between align-items-center">
                                <span class="small fw-bold"><i class="fas fa-map-marked-alt me-2"></i> Real-Time
                                    Tracking
                                    Map</span>
                                <button class="btn btn-sm btn-outline-light border-0"><i
                                        class="fas fa-expand"></i></button>
                            </div>
                            <div class="rounded-3 overflow-hidden mb-3 border" style="height: 250px;">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106203.18956976935!2d72.936058913936!3d33.68442015383921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfbfd07891722f%3A0x6059515133d452ce!2sIslamabad%2C%20Islamabad%20Capital%20Territory!5e0!3m2!1sen!2spk!4v1700000000000!5m2!1sen!2spk"
                                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                                </iframe>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-header bg-light py-3 border-0">
                                <h6 class="m-0 fw-bold"><i class="fas fa-list me-2"></i> Vehicle Tracking Detalization
                                </h6>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive p-3 bg-white rounded-4 shadow-sm">
                                    <table id="trackingTable"
                                        class="table table-hover align-middle mb-0 scrollable-tbody"
                                        style="font-size: 0.85rem; width:100%">
                                        <thead class="bg-light text-muted">
                                            <tr>
                                                <th>Grouping</th>
                                                <th>Initial Location</th>
                                                <th>Initial coordinates</th>
                                                <th>Final Location</th>
                                                <th>Duration</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HILUX 8</td>
                                                <td>Saba, Pujehun District</td>
                                                <td>7.435712, -11.843278</td>
                                                <td>Jumbu, Pujehun District</td>
                                                <td>3:35:09</td>

                                                <td>
                                                    <a href="./vehicle-tracking-form.php"
                                                        class="btn btn-sm btn-light border">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HILUX 8</td>
                                                <td>Saba, Pujehun District</td>
                                                <td>7.435712, -11.843278</td>
                                                <td>Jumbu, Pujehun District</td>
                                                <td>3:35:09</td>

                                                <td>
                                                    <a href="./vehicle-tracking-form.php"
                                                        class="btn btn-sm btn-light border">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HILUX 8</td>
                                                <td>Saba, Pujehun District</td>
                                                <td>7.435712, -11.843278</td>
                                                <td>Jumbu, Pujehun District</td>
                                                <td>3:35:09</td>

                                                <td>
                                                    <a href="./vehicle-tracking-form.php"
                                                        class="btn btn-sm btn-light border">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HILUX 8</td>
                                                <td>Saba, Pujehun District</td>
                                                <td>7.435712, -11.843278</td>
                                                <td>Jumbu, Pujehun District</td>
                                                <td>3:35:09</td>

                                                <td>
                                                    <a href="./vehicle-tracking-form.php"
                                                        class="btn btn-sm btn-light border">
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
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="addTrackingModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden shadow-lg">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-clipboard-check me-2"></i>Add Vehicle Tracking Report
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Initial Location</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Saba, Pujehun District" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Initial coordinates/ Town</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder=" 7.435712, -11.843278" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Final location / Town</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder=" Jumbu, Pujehun District" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Travel Duration</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder=" 3:35:09" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Engine Hours</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder=" 3:11:05" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Initial Mileage</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder=" 0.00 km" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Final Mileage</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder=" 61.66 km" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Avg Speed</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="60 km/h" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Max Speed</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="120 km/h" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Fuel Consumed</label>
                        <input type="number" class="form-control border-dark shadow-sm" placeholder="Litres" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Number/ duration of Stops</label>
                        <input type="text" class="form-control border-dark shadow-sm" placeholder="Count or Duration" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Deviation of main routes</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            placeholder="Enter details if any" />
                    </div>

                    <div class="col-12 text-center mt-4">
                        <button type="button" class="btn secondary-color px-5 py-2 rounded-pill fw-bold shadow">
                            Save Vehicle Tracking Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Data from image_3f0e96.png
    const commonOptions = {
        responsive: true,
        maintainAspectRatio: false,
        cutout: '40%',
        plugins: { legend: { display: false } }

    };

    // Connection Status Chart
    new Chart(document.getElementById('connectionChart'), {
        type: 'doughnut',
        data: {
            labels: ['Online', 'Offline'],
            datasets: [{
                data: [27, 19],
                backgroundColor: ['#4CAF50', '#E0E0E0'],
                borderWidth: 0
            }]
        },
        options: commonOptions
    });

    // Motion State Chart
    new Chart(document.getElementById('motionChart'), {
        type: 'doughnut',
        data: {
            labels: ['Stationary', 'Stat (Ign)', 'Moving', 'Mov (Ign)', 'No state'],
            datasets: [{
                data: [15, 6, 0, 6, 19],
                backgroundColor: [
                    '#F44336', // Red: Stationary
                    '#FF9800', // Orange: Ign On
                    '#4CAF50', // Green: Moving
                    '#8BC34A', // Light Green: Mov Ign
                    '#9C27B0'  // Purple: No state
                ],
                borderWidth: 0
            }]
        },
        options: commonOptions
    });
</script>



<?php include("../footer.php"); ?>