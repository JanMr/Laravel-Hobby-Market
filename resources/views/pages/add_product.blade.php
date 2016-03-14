@extends('base')

@section('title')
    Nov izdelek
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko"> Dodaj podatke o izdelku</h1>
    </div>
@endsection

@section('content')
    <div class="row">
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
                    <label for="name" class="col-sm-4 control-label">Naziv</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="col-sm-4 control-label">Opis</label>
                    <div class="col-sm-8">
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">

                        </textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="packing_units" class="col-sm-4 control-label">Enota mere</label>
                    <div class="col-sm-8">
                        <select name="productUnits[]" id="packing_units" class="form-control">
                            @foreach($packingUnits as $packingUnit)
                                <option value="{{ $packingUnit->id }}">{{ $packingUnit->name }}  -  {{ $packingUnit->label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="unit_price" class="col-sm-4 control-label">Cena/EM €</label>
                    <div class="col-sm-8">
                        <input type="text" name="unit_price" id="unit_price" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="suppliers" class="col-sm-4 control-label">Dobavitelj</label>
                    <div class="col-sm-8">
                        <select name="suppliers[]" id="suppliers" class="form-control">
                            @foreach($suppliers as $supplier)
                                <option value="{{ $supplier->id }}">{{ $supplier->name }}  </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="img_url" class="col-sm-4 control-label">Url slike</label>
                    <div class="col-sm-8">
                        <input type="text" name="img_url" id="img_url" class="form-control">
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
    </div>

@endsection