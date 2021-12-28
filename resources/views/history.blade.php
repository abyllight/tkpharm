@extends('layouts.app')
@section('content')
    <!--    Section Timeline-->
    <section id="timeline">
        <div class="bg-gradient-to-b from-h-start to-h-end py-32 lg:py-48">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center lg:mb-12">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.history_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div class="relative">
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_1') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_1') }}</h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_1') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-64"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">1</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3 lg:order-last">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_2') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_2') }}</h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_2') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center lg:order-2">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">2</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0 lg:order-1"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_3') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                {{ trans('history.title_3') }}
                            </h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_3') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">3</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3 lg:order-last">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_4') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                {{ trans('history.title_4') }}
                            </h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_4') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center lg:order-2">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">4</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0 lg:order-1"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_5') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                {{ trans('history.title_5') }}
                            </h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_5') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-64"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">5</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3 lg:order-last">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_6') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                {{ trans('history.title_6') }}
                            </h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_6') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center lg:order-2">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">6</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0 lg:order-1"></div>
                    </div>
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_7') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                {{ trans('history.title_7') }}
                            </h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_7') }}
                            </p>
                        </div>
                        <div class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">7</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
