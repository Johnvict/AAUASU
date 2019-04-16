<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"><b>400 LEVEL COURSES</b></h4>
    </div>
    <div class="modal-body alert alert-info">
        @php $thisCount = 0 @endphp
        @foreach($myCourses as $myCourse)
            @if($myCourse->level == 400)
                @php $thisCount = $thisCount + 1 @endphp
            @endif
        @endforeach
        @if($thisCount>0)
            <div class="">
                <table class="table modal-body">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Code</th>
                        <th>Unit</th>
                        <th>Grade</th>
                        <th>Remove Course</th>
                        <th>Update Grade</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $sn = 0 @endphp
                    @foreach($myCourses as $myCourse)
                        @if($myCourse->level == 400)
                            @php $sn++ @endphp
                            <tr>

                                <th class=""><b>{{ $sn }}</b></th>
                                <td class=""><b>{{ $myCourse -> code }}</b></td>
                                <td class=""><b>{{ $myCourse->unit }}</b></td>
                                <td class=""><b>{{ $myCourse -> grade }}</b></td>

                                <td class="">
                                    <button type="button" class="label label-danger" data-toggle="modal" data-target="#remove{{$myCourse->id}}">Remove Course</button>

                                    <!-- Remove Modal -->
                                    <div class="modal fade" id="remove{{$myCourse->id}}" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header alert alert-danger">
                                                    <h4 class="modal-title"><b>Remove {{$myCourse-> code}}</b></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="text-center">Are you sure you want to remove {{$myCourse->code}} from {{$myCourse->level}} level courses?
                                                        <b>You can add it later anyway</b></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="/removeCourse/{{$myCourse -> id }}" class="btn btn-danger">Remove Course</a>
                                                    <button type="button" class="btn btn-success btn-group-lg" data-dismiss="modal"><b>No</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <a href="#updateGrade{{$myCourse->id}}" class="label label-success" data-toggle="collapse"><b>Update Grade</b></a>
                                    <div id="updateGrade{{$myCourse->id}}" class="collapse">
                                        <form method="post" action="/updateGrade/{{$myCourse -> id }}" enctype="multipart/form-data">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col col-md-1">
                                                    <div class="form-group">
                                                        <select name="courseGrade">
                                                            <option value="NA">N/A</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                        </select>
                                                        @if ($errors->has('courseCode'))
                                                            <span class="help-block"><strong>{{ $errors->first('courseCode') }}</strong></span>
                                                        @endif
                                                    </div>
                                                    <button type="submit" class="label label-primary">Save</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                    </tr>
                </table>
            </div>
        @else
            <div class="alert alert-warning">
                <b>No COURSES found for this semester</b>
            </div>
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>