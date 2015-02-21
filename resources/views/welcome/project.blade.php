<div class="row">
    <div class="col-lg-12 text-center">
        <h2 class="section-heading">Projects</h2>

        <h3 class="section-subheading text-muted">I built projects.</h3>
    </div>
</div>
<div class="row">
    @foreach($projects as $project)
        <div class="col-md-4 col-sm-6 portfolio-item">

            <a href='#portfolioModal{{$project->id}}' class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/portfolio/startup-framework.png" class="img-responsive" alt="">
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