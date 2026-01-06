<div id="sidebar">
    <div class="logo-area d-flex align-items-center justify-content-center">
        <img src="/vms-frontend/img/logo.png" class="logo-img" alt="Logo" />
        <span class="vms-brand">CHAMPS VMA</span>
    </div>

    <nav class="nav flex-column nav-menu">
        <a href="../index.php" class="nav-link active" onclick="setActive(this)">
            <i class="fas fa-chart-pie me-2"></i> Dashboard
        </a>

        <a href="./vehicle/vehicle-mngt.php" class="nav-link" onclick="setActive(this)">
            <i class="fas fa-truck-pickup me-2"></i> Vehicle Management
        </a>

        <a href="#" class="nav-link"
            onclick="setActive(this); showView('incident-mgmt-view','Incident & Intervention')">
            <i class="fas fa-exclamation-circle me-2"></i> Incident &
            Intervention
        </a>

        <a href="#" class="nav-link" onclick="setActive(this)">
            <i class="fas fa-satellite me-2"></i> Vehicle Tracking
        </a>

        <a href="#" class="nav-link" onclick="setActive(this)">
            <i class="fas fa-list-check me-2"></i> Asset Enumeration
        </a>

        <!-- ✅ New Reports Menu -->
        <a href="#" class="nav-link" onclick="setActive(this)">
            <i class="fas fa-file-lines me-2"></i> Reports & Analytics
        </a>
    </nav>
</div>
