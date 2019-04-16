@extends('layouts.foamaster')
  <title>Face of AAUA 2017</title>
@section('content')


<title>Award Categories</title>
@section('content')
<h2>Categories of Award</h2>
    <style>
      .contaner, .containe {
        border: 2px solid gray;
        Background-color: white;
        margin: 4px;
        border-radius: 10px;
        border-right:2px solid gray;
        border-left:2px solid green; 
      }

      .containe h4 {
        text-align:center;
        color: Purple;
        font-weight: 700;
        font-size: 1em;
      }

      .contt {
        border: 2px solid gray;
        Background-color: FFFFCC;
        margin: 2px;
        margin-bottom:5px;
        border-radius: 5px;
        border-right:2px solid gray;
        border-left:2px solid green;
      }
    </style>

  <div class="container">

    @foreach($categories as $category)

      <div class="containe row col-md-3">
        <h4>{{$category->id}}. {{$category->catname}}</h4>
      </div>
    @endforeach



  </div>

@endsection