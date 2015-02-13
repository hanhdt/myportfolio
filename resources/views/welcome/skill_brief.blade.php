<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Programming Skills</h2>

        <h3 class="section-subheading text-muted">We are good in technologies.</h3>
    </div>
</div>
<div class="row text-center">

    @foreach($skills as $skill)
        <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        @if(strpos($skill->title,'CMS'))
                            <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        @elseif(str_contains($skill->title,'Mobile'))
                            <i class="fa fa-android fa-stack-1x fa-inverse"></i>
                        @elseif(str_contains($skill->title,'Web'))
                            <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                        @else
                            <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                        @endif
                    </span>
            <h4 class="service-heading">{{ $skill->title }}</h4>

            <p class="text-muted">{{{ $skill->description }}}</p>
        </div>
    @endforeach

    {{--<div class="col-md-4">--}}
    {{--<span class="fa-stack fa-4x">--}}
    {{--<i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
    {{--<i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>--}}
    {{--</span>--}}
    {{--<h4 class="service-heading">E-Commerce & CMS Modules</h4>--}}

    {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto--}}
    {{--quo inventore harum ex magni, dicta impedit.</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<span class="fa-stack fa-4x">--}}
    {{--<i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
    {{--<i class="fa fa-android fa-stack-1x fa-inverse"></i>--}}
    {{--</span>--}}
    {{--<h4 class="service-heading">Mobile Development</h4>--}}

    {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto--}}
    {{--quo inventore harum ex magni, dicta impedit.</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<span class="fa-stack fa-4x">--}}
    {{--<i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
    {{--<i class="fa fa-laptop fa-stack-1x fa-inverse"></i>--}}
    {{--</span>--}}
    {{--<h4 class="service-heading">Web Development</h4>--}}

    {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto--}}
    {{--quo inventore harum ex magni, dicta impedit.</p>--}}
    {{--</div>--}}
    {{--<div class="col-md-4">--}}
    {{--<span class="fa-stack fa-4x">--}}
    {{--<i class="fa fa-circle fa-stack-2x text-primary"></i>--}}
    {{--<i class="fa fa-desktop fa-stack-1x fa-inverse"></i>--}}
    {{--</span>--}}
    {{--<h4 class="service-heading">Desktop Development</h4>--}}

    {{--<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto--}}
    {{--quo inventore harum ex magni, dicta impedit.</p>--}}
    {{--</div>--}}
</div>