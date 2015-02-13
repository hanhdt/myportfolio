@extends('default')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Skills Section -->
    <section id="services">
        <div class="container">
            @include('welcome.skill_brief')
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            @include('welcome.project')
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            @include('welcome.about')
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            @include('welcome.team')
        </div>
    </section>

@endsection
