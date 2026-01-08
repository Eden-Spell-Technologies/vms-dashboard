<?php
define('BASE_URL', '/vms-frontend/');
define('CURRENT_PAGE', basename($_SERVER['PHP_SELF']));
?>
<div id="sidebar">
    <!-- <div class="logo-area d-flex align-items-center justify-content-center">
        <img src="https://devedenspell.com/MD/image/logo.png" class="logo-img" alt="Logo" />
        <span class="vms-brand">CHAMPS VMA</span>
    </div> -->

    <nav class="nav flex-column nav-menu">

    <a href="<?= BASE_URL ?>index.php"
       class="nav-link <?= (CURRENT_PAGE == 'index.php') ? 'active' : '' ?>">
        <i class="fas fa-chart-pie me-2"></i> Dashboard
    </a>

    <a href="<?= BASE_URL ?>vehicle/vehicle-mngt.php"
       class="nav-link <?= (CURRENT_PAGE == 'vehicle-mngt.php') ? 'active' : '' ?>">
        <i class="fas fa-truck-pickup me-2"></i> Vehicle Management
    </a>

    <a href="<?= BASE_URL ?>incident-intervention/incident-intervention.php"
       class="nav-link <?= (CURRENT_PAGE == 'incident-intervention.php') ? 'active' : '' ?>">
        <i class="fas fa-exclamation-circle me-2"></i> Incident & Intervention
    </a>

     <a href="<?= BASE_URL ?>goods-inspections/goods-inspection.php"
       class="nav-link <?= (CURRENT_PAGE == 'goods-inspection.php') ? 'active' : '' ?>">
        <i class="fas fa-clipboard-check me-2"></i> On Board Goods Inspection
    </a>

    <a href="#" class="nav-link">
        <i class="fas fa-satellite me-2"></i> Vehicle Tracking
    </a>

    <a href="#" class="nav-link">
        <i class="fas fa-list-check me-2"></i> Asset Enumeration
    </a>

    <a href="<?= BASE_URL ?>report-analytics/report-analytics.php"
       class="nav-link <?= (CURRENT_PAGE == 'report-analytics.php') ? 'active' : '' ?>">
        <i class="fas fa-file-lines me-2"></i> Reports & Analytics
    </a>

</nav>
</div>
