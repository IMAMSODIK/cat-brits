<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Audio Player Simple</title>

<style>
    .audio-player {
        width: 360px;
        padding: 20px;
        background: #f7f7f7;
        border-radius: 12px;
        border: 1px solid #ddd;
        font-family: Arial, sans-serif;
    }

    .row {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 15px;
    }

    button {
        padding: 10px 16px;
        background: #222;
        color: white;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: 0.2s;
    }

    button:hover {
        background: #444;
    }

    #seekBar {
        width: 100%;
    }

    #timeText {
        text-align: center;
        margin-top: 5px;
        font-size: 15px;
        font-weight: bold;
    }
</style>

</head>
<body>

<div class="audio-player">

    <audio id="mainAudio" preload="auto"></audio>

    <div class="row">
        <button id="playFromHere">Play From Here</button>
        <button id="togglePlay">Play</button>
    </div>

    <input type="range" id="seekBar" min="0" max="100" value="0">

    <div id="timeText">0:00 / 0:00</div>

</div>

<script>
const audio = document.getElementById("mainAudio");
const seekBar = document.getElementById("seekBar");
const timeText = document.getElementById("timeText");
const togglePlay = document.getElementById("togglePlay");
const playFromHere = document.getElementById("playFromHere");

let isSeeking = false;

// ======================================
// GANTI AUDIO DI SINI
// ======================================
audio.src = "https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3";


// ======================================
// PLAY FROM SEEK POSITION
// ======================================
playFromHere.addEventListener("click", () => {
    if (!audio.duration) return;

    audio.pause();

    // Hitung posisi berdasarkan persentase seekbar
    audio.currentTime = (seekBar.value / 100) * audio.duration;

    audio.play();
    togglePlay.textContent = "Pause";
});

// ======================================
// SEEK BAR SYSTEM (super stabil)
// ======================================
seekBar.addEventListener("input", () => {
    if (!audio.duration) return;
    isSeeking = true;
    audio.currentTime = (seekBar.value / 100) * audio.duration;
});

seekBar.addEventListener("change", () => {
    isSeeking = false;
});

// Update UI setiap 200ms
setInterval(() => {
    if (!audio.duration) return;

    if (!isSeeking) {
        seekBar.value = (audio.currentTime / audio.duration) * 100;
    }

    timeText.textContent =
        formatTime(audio.currentTime) + " / " + formatTime(audio.duration);
}, 200);

// ======================================
// TOGGLE PLAY / PAUSE
// ======================================
togglePlay.addEventListener("click", () => {
    if (audio.paused) {
        audio.play();
        togglePlay.textContent = "Pause";
    } else {
        audio.pause();
        togglePlay.textContent = "Play";
    }
});

// ======================================
// Format time helper
// ======================================
function formatTime(sec) {
    if (!sec) return "0:00";
    const m = Math.floor(sec / 60);
    const s = Math.floor(sec % 60).toString().padStart(2, "0");
    return `${m}:${s}`;
}
</script>

</body>
</html>
