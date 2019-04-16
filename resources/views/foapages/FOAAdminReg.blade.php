 <title>FOA Admin Login</title>
    
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
    }

    .LoginTitle {
	border: 2px solid #FF0200;
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
			<header><h1>ADMIN REGISTRATION PAGE</h1>
		</div>

        <div class="alert alert-danger size">
        @if(session('breaker') != null)
            {{session('breaker')}}
        @endif

        <div class="central">

                <div class="floating">     
                    <div class="LoginTitle">
                        <h1>ADD ADMIN</h1>
                </div>

            <form class="form" action="{{route('Admin')}}" method="POST">
                {{csrf_field()}}
                <div class="input-set">
                        <label for="Username">Username:</label>
                        <input type="text" name="Username" placeholder="Enter Username"/><br><br>
                </div>

                <div class="input-set">
                        <label for="Email">E-mail:</label><br>
                        <input type="text" name="Email" placeholder="Enter Email"/><br><br>
                </div>
                
                <div class="input-set">
                        <label for="Password">Password:</label>
                        <input type="password" name="Password" placeholder="Password"/><br><br>
                </div>
                
                <button type="submit" class="btn btn-success">Add Admin</button>
                    <!-- <input type="hidden" name="_token" value="{{Session::token()}}"> -->                
            </form>
        </div>