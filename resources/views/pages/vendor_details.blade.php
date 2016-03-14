@extends('base')

@section('title')
    Prodajalec - {{ $vendor->name }} {{ $vendor->surname }}
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Prodajalec podrobno</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6">
            <div class="well">
                <h3>{{ $vendor->name }} {{ $vendor->surname }}</h3>
                <p>
                    <span class="krepko">E pošta:</span>  {{ $vendor->email }}
                </p>
                <p>
                    <span class="krepko">Telefon: </span> {{ $vendor->phone }}
                </p>
                <hr>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
                    Prodaja skupaj
                </button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Skupna vrednost prodaje</h4>
                            </div>
                            <div class="modal-body">
                                <p class="lg">
                                    {{ $total  }} EUR
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                    Zapri
                                </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-6">
            <h3 class="sredinsko">Skupna vrednost prodaje po mesecih</h3>
            <br>
            @if(count($sales) == 0)
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Trenutno ni zabelženih  podatkov o prodaji za tega
                    prodajalca
                </div>
            @else
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr class="glava">
                        <th>Mesec </th>
                        <th>Prodaja Skupaj €</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($monthSales as $month => $sale)
                        <tr>
                            <td>{{$month}}</td>
                            <td>{{ $sale }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif

        </div>
    </div>
    <br>
    <div class="row">
        <h3 class="sredinsko"> Podatki o prodaji </h3>
        <br>
        <div class="col-sm-8 col-sm-offset-2">
            @if(count($sales) == 0)
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Trenutno ni zabelženih  podatkov o prodaji za tega
                    prodajalca
                </div>
            @else
                <table class="table table-responsive table-bordered table-striped">
                    <thead>
                        <tr class="glava">
                            <th>Datum</th>
                            <th>Izdelek</th>
                            <th>Količina</th>
                            <th>Cena/Em</th>
                            <th>Vrednost</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sales as $sale)
                            <tr>
                                <td>{{ $sale->sale_date }}</td>
                                <td>
                                    @foreach($sale->products as $product)
                                        {{ $product->name }}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sale->products as $product)
                                        {{ $product->pivot->quantity }}
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($sale->products as $product)
                                        {{ $product->unit_price }}
                                    @endforeach
                                </td>
                                <td>{{ $sale->sum_total }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif

        </div>
    </div>
@endsection