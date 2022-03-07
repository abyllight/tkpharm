@extends('layouts.app')
@section('content')
    <div class="bg-products py-32 lg:py-48">
        <div class="max-w-2xl mx-auto px-4">
            <img src="/storage/{{$product->image}}" class="w-72 h-72 object-cover mx-auto mb-4"/>
            <div>
                <div class="mb-5">
                    <p class="font-light mb-1.5">{{$product->getAmount()}}</p>
                    <p class="font-semibold text-xl uppercase mb-1">{{$product->getTitle()}}</p>
                    <p class="text-sm text-gray-100">{{$product->getSubtitle()}}</p>
                </div>

                <p class="text-base mb-10">{{$product->getDescription()}}</p>
                <a class="bg-gray-100 hover:bg-gray-50 text-gray-900 px-5 py-2.5 cursor-pointer rounded-md font-medium text-sm" href="{{$product->link}}" target="_blank">Приобрести товар</a>
            </div>
        </div>
    </div>
@endsection
