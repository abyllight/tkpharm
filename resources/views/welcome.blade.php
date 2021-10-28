@extends('layouts.app')
@section('content')
    <!--    Section Hero-->
    <div class="bg-hero bg-cover bg-center">
        <div class="max-w-6xl mx-auto px-4 flex w-full h-screen items-center">
            <div class="md:w-2/3 md:border-l md:pl-4">
                <h1 class="font-black text-xl md:text-4xl uppercase md:leading-snug mb-5">
                    {{ __('welcome.hero') }}
                </h1>
                <p class="text-sm md:text-base">
                    «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний не
                    только в Актюбинской области, но и по всему Казахстану. Компания производит
                    выпуск противокашлевых сиропов: солодки, солодки с термопсисом и пертуссин
                </p>
            </div>
        </div>
    </div>

    <!--    Section About-->
    <div class="bg-about bg-cover bg-center py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-5">
                <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                    О Компании
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="flex flex-nowrap gap-10 md:gap-16 overflow-x-auto overflow-hidden py-20">
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        Мы производим лекарственные препараты и медицинские изделия
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        «ТК Фарм Актобе» является одной из крупнейших фармацевтических
                        компаний не только в Актюбинской области, но и по всему Казахстану.
                        Компания производит выпуск противокашлевых сиропов: солодки,
                        солодки с термопсисом и пертуссин, а также экстракта корня солодки
                        и глицирризиновой кислоты высокой степени очистки для использования в
                        косметологии и фармацевтике.
                    </p>
                </div>
                <div class="border-r"></div>
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        Являемся лучшими в сфере фармацевтики
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        «ТК Фарм Актобе» является одной из крупнейших фармацевтических
                        компаний <br> не только в Актюбинской области, но и по всему Казахстану.
                        Компания производит выпуск противокашлевых сиропов: солодки,
                        солодки с термопсисом и пертуссин, а также экстракта корня солодки
                        и глицирризиновой кислоты высокой степени очистки для использования в
                        косметологии и фармацевтике.
                    </p>
                </div>
                <div class="border-r"></div>
                <div class="w-4/5 flex-shrink-0">
                    <h1 class="font-bold text-2xl md:text-5xl uppercase tracking-wider xl:leading-tight mb-5">
                        Контролируем качество путем физико-химической лаборатории
                    </h1>
                    <p class="text-sm md:text-base md:w-2/3">
                        «ТК Фарм Актобе» является одной из крупнейших фармацевтических
                        компаний <br> не только в Актюбинской области, но и по всему Казахстану.
                        Компания производит выпуск противокашлевых сиропов: солодки,
                        солодки с термопсисом и пертуссин, а также экстракта корня солодки
                        и глицирризиновой кислоты высокой степени очистки для использования в
                        косметологии и фармацевтике.
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
                        История компании
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div class="relative">
                    <div class="flex justify-between">
                        <div class="max-w-md xl:max-w-lg lg:flex-shrink-0 pt-16 lg:pb-8 lg:px-3">
                            <p class="text-4xl font-semibold mb-4">2012</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">Построение завода ТОО «ТК Фарм Актобе»</h3>
                            <p class="text-sm md:text-base">
                                «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний
                                не только в Актюбинской области, но и по всему Казахстану. Компания производит
                                выпуск противокашлевых сиропов: солодки, солодки с термопсисом и пертуссин,
                                а также экстракта корня солодки и глицирризиновой кислоты высокой степени очистки
                                для использования в косметологии и фармацевтике.
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
                            <p class="text-4xl font-semibold mb-4">2014 - 2016</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">Запуск Цеха жидких и твердых лекарственных форм</h3>
                            <p class="text-sm md:text-base">
                                «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний
                                не только в Актюбинской области, но и по всему Казахстану. Компания производит
                                выпуск противокашлевых сиропов: солодки, солодки с термопсисом и пертуссин,
                                а также экстракта корня солодки и глицирризиновой кислоты высокой степени очистки
                                для использования в косметологии и фармацевтике.
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
                            <p class="text-4xl font-semibold mb-4">2019</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                Лауреат в номинации «Лучший товар для населения»
                            </h3>
                            <p class="text-sm md:text-base">
                                «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний
                                не только в Актюбинской области, но и по всему Казахстану. Компания производит
                                выпуск противокашлевых сиропов: солодки, солодки с термопсисом и пертуссин,
                                а также экстракта корня солодки и глицирризиновой кислоты высокой степени очистки
                                для использования в косметологии и фармацевтике.
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
                            <p class="text-4xl font-semibold mb-4">2020</p>
                            <h3 class="font-bold uppercase text-lg md:text-xl mb-3">
                                Covid-19 ЧС: Лидеры по обеспечению масками и лекарственными препаратами населения Актюбинской области
                            </h3>
                            <p class="text-sm md:text-base">
                                «ТК Фарм Актобе» является одной из крупнейших фармацевтических компаний
                                не только в Актюбинской области, но и по всему Казахстану. Компания производит
                                выпуск противокашлевых сиропов: солодки, солодки с термопсисом и пертуссин,
                                а также экстракта корня солодки и глицирризиновой кислоты высокой степени очистки
                                для использования в косметологии и фармацевтике.
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
                </div>
            </div>
        </div>
    </section>

    <!--    Section Partners-->
    <section id="partners">
        <div class="bg-partner bg-cover bg-center py-16 lg:py-40">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center justify-between mb-16">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        Наши партнеры
                    </div>
                    <div class="border border-top w-full"></div>
                </div>

                <div class="flex flex-col md:flex-row md:justify-between gap-8">
                    <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent"
                        href="#">
                        <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <img src="/img/right.svg" width="24">
                        </div>
                        <p class="uppercase text-xs">Millenium.kz</p>
                        <p class="uppercase font-bold md:text-lg">Приобрести наши товары</p>
                    </a>
                    <a class="border cursor-pointer rounded w-1/2 w-full p-6 relative hover:bg-cover hover:bg-opacity-40 hover:border-transparent"
                        href="#">
                        <div class="border rounded-full w-12 h-12 flex items-center justify-center mb-4">
                            <img src="/img/right.svg" width="24">
                        </div>
                        <p class="uppercase text-xs">Farmkazyna.kz</p>
                        <p class="uppercase font-bold md:text-lg">Наш прямой партнер</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="news_slide">
        <news-slide></news-slide>
    </section>
@endsection
@section('js')
    new Vue({
        el: '#news_slide'
    });
@endsection

