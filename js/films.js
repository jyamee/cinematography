function playVideo(element) {
  const video = element.querySelector("video");
  if (video.paused) {
    video.play();
    video.controls = true;
  } else {
    video.pause();
    video.controls = false;
  }
}
document.addEventListener("DOMContentLoaded", () => {
  const navbarToggle = document.getElementById("navbar-toggle");
  const navbarMenu = document.getElementById("navbar-menu");

  navbarToggle.addEventListener("click", () => {
    navbarMenu.classList.toggle("show");
  });
});
