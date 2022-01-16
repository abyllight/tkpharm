@extends('layouts.admin')
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Добавить историю</h4>

        <form method="post" action="/admin/histories">
            @csrf
            <!--Year-->
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-gray-500 font-medium" for="year">
                            Год
                        </label>
                    </div>

                    <div>
                        <input
                            id="year"
                            name="year"
                            type="text"
                            placeholder="Год"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            value="{{ old('year') }}"
                        >
                        @error('year')
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
                            value="{{ old('title_ru') }}"
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
                            value="{{ old('title_kz') }}">
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
                            value="{{ old('title_en') }}">
                        @error('title_en')
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
                        >{{ old('description_ru') }}</textarea>
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
                    >{{ old('description_kz') }}</textarea>
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
                    >{{ old('description_en') }}</textarea>
                        @error('description_en')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <button class="bg-blue-500 rounded px-6 py-3 shadow text-white hover:bg-blue-400" type="submit">
                        Добавить
                    </button>
                </div>
        </form>
    </div>
@endsection
