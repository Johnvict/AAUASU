<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel AJAX CRUD Example</title>
    @yield('head')
    <link rel="stylesheet" type="text/css" href={{ url('css/app.css') }}>
    @yield('css')
</head>
<body>
    <nav class="navbar fixed-top bg-info">
        <a href="/posts">Laravel Video Tutorials</a>
        @yield('nav')
    </nav>

    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    @yield('js')
</body>
</html>