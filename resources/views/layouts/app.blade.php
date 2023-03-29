<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('seo')
    
    <link rel="alternate" hreflang="ca" href="https://laraveltest.dev">
    <link rel="alternate" hreflang="es" href="https://laraveltest.dev">
    <link rel="alternate" hreflang="en" href="https://laraveltest.dev">

    <!-- Favicons -->
    <link href="{{ asset('img/logoformalweb.ico') }}" rel="icon" />
    <link href="{{ asset('img/web/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- TEMPLATE CSS -->
    <link rel="stylesheet" href="{{ asset('css/web/animate.css') }}">
    <!-- css file link -->
    <link rel="stylesheet" href="{{ asset('css/web/all.css') }}">
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap.min.css') }}">
    <!-- box-icon -->
    <link rel="stylesheet" href="{{ asset('css/web/boxicons.min.css') }}">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap-icons.css') }}">
    <!-- jquery ui -->
    <link rel="stylesheet" href="{{ asset('css/web/jquery-ui.css') }}">
    <!-- swiper-slide -->
    <link rel="stylesheet" href="{{ asset('css/web/swiper-bundle.min.css') }}">
    <!-- slick-slide -->
    <link rel="stylesheet" href="{{ asset('css/web/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/web/slick.css') }}">
    <!-- select 2 -->
    <link rel="stylesheet" href="{{ asset('css/web/nice-select.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('css/web/magnific-popup.css') }}">
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('css/web/odometer.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">

    
    
</head>
<body id="page-top">
    <div id="app">
        @include('partials.preloader')

        @include('partials.navbar')
        
        @yield('content')
        
        @include('partials.footer')
    </div>

    {{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}


    <!-- Cookies component https://cookie-script.com/es/ -->
    {{-- CAT --}}
    {{-- <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/d02d0ed95868d190143820c514c08bbc.js"></script> --}}
    {{-- ES --}}
    {{-- <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/44c211e6244e57f914141ca984d442a5.js"></script> --}}

    <!-- js file link -->
    <script src="{{ asset('js/web/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/web/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/web/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/web/wow.min.js') }}"></script>
    <script src="{{ asset('js/web/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/web/slick.js') }}"></script>
    <script src="{{ asset('js/web/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/web/odometer.min.js') }}"></script>
    <script src="{{ asset('js/web/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/web/viewport.jquery.js') }}"></script>
    <script src="{{ asset('js/web/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/web/main.js') }}"></script>
    
</body>
</html>
