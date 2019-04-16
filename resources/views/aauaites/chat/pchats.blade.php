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
                        </div>
                        <div class="panel-body">

                            <div>
                                @if(session('users') != null)
                                    <div class="alert alert-warning">
                                        <div cla ss="col col-md-6">
                                            @if(count($users)>0)
                                                @foreach($users as $user)
                                                    @if(Auth::user() == $user)
                                                        @continue
                                                    @else
                                                        <form method="POST" action="{{route('newConversation')}}">
                                                            {{csrf_field()}}
                                                            <input type="hidden" name="hisId" value="{{$user->id}}">
                                                            <input type="hidden" name="myId" value="{{Auth::user()->id}}">
                                                            <input type="hidden" name="conversationId" value="{{ Auth::user()->id }}-{{$user->id}}">
                                                            <button clas="btn btn-success" type="submit"><span class="glyphicon glyphicon-chat">
                                                            @if($user->Avatar == 'AvatarDefault'.$user->Gender.'.jpg')
                                                                        <img class="imag col-md-offset-6" src="/avatar/{{$user->Avatar}}"alt="" style="width:35px">
                                                                    @else
                                                                        <img class="imag col-md-offset-6" src="{{$user->Avatar}}" alt="" style="width:35px">
                                                                    @endif
                                                                    <a style="color: dodgerblue; font-family: algerian; font-size: 1.2em;"><b>{{ $user->Username }}
                                                                        </b></a></span>
                                                            </button>
                                                        </form>
                                                        This: {{$user->id}}, Mine:{{Auth::user()->id}}
                                                    @endif
                                                @endforeach
                                            @else
                                                <div class="alert alert-warning">
                                                    <p>Sorry! You have no Buddy on your Buddy List </p>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            </div>


                            <div>
                                @if(count($myChats)>0)
                                    @foreach($chatters as $chatter)
                                        @foreach($chatter as $chatterAtt)
                                            <div>
                                                <div class="alert alert-success">
                                                    <a href="/conversation/{{Auth::user()->id}}-{{$chatterAtt->user_UserId}}">
                                                        <button  clas="btn btn-success" type="button"><span class="glyphicon glyphicon-chat">
                                                                        @if($chatterAtt->Avatar == 'AvatarDefault'.$chatterAtt->Gender.'.jpg')
                                                                <img class="imag col-md-offset-6" src="/avatar/{{$chatterAtt->Avatar}}"alt="" style="width:35px">
                                                            @else
                                                                <img class="imag col-md-offset-6" src="{{$chatterAtt->Avatar}}" alt="" style="width:35px">
                                                            @endif
                                                            <a style="color: dodgerblue; font-family: algerian; font-size: 1.2em;"><b>{{ $chatterAtt->Username }}
                                                                </b></a></span>
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endforeach
                                @else
                                    <div class="alert alert-warning">
                                        <b>Click on the above button to start a new chat</b>
                                    </div>
                                @endif
                            </div>


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
