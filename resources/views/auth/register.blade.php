@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                <div class="this-signup-container-title">
                <h4 style="color: white;">Register Here</h4>
            </div>
            <div class="this-signup-container">
              <form id ="Register" action="{{route('signupAauaite')}}" method="POST">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('MatricNumber') ? ' has-error' : '' }}">
                  <label for="Matric Number"style="color: white;" class="control-label">Matriculation Number</label><br>
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
                  <label for="Name" style="color: white;" class="control-label">Name</label><br>
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

                <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                  <label for="Email" style="color: white;" class="control-label">Your E-mail:</label><br>
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

                <div class="form-group{{ $errors->has('Password') ? ' has-error' : '' }}">
                  <label for="Password" style="color: white;" class="control-label">Create Password (minimun of 6 char):</label>
                  <div class="col-md-12 input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="Password" type="Password" class="form-control" name="Password" required placeholder="Password (0 - 9, a-z, A-Z, Others)">
                    @if ($errors->has('Password'))
                      <span class="help-block">
                        <strong>{{ $errors->first('Password') }}</strong>
                      </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">Signup</button>
                            </div>
                </div><br><br>
                <input type="hidden" name="_token" value="{{Session::token()}}">
              </form>
            </div>
          </div>





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
