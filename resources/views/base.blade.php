<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap linki -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- moj css -->
    <link rel="stylesheet" type="text/css" href="/css/theme.css">

    <title>Hobby Market | @yield('title')</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav_zg">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">Hobby Market</a>
        </div>
        <div class="colapse navbar-collapse" id="nav_zg">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Prodaja</a></li>
                <li><a href="{{route('products')}}">Izdelki</a></li>
                <li><a href="{{route('vendors')}}">Prodajalci</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @yield('page-heading')
    </div>
    @yield('content')
</div>

</body>
</html>