<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Product</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/hover.css')}}"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div  class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <header>
        <div class="jumbotron">
            <h1>Demo Ecommerce</h1>
        </div>
    </header>
    @yield('content')
        <footer>
            <div id="copyright text-right">© Copyright 2016 DemoEcommerce</div>
        </footer>
    </div>
        <div class="col-sm-2"></div>
    </div>

</div>

</body>
</html>