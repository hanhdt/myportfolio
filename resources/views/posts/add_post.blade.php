@extends('app')

@section('content')
    <div class="container-fluid">
        {!! Form::open(array('url' => 'posts/create', 'method' => 'POST', 'files' => true, 'class' => 'form-horizontal')) !!}
            <div class="form-group">
                <label class="col-sm-2 control-label" for="title">Title</label>
                <div class="col-sm-10">
                    {!! Form::text('title', '' , array('placeholder' => 'Please insert your title here', 'class' => 'form-control')) !!}
                    <p class="label-danger">{!! $errors->first('title') !!}</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {!! Form::submit('save', array('name' => 'send', 'class' => 'btn btn-primary')) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection