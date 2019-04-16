<style>
    .uploader {
        max-width: 50px;
        border: 1px solid #fff;
        border-radius: 10%;
        box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    }
    .dwhite a{
        text-decoration: none;
        color: white;
    }
</style>
@php
$size = ($materials->size)/1024;
if($size >= 1024)
{
$size = number_format($size/1024, 2);
$SIZE = $size."Mb";
}else{
$size = number_format($size, 2);
$SIZE = $size."Kb";
}
@endphp
<div class="media col col-md-12">
    <div class="media-body">
        <div class="panel panel-primary">
            <div class="panel-heading dwhite">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                <div class="media-left">
                    <a href="/profile/{{$materials->user->Username}}">
                        <img class="profile-img col-offset-5"src="{{$materials->user->Avatar}}" style="width:70px"></a>
                    <div class="white"><b>{{ $materials->user->Username }}</b></div>
                </div>
                <a href="/storage/materials/{{$materials->name}}"><h6 class="media-heading"><b>File Title: {{ $materials->title }}</b></h6></a>
            </div>
            <div class="panel-body" data-statusId="{{ $materials->id }}">
                <span class="pull-right">
                  <i>{{$materials->created_at->diffForHumans()}}</i>
                </span><br>
                <div class="interaction">
                    <div class="thumbnail" style="background-color: white;">
                        <a href="/storage/materials/{{$materials->name}}" download="{{$materials->name}}" target="_b;lank">
                            <img class="icon" src="{{$materials->icon}}" alt="{{ $materials->type }}">
                            <div class="figure-caption">
                                <p>{{$SIZE}}</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>