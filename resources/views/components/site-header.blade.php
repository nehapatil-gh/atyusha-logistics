<header class="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="{{ route('home') }}" aria-label="Atyusha Logistics home">
            <img src="{{ asset('images/atyusha-logo.jpg') }}" alt="Atyusha Logistics LLP" class="site-logo">
        </a>

        <button class="nav-toggle" type="button" aria-label="Menu" aria-expanded="false" aria-controls="primary-navigation" data-nav-toggle>
            <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M4 7h16M4 12h16M4 17h16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" />
            </svg>
        </button>
    </div>

    <div class="site-header__nav-row">
        <div class="container">
            <nav class="primary-navigation" id="primary-navigation" aria-label="Menu" data-primary-navigation>
                <ul class="primary-navigation__links">
                    <li><a href="{{ route('home') }}"@if (request()->routeIs('home')) aria-current="page"@endif>Home</a></li>
                    <li><a href="{{ route('about') }}"@if (request()->routeIs('about')) aria-current="page"@endif>About Us</a></li>
                    <li><a href="{{ route('services') }}"@if (request()->routeIs('services')) aria-current="page"@endif>Services</a></li>
                    <li><a href="{{ route('fleet') }}"@if (request()->routeIs('fleet')) aria-current="page"@endif>Fleet &amp; Infrastructure</a></li>
                    <li><a href="{{ route('home') }}#operations">Operations</a></li>
                    <li><a href="{{ route('clients') }}"@if (request()->routeIs('clients')) aria-current="page"@endif>Our Clients</a></li>
                    <li><a href="{{ route('contact') }}"@if (request()->routeIs('contact')) aria-current="page"@endif>Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
