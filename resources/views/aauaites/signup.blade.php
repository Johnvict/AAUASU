@extends('layouts.master')  

<title>Signup New User</title>
@section('content')

<style>
    .this-signup-container{
        border: 2px solid gray;
        border-top: 0px solid gray;
        background: black;
        padding: 20px;
        border-radius: 0 0 15px 15px;
    }
    .this-signup-container-title{
        border: 2px solid gray;
        border-botom: 0px solid gray;
        background: white;
        padding: 10px;
        border-radius: 15px 15px 0 0;
        font-weight: strong;
        text-align: center;
    }
</style>

<div class="row">
    <div class="col-md-4">
        <h2>Register AAUAITE</h2>
        <div class="this-signup-container-title">
            <h4>Please Complete this Form to Register</h4>
        </div>
        <div class="this-signup-container">
            <form method="POST" action="{{route('login')}}">



                <div class="form-group{{ $errors->has('MatricNumber') ? ' has-error' : '' }}">
                    <label for="Matric Number" class="control-label">Matriculation Number</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                        <input id="MatricNumber" type="number" class="form-control" name="MatricNumber" value="{{ old('MatricNumber') }}" placeholder="Matric Number" required autofocus>

                        @if ($errors->has('MatricNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('MatricNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('Name') ? ' has-error' : '' }}">
                    <label for="Name" class="control-label">Name</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="Name" type="text" class="form-control" name="Name" value="{{ old('Name') }}" placeholder="Name" required autofocus>

                        @if ($errors->has('Name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                
                <div class="form-group{{ $errors->has('Username') ? ' has-error' : '' }}">
                    <label for="Username" class="control-label">Choose Username/Nick</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-star-empty"></i></span>
                        <input id="Username" type="text" class="form-control" name="Username" value="{{ old('Username') }}" placeholder="Username/Nick" required autofocus>

                        @if ($errors->has('Username'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Username') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('Faculty') ? ' has-error' : '' }}">
                    <label for="Faculty" class="control-label">Your Faculty</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                        <select value="{{old('Faculty')}}" name="Faculty" class="form-control" value="{{ old('Faculty') }}" id="Faculty" placeholder="Faculty" required autofocus>
                                        <option class="form-control" value="">Select Faculty</option>        
                                        <option value="Agriculture">Agriculture</option>
                                        <option value="Arts">Arts</option>
                                        <option value="Education">Education</option>
                                        <option value="Law">Law</option>
                                        <option value="Science">Science</option>
                                        <option value="Social & Management Sciences">Social & Management Sciences</option>
                                    </select>

                        @if ($errors->has('Faculty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Faculty') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                
                <div class="form-group{{ $errors->has('Department') ? ' has-error' : '' }}">
                    <label for="Department" class="control-label">Your Department</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i></span>
                        <input id="Department" type="text" class="form-control" name="Department" value="{{ old('Department') }}" placeholder="Department" required autofocus>

                        @if ($errors->has('Department'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Department') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('PhoneNumber') ? ' has-error' : '' }}">
                    <label for="PhoneNumber" class="control-label">Your Phone Number</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                        <input id="PhoneNumber" type="number" class="form-control" name="PhoneNumber" value="{{ old('PhoneNumber') }}" placeholder="PhoneNumber" required autofocus>

                        @if ($errors->has('PhoneNumber'))
                            <span class="help-block">
                                <strong>{{ $errors->first('PhoneNumber') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                    <label for="Email" class="control-label">Your E-mail:</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input id="Email" type="email" class="form-control" name="Email" value="{{ old('Email') }}" placeholder="Email" required>

                        @if ($errors->has('Email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('Level') ? ' has-error' : '' }}">
                    <label for="Level" class="control-label">Present Level:</label><br>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-equalizer"></i></span>
                        <select value="{{old('Level')}}" name="Level" type="number" class="form-control" value="{{ old('Level') }}" id="Level" placeholder="Level" required autofocus>
                                        <option class="form-control" value="">Select Your Level</option>        
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="300">300</option>
                                        <option value="400">400</option>
                                        <option value="500">500</option>
                                    </select>

                        @if ($errors->has('Level'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Level') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group{{ $errors->has('Password') ? ' has-error' : '' }}">
                    <label for="Password" class="control-label">Create Password (minimun of 6 char):</label>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-key"></i></span>
                        <input id="Password" type="Password" class="form-control" name="Password" required placeholder="Password (0 - 9, a-z, A-Z, Others)">

                        @if ($errors->has('Password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="Password-confirm" class="control-label">Confirm Password</label>

                    <div class="col-md-12 input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-secret"></i></span>
                        <input id="password-confirm" type="password" class="form-control" name="Password_confirmation" required placeholder="Confirm Password (0 - 9, a-z, A-Z, Others)">                        
                    </div>
                </div>

                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Signup
                                </button>
                            </div>
                </div><br>

            </form>
        </div>
    </div>

    <div class="col-md-3"><br>
        <p>THE MAN IN THE MIDDLE IS THE MAN AT THE CENTER OF GRAVITY FOR ANY MEANS OF INFORMATION REQUIRED FOR ALL THE APPLICANTS
            IN THE MODELING OF THE COMPUTER PROGRAMS THAT WE ALL REQUIRE TO CARRY OUT, ESPECIALLY IN THE LEVEL OF PROGRAMMING
            THAT WE HAVE EVER PROPOSED, ALL IN THE HISTORY OF COMPUTER PROGRAMMING IN THE HISTORY OF MAN IN THE ENTIRE UNIVERSE
            AND BOTH IN HEAVEN OR ON EARTH. 
            WOW! OH MY GOD! I CAN'T BELIEVE I'M TYPING AND GETTING THE KEYS AS ACCURATE AS I SHOULD BE
        </p>
    </div>

    <div class="col-md-3"><br>
        <p>THE MAN IN THE MIDDLE IS THE MAN AT THE CENTER OF GRAVITY FOR ANY MEANS OF INFORMATION REQUIRED FOR ALL THE APPLICANTS
            IN THE MODELING OF THE COMPUTER PROGRAMS THAT WE ALL REQUIRE TO CARRY OUT, ESPECIALLY IN THE LEVEL OF PROGRAMMING
            THAT WE HAVE EVER PROPOSED, ALL IN THE HISTORY OF COMPUTER PROGRAMMING IN THE HISTORY OF MAN IN THE ENTIRE UNIVERSE
            AND BOTH IN HEAVEN OR ON EARTH. 
            WOW! OH MY GOD! I CAN'T BELIEVE I'M TYPING AND GETTING THE KEYS AS ACCURATE AS I SHOULD BE
        </p>
    </div>

    <div class="col-md-2"><br>
        <p>THE MAN IN THE MIDDLE IS THE MAN AT THE CENTER OF GRAVITY FOR ANY MEANS OF INFORMATION REQUIRED FOR ALL THE APPLICANTS
            IN THE MODELING OF THE COMPUTER PROGRAMS THAT WE ALL REQUIRE TO CARRY OUT, ESPECIALLY IN THE LEVEL OF PROGRAMMING
            THAT WE HAVE EVER PROPOSED, ALL IN THE HISTORY OF COMPUTER PROGRAMMING IN THE HISTORY OF MAN IN THE ENTIRE UNIVERSE
            AND BOTH IN HEAVEN OR ON EARTH. 
            WOW! OH MY GOD! I CAN'T BELIEVE I'M TYPING AND GETTING THE KEYS AS ACCURATE AS I SHOULD BE
        </p>
    </div>
</div>
@endsection
