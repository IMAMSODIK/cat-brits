<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Auto Audio Tabs</title>

<style>
    .x-tabs {
        display: flex;
        gap: 10px;
    }
    .x-tab {
        padding: 8px 16px;
        background: #eee;
        border-radius: 6px;
        cursor: pointer;
    }
    .x-tab.is-active {
        background: #4e94ff;
        color: white;
    }
    .x-panel {
        display: none;
        margin-top: 20px;
    }
    .x-panel.active {
        display: block;
    }

    /* audio player */
    .audio-player {
        margin-top: 20px;
        padding: 15px;
        background: #f3f3f3;
        border-radius: 10px;
    }
    .timeline {
        width: 100%;
    }

    /* modal */
    #confirmModal {
        position: fixed;
        top: 0; left: 0;
        width: 100%; height: 100%;
        display: none;
        background: rgba(0,0,0,0.6);
        justify-content: center;
        align-items: center;
    }
    #confirmModal .box {
        background: white;
        padding: 20px;
        width: 320px;
        border-radius: 10px;
        text-align: center;
    }
    #confirmModal button {
        margin-top: 15px;
        padding: 8px 16px;
    }
</style>

</head>
<body>

<!-- MODAL CONFIRMATION -->
<div id="confirmModal">
    <div class="box">
        <h3>Audio Notice</h3>
        <p>The audio in this section can only be played once.<br>Are you sure you want to continue?</p>
        <button id="confirmYes">Yes, continue</button>
    </div>
</div>


<!-- TABS -->
<div class="x-tabs" role="tablist" data-active="tfng">
    <button class="x-tab is-active" data-id="tfng">Part 1</button>
    <button class="x-tab" data-id="tfng2">Part 2</button>
    <button class="x-tab" data-id="ynng">Part 3</button>
    <button class="x-tab" data-id="mse">Part 4</button>
</div>


<!-- PANELS -->
<div id="panel-tfng" class="x-panel active" data-player>
    <div class="audio-player">
        <audio src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-1.mp3"></audio>
        <input type="range" class="timeline" value="0" disabled>
        <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
    </div>
</div>

<div id="panel-tfng2" class="x-panel" data-player>
    <div class="audio-player">
        <audio src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-2.mp3"></audio>
        <input type="range" class="timeline" value="0" disabled>
        <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
    </div>
</div>

<div id="panel-ynng" class="x-panel" data-player>
    <div class="audio-player">
        <audio src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-3.mp3"></audio>
        <input type="range" class="timeline" value="0" disabled>
        <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
    </div>
</div>

<div id="panel-mse" class="x-panel" data-player>
    <div class="audio-player">
        <audio src="https://engnovate.com/wp-content/uploads/2023/07/ielts-listening-testscambridge-ielts-10-academic-listening-1-audio-4.mp3"></audio>
        <input type="range" class="timeline" value="0" disabled>
        <div><span class="current">0:00</span> / <span class="duration">0:00</span></div>
    </div>
</div>


<script>
/* ====== Audio tab controller (fixed stop-on-switch) ====== */

let currentAudio = null;
let currentTimerId = null;

// format mm:ss
function formatTime(sec){
    sec = isNaN(sec) ? 0 : Math.floor(sec);
    const m = Math.floor(sec/60);
    const s = sec % 60;
    return `${m}:${s < 10 ? '0' : ''}${s}`;
}

// reset UI for a panel's audio (progress+time)
function resetPanelUI(panel) {
    const prog = panel.querySelector(".timeline");
    const cur = panel.querySelector(".current");
    const dur = panel.querySelector(".duration");
    if (prog) prog.value = 0;
    if (cur) cur.textContent = "0:00";
    if (dur) {
        // leave duration as-is (if already loaded) or show 0:00
        if (!panel.querySelector("audio").duration || isNaN(panel.querySelector("audio").duration)) {
            dur.textContent = "0:00";
        }
    }
    // if you used a visual progress element instead of range, reset its width:
    const visualProg = panel.querySelector(".seekbar-progress");
    if (visualProg) visualProg.style.width = "0%";
}

// stop & reset current audio (completely)
function stopCurrentAudio() {
    if (!currentAudio) return;

    // pause & reset time
    try {
        currentAudio.pause();
        currentAudio.currentTime = 0;
    } catch (e) { /* ignore */ }

    // clear interval timer if any
    if (currentTimerId) {
        clearInterval(currentTimerId);
        currentTimerId = null;
    }

    // reset UI for the panel that had currentAudio
    const panel = currentAudio.closest(".x-panel");
    if (panel) resetPanelUI(panel);

    // unset currentAudio reference
    currentAudio = null;
}

// start timer to update UI every 1 second
function startPanelTimer(audio, panel) {
    // clear existing
    if (currentTimerId) {
        clearInterval(currentTimerId);
        currentTimerId = null;
    }

    const prog = panel.querySelector(".timeline");
    const cur = panel.querySelector(".current");
    const dur = panel.querySelector(".duration");
    const visualProg = panel.querySelector(".seekbar-progress");

    currentTimerId = setInterval(() => {
        if (!audio.duration || isNaN(audio.duration)) return;
        const pct = (audio.currentTime / audio.duration) * 100;
        if (prog) prog.value = pct;
        if (visualProg) visualProg.style.width = pct + "%";
        if (cur) cur.textContent = formatTime(audio.currentTime);
        if (dur) dur.textContent = formatTime(audio.duration);
    }, 1000);
}

// play audio for a panel (only if not already played)
function playPanelAudio(panel) {
    const audio = panel.querySelector("audio");
    if (!audio) return;

    // already played once? skip
    if (audio.dataset.played === "yes") {
        return;
    }

    // if another audio is playing -> stop it first
    if (currentAudio && currentAudio !== audio) {
        stopCurrentAudio();
    }

    // mark as current
    currentAudio = audio;

    // prepare UI duration if metadata already available
    const durEl = panel.querySelector(".duration");
    if (audio.duration && !isNaN(audio.duration) && durEl) {
        durEl.textContent = formatTime(audio.duration);
    }

    // mute trick for autoplay compatibility
    audio.muted = true;

    // play
    audio.play().then(() => {
        // mark one-time-play
        audio.dataset.played = "yes";

        // unmute shortly after play to avoid autoplay block in some browsers
        setTimeout(() => { try { audio.muted = false; } catch(e){} }, 150);

        // update status UI by starting timer per-second
        startPanelTimer(audio, panel);

        // make sure ended handler resets UI/timer
        audio.onended = () => {
            // clear timer
            if (currentTimerId) {
                clearInterval(currentTimerId);
                currentTimerId = null;
            }
            // finalize progress UI
            const visualProg = panel.querySelector(".seekbar-progress");
            if (visualProg) visualProg.style.width = "100%";
            const cur = panel.querySelector(".current");
            const dur = panel.querySelector(".duration");
            if (cur) cur.textContent = formatTime(audio.duration || 0);
            if (dur) dur.textContent = formatTime(audio.duration || 0);

            // mark played and unset currentAudio
            audio.dataset.played = "yes";
            currentAudio = null;
        };

    }).catch(err => {
        // autoplay blocked — you may need user confirmation (modal)
        console.warn("Autoplay blocked:", err);
        // cleanup currentAudio reference if failed
        currentAudio = null;
    });

    // prevent seeking by user (just in case)
    audio.addEventListener("seeking", function() {
        this.currentTime = this._lastTime || 0;
    });
    audio.addEventListener("timeupdate", function() {
        this._lastTime = this.currentTime;
    });
}

/* ========== Tab switching logic (compatible with your x-tab / x-panel) ========== */
document.querySelectorAll(".x-tab").forEach(tab => {
    tab.addEventListener("click", () => {
        // activate tab classes
        document.querySelectorAll(".x-tab").forEach(t => t.classList.remove("is-active"));
        tab.classList.add("is-active");

        // show corresponding panel
        const id = tab.dataset.id;
        const panelId = `panel-${id}`;
        document.querySelectorAll(".x-panel").forEach(p => p.classList.remove("active", "is-open"));
        const targetPanel = document.getElementById(panelId);
        if (!targetPanel) return;
        targetPanel.classList.add("active", "is-open");

        // STOP any currently playing audio when switching to a different panel
        // (this ensures audio always stops)
        if (currentAudio && currentAudio.closest(".x-panel") !== targetPanel) {
            stopCurrentAudio();
        }

        // play audio on the newly opened panel (if it has one and not played yet)
        const audio = targetPanel.querySelector("audio");
        if (audio && audio.dataset.played !== "yes") {
            playPanelAudio(targetPanel);
        }
    });
});

/* ========== Initial modal confirm & autoplay first panel ========== */
const modal = document.getElementById("confirmModal");
const confirmBtn = document.getElementById("confirmYes");

if (modal && confirmBtn) {
    // show modal on load
    window.addEventListener("load", () => {
        modal.style.display = "flex";
    });
    confirmBtn.addEventListener("click", () => {
        modal.style.display = "none";
        // play currently active panel
        const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
        if (firstPanel) playPanelAudio(firstPanel);
    });
} else {
    // if no modal, autoplay first panel immediately (with mute trick)
    window.addEventListener("load", () => {
        const firstPanel = document.querySelector(".x-panel.active") || document.querySelector(".x-panel");
        if (firstPanel) playPanelAudio(firstPanel);
    });
}
</script>


</body>
</html>
