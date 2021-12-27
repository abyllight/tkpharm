@extends('layouts.admin')
@section('content')
    <div class="p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg font-semibold mb-8">История</h4>
        <form method="post" action="/admin/history">
            @csrf
            {{--#1--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_1_ru">
                                Год #1
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_1_ru"
                                name="year_1_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_1_ru'] }}"
                            >
                            @error('year_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_1_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_1_ru"
                                name="title_1_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_1_ru'] }}</textarea>
                            @error('title_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_1_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_1_ru"
                                name="desc_1_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_1_ru'] }}</textarea>
                            @error('desc_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_1_kz">
                                Год #1
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_1_kz"
                                name="year_1_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_1_kz'] }}"
                            >
                            @error('year_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_1_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_1_kz"
                                name="title_1_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_1_kz'] }}</textarea>
                            @error('title_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_1_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_1_kz"
                                name="desc_1_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_1_kz'] }}</textarea>
                            @error('desc_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_1_en">
                                Год #1
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_1_en"
                                name="year_1_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_1_en'] }}"
                            >
                            @error('year_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_1_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_1_en"
                                name="title_1_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_1_en'] }}</textarea>
                            @error('title_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_1_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_1_en"
                                name="desc_1_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_1_en'] }}</textarea>
                            @error('desc_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#0--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_0_ru">
                                Год
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_0_ru"
                                name="year_0_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_0_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_0_ru'] }}"
                            >
                            @error('year_0_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_0_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_0_ru"
                                name="title_0_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_0_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_0_ru'] }}</textarea>
                            @error('title_0_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_0_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_0_ru"
                                name="desc_0_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_0_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_0_ru'] }}</textarea>
                            @error('desc_0_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_0_kz">
                                Год
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_0_kz"
                                name="year_0_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_0_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_0_kz'] }}"
                            >
                            @error('year_0_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_0_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_0_kz"
                                name="title_0_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_0_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_0_kz'] }}</textarea>
                            @error('title_0_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_0_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_0_kz"
                                name="desc_0_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_0_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_0_kz'] }}</textarea>
                            @error('desc_0_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_0_en">
                                Год
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_0_en"
                                name="year_0_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_0_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_0_en'] }}"
                            >
                            @error('year_0_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_0_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_0_en"
                                name="title_0_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_0_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_0_en'] }}</textarea>
                            @error('title_0_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_0_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_0_en"
                                name="desc_0_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_0_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_0_en'] }}</textarea>
                            @error('desc_0_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#2--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_2_ru">
                                Год #2
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_2_ru"
                                name="year_2_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_2_ru'] }}"
                            >
                            @error('year_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_2_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_2_ru"
                                name="title_2_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_2_ru'] }}</textarea>
                            @error('title_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_2_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_2_ru"
                                name="desc_2_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_2_ru'] }}</textarea>
                            @error('desc_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_2_kz">
                                Год #2
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_2_kz"
                                name="year_2_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_2_kz'] }}"
                            >
                            @error('year_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_2_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_2_kz"
                                name="title_2_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_2_kz'] }}</textarea>
                            @error('title_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_2_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_2_kz"
                                name="desc_2_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_2_kz'] }}</textarea>
                            @error('desc_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_2_en">
                                Год #2
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_2_en"
                                name="year_2_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_2_en'] }}"
                            >
                            @error('year_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_2_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_2_en"
                                name="title_2_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_2_en'] }}</textarea>
                            @error('title_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_2_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_2_en"
                                name="desc_2_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_2_en'] }}</textarea>
                            @error('desc_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#3--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_3_ru">
                                Год #3
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_3_ru"
                                name="year_3_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_3_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_3_ru'] }}"
                            >
                            @error('year_3_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_3_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_3_ru"
                                name="title_3_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_3_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_3_ru'] }}</textarea>
                            @error('title_3_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_3_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_3_ru"
                                name="desc_3_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_3_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_3_ru'] }}</textarea>
                            @error('desc_3_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_3_kz">
                                Год #3
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_3_kz"
                                name="year_3_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_3_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_3_kz'] }}"
                            >
                            @error('year_3_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_3_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_3_kz"
                                name="title_3_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_3_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_3_kz'] }}</textarea>
                            @error('title_3_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_3_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_3_kz"
                                name="desc_3_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_3_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_3_kz'] }}</textarea>
                            @error('desc_3_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_3_en">
                                Год #3
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_3_en"
                                name="year_3_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_3_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_3_en'] }}"
                            >
                            @error('year_3_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_3_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_3_en"
                                name="title_3_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_3_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_3_en'] }}</textarea>
                            @error('title_3_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_3_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_3_en"
                                name="desc_3_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_3_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_3_en'] }}</textarea>
                            @error('desc_3_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#4--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_4_ru">
                                Год #4
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_4_ru"
                                name="year_4_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_4_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_4_ru'] }}"
                            >
                            @error('year_4_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_4_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_4_ru"
                                name="title_4_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_4_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_4_ru'] }}</textarea>
                            @error('title_4_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_4_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_4_ru"
                                name="desc_4_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_4_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_4_ru'] }}</textarea>
                            @error('desc_4_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_4_kz">
                                Год #4
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_4_kz"
                                name="year_4_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_4_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_4_kz'] }}"
                            >
                            @error('year_4_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_4_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_4_ru"
                                name="title_4_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_4_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_4_kz'] }}</textarea>
                            @error('title_4_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_4_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_4_kz"
                                name="desc_4_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_4_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_4_kz'] }}</textarea>
                            @error('desc_4_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_4_en">
                                Год #4
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_4_en"
                                name="year_4_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_4_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_4_en'] }}"
                            >
                            @error('year_4_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_4_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_4_en"
                                name="title_4_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_4_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_4_en'] }}</textarea>
                            @error('title_4_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_4_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_4_en"
                                name="desc_4_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_4_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_4_en'] }}</textarea>
                            @error('desc_4_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#5--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_5_ru">
                                Год #5
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_5_ru"
                                name="year_5_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_5_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_5_ru'] }}"
                            >
                            @error('year_5_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_5_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_5_ru"
                                name="title_5_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_5_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_5_ru'] }}</textarea>
                            @error('title_5_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_5_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_5_ru"
                                name="desc_5_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_5_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_5_ru'] }}</textarea>
                            @error('desc_5_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_5_kz">
                                Год #5
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_5_kz"
                                name="year_5_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_5_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_5_kz'] }}"
                            >
                            @error('year_5_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_5_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_5_kz"
                                name="title_5_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_5_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_5_kz'] }}</textarea>
                            @error('title_5_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_5_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_5_kz"
                                name="desc_5_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_5_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_5_kz'] }}</textarea>
                            @error('desc_5_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_5_en">
                                Год #5
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_5_en"
                                name="year_5_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_5_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_5_en'] }}"
                            >
                            @error('year_5_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_5_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_5_en"
                                name="title_5_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_5_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_5_en'] }}</textarea>
                            @error('title_5_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_5_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_5_en"
                                name="desc_5_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_5_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_5_en'] }}</textarea>
                            @error('desc_5_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#6--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_6_ru">
                                Год #6
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_6_ru"
                                name="year_6_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_6_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_6_ru'] }}"
                            >
                            @error('year_6_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_6_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_6_ru"
                                name="title_6_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_6_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_6_ru'] }}</textarea>
                            @error('title_6_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_6_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_6_ru"
                                name="desc_6_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_6_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_6_ru'] }}</textarea>
                            @error('desc_6_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_6_kz">
                                Год #6
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_6_kz"
                                name="year_6_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_6_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_6_kz'] }}"
                            >
                            @error('year_6_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_6_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_6_kz"
                                name="title_6_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_6_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_6_kz'] }}</textarea>
                            @error('title_6_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_6_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_6_kz"
                                name="desc_6_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_6_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_6_kz'] }}</textarea>
                            @error('desc_6_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_6_en">
                                Год #6
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_6_en"
                                name="year_6_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_6_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_6_en'] }}"
                            >
                            @error('year_6_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_6_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_6_en"
                                name="title_6_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_6_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_6_en'] }}</textarea>
                            @error('title_6_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_6_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_6_en"
                                name="desc_6_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_6_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_6_en'] }}</textarea>
                            @error('desc_6_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            {{--#7--}}
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_7_ru">
                                Год #7
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_7_ru"
                                name="year_7_ru"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_7_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_7_ru'] }}"
                            >
                            @error('year_7_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_7_ru">
                                Заголовок на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_7_ru"
                                name="title_7_ru"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_7_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_7_ru'] }}</textarea>
                            @error('title_7_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_7_ru">
                                Описание на русском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_7_ru"
                                name="desc_7_ru"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_7_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_7_ru'] }}</textarea>
                            @error('desc_7_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_7_kz">
                                Год #7
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_7_kz"
                                name="year_7_kz"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_7_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_7_kz'] }}"
                            >
                            @error('year_7_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KZTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_7_kz">
                                Заголовок на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_7_kz"
                                name="title_7_kz"
                                rows="8"
                                placeholder="Название на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_7_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_7_kz'] }}</textarea>
                            @error('title_7_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_7_kz">
                                Описание на казахском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_7_kz"
                                name="desc_7_kz"
                                rows="8"
                                placeholder="Описание на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_7_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_7_kz'] }}</textarea>
                            @error('desc_7_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--YearTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="year_7_en">
                                Год #7
                            </label>
                        </div>

                        <div>
                            <input
                                id="year_7_en"
                                name="year_7_en"
                                type="text"
                                placeholder="Год"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('year_7_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                value="{{ $history['year_7_en'] }}"
                            >
                            @error('year_7_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnTitle-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="title_7_en">
                                Заголовок на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="title_7_en"
                                name="title_7_en"
                                rows="8"
                                placeholder="Название на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_7_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['title_7_en'] }}</textarea>
                            @error('title_7_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnDesc-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="desc_7_en">
                                Описание на английском
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="desc_7_en"
                                name="desc_7_en"
                                rows="8"
                                placeholder="Описание на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('desc_7_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $history['desc_7_en'] }}</textarea>
                            @error('desc_7_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow text-white">
                Сохранить
            </button>
        </form>
    </div>
@endsection
