@extends('layouts.app')

@section('title', 'About — Terranavia')

@section('content')

<section class="page-hero about-hero">
    <div class="about-hero-content">
        <p class="section-label">
            ABOUT TERRANAVIA
        </p>

        <h1>
            We turn Earth observation
            into spatial intelligence.
        </h1>

        <p class="page-intro">
            Terranavia is an Earth Observation and Geospatial
            Intelligence company focused on helping organizations
            understand places, environments, and changing
            landscapes through better data.
        </p>
    </div>

    <div class="about-hero-image">
        <img
            src="{{ asset('images/about-header.png') }}"
            alt="Earth observation and geospatial intelligence"
        >
    </div>
</section>

<section class="about-story">

    <div>
        <p class="section-label">
            OUR APPROACH
        </p>

        <h2>
            From observation
            to understanding.
        </h2>
    </div>

    <div class="about-copy">

        <p>
            Earth is constantly changing. Landscapes evolve,
            infrastructure expands, ecosystems shift, and
            human activity leaves a visible footprint.
        </p>

        <p>
            Terranavia brings together Earth observation,
            remote sensing, geospatial analysis, and mapping
            to make these changes easier to understand.
        </p>

        <p>
            Our work is built around one simple idea:
            better geographic information leads to better
            understanding of the places we depend on.
        </p>

    </div>

</section>

<section class="about-statement">

    <p>OBSERVE.</p>
    <p>UNDERSTAND.</p>
    <p>INFORM.</p>

</section>


<section class="about-vision">

    <div class="about-vision-item">
        <p class="section-label">OUR VISION</p>

        <h2>
            A clearer understanding
            of the world we share.
        </h2>
    </div>

    <div class="about-vision-item">
        <p class="section-label">OUR MISSION</p>

        <p>
            To transform Earth observation and geospatial
            data into clear, meaningful spatial intelligence
            that helps people better understand the world
            around them.
        </p>
    </div>

</section>


<section class="about-principles">

    <div class="about-principles-heading">

    <img
        src="{{ asset('images/about-principles.jpg') }}"
        alt="Geospatial mapping and spatial intelligence"
    >

    <div class="about-principles-heading-content">
        <p class="section-label">OUR PRINCIPLES</p>

        <h2>
            How we approach
            spatial intelligence.
        </h2>
    </div>

</div>

    <div class="about-principles-list">
        <article>
            <span>01</span>
            <h3>Clarity</h3>
            <p>
                Making complex geographic information
                easier to understand.
            </p>
        </article>

        <article>
            <span>02</span>
            <h3>Context</h3>
            <p>
                Looking beyond individual data points
                to understand place, time, and change.
            </p>
        </article>

        <article>
            <span>03</span>
            <h3>Purpose</h3>
            <p>
                Turning observation into information
                that can support meaningful decisions.
            </p>
        </article>
    </div>
</section>

<section class="about-visual">
    <img src="{{ asset('images/about-earth.jpg') }}"
    alt="Aerial view of the Earth"
    >
</section>

@endsection