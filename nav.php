<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>VMS Pro - Enterprise Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css">

<link rel="stylesheet" href="../style.css">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <header class="top-navbar">
        <div class="d-flex align-items-center">
            <button class="btn btn-link d-lg-none me-2" style="color: var(--secondary)" id="sidebarToggle">
                <i class="fas fa-bars fa-lg"></i>
            </button>

            <h4 id="view-title" class="fw-bold m-0 text-navy"></h4>
        </div>

       <div class="d-flex align-items-center">
    <a href="/vms-frontend/auth/logout.php" class="text-decoration-none">
        <button type="button" class="btn secondary-color btn-sm rounded-pill px-3">
            <i class="fas fa-sign-out-alt me-1"></i> Logout
        </button>
    </a>
</div>

    </header>