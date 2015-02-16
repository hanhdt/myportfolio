@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('skills')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        <a href="{{url('skills/' . $skill->id . '/edit')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                        <a href="{{url('skills/' . $skill->id . '/delete')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>

                        <h2 class="section-heading">{{ $skill->title }}</h2>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h3 class="section-subheading text-muted">{{ $skill->description }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection