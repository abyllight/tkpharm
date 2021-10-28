@extends('layouts.app')
@section('content')
    <div id="news"><news></news></div>
@endsection
@section('js')
    new Vue({
        el: '#news'
    });
@endsection
