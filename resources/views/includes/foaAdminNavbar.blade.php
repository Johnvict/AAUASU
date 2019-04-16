<style>
    .navbar-logo {
        background-image: url('/images/faceofaaua.png');
        width:297px;
        height:84px;
    }

    .navbar-logo:hover {
        background-image: url('/images/sulogo3.png');
        width:297px;
        height:84px;
    }

    .navbar-left {
        width:297px;
        height:84px;
        border-radius: 10px;
    }

    .navbar-logo {
        width:297px;
        height:84px;
    }
</style>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <img class="navbar-nav navbar-left navbar-logo">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li class="active"><a href="{{ route('foaAdminDashboard')}}">Home</a></li>
        <li><a href='{!! url('foa') !!}'>FOA Home</a></li>
        <li><a href="{{route('votes')}}">Votes</a></li>
        <li><a href="{{route('contestants')}}">Contestants</a></li>
        <li><a href="{{route('category')}}">Categories</a></li>
        <!-- <li><a href="{{route('awardcategories')}}">Award Categories</a></li> -->
      </ul> 
      <ul class="nav navbar-nav navbar-right">
         <li><a href="{{ route('logoutfoa') }}"><span class="glyphicon glyphicon-logout"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>