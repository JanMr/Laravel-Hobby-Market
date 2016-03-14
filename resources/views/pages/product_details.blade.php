@extends('base')

@section('title')
    Izdelek podrobno
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Podrobnosti o izdelku</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div class="well">
                <p>
                    <h3> {{$product->name}} </h3>
                <hr>
                </p>
                <p>
                    <span class="krepko">Enota mere: </span> {{ $product->packingUnit->name }}
                    <span class="krepko"> Cena/Em: </span> {{$product->unit_price}} <span class="krepko">EUR</span>
                </p>
                <p>
                    <span class="krepko"> Opis: </span> <br>
                    {{ $product->description }}
                </p>
                <hr>
                <p>
                    <span class="krepko">Dobavitelj:  </span> {{ $product->supplier->name }}
                </p>

                <p class="sredinsko">
                    <img src="{{$product->img_url}}" alt="slika_izdelka" class="img img responsive img-rounded imgIzdelek">
                </p>
            </div>
        </div>
    </div>

@endsection