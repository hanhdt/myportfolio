@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('projects')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        <h2 class="section-heading">Create new project</h2>

                        <p class="text-info">Enter project descriptions</p>
                    </div>

                    <div class="panel-body">
                        @if($method == 'post')
                            {!! Form::open(array('method' => 'post', 'url' => 'projects')) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', null ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('category_id','Category:') !!}
                                {!! Form::select('category_id', App\Http\Controllers\ProjectController::getCategories()
                                ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('started_at','Started at:') !!}
                                {!! Form::input('date','started_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('ended_at','Ended at:') !!}
                                {!! Form::input('date','ended_at', date('Y-m-d'), ['class' => 'form-control']) !!}
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
