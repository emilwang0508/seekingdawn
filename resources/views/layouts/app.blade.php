<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>SeekingDawn</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loading.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
</head>
<body>
    <div class="loading" id="appLoad">
        <div class="loading-animate">
            <div class="solar">
                <i class="mercury"></i>
                <i class="venus"></i>
                <i class="earth"></i>
                <i class="mars"></i>
                <i class="belt"></i>
                <i class="jupiter"></i>
                <i class="saturn"></i>
                <i class="uranus"></i>
                <i class="neptune"></i>
            </div>
        </div>
        <p class="title">Seeking Dawn
           {{-- <i class="ball-beat">
                <i></i>
                <i></i>
                <i></i>
            </i>--}}
        </p>
    </div>
    <div id="app">
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/fonts/iconfont/iconfont.js"></script>
    <script>
        window.onload=function(){
            var load = document.getElementById('appLoad');
            setTimeout(function() {
                load.style.display = "none";
            }, 1000)

        }
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-106343828-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>
