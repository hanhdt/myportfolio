@extends('default')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Amazing Team</h2>

            <h3 class="section-subheading text-muted">Awesome.</h3>
            @if(Auth::check()) {{-- If user is a administror --}}
            <div class="panel panel-default">
                <div class="panel-heading text-left text-uppercase">Operations</div>

                <div class="panel-body">
                    <div class="btn-group btn-group-lg">
                        <a href="{{url('team/creating')}}" class="btn btn-primary">Create a member</a>
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        @foreach($teams as $team)
            <div class="col-sm-{{ 12 / count($teams) }}">
                <div class="team-member">
                    <img src="{{ $team->avatar }}" class="img-responsive img-circle" alt="">
                    <h4><a href="{{url('team/showing/' . $team->id)}}">{{ $team->name }}</a></h4>

                    <p class="text-muted">{{ $team->title }}</p>
                    <ul class="list-inline social-buttons">
                        <li><a href="{{ $team->tweeter }}"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li><a href="{{ $team->facebook }}"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="{{ $team->linkedIn }}"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <p class="large text-muted">We love to building high-quality software.</p>
        </div>
    </div>
@stop