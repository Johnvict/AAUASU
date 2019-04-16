<nav class="navbar navbar-default navbar-static-top">
    <div class="con tainer">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->

            <a href="/"><img class="navbar-nav navbar-left navbar-logo"></a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                @guest()
                @else
                    <li class="active"><a href="{{ route('get-admin-dashboard') }}">Admin Home</a></li>
                    <li><a href='{!! url('/aauaites/home') !!}'>Social Home</a></li>
                    <li><a href="{{ route('materialCheck') }}">Materials</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Chat Rooms <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Chat Rooms</a></li>
                            <li><a href="{{ route('publicChat') }}">Public Chats</a></li>
                            <li><a href="#">My Level Chats</a></li>
                            <li><a href="#">Faculty Chats</a></li>
                            <li><a href="#">Departmental Chats</a></li>
                        </ul>
                    <li><a href="{{ route('addNews') }}">News</a></li>
                    <li><a href="#">Users</a></li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest()
                <li><a href="{{ url('/') }}"><b>Go Homepage</b></a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->Username }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logoutAdmin') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                {{--<form id="logout-form" action="{{ 'App\Admin' == Auth::getProvider()->getModel()
                                ? route('logoutAdmin') : route('logoutAdmin') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>--}}

                                <form id="logout-form" action="{{ route('logoutAdmin') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>