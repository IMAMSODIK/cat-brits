<!DOCTYPE html>
<html lang="en">

@include('layouts.head')

<body>
    <!-- loader starts-->
    <div class="loader-wrapper">
        <div class="loader">
            <div class="loader4"></div>
        </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        
        @include('layouts.header')

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            
            @include('layouts.sidebar')

            <div class="page-body">
                @yield('content')
            </div>

            @include('layouts.footer')
        </div>
    </div>
    
    @include('layouts.script')

</body>

</html>
