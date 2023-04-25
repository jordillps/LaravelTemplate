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
    {{-- <link rel="stylesheet" href="{{ asset('css/web/all.css') }}"> --}}
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap.min.css') }}">
    <!-- box-icon -->
    <link rel="stylesheet" href="{{ asset('css/web/boxicons.min.css') }}">
    <!-- bootstrap icon -->
    <link rel="stylesheet" href="{{ asset('css/web/bootstrap-icons.css') }}">
    <!-- jquery ui -->
    {{-- <link rel="stylesheet" href="{{ asset('css/web/jquery-ui.css') }}"> --}}
    <!-- swiper-slide -->
    <link rel="stylesheet" href="{{ asset('css/web/swiper-bundle.min.css') }}">
    <!-- slick-slide -->
    {{-- <link rel="stylesheet" href="{{ asset('css/web/slick-theme.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/web/slick.css') }}"> --}}
    <!-- select 2 -->
    {{-- <link rel="stylesheet" href="{{ asset('css/web/nice-select.css') }}"> --}}
    <!-- animate css -->
    {{-- <link rel="stylesheet" href="{{ asset('css/web/magnific-popup.css') }}"> --}}
    <!-- odometer css -->
    <link rel="stylesheet" href="{{ asset('css/web/odometer.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('css/web/style.css') }}">

    @stack('styles')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
        rel="dns-prefetch"
        src="https://www.googletagmanager.com/gtag/js?id=G-EPWXYKMD2W"
        ></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-EPWXYKMD2W");
        </script>

    <!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
        })(window, document, "script", "dataLayer", "GTM-WW8CBXL");
    </script>
    <!-- End Google Tag Manager -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe rel="dns-prefetch" src="https://www.googletagmanager.com/ns.html?id=GTM-WW8CBXL" height="0"
    width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <div id="app">
        @include('partials.preloader')

        @include('partials.navbar')
        
        @yield('content')
        
        @include('partials.footer')
    </div>

    {{-- <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a> --}}


    <!-- Cookies component https://cookie-script.com/es/ -->
    
    @if(app()->getLocale() == 'ca')
        <!-- CAT -->
        <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/d02d0ed95868d190143820c514c08bbc.js"></script>
        
    @else
        <!-- ES -->
        <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/44c211e6244e57f914141ca984d442a5.js"></script>
    @endif

    <!-- js file link -->
    <script src="{{ asset('js/web/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('js/web/jquery-ui.js') }}"></script> --}}
    <script src="{{ asset('js/web/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/web/wow.min.js') }}"></script>
    <script src="{{ asset('js/web/swiper-bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('js/web/slick.js') }}"></script> --}}
    <script src="{{ asset('js/web/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('js/web/odometer.min.js') }}"></script>
    <script src="{{ asset('js/web/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/web/viewport.jquery.js') }}"></script>
    <script src="{{ asset('js/web/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/web/main.js') }}"></script>

    @stack('scripts')
    
</body>
</html>
