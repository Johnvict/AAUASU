@extends('layouts.aauaites')

<title>Status</title>
@section('titleHere')
    Status
@endsection
@section('content')

@guest

@else
    <div class="row">
        <section class="ro w">
            <div class="media col col-md-12">
                <div class="media-left">
                    @if($post->user->Avatar == 'AvatarDefault'.$post->user->Gender.'.jpg')
                        <a href="/profile/{{$post->user->Username}}"><img class="profile-img col-offset-5" src="/avatar/{{$post->user->Avatar}}" style="width:70px"></a>
                    @else
                        <a href="/profile/{{$post->user->Username}}"><img class="profile-img col-offset-5" src="{{$post->user->Avatar}}" style="width:70px"></a>
                    @endif
                    <div class="white"><b>{{ $post->user->Username }}</b></div>
                </div>
                <div class="media-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a href="/profile/{{$post->user->Username}}"><h4 class="media-heading"><b>{{ $post->user->Name }}</b></h4></a>
                        </div>
                        <div class="panel-body">
                        <span class="pull-right">
                           <i>{{$post->created_at->diffForHumans()}}</i>
                        </span><br>
                            <p style="text-align: justify; font-weight: bold; font-size: .9em;">{!! $post->content !!}<br><hr></p><br>
                            <a href='{!! url('foa') !!}' class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span> Like</a> |
                            <a href='{!! url('foa') !!}' class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-thumbs-down"></span> Dislike</a>
                            @if(Auth::User() == $post->User)
                                |
                                <a href="/edit/{{$post->id}}" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-edit"></span> Edit</a> |
                            @endif
                            @if(Auth::user()->is_admin == "1" OR Auth::User() == $post->User)
                                <a href=/delete/{{$post->id}}" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                            @endif
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <div>
            @if(count($comments)>0)
                @foreach($comments as $comment)
                    @if($comment->postUpdate_id == $post->id)
                        <section class="row">
                            <div class="media col col-md-12">
                                <div class="media col col-md-12">
                                    <div class="media-body">
                                        <div class="panel panel-primary">
                                            <div class="media-center">
                                                <div style="text-align: justify; font-size: .9em; padding: 2%;">
                                                <span class="pull-right">
                                                    <i>{{$comment->created_at->diffForHumans()}}</i>
                                                </span><br>
                                                    <p>{{ $comment->body }}</p>
                                                    <div class="alert alert-info">
                                                        @if($comment->user->Avatar == 'AvatarDefault'.$comment->user->Gender.'.jpg')
                                                            <a href="/profile/{{$comment->user->Username}}"><img class="profile-img col-offset-5" src="/avatar/{{$comment->user->Avatar}}" style="width:40px"></a>
                                                        @else
                                                            <a href="/profile/{{$comment->user->Username}}"><img class="profile-img col-offset-5" src="{{$comment->user->Avatar}}" style="width:40px"></a>
                                                        @endif
                                                        <b><a href="/profile/{{$comment->user->Username}}">{{ $comment->user->Username }}</a>| </b>
                                                        <a href='{!! url('foa') !!}'><span class="glyphicon glyphicon-thumbs-up"></span> Like</a>
                                                        @if(Auth::user()== $post->user)
                                                            @if(Auth::User() == $comment->user)
                                                                |
                                                                <a href="/editComment/{{$comment->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                            @endif
                                                        @elseif(Auth::User() == $comment->user)
                                                            |
                                                            <a href="/editComment/{{$comment->id}}"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                                        @endif
                                                        @if(Auth::user() == $comment->user OR Auth::User() == $post->User OR Auth::user()->is_admin == "1")
                                                            |
                                                            <a href='/deleteComment/{{$comment->id}}'><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-sm-12">
        <div class="panel panel-default text-left">
            <div class="panel-body">
                <form method="POST" action="{{ route('commentPost') }}">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="content">Comment on this post</label>
                        <textarea id="postIntended" type="text" name="content" class="form-control" placeholder="Write something" required autofocus></textarea>

                        @if ($errors->has('postIntended'))
                            <span class="help-block"><strong>{{ $errors->first('postIntended') }}</strong></span>
                        @endif
                    </div>
                    <input type="hidden" name="post_id" value="{{$post->id}}">
                    <button type="submit" class="btn btn-primary btn-sm pull-right">Post Comment</button>
                </form>
            </div>
        </div>
    </div>
@endguest
@endsection