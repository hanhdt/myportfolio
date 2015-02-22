<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Timeline</h2>

        <h3 class="section-subheading text-muted">My career, my journey.</h3>
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
                                <h4 class="subheading"><a
                                            href="{{url('about/show/' . $about->id )}}"> {{ $about->title }} </a>
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