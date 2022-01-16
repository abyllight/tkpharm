@extends('layouts.admin')
@section('content')
    <div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <a class="p-6 shadow text-center cursor-pointer" href="/admin/hero">
                Главная
            </a>
            <a class="p-6 shadow text-center cursor-pointer" href="/admin/company">
                О компании
            </a>
            <a class="p-6 shadow text-center cursor-pointer" href="/admin/partners">
                Партнеры
            </a>
        </div>
    </div>
@endsection
