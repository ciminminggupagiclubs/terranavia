<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Terranavia')</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/terranavia_favicon.svg') }}">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <header class="site-header">
        <nav class="site-nav">
            <a href="/" class="logo"> 
                <img src="{{ asset ('images/terranavia-logo.svg') }}" alt="Terranavia">
            </a>
            <div class="nav-links">
                <a href="/">Home</a>
                <a href="/about">About</a>
                <a href="/services">Services</a>
                <a href="/contact">Contact</a>
            </div>
        </nav>
    </header>
                    
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="site-footer">

    <div class="site-footer-inner">

        <div class="footer-brand">
            <strong>TERRANAVIA</strong>
            <p>
                Earth Observation & Geospatial Intelligence
            </p>
        </div>
    </div>

    <div class="footer-bottom">
        <span>© 2026 Terranavia</span>
        <span>Earth Observation & Geospatial Intelligence</span>
    </div>

</footer>

</body>
</html>