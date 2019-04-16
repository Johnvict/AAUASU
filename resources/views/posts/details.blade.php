<div class="container">
    <div class="col-md-8 offset-md-2">
        <h2>Show Post</h2>
        <hr>
        <div class="form-group">
            <h2>{{ $post->title }}</h2>
        </div>

        <div class="form-group">
            <h2>{{ $post->description }}</h2>
        </div>

        <a class="btn btn-xs btn-danger" href="javascript:ajaxLoad('{{ url('posts') }}')">Back</a>
    </div>
</div>