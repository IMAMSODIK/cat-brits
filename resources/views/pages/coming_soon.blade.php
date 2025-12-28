<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Riho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Riho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('dashboard_assets/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('dashboard_assets/assets/images/favicon.png')}}" type="image/x-icon">
    <title>Yanks and Brits - CAT</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/font-awesome.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/vendors/icofont.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/vendors/themify.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/vendors/flag-icon.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/vendors/feather-icon.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/vendors/bootstrap.css')}}">
    
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('dashboard_assets/assets/css/color-1.css')}}" media="screen">
    
    <link rel="stylesheet" type="text/css" href="{{asset('dashboard_assets/assets/css/responsive.css')}}">

    <style>
        .logo-box {
            background-color: #0d6efd; /* biru (Bootstrap primary) */
            padding: 12px 18px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .logo-box img {
            height: 200px; /* sesuaikan */
        }

    </style>
</head>

<body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="container-fluid p-0">
            <div class="comingsoon auth-bg-video">
                <video class="bgvideo-comingsoon" id="bgvid" playsinline="" autoplay=""
                    muted="" loop="">
                    <source src="{{('dashboard_assets/assets/video/auth-bg.mp4')}}" type="video/mp4">
                </video>
                <div class="comingsoon-inner text-center">
                    <div class="logo-box">
                        <img src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="Logo">
                    </div>

                    <h5>WE ARE COMING SOON</h5>
                    <a href="{{ url()->previous() }}" class="btn btn-outline-primary btn-lg">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        Back
                    </a>
                    {{-- <div class="countdown" id="clock-arrival" data-hours="1" data-minutes="2" data-seconds="3">
                        <ul>
                            <li><span class="days time"></span><span class="title">days</span></li>
                            <li><span class="hours time"></span><span class="title">Hours</span></li>
                            <li><span class="minutes time"></span><span class="title">Minutes</span></li>
                            <li><span class="seconds time"></span><span class="title">Seconds</span></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('dashboard_assets/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/config.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/countdown.js')}}"></script>
    <script src="{{asset('dashboard_assets/assets/js/script.js')}}"></script>
</body>

</html>
