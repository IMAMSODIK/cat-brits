<header class="app-header" role="banner">
    <div class="header-row" aria-label="Header CAT Bahasa Inggris">
        <div class="brand">
            <div class="logo" aria-hidden="true">LOGO</div>
            <div class="title-wrap">
                <div class="app-title">CAT Bahasa Inggris</div>
                <div class="app-subtitle">Latihan soal adaptif</div>
            </div>
        </div>

        <div class="actions">
            <button id="infoBtn" class="btn btn-ghost icon-btn" aria-label="Informasi">
                <i class="fa-solid fa-circle-info"></i>
            </button>

            @if ($section == 'listening')
                <div class="ap-vol-buttons">
                    <button class="ap-btn ap-vol-down" type="button" aria-label="Volume down">-</button>
                    <input class="ap-volume" type="range" min="0" max="1" step="0.01" value="1" aria-label="Volume control"/>
                    <button class="ap-btn ap-vol-up" type="button" aria-label="Volume up">+</button>
                </div>    
            @endif

            <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu">
                <i class="fa-regular fa-clock"></i>
                <span id="timeText">00:00</span>
            </div>

            <button id="doneBtn" class="btn btn-danger">
                <i class="fa-solid fa-flag-checkered"></i>
                <span class="label">Selesai</span>
            </button>
        </div>
    </div>
</header>

<section class="session-info" aria-label="Keterangan Sesi">
    <div class="session-grid">
        <div class="kv">
            <div class="k">Set Information</div>
            <div class="v" id="siName">{{ $set->name }} - {{ ucfirst($section) }}</div>
        </div>
        <div class="kv right">
            <div class="k">User</div>
            <div class="v" id="siUser">{{ auth()->user()->name }}</div>
        </div>
    </div>
</section>
