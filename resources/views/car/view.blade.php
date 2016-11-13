@extends('layouts.main')

@section('header.css')
    @parent
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/basic.min.css') }}">
@stop

@section('script')
    <script src="{{ asset('js/dropzone.js') }}"></script>
@endsection


@section('content')
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    @if(! $car->photos->isEmpty())
                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="/car_image/{{ $car->photos[0]->path }}" /></div>
                        </div>
                        @if($car->photos->count() > 1)
                            <ul class="preview-thumbnail nav nav-tabs">
                                @foreach($car->photos as $photo)
                                <li><a data-target="#pic-1" data-toggle="tab"><img src="/car_image/{{ $photo->path }}" /></a></li>
                                @endforeach
                            </ul>
                        @endif
                    @endif

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title">{{ $car->car_name }}</h3>

                    <h5 class="sizes">Пользователь:
                        <span class="size" data-toggle="tooltip" title="small">{{ $car->owner->email }}</span>
                    </h5>
                    <h5 class="colors">Цвет:
                        <div style="width: 40px; height: 40px; background-color: {{ $car->color }};"></div>
                    </h5>
                    <div class="action cart">
                        {{ Form::open(['route' => ['cart', 'id' => $car->id], 'method' => 'PUT' ]) }}
                            <button class="add-to-cart btn btn-default" type="submit">add to cart</button>
                        {{ Form::close() }}
                        <button class="add-to-cart btn btn-default" id="ajax" type="button">test ajax</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        @can('upload-photo', $car)
            @include('partials.uploadform', ['car' => $car])
        @endcan
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
    <script>
        $("#ajax").on('click', function(){
            $.ajax({
                url: '/shop/cart'
            }).done(function(responce){
                var content = $('.cart');
                for(var prop in responce){
                    $('<li>', {
                        text: responce[prop].name
                    }).appendTo(content);
                }
                // console.log(responce);
            }).error(function(){

            });
        });
    </script>
@stop