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
     .container-fluid, .navbar{
        background: black;
        border-bottom: 1px solid white;
         border-radius: 5px;
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
        background: black;
    }
</style>


<!--  src="images/sulogo3.png" alt="FOAImage" width="297" height="84" -->

<div class="container">
    <nav class="navbar navbar-inverse">

        <div class="container-fluid">
            <a href="/"><img class="navbar-nav navbar-left navbar-logo"></a>


            <ul class="nav navbar-nav">
                <li class="active"><a href='{!! url('/') !!}'>Home</a></li>


                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SEC<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('president')}}">President</a></li>
                        <li><a href="{{route('vpresident')}}">Vice President</a></li>
                        <li><a href="{{route('gensec')}}">Gen. Secretary</a></li>
                        <li><a href="{{route('pro')}}">P.R.O.</a></li>
                        <li><a href="{{route('finsec')}}">Financial Sec.</a></li>
                        <li><a href="{{route('treasurer')}}">Treasurer</a></li>
                        <li><a href="{{route('drwelfare')}}">Welfare Dir.</a></li>
                        <li><a href="{{route('drsocial')}}">Social Dir.</a></li>
                        <li><a href="{{route('drsports')}}">Sports Dir.</a></li>
                        <li><a href="{{route('ags')}}">Ass. Gen. Sec.</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SRC<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('sp')}}">Senate President</a></li>
                        <li><a href="{{route('dsp')}}">Deputy S.P.</a></li>
                        <li><a href="{{route('chiefwhip')}}">Chief Whip</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">SJC<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('cj')}}">Chief Judge</a></li>
                        {{--<li><a href="{{route('lordchancellor')}}">Lord Chancellor</a></li>
                        <li><a href="{{route('registrar')}}">Registrar</a></li>--}}
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href='{!! url('achievements') !!}'>Achievements</a></li>
                        <li><a href='{!! url('pastadmin') !!}'>Past Administrations</a></li>
                        <li><a href='{!! url('photos') !!}'>Photo Albums</a></li>
                        <li><a href="#">Publications</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Events <span class="caret"></span></a>
                    {{--<ul class="dropdown-menu">--}}
                        {{--<li><a href='{!! url('foa') !!}'>FOA</a></li>--}}
                        {{--<li><a href='{!! url('sportsfestival') !!}'>Sports Festival</a></li>--}}

                    {{--</ul>--}}
                </li>

                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="{!! url('about') !!}">About
                        {{--<span class="caret"></span>--}}
                    </a>
                    <ul class="dropdown-menu">
                        {{--<li><a href='{!! url('about') !!}'>ABOUT AAUASU</a></li>--}}
                        {{--<li><a href='{!! url('sub') !!}'>IN THE BUILDING</a></li>--}}
                    </ul>
                </li>
            </ul>
            
            @guest
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav navbar-nav navbar-right"><a href="/"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li class="nav navbar-nav"><a href="/"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            @else
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href='{!! url('/aauaites/home') !!}'><span class="glyphicon glyphicon-log-in"> User</span></a></li>
                    <li>
                        <a href="{{ route('logout') }}"><h><span class="glyphicon glyphicon-log-out"></span></h></a>
                    </li>
                  </ul> 
            @endguest
        </div>
    </nav>
</div>

