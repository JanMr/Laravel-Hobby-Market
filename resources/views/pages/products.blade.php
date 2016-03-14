@extends('base')

@section('title')
    Izdelki
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko"> Dobavitelji izdelki Zaloge</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h2>Izdelki pregled vseh </h2>
            <br>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8">
            @if(count($products) == 0)
                @if(session('status'))
                    <div class="alert alert-success">
                        <span class="glyphicon glyphicon-check"></span>
                        {{ session('status') }}
                    </div>
                @endif
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Tretnutno v bazi ni shranjenih izdelkov

                </div>
            @else
                <table class=" table table-responsive table-bordered table-striped">
                    <thead>
                        <tr class="glava">
                            <th># id</th>
                            <th>Naziv</th>
                            <th>EM</th>
                            <th>Podrobnosti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td> {{$product->packingUnit->label}}</td>
                                <td><a href="{{ route('product_details', ['id' => $product->id]) }}" class="btn btn-success">Podrobnosti</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Bližnjice
                </div>
                <div class="panel-body">
                    <h3> Vnesi Podatke o izdelku </h3>
                    <p>
                        <a href="{{ route('add_product') }}" class="btn btn-success">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            Dodaj podake  izdelku
                        </a>
                    </p>

                </div>
            </div>
        </div>
    </div>

    


@endsection