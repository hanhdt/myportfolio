@extends('app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        @if(Auth::check())

                            <a href="{{url('about')}}" class="btn btn-primary fa fa-minus-circle fa-inverse"> Back</a>
                            <a href="{{url('about/editing/' . $about->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Update</a>
                            <a href="{{url('about/deleting/' . $about->id )}}"
                               class="btn btn-primary fa fa-minus-circle fa-inverse"> Delete</a>
                        @endif
                        <h2 class="section-heading">Title: {{ $about->title }}</h2>

                        <h3 class="section-subheading text-muted">Milestone: {{ $about->milestone }}</h3>
                    </div>

                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">

                                <p class="text-info">Description: {{ $about->description }}</p>

                                <p class="item">Image: <img src="../../{{ $about->image }}"></p>

                                <p class="text-info">Created at: {{ $about->created_at }}</p>

                                <p class="text-info">Updated at: {{ $about->updated_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop