
        @php
            $CountComments = 0;
            foreach($comments as $comment){
                if($comment->postUpdate_id == $status->id)
                {
                    $CountComments++;
                }
            }
        @endphp

        <section class="row">
            <div class="media col col-md-12">
                <div class="media-left">
                    <a href="/profile/{{$status->user->Username}}"><img class="profile-img col-offset-5" src="{{$status->user->Avatar}}" style="width:70px"></a>
                    <div class="white"><b>{{ $status->user->Username }}</b></div>
                </div>
                <div class="media-body">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <a href="/profile/{{$status->user->Username}}"><h4 class="media-heading"><b>{{ $status->user->Name }} </b>
                                    @if($CountComments > 0)
                                        <span class="badge">{{$CountComments}}
                                            @if($CountComments == 1)
                                                Comment
                                            @elseif($CountComments > 1)
                                                Comments
                                            @endif
                                        </span>
                                    @endif
                                </h4></a>
                        </div>
                        <div class="panel-body" data-statusId="{{ $status->id }}">
                                  <span class="pull-right">
                                      <i>{{$status->created_at->diffForHumans()}}</i>
                                  </span><br>

                                <p style="text-align:justify; font-family: calibri">{!! $status->shortContent !!} <a href="/status/{{$status->id}}">Read more</a><br><hr></p>

                                 <a href='#' class="like btn btn-success btn-sm">
                                    <span
                                            class="glyphicon glyphicon-thumbs-up">
                                          {{ Auth::user()->likes()->where('post_id', $status->id)->first() ?
                                          Auth::user()->likes()->where('post_id', $status->id)->first()->like == 1 ?
                                          'You like this Post' : 'Like' : 'Like' }}
                                    </span>
                                </a>


                                <a href='#' class="like btn btn-warning btn-sm"><span class="glyphicon glyphicon-thumbs-down">
                                          {{ Auth::user()->likes()->where('post_id', $status->id)->first() ? Auth::user()->likes()->where('post_id', $status->id)->first()->like == 0 ? 'You dont\'t like this Post' : 'Dislike' : 'Dislike' }}</span></a>
                                <a href="/status/{{$status->id}}/" class="btn btn-primary btn-xs">
                                            @if($CountComments <= 1)
                                                Comment
                                            @elseif($CountComments > 1)
                                                Comments
                                            @endif
                                    <span class="badge ">{{$CountComments}}</span>
                                </a>

                            {{--<div class="post" data-postid="{{ $status->id }}">--}}
                                {{--<div class="interaction">--}}
                                    {{--<a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $status->id)->first() ? Auth::user()->likes()->where('post_id', $status->id)->first()->like == 1 ? 'You Like This Post' : 'Like' : 'Like' }}</a>--}}
                                    {{--<a href="#" class="like">{{ Auth::user()->likes()->where('post_id', $status->id)->first() ? Auth::user()->likes()->where('post_id', $status->id)->first()->like == 0 ? 'You dont Like This Post' : 'Dislike' : 'Dislike' }}</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                                @if(Auth::User() == $status->User)
                                    <a href="/edit/{{$status->id}}/" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-edit"> Edit</span></a>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#removeThis{{$status->id}}"><span class="glyphicon glyphicon-trash"> Delete</span></button>

                                    <!-- Remove Modal -->
                                    <div class="modal fade" id="removeThis{{$status->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header alert ">
                                                    <h4 class="modal-title"><b>Delete Post</b></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-ce nter"><b>Alert! You are about to delete your post</b><br><br>

                                                        <section style="font-size: 1.0em;font-weight: 800; color: maroon;">
                                                            1. All Comments and likes will be lost <br>
                                                            2. The post will cease to appear to you  and other AAUAITES <br><br>
                                                        </section>
                                                        <b>Are you sure to proceed?</b></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/delete/{{$status->id}}/" class="btn btn-danger">Yes</a>
                                                    <button type="button" class="btn btn-success btn-group-lg" data-dismiss="modal"><b>No</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if(Auth::user() == $status->User)
                                @else
                                    @if(Auth::user()->is_admin == "1")
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                data-target="#remove{{$status->id}}"><span class="glyphicon glyphicon-trash"> Delete</span></button>

                                        <!-- Remove Modal -->
                                        <div class="modal fade" id="remove{{$status->id}}" role="dialog">
                                            <div class="modal-dialog">
                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                    <div class="modal-header alert ">
                                                        <h4 class="modal-title"><b>Delete User's Post</b></h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p class="text-ce nter"><b>Alert! You are about to delete a post by</b>
                                                            <b>{{ $status->user->Name }}</b><br><br>

                                                            <section style="font-size: 1.0em;font-weight: 800; color: maroon;">
                                                                1. All Comments and likes will be lost <br>
                                                                2. The post will cease to appear to everybody <br><br>
                                                            </section>
                                                            <b>Are you sure to proceed?</b></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a href="/delete/{{$status->id}}/" class="btn btn-danger">Yes</a>
                                                        <button type="button" class="btn btn-success btn-group-lg" data-dismiss="modal"><b>No</b></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <script src="{{ asset('/js/like.js') }}"></script>
    <script type="text/javascript">
        var token = '{{ Session::token() }}';
        var urlLike = '{{ route('like') }}';
    </script>

