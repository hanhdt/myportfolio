@extends('app')

@section('content')
    {!! Form::open(array('url' => 'photos/upload', 'method' => 'POST', 'files' => true)) !!}
    <div class="form-group">
        {!! Form::text('title', '' , array('placeholder' => 'Please insert your title here')) !!}
        <p class="label-danger">{!! $errors->first('title') !!}</p>
        {!! Form::file('image') !!}
        <p class="label-danger">{!! $errors->first('image') !!}</p>
        {!! Form::submit('save!', array('name' => 'send')) !!}
    </div>
    {!! Form::close() !!}
@endsection