<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title') </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .navbar-logo {
            background-image: url('/images/sulogo33.png');
            width:220px;
            height:50px;
        }

        .navbar-logo:hover {
            background-image: url('/images/aauasu.png');
            width:220px;
            height:50px;
        }
        body{
            background-color: white;
        }
    </style>
</head>
<body>
<div id="app">
    <br>
    <div class="container">
        @include('includes.adminNav')
        <hr>
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
