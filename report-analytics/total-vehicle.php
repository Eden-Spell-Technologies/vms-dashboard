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

        <!-- driver detail -->
        <div id="check-driver-view" class="px-4 px-md-5 py-4 ">
            <div id="driver-table-view">
                <div class="d-md-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <a class="btn secondary-hover rounded-circle me-3" href="./report-analytics.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                  ">
                            <i class="fas fa-arrow-left"></i>
                        </a>

                        <h3 class="fw-bold">Total Vehicles</h3>
                    </div>

                    <div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-primary text-white">
                                <i class="fas fa-truck"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">120</h4>
                                <small class="">Total Fleet</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-success text-white">
                                <i class="fas fa-check-circle"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">95</h4>
                                <small class="">In Service</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-warning text-dark">
                                <i class="fas fa-tools"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">18</h4>
                                <small class="">In Workshop</small>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xl-3">
                        <div class="stat-card shadow-sm border-0">
                            <div class="icon-box bg-danger text-white">
                                <i class="fas fa-exclamation-circle"></i>
                            </div>
                            <div>
                                <h4 class="fw-bold m-0">07</h4>
                                <small class="">Out of Service</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-4 p-2 shadow-sm border">

                    <div class="col-lg-12">
                        <div class="card border-0 overflow-hidden">

                            <div class="card-body p-3">
                                <div class="table-responsive">
                                    <table
                                        class="table table-hover  align-middle mb-0 global-datatable scrollable-tbody">
                                        <thead class="bg-light small fw-bold">
                                            <tr>
                                                <th class="ps-4">Vehicle Type / Picture</th>
                                                <th>Compliance / License</th>
                                                <th>Approved Driver/s</th>
                                                <th class="text-center">Truck Mate</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-2 rounded me-3 bg-success-subtle">
                                                            <i class="fas fa-truck-moving fa-lg text-success"></i>
                                                        </div>
                                                        <span class="">Heavy Duty HGV</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info border">Fitness
                                                        Certified</span></td>
                                                <td>Zeeshan Ahmed</td>
                                                <td class="text-center">Muhammad Rafiq</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-2 rounded me-3 bg-success-subtle">
                                                            <i class="fas fa-truck-moving fa-lg text-success"></i>
                                                        </div>
                                                        <span class="">Heavy Duty HGV</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info border">Fitness
                                                        Certified</span></td>
                                                <td>Zeeshan Ahmed</td>
                                                <td class="text-center">Muhammad Rafiq</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-2 rounded me-3 bg-success-subtle">
                                                            <i class="fas fa-truck-moving fa-lg text-success"></i>
                                                        </div>
                                                        <span class="">Heavy Duty HGV</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info border">Fitness
                                                        Certified</span></td>
                                                <td>Zeeshan Ahmed</td>
                                                <td class="text-center">Muhammad Rafiq</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="ps-4">
                                                    <div class="d-flex align-items-center">
                                                        <div class="p-2 rounded me-3 bg-success-subtle">
                                                            <i class="fas fa-truck-moving fa-lg text-success"></i>
                                                        </div>
                                                        <span class="">Heavy Duty HGV</span>
                                                    </div>
                                                </td>
                                                <td><span class="badge bg-info-subtle text-info border">Fitness
                                                        Certified</span></td>
                                                <td>Zeeshan Ahmed</td>
                                                <td class="text-center">Muhammad Rafiq</td>
                                                <td class="text-center">
                                                    <button type="button"
                                                        class="btn btn-sm btn-light border shadow-sm btn-delete"
                                                        title="Delete">
                                                        <i class="fas fa-trash-alt text-danger"></i>
                                                    </button>
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

        <?php include("../footer.php"); ?>
    </div>
</div>


