@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('contacts/' . $contact->id)}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        @if($method == 'put')
                            <h2 class="section-heading">Edit #{{{ $contact->name }}} contact</h2>
                        @elseif($method == 'delete')
                            <h2 class="section-heading">Are you sure to delete #{{{ $contact->name }}} contact?</h2>
                        @endif
                    </div>

                    <div class="panel-body">

                        @unless($method == 'delete')
                            {!! Form::open(array('method' => 'put', 'url' => 'contacts/' . $contact->id)) !!}
                            <div class="form-group">
                                {!! Form::label('name','Name:') !!}
                                {!! Form::text('name', $contact->name ,['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('email', 'Email:') !!}
                                {!! Form::text('email', $contact->email, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('phone', 'Phone:') !!}
                                {!! Form::text('phone', $contact->phone, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('message','Message:') !!}
                                {!! Form::textarea('message', $contact->message, ['class' => 'form-control'])
                                !!}
                            </div>

                            <div class="form-group">
                                {!! Form::submit("Save", array("class" => 'btn btn-primary form-control')) !!}
                            </div>
                            @else
                                {!! Form::open(array('method' => 'delete', 'url' => 'contacts/' . $contact->id)) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                            @endif
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
