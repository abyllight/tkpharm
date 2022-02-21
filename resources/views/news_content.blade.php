@extends('layouts.app')
@section('content')
    <div class="text-black">
        <div class="bg-news h-48 md:h-96"></div>
        <div class="bg-transparent max-w-6xl px-4 mx-auto md:flex md:items-center">
            <div class="max-w-xl lg:max-w-3xl mx-auto -mt-20 md:-mt-48 font-light md:mb-16 md:order-last">
                <img src="{{asset('storage/' .$news->image)}}" class="object-cover h-96 mx-auto">
                <p class="text-news-gray mt-5">{{ $news->created_at->format('Y.m.d - H:i') }}</p>
                <p class="font-semibold md:text-xl uppercase mt-2">{{ $news->getTitle() }}</p>
                <p class="mt-6">{!! $news->getDescription() !!}</p>
            </div>
        </div>
        <div class="bg-news py-20">
            <div class="max-w-6xl px-4 mx-auto text-white">
                <div class="flex items-center mb-8 lg:mb-12">
                    <div class="font-bold text-xl uppercase flex-shrink-0 mr-4">
                        {{trans('welcome.read_also')}}
                    </div>
                    <div class="border border-top w-full"></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    @foreach($related_news as $news)
                        <div class="font-light md:h-56">
                            <div class="flex flex-col p-8 justify-between border w-full h-full">
                                <div>
                                    <p class="text-sm mb-3">{{$news->created_at}}</p>
                                    <p class="font-semibold uppercase text-lg mb-6 md:mb-0 md:line-clamp-3">{{$news->getTitle()}}</p>
                                </div>
                                <a class="flex items-center cursor-pointer" href="{{route('news_content', $news->id)}}">{{trans('welcome.read_more')}} <img src="/img/right.svg" class="w-5 h-4 ml-1"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
