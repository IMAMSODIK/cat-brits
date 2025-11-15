<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi-Track Audio Player</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: white;
            padding: 25px 30px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.2rem;
            margin-bottom: 8px;
            font-weight: 700;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            padding: 0;
        }

        .track-list {
            flex: 1;
            min-width: 300px;
            max-height: 500px;
            overflow-y: auto;
            padding: 20px;
            background: #f8f9fa;
        }

        .track-item {
            display: flex;
            align-items: center;
            padding: 15px;
            margin-bottom: 12px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            cursor: pointer;
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }

        .track-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .track-item.active {
            border-left: 4px solid #2575fc;
            background: rgba(37, 117, 252, 0.05);
        }

        .track-cover {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .track-info {
            flex: 1;
        }

        .track-title {
            font-weight: 600;
            font-size: 1.1rem;
            margin-bottom: 4px;
            color: #333;
        }

        .track-artist {
            font-size: 0.9rem;
            color: #666;
        }

        .track-duration {
            font-size: 0.85rem;
            color: #888;
            font-weight: 500;
        }

        .player-container {
            flex: 2;
            min-width: 350px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .now-playing {
            text-align: center;
            margin-bottom: 30px;
        }

        .now-playing .track-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 5px;
        }

        .now-playing .track-artist {
            font-size: 1.1rem;
            color: #666;
        }

        .album-cover {
            width: 200px;
            height: 200px;
            border-radius: 12px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .controls-container {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }

        .play-btn {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            border: none;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 6px 15px rgba(37, 117, 252, 0.4);
            transition: all 0.2s ease;
            font-size: 1.4rem;
        }

        .play-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(37, 117, 252, 0.5);
        }

        .play-btn:active {
            transform: scale(0.98);
        }

        .seek-container {
            flex: 1;
        }

        #seekBar {
            width: 100%;
            height: 6px;
            -webkit-appearance: none;
            appearance: none;
            background: #e0e0e0;
            border-radius: 10px;
            outline: none;
            overflow: hidden;
            margin-bottom: 8px;
        }

        #seekBar::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #2575fc;
            cursor: pointer;
            box-shadow: -407px 0 0 400px #2575fc;
        }

        #seekBar::-moz-range-thumb {
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: #2575fc;
            cursor: pointer;
            border: none;
        }

        .time-display {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
        }

        .volume-control {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .volume-control i {
            color: #666;
            font-size: 1.2rem;
        }

        #volumeBar {
            flex: 1;
            height: 5px;
            -webkit-appearance: none;
            appearance: none;
            background: #e0e0e0;
            border-radius: 10px;
            outline: none;
            overflow: hidden;
        }

        #volumeBar::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 14px;
            height: 14px;
            border-radius: 50%;
            background: #2575fc;
            cursor: pointer;
            box-shadow: -407px 0 0 400px #2575fc;
        }

        .start-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 25px;
            justify-content: center;
        }

        .start-btn {
            padding: 10px 18px;
            background: rgba(37, 117, 252, 0.1);
            color: #2575fc;
            border: 1px solid rgba(37, 117, 252, 0.3);
            border-radius: 8px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.2s ease;
        }

        .start-btn:hover {
            background: rgba(37, 117, 252, 0.2);
            transform: translateY(-2px);
        }

        .start-btn:active {
            transform: translateY(0);
        }

        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            font-size: 0.9rem;
            border-top: 1px solid #eee;
            background: #f8f9fa;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
            }
            
            .track-list {
                max-height: 300px;
            }
            
            .album-cover {
                width: 150px;
                height: 150px;
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1><i class="fas fa-music"></i> Multi-Track Audio Player</h1>
            <p>Putar dan nikmati koleksi audio favorit Anda</p>
        </div>
        
        <div class="content">
            <div class="track-list">
                <!-- Daftar track akan diisi oleh JavaScript -->
            </div>
            
            <div class="player-container">
                <div class="now-playing">
                    <div class="album-cover">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="track-title">Pilih track untuk diputar</div>
                    <div class="track-artist">-</div>
                </div>
                
                <audio id="mainAudio" preload="auto"></audio>
                
                <div class="controls-container">
                    <button class="play-btn" id="togglePlay">
                        <i class="fas fa-play"></i>
                    </button>
                    
                    <div class="seek-container">
                        <input type="range" id="seekBar" min="0" max="100" value="0">
                        <div class="time-display">
                            <span id="currentTime">0:00</span>
                            <span id="duration">0:00</span>
                        </div>
                    </div>
                </div>
                
                <div class="volume-control">
                    <i class="fas fa-volume-down"></i>
                    <input type="range" id="volumeBar" min="0" max="100" value="80">
                    <i class="fas fa-volume-up"></i>
                </div>
                
                <div class="start-buttons">
                    <button class="start-btn" data-start="30">Start from 0:30</button>
                    <button class="start-btn" data-start="60">Start from 1:00</button>
                    <button class="start-btn" data-start="120">Start from 2:00</button>
                </div>
            </div>
        </div>
        
        <div class="footer">
            <p>Audio Player Multi-Track &copy; 2023 - Dibuat dengan <i class="fas fa-heart" style="color: #e74c3c;"></i></p>
        </div>
    </div>

    <script>
        // Data track audio
        const tracks = [
            {
                id: 1,
                title: "IELTS Listening Test",
                artist: "Cambridge IELTS 10",
                src: "https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3",
                duration: "4:15",
                cover: "ielts"
            },
            {
                id: 2,
                title: "Relaxing Piano",
                artist: "Ambient Music",
                src: "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3",
                duration: "3:45",
                cover: "piano"
            },
            {
                id: 3,
                title: "Jazz Vibes",
                artist: "Smooth Jazz Ensemble",
                src: "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-2.mp3",
                duration: "5:20",
                cover: "jazz"
            },
            {
                id: 4,
                title: "Nature Sounds",
                artist: "Forest Ambience",
                src: "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-3.mp3",
                duration: "6:10",
                cover: "nature"
            },
            {
                id: 5,
                title: "Upbeat Electronic",
                artist: "Synthwave Producer",
                src: "https://www.soundhelix.com/examples/mp3/SoundHelix-Song-4.mp3",
                duration: "4:35",
                cover: "electronic"
            }
        ];

        // Elemen DOM
        const audio = document.getElementById("mainAudio");
        const seekBar = document.getElementById("seekBar");
        const currentTimeEl = document.getElementById("currentTime");
        const durationEl = document.getElementById("duration");
        const togglePlay = document.getElementById("togglePlay");
        const playIcon = togglePlay.querySelector("i");
        const volumeBar = document.getElementById("volumeBar");
        const trackList = document.querySelector(".track-list");
        const nowPlayingTitle = document.querySelector(".now-playing .track-title");
        const nowPlayingArtist = document.querySelector(".now-playing .track-artist");
        const albumCover = document.querySelector(".album-cover");

        let isSeeking = false;
        let currentTrackIndex = 0;

        // Fungsi untuk memuat daftar track
        function loadTrackList() {
            trackList.innerHTML = '';
            
            tracks.forEach((track, index) => {
                const trackItem = document.createElement('div');
                trackItem.className = `track-item ${index === currentTrackIndex ? 'active' : ''}`;
                trackItem.innerHTML = `
                    <div class="track-cover">
                        <i class="fas fa-music"></i>
                    </div>
                    <div class="track-info">
                        <div class="track-title">${track.title}</div>
                        <div class="track-artist">${track.artist}</div>
                    </div>
                    <div class="track-duration">${track.duration}</div>
                `;
                
                trackItem.addEventListener('click', () => {
                    // Hapus kelas active dari semua track
                    document.querySelectorAll('.track-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    
                    // Tambahkan kelas active ke track yang dipilih
                    trackItem.classList.add('active');
                    
                    // Load dan putar track yang dipilih
                    loadTrack(index);
                });
                
                trackList.appendChild(trackItem);
            });
        }

        // Fungsi untuk memuat track
        function loadTrack(index) {
            currentTrackIndex = index;
            const track = tracks[index];
            
            // Update audio source
            audio.src = track.src;
            
            // Update info track yang sedang diputar
            nowPlayingTitle.textContent = track.title;
            nowPlayingArtist.textContent = track.artist;
            
            // Update ikon album berdasarkan jenis musik
            updateAlbumCover(track.cover);
            
            // Reset UI
            playIcon.className = "fas fa-play";
            seekBar.value = 0;
            currentTimeEl.textContent = "0:00";
            durationEl.textContent = track.duration;
            
            // Muat metadata audio untuk mendapatkan durasi sebenarnya
            audio.addEventListener('loadedmetadata', () => {
                durationEl.textContent = formatTime(audio.duration);
            }, { once: true });
        }

        // Fungsi untuk memperbarui tampilan album cover
        function updateAlbumCover(type) {
            const icons = {
                ielts: "fas fa-graduation-cap",
                piano: "fas fa-music",
                jazz: "fas fa-compact-disc",
                nature: "fas fa-tree",
                electronic: "fas fa-sliders-h"
            };
            
            albumCover.innerHTML = `<i class="${icons[type] || 'fas fa-music'}"></i>`;
        }

        // ======================================
        // START BUTTONS → play dari posisi tertentu
        // ======================================
        document.querySelectorAll(".start-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                const offset = parseFloat(btn.dataset.start);
                audio.currentTime = offset;
                audio.play();
                playIcon.className = "fas fa-pause";
            });
        });

        // ======================================
        // SEEK BAR SYSTEM
        // ======================================
        seekBar.addEventListener("input", () => {
            if (!audio.duration) return;
            isSeeking = true;
            audio.currentTime = (seekBar.value / 100) * audio.duration;
        });

        seekBar.addEventListener("change", () => {
            isSeeking = false;
        });

        // ======================================
        // VOLUME CONTROL
        // ======================================
        volumeBar.addEventListener("input", () => {
            audio.volume = volumeBar.value / 100;
        });

        // ======================================
        // Toggle Play
        // ======================================
        togglePlay.addEventListener("click", () => {
            if (audio.paused) {
                audio.play();
                playIcon.className = "fas fa-pause";
            } else {
                audio.pause();
                playIcon.className = "fas fa-play";
            }
        });

        // Auto-update UI
        setInterval(() => {
            if (!audio.duration) return;

            if (!isSeeking) {
                seekBar.value = (audio.currentTime / audio.duration) * 100;
            }

            currentTimeEl.textContent = formatTime(audio.currentTime);
        }, 200);

        // Ketika track selesai, lanjut ke track berikutnya
        audio.addEventListener("ended", () => {
            // Cari track berikutnya
            const nextIndex = (currentTrackIndex + 1) % tracks.length;
            
            // Hapus kelas active dari semua track
            document.querySelectorAll('.track-item').forEach(item => {
                item.classList.remove('active');
            });
            
            // Tambahkan kelas active ke track berikutnya
            document.querySelectorAll('.track-item')[nextIndex].classList.add('active');
            
            // Load track berikutnya
            loadTrack(nextIndex);
            audio.play();
        });

        // ======================================
        // Format time function
        // ======================================
        function formatTime(sec) {
            if (!sec || isNaN(sec)) return "0:00";
            const m = Math.floor(sec / 60);
            const s = Math.floor(sec % 60).toString().padStart(2, "0");
            return `${m}:${s}`;
        }

        // Inisialisasi player
        loadTrackList();
        loadTrack(0);
    </script>
</body>
</html>