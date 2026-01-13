
    <header class="top-navbar">
        <div class="d-flex align-items-center">
            <button class="btn btn-link" style="color: var(--secondary)" id="sidebarToggle">
                <i class="fas fa-bars fa-lg" id="toggleIcon"></i>
            </button>
        </div>


        <div class="d-flex align-items-center">
            <div class="dropdown me-3">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="profileDropdown"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="avatar-container">
                        <img src="https://ui-avatars.com/api/?name=Admin&background=random" alt="User"
                            class="rounded-circle border border-2 border-white shadow-sm"
                            style="width: 40px; height: 40px; object-fit: cover;">
                    </div>
                </a>

                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="profileDropdown"
                    style="min-width: 200px; border-radius: 12px;">
                    <li class="px-3 py-2 border-bottom">
                        <span class="d-block fw-bold small text-dark">John Doe</span>
                        <span class="d-block text-muted small">admin@champs.com</span>
                    </li>
                    <li><a class="dropdown-item py-2" href="/vms-frontend/profile.php"><i class="fas fa-user-circle me-2 text-primary"></i> My
                            Profile</a></li>

                    <li>
                        <a class="dropdown-item py-2 text-danger" href="/vms-frontend/auth/logout.php">
                            <i class="fas fa-sign-out-alt me-2"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>


        </div>


        <!-- <div class="d-flex align-items-center">
            <a href="/vms-frontend/auth/logout.php" class="text-decoration-none">
                <button type="button" class="btn secondary-color btn-sm rounded-pill px-3">
                    <i class="fas fa-sign-out-alt me-1"></i> Logout
                </button>
            </a>
            <button class="btn btn-link d-lg-none me-2" style="color: var(--secondary)" id="sidebarToggle">
                <i class="fas fa-bars fa-lg"></i>
            </button>
        </div> -->

    </header>