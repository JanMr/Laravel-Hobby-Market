@extends('base')

@section('title')
Pregled prodaje
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Pregled prodaje v trgovini Hobby Market</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Seznam prodajalcev
                </div>
                <div class="panel-body">
                    <ul>
                        @foreach($vendors as $vendor)
                            <li>{{ $vendor->name }} {{ $vendor->surname }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="well">
                <p>
                    <span class="glyphicon glyphicon-info-sign"></span>
                    Na tem mestu bo pregled prodaje v trgovini Hobby Market
                </p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    Info
                </div>
            </div>
        </div>
    </div>
@endsection