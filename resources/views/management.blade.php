@extends('layouts.app')
@section('content')
    <!--    Section About-->
    <div class="bg-management py-32 lg:py-48">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center lg:mb-12">
                <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                    {{trans('welcome.management_section')}}
                </div>
                <div class="border border-top w-full"></div>
            </div>
            <div class="flex flex-col md:flex-row lg:items-start md:space-x-10 mt-8 lg:mt-0">
                <div class="md:w-1/3 md:flex-shrink-0">
                    <img src="/img/manager.jpg" class="bg-cover bg-center mb-3">
                    <p class="font-semibold text-lg mb-1">Туреханова Жанагуль Жайлыбековна</p>
                    <p class="font-light">Директор ТОО «ТК Фарм Актобе»</p>
                </div>
                <div class="text-sm">
                    {!! trans('welcome.management_bio') !!}
                </div>
            </div>
        </div>
    </div>
@endsection
