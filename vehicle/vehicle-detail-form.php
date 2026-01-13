<?php
// Session check for security
session_start();
if (!isset($_SESSION['user'])) {
    // Auth folder bhi baahar hai, isliye ../ use kiya
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
        <div id="vehicle-detail-view" class="px-4 px-md-5 py-4">
            <div class="d-flex align-items-center mb-4">
                <a class="btn secondary-hover rounded-circle me-3" href="./vehicle-detail.php" style="
                    width: 40px;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border: 1px solid #ddd;
                  ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h3 class="fw-bold mb-0">Vehicle Details</h3>
            </div>

            <div class="bg-white p-4 rounded-4 shadow-sm border">
                <div class="container-fluid bg-white p-0">
                   <div class="row">
                    <div class="col-xl-7">
                         <div class="d-flex detail-row">
                        <div class="detail-label">Fleet No:</div>
                        <div>VH-789</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Manager Name:</div>
                        <div>John Doe</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Manager Email:</div>
                        <div>john.doe@example.com</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Make/Model:</div>
                        <div>Volkswagen Voyage</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Registration:</div>
                        <div>KA-01-AB-1234</div>
                    </div>
                    
                    <div class="d-flex detail-row">
                        <div class="detail-label">Vehicle Type:</div>
                        <div>Truck</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Status (Serviceable or Unserviceable):</div>
                        <div><span class="status-badge">Active</span></div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Assigned Driver:</div>
                        <div>John Doe (DRV-001)</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Last Service Date:</div>
                        <div>15 Jan 2024</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Next Service Due:</div>
                        <div>15 Mar 2024</div>
                    </div>
                    <div class="d-flex detail-row">
                        <div class="detail-label">Base / Site: </div>
                        <div>Enugu Depot</div>
                    </div>
                    <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Fuel Level:</div>
                    <div>85%</div>
                </div> -->
                    <!-- <div class="d-flex detail-row">
                    <div class="detail-label">Mileage:</div>
                    <div>85,250 km</div>
                </div> -->
                    <div class="d-flex detail-row">
                        <div class="detail-label">Client/Vehicle Owner:</div>
                        <div>Rahul Sharma</div>
                    </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="text-center p-2 ">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhMQExIQExIVFxgWFxYYFhYaFRcSFhYXFxUWFxcYICsgGBolGxgVITEiJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGy8lHyUtLS0tKy0tLS0tLS0tLS0tLS0tLS0tLS0tLSstLS0tLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIALIBGwMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABAUDBgcCAQj/xABIEAABAwEFAwkEBgcGBwEAAAABAAIDEQQFEiExBkFRBxMiMmFxgZGhQrHB0RQjUlNicjOCkqLC4fAVF0Oy0uIkNERkc5PxCP/EABoBAQADAQEBAAAAAAAAAAAAAAABAgMEBQb/xAA1EQEAAgECBAMECgICAwAAAAAAAQIDBBESEzFBBSFRFGGRoRUiMkJScYGx0eHB8DNTQ2Lx/9oADAMBAAIRAxEAPwDuKAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgwWi0Bpa2lXPNAOwZud2AD4DUhBnQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQY552sGJ7mtHEkAeqCgt22lljqAXyH8LcvN1AoWiu/WVBa+UqnUg8XP+A+ajeWkVx97fJUWjlItJ6rYm+Hzqn1l49njrurLRyi2v75g7sA+Cjay8W00dpV83KFa/vn+DiFXa68ZNN+GUZu31ud1HyntL3UCxnLMPTx6Cl44prtHv6/B7dtdeeptBZ+s7+IqOZeejSdFpafa/xANr7zGf0x9ONKjzIIU75WU08Pjrt8f4ZYtvL0B/5tru+OM/wqd8ynD4dP/wBlJh5RbxY8yOFne7CG9ONwo0Emgo4UqdeNBwCceWOyPZdBbpfb9f6XNj5Y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"
                                alt="Truck Image" class="img-fluid" style="max-height: 200px; object-fit: contain;">
                        </div>
                    </div>
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