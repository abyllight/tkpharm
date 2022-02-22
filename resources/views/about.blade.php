@extends('layouts.app')
@section('content')
    <!--    Section About-->
    <div class="bg-about bg-cover bg-center py-32">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between mb-5">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.company_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="py-6 lg:py-12 flex flex-col gap-12">
                <div class="max-w-5xl">
                    <h1 class="font-bold text-2xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_1')}}
                    </h1>
                    <p class="font-normal text-sm md:text-base max-w-4xl">
                        {{trans('company.subtitle_1')}}
                    </p>
                </div>
                <div class="border-t max-w-sm"></div>
                <div class="max-w-5xl">
                    <h1 class="font-bold text-2xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_2')}}
                    </h1>
                    <p class="font-normal text-sm md:text-base max-w-4xl">
                        {{trans('company.subtitle_2')}}
                    </p>
                </div>
                <div class="border-t max-w-sm"></div>
                <div class="max-w-5xl">
                    <h1 class="font-bold text-2xl uppercase tracking-wider xl:leading-tight mb-5">
                        {{trans('company.title_3')}}
                    </h1>
                    <p class="font-normal text-sm md:text-base max-w-4xl">
                        {{trans('company.subtitle_3')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
