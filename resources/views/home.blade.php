@extends('layouts.app')

@section('title', 'Terranavia — Earth Intelligence')

@section('content')

<section class="hero">

    <div class="hero-image">
        <img
            src="{{ asset('images/hero-earth.png') }}"
            alt="Aerial view of Earth landscape"
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
                We observe landscapes, infrastructure,
                environments, and human activity through
                geospatial data.
            </p>

            <p>
                By bringing Earth observation and spatial
                analysis together, Terranavia helps turn
                complex geographic information into a clearer
                understanding of the world around us.
            </p>

        </div>

    </div>

</section>

<section class="services-preview">

    <p class="section-label">
        OUR SOLUTIONS
    </p>

    <h2>
        Geospatial intelligence<br>
        for a changing world.
    </h2>

    <div class="service-grid">

        <article>
            <span>01</span>
            <h3>Remote Sensing</h3>
            <p>
                Analysis of satellite and aerial imagery
                to understand changes across the Earth's surface.
            </p>
        </article>

        <article>
            <span>02</span>
            <h3>Geospatial Analysis</h3>
            <p>
                Spatial data analysis for planning,
                monitoring, and decision-making.
            </p>
        </article>

        <article>
            <span>03</span>
            <h3>Mapping & Visualization</h3>
            <p>
                Clear geographic visualization that transforms
                complex spatial data into useful information.
            </p>
        </article>

        <article>
            <span>04</span>
            <h3>Environmental Monitoring</h3>
            <p>
                Monitoring landscapes, ecosystems,
                and environmental change through geospatial data.
            </p>
        </article>

    </div>

</section>

@endsection
