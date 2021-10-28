@extends('layouts.app')
@section('content')
    <div id="products"><products></products></div>
@endsection
@section('js')
    new Vue({
        el: '#products'
    });
@endsection
