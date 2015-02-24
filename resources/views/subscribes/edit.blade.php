@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('subscribes/show-single/' . $subscribe->id )}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>

                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $subscribe->email }}} subscriber</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $subscribe->email }}}
                                subscriber?</h2>
                        @endif
                    </div>

                    <div class="panel-body">
                        @unless($method == 'delete')
                            {!! Form::open(array('method' => 'put', 'url' => 'subscribes/updating/' . $subscribe->id))
                            !!}
                            <div class="form-group">
                                {!! Form::label('email','Email:') !!}
                                {!! Form::text('email', $subscribe->email, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            @else
                                {!! Form::open(array('method' => 'delete', 'url' => 'subscribes/destroying/' .
                                $subscribe->id ))
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
