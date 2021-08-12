<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Уборка Люкс</title>
        <link href="{{ asset('images/favicon.ico') }}" rel="icon">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/tooltipster.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/cubeportfolio.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/revolution/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('css/revolution/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"> {{-- Minify this style.css --}}
        
        <style>
            .left-50 {
                left: 50% !important;
            }
        </style>
    </head>

    <body>
        {{-- PreLoader --}}
        <div class="loader">
            <div class="loader-inner">
                <div class="cssload-loader"></div>
            </div>
        </div>

        {{-- Header --}}
        @include('layouts._header')

        {{-- Main Content --}}
        @yield('main')

        {{-- Footer --}}
        @include('layouts._footer')

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
        <!--Bootstrap Core-->
        <script src="{{ asset('js/propper.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!--to view items on reach-->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <!--Owl Slider-->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!--number counters-->
        <script src="{{ asset('js/jquery-countTo.js') }}"></script>
        <!--Parallax Background-->
        <script src="{{ asset('js/parallaxie.js') }}"></script>
        <!--Cubefolio Gallery-->
        <script src="{{ asset('js/jquery.cubeportfolio.min.js') }}"></script>
        <!--Fancybox js-->
        <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
        <!--tooltip js-->
        <script src="{{ asset('js/tooltipster.min.js') }}"></script>
        <!--wow js-->
        <script src="{{ asset('js/wow.js') }}"></script>
        <!--Revolution SLider-->
        <script src="{{ asset('js/revolution/jquery.themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('js/revolution/jquery.themepunch.revolution.min.js') }}"></script>
        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
        <script src="{{ asset('js/revolution/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('js/revolution/extensions/revolution.extension.video.min.js') }}"></script>
        <!--custom functions and script-->
        <script src="{{ asset('js/functions.js') }}"></script>
    </body>
</html>
