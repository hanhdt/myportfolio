@extends('default')

@section('content')
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
