@extends('layouts.aauaites')
<title>Admin - Material Uploads</title>
@section('titleHere')
    Admin - Material Uploads
@endsection


@section('content')
    <style>
        .icon{
            max-width: 80px;
            border: 5px solid #fff;
            border-radius: 10%;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
        }
    </style>


@section('content')
    @if(session('success') != null)
        <div class="alert alert-success">
            <span class="badge">{{session('success')}}</span>
        </div>
    @endif
    @if(count($materials) > 0)

            <div class="panel panel-primary">
                <div class="panel-heading"><b>Materials Awaiting Admin Approval</b></div>
                <div class="panel-body">


                    <table class="table table-hover table-strriped" style="font-size: 1em">
                        <thead>
                        <tr>
                            <th>Icon</th>
                            <th>Title</th>
                            <th>Uploader</th>
                            <th>Size</th>
                            <th>Time</th>
                            <th>Admin Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($materials as $mat)
                            <tr>
                                @php
                                $size = ($mat->size)/1024;
                                if($size >= 1024)
                                {
                                $size = number_format($size/1024, 2);
                                $SIZE = $size."Mb";
                                }else{
                                $size = number_format($size, 2);
                                $SIZE = $size."Kb";
                                }
                                @endphp
                            <td>
                                <div class="thumbnail">
                                    <a href="storage/materials/{{$mat->name}}" download="{{$mat->name}}" target="_b;lank">
                                        <img class="icon" src="{{$mat->icon}}" alt="{{ $mat->type }}">
                                        <div class="figure-caption">
                                            <p>{{$mat->type}}</p>
                                        </div>
                                    </a>
                                </div>


                                <div class="caption"></div>
                            </td>
                            <td>{{$mat->title}}</td>
                            <td>{{$mat->user->Username}}</td>
                            <td>{{$SIZE}}</td>
                            <td>{{$mat->created_at->diffForHumans()}}</td>
                            <td>
                                <form action="{{route('approve')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="approve" value="{{$mat->id}}">
                                    <button type="submit" class="btn btn-success btn-xs">Approve</button>
                                </form>
                                <form action="{{route('disapprove')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="disapprove" value="{{$mat->id}}">
                                    <input type="hidden" name="filename" value="{{$mat->name}}">
                                    <button type="submit" class="btn btn-danger btn-xs">Disapprove</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    @else
        <div class="alert alert-info">
            <h4><b>No Material Pending for Approval</b></h4>
        </div>
    @endif

    @if(count($appMaterials)>0)
        <div class="row">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4><b>Available Materials</b></h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Size</th>
                            <th>Uploaded</th>
                            <th>Credits</th>
                            <th>Download</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $sn = 1; @endphp
                        @foreach($appMaterials as $appMat)
                            @php
                            $size = ($appMat->size)/1024;
                            if($size > 100)
                            {
                            $size = number_format($size/1024, 2);
                            $SIZE = $size."Mb";
                            }else{
                            $size = number_format($size, 2);
                            $SIZE = $size."Kb";
                            }
                            @endphp
                            <tr style="color: black; font-weight: 400">
                                <td>{{$sn}}</td>
                                <td><img style="max-width: 30px; max-height: 30px" src="{{$appMat->icon}}">  {{$appMat->title}}</td>
                                <td>{{$SIZE}}</td>
                                <td>{{$appMat->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="/profile/{{$appMat->user->Username}}">
                                        <img class="profile-img col-offset-5" src="{{$appMat->user->Avatar}}" style="width:30px">
                                        <br><p style="color: black;">{{ $appMat->user->Username }}</p>
                                    </a>
                                </td>
                                <td>
                                    <a href="storage/materials/{{$appMat->name}}" download="{{$appMat->name}}" target="_blank">
                                        <button class="btn btn-success btn-xs">Download</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('disapprove')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="disapprove" value="{{$appMat->id}}">
                                        <input type="hidden" name="filename" value="{{$appMat->name}}">
                                        <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @php $sn++; @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            <p>No Material Available Yet</p>
        </div>
    @endif

@endsection