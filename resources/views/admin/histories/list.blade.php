@extends('layouts.admin')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-8 border-b pb-2">
            <h3 class="font-semibold text-xl">История</h3>
            <a
                class="px-6 py-2 bg-blue-500 rounded text-white text-sm cursor-pointer"
                href="/admin/histories/create"
            >
                Создать
            </a>
        </div>

        <div>
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Год</th>
                        <th class="px-4 py-2">Название</th>
                        <th class="px-4 py-2">Показывать на главной</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                @foreach($histories as $key => $history)
                    <tr class="border">
                        <td class="px-4 py-2">{{$key + 1}}</td>
                        <td class="px-4">
                            <p>{{ $history->year }}</p>
                        </td>
                        <td class="px-4">
                            <p>{{ $history->getTitleRu() }}</p>
                        </td>
                        <td class="px-4">
                            <p class="inline text-white rounded px-2 py-1 @if($history->is_visible) bg-green-500 @else bg-gray-300 @endif">
                                {{ $history->is_visible ? 'да' : 'нет'}}
                            </p>
                        </td>
                        <td class="px-4">
                            <a class="cursor-pointer text-blue-500" href="/admin/histories/{{$history->id}}/edit">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
