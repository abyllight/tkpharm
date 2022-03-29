@extends('layouts.app')
@section('content')
    <!--    Section About-->
    <div class="bg-gray-800 text-gray-50 pt-32 md:pt-56 pb-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-12 md:mb-20">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.company_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="space-y-16 md:space-y-28">
                <div class="flex flex-col md:flex-row items-center md:space-x-6 space-y-4 md:space-y-0 py-6">
                    <div class="md:w-1/2 w-full relative h-56 md:h-96"
                    >
                        <img src="/img/gallery/g6.png" class="md:absolute mx-auto shadow-lg"/>
                        <img src="/img/gallery/g5.png" class="absolute -bottom-12 shadow-lg hidden md:block md:right-0 lg:right-10"/>
                    </div>
                    <div class="md:w-1/2"
                    >
                        <h2 class="font-semibold text-2xl text-green-500 leading-tight mb-3">
                            {{$t1}}
                        </h2>
                        <p class="font-light">
                            {{ $s1 }}
                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:space-x-6 md:space-y-0 py-6">
                    <div class="md:w-1/2 order-last md:order-first"
                    >
                        <h2 class="font-semibold text-2xl text-green-500 leading-tight mb-3">
                            {{$t2}}
                        </h2>
                        <p class="font-light">
                            {{ $s2 }}
                        </p>
                    </div>
                    <div class="md:w-1/2 mb-4 md:mb-0"
                    >
                        <img src="/img/gallery/g15.png" class="shadow-lg mx-auto"/>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row items-center md:space-x-6 space-y-4 md:space-y-0 py-6">
                    <div class="md:w-1/2 w-full relative">
                        <img src="/img/cert/cert.jpeg" class="w-72 mx-auto shadow-lg"/>
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="font-semibold text-2xl text-green-500 leading-tight mb-3">
                            {{$t3}}
                        </h2>
                        <p class="font-light">
                            {{ $s3 }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
