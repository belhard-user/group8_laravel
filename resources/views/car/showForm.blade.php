@extends('layouts.main')

@section('title', 'Добавление автомобиля!!!')


@section('content')
    <form action="{{ route('add-brands-post') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{ \Carbon\Carbon::now() }}" name="created_at">
        <input type="hidden" value="{{ \Carbon\Carbon::now() }}" name="updated_at">
        <div class="form-group">
            <label for="title">Название авто</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Название авто">
        </div>
        <button class="btn btn-warning">Добавить</button>
    </form>
@stop