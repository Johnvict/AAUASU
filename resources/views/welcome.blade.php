@extends('layouts.master')

@section('content')
<h1 class="white">
    <span><img src="/images/aauasufist.png" alt="" height="60">
            <b>Adekunle Ajasin University Students Union</b>
    </span>
</h1>
<hr>


  <style>
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    a, a:active, a:hover {
        color: black;
        text-decoration: none;
        font-weight: bold;
    }
    .profile-img {
        max-width: 200px;
        border: 2px solid #fff;
        border-radius: 8%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.8);
    }
    .this-signup-container{
        border: 2px solid #6699FF;
        border-top: 0px solid #6699FF;
        background: black;
        padding: 20px;
        padding-bottom: 0px;
        border-radius: 0 0 15px 15px;
        margin-bottom: 15px;
        text-color: white;

    }
    .this-signup-container-title{
        border: 2px solid #6699FF;
        border-botom: 0px solid #6699FF;
        background: #6699FF;
        padding: 2px;
        border-radius: 15px 15px 0 0;
        font-weight: strong;
        text-align: center;
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
    .this-login-container{
        border: 2px solid #66ff99;
        border-top: 0px solid #66ff99;
        background: black;
        padding: 20px;
        padding-bottom: 0px;
        border-radius: 0px 0px 15px 15px;
        margin-bottom: 15px;
        text-color: white;
    }
    .this-login-container-title{
        border: 2px solid #66ff99;
        border-botom: 0px solid #66ff99;
        background: #66ff99;
        padding: 2px;
        border-radius: 15px 15px 0 0;
        font-weight: strong;
        text-align: center;
        text-shadow: 0 2px 2px rgba(0, 0, 0, 0.9);
    }
    .form-group .btn, .bt-link{
        margin-bottom: 0;
    }
  </style>
</head>

  <div class="text-center">
    <div class="row">
      <div class="col-sm-3" id="contentTop" style="display: block">
        <div class="thumbnail">
          {{--<p><a href="#">STUDENTS' UNION BUILDING</a></p>--}}
          <img src="/images/aa3.jpg" class="i mg-circle" alt="sub">
        </div>

        <div>
          @if(count($materialArray) > 0)
              @foreach($materialArray as $materials)
                  <div class="alert fade-in">
                      @include('materials.fileForWelcome')
                  </div>
              @endforeach
          @endif
        </div>
      </div>


            <div class="col-sm-7">

                <!--THE CENTRE COLUMN STARTS HERE-->
                <div class="col-sm-7">

                </div>
                <div class="row">
                    <div>
                        @include('pixScroll')
                    </div>

                    <div class="col-sm-7">

                        <!--REGISTRATION PANEL-->
                        <div class="this-signup-container-title">
                            <h4 style="color: white;">Register Here</h4>
                        </div>
                        <div class="this-signup-container">
                            <form id ="Register" action="{{route('signup')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('MatricNumber') ? ' has-error' : '' }}">
                                    <label for="Matric Number"style="color: white;" class="control-label">Matriculation Number</label><br>
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                                        <input id="MatricNumber" type="number" class="form-control" name="MatricNumber"
                                               value="{{ old('MatricNumber') }}" placeholder="Matric Number">

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
                                        <input id="Name" type="text" class="form-control" name="Name"
                                               value="{{ old('Name') }}" placeholder="Name">
                                        @if ($errors->has('Name'))
                                            <span class="help-block">
                                <strong>{{ $errors->first('Name') }}</strong>
                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                                    <label for="Email" style="color: white;" class="control-label">Gender:</label><br>
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-ice-lolly"></i></span>
                                        <select value="{{old('Gender')}}" name="Gender" class="form-control">
                                            <option value="">Select Gender</option>
                                            <option value="Female">Female</option>
                                            <option value="Male">Male</option>
                                        </select>
                                        @if ($errors->has('Gender'))
                                            <span class="help-block">
                          <strong>{{ $errors->first('Gender') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('Email') ? ' has-error' : '' }}">
                                    <label for="Email" style="color: white;" class="control-label">Your E-mail:</label><br>
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input id="Gender" type="Email" class="form-control" name="Email"
                                               value="{{ old('Email') }}" placeholder="Email" required>
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
                                        <input id="Password" type="Password" class="form-control" name="Password"
                                               required placeholder="Password (0 - 9, a-z, A-Z, Others)">
                                        @if ($errors->has('Password'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('Password') }}</strong>
                      </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-primary"><b>Sign Up</b></button>
                                    </div>
                                </div><br><br>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </form>
                        </div>
                    </div>
                    <!-- REGISTRATION PANEL ENDS -->


                    <!-- LOGIN PANEL-->
                    <div class="col-sm-5">
                        <div class="this-login-container-title">
                            <h4 style="color: white;">Login Panel</h4>
                        </div>
                        <div class="this-login-container">
                            @if(session('trial') != null)
                                <div class="alert alert-danger">
                                    <p><b>Invalid User Details Supplied!</b></p>
                                </div>
                            @endif
                            <form id ="Login" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('LogMatricNumber') ? ' has-error' : '' }}">
                                    <label for="LogMatricNumber" style="color: white;" class="control-label">Matric. Number</label>
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
                                        <input id="LogMatricNumber" type="number" class="form-control" name="LogMatricNumber" placeholder="Matric. Number" value="{{ old('LogMatricNumber') }}">
                                        @if ($errors->has('LogMatricNumber'))
                                            <span class="help-block">
                            <strong>{{ $errors->first('LogMatricNumber') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('LogPassword') ? ' has-error' : '' }}">
                                    <label for="LogPassword" style="color: white;" class="control-label">Password</label>
                                    <div class="col-md-12 input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="LogPassword" type="password" class="form-control" name="LogPassword" placeholder="Password" required>
                                        @if ($errors->has('LogPassword'))
                                            <span class="help-block">
                          <strong>{{ $errors->first('LogPassword') }}</strong>
                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-offset-0">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-success"><b>Login</b></button>
                                    </div>
                                </div>
                                <input type="hidden" name="_token" value="{{Session::token()}}">
                            </form>
                        </div>
                    </div>

                    <!-- LOGIN PANEL ENDS -->
                </div>


                <hr>
                <div class="row">
                    <h4 class="white">News Rolls</h4>
                    <section class="news">
                        @if(count($news) > 0)
                            @foreach($news as $new)
                                @if($new->show_status == "1")
                                    <div class="alert fade-in">
                                        @include('admin.newsToShow')
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </section>
                </div>
                <hr>

            </div>
      <!--THE CENTRE COLUMN ENDS HERE-->

        {{--An alternative Column for a mobile view--}}


        <div class="col-sm-3" id="contentMid" style="display: none">
            <div class="thumbnail">
                {{--<p><a href="#">STUDENTS' UNION BUILDING</a></p>--}}
                <img src="/images/aa3.jpg" class="i mg-circle" alt="sub">
            </div>

            <div>
                @if(count($materialArray) > 0)
                    @foreach($materialArray as $materials)
                        <div class="alert fade-in">
                            @include('materials.fileForWelcome')
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

      <div class="col-sm-2">
        <div class="thumbnail">
          <p><strong>Upcoming Events:</strong></p>
          <img src="images/foa1.jpg" alt="FOAImage" width="400" height="300">
          <p><strong>Face of AAUA</strong></p>
          <p>November 2017</p>
          {{--<button class="btn btn-primary"><a href='{!! url('foa') !!}'>More Info</a></button>--}}
        </div>

        <div class="thumbnail">
          <p>ADS</p>
        </div>

        <div class="thumbnail">
          <p>ADS</p>
        </div>

        <div class="thumbnail">
          <p>ADS</p>
        </div>

        <div class="thumbnail">
          <p>ADS</p>
        </div>
      </div>
    </div>

  </div>
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
            document.getElementById("contentMid").style.display = "block";
            document.getElementById("contentTop").style.display = "none";
        }
        else{
            document.getElementById("contentMid").style.display = "none";
            document.getElementById("contentTop").style.display = "block";
            document.getElementById("body").style.background = "url('/images/aauaback2.jpg') no-repeat fixed center / cover";
        }
        document.getElementById("output").innerHTML = "Screen Size: "+scrn;
        });

    </script>
@endsection