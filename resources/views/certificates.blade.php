@extends('layouts.app')
@section('content')
    <!--    Section About-->
    <div class="py-32 lg:py-48 bg-news">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center lg:mb-12">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.certificates_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:flex-row py-10">
                @foreach($certificates as $certificate)
                    <div>
                        <img src="{{'storage/'.$certificate->image}}" class="h-72 lg:h-80 bg-center bg-cover mx-auto mb-4">
                        <div class="border font-semibold uppercase text-sm text-center p-2 h-16">
                            <p class="line-clamp-2">{{$certificate->getTitle()}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
