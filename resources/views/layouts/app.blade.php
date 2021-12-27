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
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Hide scrollbar for IE, Edge and Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE and Edge */
        scrollbar-width: none;  /* Firefox */
    }
</style>
<body class="font-body relative text-white overflow-y-scroll scroll-s">
    <section id="navbar"></section>
    @yield('content')
    <section id="footer">
        <footer-section></footer-section>
    </section>
    <script src="{{mix('js/app.js')}}"></script>
    @section('js')
    @show
</body>
</html>
