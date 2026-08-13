
  document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle");
    const navList = document.getElementById("nav-list");
    const submenuToggles = document.querySelectorAll(".submenu-toggle");

    // Toggle main menu
    menuToggle.addEventListener("click", () => {
      const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
      menuToggle.setAttribute("aria-expanded", String(!isOpen));
      navList.classList.toggle("open");
      menuToggle.classList.toggle("open");
    });

    // Toggle submenus
    submenuToggles.forEach(toggle => {
      toggle.addEventListener("click", () => {
        const submenuId = toggle.getAttribute("aria-controls");
        const submenu = document.getElementById(submenuId);
        const isOpen = toggle.getAttribute("aria-expanded") === "true";

        // Close siblings
        const siblings = toggle.closest("ul").querySelectorAll(".submenu-toggle");
        siblings.forEach(sib => {
          if (sib !== toggle) {
            sib.setAttribute("aria-expanded", "false");
            const sibMenu = document.getElementById(sib.getAttribute("aria-controls"));
            if (sibMenu) {
              sibMenu.style.display = "none";
              sibMenu.setAttribute("aria-hidden", "true");
            }
            const icon = sib.querySelector(".toggle-icon");
            if (icon) icon.src = "/images/icon-open.png";
          }
        });

        // Toggle clicked submenu
        toggle.setAttribute("aria-expanded", String(!isOpen));
        submenu.style.display = isOpen ? "none" : "block";
        submenu.setAttribute("aria-hidden", String(isOpen));
        const icon = toggle.querySelector(".toggle-icon");
        if (icon) icon.src = !isOpen ? "/images/icon-close.png" : "/images/icon-open.png";
      });

      // Keyboard accessibility
      toggle.addEventListener("keydown", e => {
        if (e.key === "Enter" || e.key === " ") {
          e.preventDefault();
          toggle.click();
        }
      });
    });

    // Escape key closes all menus
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") {
        navList.classList.remove("open");
        menuToggle.classList.remove("open");
        menuToggle.setAttribute("aria-expanded", "false");
        submenuToggles.forEach(toggle => {
          toggle.setAttribute("aria-expanded", "false");
          const submenu = document.getElementById(toggle.getAttribute("aria-controls"));
          if (submenu) submenu.style.display = "none";
        });
      }
    });

    // Responsive reset
    const resetMenu = () => {
      if (window.innerWidth > 9975) {
        navList.classList.add("open");
      } else {
        navList.classList.remove("open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.classList.remove("open");
      }
    };

    // --- Theme Toggle ---
    //themeToggle.addEventListener("click", () => {
      //document.body.classList.toggle("dark-theme");
      //document.body.classList.toggle("light-theme");
    //});

    window.addEventListener("resize", resetMenu);
    resetMenu();
  });