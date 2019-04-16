@extends('layouts.master')

<title>AAUASU Senate President</title>
@section('content')
    <h1 class="white"><b><span><img src="/images/aauasufist.png" alt="" height="60">Office of the Senate President</span></b></h1>
    <hr>

    <link rel="stylesheet" type="text/css" href="{{ url('css/offices.css') }}">


    <div class="container text-center">
        <div class="row">


            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-src">
                            <div class="panel-heading"><strong>Senate President</strong></div>
                            <div class="panel-body"><img src="/storage/offices/src1.jpg" class="img-responsive" alt="Image"></div>
                            <div class="panel-footer"><b>Awosika Ayodapo<i>(Ay-Infinite)</i></b></div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p class="about-src"><b class="h3">About The Senate President</b><br>
                            The Senate President serves the Union as the head of its Legislative Arm, whose responsibility
                            spans the interpretation of the Constitution of the Union at sittings of the SRC "in good faith".
                            Moreover, the importance of the Senate President to the Union is as that of the other arms of the
                            Union, who shall summon the sitting of the SRC and direct the proceedings of the SRC impartially.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
