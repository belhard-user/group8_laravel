@extends('layouts.main')


@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <form action="" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="email">Email</label>
            <input value="{{ old('email') }}" name="email" type="text" class="form-control" id="email" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input value="{{ old('name') }}" name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="age">Age</label>
            <input value="{{ old('age') }}" name="age" type="text" class="form-control" id="age" placeholder="Age">
        </div>

        <button class="btn">send</button>
    </form>

@stop