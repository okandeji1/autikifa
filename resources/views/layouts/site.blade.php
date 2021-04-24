<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]> <html class="no-js"> <![endif]-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content=" width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}" />
    <title>Autikifa</title>
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/swiper.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144098545-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-144098545-1');

    </script>
</head>

<body>
    <!-- Page Preloader -->
    <div id="Lfa-page-loading" class="pozo-pageloading">
        <div class="pozo-pageloading-inner"> <img src="images/logo.png" class="logo" alt=""> </div>
    </div>
    <div id="pozo-page-wrapper">
        <!-- Lines -->
        <div class="content-lines-wrapper">
            <div class="content-lines-inner">
                <div class="content-lines"></div>
            </div>
        </div>
        <!-- Header -->
        @include('partials.site.header')
        <!-- Content -->
        @yield('content')
        <!-- Footer -->
        @include('partials.site.footer')
    </div>
    <!-- Js -->
    <script src="{{ asset('js/plugins/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/plugins/swiper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
