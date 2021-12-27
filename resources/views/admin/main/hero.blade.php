@extends('layouts.admin')
@section('content')
    <div class="p-4 mx-auto border shadow rounded text-sm mb-10">
        <h4 class="text-lg font-semibold mb-8">Главная</h4>
        <form method="post" action="/admin/hero" enctype="multipart/form-data">
        @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div>
                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_ru"
                                name="title_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $hero['title_ru'] }}</textarea>
                            @error('title_ru')
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
                            <textarea
                                id="subtitle_ru"
                                name="subtitle_ru"
                                placeholder="Подзаголовок на русском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                               >{{ $hero['subtitle_ru'] }}</textarea>
                            @error('subtitle_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--KzTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_kz"
                                name="title_kz"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $hero['title_kz'] }}
                            </textarea>
                            @error('title_kz')
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
                            <textarea
                                id="subtitle_kz"
                                name="subtitle_kz"
                                rows="8"
                                placeholder="Подзаголовок на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $hero['subtitle_kz'] }}
                            </textarea>
                            @error('subtitle_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_en"
                                name="title_en"
                                rows="8"
                                placeholder="Название на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $hero['title_en'] }}</textarea>
                            @error('title_en')
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
                            <textarea
                                id="subtitle_en"
                                name="subtitle_en"
                                rows="8"
                                placeholder="Подзаголовок на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('subtitle_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $hero['subtitle_en'] }}
                            </textarea>
                            @error('subtitle_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>

            <img src="{{asset('storage/' .$hero['image'])}}" class="w-64">
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="image">
                        Фото
                    </label>
                </div>
                <div>
                    <input name="image" id="image" type="file">
                    @error('image')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow text-white">
                Сохранить
            </button>
        </form>
    </div>
@endsection
