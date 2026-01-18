<header class="app-header" role="banner">
    <div class="header-row" aria-label="Header CAT Bahasa Inggris">
        <div class="brand" onclick="location.href='/dashboard'" style="cursor: pointer;">
            <div class="logo" aria-hidden="true">
                <img class="" style="width: 70px;margin-left: 50px"
                    src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
            </div>
        </div>

        <div class="actions">
            <button id="infoBtn" class="btn btn-ghost icon-btn" aria-label="Informasi">
                <i class="fa-solid fa-circle-info"></i>
            </button>

            {{-- <div id="timer" class="timer" aria-live="polite" aria-label="Sisa waktu">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeText">00:00</span>
                </div> --}}

            <button onclick="confirmExit()" class="btn btn-danger">
                <i class="fa-solid fa-flag-checkered"></i>
                <span class="label">Close</span>
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
