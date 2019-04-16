@extends('layouts.aauaites')
<title>AAUAITE - Edit Profile</title>
@section('titleHere')
    Edit Profile
@endsection
@section('content')

    <style type="text/css">
        .profile-img {
            max-width: 150px;
            border: 5px solid #fff;
            border-radius: 100%; //For a round-shaped image
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);

        }
        .smallbody{
            border: 2px solid gray;
            background: white;
            border-radius: 20px;
        }
    </style>

    <div class="container">
        <div class ="row">
            <div>
                <span class="badge badge-success"><h4>Edit Profile Details</h4></span>
                    <div class="badge">
                        <form method="post" action="{{url('/profile/'.Auth::user()->id)}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <br><br>
                            @if(session('error') != null)
                                <div class="alert alert-danger">
                                    <b>{{session('error')}}</b>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" value="{{Auth::user()->Name}}" name="Name" placeholder="Enter your name" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        <label for="Faculty">Faculty:</label>
                                        <select value="{{old('Faculty')}}" name="Faculty" class="form-control" id="sel1">
                                            <option value="">Select Faculty</option>
                                            <option value="Agriculture">Agriculture</option>
                                            <option value="Arts">Arts</option>
                                            <option value="Education">Education</option>
                                            <option value="Law">Law</option>
                                            <option value="Science">Science</option>
                                            <option value="Social & Management Sciences">Social & Management Sciences</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="dept">Department:</label>
                                        <input type="text" value="{{Auth::user()->Department}}" name="Department" placeholder="Enter your department" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Username:</label>
                                        <input type="text" value="{{Auth::user()->Username}}" name="Username" placeholder="Enter your department" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Choose Profile Picture:</label>
                                        <input type="file" value="{{Auth::user()->Avatar}}" name="Avatar" class="btn btn-danger">
                                    </div>
                                </div>
                                <div class="col col-md-6">
                                    <div class="form-group">
                                        <label for="dept">Phone Number:</label>
                                        <input type="text" value="{{Auth::user()->PhoneNumber}}" name="PhoneNumber" placeholder="Enter your department" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Level:</label>
                                        <input type="text" value="{{Auth::user()->Level}}" name="Level" placeholder="Enter your department" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">About:</label>
                                        <input type="text" value="{{Auth::user()->About}}" name="About" placeholder="Enter your department" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="dept">Post Held:</label>
                                        <input type="text" value="{{Auth::user()->PostHeld}}" name="PostHeld" placeholder="Enter your department" class="form-control">

                                    </div>
                                    <br><button type="submit" class="btn btn-primary btn-right">Update Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>

            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>


@endsection