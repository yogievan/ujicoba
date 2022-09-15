<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Default Title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/images/favicon.png">
    <link href="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <div id="main-wrapper">
        @include('nav.profile')
        @include('nav.header')
        @include('nav.slidebar')
        {{-- @include('nav.example_content') --}}
        @include('nav.footer')
    </div>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/global/global.min.js"></script>
    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/js/quixnav-init.js"></script>
    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/js/custom.min.js"></script>

    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/chartist/js/chartist.min.js"></script>

    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/moment/moment.min.js"></script>
    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/vendor/pg-calendar/js/pignose.calendar.min.js"></script>

    <script src="file:///C:/applications/RPL/RPL_PemesananShuttleBus/asset/js/dashboard/dashboard-2.js"></script>
    <!-- Circle progress -->

</body>

</html>