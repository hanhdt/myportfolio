@extends('default')

@section('content')

    <div class="container bg-light-gray">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Operations</div>

                    <div class="panel-body">
                        <div class="btn-group btn-group-lg">
                            <a href="{{url('projects/create')}}" class="btn btn-primary fa fa-plus-circle fa-inverse">
                                Add
                                new project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Projects</h2>

                <h3 class="section-subheading text-muted">I built projects.</h3>
            </div>
        </div>
        <div class="row text-center">
            @foreach($projects as $project)
                <div class="col-md-4 col-sm-6 portfolio-item">

                    <a href="{{url('projects/' . $project->id)}}" class="portfolio-link" data-toggle="modal">
                        {{--<div class="portfolio-hover">--}}
                        {{--<div class="portfolio-hover-content">--}}
                        {{--<i class="fa fa-plus fa-3x"></i>--}}
                        {{--</div>--}}
                        {{--</div>--}}
                        <img src="img/portfolio/escape.png" class="img-responsive" alt="">
                    </a>

                    <div class="portfolio-caption">
                        <h4>{{ $project->name }}</h4>

                        <p class="text-info"> {{ $project->category->name }}</p>

                        <p class="text-info">Started at: {{ $project->started_at }}</p>

                        <p class="text-info">Ended at: {{ $project->ended_at }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection