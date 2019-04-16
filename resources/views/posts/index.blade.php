<div class="container">
    <div class="row">
        <div class="col-sm-7">
            <h3>Simple CRUD App with Ajax</h3>
        </div>
        <div class="com-sm-5">
            <div class="pull-right">
                <div class="input-group">
                    <input type="text"
                           class="form-control"
                           value="{{ request()->session()->get('search') }}"
                           onkeydown="if (event.keyCode == 13) ajaxLoad('{{ url('posts') }}?search='+this.value)"
                           id="search"
                           name="search"
                           autofocus required
                           placeholder="Search title"/>
                    <div class="input-group-btn">
                        <button type="submit" name="button"
                                onclick="ajaxLoad('{{ url('posts') }}?search='+$('search').val())"
                                class="btn btn-primary">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th width="60px">No.</th>
                <th>Title Posts</th>
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                <th>Description</th>
                {{request()->session()->get('field')=='title'?(request()->session()->get('sort')=='asc'?'&#9652;':'&#9662;'):''}}
                <th>Created At</th>
                <th>Updated At</th>
                <th>
                    <a href="javascript:ajaxLoad('{{ url('posts/create') }}')" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plus"></i> New Post</a>
                </th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach($posts as $key => $value)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->created_at }}</td>
                    <td>{{ $value->updated_at }}</td>
                    <td>
                        <a href="javascript:ajaxLoad('{{ url('posts/show/'.$value->id) }}')" class="btn btn-xs btn-info">Show</a>
                        <a href="javascript:ajaxLoad('{{ url('posts/update/'.$value->id) }}')" class="btn btn-xs btn-warning">Edit</a>
                        <input type="hidden" name="_method" value="delete"/>
                        <a href="javascript:if(confirm('Are you sure to delete this data?')) ajaxDelete('{{ url('posts/deletePost/'.$value->id) }}','{{ csrf_token() }}')" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <ul class="pagination">
        {{ $posts->links() }}
    </ul>
</div>