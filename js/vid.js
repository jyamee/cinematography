document.getElementById("toggleAudio").addEventListener("click", function () {
  const video = document.getElementById("bgVideo");
  video.muted = !video.muted;
});
