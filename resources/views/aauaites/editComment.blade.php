@extends('layouts.aauaites')

<title>AAUASU - Edit Comment</title>

@section('titleHere')
    Edit Comment
@endsection
@section('content')
    <div class="row">
        <section class="ro w">
            <div class="media col col-md-12">
                <div class="media-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-body">
                                <form method="POST" action="/updateComment/{{$comment->id}}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="content">Edit Comment</label>
                                        <b><textarea style="color: dodgerblue;"type="text" rows="10" value="{{$comment->body}}" name="body" class="form-control" >{{$comment->body}}</textarea></b>

                                        @if ($errors->has('postIntended'))
                                            <span class="help-block"><strong>{{ $errors->first('postIntended') }}</strong></span>
                                        @endif
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm pull-right"><b>Update Comment</b></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection