<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Terranavia')</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body>

    <header class="site-header">
        <nav class="site-nav">
            <a href="/" class="logo"> TERRANAVIA </a>
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
            <strong>TERRANAVIA</strong>
            <p>Earth Observation & Geospatial Intelligence</p>
        </div>        
    </footer>

</body>
</html>