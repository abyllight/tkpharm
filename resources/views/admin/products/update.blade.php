@extends('layouts.admin')
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Редактировать продукт</h4>

        <form method="POST" action="/admin/products/{{$product->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <!--Category-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="category">
                        Категория
                    </label>
                </div>

                <div>
                    <select
                        name="category"
                        class="w-full px-4 py-3 border rounded bg-gray-50 border-2 border-gray-200 focus:outline-none focus:bg-white focus:border-blue-400"
                    >
                        @foreach($categories as $category)
                            @if($product->product_category_id == $category->id)
                                <option value="{{$category->id}}" selected>
                                    {{$category->getTitleRu()}}
                                </option>
                            @else
                                <option value="{{$category->id}}">
                                    {{$category->getTitleRu()}}
                                </option>
                            @endif
                        @endforeach
                    </select>
                    @error('category')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--Link-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="link">
                        Ссылка
                    </label>
                </div>

                <div>
                    <input
                        id="link"
                        name="link"
                        type="text"
                        placeholder="http://"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('link') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->link }}"
                    >
                    @error('link')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

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
                        value="{{ $product->getTitleRu() }}"
                    >
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
                        value="{{ $product->getTitleKz() }}">
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
                        value="{{ $product->getTitleEn() }}">
                    @error('title_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--RuSubtitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="subtitle_ru">
                        Подзаголовок на русском
                    </label>
                </div>

                <div>
                    <input
                        id="subtitle_ru"
                        name="subtitle_ru"
                        placeholder="на русском"
                        type="text"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getSubtitleRu() }}">
                    @error('subtitle_ru')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--KzSubtitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="subtitle_kz">
                        Подзаголовок на казахском
                    </label>
                </div>

                <div>
                    <input
                        id="subtitle_kz"
                        name="subtitle_kz"
                        type="text"
                        placeholder="Подзаголовок на казахском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getSubtitleKz() }}">
                    @error('subtitle_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--EnSubtitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="subtitle_en">
                        Подзаголовок на английском
                    </label>
                </div>

                <div>
                    <input
                        id="subtitle_en"
                        name="subtitle_en"
                        type="text"
                        placeholder="Подзаголовок на английском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getSubtitleEn() }}">
                    @error('subtitle_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--Amount Ru-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="amount_ru">
                        Количество на русском
                    </label>
                </div>

                <div>
                    <input
                        id="amount_ru"
                        name="amount_ru"
                        type="text"
                        placeholder="100 гр"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('amount_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getAmountRu() }}"
                    >
                    @error('amount_ru')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--Amount Kz-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="amount_kz">
                        Количество на казахском
                    </label>
                </div>

                <div>
                    <input
                        id="amount_kz"
                        name="amount_kz"
                        type="text"
                        placeholder="100 гр"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('amount_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getAmountKz() }}"
                    >
                    @error('amount_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--Amount En-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="amount_en">
                        Количество на английском
                    </label>
                </div>

                <div>
                    <input
                        id="amount_en"
                        name="amount_en"
                        type="text"
                        placeholder="100 gr"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('amount_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $product->getAmountEn() }}"
                    >
                    @error('amount_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--RuDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_ru">
                        Description на русском
                    </label>
                </div>
                <div>
                        <textarea
                            id="description_ru"
                            rows="10"
                            name="description_ru"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_ru') border-red-500 @enderror rounded w-full p-2 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        >{{ $product->getDescriptionRu() }}</textarea>
                    @error('description_ru')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--KzDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_kz">
                        Description на казахском
                    </label>
                </div>
                <div>
                    <textarea
                        id="description_kz"
                        rows="10"
                        name="description_kz"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_kz') border-red-500 @enderror rounded w-full p-2 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                    >{{ $product->getDescriptionKz() }}</textarea>
                    @error('description_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--EnDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_en">
                        Description на английском
                    </label>
                </div>
                <div>
                    <textarea
                        id="description_en"
                        rows="10"
                        name="description_en"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_en') border-red-500 @enderror rounded w-full p-2 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                    >{{ $product->getDescriptionEn() }}</textarea>
                    @error('description_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <img src="{{ asset('storage/' .$product->image) }}" class="w-32">
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="image">
                        Фото
                    </label>
                </div>
                <div>
                    <input name="image" id="image" type="file" value="{{ asset('storage/' . $product->image) }}">
                    @error('image')
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
            <form method="post" action="/admin/products/status/{{$product->id}}">
                @csrf
                <div>
                    <button class="@if($product->is_active)bg-yellow-500 hover:bg-yellow-400 @else() bg-green-500 hover:bg-green-400 @endif() rounded px-6 py-3 shadow text-white" type="submit">
                        {{$product->is_active ? 'Деактивировать' : 'Активировать'}}
                    </button>
                </div>
            </form>

            <form method="post" action="/admin/products/{{$product->id}}">
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
