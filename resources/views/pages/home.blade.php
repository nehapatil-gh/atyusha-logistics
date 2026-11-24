@extends('layouts.app')

@section('title', 'ATYUSHA LOGISTICS LLP')
@section('meta_description', 'Full truck load, part truck load, primary and secondary transportation, last-mile delivery and reverse logistics for manufacturing, FMCG, industrial and corporate clients across India.')

@section('content')
    <section class="hero" id="home" aria-labelledby="hero-title">
        <img
            class="hero__image"
            src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?auto=format&amp;fit=crop&amp;w=2200&amp;q=85"
            alt=""
            fetchpriority="high"
        >
        <img
            class="hero__truck"
            src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&amp;fit=crop&amp;w=1600&amp;q=85"
            alt=""
            fetchpriority="high"
        >
        <div class="hero__shade" aria-hidden="true"></div>
        <div class="container hero__inner">
            <div class="hero__copy">
                <p class="eyebrow">B2B Road Freight</p>
                <h1 id="hero-title">Industrial road freight, planned and dispatched with precision</h1>
                <p class="hero__description">Full truck load, part truck load, primary and secondary transportation, last-mile delivery and reverse logistics for manufacturing, FMCG, industrial and corporate clients across India.</p>
                <div class="hero__actions">
                    <a class="button button--accent" href="{{ route('contact') }}">Request a Quote</a>
                    <a class="button button--outline-light" href="#services">Explore Services</a>
                </div>
            </div>
        </div>
    </section>

    <section class="operating-scale" id="about" aria-labelledby="scale-title">
        <div class="container">
            <div class="operating-scale__heading">
                <p class="eyebrow">Operating scale</p>
                <h2 class="section-heading" id="scale-title">Verified operating scale</h2>
            </div>
            <div class="operating-scale__cards">
                <article class="scale-card">
                    <h3>400+</h3>
                    <p>Vehicle placements</p>
                </article>
                <article class="scale-card">
                    <h3>30+</h3>
                    <p>Customers served</p>
                </article>
                <article class="scale-card">
                    <h3>₹3 Cr</h3>
                    <p>Turnover</p>
                </article>
            </div>
        </div>
    </section>

    <section class="service-scope section" id="services" aria-labelledby="services-title">
        <div class="container">
            <div class="service-scope__heading">
                <p class="eyebrow">Service scope</p>
                <h2 class="section-heading" id="services-title">Freight movement across every load size</h2>
                <p class="section-intro">We coordinate transportation across full and part truck loads, primary and secondary movement, and last-mile delivery.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <article class="service-card">
                        <span class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M3 7h12v10H3zM15 10h4l3 3v4h-7z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                                <circle cx="7" cy="18" r="1.5" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="18" cy="18" r="1.5" stroke="currentColor" stroke-width="1.6" />
                            </svg>
                        </span>
                        <p class="service-card__type">FTL</p>
                        <h3>Full truck load</h3>
                        <p>Dedicated vehicle capacity for bulk consignments moving point to point on a single schedule.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="service-card">
                        <span class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <path d="M4 5h16v14H4zM4 10h16M9 5v5m6-5v5" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <p class="service-card__type">PTL</p>
                        <h3>Part truck load</h3>
                        <p>Shared-capacity movement for smaller consignments, consolidated efficiently across routes.</p>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <article class="service-card">
                        <span class="service-card__icon" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none">
                                <circle cx="6" cy="18" r="1.7" stroke="currentColor" stroke-width="1.6" />
                                <circle cx="18" cy="6" r="1.7" stroke="currentColor" stroke-width="1.6" />
                                <path d="M8 18h3a3 3 0 0 0 3-3v-3a3 3 0 0 1 3-3h1M6 16v-3a3 3 0 0 1 3-3h3" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                        </span>
                        <p class="service-card__type">Network</p>
                        <h3>Primary and secondary transport</h3>
                        <p>Inbound plant movement and onward distribution coordinated through one dispatch desk.</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="fleet-showcase section" id="fleet" aria-labelledby="fleet-title">
        <div class="container">
            <div class="fleet-showcase__heading">
                <p class="eyebrow">Fleet</p>
                <h2 class="section-heading" id="fleet-title">Vehicles matched to the cargo</h2>
            </div>

            <div class="fleet-feature">
                <img
                    class="fleet-feature__image"
                    src="https://images.unsplash.com/photo-1566576721346-d4a3b4eaeb55?auto=format&amp;fit=crop&amp;w=1300&amp;q=85"
                    alt=""
                    loading="lazy"
                >
                <div class="fleet-feature__copy">
                    <p class="fleet-feature__type">Container trucks</p>
                    <h3>Container and heavy haulage</h3>
                    <p>Container trucks and 22-foot vehicles for high-volume industrial and FMCG consignments requiring full-body capacity.</p>
                </div>
            </div>

            <div class="fleet-feature fleet-feature--reverse">
                <div class="fleet-feature__copy">
                    <p class="fleet-feature__type">Light commercial</p>
                    <h3>Tata Ace, Tata 407 and Tata 709/909</h3>
                    <p>Regional light commercial vehicles including Tata Ace, Tata 407 and Tata 709/909 for flexible, scheduled distribution.</p>
                </div>
                <img
                    class="fleet-feature__image"
                    src="https://images.unsplash.com/photo-1601584115197-04ecc0da31d7?auto=format&amp;fit=crop&amp;w=1300&amp;q=85"
                    alt=""
                    loading="lazy"
                >
            </div>
        </div>
    </section>

    <section class="sector-trust section" id="sector-trust" aria-labelledby="sector-title">
        <div class="container sector-trust__inner">
            <p class="eyebrow">Sector trust</p>
            <h2 class="visually-hidden" id="sector-title">Sector trust</h2>
            <blockquote>Serving manufacturing, FMCG, industrial and corporate operations across India with dependable freight coordination.</blockquote>
            <p class="sector-trust__attribution">— Manufacturing, FMCG, industrial and corporate clients</p>
        </div>
    </section>

    <section class="company-growth section" id="operations" aria-labelledby="growth-title">
        <div class="container">
            <div class="company-growth__heading">
                <p class="eyebrow">Company growth</p>
                <h2 class="section-heading" id="growth-title">Growth since 2015</h2>
            </div>
            <div class="company-growth__cards">
                <article class="growth-card">
                    <p class="growth-card__number">01</p>
                    <h3>2015</h3>
                    <p>ATYUSHA LOGISTICS LLP founded to provide road freight coordination.</p>
                </article>
                <article class="growth-card">
                    <p class="growth-card__number">02</p>
                    <h3>Network build-out</h3>
                    <p>Expanded vehicle placements and customer base across primary and secondary routes.</p>
                </article>
                <article class="growth-card">
                    <p class="growth-card__number">03</p>
                    <h3>Today</h3>
                    <p>400+ vehicle placements and 30+ customers supported by 24/7 operational support and MIS reporting.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="quote" id="quote" aria-labelledby="quote-title">
        <div class="container quote__inner">
            <div>
                <h2 id="quote-title">Request a freight quote</h2>
                <p class="quote__description">Share your pickup and delivery locations, cargo details and transport requirements. We will confirm fleet availability and dispatch.</p>
            </div>
            <a class="button button--light" href="{{ route('contact') }}">Request a Quote</a>
        </div>
    </section>
@endsection
