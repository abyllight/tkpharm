@extends('layouts.app')
@section('content')
    <div>
        <div class="bg-news py-32 lg:py-48">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center mb-8 lg:mb-12">
                    <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.news_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                    <div class="flex-shrink-0 ml-4 font-light">
                        {{$total}} {{ trans_choice('welcome.news_plural', 17) }}
                    </div>
                </div>
                <div id="news"><news></news></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#news'
        });
    </script>
@endsection
