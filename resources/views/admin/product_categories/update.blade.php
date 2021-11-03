@extends('layouts.admin')
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Редактировать категорию продукта</h4>

        <form method="POST" action="/admin/product-categories/{{$category->id}}">
            @csrf
            @method('PATCH')
            <!--RuTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_ru">
                        Название на русском
                    </label>
                </div>

                <div>
                    <input
                        id="title_ru"
                        name="title_ru"
                        type="text"
                        placeholder="Название на русском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $category->getTitleRu() }}">
                    @error('title_ru')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--KzTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_kz">
                        Название на казахском
                    </label>
                </div>

                <div>
                    <input
                        id="title_kz"
                        name="title_kz"
                        type="text"
                        placeholder="Название на русском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $category->getTitleKz() }}">
                    @error('title_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--EnTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_en">
                        Название на английском
                    </label>
                </div>

                <div>
                    <input
                        id="title_en"
                        name="title_en"
                        type="text"
                        placeholder="Название на английском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $category->getTitleEn() }}">
                    @error('title_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <button class="bg-blue-500 rounded px-6 py-3 shadow text-white hover:bg-blue-400" type="submit">
                    Сохранить
                </button>
            </div>
        </form>
        <div class="flex gap-8 items-center mt-8">
            <form method="post" action="/admin/product-categories/{{$category->id}}">
                @csrf
                @method('delete')
                <div>
                    <button class="bg-red-600 rounded px-6 py-3 shadow text-white hover:bg-red-500" type="submit">
                        Удалить
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
