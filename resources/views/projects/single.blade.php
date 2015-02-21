@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('projects')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                        <a href="{{url('projects/' . $project->id . '/edit')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                        <a href="{{url('projects/' . $project->id . '/delete')}}"
                           class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>

                        <h2 class="section-heading">{{ $project->name }}</h2>

                        <h3 class="section-subheading text-muted">Category: {{ $project->category->name }}</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">


                                <p class="text-info">Description: {{ $project->description }}</p>

                                <p class="text-info">Started at: {{ $project->started_at }}</p>

                                <p class="text-info">Ended at: {{ $project->ended_at }}</p>

                                <p class="text-info">Created at: {{ $project->created_at }}</p>

                                <p class="text-info">Updated at: {{ $project->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection