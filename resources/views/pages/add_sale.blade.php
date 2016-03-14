@extends('base')

@section('title')
    Nova prodaja
@endsection

@section('page-heading')
    <div class="page-header">
        <h1 class="sredinsko">Vnos Prodaje</h1>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <form action="" method="post" class="form-horizontal">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="sale_date" class="col-sm-4 control-label"> Prodaja Datum čas</label>
                    <div class="col-sm-8">
                        <input type="datetime-local" name="sale_date" id="sale_date" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="vendors" class="control-label col-sm-4">Prodajalec</label>
                    <div class="col-sm-8">
                        <select name="vendors[]" id="vendors" class="form-control">
                            @foreach($vendors as $vendor)
                                <option value="{{ $vendor->id }}"> {{ $vendor->name }} {{ $vendor-> surname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="customers" class="control-label col-sm-4">Kupec</label>
                    <div class="col-sm-8">
                        <select name="customers[]" id="customers" class="form-control">
                            @foreach($customers as $customer)
                                <option value="{{ $customer->id }}"> {{ $customer->name }} {{ $customer-> surname }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="products" class="control-label col-sm-4">Izdelek</label>
                    <div class="col-sm-8">
                        <select name="products[]" id="products" class="form-control">
                            @foreach($products as $product)
                                <option value="{{ $product->id }}"> {{ $product->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="quantity" class="col-sm-4 control-label">Količina</label>
                    <div class="col-sm-8">
                        <input type="text" name="quantity" id="quantity" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-4">
                        <button type="submit" class="btn btn-success">
                            <span class="glyphicon glyphicon-save"></span>
                            Shrani Podatke
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection