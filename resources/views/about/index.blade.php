@extends('default')

@section('content')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Timeline</h2>

            <h3 class="section-subheading text-muted">My career journey.</h3>
            @if(Auth::check()) {{-- If user is a administror --}}
            <div class="panel panel-default">
                <div class="panel-heading text-left text-uppercase">Operations</div>

                <div class="panel-body">
                    <div class="btn-group btn-group-lg">
                        {!! link_to_action('AboutController@getTimeline','Create a Time-line',null,['class' => 'btn
                        btn-primary']) !!}
                        {{--<a href="{{url('about/timeline')}}" class="btn btn-primary">Create a time-line</a>--}}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <ul class="timeline">
                @foreach($abouts as $about)
                    @if($about->id % 2 == 0)
                        <li>
                    @else
                        <li class="timeline-inverted">
                            @endif
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{ $about->image }}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{ $about->milestone }}</h4>
                                    <h4 class="subheading">
                                        {!! link_to_action('AboutController@getShow', $about->title, [$about->id], null)
                                        !!}
                                        {{--<a href="{{url('about/show/' . $about->id )}}"> {{ $about->title }} </a>--}}
                                    </h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted"> {{ $about->description }}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
            </ul>
        </div>
    </div>
@endsection