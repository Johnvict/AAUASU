@extends('layouts.aauaites')

<title>My Private Conversation</title>
@section('content')
    <style>
        a, a:active, a:hover {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col col-md-6">
                <div class="row">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <button class="btn btn-primary btn-sm"><a href="{{ route('newPchat') }}">Start New Chat</a></button>
                            <button class="btn btn-warning btn-sm"><a href="{{ route('newPchat') }}">Back To Chat</a></button>
                        </div>
                        <div class="panel-body">
                            The Chat goes below
                            @if(session('messages') != null)
                                <div class="alert alert-warning">
                                    <div cla ss="col col-md-6">
                                        @if(count($messages)>0)
                                            @foreach($messages as $message)
                                                @if(Auth::User() == $message->User)
                                                    <span class="glyphicon glyphicon-chat"><img src="/images/avatar/{{$message->user->Avatar}}" class="media-object" style="width:30px">
                                                    </span><article style="color: lawngreen; font-family: algerian; font-size: 1.2em; text-align: right;">{{$message->body}}</article>
                                                @else
                                                    <span class="glyphicon glyphicon-chat"><img src="/images/avatar/{{$message->user->Avatar}}" class="media-object" style="width:30px">
                                                    </span><article style="color: deepskyblue; font-family: algerian; font-size: 1.2em; text-align: left;">{{$message->body}}</article>
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="alert alert-warning">
                                                <p>Type a message below to start chating </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            @endif

                            <form action="POST" action="{{route('sendmessage')}}">
                                {{ csrf_field() }}

                                <div class="form-group">

                                    <input type="hidden" name="senderId" value="{{$authUserProfile->id}}">
                                    <input type="hidden" name="conversationId" value="{{$conversation->id}}">
                                    <label for="body">Write</label>
                                    <textarea id="body" type="text" name="body" class="form-control" placeholder="Type a message" required autofocus></textarea>
                                    @if ($errors->has('postIntended'))
                                        <span class="help-block"><strong>{{ $errors->first('body') }}</strong></span>
                                    @endif
                                </div>
                                <button type="submit" class="btn btn-success pull-right">Send</button>
                            </form>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col col-md-3">
                Thhis should be quick links or adverts
            </div>
            <div class="col col-md-3">
                Thhis should be quick links or adverts
                Thhis should be quick links or adverts
            </div>
        </div>
    </div>

@endsection