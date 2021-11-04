@extends('layouts.admin')
@section('js_head')
    <script src="https://cdn.tiny.cloud/1/q91nqw013kve18qsjavansa46rootjplj5g2su7im84ujgxy/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="max-w-4xl p-4 mx-auto border shadow rounded text-sm">
        <h4 class="text-lg mb-8">Добавить фотографий</h4>

        <form method="post" action="/admin/gallery" enctype="multipart/form-data">
            @csrf
                <div class="mb-6">
                    <div class="mb-1">
                        <label class="text-gray-500 font-medium" for="image">
                            Фото
                        </label>
                    </div>
                    <div>
                        <input name="images[]" id="images" type="file" multiple value="{{ old('images') }}">
                        @error('images')
                            <div class="text-red-500">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                    <button class="bg-blue-500 rounded px-6 py-3 shadow text-white hover:bg-blue-400" type="submit">
                        Добавить
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
