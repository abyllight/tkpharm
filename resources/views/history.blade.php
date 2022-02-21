@extends('layouts.app')
@section('content')
    <!--    Section Timeline-->
    <section id="timeline">
        <div class="bg-gradient-to-b from-h-start to-h-end py-32 lg:py-48">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex items-center lg:mb-12">
                    <div class="font-bold text-lg uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.history_section')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div id="histories"><histories></histories></div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        new Vue({
            el: '#histories'
        });
    </script>
@endsection
