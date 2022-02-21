@extends('layouts.app')
@section('content')
    <div id="gallery">
        <div class="bg-gallery py-32 lg:py-48">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center mb-8 lg:mb-12">
                    <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.gallery_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <gallery></gallery>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#gallery'
        });
    </script>
@endsection
