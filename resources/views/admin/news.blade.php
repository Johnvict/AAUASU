@extends('layouts.aauaites')
<title>Admin - News Page</title>
@section('titleHere')
    Admin - News
@endsection


<style>
    .panel {
        -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
        color: black;
    }
    .panel-news > .panel-heading {
        background-image: -webkit-linear-gradient(top, black 0%, white 100%);
        background-image: linear-gradient(to bottom, black 0%, black 100%);
        background-repeat: repeat-x;
        color:white;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='black', endColorstr='black', GradientType=0);
    }
</style>

@section('content')
    @if(session('success') != null)
        <div class="alert alert-success">
            <span class="badge">{{session('success')}}</span>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default text-left">
                <div class="panel-body">
                    <form method="POST" action="{{ route('createNews') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="content">News Headline</label>
                            <input type="text" class="form-control" name="title" placeholder="add news headline..">
                            @if ($errors->has('title'))
                                <span class="help-block">
                              <strong>{{ $errors->first('title') }}</strong>
                          </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="content">News Content</label>
                            <textarea id="article-ckeditor" type="text" name="body" class="form-control" style="width:100%;height:200px;" placeholder="Write news here.."></textarea>
                            @if ($errors->has('body'))
                                <span class="help-block">
                              <strong>{{ $errors->first('body') }}</strong>
                          </span>
                            @endif
                        </div>

                        <div class="form-group text-center">
                            <label for="content">Show News To Users?</label><br>
                            <input type="radio" checked="checked" name="show" value="1">Show Now</b>
                            </input><br>
                            <input type="radio" name="show" value="0">Hide</b>
                            </input>
                        </div>

                        <button type="submit" class="btn btn-success pull-right">Post News</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @if(count($news) > 0)
        @foreach($news as $new)

            <div class="panel panel-news">

                <div class="panel-heading">
                    <b><h3>{{$new->title}}</h3></b>
                    <b><h6>Posted On: {{$new->created_at}}: {{$new->created_at->diffForHumans()}}</h6></b>
                    <b><h6>Edited On: {{$new->updated_at}}: {{$new->updated_at->diffForHumans()}}</h6></b>

                </div>
                <div class="panel-body">
                    <p style="text-align:justify; font-family: calibri;">{!! $new->body !!}</p>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                data-target="#edit{{$new->id}}"><span class="glyphicon glyphicon-edit"> Edit</span></button>
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                data-target="#delete{{$new->id}}"><span class="glyphicon glyphicon-trash"> Delete</span></button>
                    </div>
                </div>
            </div>

            <!-- Edit Modal -->
            <div class="modal fade" id="edit{{$new->id}}" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header alert ">
                            <h4 class="modal-title"><b>{{ $new->title }}</b></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('editNews') }}">
                                {{ csrf_field() }}

                                <input type="hidden" name="newsId" value="{{$new->id}}"/>

                                <div class="form-group">
                                    <label for="content">News Headline</label>
                                    <input type="text" class="form-control" name="title" value="{{ $new->title }}">
                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="content">News Content</label>
                                    <textarea id="article-ckeditor" type="text" name="body" class="form-control" style="width:100%;height:200px;" value="{!! $new->body !!}">{{ $new->body }}"</textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="content">Show News To Users?</label><br>
                                    <input type="radio" @if($new->show_status == "1") checked="checked" @endif name="show" value="1">
                                        <b>@if($new->show_status == "1") Shown @else Show Now @endif</b>
                                    </input><br>
                                    <input type="radio" @if($new->show_status == "0") checked= "checked" @endif name="show" value="0">
                                        <b> @if($new->show_status == "0") Hidden @else Hide Now @endif</b>
                                    </input>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="submit" class="btn btn-success btn-xs"><b>Save Changes</b></button>
                                    <button type="button" class="btn btn-default btn-xs disabled"><b>Check Please</b></button>
                                    <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal"><b>Cancel Changes</b></button>
                                </div><br>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Delete Modal -->
            <div class="modal fade" id="delete{{$new->id}}" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header alert ">
                            <h4 class="modal-title"><b>{{ $new->title }}</b></h4>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('editNews') }}">
                                {{ csrf_field() }}
                                {!! $new->fewerBody !!}
                                <p style="color:#ff0000; font-family: 'Incised901 Nd Bt';" ><b>Delete News?</b></p>
                                <div class="btn-group pull-right">
                                    <a href="/delete-news/{{$new->id}}/" class="btn btn-danger btn-xs"><b>Delete</b></a>
                                    <button type="button" class="btn btn-default btn-xs disabled"><b>Check Please</b></button>
                                    <button type="button" class="btn btn-success btn-xs" data-dismiss="modal"><b>Cancel</b></button>
                                </div><br>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach


    @else
        <div class="alert alert-success">
            <p>No News added yet</p>
        </div>
    @endif




@endsection