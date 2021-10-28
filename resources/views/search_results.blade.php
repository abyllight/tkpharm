@extends('layouts.app')
@section('content')
    <div id="search_results"><search-results></search-results></div>
@endsection
@section('js')
    new Vue({
        el: '#search_results'
    });
@endsection
