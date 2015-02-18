@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('projects/' . $project->id)}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $project->name }}} project</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $project->name }}} project?</h2>
                        @endif
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array('method' => 'put', 'url' => 'projects/' . $project->id)) !!}
                        @unless($method == 'delete')
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', $project->name ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('category','Category:') !!}
                                {!! Form::text('category', $project->category ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', $project->description, ['class' => 'form-control'])
                                !!}
                            </div>
                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            @else
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                            @endif
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
