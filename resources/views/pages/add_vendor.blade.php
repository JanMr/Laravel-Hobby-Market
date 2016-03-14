@extends('base')

@section('title')
    Dodaj Prodajlaca
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Dodaj Prodajalca</h1>
    </div>
@endsection

@section('content')
    <div class="col-sm-6 col-sm-offset-3">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="" method="post" class="form-horizontal">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name" class="col-sm-4 control-label">Ime</label>
                <div class="col-sm-8">
                    <input type="text" name="name" id="name" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="surname" class="col-sm-4 control-label">Priimek</label>
                <div class="col-sm-8">
                    <input type="text" name="surname" id="surname" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-4 control-label">E-mail</label>
                <div class="col-sm-8">
                    <input type="email" name="email" id="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="phone" class="col-sm-4 control-label">Telefon 031-123-456</label>
                <div class="col-sm-8">
                    <input type="text" name="phone" id="phone" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                    <button type="submit" class="btn btn-success btn-block">
                        <span class="glyphicon glyphicon-save"></span>
                        Shrani Podatke
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection