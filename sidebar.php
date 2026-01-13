<?php
define('BASE_URL', '/vms-frontend/');
define('CURRENT_PAGE', basename($_SERVER['PHP_SELF']));
?>

<div id="sidebar">
    
 <div class="logo-area d-flex align-items-center justify-content-center">
                <img src="https://devedenspell.com/MD/image/logo.png" class="logo-img" alt="Logo" />
                <span class="vms-brand">CHAMPS VMA</span>
            </div>
    <nav class="nav nav-menu d-block">

       <div class="nav-item">
         <a href="<?= BASE_URL ?>index.php" class="nav-link <?= (CURRENT_PAGE == 'index.php') ? 'active' : '' ?>">
            <i class="fas fa-chart-pie"></i> Dashboard
        </a>
       </div>

        <div class="nav-item">
            <div class="d-flex justify-content-between align-items-center p-0">

                <a href="<?= BASE_URL ?>vehicle/vehicle-mngt.php"
                    class="nav-link <?= (CURRENT_PAGE == 'vehicle-mngt.php') ? 'active' : '' ?> text-decoration-none flex-grow-1 d-flex justify-content-between align-items-center sidebar-custom-link"
                    style="width: 100%;">

                    <span>
                        <i class="fas fa-truck-pickup"></i> Vehicle Management
                    </span>

                    <span class="ms-auto" data-bs-toggle="collapse" data-bs-target="#vehicleMngtSub"
                        aria-expanded="<?= (strpos($_SERVER['PHP_SELF'], 'vehicle/') !== false) ? 'true' : 'false' ?>"
                        onclick="event.preventDefault(); event.stopPropagation();"
                        style="cursor: pointer;">
                        <i class="fas fa-chevron-down small"></i>
                    </span>
                </a>
            </div>

            <div class="collapse ps-4 <?= (strpos($_SERVER['PHP_SELF'], 'vehicle/') !== false) ? 'show' : '' ?>"
                id="vehicleMngtSub">
                <a href="<?= BASE_URL ?>vehicle/vehicle-detail.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'vehicle-detail.php') ? ' active' : '' ?> ">
                    Vehicle Detail
                </a>

                <a href="<?= BASE_URL ?>vehicle/driver-detail.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'driver-detail.php') ? ' active' : '' ?> ">
                    Driver Detail
                </a>

                <a href="<?= BASE_URL ?>vehicle/driver-mate-detail.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'driver-mate-detail.php') ? ' active' : '' ?> ">
                    Driver Mate Detail
                </a>

                <a href="<?= BASE_URL ?>vehicle/trip-route.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'trip-route.php') ? ' active' : '' ?> ">
                    Trip & Route
                </a>

                <a href="<?= BASE_URL ?>vehicle/waybill.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'waybill.php') ? ' active' : '' ?> ">
                    Waybill & Tracking
                </a>

                <a href="<?= BASE_URL ?>vehicle/service.php"
                    class="nav-link small py-1 <?= (CURRENT_PAGE == 'service.php') ? ' active' : '' ?> ">
                    Service & Maintenance
                </a>
            </div>
        </div>

        <div class="nav-item">
            <div class="d-flex justify-content-between align-items-center p-0">

                <a href="<?= BASE_URL ?>incident-intervention/incident-intervention.php"
                    class="nav-link <?= (CURRENT_PAGE == 'incident-intervention.php') ? 'active' : '' ?> text-decoration-none flex-grow-1 d-flex justify-content-between align-items-center"
                    style="width: 100%;">

                    <span>
                        <i class="fas fa-exclamation-circle"></i> Incident & Intervention
                    </span>

                    <span class="ms-auto" data-bs-toggle="collapse" data-bs-target="#incidentSub"
                        aria-expanded="<?= (strpos($_SERVER['PHP_SELF'], 'incident-intervention/') !== false) ? 'true' : 'false' ?>"
                        onclick="event.preventDefault(); event.stopPropagation();" style="cursor: pointer;">
                        <i class="fas fa-chevron-down small"></i>
                    </span>
                </a>

            </div>

            <div class="collapse ps-4 <?= (strpos($_SERVER['PHP_SELF'], 'incident-intervention/') !== false) ? 'show' : '' ?>"
                id="incidentSub">

                <a href="<?= BASE_URL ?>incident-intervention/impoundment.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'impoundment.php') ? 'active ' : '' ?>">
                    Impoundment
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/vehicle-breakdown.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'vehicle-breakdown.php') ? 'active ' : '' ?>">
                    Vehicle Breakdown
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/illegal-detention.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'illegal-detention.php') ? 'active ' : '' ?>">
                    Illegal Detention
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/accident.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'accident.php') ? 'active ' : '' ?>">
                    Accident
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/vehicle-bugged-down.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'vehicle-bugged-down.php') ? 'active ' : '' ?>">
                    Vehicle Bugged Down
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/route-diversion.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'route-diversion.php') ? 'active ' : '' ?>">
                    Route Diversion
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/driver-misconduct.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'driver-misconduct.php') ? 'active ' : '' ?>">
                    Driver Misconduct
                </a>

                <a href="<?= BASE_URL ?>incident-intervention/illegal-haulage.php"
                    class="nav-link small py-1  <?= (CURRENT_PAGE == 'illegal-haulage.php') ? 'active ' : '' ?>">
                    Illegal Haulage
                </a>
            </div>
        </div>


        <a href="<?= BASE_URL ?>goods-inspections/goods-inspection.php"
            class="nav-link <?= (CURRENT_PAGE == 'goods-inspection.php') ? 'active' : '' ?>">
            <i class="fas fa-clipboard-check me-2"></i> On Board Goods Inspection
        </a>

        <a href="<?= BASE_URL ?>vehicle-tracking/vehicle-tracking.php"
            class="nav-link <?= (CURRENT_PAGE == 'vehicle-tracking.php') ? 'active' : '' ?>">
            <i class="fas fa-satellite me-2"></i> Vehicle Tracking
        </a>

        <a href="<?= BASE_URL ?>asset-enumeration/asset-enumeration.php"
            class="nav-link <?= (CURRENT_PAGE == 'asset-enumeration.php') ? 'active' : '' ?>">
            <i class="fas fa-list-check me-2"></i> Asset Enumeration
        </a>

        <a href="<?= BASE_URL ?>report-analytics/report-analytics.php"
            class="nav-link <?= (CURRENT_PAGE == 'report-analytics.php') ? 'active' : '' ?>">
            <i class="fas fa-file-lines me-2"></i> Reports & Analytics
        </a>

    </nav>
</div>