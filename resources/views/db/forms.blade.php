@extends('layouts.main')

@section('content')
    <form method="post" action="{{ action('DBController@postForm') }}">
        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
        {{ csrf_field() }}
        <input type="hidden" name="created_at" value="{{ \Carbon\Carbon::now() }}">
        <input type="hidden" name="updated_at" value="{{ \Carbon\Carbon::now() }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input name="email" type="text" class="form-control" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input name="age" type="text" class="form-control" id="age" placeholder="Age">
        </div>

        <button class="btn btn-primary">click</button>
    </form>
@endsection