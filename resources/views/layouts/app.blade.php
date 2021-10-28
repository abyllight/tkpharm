<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>TKPHARM</title>
</head>
<body class="font-body relative text-white">
    <div id="navbar"></div>
    @yield('content')
    <footer id="footer">
        <footer-section></footer-section>
    </footer>
    <script src="{{mix('js/app.js')}}"></script>
    <script>
        @section('js')
        @show
    </script>
</body>
</html>
