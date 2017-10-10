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
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen" />
    @if(env('APP_DEBUG')==false)
        <link href="//{{ env('RESOURCE_PATH') }}{{ mix('css/app.css') }}" rel="stylesheet">
        @else
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @endif
    <link href="//{{ env('RESOURCE_PATH') }}/css/loading.css" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/iconfont/iconfont.css') }}">
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
    @if(env('APP_DEBUG')==false)
        <script src="//{{ env('RESOURCE_PATH') }}{{ mix('js/app.js') }}"></script>
        @else
        <script src="//{{ env('RESOURCE_PATH') }}{{ mix('js/app.js') }}"></script>
    @endif
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
