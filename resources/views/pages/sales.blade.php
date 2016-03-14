@extends('base')

@section('title')
    Pordaja
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Prodaja - Dashboard</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h2>Podatki o posameznih prodajah</h2>
            <br>
        </div>
    </div>
    <div class="row">
        <!-- session messages -->
        <div class="col-sm-8">
            @if(session('status'))
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-check"></span>
                    {{session('status')}}
                </div>
            @endif
            <!-- podatki o prodajah vsi posamezno -->
            @if(count($sales) == 0)
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Trenutno v bazi ni zabeleženih podatkov o prodaji
                </div>
            @else
            <table class="table table-responsive table-bordered table-striped">
                <thead>
                    <tr class="glava">
                        <th>Datum prodaje</th>
                        <th>Prodajalec</th>
                        <th>Izdelek</th>
                        <th>Cena/Em</th>
                        <th>Količina</th>
                        <th>Vrednost</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            <td>{{ $sale->sale_date }}</td>
                            <td><a href="{{ route('vendor_details',['id' => $sale->vendor->id]) }}">{{ $sale->vendor->name }} {{ $sale->vendor->surname }}</a></td>
                            <td>
                                @foreach($sale->products as $product)
                                    {{ $product->name }}
                                @endforeach
                            </td>
                            <td>
                                @foreach($sale->products as $product)
                                    {{ $product->unit_price }}
                                @endforeach
                            </td>
                            <td>
                                @foreach($sale->products as $product)
                                    {{ $product->pivot->quantity }}
                                @endforeach
                            </td>
                            <td>
                                {{ $sale->sum_total }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
                <h2 class="sredinsko">Podtki o kupcih </h2>
                <br>
            <!-- podatki o kupcih tabela -->
            @if(count($customers) == 0)
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Trenutno v bazi ni shranjenih podatkov o kupcih
                </div>
            @else
                <table class=" table table-responsive table-bordered table-striped">
                    <thead>
                    <tr class="glava">
                        <th>Ime</th>
                        <th>Priimek</th>
                        <th>E-mail</th>
                        <th>Naslov</th>
                        <th>Poštna Številka</th>
                        <th>Kraj</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->surname }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{$customer->address}}</td>
                            <td>{{$customer->zip}}</td>
                            <td>{{$customer->city}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <!-- Stranski meni -->
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Bližnjice
                </div>
                <div class="panel-body">
                    <h3>Vnos prodaje</h3>
                    <p>
                        <a href="{{ route('add_sale') }}" class="btn btn-success">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            Vnos prodaje
                        </a>
                    </p>
                    <h3>Vnesi novega Kupca</h3>
                    <p>
                        <a href="{{route('add_customer')}}" class="btn btn-success">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            Dodaj novega kupca
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>
@endsection