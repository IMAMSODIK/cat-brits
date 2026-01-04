<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">
{{-- <link rel="shortcut icon" href="{{ asset('landing_assets/images/logo/edit-favicon.png') }}" type="image/x-icon"> --}}
<title>CAT | {{ $pageTitle }}</title>
<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/font-awesome.css') }}">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/icofont.css') }}">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/themify.css') }}">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/flag-icon.css') }}">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/feather-icon.css') }}">
<!-- Plugins css start-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/slick.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/slick-theme.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/scrollbar.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/quill.snow.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/quill.bubble.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/animate.css') }}">
<!-- Range slider css-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/rangeslider/rSlider.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/prism.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/fullcalender.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/datatables.css') }}">
<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/bootstrap.css') }}">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
<link id="color" media="screen" rel="stylesheet" href="{{ asset('dashboard_assets/assets/css/color-1.css') }}">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/responsive.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/scrollable.css') }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
    crossorigin="" />

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">

<style>
    body, p, h1, h2, h3, h4, h5, h6, a, button, input, textarea, span, div {
        font-family: "Quicksand", sans-serif;
    }

    .customizer-links{
        display: none;
    }

    .search-highlight {
        background-color: yellow;
        color: black;
    }

</style>


@yield('own_style')