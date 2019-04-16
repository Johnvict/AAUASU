@extends('layouts.foamaster')  

<title>Votes So Far</title>
@section('content')
<h2>Votes So Far</h2>

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



<div>
    @if(count($voters) > 0)
        <?php $total=0 ?>

        @foreach($voters as $voter)
                <?php $total = $total + 1; ?>
        @endforeach


        <div>
            <?php $contArts=0; $contEdu=0; $contLaw=0; $contSOS=0; $contSci=0; $contAgr=0; ?>

            @foreach($voters as $votr)
                @if($votr{'Faculty'} == "Arts")
                    <?php $contArts = $contArts + 1; ?>

                @elseif($votr{'Faculty'} == "Education")
                    <?php $contEdu = $contEdu + 1; ?>

                @elseif($votr{'Faculty'} == "Agriculture")
                    <?php $contAgr = $contAgr + 1; ?>

                @elseif($votr{'Faculty'} == "Law")
                    <?php $contLaw = $contLaw + 1; ?>

                @elseif($votr{'Faculty'} == "Science")
                    <?php $contSci = $contSci + 1; ?>

                @elseif($votr{'Faculty'} == "Social & Management Sciences")
                    <?php $contSOS = $contSOS + 1; ?>
                @endif
            @endforeach

                <?php $n1 =($contArts)/($total)*100;
                $n2 =($contAgr)/($total)*100;
                $n3 =($contEdu)/($total)*100;
                $n4 =($contLaw)/($total)*100;
                $n5 =($contSci)/($total)*100;
                $n6 =($contSOS)/($total)*100; ?>
        </div>

        <!--VOTES FROM FACULTY-->
        <div class="alert alert-success text-center">
          <h3>Voters Chat From Faculties</h3>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" style=" font-weight: 900; font-size: 1em;width:{{$n2}}%">
                    Agriculture
                </div>
                <div class="progress-bar progress-bar-info" role="progressbar" style="font-weight: 900; font-size: 1em; width:{{$n1}}%">
                    Arts
                </div>
                <div class="progress-bar progress-bar-blue" role="progressbar" style="font-weight: 900; font-size: 1em; width:{{$n3}}%">
                    Education
                </div>
                <div class="progress-bar progress-bar-white" role="progressbar" style="font-weight: 900; font-size: 1em; width:{{$n4}}%">
                    Law
                </div>
                <div class="progress-bar progress-bar-yellow" role="progressbar" style="font-weight: 900; font-size: 1em; width:{{$n6}}%">
                    S.M.Science
                </div>
                <div class="progress-bar progress-bar-warning" role="progressbar" style="font-weight: 900; font-size: 1em; width:{{$n5}}%">
                    Science
                </div>

            </div>
        </div>







        <br><br>
        <!-- CONTESTANTS VOTES-->
        <div class="container">
            <h1>CONTESTANTS VOTES</h1>
            <div class="container">
                @foreach($categories as $category)
                    <?php $CatVoteTotal = 0; ?>
                    @foreach($votes as $vote)
                        @if($vote->category_id == $category->id)
                            <?php $CatVoteTotal = $CatVoteTotal + 1;?>
                        @endif
                    @endforeach
                    @if($CatVoteTotal > 0)
                            <div class="row" style="border: 2px solid blueviolet; border-radius: 5px; margin: 2px; background: lavenderblush;">
                                <h4 style="color: black; font-weight: 600">{{$category->catname}} <br><color style="color: red">Total Vote Here: {{$CatVoteTotal}}</color></h4>
                                @if($CatVoteTotal > 0)

                                    @foreach($contestants as $contestant)
                                        @if($contestant->category_id == $category->id)
                                            <?php $VoteCount = 0; ?>
                                            @foreach($votes as $vote)
                                                @if($vote->voteid == $contestant->contid)
                                                    <?php $VoteCount = $VoteCount + 1; ?>
                                                @endif
                                                <?php $votePercent =($VoteCount)/($CatVoteTotal)*100; ?>
                                            @endforeach
                                            <div class="col-md-2" s tyle="border: 2px solid blueviolet; border-radius: 5px; margin: 2px; background: lavenderblush;">
                                                <h5>{{$contestant->contnick}} <!--~ Total Votes: {{ ($VoteCount) }} --> </h5>
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-primary active" role="progressbar"
                                                         aria-valuenow="{{$votePercent}}"
                                                         aria-valuemin="0" aria-valuemax="100" style="width:{{$votePercent}}%">
                                                        {{ $votePercent }} %
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                @else
                                    <div class="alert alert-warning text-center">
                                        {{$CatVoteTotal}} <p>No Vote Recorded in this Category Yet</p>
                                    </div>
                                @endif
                            </div>
                    @else
                        @continue
                    @endif
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-warning">No Voter's Data Available</div>
    @endif
</div>
@endsection
