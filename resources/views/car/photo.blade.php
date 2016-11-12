@extends('layouts.main')

@section('header.css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/basic.min.css') }}">
@stop

@section('content')
    @include('partials.uploadform', ['car' => $car])
    <hr>
    <a class="btn btn-large btn-primary" href="{{ action('TestCarController@view', ['car' => $car->id]) }}">На страницу с объявлением</a>
@stop

@section('script')
    <script src="{{ asset('js/dropzone.js') }}"></script>
@endsection