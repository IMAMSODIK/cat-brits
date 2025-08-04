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
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#fill-widget') }}"></use>
                        </svg><span class="lan-6">Widgets</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="general-widget.html">General</a></li>
                        <li><a href="chart-widget.html">Chart</a></li>
                    </ul>
                </li>
                <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#fill-layout') }}"></use>
                        </svg><span class="lan-7">Page layout</span></a>
                    <ul class="sidebar-submenu">
                        <li><a href="box-layout.html">Boxed</a></li>
                        <li><a href="layout-rtl.html">RTL</a></li>
                        <li><a href="layout-dark.html">Dark Layout</a></li>
                        <li> <a href="hide-on-scroll.html">Hide Nav Scroll</a></li>
                    </ul>
                </li>
                <li class="sidebar-main-title">
                    <div>
                        <h6 class="lan-8">Data</h6>
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





                
                {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title link-nav"
                        href="kanban.html">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#fill-board') }}"></use>
                        </svg><span>kanban Board</span></a></li> --}}
                {{-- <li class="sidebar-list"><i class="fa fa-thumb-tack"></i><a class="sidebar-link sidebar-title"
                        href="#">
                        <svg class="stroke-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#stroke-ecommerce') }}">
                            </use>
                        </svg>
                        <svg class="fill-icon">
                            <use href="{{ asset('dashboard_assets/assets/svg/icon-sprite.svg#fill-ecommerce') }}">
                            </use>
                        </svg><span>Ecommerce</span></a>
                    <ul class="sidebar-submenu">
                        <li> <a href="add-products.html">Add Products</a></li>
                        <li><a href="product.html">Product</a></li>
                        <li><a href="category.html">Category page</a></li>
                        <li><a href="product-page.html">Product page</a></li>
                        <li><a href="list-products.html">Product list</a></li>
                        <li><a href="payment-details.html">Payment Details</a></li>
                        <li><a href="order-history.html">Order History</a></li>
                        <li><a class="submenu-title" href="#">Invoices<span class="sub-arrow"><i
                                        class="fa fa-angle-right"></i></span></a>
                            <ul class="nav-sub-childmenu submenu-content">
                                <li><a href="invoice-1.html">Invoice-1</a></li>
                                <li><a href="invoice-2.html">Invoice-2</a></li>
                                <li><a href="invoice-3.html">Invoice-3</a></li>
                                <li><a href="invoice-4.html">Invoice-4</a></li>
                                <li><a href="invoice-5.html">Invoice-5</a></li>
                                <li><a href="invoice-template.html">Invoice-6</a></li>
                            </ul>
                        </li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="list-wish.html">Wishlist</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="pricing.html">Pricing </a></li>
                    </ul>
                </li> --}}
            </ul>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</div>
