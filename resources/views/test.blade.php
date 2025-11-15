<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Audio Player – Multi Audio</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;
            padding: 40px;
            background: #eef2f7;
            font-family: 'Segoe UI', sans-serif;
        }

        .audio-player {
            width: 100%;
            max-width: 520px;
            padding: 25px;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: 0.2s;
        }

        .audio-player:hover {
            transform: translateY(-3px);
        }

        .player-header {
            text-align: center;
            margin-bottom: 15px;
        }

        .player-title {
            font-size: 1.35rem;
            font-weight: 600;
            color: #333;
        }

        .player-subtitle {
            font-size: 0.9rem;
            color: #666;
        }

        .controls-container {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
        }

        /* ===== PLAY BUTTON ===== */
        .play-btn {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            color: white;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
        }

        .seek-container {
            flex: 1;
        }

        .seekBar,
        #seekBar,
        .seekBar {
            width: 100%;
            height: 7px;
            appearance: none;
            background: #e0e0e0;
            border-radius: 10px;
            outline: none;
            overflow: hidden;
        }

        .seekBar::-webkit-slider-thumb {
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #2575fc;
            box-shadow: -400px 0 0 390px #2575fc;
        }

        .timeText {
            display: flex;
            justify-content: space-between;
            margin-top: 6px;
            font-size: 0.9rem;
            color: #444;
        }

        .start-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            flex-wrap: wrap;
        }

        .start-btn {
            padding: 9px 15px;
            font-size: 0.9rem;
            background: rgba(37, 117, 252, 0.08);
            border: 1px solid rgba(37, 117, 252, 0.25);
            color: #2575fc;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.15s;
            white-space: nowrap;
        }

        .start-btn:hover {
            background: rgba(37, 117, 252, 0.15);
            transform: translateY(-2px);
        }

        .audio-info {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-top: 18px;
            padding: 12px;
            background: #f4f7ff;
            border-radius: 10px;
        }

        .audio-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .audio-name {
            font-weight: 600;
            color: #333;
        }

        .audio-source {
            font-size: 0.8rem;
            color: #555;
        }

        /* =========================== */
        /*        RESPONSIVE CSS       */
        /* =========================== */

        /* Mobile (max 480px) */
        @media (max-width: 480px) {
            body {
                padding: 10px;
                gap: 25px;
            }

            .audio-player {
                padding: 20px;
                border-radius: 16px;
            }

            .player-title {
                font-size: 1.15rem;
            }

            .play-btn {
                width: 44px;
                height: 44px;
                font-size: 0.85rem;
            }

            .start-btn {
                flex: 1;
                text-align: center;
            }

            .timeText {
                font-size: 0.75rem;
            }
        }

        /* Tablet (480px – 768px) */
        @media (max-width: 768px) {
            .audio-player {
                max-width: 100%;
            }

            .play-btn {
                width: 46px;
                height: 46px;
            }

            .start-btn {
                font-size: 0.85rem;
            }
        }

        /* Desktop Wide */
        @media (min-width: 1200px) {
            .audio-player {
                max-width: 600px;
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <!-- ========================= -->
    <!--   AUDIO PLAYER 1          -->
    <!-- ========================= -->
    <div class="audio-player" data-player>
        <div class="player-header">
            <div class="player-title">IELTS Listening Test 1</div>
            <div class="player-subtitle">Cambridge IELTS 10</div>
        </div>

        <audio preload="auto"
            src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3">
        </audio>

        <div class="controls-container">
            <button class="play-btn"><i class="fas fa-play"></i></button>
            <div class="seek-container">
                <input type="range" min="0" max="100" value="0" class="seekBar">
                <div class="timeText"><span class="current">0:00</span>
                    <span class="duration">0:00</span>
                </div>
            </div>
        </div>

        <div class="start-buttons">
            <button class="start-btn" data-start="58">Start from 0:58</button>
            <button class="start-btn" data-start="120">Start from 2:00</button>
        </div>
    </div>


    <!-- ========================= -->
    <!--   AUDIO PLAYER 2 (contoh) -->
    <!-- ========================= -->
    <div class="audio-player" data-player>
        <div class="player-header">
            <div class="player-title">IELTS Listening Test 2</div>
            <div class="player-subtitle">Cambridge IELTS 11</div>
        </div>

        <audio preload="auto" src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3">
        </audio>

        <div class="controls-container">
            <button class="play-btn"><i class="fas fa-play"></i></button>
            <div class="seek-container">
                <input type="range" min="0" max="100" value="0" class="seekBar">
                <div class="timeText"><span class="current">0:00</span>
                    <span class="duration">0:00</span>
                </div>
            </div>
        </div>

        <div class="start-buttons">
            <button class="start-btn" data-start="30">Start from 0:30</button>
        </div>
    </div>


    <script>
        let currentPlaying = null;

        document.querySelectorAll("[data-player]").forEach(player => {

            const audio = player.querySelector("audio");
            const btnPlay = player.querySelector(".play-btn");
            const icon = btnPlay.querySelector("i");
            const seekBar = player.querySelector(".seekBar");
            const curT = player.querySelector(".current");
            const durT = player.querySelector(".duration");

            let isSeeking = false;

            // =============== STOP AUDIO LAIN ===============
            function stopOtherPlayers() {
                if (currentPlaying && currentPlaying !== audio) {
                    currentPlaying.pause();
                    const otherBtn = currentPlaying.closest("[data-player]").querySelector(".play-btn i");
                    otherBtn.className = "fas fa-play";
                }
                currentPlaying = audio;
            }

            // =============== PLAY / PAUSE ===============
            btnPlay.addEventListener("click", () => {
                stopOtherPlayers();

                if (audio.paused) {
                    audio.play();
                    icon.className = "fas fa-pause";
                } else {
                    audio.pause();
                    icon.className = "fas fa-play";
                }
            });

            // =============== START FROM X ===============
            player.querySelectorAll(".start-btn").forEach(btn => {
                btn.addEventListener("click", () => {
                    const offset = parseFloat(btn.dataset.start);

                    stopOtherPlayers();
                    audio.currentTime = offset;
                    audio.play();
                    icon.className = "fas fa-pause";
                });
            });

            // =============== SEEK BAR ===============
            seekBar.addEventListener("input", () => {
                isSeeking = true;
                audio.currentTime = (seekBar.value / 100) * audio.duration;
            });

            seekBar.addEventListener("change", () => isSeeking = false);

            setInterval(() => {
                if (!audio.duration) return;

                if (!isSeeking) {
                    seekBar.value = (audio.currentTime / audio.duration) * 100;
                }

                curT.textContent = format(audio.currentTime);
                durT.textContent = format(audio.duration);

            }, 200);

            audio.addEventListener("loadedmetadata", () => {
                durT.textContent = format(audio.duration);
            });

            function format(t) {
                if (!t) return "0:00";
                const m = Math.floor(t / 60);
                const s = Math.floor(t % 60).toString().padStart(2, "0");
                return `${m}:${s}`;
            }
        });
    </script>

</body>

</html>
