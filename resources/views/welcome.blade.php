@extends('layouts.app')
@section('content')
    <!--    Section Hero-->
    <div class="py-32 lg:py-60 bg-black" style="background-image: url({{url('storage/' . $hero_bg)}}); background-size: cover">
        <div class="max-w-6xl mx-auto px-4 flex w-full items-center">
            <div class="md:w-2/3 md:border-l md:pl-4">
                <h1 class="font-black text-lg md:text-3xl uppercase md:leading-snug mb-5">
                    {{trans('hero.title')}}
                </h1>
                <p class="text-sm md:text-base">
                    {{trans('hero.subtitle')}}
                </p>
            </div>
        </div>
    </div>

    <!--    Section About-->
    <div class="bg-about py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-5">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.company_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <section id="about">
                <about></about>
            </section>
        </div>
    </div>


    <!--Section History-->
    <section id="history">
        <div class="bg-gradient-to-b from-h-start to-h-end py-24">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center md:mb-12 md:mb-18">
                    <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.history_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div id="history-sample"><history-sample></history-sample></div>
            </div>
        </div>
    </section>

    <!--    Section Partners-->
    <section>
        <div class="bg-cover bg-center py-16 lg:py-40" style="background-image: url({{url('storage/' . $partners_bg)}}); background-size: cover">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center justify-between mb-16">
                    <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.partners_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div id="partners">
                    <div class="flex flex-col md:flex-row md:justify-between gap-8">
                        <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent transition-all ease-in-out duration-300"
                           href="{{ $partners_link_1 }}" target="_blank">
                            <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                                <img src="/img/right.svg" width="24">
                            </div>
                            <p class="uppercase text-xs mb-1">{{ $partners_title_1 }}</p>
                            <div class="uppercase font-bold">
                                {{ trans('partners.action_1') }}
                            </div>
                        </a>
                        <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent transition-all ease-in-out duration-300"
                           href="{{ $partners_link_2 }}" target="_blank">
                            <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                                <img src="/img/right.svg" width="24">
                            </div>
                            <p class="uppercase text-xs mb-1">{{ $partners_title_2 }}</p>
                            <div class="uppercase font-bold">
                                {{ trans('partners.action_2') }}
                            </div>
                        </a>
                    </div>
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
            el: '#about'
        });

        new Vue({
            el: '#news_slide'
        });

        new Vue({
            el: '#history-sample'
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

