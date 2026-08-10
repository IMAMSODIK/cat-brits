<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Speaking Test Scheduling</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/vendors/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('dashboard_assets/assets/css/responsive.css') }}">

    <style>
        .logo-box {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            background-color: #0d6efd;
            border-radius: 8px;
        }

        .logo-box img {
            height: 200px;
        }

        .notice-copy {
            max-width: 680px;
            margin: 0 auto 24px;
            color: #6c757d;
            line-height: 1.7;
        }

        .redirect-note {
            margin-top: 14px;
            color: #6c757d;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <div class="container-fluid p-0">
            <div class="comingsoon auth-bg-video">
                <video class="bgvideo-comingsoon" id="bgvid" playsinline autoplay muted loop>
                    <source src="{{ asset('dashboard_assets/assets/video/auth-bg.mp4') }}" type="video/mp4">
                </video>

                <div class="comingsoon-inner text-center">
                    <div class="logo-box">
                        <img src="{{ asset('dashboard_assets/assets/images/logo/logo.png') }}" alt="Logo">
                    </div>

                    <h5>Speaking Test Scheduling</h5>
                    <p class="notice-copy">
                        Speaking mock tests are scheduled with a teacher. Please contact your assigned teacher to
                        arrange a suitable test time. Once your session has been scheduled, you will be able to access
                        the test here.
                    </p>
                    <a href="{{ $redirectUrl }}" class="btn btn-outline-primary btn-lg" id="categoriesLink">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        Return to IELTS Categories
                    </a>
                    <div class="redirect-note">
                        Redirecting to IELTS categories in <span id="countdown">5</span> seconds...
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('dashboard_assets/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/config.js') }}"></script>
    <script src="{{ asset('dashboard_assets/assets/js/script.js') }}"></script>
    <script>
        (() => {
            const redirectUrl = @json($redirectUrl);
            const countdown = document.getElementById('countdown');
            let seconds = 5;

            const timer = window.setInterval(() => {
                seconds -= 1;
                countdown.textContent = seconds;

                if (seconds <= 0) {
                    window.clearInterval(timer);
                    window.location.href = redirectUrl;
                }
            }, 1000);
        })();
    </script>
</body>

</html>
