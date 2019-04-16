@extends('layouts.master')

<title>Error</title>
@section('content')
    
{{--
@if(session(error))
	<div class="row">
	    <div class="col col-md-12">
	        <div class="alert alert-danger text-center">
	            <h2>Error!<br>Can't Process Request. Please go to our
	                <a style="text-decoration:none; text-size: 2em; font-weight: bold; color: purple;" href="/">Homepage Here</a></h2>
	        </div>
	    </div>
	</div>
@endif

--}}


@if($userNotFound)
	<div class="contai ner">
		<div class="panel panel-primary">
			<div class="panel-heading text-center">
				<h1><span class="glyphicon glyphicon-warning-sign"></span> Error 404!</h1>
			</div>

			    <div class="panel-body">
			        <div class="alert alert-info">
			            <h2 class ="text-center">Ooops!<br> User not found, check the <a href="/profile/{{ Auth::user()->Username }}">Username</a> and try again</h2><br>
			            <a class="btn btn-primary col-md-offset-5" href="{{ roUte('loginAauaite') }}"><b>Go to social home</b></a>

			            <br><br><br>
			        </div>
			    </div>
			</div>
		</div>
	</div>
@endif

@endsection