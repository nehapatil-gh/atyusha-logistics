@extends('layouts.app')

@section('title', 'About Us | ATYUSHA LOGISTICS LLP')
@section('meta_description', 'ATYUSHA LOGISTICS LLP coordinates industrial and commercial road freight for manufacturing, FMCG, industrial, and corporate clients across India.')

@section('content')
    <section class="about-hero" aria-labelledby="about-hero-title">
        <div class="container about-hero__inner">
            <p class="eyebrow about-hero__eyebrow">ABOUT ATYUSHA LOGISTICS</p>
            <h1 id="about-hero-title">Structured road freight, operating since 2015</h1>
            <p>ATYUSHA LOGISTICS LLP coordinates industrial and commercial road freight for manufacturing, FMCG, industrial, and corporate clients across India.</p>
        </div>
    </section>

    <section class="about-history section" aria-labelledby="about-history-title">
        <div class="container about-history__layout">
            <div class="about-history__image-wrap">
                <img
                    class="about-history__image"
                    src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?auto=format&amp;fit=crop&amp;w=1400&amp;q=85"
                    alt="Road freight truck"
                    loading="lazy"
                >
            </div>
            <div class="about-history__copy">
                <p class="eyebrow">OUR HISTORY</p>
                <h2 class="section-heading" id="about-history-title">Built on dependable industrial cargo coordination</h2>
                <p>ATYUSHA LOGISTICS LLP began in 2015 with a focus on reliable movement of industrial cargo. Over time the company expanded its transport lines across primary, secondary, and distribution freight for multi-sector clients.</p>
                <p>Today the operation spans full truck load and part truck load movements, last-mile delivery, and reverse logistics, supported by a fleet ranging from Tata Ace vehicles to container trucks.</p>
            </div>
        </div>
    </section>

    <section class="about-principles section" aria-labelledby="about-principles-title">
        <div class="container">
            <div class="about-principles__heading">
                <p class="eyebrow">OPERATING PRINCIPLES</p>
                <h2 class="section-heading" id="about-principles-title">How we run the operation</h2>
                <p class="section-intro">Our approach to governance, safety, and compliance shapes every movement we coordinate.</p>
            </div>

            <div class="about-principles__grid">
                <article class="about-principle-card">
                    <span class="about-principle-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M12 3.5v16.8M5.5 7.2h13M5.5 7.2 2.8 12h5.4L5.5 7.2Zm13 0-2.7 4.8h5.4l-2.7-4.8ZM5 20.5h14" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <h3>Corporate governance</h3>
                    <p>Clear account coordination, documented dispatch processes, and accountable management for every corporate freight engagement.</p>
                </article>

                <article class="about-principle-card">
                    <span class="about-principle-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="m12 3.5 7 2.6v5.4c0 4.1-2.7 7.2-7 9-4.3-1.8-7-4.9-7-9V6.1l7-2.6Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                            <path d="m8.8 11.8 2.1 2.1 4.5-4.6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <h3>Road safety discipline</h3>
                    <p>Driver placement and vehicle readiness are managed against defined safety standards before any cargo is dispatched.</p>
                </article>

                <article class="about-principle-card">
                    <span class="about-principle-card__icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none">
                            <path d="M6.5 3.5h7l4 4v13h-11v-17Z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                            <path d="M13.5 3.5v4h4M9 12h6M9 15.5h6m-6 3.5h3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                    <h3>Statutory compliance</h3>
                    <p>E-way billing support and commercial documentation are handled in line with logistics regulations, with POD and E-POD captured at delivery.</p>
                </article>
            </div>
        </div>
    </section>
@endsection
