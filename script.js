// function handleLogin() {
//         // 1. Login screen ko hide karo
//         const loginView = document.getElementById("login-view");
//         loginView.style.transition = "opacity 0.5s ease";
//         loginView.style.opacity = "0";

//         setTimeout(() => {
//           loginView.classList.add("hidden");

//           // 2. Dashboard aur Sidebar show karo
//           // Farz karein aapka main dashboard div 'main-wrapper' ya 'app-content' hai
//           // Hum showView function use kar sakte hain
//           showView("dashboard-view", "Dashboard");

//           // Agar aapke paas sidebar hai jo shuru mein hidden hai:
//           const dashboard = document.getElementById("dashboard-page");
//           if (dashboard) dashboard.classList.remove("hidden");
//         }, 500);
//       }

      function handleLogout() {
        // 1. Confirmation (Optional but recommended)
        if (confirm("Are you sure you want to logout?")) {
          const loginView = document.getElementById("login-view");

          // 2. Login view se 'hidden' class hatao aur styles reset karo
          loginView.classList.remove("hidden");
          loginView.style.opacity = "1";
          loginView.style.transform = "scale(1)";

          // 3. Saare dusre views ko hide kardo
          const views = [
            "dashboard-view",
            "vehicle-mgmt-view",
            "check-vehicle-view",
            "check-driver-view",
            "incident-mgmt-view",
            "breakdown-detail-view",
            "detention-detail-view",
            "accident-detail-view",
            "bugged-down-view",
            "incident-history-view",
          ];

          views.forEach((id) => {
            const el = document.getElementById(id);
            if (el) el.classList.add("hidden");
          });

          // 4. Agar koi sidebar hai to usay bhi hide kar sakte hain
          const dashboard = document.getElementById("dashboard-page");
          if (dashboard) dashboard.classList.add("hidden");

          console.log("User logged out successfully.");
        }
      }

      // Page load par sirf login dikhane ke liye
      window.onload = function () {
        // Baaki saare views ko hidden kar do shuru mein
        // Sirf login-view nazar aayega kyunki usme 'hidden' class nahi hai
      };

      function showSignUp() {
        // Login view ko hide karein
        document.getElementById("login-view").classList.add("hidden");

        // Sign-up view ko show karein aur animation add karein
        const signupView = document.getElementById("signup-view");
        signupView.classList.remove("hidden");
        signupView.classList.add("animate__animated", "animate__fadeInRight");
      }

      // Wapas login par jane ke liye function
      function showLogin() {
        document.getElementById("signup-view").classList.add("hidden");
        document.getElementById("forgot-password-view").classList.add("hidden");

        const loginView = document.getElementById("login-view");
        loginView.classList.remove("hidden");
        loginView.classList.add("animate__animated", "animate__fadeInLeft");
      }

      function showForgotPassword() {
        // Baaki views hide karein
        document.getElementById("login-view").classList.add("hidden");
        document.getElementById("signup-view").classList.add("hidden");

        // Forgot Password show karein
        const forgotView = document.getElementById("forgot-password-view");
        forgotView.classList.remove("hidden");
        forgotView.classList.add("animate__animated", "animate__fadeInRight");
      }

      function showView(viewId, title) {
        const views = [
          "dashboard-view",
          "vehicle-mgmt-view",
          "check-vehicle-view",
          "check-driver-view",
          "driver-mate-view",
          "route-mgmt-view",
          "service-history-view",
          "waybill-details-view",
          "incident-mgmt-view",
          "impoundment-detail-view",
          "breakdown-detail-view", // Add this here
          "detention-detail-view",
          "accident-detail-view",
          "bugged-down-view",
          "incident-history-view",
        ];

        views.forEach((id) => {
          const el = document.getElementById(id);
          if (el) el.classList.add("hidden");
        });

        document.getElementById(viewId).classList.remove("hidden");
      }
    
      document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const toggleBtn = document.getElementById("sidebarToggle");

        // Create overlay element dynamically
        const overlay = document.createElement("div");
        overlay.className = "sidebar-overlay";
        document.body.appendChild(overlay);

        if (toggleBtn) {
          toggleBtn.addEventListener("click", function () {
            sidebar.classList.toggle("active");
            overlay.classList.toggle("show");
          });
        }

        // Overlay ya link par click karne se sidebar band ho jaye (mobile par)
        overlay.addEventListener("click", function () {
          sidebar.classList.remove("active");
          overlay.classList.remove("show");
        });

        // Jab koi link click ho tab bhi sidebar band ho jaye (Mobile focus)
        const navLinks = document.querySelectorAll("#sidebar .nav-link");
        navLinks.forEach((link) => {
          link.addEventListener("click", () => {
            if (window.innerWidth < 992) {
              sidebar.classList.remove("active");
              overlay.classList.remove("show");
            }
          });
        });
      });

      //impound other function
      function handleReasonChange() {
        const otherRadio = document.getElementById("reasonOther");
        const otherField = document.getElementById("otherReasonField");

        if (otherRadio.checked) {
          otherField.classList.remove("d-none"); // Show field
        } else {
          otherField.classList.add("d-none"); // Hide field
        }
      }

      //breakdown other fault
      function toggleOtherFaultInput() {
        const checkbox = document.getElementById("otherFaultsCheckbox");
        const inputContainer = document.getElementById(
          "otherFaultInputContainer"
        );

        if (checkbox.checked) {
          inputContainer.classList.remove("d-none"); // Show input
          document.getElementById("otherFaultDetails").focus(); // Auto focus for better UX
        } else {
          inputContainer.classList.add("d-none"); // Hide input
        }
      }

      //bugged-down other function
      function toggleIncidentOther() {
        const othersCheckbox = document.getElementById("others");
        const container = document.getElementById("otherIncidentContainer");

        if (othersCheckbox.checked) {
          container.classList.remove("d-none"); // Show input
          container.classList.add("fade-in"); // Add smooth entry
        } else {
          container.classList.add("d-none"); // Hide input
        }
      }

      //accident other function
      function toggleSeverityOther() {
        const severitySelect = document.getElementById("severitySelect");
        const otherField = document.getElementById("otherSeverityContainer");

        // Agar "Others" value select ho toh field show karein, warna hide
        if (severitySelect.value === "Others") {
          otherField.classList.remove("d-none");
        } else {
          otherField.classList.add("d-none");
        }
      }

      //menu active class function
      function setActive(el) {
        document
          .querySelectorAll(".nav-menu .nav-link")
          .forEach((link) => link.classList.remove("active"));

        el.classList.add("active");
      }

      //toggle vehicle detail function
      function toggleVehicleDetail(showDetail) {
        const tableView = document.getElementById("vehicle-table-view");
        const detailView = document.getElementById("vehicle-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

      //toggle driver detail function
      function toggleDriverDetail(showDetail) {
        const tableView = document.getElementById("driver-table-view");
        const detailView = document.getElementById("driver-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

       //toggle route detail function
      function toggleRouteDetail(showDetail) {
        const tableView = document.getElementById("route-table-view");
        const detailView = document.getElementById("route-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

       //toggle service detail function
      function toggleServiceDetail(showDetail) {
        const tableView = document.getElementById("service-table-view");
        const detailView = document.getElementById("service-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

       //toggle waybill detail function
      function toggleWaybillDetail(showDetail) {
        const tableView = document.getElementById("waybill-table-view");
        const detailView = document.getElementById("waybill-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

      //toggle driver mate detail function
      function toggleDriverMateDetail(showDetail) {
        const tableView = document.getElementById("driver-mate-table-view");
        const detailView = document.getElementById("driver-mate-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

      //toggle impound detail function
      function toggleImpoundDetail(showDetail) {
        const tableView = document.getElementById("impound-table-view");
        const detailView = document.getElementById("impound-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

      //toggle impound detail function
      function toggleImpoundDetail(showDetail) {
        const tableView = document.getElementById("impound-table-view");
        const detailView = document.getElementById("impound-detail-view");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }

      //toggle breakdown detail function
      function toggleBreakdownDetail(showDetail) {
        const tableView = document.getElementById("breakdown-table");
        const detailView = document.getElementById("breakdown-detail");

        if (showDetail) {
          tableView.classList.add("d-none"); // Table ko hide karo
          detailView.classList.remove("d-none"); // Detail ko dikhao
        } else {
          tableView.classList.remove("d-none"); // Table ko wapis dikhao
          detailView.classList.add("d-none"); // Detail ko hide karo
        }
      }