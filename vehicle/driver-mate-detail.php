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

        <!-- driver mate detail -->
        <div id="driver-mate-view" class=" px-4 px-md-5 py-4">
            <div id="driver-mate-table-view">
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

                        <h3 class="fw-bold">Driver Mate Details</h3>
                    </div>




                    <button class="btn secondary-color rounded-pill px-4 mt-md-0 mt-3" data-bs-toggle="modal"
                        data-bs-target="#addDriverMateModal">
                        + Add New Driver Mate
                    </button>

                </div>

                <div class="row g-3 mb-3">
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

                <div class="bg-white rounded-4 p-2 shadow-sm border">
                    <div class="table-responsive p-2 ">
                        <table id="driverTable" class="table table-hover align-middle scrollable-tbody" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>Full Name</th>
                                    <th>National ID</th>
                                    <th>Emergency Contact Name</th>
                                    <th>Vehicle / Plate Number</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold text-primary">John Doe</td>
                                    <td>42101-9876543-1</td>
                                    <td>Jane Doe</td>
                                    <td>VH-789 (ABC-123)</td>
                                    <td class="text-center">
                                        <a href="./driver-mate-form.php"
                                            class="btn btn-sm btn-light border shadow-sm">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="fw-bold text-primary">John Doe</td>
                                    <td>42101-9876543-1</td>
                                    <td>Jane Doe</td>
                                    <td>VH-789 (ABC-123)</td>
                                    <td class="text-center">
                                        <a href="./driver-mate-form.php"
                                            class="btn btn-sm btn-light border shadow-sm">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="fw-bold text-primary">John Doe</td>
                                    <td>42101-9876543-1</td>
                                    <td>Jane Doe</td>
                                    <td>VH-789 (ABC-123)</td>
                                    <td class="text-center">
                                        <a href="./driver-mate-form.php"
                                            class="btn btn-sm btn-light border shadow-sm">
                                            <i class="fas fa-eye text-primary"></i>
                                        </a>
                                    </td>
                                </tr>
                                 <tr>
                                    <td class="fw-bold text-primary">John Doe</td>
                                    <td>42101-9876543-1</td>
                                    <td>Jane Doe</td>
                                    <td>VH-789 (ABC-123)</td>
                                    <td class="text-center">
                                        <a href="./driver-mate-form.php"
                                            class="btn btn-sm btn-light border shadow-sm">
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

        <?php include("../footer.php"); ?>
    </div>
</div>

<!-- ================= MODAL ================= -->
<div class="modal fade" id="addDriverMateModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 overflow-hidden">
            <div class="modal-header background-primary px-4 text-white">
                <h5 class="modal-title fw-bold" id="addDriverMateModalLabel">
                    <i class="fas fa-user-edit me-2"></i>Driver Mate Profile Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f8f9fa">
                <form class="row g-3 px-2">

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">First Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Ali" />
                    </div>
                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Last Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Raza" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Address</label>
                        <input type="text" class="form-control border-dark shadow-sm"
                            value="Flat B-402, North Karachi" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Phone Number</label>
                        <input type="tel" class="form-control border-dark shadow-sm" value="+92 345 1234567" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Date of Birth</label>
                        <input type="date" class="form-control border-dark shadow-sm" value="1995-08-15" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">National ID / Passport</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="42101-9876543-1" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Date Employed</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="10-Jan-2023" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Driver License Number</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="ML-KAR-9988" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">License Category / Class</label>
                        <select class="form-select border-dark shadow-sm">
                            <option selected disabled>Select License Class...</option>

                            <option value="ltv">LTV (Light Transport Vehicle)</option>
                            <option value="htv">HTV (Heavy Transport Vehicle)</option>
                            <option value="psv">PSV (Public Service Vehicle)</option>
                            <option value="motorcycle_car">Motorcycle / Car</option>

                            <option value="heavy_machinery">Heavy Machinery Operator License</option>
                            <option value="tractor_commercial">Tractor (Commercial)</option>

                            <option value="ltv_htv">LTV / HTV Combined</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">License Expiry Date</label>
                        <input type="date" class="form-control border-dark shadow-sm" value="2028-12-25" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Assigned Vehicle / Plate Number</label>
                        <select class="form-select border-dark shadow-sm">
                            <option selected disabled>Choose Vehicle / Plate No...</option>

                            <option value="vh789">VH-789 (ABC-123) - Toyota Corolla</option>
                            <option value="vh456">VH-456 (XYZ-789) - Volkswagen Voyage</option>

                            <option value="tr102">TR-102 (KHI-4567) - Hino Truck</option>
                            <option value="tr305">TR-305 (LHR-8899) - Isuzu HGV</option>

                            <option value="eq55">EQ-55 (No Plate) - CAT Excavator</option>
                            <option value="eq12">EQ-12 (P-990) - JCB Forklift</option>

                            <option value="gn01">GN-01 (Static) - Cummins Generator</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Emergency Contact Name</label>
                        <input type="text" class="form-control border-dark shadow-sm" value="Kamran Raza" />
                    </div>

                    <div class="col-md-6">
                        <label class="small fw-bold mb-1">Emergency Contact Phone Number</label>
                        <input type="tel" class="form-control border-dark shadow-sm" value="+92 300 9988776" />
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="small fw-bold mb-1">Driver Mate Photograph</label>
                        <input type="file" class="form-control border-dark shadow-sm" accept="image/*" />
                        <div class="form-text small">Upload a professional passport-sized photo.</div>
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
