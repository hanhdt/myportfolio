@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('team/showing/' . $team->id )}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $team->name }}} time-line</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $team->name }}} time-line?</h2>
                        @endif
                    </div>

                    <div class="panel-body">
                        @unless($method == 'delete')
                            {!! Form::open(array('method' => 'put', 'url' => 'team/updating/' . $team->id , 'files' =>
                            true)) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', $team->name ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('title','Title:') !!}
                                {!! Form::text('title', $team->title ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('tweeter','Twitter:') !!}
                                {!! Form::text('tweeter', $team->tweeter ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('facebook','Facebook:') !!}
                                {!! Form::text('facebook', $team->facebook ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('linkedIn','LinkedIn:') !!}
                                {!! Form::text('linkedIn', $team->linkedIn ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('brief_description','Description:') !!}
                                {!! Form::textarea('brief_description', $team->brief_description, ['class' =>
                                'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('birthday','Birthday:') !!}
                                {!! Form::input('date','birthday', $team->birthday, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('avatar', 'Avatar:') !!}
                                {!! Form::input('file','avatar', $team->avatar, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            @else
                                {!! Form::open(array('method' => 'delete', 'url' => 'team/destroying/' . $team->id ))
                                !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                {!! Form::close() !!}
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
