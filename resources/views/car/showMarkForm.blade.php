@extends('layouts.main')

@section('title', 'Добавление Марки!!!')


@section('content')
    <form action="{{ route('add-mark-post') }}" method="post">
        {{ csrf_field() }}

        <select name="brand_id" class="form-control">
            @foreach($brandList as $brandId => $brand)
                <option value="{{ $brandId }}">{{ $brand }}</option>
            @endforeach
        </select>

        <div class="form-group">
            <label for="title">Название марки</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Название авто">
        </div>
        <button class="btn btn-warning">Добавить</button>
    </form>
@stop