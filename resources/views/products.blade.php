@extends('layouts.app')
@section('content')
    <div id="products">
        <div class="bg-products py-32 lg:py-48">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center mb-8 lg:mb-12">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.products_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <products></products>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#products'
        });
    </script>
@endsection
