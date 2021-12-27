@extends('layouts.app')
@section('content')
    <!--    Section Hero-->
    <div class="py-32 lg:py-60" style="background-image: url({{url('storage/' . $hero_bg)}})">
        <div class="max-w-6xl mx-auto px-4 flex w-full items-center">
            <div class="md:w-2/3 md:border-l md:pl-4">
                <h1 class="font-black text-xl md:text-4xl uppercase md:leading-snug mb-5">
                    {{trans('hero.title')}}
                </h1>
                <p class="text-sm md:text-base">
                    {{trans('hero.subtitle')}}
                </p>
            </div>
        </div>
    </div>

    <!--    Section About-->
    <div class="bg-about bg-cover bg-center py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-5">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.company_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="flex flex-nowrap gap-10 md:gap-16 overflow-x-auto py-20 no-scrollbar">
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_1')}}
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        {{trans('company.subtitle_1')}}
                    </p>
                </div>
                <div class="border-r"></div>
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_2')}}
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        {{trans('company.subtitle_2')}}
                    </p>
                </div>
                <div class="border-r"></div>
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_3')}}
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        {{trans('company.subtitle_3')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--    Section Video-->
<!--    <section id="video">
        <div class="bg-bird-lg bg-cover bg-center h-96 lg:py-80 flex justify-center items-center">
            asd
        </div>
    </section>-->

    <!--    Section History-->
    <section id="history">
        <div class="bg-gradient-to-b from-h-start to-h-end py-24">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center md:mb-12 md:mb-18">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.history_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div class="relative">
                    <div class="flex justify-between">
                        <div data-aos="fade-right"
                            data-aos-delay="600"
                            data-aos-duration="1000"
                            class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_1') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_1') }}</h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_1') }}
                            </p>
                        </div>
                        <div data-aos="fade-down"
                             data-aos-delay="200"
                             data-aos-duration="1000" class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-64"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">1</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                    <div class="flex justify-between">
                        <div data-aos="fade-left"
                             data-aos-delay="600"
                             data-aos-duration="1000"
                             class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3 lg:order-last">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_0') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_0') }}</h3>
                            <p class="text-sm md:text-base">
                                {{ trans('history.description_2') }}
                            </p>
                        </div>
                        <div data-aos="fade-down"
                             data-aos-delay="200"
                             data-aos-duration="1000"
                             class="hidden lg:flex flex-col items-center lg:order-2">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">2</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0 lg:order-1"></div>
                    </div>
                    <div class="flex justify-between">
                        <div
                            data-aos="fade-right"
                            data-aos-delay="600"
                            data-aos-duration="1000"
                            class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_6') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_6') }}</h3>
                            <p class="text-sm md:text-base">{{ trans('history.description_6') }}</p>
                        </div>
                        <div
                            data-aos="fade-down"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="hidden lg:flex flex-col items-center">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">3</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0"></div>
                    </div>
                    <div class="flex justify-between">
                        <div
                            data-aos="fade-left"
                            data-aos-delay="600"
                            data-aos-duration="1000"
                            class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3 lg:order-last">
                            <p class="text-4xl font-semibold mb-4">{{ trans('history.year_7') }}</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">{{ trans('history.title_7') }}</h3>
                            <p class="text-sm md:text-base">{{ trans('history.description_7') }}</p>
                        </div>
                        <div
                            data-aos="fade-down"
                            data-aos-delay="200"
                            data-aos-duration="1000"
                            class="hidden lg:flex flex-col items-center lg:order-2">
                            <div class="border-l h-4/5"></div>
                            <div class="flex items-center border w-20 h-20 rounded-full flex-shrink-0">
                                <h1 class="mx-auto text-3xl font-light">4</h1>
                            </div>
                            <div class="border-l h-1/3"></div>
                        </div>
                        <div class="hidden lg:block max-w-md xl:max-w-lg w-full lg:flex-shrink-0 lg:order-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    Section Partners-->
    <section>
        <div class="bg-partner bg-cover bg-center py-16 lg:py-40">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center justify-between mb-16">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        Наши партнеры
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div id="partners">
                    <partners></partners>
                </div>
            </div>
        </div>
    </section>

    <section id="news_slide">
        <news-slide></news-slide>
    </section>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#news_slide'
        });

        new Vue({
            el: '#partners'
        });
    </script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease-in', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>
@endsection

