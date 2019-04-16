@extends('posts.master')

@section('css')
    <style>
        .loading{
            background: lightgrey;
            padding: 15px;
            position: fixed;
            border-radius: 4px;
            left: 50%;
            top: 50%;
            text-align: center;
            margin: -40px 0 0 -50px;
            z-index: 2000;
            display: none;
        }

        .form-group.required label:after {
            content: " *";
            color: red;
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
       <div id="content">
           @include('posts.index')
       </div>
       <div class="loading">
           <i class="glyphicon glyphicon-refresh glyphicon-spin glyphicon-2x glyphicon-tw "></i>
           <br>
           <span>Loading</span>
       </div>
@endsection

@section('js')
    <script src="{{ asset('js/ajaxcrud.js') }}"></script>
@endsection