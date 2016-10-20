@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @forelse($names as $name)
                        @if($loop->first)
                            <li style="color: red">{{ $name }}</li>
                        @else
                            <li>{{ $name }}</li>
                        @endif
                    @empty
                        <p>Имен нету</p>
                    @endforelse
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@section('test')
    <p>this is a home page</p>
    @parent
@endsection


