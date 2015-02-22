@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('about')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        <h2 class="section-heading">Create new a Time-line</h2>

                        <p class="text-info">Enter descriptions</p>
                    </div>

                    <div class="panel-body">
                        @if($method == 'post')
                            {!! Form::open(array('method' => 'post', 'url' => 'about/timeline', 'files' => true)) !!}
                            <div class="form-group">
                                {!! Form::label('title','Title:') !!}
                                {!! Form::text('title', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('milestone','Milestone:') !!}
                                {!! Form::text('milestone', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('image', 'Image:') !!}
                                {!! Form::input('file','image', null, ['class' => 'form-control']) !!}
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
