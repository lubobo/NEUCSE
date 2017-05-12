<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Font-Awesome/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>东北大学</title>



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app" >
        <section class="topWrap clearfix" style="background-color: #53a8eb;">
            <section class="mainWrap col-xs-6 col-xs-offset-1" style="background-color: #53a8eb;">
                <a class="logo" href="/" title="东北大学首页">
                    <img style="width: 220px;padding: 10px" src="source/pkulogo_white.png">
                </a>

            </section>
        </section>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
