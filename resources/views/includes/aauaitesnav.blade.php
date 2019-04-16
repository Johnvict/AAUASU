@guest

    <br><br>
<div class="panel panel-primary">
<div class="panel-heading text-center"><h1>Error Occured!</h1></div>

    <div class="panel-body">
        <div class="container alert alert-info">
            <h2 class ="text-center">Ooops!<br>Sign Up or Login to access all resources as a registered user</h2><br>
            <a class="btn btn-primary col-md-offset-5" href="/"><b>Register/Login Here</b></a>

            <br><br><br>
        </div>
    </div>
</div>

    {{ die() }}

@else
  <style>
      .navbar-logo {
          background-image: url('/images/sulogo33.png');
          width:220px;
          height:50px;
      }

      .navbar-logo:hover {
          background-image: url('/images/aauasu.png');
          width:220px;
          height:50px;
      }

    .navbar-left {
        width:220px;
        height:50px;
        border-radius: 10px;
    }
      h1{
          color: white;
          font-family: "Times New Roman"
      }

    .navbar-logo {
        width:220px;
        height:50px;
    }
    .navbar-right {
        margin-right: 5px;
    }
</style>

  @if(Auth::user()->is_admin == "1")
      @include('includes.adminNav')
  @else

      <div>
          <nav class="navbar navbar-inverse navbar-collapse">
              <div class="container-fluid">
                  <ul class="nav navbar-nav">
                      <a href="/"><img class="navbar-nav navbar-left navbar-logo"></a>
                      <li class=""><a href='{!! url('/aauaites/home') !!}'>Home</a></li>
                      <li class=""><a href="/profile/{{ Auth::user()->Username }}">My Profile</a></li>
                      {{--<li class=""><a href='{!! url('/aauaites/home') !!}'>Media</a></li>--}}
                      <li><a href="{{route('materials')}}">Materials</a></li>
                      <li><a href="{{route('courses')}}">My Courses</a></li>
                      <li><a href="{{route('gradepoint')}}">My Grade Point</a></li>
                      {{--<li class=""><a class="dropdown-toggle" data-toggle="dropdown" href="#">Academics<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                          </ul>
                      </li>--}}
                      <li class=""><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chats <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="{{ route('pchats') }}">Private Chats</a></li>
                              <li><a href="{{ route('publicChat') }}">Public Chats</a></li>
                              {{-- <li><a href="#">My Level Chats</a></li>
                              <li><a href="#">Faculty Chats</a></li>
                              <li><a href="#">Departmental Chats</a></li> --}}
                          </ul>
                      </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="{{ route('logout') }}"><h><span class="glyphicon glyphicon-log-out"></span><b> Logout {{ Auth::user()->Username }}</b></h></a></li>
                  </ul>
              </div>
          </nav>
      </div>
  @endif

@endguest