<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>AAUA Students Union Official Website</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">


</head>

<Style>
    .containerback {
        border: solid 2px black;
        padding: 5px;
        background: rgba(0, 0, 0, .5);
        border-radius: 10px;
        box-shadow: 2px 2px 2px rgba(4, 0, 0, 0.5);
    }
    body{
        background: url('/images/aauaback.jpg') no-repeat fixed center / cover;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 120%;
    }
    .white{
        color: white;
    }
    .footerContainer{
        margin-top: 10%;
        border: 1px solid white;
        border-radius: 15px 15px 0 0;
        padding: 5px 0 0 0;
        width: 100%;
        text-align: center;
        font-family: "Lucida Handwriting",forte, Raleway, "Helvetica Neue",Helvetica,Arial,sans-serif;
        color: white;
        background: black;
        opacity: .9;
    }

    @media(max-width: 600px){
        body{
            background: url('/images/aauaback.jpg') no-repeat fixed center / cover;
            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 120%;
        }
    }

    @media(max-width: 1200px){
        body{
            background: url('/images/aauaback2.jpg') no-repeat fixed center / cover;
            -webkit-background-size: 100%;
            -moz-background-size: 100%;
            -o-background-size: 100%;
            background-size: 120%;
        }
    }

</style>

<body>
    @include('includes.navbar')

        <div class="container">
            <div class="containerback">
                @yield('content')
                <hr>
                <footer class="footerContainer text-center">
                    <p>&copy {{date('Y')}} Adekunle Ajasin University Akungba Students Union<br>
                        Designed by <img src="/images/thePrime.png"></b> <span class="glyphicon glyphicon-phone-alt"> 08108307073, 07084677075</span></p>
                </footer>
            </div>
        </div>
    {{--@include('includes.footer')--}}
    <div style="margin: 30px; "></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>
