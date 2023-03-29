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

    
    
</head>
<body id="page-top">
    <div id="app">
        
        @yield('content')  

    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>


    <!-- Cookies component https://cookie-script.com/es/ -->
    {{-- CAT --}}
    {{-- <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/d02d0ed95868d190143820c514c08bbc.js"></script> --}}
    {{-- ES --}}
    {{-- <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/44c211e6244e57f914141ca984d442a5.js"></script> --}}


    
</body>
</html>
