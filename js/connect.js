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
  Email.send({
    Host: "smtp.elasticemail.com",
    Username: "alyanom27@gmail.com",
    Password: "C0FFAE9A0BE7C225AAE1CF412A0BB4322085",
    To: "musa@rafeeqmedia.com",
    From: "alyanom27@gmail.com",
    Subject: "This is the subject",
    Body: "And this is the body",
  }).then((message) => alert(message));
}
