@extends('layouts.master')

<title>AAUASU Sports Director</title>

@section('content')
    <h1 class="white"><b><span><img src="/images/aauasufist.png" alt="" height="60">Office of the Director of Sports</span></b></h1>
    <hr>

    <link rel="stylesheet" type="text/css" href="{{ url('css/offices.css') }}">


    <div class="container text-center">
        <div class="row">


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-sec">
                            <div class="panel-heading"><strong>Sports Director</strong></div>
                            <div class="panel-body"><img src="/storage/offices/009.jpg" class="img-responsive" alt="Image"></div>
                            <div class="panel-footer"><b>Olisa Okanlawon<i> (Holysir)</i></b></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="about-sec"><b class="h3">About The Sports Director</b><br>
                            Sports and games are some inevitable parts of life which brings different people together, and
                            especially in a University Community which the Students Union desires as one of its topmost
                            priorities, bringing about necessity for a Sports Director, an outstanding Sportsman, an inevitable
                            <b>"Legal Dribbler"</b>, a leader whose primary objective is to maintain the growth of various
                            Sports and games among students on campus.
                            <br><br>
                            The Director of Sports however majors in the coordination of games and sporting activities of the Union.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
