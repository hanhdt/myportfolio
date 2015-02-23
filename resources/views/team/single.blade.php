@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(Auth::check())

                            <a href="{{url('team')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                            <a href="{{url('team/editing/' . $team->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                            <a href="{{url('team/deleting/' . $team->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>
                        @endif
                        <h2 class="section-heading">Name: {{ $team->name }}</h2>

                        <h3 class="section-subheading text-muted">Title: {{ $team->title }}</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <p class="text-info">Description: {{ $team->brief_description }}</p>

                                <p class="text-info">Birthday: {{ $team->birthday }}</p>

                                <p class="item">Image: <img src="../../{{ $team->avatar }}"></p>

                                <p class="text-info">Facebook: {{ $team->facebook }}</p>

                                <p class="text-info">LinkedIn: {{ $team->linkedIn }}</p>

                                <p class="text-info">Twitter: {{ $team->tweeter }}</p>

                                <p class="text-info">Created at: {{ $team->created_at }}</p>

                                <p class="text-info">Updated at: {{ $team->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop