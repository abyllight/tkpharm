@extends('layouts.admin')
@section('js_head')
    <script src="https://cdn.tiny.cloud/1/q91nqw013kve18qsjavansa46rootjplj5g2su7im84ujgxy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Редактировать новость</h4>

        <form method="POST" action="/admin/news/{{$news->id}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

            <!--RuTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_ru">
                        Название на русском
                    </label>
                </div>

                <div>
                    <input
                        id="title_ru"
                        name="title_ru"
                        type="text"
                        placeholder="Название на русском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $news->getTitleRu() }}">
                    @error('title_ru')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--KzTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_kz">
                        Название на казахском
                    </label>
                </div>

                <div>
                    <input
                        id="title_kz"
                        name="title_kz"
                        type="text"
                        placeholder="Название на русском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $news->getTitleKz() }}">
                    @error('title_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--EnTitle-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="title_en">
                        Название на английском
                    </label>
                </div>

                <div>
                    <input
                        id="title_en"
                        name="title_en"
                        type="text"
                        placeholder="Название на английском"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('title_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        value="{{ $news->getTitleEn() }}">
                    @error('title_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--RuDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_ru">
                        Description на русском
                    </label>
                </div>
                <div>
                        <textarea
                            id="description_ru"
                            rows="20"
                            name="description_ru"
                            class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_ru') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                        >
                            {{ $news->getDescriptionRu() }}
                        </textarea>
                    @error('description_ru')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--KzDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_kz">
                        Description на казахском
                    </label>
                </div>
                <div>
                    <textarea
                        id="description_kz"
                        rows="20"
                        name="description_kz"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_kz') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                    >
                        {{ $news->getDescriptionKz() }}
                    </textarea>
                    @error('description_kz')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!--EnDescription-->
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="description_en">
                        Description на английском
                    </label>
                </div>
                <div>
                    <textarea
                        id="description_en"
                        rows="20"
                        name="description_en"
                        class="bg-gray-50 appearance-none border-2 border-gray-200 @error('description_en') border-red-500 @enderror rounded w-full py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-blue-400"
                    >
                        {{ $news->getDescriptionEn() }}
                    </textarea>
                    @error('description_en')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <img src="{{ asset('storage/' .$news->image) }}" class="w-32">
            <div class="mb-6">
                <div class="mb-1">
                    <label class="text-gray-500 font-medium" for="image">
                        Фото
                    </label>
                </div>
                <div>
                    <input name="image" id="image" type="file" value="{{ asset('storage/' . $news->image) }}">
                    @error('image')
                    <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div>
                <button class="bg-blue-500 rounded px-6 py-3 shadow text-white hover:bg-blue-400" type="submit">
                    Сохранить
                </button>
            </div>
        </form>
    </div>
@endsection
@section('js_body')
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange export formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
@endsection
