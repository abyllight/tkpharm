@extends('layouts.admin')
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Редактировать историю</h4>

        <form method="POST" action="/admin/histories/{{$history->id}}">
            @csrf
            @method('PATCH')

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
                        value="{{ $history->year }}"
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
                        value="{{ $history->getTitleRu() }}"
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
                        value="{{ $history->getTitleKz() }}">
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
                            value="{{ $history->getTitleEn() }}">
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
                        >{{ $history->getDescriptionRu() }}</textarea>
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
                    >{{ $history->getDescriptionKz() }}</textarea>
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
                    >{{ $history->getDescriptionEn() }}</textarea>
                    @error('description_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

                <!--Visible-->
                <div class="mb-6">
                    <div>
                        <label class="inline-flex items-center">
                            <input
                                name="is_visible"
                                @if($history->is_visible) checked @endif
                                class="text-indigo-500 w-5 h-5 mr-2 focus:ring-indigo-400 focus:ring-opacity-25 border border-gray-300 rounded"
                                type="checkbox"
                            />
                            Показывать на главной странице
                        </label>
                    </div>
                </div>

            <div>
                <button class="bg-blue-500 rounded px-6 py-3 shadow text-white hover:bg-blue-400" type="submit">
                    Сохранить
                </button>
            </div>
        </form>

        <div class="flex gap-8 items-center mt-8">
            <form method="post" action="/admin/histories/{{$history->id}}">
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
