// navbar-script.js
const toggleBtn = document.getElementById("toggle-btn");
const toggleIcon = document.getElementById("toggle-icon");
const sidebar = document.getElementById("sidebar");

toggleBtn.addEventListener("click", () => {
  sidebar.classList.toggle("expand");

  // Ganti ikon berdasarkan status expand
  if (sidebar.classList.contains("expand")) {
    toggleIcon.textContent = "menu_open";
  } else {
    toggleIcon.textContent = "menu";
  }

  toggleIcon.textContent = sidebar.classList.contains("expand") ? "menu_open" : "menu";
});

