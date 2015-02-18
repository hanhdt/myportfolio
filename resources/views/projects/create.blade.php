@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('projects')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        <h2 class="section-heading">Create new project</h2>
                    </div>

                    <div class="panel-body">
                        @if($method == 'post')
                            {!! Form::open(array('method' => 'post', 'url' => 'projects')) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('category','Category:') !!}
                                {!! Form::text('category', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
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
