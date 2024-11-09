let startButton = document.getElementById('startButton');
let stopButton = document.getElementById('stopButton');
let audioContext = new (window.AudioContext || window.webkitAudioContext)();
let mediaStreamSource;

startButton.onclick = function() {
  navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function(stream) {
      mediaStreamSource = audioContext.createMediaStreamSource(stream);
      mediaStreamSource.connect(audioContext.destination);
    })
    .catch(function(err) {
      console.error('Hata:', err);
    });
};

stopButton.onclick = function() {
  if (mediaStreamSource) {
    mediaStreamSource.disconnect();
  }
};

let audioContext = new (window.AudioContext || window.webkitAudioContext)();
let mediaStreamSource;

navigator.mediaDevices.getUserMedia({ audio: true })
  .then(function(stream) {
    mediaStreamSource = audioContext.createMediaStreamSource(stream);
    mediaStreamSource.connect(audioContext.destination);
  })
  .catch(function(err) {
    console.error('Hata:', err);
  });
