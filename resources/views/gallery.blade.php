@extends('layouts.app')
@section('content')
    <div id="gallery"><gallery></gallery></div>
@endsection
@section('js')
    new Vue({
        el: '#gallery'
    });
@endsection
