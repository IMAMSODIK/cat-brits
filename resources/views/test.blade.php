<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Play Audio pada Menit Tertentu</title>
  <style>
    body { font-family: system-ui, -apple-system, Roboto, "Helvetica Neue", Arial; padding: 24px; }
    .controls { display:flex; gap:8px; align-items:center; margin-top:12px; }
    input[type="number"] { width: 100px; padding:6px; }
    button { padding:8px 12px; border-radius:6px; border:1px solid #888; background:#f3f3f3; cursor:pointer; }
    button:active { transform: translateY(1px); }
    .note { margin-top:10px; color:#555; font-size:14px; }
  </style>
</head>
<body>
  <h1>Play Audio pada Menit Tertentu</h1>

  <!-- Audio (ganti src dengan file audio Anda) -->
  <audio id="myAudio" controls preload="metadata">
    <source src="{{ asset('own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3') }}" type="audio/mpeg">
    Browser Anda tidak mendukung elemen audio.
  </audio>

  <button onclick="startAudioAtTime()">Play from 15 seconds</button>

  <script>
        function startAudioAtTime() {
            const audioPlayer = document.getElementById('myAudio');
            audioPlayer.currentTime = 15; // Set the starting time in seconds
            audioPlayer.play(); // Start playback
        }
    </script>
</body>
</html>
