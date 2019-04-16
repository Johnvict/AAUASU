@extends('layouts.aauaites')

<title>AAUASU - My Grade Point</title>
@section('content')
    <h1 class="white"><b><span><img src="/images/aauasufist.png" alt="" height="100">My Grade Points</span></b></h1>
    <hr>
    <style>
        a:hover{
            text-decoration:none;
        }
    </style>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-3">
                <div class="well">
                </div>
                <div class="well">
                    <p><a href="#">Interests</a></p>
                    <p>
                        <span class="label label-default">News</span>
                        <span class="label label-primary">W3Schools</span>
                        <span class="label label-success">Labels</span>
                        <span class="label label-info">Football</span>
                        <span class="label label-warning">Gaming</span>
                        <span class="label label-danger">Friends</span>
                    </p>
                </div>
                <div class="alert alert-success fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <p><strong>Ey!</strong></p>
                    People are looking at your profile. Find out who.
                </div>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
                <p><a href="#">Link</a></p>
            </div>
            <div class="col-sm-7">

                @if(count($myGpa)>0)

                    @if($myGpa->finalCGPA == 0.01)
                        <div class="alert alert-warning">
                            <b>Yo Have Not Added Any Academic Records Yet</b><br><hr>
                            <a href="/my-courses/"><button type="button" class="btn btn-primary btn-xl"><b class="white">Add Your Courses & Results Here</b></button></a>
                            <hr></div>
                    @else
                        <div class="col col-md-6">
                            <div>
                                <div class="btn btn-info btn-sm"><b>100 Level 1st Semster GPA: @if($myGpa->gpa1001 == 0.01)
                                            Nill @else {{$myGpa->gpa1001}} @endif </b></div><br>
                                <div class="btn btn-success btn-sm"><b>100 Level 2nd Semster GPA: @if($myGpa->gpa1002 == 0.01)
                                            Nill @else {{$myGpa->gpa1002}} @endif </b></div><br>
                                <div class="btn btn-default btn-sm"> <b>100 Level CGPA: @if($myGpa->cgpa100 == 0.01)
                                            Nill @else {{$myGpa->cgpa100}} @endif</b></div><br>
                            </div><br>

                            <div>
                                <div class="btn btn-warning btn-sm"> <b>200 Level 1st Semster GPA: @if($myGpa->gpa2001 == 0.01)
                                            Nill @else {{$myGpa->gpa2001}} @endif</b></div><br>
                                <div class="btn btn-danger btn-sm"> <b>200 Level 2nd Semster GPA: @if($myGpa->gpa2002 == 0.01)
                                            Nill @else {{$myGpa->gpa2002}} @endif</b></div><br>
                                <div class="btn btn-default btn-sm"> <b>200 Level CGPA: @if($myGpa->cgpa200 == 0.01)
                                            Nill @else {{$myGpa->cgpa200}} @endif</b></div><br>
                            </div>
                        </div>

                        <div class="col col-md-6">
                            <div>
                                <div class="btn btn-info btn-sm"> <b>300 Level 1st Semster GPA: @if($myGpa->gpa3001 == 0.01)
                                            Nill @else {{$myGpa->gpa3001}} @endif</b></div><br>
                                <div class="btn btn-success btn-sm"> <b>300 Level 2nd Semster GPA: @if($myGpa->gpa3002 == 0.01)
                                            Nill @else {{$myGpa->gpa3002}} @endif</b></div><br>
                                <div class="btn btn-default btn-sm"> <b>300 Level CGPA: @if($myGpa->cgpa300 == 0.01)
                                            Nill @else {{$myGpa->cgpa300}} @endif</b></div><br>
                            </div><br>

                            <div>
                                <div class="btn btn-warning btn-sm"> <b>400 Level 1st Semster GPA: @if($myGpa->gpa4001 == 0.01)
                                            Nill @else {{$myGpa->gpa4001}} @endif</b></div><br>
                                <div class="btn btn-danger btn-sm"> <b>400 Level 2nd Semster GPA: @if($myGpa->gpa4002 == 0.01)
                                            Nill @else {{$myGpa->gpa4002}} @endif</b></div><br>
                                <div class="btn btn-default btn-sm"> <b>400 Level CGPA: @if($myGpa->cgpa400 == 0.01)
                                            Nill @else {{$myGpa->cgpa400}} @endif</b></div><br>
                            </div>
                        </div>

                        <div>
                            <div class="btn btn-danger btn-sm"> <b>500 Level 1st Semster GPA: @if($myGpa->gpa5001 == 0.01)
                                        Nill @else {{$myGpa->gpa5001}} @endif</b></div><br>
                            <div class="btn btn-primary btn-sm"> <b>500 Level 2nd Semster GPA: @if($myGpa->gpa5002 == 0.01)
                                        Nill @else {{$myGpa->gpa5002}} @endif</b></div><br>
                            <div class="btn btn-default btn-sm"> <b>500 Level CGPA: @if($myGpa->cgpa500 == 0.01)
                                        Nill @else {{$myGpa->cgpa500}} @endif</b></div><br>
                        </div><br><br>

                        <hr><div class="btn btn-primary btn-sm">
                            <b>FINAL CGPA: @if($myGpa->finalCGPA == 0.01)
                                    No Academic Records Found @else {{$myGpa->finalCGPA}} @endif</b><br>
                        </div><hr>
                        <div class="row">
                            <div class="col-sm-12 alert alert-info">

                                <div class="panel panel-default text-left">
                                    <div class="panel-body">
                                        <form action="{{ route('gpaPopulate') }}" method="post">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-success btn-xl"><b>POPULATE (Update) GPA RECORD</b></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @else
                    <div class="alert alert-warning">
                        <b>Yo Have Not Added Any Academic Records Yet</b><br><hr>
                        <a href="/my-courses/"><button type="button" class="btn btn-primary btn-xl"><b class="white">Add Your Courses & Results Here</b></button></a>
                        <hr></div>
                @endif




            </div>

            <div class="col-sm-2">
                <div class="thumbnail">
                    <p>Upcoming Events:</p>
                    <img src="paris.jpg" alt="Paris">
                    <p><strong>Paris</strong></p>
                    <p>Fri. 27 November 2015</p>
                    <button class="btn btn-primary">Info</button>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
                <div class="well">
                    <p>ADS</p>
                </div>
            </div>
        </div>
    </div>

@endsection