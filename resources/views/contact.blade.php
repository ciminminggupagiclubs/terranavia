@extends('layouts.app')

@section('title', 'Contact — Terranavia')

@section('content')

<section class="page-hero contact-hero">

    <p class="section-label">
        CONTACT US
    </p>

    <h1>
        Let's explore what
        Earth data can reveal.
    </h1>

    <p class="page-intro">
        Have a project, question, or collaboration in mind?
        Get in touch with the Terranavia team.
    </p>

</section>


<section class="contact-section">

    <div class="contact-info">

        <p class="section-label">
            START A CONVERSATION
        </p>

        <h2>
            Tell us what
            you're working on.
        </h2>

        <p>
            Whether you need spatial analysis, mapping,
            environmental monitoring, or Earth observation
            data, we'd be happy to hear about your project.
        </p>

    </div>

    @if (session('success'))
        <div class="contact-success">
{{ session('success') }}
        </div>
    @endif

    <form class="contact-form" method="POST" action="/contact">

        @csrf

        <div class="form-group">

            <label for="name">
                Name
            </label>

            <input
                type="text"
                id="name"
                name="name"
                placeholder="Your name"
                value="{{ old('name') }}"
                required
            >

            @error('name')
                <small class="form-error">{{ $message }}</small>
            @enderror

        </div>


        <div class="form-group">

            <label for="email">
                Email
            </label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="you@example.com"
                value="{{ old('email') }}"
                required
            >

            @error('email')
                <small class="form-error">{{ $message }}</small>
            @enderror

        </div>


        <div class="form-group">

            <label for="message">
                Message
            </label>

            <textarea
                id="message"
                name="message"
                rows="7"
                placeholder="Tell us about your project..."
                required
            >{{ old('message') }}</textarea>

            @error('message')
                <small class="form-error">{{ $message }}</small>
            @enderror

        </div>


        <button type="submit" class="contact-button">
            Send Message
        </button>

    </form>

</section>

@endsection
