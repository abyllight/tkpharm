@extends('layouts.admin')
@section('content')
    <div class="p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg font-semibold mb-8">О компании</h4>
        <form method="post" action="/admin/company">
        @csrf

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div>
                    <!--RuTitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_1_ru">
                                Заголовок на русском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_1_ru"
                                name="company_title_1_ru"
                                rows="8"
                                placeholder="Заголовок на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_1_ru'] }}</textarea>
                            @error('company_title_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuSubtitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_1_ru">
                                Описание на русском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_1_ru"
                                name="company_subtitle_1_ru"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_1_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $company['subtitle_1_ru'] }}
                            </textarea>
                            @error('company_subtitle_1_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <!--KzTitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_1_kz">
                                Заголовок на казахском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_1_kz"
                                name="company_title_1_kz"
                                rows="8"
                                placeholder="Заголовок на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_1_kz'] }}</textarea>
                            @error('company_title_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzSubtitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_1_kz">
                                Описание на казахском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_1_kz"
                                name="company_subtitle_1_kz"
                                placeholder="Описание на казахском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_1_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $company['subtitle_1_kz'] }}</textarea>
                            @error('company_subtitle_1_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--EnTitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_1_en">
                                Заголовок на английском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_1_en"
                                name="company_title_1_en"
                                rows="8"
                                placeholder="Заголовок на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_1_en'] }}</textarea>
                            @error('company_title_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnSubtitle1-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_1_en">
                                Описание на английском #1
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_1_en"
                                name="company_subtitle_1_en"
                                placeholder="Описание на английском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_1_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['subtitle_1_en'] }}</textarea>
                            @error('company_subtitle_1_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
                <div>
                    <!--RuTitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_2_ru">
                                Заголовок на русском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_2_ru"
                                name="company_title_2_ru"
                                rows="8"
                                placeholder="Заголовок на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"

                            >{{ $company['title_2_ru'] }}</textarea>
                            @error('company_title_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuSubtitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_2_ru">
                                Описание на русском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_2_ru"
                                name="company_subtitle_2_ru"
                                placeholder="Описание на русском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_2_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $company['subtitle_2_ru'] }}</textarea>
                            @error('company_subtitle_2_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--KzTitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_2_kz">
                                Заголовок на казахском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_2_kz"
                                name="company_title_2_kz"
                                rows="8"
                                placeholder="Заголовок на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"

                            >{{ $company['title_2_kz'] }}</textarea>
                            @error('company_title_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzSubtitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_2_kz">
                                Описание на казахском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_2_kz"
                                name="company_subtitle_2_kz"
                                placeholder="Описание на казахском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_2_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                                >{{ $company['subtitle_2_kz'] }}</textarea>
                            @error('company_subtitle_2_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--EnTitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_2_en">
                                Заголовок на английском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_2_en"
                                name="company_title_2_en"
                                rows="8"
                                placeholder="Заголовок на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"

                            >{{ $company['title_2_en'] }}</textarea>
                            @error('company_title_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnSubtitle2-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_2_en">
                                Описание на английском #2
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_2_en"
                                name="company_subtitle_2_en"
                                placeholder="Описание на английском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_2_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['subtitle_2_en'] }}</textarea>
                            @error('company_subtitle_2_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="border border-t mb-6"></div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">

                <div>
                    <!--RuTitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_3_ru">
                                Заголовок на русском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_3_ru"
                                name="company_title_3_ru"
                                rows="8"
                                placeholder="Заголовок на русском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_3_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_3_ru'] }}</textarea>
                            @error('company_title_3_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--RuSubtitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_3_ru">
                                Описание на русском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_3_ru"
                                name="company_subtitle_3_ru"
                                placeholder="Описание на русском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_3_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['subtitle_3_ru'] }}</textarea>
                            @error('company_subtitle_3_ru')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--KzTitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_3_kz">
                                Заголовок на казахском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_3_kz"
                                name="company_title_3_kz"
                                rows="8"
                                placeholder="Заголовок на казахском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_3_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_3_kz'] }}</textarea>
                            @error('company_title_3_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--KzSubtitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_3_kz">
                                Описание на казахском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_3_kz"
                                name="company_subtitle_3_kz"
                                placeholder="Описание на казахском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_3_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['subtitle_3_kz'] }}</textarea>
                            @error('company_subtitle_3_kz')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div>
                    <!--EnTitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_title_3_en">
                                Заголовок на английском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_title_3_en"
                                name="company_title_3_en"
                                rows="8"
                                placeholder="Заголовок на английском"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_title_3_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['title_3_en'] }}</textarea>
                            @error('company_title_3_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <!--EnSubtitle3-->
                    <div class="mb-6">
                        <div class="mb-1">
                            <label class="text-gray-500 font-medium" for="company_subtitle_3_en">
                                Описание на английском #3
                            </label>
                        </div>

                        <div>
                            <textarea
                                id="company_subtitle_3_en"
                                name="company_subtitle_3_en"
                                placeholder="Описание на английском"
                                rows="8"
                                class="bg-gray-50 appearance-none border-2 border-gray-200 @error('company_subtitle_3_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                            >{{ $company['subtitle_3_en'] }}</textarea>
                            @error('company_subtitle_3_en')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="px-6 py-2 bg-blue-500 hover:bg-blue-400 rounded shadow text-white">
                Сохранить
            </button>
        </form>
    </div>
@endsection
