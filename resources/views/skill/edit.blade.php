@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('skills')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $skill->title }}} skill</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $skill->title }}} skill?</h2>
                        @endif
                    </div>

                    <div class="panel-body">
                        {!! Form::open(array('method' => 'put', 'url' => 'skills/' . $skill->id)) !!}
                        @unless($method == 'delete')
                            <div class="form-group">
                                {!! Form::label('title','Title:') !!}
                                {!! Form::text('title', $skill->title ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', $skill->description, ['class' => 'form-control']) !!}
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
