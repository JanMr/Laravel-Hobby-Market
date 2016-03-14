@extends('base')

@section('title')
    Prodajalci pregled
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Naši Prodajalci</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8">
            @if(session('status'))
                <div class="alert alert-success">
                    <span class="glyphicon glyphicon-check"></span>
                    {{ session('status') }}
                </div>
            @endif
            <h2>Podatki o prodajalcih</h2>
            <br>
            @if(count($vendors)==0)
                <div class="well">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Trenutno v bazi ni shranjenih prodajalcev za vnos podatkov
                    klikni na gumb Dodaj prodajalca na desni strani
                </div>
            @else
                <table class="table table-responsive table-bordered">
                    <thead>
                        <tr class="glava">
                            <th>Ime</th>
                            <th>Priimek</th>
                            <th>E-mail</th>
                            <th>Telefon</th>
                            <th>Podrobnosti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($vendors as $vendor)
                            <tr>
                                <td>{{ $vendor->name }}</td>
                                <td>{{ $vendor->surname }}</td>
                                <td> {{ $vendor->email }}</td>
                                <td>{{ $vendor->phone }}</td>
                                <td>
                                    <a href="{{ route('vendor_details', ['id' => $vendor->id]) }}" class="btn btn-success">
                                        Podrobnosti
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="col-sm-4">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Dodaj prodajalca
                </div>
                <div class="panel-body">
                    <a href="{{ route('add_vendor') }}" class="btn btn-success">
                        <span class="glyphicon glyphicon-plus-sign"></span>
                        Dodaj Prodajalca
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection