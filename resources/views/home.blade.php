@extends('layouts.app')
@section('title', 'Terranavia — Earth Intelligence')
@section('content')

{{-- ========================================
     HERO
     ======================================== --}}

<section class="hero">
    <div class="hero-image">
        <img
            src="{{ asset('images/hero-earth.png') }}"
            alt="Earth observation landscape"
        >
    </div>

    <div class="hero-overlay"></div>
    <div class="hero-content">
        <p class="hero-eyebrow">
            EARTH OBSERVATION & GEOSPATIAL INTELLIGENCE
        </p>

        <h1>
            Understanding Earth<br>
            through better data.
        </h1>

        <p class="hero-description">
            Terranavia transforms Earth observation data
            into spatial intelligence for a changing world.
        </p>
    </div>

</section>

{{-- ========================================
     INTRO — THE IDEA
     ======================================== --}}

<section class="intro">
    <div class="intro-grid">
        <div class="intro-heading">
            <p class="section-label">
                SEEING EARTH DIFFERENTLY
            </p>
            <h2>
                Understanding places,
                landscapes, and change.
            </h2>
        </div>

        <div class="intro-copy">
            <p>
                The world is constantly changing.
                Landscapes evolve, infrastructure expands,
                environments shift, and human activity
                leaves patterns across space.
            </p>

            <p>
                Terranavia uses geospatial data to make
                those changes visible, interpretable,
                and useful.
            </p>
        </div>
    </div>
</section>

{{-- ========================================
     WHAT WE OBSERVE
     ======================================== --}}

<section class="observation">
    <div class="observation-header">
        <p class="section-label">
            WHAT WE OBSERVE
        </p>

        <h2>
            Seeing the patterns
            that shape our world.
        </h2>
    </div>

<div class="observation-grid">

    <article class="observation-card">

        <div class="observation-card-content">
            <span>01</span>

            <h3>Landscapes</h3>

            <p>
                Understanding how places evolve
                and change over time.
            </p>
        </div>
        <div class="observation-card-image">
            <img src="{{ asset('images/observation-landscape.jpg') }}"
            alt="Aerial view of agricultural landscapes"
            >
        </div>
    </article>


    <article class="observation-card">

        <div class="observation-card-content">
            <span>02</span>

            <h3>Infrastructure</h3>

            <p>
                Seeing how development reshapes
                the built environment.
            </p>
        </div>

        <div class="observation-card-image">
            <img
                src="{{ asset('images/observation-infrastructure.png') }}"
                alt="Aerial view of infrastructure"
            >
        </div>

    </article>


    <article class="observation-card">

        <div class="observation-card-content">
            <span>03</span>

            <h3>Environment</h3>

            <p>
                Observing ecosystems, natural areas,
                and environmental change.
            </p>
        </div>

        <div class="observation-card-image">
            <img
                src="{{ asset('images/observation-environment.jpg') }}"
                alt="Aerial view of natural environment"
            >
        </div>

    </article>


    <article class="observation-card">

        <div class="observation-card-content">
            <span>04</span>

            <h3>Human Activity</h3>

            <p>
                Understanding how human activity creates
                patterns across places.
            </p>
        </div>

        <div class="observation-card-image">
            <img
                src="{{ asset('images/observation-human-activity.jpg') }}"
                alt="Aerial view showing human activity"
            >
        </div>
    </article>
</div>
</section>

{{-- ========================================
     FROM DATA TO INTELLIGENCE
     ======================================== --}}

<section class="intelligence">
    <div class="intelligence-heading">
        <p class="section-label">
            FROM DATA TO INTELLIGENCE
        </p>

        <h2>
            From observation
            to understanding.
        </h2>
    </div>

    <div class="intelligence-process">
        <article>
            <span>01</span>

            <h3>
                Observe
            </h3>

            <p>
                Gather information about the Earth
                through satellite, aerial, and
                spatial data.
            </p>
        </article>

        <article>
            <span>02</span>

            <h3>
                Analyze
            </h3>

            <p>
                Examine imagery and spatial datasets
                to identify patterns, relationships,
                and change.
            </p>
        </article>

        <article>
            <span>03</span>

            <h3>
                Understand
            </h3>

            <p>
                Turn complex geographic information
                into meaningful spatial intelligence.
            </p>
        </article>

        <article>
            <span>04</span>

            <h3>
                Inform
            </h3>

            <p>
                Provide insights that support better
                planning, monitoring, and decisions.
            </p>
        </article>
    </div>
</section>

{{-- ========================================
     CTA
     ======================================== --}}

<section class="home-cta">
    <p class="section-label">
        EXPLORE WHAT EARTH DATA CAN REVEAL
    </p>

    <h2>
        Better understanding
        starts with seeing clearly.
    </h2>

    <a href="{{ url('/services') }}" class="cta-link">
        Explore our services →
    </a>
</section>
@endsection