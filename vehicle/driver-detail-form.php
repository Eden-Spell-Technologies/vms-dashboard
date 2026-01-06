<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
    header("Location: ../auth/login.php");
    exit();
}

// Ek folder peeche (root par) jaane ke liye ../ use karein
include("../sidebar.php");
include("../nav.php");
?>
<div id="main-wrapper" class="p-4 p-md-5">
    <div class="d-flex align-items-center mb-4">
        <a class="btn secondary-hover rounded-circle me-3" href="./driver-detail.php"  style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
            <i class="fas fa-arrow-left"></i>
</a>
        <h3 class="fw-bold mb-0">Driver Details</h3>
    </div>
    <div class="bg-white p-4 rounded-4 shadow-sm border mb-4">
        <div class="row">
            <div class="col-md-2 text-center mb-3">
                <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto shadow-sm"
                    style="
                      width: 120px;
                      height: 120px;
                      border: 3px solid var(--navy);
                    ">
                    <i class="fas fa-user-tie fa-4x text-muted"></i>
                </div>
                <span class="badge bg-success mt-2">Verified</span>
            </div>

            <div class="col-md-10">
                <div class="container-fluid p-0">
                    <div class="d-flex detail-row">
                        <div class="detail-label">Full Name:</div>
                        <div>John Doe</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Address:</div>
                        <div>Plot 45, Street 10, Karachi</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Phone Number:</div>
                        <div>+92 300 1234567</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Date Employed:</div>
                        <div>01-Jan-2022</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Date of Birth:</div>
                        <div>15-May-1990</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Driver's License Number:</div>
                        <div>DL-987654321</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">Emergency Contact Name:</div>
                        <div>Jane Doe</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">
                            Emergency Contact Phone Number:
                        </div>
                        <div>+92 321 7654321</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">
                            Assigned Vehicle / Plate Number:
                        </div>
                        <div>VH-789 (ABC-123)</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">License Category / Class:</div>
                        <div>HTV / LTV</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">License Expiry Date:</div>
                        <div>12-Dec-2028</div>
                    </div>

                    <div class="d-flex detail-row">
                        <div class="detail-label">
                            National ID / Passport Number:
                        </div>
                        <div>42101-1234567-1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Ek folder peeche ja kar footer include karein
include("../footer.php");
?>