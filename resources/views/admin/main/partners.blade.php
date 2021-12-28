@extends('layouts.admin')
@section('content')
    <div class="max-w-8xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg font-semibold mb-8">Партнеры</h4>
        <form method="post" action="/admin/partners" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div>
                    <!--Title1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_1">
                                Название ссылки
                            </label>
                        </div>

                        <div>
                            <input
                                id="title_1"
                                name="title_1"
                                value="{{ $partners['title_1'] }}"
                                placeholder="Название ссылки"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_1') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('title_1')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--Link1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="link_1">
                                Ссылка
                            </label>
                        </div>

                        <div>
                            <input
                                id="link_1"
                                name="link_1"
                                value="{{ $partners['link_1'] }}"
                                placeholder="Название ссылки"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('link_1') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('link_1')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_1_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_1_ru"
                                name="action_1_ru"
                                value="{{ $partners['action_1_ru'] }}"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_1_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_1_kz"
                                name="action_1_kz"
                                value="{{ $partners['action_1_kz'] }}"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--ENAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_1_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_1_en"
                                name="action_1_en"
                                value="{{ $partners['action_1_en'] }}"
                                placeholder="Описание на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--Title1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_2">
                                Название ссылки
                            </label>
                        </div>

                        <div>
                            <input
                                id="title_2"
                                name="title_2"
                                value="{{ $partners['title_2'] }}"
                                placeholder="Название ссылки"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('title_2')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--Link1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="link_2">
                                Ссылка
                            </label>
                        </div>

                        <div>
                            <input
                                id="link_2"
                                name="link_2"
                                value="{{ $partners['link_2'] }}"
                                placeholder="Название ссылки"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('link_2') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('link_2')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_2_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_2_ru"
                                name="action_2_ru"
                                value="{{ $partners['action_2_ru'] }}"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_2_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_2_kz"
                                name="action_2_kz"
                                value="{{ $partners['action_2_kz'] }}"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--ENAction-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="action_2_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <input
                                id="action_2_en"
                                name="action_2_en"
                                value="{{ $partners['action_2_en'] }}"
                                placeholder="Описание на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('action_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >
                            @error('action_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <img src="{{asset('storage/' .$partners['image'])}}" class="w-64">
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
