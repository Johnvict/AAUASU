@extends('layouts.aauaites')
<title>AAUAITES - Home</title>
@section('titleHere')
    Students Area
@endsection

@section('userPix')
    <img class="imag col-md-offset-5" src="{{Auth::user()->Avatar}}"alt="" height="80">
@endsection


@section('content')
    {{--<h1 class="white"><b><span><img src="/images/aauasufist.png" alt="" height="100">Students Area</span></b>
            @if($user->Avatar == 'AvatarDefault'.$user->Gender.'.jpg')
                <img class="imag col-md-offset-6" src="/avatar/{{$user->Avatar}}"alt="" height="100">
            @else
                <img class="imag col-md-offset-6" src="{{$user->Avatar}}" alt="" height="100">
            @endif
        </h1>
    <hr>--}}
    <style>
        /* Set black background color, white text and some padding */
        footer {
          background-color: #555;
          color: white;
          padding: 15px;
            }
        a:hover{
          text-decoration:none;
        }
        .profile-img {
            max-width: 200px;
            border: 5px solid #fff;
            border-radius: 75%;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
        }
        .white{
          color: white;
        }
    </style>

    <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">
              <form method="POST" action="{{ route('store') }}">
                  {{ csrf_field() }}

                  <div class="form-group">

                      @if(session('message') != null)
                        <p class="alert alert-success size"> {{session('message')}} </p>
                      @endif
                      <label for="content">Update Status</label>
                      <textarea @if(Auth::user()->is_admin == "1")id="article-ckeditor" @endif type="text" name="content" class="form-control" placeholder="Write something"></textarea>
                        @if ($errors->has('postIntended'))
                          <span class="help-block">
                              <strong>{{ $errors->first('postIntended') }}</strong>
                          </span>
                        @endif
                  </div>
                  <button type="submit" class="btn btn-success pull-right">Post Status</button>
              </form>
            </div>
          </div>
        </div>
    </div>

    {{--@if($materials != null)
            @include('materials.approvedFiles')

    @endif--}}
    @if(count($allStatuss)>0)
        @foreach($allStatuss as $status)
            @include('aauaites.statuses')
        @endforeach
    @endif





@endsection