<div class="container">
    <div class="col col-md-8 offset-md-2">
        <h1>{{isset($post)?'Edit' : 'New'}} Post</h1>
        <hr>

        @if(isset($post))
            {!! Form::model($post, ['method'=>'put','id'=>'frm']) !!}
        @else
            {!! Form::open(['id' => 'frm']) !!}
        @endif

        <div class="form-group row required">
            {!! Form::label("title", "Title", ["class" => "col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("title", null,["class" => "form-control".($errors->has('title')?" is-invalid" : ""),
                "autofocus", "placeholder" => "Title"]) !!}
                <span id="error-title" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::label("description", "Description", ["class" => "col-form-label col-md-3 col-lg-2"]) !!}
            <div class="col-md-8">
                {!! Form::text("description", null,["class" => "form-control".($errors->has('description')?" is-invalid" : ""),
                "autofocus", "placeholder" => "Description"]) !!}
                <span id="error-description" class="invalid-feedback"></span>
            </div>
        </div>

        <div class="form-group row required">
            {!! Form::selectRange('number', 10, 2000) !!}
        </div>

        <div class="form-group row">
            <div class="col-md-3 col-lg-2"></div>
                <div class="col-md-4">
                    <a class="btn btn-danger btn-xs" href="javascript:ajaxLoad('{{ url('posts') }}')">Back</a>
                    {!! Form::button("save",["type" => "submit", "class" => "btn btn-primary btn-xs"]) !!}
                </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>