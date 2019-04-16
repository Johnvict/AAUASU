@extends('layouts.aauaites')

<title>Edit Post</title>

@section('titleHere')
    Edit Post
@endsection

@section('content')

    <div class="row">
        <section class="ro w">
            <div class="media col col-md-12">
                <div class="media-body">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <form method="POST" action="/update/{{$post->id}}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="content">Edit Post</label>
                                        <b><textarea style="color: green;"type="text" rows="10" value="{{$post->content}}" name="content" class="form-control" >{{$post->content}}</textarea></b>

                                        @if ($errors->has('postIntended'))
                                            <span class="help-block"><strong>{{ $errors->first('postIntended') }}</strong></span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm pull-right"><b>Update Post</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection