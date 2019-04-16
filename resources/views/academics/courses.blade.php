@extends('layouts.aauaites')

<title>AAUASU - My Courses</title>
@section('titleHere')
    My Courses
@endsection
@section('content')
    <div class="col col-md-12 alert alert-info">
        @if(session('course'))
            <p>A New Course Added Successfully</p>
        @endif
        <b>Click Buttons below to see Courses Added</b>
    </div>
    <div class="col col-md-6">
        {{--100 LEVEL COURSES--}}
        <div>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal100"><b>100 Level Courses</b></button>

            {{--Modal--}}
            <div class="modal fade" id="Modal100" role="dialog">
                <div class="modal-dialog">

                    {{--Modal content--}}
                    @include('academics.course100')

                </div>
            </div>
        </div><br>

        {{--200 LEVEL COURSES--}}
        <div>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal200"><b>200 Level Courses</b></button>

            {{--Modal--}}
            <div class="modal fade" id="Modal200" role="dialog">
                <div class="modal-dialog">

                    {{--Modal content--}}
                    @include('academics.course200')

                </div>
            </div>
        </div>
    </div>

    <div class="col col-md-6">
        {{--300 LEVEL COURSES--}}
        <div>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal300"><b>300 Level Courses</b></button>

            {{--Modal--}}
            <div class="modal fade" id="Modal300" role="dialog">
                <div class="modal-dialog">

                    {{--Modal content--}}
                    @include('academics.course300')

                </div>
            </div>
        </div><br>

        {{--400 LEVEL COURSES--}}
        <div>
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal400"><b>400 Level Courses</b></button>

            {{--Modal--}}
            <div class="modal fade" id="Modal400" role="dialog">
                <div class="modal-dialog">

                    {{--Modal content--}}
                    @include('academics.course400')

                </div>
            </div>
        </div>
    </div>

    {{--500 LEVEL COURSES--}}
    <div>
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Modal500"><b>500 Level Courses</b></button>

        {{--Modal--}}
        <div class="modal fade" id="Modal500" role="dialog">
            <div class="modal-dialog">

                {{--Modal content--}}
                @include('academics.course500')

            </div>
        </div>
    </div>

    <br><br>

    <div class="row">
        <div class="col-sm-12 alert alert-info">

            <div class="panel panel-default text-left">
                <div class="panel-body">
                    <div class="row">
                        <div class="col col-md-6">
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCourseModal">
                                <b>ADD A NEW COURSE</b>
                            </button>
                        </div>

                        @if(count($myCourses) > 0)
                            <div class="col col-md-6">
                                <form action="{{ route('gpaPopulate') }}" method="post">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-success btn-sm col-md-offset-7"><b>POPULATE GPA</b></button>
                                </form>
                            </div>
                        @else
                        @endif
                    </div>

                    {{--Modal For Course Adding--}}
                    <div class="modal fade" id="addCourseModal" role="dialog">
                        <div class="modal-dialog">

                            {{--Modal content--}}
                            <div class="modal-content">
                                <div class="modal-header alert alert-info">

                                    <h4 class="modal-title"><b>ADD A NEW COURSE</b></h4>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('/my-courses/'.Auth::User()->id)}}">
                                        {{ csrf_field() }}
                                        <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="courseCode">Course Code</label>
                                                <input id="courseCode" type="text" name="courseCode" placeholder="CSC 419" class="form-control">
                                                @if ($errors->has('courseCode'))
                                                    <span class="help-block"><strong>{{ $errors->first('courseCode') }}</strong></span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="dept">Course Unit:</label>
                                                <input type="number" name="courseUnit" placeholder="Course Unit" class="form-control">
                                                @if ($errors->has('courseUnit'))
                                                    <span class="help-block"><strong>{{ $errors->first('courseUnit') }}</strong></span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="courseGrade">Grade (choose N/A for not available)</label>
                                                <select name="courseGrade" class="form-control">
                                                    <option value="">Grade</option>
                                                    <option value="NA">N/A</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                                @if ($errors->has('courseCode'))
                                                    <span class="help-block"><strong>{{ $errors->first('courseCode') }}</strong></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col col-md-6">
                                            <div class="form-group">
                                                <label for="dept">Course Level</label>
                                                <select name="courseLevel" class="form-control">
                                                    <option value="">Level</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                    <option value="300">300</option>
                                                    <option value="400">400</option>
                                                    <option value="500">500</option>
                                                </select>
                                                @if ($errors->has('courseCode'))
                                                    <span class="help-block"><strong>{{ $errors->first('courseCode') }}</strong></span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="dept">Course Semester</label>
                                                <select name="courseSemester" class="form-control">
                                                    <option value="">Semester</option>
                                                    <option value="1">1st</option>
                                                    <option value="2">2nd</option>
                                                </select>
                                                @if ($errors->has('courseCode'))
                                                    <span class="help-block"><strong>{{ $errors->first('courseCode') }}</strong></span>
                                                @endif
                                            </div><br>
                                        </div>
                                        <button type="submit" class="btn btn-primary col-md-offset-2">Add Course</button>
                                    </form>
                                </div>
                                <div class="modal-footer alert-info">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


            </div>
            </div>
        </div>
    </div>
@endsection