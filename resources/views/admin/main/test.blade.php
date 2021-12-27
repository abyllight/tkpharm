@extends('layouts.admin')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-8 border-b pb-2">
            <h3 class="font-semibold text-xl">Главная</h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div>
                <!--RuTitle-->
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-gray-500 font-medium" for="title_2_ru">
                            Заголовок на русском
                        </label>
                    </div>

                    <div>
                        <input
                            id="title_2_ru"
                            name="title_2_ru"
                            value="{{ $partners['title_2_ru'] }}"
                            placeholder="Название на русском"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        >
                        @error('title_2_ru')
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
            </div>

            <div>
                <!--KzTitle-->
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-gray-500 font-medium" for="title_2_kz">
                            Заголовок на казахском
                        </label>
                    </div>

                    <div>
                        <input
                            id="title_2_kz"
                            name="title_2_kz"
                            value="{{ $partners['title_2_kz'] }}"
                            placeholder="Название на казахском"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        >
                        @error('title_2_kz')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!--KzAction-->
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
            </div>

            <div>
                <!--KzTitle-->
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-gray-500 font-medium" for="title_2_en">
                            Заголовок на английском
                        </label>
                    </div>

                    <div>
                        <input
                            id="title_2_en"
                            name="title_2_en"
                            value="{{ $partners['title_2_en'] }}"
                            placeholder="Название на английском"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        >
                        @error('title_2_en')
                        <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <!--KzAction-->
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
    </div>
@endsection
