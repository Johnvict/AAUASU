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
        <li class="active"><a href="{!! url('foa') !!}">Home</a></li>
        <li><a href="{{ route('votes') }}">Votes</a></li>
        <li><a href="{{ route('awardcategories') }}">Award Categories</a></li>
        <li><a href="{{ route('contactFOA') }}">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('votingnormal') }}"><span class="glyphicon glyphicon-log-in"></span> Cast Your Vote</a></li>
        <!-- This is left for admin PAGE <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Admin Panel</a></li> -->
      </ul>
    </div>
  </div>
</nav>