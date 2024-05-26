document.addEventListener("DOMContentLoaded", () => {
  const navbarToggle = document.getElementById("navbar-toggle");
  const navbarMenu = document.getElementById("navbar-menu");

  navbarToggle.addEventListener("click", () => {
    navbarMenu.classList.toggle("show");
  });

  const form = document.querySelector("form");
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Form submitted successfully!");
  });
});

function SendEmail() {
  console.log("test function");
}
