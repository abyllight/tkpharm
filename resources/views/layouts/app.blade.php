<!doctype html>
<html lang="ru" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>TKPHARM</title>
</head>
<style>
    .hide-scroll-bar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }
    .hide-scroll-bar::-webkit-scrollbar {
        display: none;
    }
</style>
<body class="font-body relative text-white">
    <section id="navbar"></section>
    @yield('content')
    <section id="footer"></section>
    <script src="{{mix('js/app.js')}}"></script>
    @section('js')
    @show
</body>
</html>
