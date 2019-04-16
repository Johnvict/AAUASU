@extends('layouts.aauaites')
@section('titleHere')
     {{$user->Name}}
@endsection


@section('content')

       {{-- @if($user->Avatar == 'AvatarDefault'.$user->Gender.'.jpg')
            <img class="imag col-md-offset-6" src="/avatar/{{$user->Avatar}}"alt="" height="100">
        @else
            <img class="imag col-md-offset-6" src="{{$user->Avatar}}" alt="" height="100">
        @endif--}}

<style type="text/css">
	.profile-img {
		max-width: 200px;
		border: 5px solid #fff;
		border-radius: 100%; //For a round-shaped image
		box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
	}
	.smallbody{
		border: 2px solid gray;
		background: white;
		border-radius: 20px;
	}
</style>

   <img class="profile-img col-offset-5" src="{{$user->Avatar}}"><br><br>

@if($user->is_admin == "1")
    <div class="panel panel-primary">
        <div class="panel-head">
            <h3 style="font-family: forte;">{{$user->Username}} </h3>
        </div>
        <h4><b>Contact: {{$user->PhoneNumber}}</b></h4>
    </div>


@else
    <div class="panel panel-primary">
        <h3 style="font-family: forte;">Name: {{$user->Name}} </h3>
        <h4><b>Username: {{$user->Username}} </b></h4>
        <h4><b>Gender: {{$user->Gender}} </b></h4>
        <h4><b>Phone Number: {{$user->PhoneNumber}}</b></h4>
    </div>
    @guest
    @else
        <div class="panel panelsuccess">

            @if(Auth::User()->id == $user->id)
                <h4>Matric. Number: {{$user->MatricNumber}} </h4>
            @endif
            <h4>Email: {{$user->Email}} </h4>

            <h4>Faculty: {{$user->Faculty}} </h4>
            <h4>Department: {{$user->Department}} </h4>
            <h4>Level: {{$user->Level}} </h4>
            <h4>About: {{$user->About}} </h4>
            <h4>Post Held: {{$user->PostHeld}} </h4>
        </div>

        @if(Auth::User()->id == $user->id)
            <a href="/editprofile/{{$user->MatricNumber}}" class="btn btn-primary">Edit Profile</a>
        @else
            <button class="btn btn-success">Follow</button>
        @endif
        @endguest
@endif





@endsection