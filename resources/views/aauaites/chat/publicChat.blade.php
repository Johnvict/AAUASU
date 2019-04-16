@extends('layouts.aauaites')
<link rel="stylesheet" href="{{ asset('css/app.css') }}"/>

<title>AAUASU - My Grade Point</title>

@section('titleHere')
    AAUAITES Discussion Room
@endsection

@section('content')

    <style>
        .list-group{
            overflow-y: scroll;
            height: 200px;
        }
    </style>
<div>

    <div class="alert alert-info" id="app">
        <div class="offset-4 col-4">
            <li class="list-group-item active">Chat Room</li>
            <ul class="list-group" v-chat-scroll>
                <message
                    v-for="value in chat.message"
                    :key="value.index"
                    color='warning'>
                    @{{ value }}
                </message>

                <br>
            </ul>
            <input type="text" class="form-control" placeholder="Type your message here..." v-model='message' @keyup.enter='send' autofocus="">
        </div>

    </div>
</div>


<script src="{{ asset('js/app.js') }}"></script>
@endsection