@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('about/show/' . $about->id )}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $about->title }}} time-line</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $about->title }}} time-line?</h2>
                        @endif
                    </div>

                    <div class="panel-body">
                        @unless($method == 'delete')
                            {!! Form::open(array('method' => 'put', 'url' => 'about/updating/' . $about->id , 'files' =>
                            true)) !!}
                            <div class="form-group">
                                {!! Form::label('title','Title:') !!}
                                {!! Form::text('title', $about->title ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('description','Description:') !!}
                                {!! Form::textarea('description', $about->description, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('milestone','Milestone:') !!}
                                {!! Form::text('milestone', $about->milestone, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('image', 'Image:') !!}
                                {!! Form::input('file','image', $about->image , ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            @else
                                {!! Form::open(array('method' => 'delete', 'url' => 'about/destroy/' . $about->id )) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                {!! Form::close() !!}
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
