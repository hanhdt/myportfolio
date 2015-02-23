@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('team')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        <h2 class="section-heading">Create new a member</h2>

                        <p class="text-info">Enter descriptions</p>
                    </div>

                    <div class="panel-body">
                        @if($method == 'post')
                            {!! Form::open(array('method' => 'post', 'url' => 'team/storing', 'files' => true)) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('title','Title:') !!}
                                {!! Form::text('title', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('tweeter','Twitter:') !!}
                                {!! Form::text('tweeter', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('facebook','Facebook:') !!}
                                {!! Form::text('facebook', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('linkedIn','LinkedIn:') !!}
                                {!! Form::text('linkedIn', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('brief_description','Description:') !!}
                                {!! Form::textarea('brief_description', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('birthday','Birthday:') !!}
                                {!! Form::input('date','birthday', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('avatar', 'Avatar:') !!}
                                {!! Form::input('file','avatar', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            {!! Form::close() !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
