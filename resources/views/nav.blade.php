<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">--}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{URL::to('js/app.js')}}"></script>

    <title>Car Navigation</title>

    <link rel="stylesheet" type="text/css" href={{ url('css/app.css') }}>


</head>
<Style>
    .containerback {
        border: solid 2px black;
        padding: 5px;
        background: rgba(0, 0, 0, .5);
        border-radius: 10px;
        box-shadow: 2px 2px 2px rgba(4, 0, 0, 0.5);
    }
    .white{
        color: white;
    }



    body{
        background: url('/images/index.jpg') no-repeat fixed center / cover;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
    }
    .white{
        color: white;
    }

</style>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Car-Navigation | Admin</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#">Clients</a></li>
            <li  class="active"><a href="#">Trace Car</a></li>
            <li><a href="#">Sort Navigations</a></li>
        </ul>
    </div>
</nav>

<div class="container">
    <div class="containerback">
        <h1 class="white"><b><span><img class="containerback" src="/images/car.jpg" alt="" height="100">             Trace Car</span></b></h1>
        <hr>

        <link rel="stylesheet" type="text/css" href="{{ url('css/offices.css') }}">


        <div class="container text-center">
            <div class="row">


                <div class="container">
                    <div class="row">
                        <div class="col-md-11">
                            <p class="about-sec" style="font-size:1.5em;">
                            Car Name: <i>Toyota Camry (2008 Model)</i><br>
                            Engine Number: <i>Toyoe875WD366619KL</i><br>
                            Car Present Location<br>
                            </p>
                            <img class="containerback" src="/images/google.jpg" alt="" height="300">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.footer')

</body>

</html>

