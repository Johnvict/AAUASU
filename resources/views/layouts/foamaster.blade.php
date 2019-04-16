<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
        <script src="../../ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href={{ url('css/app.css') }}>
    </head>

    <body>

    @include('includes.foanavbar')



        <style>
        .contain {
            position: center;
            border:1px solid gray;
            border-radius: 12px;
            background-color: CC66FF;
            marging: 3px 0 3px 0;
            
        }

        .co nt {
            margin: 0;
            border: 1px solid red;
            width: 10%;
            height: 10%;
        }

        .item{
            border: 1px solid gray;
            border-radius: 10px;
        }

        .col-sm-8, .col-sm-2 {
            marg in: 0px 0px 0px 0px;
            bor der:1px solid gray;
            padding: 0 0 0 0;
        }

        .col-sm-2 .round-right {
            border-radius: 0 0 15px 0;
        }
        .col-sm-2 .round-left {
            border-radius: 0 0 0 15px;
        }
        body {
            background-color: white;
        }
        .carousel-inner {
            position: relative;
            width: 850px;
            width: 350px;
            overflow: hidden;
        }
        .carousel {
            position: relative;
        }
</style>

        <div class="container contain">
            <div class="row">
                <div class="cont">
                    <div class="col-sm-2">
                        <img src="/images/slide3.jpg" class="img-rounded round-right" style="width:100%" alt="Image">
                </div>
                </div>
                <div class="col-sm-8">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="/images/slide1111.jpg" alt="Image">
                            </div>

                            <div class="item">
                                <img src="/images/slide2222.jpg" alt="Image">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>                
            <div class ="cont">
                <div class="col-sm-2">
                    <img src="/images/aauafoa.jpg" class="img-rounded round-left" style="width:100%" alt="Image">
                </div>
            </div>

            </div>
        </div>
            <!-- The Body of other children pages STARTS here -->
            </div>
                <div class="container">
                    @yield('content')
                </div>
            </div>
            

        <hr style="margin: 10px 0 0 0;">
        <div class="container text-center">
            <h3 style="margin: 0px; pading: 0px;">Sponsored & Supported by:</h3>
        <br>
        <div class="row">
            <div class="col-sm-1">
                <img src="/images/sponsors/1.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-1">
                <img src="/images/sponsors/2.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-1">
                <img src="/images/sponsors/3.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-1">
                <img src="/images/sponsors/4.png" class="img-responsive" style="width:100%" alt="Image">
            </div> 
            <div class="col-sm-1">
                <img src="/images/sponsors/5.png" class="img-responsive" style="width:100%" alt="Image">
            </div>     
            <div class="col-sm-1">
                <img src="/images/sponsors/6.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
            <div class="col-sm-1">
                <img src="/images/sponsors/7.png" class="img-responsive" style="width:100%" alt="Image">
            </div>
        </div>
        </div>


            @include('includes.footer')
        </body>
            

</html>
