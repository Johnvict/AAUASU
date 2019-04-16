<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>AAUA Students' Union</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

</head>

<style>
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
    .container {
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 540px;
        }
        body{
            background: url('/images/aauaback2.jpg') no-repeat fixed center / cover;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 720px;
        }
        body{
            background: url('/images/aauaback2.jpg') no-repeat fixed center / cover;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 960px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1140px;
        }
        body{
            background: url('/images/aauaback.jpg') no-repeat fixed center / cover;
        }
    }

    .container-fluid {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 15px;
        padding-left: 15px;
        width: 100%;
    }
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
    .imag{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 10%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }

    body{
        background: url('/images/aauaback.jpg') no-repeat fixed center / cover;
        -webkit-background-size: 100%;
        -moz-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
    }
</style>

<body id="body">
        @yield('title')

        <div class="container">
            @include('includes.aauaitesnav')

            <div class="containerback">
                <h1 class="white"><b><span><img src="/images/aauasufist.png" alt="" height="60">@yield('titleHere')@yield('userPix')</span></b></h1>
                    <hr>
                    <style>
                        a:hover{
                            text-decoration:none;
                        }
                    </style>

                    <div class="container text-center">
                        <div class="row">

                            <div class="col-sm-7" id="contentTop" style="display: none">
                                {{--@yield('content')--}}
                            </div>

                            <div class="col-sm-3">
                                <div class="thumbnail">
                                </div>
                                <div class="thumbnail">
                                    <img src="/images/senate1.jpg" style="width: 200px;" alt=""/>
                                </div>
                                <div class="fade-in">
                                @if(count($news) > 0)
                                    @foreach($news as $new)
                                        @if($new->show_status == "1")
                                            <div class="alert fade-in">
                                                <hr>
                                                @include('admin.newsToShow')
                                            </div>
                                        @endif
                                    @endforeach
                                @endif
                                </div>
                            </div>

                            <div class="col-sm-7" id="contentMid" style="display: block">
                                @yield('content')
                            </div>

                            <div class="col-sm-2">
                                <div class="thumbnail">
                                </div>

                                <div class="row">
                                    @if(count($materialArray) > 0)
                                        @foreach($materialArray as $materials)
                                            <div class="alert fade-in">
                                                @include('materials.fileForWelcome')
                                            </div>
                                        @endforeach
                                    @endif
                                </div>

                                <div class="thumbnail">
                                    <p>ADVERTS HERE</p>
                                </div>
                                <div class="thumbnail">
                                    <p>ADVERTS HERE</p>
                                </div>
                                <div class="thumbnail">
                                    <p>ADVERTS HERE</p>
                                </div>
                                <div class="thumbnail">
                                    <p>ADVERTS HERE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                <hr>

                <footer class="footerContainer text-center">
                    <p>&copy {{date('Y')}} Adekunle Ajasin University Akungba Students Union<br>
                    Designed by <img src="/images/thePrime.png"></b> <span class="glyphicon glyphicon-phone-alt"> 08108307073, 07084677075</span></p>
                </footer>

            </div>
        </div>







        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/like.js') }}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>


            function ready(callbackFunction){
                if(document.readyState != 'loading')
                    callbackFunction(event)
                else
                    document.addEventListener("DOMContentLoaded", callbackFunction)
            }
            ready(event => {
                console.log('DOM is ready.');
                var scrn = screen.width;
                if(scrn <= 768){
                    document.getElementById("contentTop").style.display = "block";
                    document.getElementById("contentMid").style.display = "none";
                }
                else{
                
                    {{--document.getElementById("contentTop").innerHTML ="@yield('content')";--}}
                    var div = document.getElementById('contentTop');

                    {{--div.innerHTML += "@yield('content')";--}}
//                    document.getElementById("body").style.background = "url('/images/aauaback.jpg') no-repeat fixed center / cover";
                }

            });

            CKEDITOR.replace( 'article-ckeditor' );
        </script>
        {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
</body>

</html>