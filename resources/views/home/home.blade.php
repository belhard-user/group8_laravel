@extends('layouts.main')

@section('content')

    @foreach($items->chunk(3) as $item)
        <div class="row">
            @foreach($item as $value)
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2>
                                <a style="color: white" href="{{ action('TestCarController@view', ['car' => $value->id]) }}">{{ $value->carName }}</a>
                            </h2>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <th>Цвет кузова</th>
                                    <th>Тип двигателя</th>
                                </tr>
                                <tr>
                                    <td><div class="item-color" style="background-color: {{ $value->color }};"></div></td>
                                    <td>{{ \App\Mods::$engineType[$value->engine_type] }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach

    {!! $items->render() !!}
@endsection


