@extends('layouts.aauaites')

<title>AAUASU - Materials</title>

@section('titleHere')
    Materials
@endsection

@guest
@else
    @section('userPix')
        <img class="imag col-md-offset-6" src="{{Auth::user()->Avatar}}"alt="" height="100">
    @endsection
@endguest

@section('content')
    <style>
        input[type="file"] {
            display: none;
        }
        .custom{
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: mediumseagreen;
            color: #ffffff;
            display: inline-block;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>

    @if(session('success') != null)
        <div class="alert alert-success">
            <span class="badge">{{session('success')}}</span>
        </div>
    @elseif(session('error') != null)
        <div class="alert alert-danger">
            <span class="badge">{{session('error')}}</span>
        </div>
    @endif
    <div class ="row">
            <div>
                <span class="badge badge-success"><h4>Upload File</h4></span>
                <br>
                <div class="thumbnail">
                    <p>Note: Admin will check if this file already exists or if it is relevant
                        for the use of AAUAITES<br>
                        We apologise for any inconviniencies this may cause you, <br>but you can be very sure
                        that it will soon be approved.
                    </p>
                    <form action="{{ route('uploadMaterial') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}

                        <label class="custom"><input type="file" name="material"/>Choose File</label>
                        <div class="form-group">
                            <label for="title">Add File Title</label>
                            <input type="text" name="title" class="form-control" placeholder="File Title"/>
                        </div>

                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
    </div>

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
                        <th>Action</th>
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
                            
                            <td>
                                <a href="storage/materials/{{$appMat->name}}" download="{{$appMat->name}}" target="_blank">
                                <img style="max-width: 30px; max-height: 30px" src="{{$appMat->icon}}">
                                </a>
                                {{$appMat->title}}
                            </td>
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
                                <button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-download"></span> Download</button>
                                </a>
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