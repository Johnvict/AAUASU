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



        <div class="panel panel-news">
            <div class="panel-heading">
                <b>{{$new->title}}</b>
            </div>
            <div class="panel-body">
                <p style="text-align:justify; font-family: calibri">{!! $new->fewerBody !!}<b>
                    <a
                        href="#" style="color: dodgerblue;" data-toggle="modal"
                        data-target="#show{{$new->id}}">Read more
                    </a>
                    </b>
                </p>
            </div>
        </div>

<!-- Read More Modal -->
<div class="modal fade" id="show{{$new->id}}" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header alert ">
                <h4 class="modal-title"><b>{!! $new->title !!}</b></h4>
            </div>
            <div class="modal-body">
                <b style="text-align: left;">{!! $new->body !!}</b>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-xs" data-dismiss="modal"><b>X</b></button>
            </div>
        </div>
    </div>
</div>

