@extends('layouts.admin')
@section('content')
    <div>
        <div class="flex items-center justify-between mb-8 border-b pb-2">
            <h3 class="font-semibold text-xl">Продукты</h3>
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
                        <th class="px-4 py-2">Название</th>
                        <th class="px-4 py-2">Статус</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                @foreach($products as $key => $product)
                    <tr class="border">
                        <td class="px-4 py-2">{{$key + 1}}</td>
                        <td class="px-4">
                            <p>{{ $product->getTitleRu() }}</p>
                        </td>
                        <td class="px-4">
                            <p class="inline text-white rounded px-2 py-1 @if($product->is_active) bg-green-500 @else bg-gray-300 @endif">
                                {{ $product->is_active ? 'активный' : 'не активный'}}
                            </p>
                        </td>
                        <td class="px-4">
                            <a class="cursor-pointer text-blue-500" href="/admin/products/{{$product->id}}/edit">Редактировать</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
