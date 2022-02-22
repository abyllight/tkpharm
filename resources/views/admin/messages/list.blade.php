@extends('layouts.admin')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-8 border-b pb-2">
            <h3 class="font-semibold text-xl">Сообщения</h3>
            <a
                class="px-6 py-2 bg-blue-500 rounded text-white text-sm cursor-pointer"
                href="/admin/products/create"
            >
                Создать
            </a>
        </div>

        <div>
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Имя</th>
                        <th class="px-4 py-2">Телефон</th>
                        <th class="px-4 py-2">Статус</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                @foreach($messages as $key => $message)
                    <tr class="border">
                        <td class="px-4 py-2">{{$key + 1}}</td>
                        <td class="px-4 @if($message->is_read)text-gray-400 @endif">
                            <p>{{ $message->name }}</p>
                        </td>
                        <td class="px-4 @if($message->is_read)text-gray-400 @endif">
                            <p>{{ $message->phone }}</p>
                        </td>
                        <td class="px-4">
                            <a class="cursor-pointer text-blue-500" href="/admin/messages/{{$message->id}}">Посмотреть</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
