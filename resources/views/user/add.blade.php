@extends('layouts.main')

@section('content')
    {!! Form::open(['route' => 'store.car']) !!}
    <div class="form-group">
        {!! Form::label('mark_id') !!}
        {{ Form::select('mark_id', $marksList, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {!! Form::label('mark_id') !!}
        {!! Form::input('color', 'color', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('engine_type') !!}
        {{ Form::select('engine_type', \App\Mods::$engineType, null, ['class' => 'form-control']) }}
    </div>
    
    <div class="form-group">
        {!! Form::label('box') !!}
        {{ Form::select('box', \App\Mods::$box, null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {!! Form::label('engine_value') !!}
        {{ Form::text('engine_value', null, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {!! Form::label('year') !!}
        {{ Form::date('year', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
    </div>

    <button class="btn btn-primary">Разместить</button>
    
    {!! Form::close() !!}
@endsection