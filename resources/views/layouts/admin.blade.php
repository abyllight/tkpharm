<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>TKPHARM Admin Panel</title>
    @section('js_head')
    @show
</head>
<body class="font-body relative">
    <nav class="absolute top-0 left-0 w-full z-10 bg-black text-white">
        <div class="max-w-8xl p-4 mx-auto flex items-center justify-between">
            <div class="flex items-center gap-10">
                @auth()
                <div class="flex gap-4">
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin">Главная</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/histories">История</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/products">Продукты</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/product-categories">Категория</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/news">Новости</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/gallery">Галерея</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/certificates">Сертификаты</a>
                    <a class="cursor-pointer text-gray-300 hover:text-gray-100" href="/admin/messages">Сообщения</a>
                </div>
                @endauth
            </div>
            <div class="flex gap-4 items-center">
                @auth()
                <p class="font-semibold uppercase">{{Auth::user() ? Auth::user()->name : 'TKPHARM'}}</p>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="px-6 py-2 bg-red-500 text-sm rounded hover:bg-red-400">Выйти</button>
                </form>
                @endauth
            </div>
        </div>
    </nav>
    <div class="max-w-8xl mx-auto px-4 py-28">
        @yield('content')
    </div>
    @section('js_body')
    @show
</body>
</html>
