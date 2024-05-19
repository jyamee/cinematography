document.addEventListener("DOMContentLoaded", () => {
  const navbarToggle = document.getElementById("navbar-toggle");
  const navbarMenu = document.getElementById("navbar-menu");

  navbarToggle.addEventListener("click", () => {
    navbarMenu.classList.toggle("show");
  });

  // Animation for h1 on home page
  const heroTitle = document.querySelector(".hero h1");
  if (heroTitle) {
    heroTitle.style.opacity = "0";
    setTimeout(() => {
      heroTitle.style.opacity = "1";
      heroTitle.style.transition = "opacity 2s";
    }, 500);
  }
});
