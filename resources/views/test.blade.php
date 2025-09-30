<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .audio-player {
        display: flex;
        align-items: center;
        gap: 10px;
        max-width: 600px;
    }
    .ap-track {
        flex: 1;
        position: relative;
        height: 6px;
        background: #ddd;
        border-radius: 3px;
        cursor: pointer;
    }
    .ap-progress {
        height: 100%;
        background: #007bff;
        border-radius: 3px;
        width: 0%;
        pointer-events: none; /* biar tidak nutupin klik */
    }
    .ap-seek {
        position: absolute;
        top: -6px;
        left: 0;
        width: 100%;
        background: transparent;
        -webkit-appearance: none;
        appearance: none;
        cursor: pointer;
        height: 6px;
    }
    .ap-seek::-webkit-slider-thumb {
        -webkit-appearance: none;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #007bff;
        cursor: grab;
    }
    .ap-time {
        font-family: monospace;
        font-size: 14px;
    }
</style>
</head>
<body>
    <p class="lead">Listen and answer questions 1-6 the Reading Passage?</p>

<div class="audio-player" role="group" aria-label="Audio controls">
    <audio preload="metadata">
        <source
            src="/own_assets/audio/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3"
            type="audio/mpeg" />
    </audio>

    <!-- Tombol Play / Pause -->
    <button class="ap-btn ap-play" type="button" aria-label="Play audio">
        <span class="ap-icon ap-icon-play">►</span>
        <span class="ap-icon ap-icon-pause" style="display:none;">❚❚</span>
    </button>

    <!-- Track progress -->
    <div class="ap-track">
        <div class="ap-progress"></div>
        <input class="ap-seek" type="range" min="0" max="100" value="0" step="0.1"
               aria-label="Seek audio" />
    </div>

    <!-- Timer -->
    <div class="ap-time">
        <span class="ap-current">0:00</span>
        <span class="ap-sep">/</span>
        <span class="ap-duration">0:00</span>
    </div>

    <!-- Volume -->
    <button class="ap-btn ap-vol" type="button" aria-label="Mute/unmute">
        <span class="ap-icon">🔊</span>
    </button>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const players = document.querySelectorAll('.audio-player');

    players.forEach(player => {
        const audio = player.querySelector('audio');
        const playBtn = player.querySelector('.ap-play');
        const muteBtn = player.querySelector('.ap-vol');
        const seek = player.querySelector('.ap-seek');
        const progress = player.querySelector('.ap-progress');
        const cur = player.querySelector('.ap-current');
        const dur = player.querySelector('.ap-duration');
        const iconPlay = player.querySelector('.ap-icon-play');
        const iconPause = player.querySelector('.ap-icon-pause');
        const track = player.querySelector('.ap-track');

        function fmt(t) {
            if (!isFinite(t)) return '0:00';
            const m = Math.floor(t / 60);
            const s = Math.floor(t % 60);
            return m + ':' + String(s).padStart(2, '0');
        }

        // Set durasi
        audio.addEventListener('loadedmetadata', () => {
            dur.textContent = fmt(audio.duration);
        });

        // Update progress waktu
        audio.addEventListener('timeupdate', () => {
            cur.textContent = fmt(audio.currentTime);
            const pct = (audio.currentTime / (audio.duration || 1)) * 100;
            progress.style.width = pct + '%';
            seek.value = pct;
        });

        // Play / pause
        playBtn.addEventListener('click', () => {
            if (audio.paused) audio.play();
            else audio.pause();
        });

        audio.addEventListener('play', () => {
            iconPlay.style.display = 'none';
            iconPause.style.display = 'inline';
        });

        audio.addEventListener('pause', () => {
            iconPlay.style.display = 'inline';
            iconPause.style.display = 'none';
        });

        // Geser slider → update waktu
        seek.addEventListener('input', () => {
            const t = (parseFloat(seek.value) / 100) * (audio.duration || 0);
            audio.currentTime = t;
        });

        // Klik di progress bar
        track.addEventListener('click', (e) => {
            const rect = track.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const pct = x / rect.width;
            audio.currentTime = pct * (audio.duration || 0);
        });

        // Mute / unmute
        muteBtn.addEventListener('click', () => {
            audio.muted = !audio.muted;
            muteBtn.querySelector('.ap-icon').textContent = audio.muted ? '🔇' : '🔊';
        });
    });
});
</script>
</body>
</html>
