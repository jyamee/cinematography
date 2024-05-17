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
