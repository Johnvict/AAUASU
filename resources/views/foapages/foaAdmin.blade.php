 <title>FOA Admin Login</title>
    
<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
    .col-md-3 {
      float: none;
      margin-top: 5px;
      marging-right: 0px
      margin: 0 auto 0 auto;
    }
    .form-group {
      float: none;
      margin-top: 5px;
      marging-right: 0px
    }
    
    .conta{
      border: 2px solid gray;
      border-radius: 10px;
      margin: 0;
    }

    .center{
      text-align: center;
      border-radius: 10px;
      margin: 0 auto 0 auto;
    }

    .LoginTitle {
	border: 2px solid #00BDE3;
	background-color: #FF0200;
	border-radius: 15px 15px 0 0;
	width: 40%;
	color: white;
	font-weight: bold;
	text-align: center;
	margin: 0 auto 0 auto;
	margin-top: 5%;
	padding: 0 0 0 0;
	font-size: .7em;
	text-decoration: underline;
    }

    body {
        background: gray;
        font-family: Arial, Calibri;
        margin: 10px 10px 10px 10px;
        color: white;
    }

    .form {
        border: 2px solid #00BDE3;
        background-color: #FFC8D0;
        border-radius: 0 0 15px 15px;
        width: 40%;
        color: Black;
        margin: 0 auto 0 auto;
        padding: 0px 0 10px 0;
    }


    .central{
        display: block;
        margin: 5% auto;
        padding: auto;
        text-align: center;
    }

    .input-set {
        border-radius: 0 0 15px 15px;
        width: 250px;
        display: block;
        color: Black;
        font-weight: bold;
        text-align: center;
        margin: 0 auto;
        padding: 0 auto;
        font-size: 1em;
    }

    .maintitle h1 {
        font-family: arial;
        border: 2px solid #00BDE3;
        background-color: #00BDE3;
        border-radius: 15px 0 15px 0;
        width: 40%;
        color: white;
        font-weight: bold;
        text-align: center;
        margin: 5% auto 0 auto;
        padding: 0 0 0 0;
        font-size: 1.2em;
    }
    .bottom {
        font-weight: bold;
        font-size: 1.5em;
        text-align: center;
        margin: 0 auto 0 auto;
    }   
</style>

        <div class="maintitle">
			<header><h1>ADMIN LOGIN PAGE</h1><br>
            @if(session('trial') != null)
                <div class="alert alert-danger col-md-2 col-md-offset-5">
                    {{session('trial')}}
                </div>
            @endif
		</div>

            


        <div class="central">

                <div class="floating">     
                    <div class="LoginTitle">
                        <h1>LOGIN PANEL</h1>
                </div>

            <form class="form" action="{{route('foaAdminDashboard')}}" method="POST">
                {{csrf_field()}}
                <div class="input-set"><br>
                        <label for="Username">Username:</label>
                        <input type="text" name="Username" placeholder="Enter Username"/><br><br>
                </div>
                
                <div class="input-set">
                        <label for="Password">Password:</label>
                        <input type="password" name="Password" placeholder="Password"/><br><br>
                </div>
                
                <div class="button">
                        <input type="submit" name="Login" value="Login" />
                </div>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>
        </div>