<div class="sidebar-wrapper" data-layout="stroke-svg">
    <div class="logo-wrapper">
        <a href="index.html">
            <img class="img-fluid" style="width: 85px; margin-top: -20px"
                src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="">
        </a>
        <div class="back-btn"><i class="fa fa-angle-left"> </i></div>
        <div class="toggle-sidebar">
            <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
        </div>
    </div>

    <div class="logo-icon-wrapper">
        <a href="index.html">
            <img class="img-fluid" src="{{ asset('dashboard_assets/assets/images/logo/logo-icon.png') }}"
                alt="">
        </a>
    </div>
    <nav class="sidebar-main">
        <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
        <div id="sidebar-menu">
            <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.html"><img class="img-fluid"
                            src="{{ asset('dashboard_assets/assets/images/logo/logo-icon.png') }}" alt=""></a>
                    <div class="mobile-back text-end"> <span>Back </span><i class="fa fa-angle-right ps-2"
                            aria-hidden="true"></i></div>
                </li>
                <li class="pin-title sidebar-main-title">
                    <div>
                        <h6>Pinned</h6>
                    </div>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-1">General</h6>
                    </div>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"> </i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#fill-home') }}"></use>
                        </svg><span class="lan-3">Dashboard </span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="index.html">Default</a></li>
                        <li><a href="dashboard-02.html">Ecommerce</a></li>
                        <li><a href="dashboard-03.html">Project</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="">Data</h6>
                    </div>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="/teacher">
                        <i class="fa fa-users text-white"></i>
                        <span>Teachers</span>
                    </a>
                </li>
                <li class="sidebar-list">
                    <i class="fa fa-thumb-tack"></i>
                    <a class="sidebar-link sidebar-title link-nav" href="/student">
                        <i class="fa fa-users text-white"></i>
                        <span>Students</span>
                    </a>
                </li>
            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
