@extends('layouts.admin')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-8 border-b pb-2">
            <h3 class="font-semibold text-xl">Галерея</h3>
            <a
                class="px-6 py-2 bg-blue-500 rounded text-white text-sm cursor-pointer"
                href="/admin/gallery/create"
            >
                Добавить фотографий
            </a>
        </div>

        <div>
            <table class="table-auto w-full">
                <thead>
                    <tr class="text-left">
                        <th class="px-4 py-2">#</th>
                        <th class="px-4 py-2">Фото</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                @foreach($gallery as $key => $item)
                    <tr class="border">
                        <td class="px-4 py-2">{{$key + 1}}</td>
                        <td class="px-4 py-2">
                            <img src="{{asset('storage/'.$item->image)}}" class="w-12">
                        </td>
                        <td class="text-center">
                            <form method="post" action="/admin/gallery/{{$item->id}}">
                                @csrf
                                @method('delete')
                                <button class="cursor-pointer bg-red-500 text-white hover:bg-red-400 px-6 py-2 rounded shadow" type="submit">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
