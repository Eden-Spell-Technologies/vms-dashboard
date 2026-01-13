(function () {
    // Page load hone se pehle check karein (Sirf Desktop ke liye state apply karein)
    const sidebarStatus = localStorage.getItem("sidebarState");
    if (sidebarStatus === "closed" && window.innerWidth >= 992) {
        document.documentElement.classList.add("sidebar-hidden");
    }
})();

document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const toggleIcon = document.getElementById("toggleIcon");
    const sidebarToggle = document.getElementById("sidebarToggle");

    if (!sidebar || !sidebarToggle) return;

    // 1. Initial Sync: LocalStorage ke mutabiq sidebar aur icon set karein
    const isClosed = localStorage.getItem("sidebarState") === "closed";
    
    if (isClosed && window.innerWidth >= 992) {
        sidebar.classList.add("active");
        if (toggleIcon) toggleIcon.className = "fas fa-bars-staggered";
    }

    // 2. Ready class add karein (Transitions enable karne ke liye)
    setTimeout(() => {
        document.body.classList.add("ready");
    }, 100);

    // 3. Click Event Logic
    sidebarToggle.addEventListener("click", function (e) {
        e.preventDefault();
        
        // Sidebar toggle karein
        sidebar.classList.toggle("active");
        const currentlyActive = sidebar.classList.contains("active");

        // Icon update karein
        if (toggleIcon) {
            if (currentlyActive) {
                toggleIcon.className = "fas fa-bars-staggered";
            } else {
                toggleIcon.className = "fas fa-bars";
            }
        }

        // State Save karein (Sirf desktop view ke liye save karna behtar hai)
        if (window.innerWidth >= 992) {
            localStorage.setItem("sidebarState", currentlyActive ? "closed" : "open");
            
            // HTML class sync for Desktop flash fix
            if (currentlyActive) {
                document.documentElement.classList.add("sidebar-hidden");
            } else {
                document.documentElement.classList.remove("sidebar-hidden");
            }
        }
    });

    // 4. Mobile Overlay Fix (Agar mobile pe bahar click karein toh band ho jaye)
    document.addEventListener("click", function (e) {
        if (window.innerWidth < 992) {
            if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target) && sidebar.classList.contains("active")) {
                sidebar.classList.remove("active");
                if (toggleIcon) toggleIcon.className = "fas fa-bars";
            }
        }
    });
});


