<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Our Amazing Team</h2>

        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
    </div>
</div>
<div class="row">
    @foreach($teams as $team)
        <div class="col-sm-{{ 12 / count($teams) }}">
            <div class="team-member">
                <img src="{{ $team->avatar }}" class="img-responsive img-circle" alt="">
                <h4>{{ $team->name }}</h4>

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