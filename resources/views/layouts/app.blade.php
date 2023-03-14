<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link href="{{ asset('img/web/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/web/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    {{-- <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" /> --}}
    <link href="{{ asset('css/admin/fontawesome-free/all.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/web/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/web/ionicons/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/web/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/web/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/web/style-red.css') }}" rel="stylesheet" />
</head>
<body id="page-top">
    <div id="app">
        
        @yield('content')  

    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('pluguins/js/jquery.min.js') }}"></script>
    {{-- <script src="{{ asset('js/web/jquery-migrate.min.js') }}"></script> --}}
    <script src="{{ asset('js/web/popper.min.js') }}"></script>
    <script src="{{ asset('js/web/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/web/easing.min.js') }}"></script>
    <script src="{{ asset('js/web/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/web/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/web/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/web/lightbox.min.js') }}"></script>
    <script src="{{ asset('js/web/typed.min.js') }}"></script>

    <!-- Template Main Javascript File -->
    <script src="{{ asset('js/web/main.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
