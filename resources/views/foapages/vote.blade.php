@extends('layouts.foamaster')  

<title>Cast your vote</title>
@section('content')
  @if(session('jumper') != null)
        <div class="alert alert-success">
            {{session('jumper')}}
        </div>
    @endif

<h2>This is where you can cast your votes</h2>

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

      .contt, .contt p {
        border: 2px solid gray;
        Background-color: #d1ecf1;
        color: deeppink;
        margin: 2px;
        margin-bottom:5px;
        border-radius: 10px;
        border-right:2px solid gray;
        border-left:2px solid green;
      }
      .Nick {
        text-align: center;
        font-family: calibri;
        font-weight: bold;
        font-size: 1.5em;
      }
      .Nickname {
        text-align: center;
        font-family: "arial black";
        font-weight: bold;
        font-size: 1.5em; 
        /* text-decoration: underline; */
      }
</style>


<?php
    $ccat = count($categories);
    $ccont = count($contestants);
?>

@guest
  <br><br><div class="container aler alert-danger">
      <h2 class ="text-center">Ooops! PPTRC<br>Please Pass Through the Right Channel</h2>
      <div class="btn btn-default col-md-3 col-md-offset-5"><a href="/foa/voting"><b>Cast Your Vote Here</b></a></div>
      <br><br><br>
  </div>

@else
    <div class="row">
        @foreach($categories as $category)
            <?php $contCountHere = 0 ;?>
            @foreach($contestants as $contestant)
                @if($contestant->category_id == $category->id)
                    <?php $contCountHere++; ?>
                @endif
            @endforeach
            @if($contCountHere <= 0)
                @continue
            @else
                <form method="POST" action="{{route('castVote')}}">
                    {{csrf_field()}}
                    <div class="form-group col col-md-4">
                        <?php $asdf =  $category->id;?>
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#{{$asdf}}">{{ $category->catname }}</button>
                        <div id="{{$asdf}}" class="collapse">

                            <div class="contt">
                                @foreach($contestants as $contestant)
                                    @if($contestant->category_id == $category->id)
                                        <p class="Nickname">{{ $contestant -> contnick }}
                                            <img src=""></img>
                                            <input type="hidden" checked="checked" name="voteid" value="null">
                                        <input type="radio" name="voteid" value="{{$contestant->contid}}"></p>
                                        <input type="hidden" checked="checked" name="category_id" value="{{$category->id}}">
                                        <input type="hidden" checked="checked" name="voterId" value="{{ Auth::user()->UserId }}{{$category->catname}}">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <br><button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
            @endif

        @endforeach
    </div>

    <a class="btn btn-danger" href="{{ route('logoutVoter') }}"><span class="glyphicon glyphicon-logout"></span>Finalize Voting</a>
@endguest

@endsection