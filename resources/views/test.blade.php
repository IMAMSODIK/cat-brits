<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Play Audio from Specific Time</title>
<style>
  body {
    font-family: system-ui, sans-serif;
    padding: 20px;
    text-align: center;
  }
  button {
    padding: 10px 20px;
    border-radius: 8px;
    border: none;
    background: #007bff;
    color: white;
    cursor: pointer;
    font-size: 16px;
  }
  button:hover {
    background: #0056b3;
  }
  input {
    width: 60px;
    padding: 5px;
    text-align: center;
  }
</style>
</head>
<body>

<h2>Play Audio from Specific Time</h2>

<label>Start at (seconds): </label>
<input type="number" id="startTime" value="60" min="0">
<button id="playBtn">Play Audio</button>
<button id="stopBtn" disabled>Stop</button>

<p id="status"></p>

<script>
const audioSrc = "{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3') }}";

let audioCtx;
let sourceNode;
let audioBuffer;

// Fetch dan decode file audio sekali saja saat halaman dimuat
async function loadAudio() {
  document.getElementById("status").textContent = "Loading audio...";
  const response = await fetch(audioSrc);
  const arrayBuffer = await response.arrayBuffer();
  
  audioCtx = new (window.AudioContext || window.webkitAudioContext)();
  audioBuffer = await audioCtx.decodeAudioData(arrayBuffer);
  document.getElementById("status").textContent = "Audio loaded (" + audioBuffer.duration.toFixed(1) + "s)";
}

async function playFromTime(startSeconds) {
  if (!audioBuffer) {
    await loadAudio();
  }

  // Pastikan waktu mulai tidak lebih dari durasi
  const startTime = Math.min(startSeconds, audioBuffer.duration - 0.1);

  // Buat source baru setiap kali play (wajib di Web Audio API)
  sourceNode = audioCtx.createBufferSource();
  sourceNode.buffer = audioBuffer;
  sourceNode.connect(audioCtx.destination);

  sourceNode.start(0, startTime);
  document.getElementById("status").textContent = `Playing from ${startTime.toFixed(1)}s`;
  
  document.getElementById("playBtn").disabled = true;
  document.getElementById("stopBtn").disabled = false;

  sourceNode.onended = () => {
    document.getElementById("status").textContent = "Playback ended.";
    document.getElementById("playBtn").disabled = false;
    document.getElementById("stopBtn").disabled = true;
  };
}

function stopAudio() {
  if (sourceNode) {
    sourceNode.stop();
    sourceNode.disconnect();
    document.getElementById("status").textContent = "Stopped.";
    document.getElementById("playBtn").disabled = false;
    document.getElementById("stopBtn").disabled = true;
  }
}

document.getElementById("playBtn").addEventListener("click", async () => {
  const inputValue = parseFloat(document.getElementById("startTime").value);
  if (isNaN(inputValue) || inputValue < 0) {
    alert("Masukkan detik yang valid!");
    return;
  }
  await playFromTime(inputValue);
});

document.getElementById("stopBtn").addEventListener("click", stopAudio);
</script>

</body>
</html>
