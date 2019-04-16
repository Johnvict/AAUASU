@extends('layouts.aauaites')

<title>AAUASU - My Grade Point</title>

@section('titleHere')
    My Grade Points
@endsection

@section('content')
    @if(count($myGpa)>0)

        @if($myGpa->finalCGPA == 0.01)
            <div class="alert alert-warning">
                <b>Yo Have Not Added Any Academic Records Yet</b><br><hr>
                <a href="/my-courses/"><button type="button" class="btn btn-primary btn-xl"><b class="white">Add Your Courses & Results Here</b></button></a>
            <hr></div>
        @else
            <div class="col col-md-6">
                <div>
                    <div class="btn btn-info btn-sm"><b>100 Level 1st Semester GPA: @if($myGpa->gpa1001 == 0.01)
                                Nill @else {{$myGpa->gpa1001}} @endif </b></div><br>
                    <div class="btn btn-success btn-sm"><b>100 Level 2nd Semester GPA: @if($myGpa->gpa1002 == 0.01)
                                Nill @else {{$myGpa->gpa1002}} @endif </b></div><br>
                    <div class="btn btn-default btn-sm"> <b>100 Level CGPA: @if($myGpa->cgpa100 == 0.01)
                                Nill @else {{$myGpa->cgpa100}} @endif</b></div><br>
                </div><br>

                <div>
                    <div class="btn btn-warning btn-sm"> <b>200 Level 1st Semester GPA: @if($myGpa->gpa2001 == 0.01)
                                Nill @else {{$myGpa->gpa2001}} @endif</b></div><br>
                    <div class="btn btn-danger btn-sm"> <b>200 Level 2nd Semester GPA: @if($myGpa->gpa2002 == 0.01)
                                Nill @else {{$myGpa->gpa2002}} @endif</b></div><br>
                    <div class="btn btn-default btn-sm"> <b>200 Level CGPA: @if($myGpa->cgpa200 == 0.01)
                                Nill @else {{$myGpa->cgpa200}} @endif</b></div><br>
                </div>
            </div>

            <div class="col col-md-6">
                <div>
                    <div class="btn btn-info btn-sm"> <b>300 Level 1st Semester GPA: @if($myGpa->gpa3001 == 0.01)
                                Nill @else {{$myGpa->gpa3001}} @endif</b></div><br>
                    <div class="btn btn-success btn-sm"> <b>300 Level 2nd Semester GPA: @if($myGpa->gpa3002 == 0.01)
                                Nill @else {{$myGpa->gpa3002}} @endif</b></div><br>
                    <div class="btn btn-default btn-sm"> <b>300 Level CGPA: @if($myGpa->cgpa300 == 0.01)
                                Nill @else {{$myGpa->cgpa300}} @endif</b></div><br>
                </div><br>

                <div>
                    <div class="btn btn-warning btn-sm"> <b>400 Level 1st Semester GPA: @if($myGpa->gpa4001 == 0.01)
                                Nill @else {{$myGpa->gpa4001}} @endif</b></div><br>
                    <div class="btn btn-danger btn-sm"> <b>400 Level 2nd Semester GPA: @if($myGpa->gpa4002 == 0.01)
                                Nill @else {{$myGpa->gpa4002}} @endif</b></div><br>
                    <div class="btn btn-default btn-sm"> <b>400 Level CGPA: @if($myGpa->cgpa400 == 0.01)
                                Nill @else {{$myGpa->cgpa400}} @endif</b></div><br>
                </div>
            </div>

            <div>
                <div class="btn btn-danger btn-sm"> <b>500 Level 1st Semester GPA: @if($myGpa->gpa5001 == 0.01)
                            Nill @else {{$myGpa->gpa5001}} @endif</b></div><br>
                <div class="btn btn-primary btn-sm"> <b>500 Level 2nd Semester GPA: @if($myGpa->gpa5002 == 0.01)
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

@endsection