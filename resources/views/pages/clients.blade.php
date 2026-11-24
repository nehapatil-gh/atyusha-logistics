@extends('layouts.app')

@section('title', 'Customer Partners | ATYUSHA LOGISTICS LLP')
@section('meta_description', 'Our company profile references customers across manufacturing, FMCG and industrial sectors.')

@section('content')
    <section class="clients-page-hero" aria-labelledby="clients-page-title">
        <div class="container clients-page-hero__inner">
            <p class="eyebrow clients-page-hero__eyebrow">CUSTOMER PARTNERS</p>
            <h1 id="clients-page-title">Relationships built<br>on dependable service.</h1>
            <p>Our company profile references customers across manufacturing, FMCG and industrial sectors.</p>
        </div>
    </section>

    <section class="clients-page-section section" aria-labelledby="clients-page-list-title">
        <div class="container">
            <div class="clients-page-section__heading">
                <h2 id="clients-page-list-title">Customer partners</h2>
            </div>

            <div class="clients-page__grid">
                <x-client-partner-card name="Britannia Industries Ltd." />
                <x-client-partner-card name="ITC Ltd." />
                <x-client-partner-card name="Whirlpool of India" />
                <x-client-partner-card name="LG Electronics" />
                <x-client-partner-card name="Minds Corp. Ltd." />
                <x-client-partner-card name="Atharva Metal Pvt. Ltd." />
            </div>

            <p class="clients-page__disclaimer">Client names are listed as supplied in the company profile. Confirm logo and name usage permissions before publication.</p>
        </div>
    </section>

    <section class="clients-page-cta" aria-labelledby="clients-page-cta-title">
        <div class="container clients-page-cta__inner">
            <div>
                <p class="eyebrow">PARTNER WITH US</p>
                <h2 id="clients-page-cta-title">Let's make your logistics simpler.</h2>
            </div>
            <a class="clients-page-cta__button" href="{{ route('contact') }}">Contact Us ↗</a>
        </div>
    </section>
@endsection
