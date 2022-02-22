@extends('layouts.admin')
@section('content')
    <div class="flex justify-center items-center">
        <div class="bg-gray-200 shadow rounded-md p-4 max-w-lg w-full">
            <p class="font-medium text-xl mb-2">{{$message->name}}</p>
            <p class="font-light text-sm">{{$message->phone}}</p>
            <p class="font-light text-sm mb-5">{{$message->email}}</p>
            <p class="font-medium mb-1.5">{{$message->subject}}</p>
            <p>{{$message->message}}</p>
        </div>
    </div>
@endsection
