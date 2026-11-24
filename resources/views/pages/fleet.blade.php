@extends('layouts.app')

@section('title', 'Fleet & Capacity | ATYUSHA LOGISTICS LLP')
@section('meta_description', 'Vehicle capability across a range of transport requirements.')

@section('content')
    <section class="fleet-page-hero" aria-labelledby="fleet-page-title">
        <div class="container fleet-page-hero__inner">
            <p class="eyebrow fleet-page-hero__eyebrow">FLEET &amp; CAPACITY</p>
            <h1 id="fleet-page-title">Capacity to move<br><em>what matters.</em></h1>
            <p>Vehicle capability across a range of transport requirements.</p>
        </div>
    </section>

    <section class="fleet-page-categories section" aria-labelledby="fleet-categories-title">
        <div class="container">
            <div class="fleet-page__section-heading">
                <h2 id="fleet-categories-title">Vehicle categories</h2>
                <p>Available capacity depends on route, timing, load requirements and current operations. Contact us to confirm availability.</p>
            </div>

            <div class="fleet-page__grid">
                <x-fleet-vehicle-card
                    title="Tata Ace"
                    image="tata-ace.svg"
                    description="Transport option for different shipment and route needs."
                />
                <x-fleet-vehicle-card
                    title="Tata 407"
                    image="tata-407.svg"
                    description="Transport option for different shipment and route needs."
                />
                <x-fleet-vehicle-card
                    title="Tata 709 / 909"
                    image="tata-709-909.svg"
                    description="Transport option for different shipment and route needs."
                />
                <x-fleet-vehicle-card
                    title="22 FT vehicles"
                    image="22-ft-vehicles.svg"
                    description="Transport option for different shipment and route needs."
                />
                <x-fleet-vehicle-card
                    title="Container trucks"
                    image="container-trucks.svg"
                    description="Transport option for different shipment and route needs."
                />
            </div>
        </div>
    </section>

    <section class="fleet-load-options" aria-labelledby="fleet-load-title">
        <div class="container fleet-load-options__layout">
            <div class="fleet-load-options__heading">
                <p class="eyebrow">LOAD OPTIONS</p>
                <h2 id="fleet-load-title">Full load or<br>shared capacity.</h2>
            </div>
            <div class="fleet-load-options__copy">
                <p>We support Full Truck Load (FTL) and Part Truck Load (PTL) requirements with coordination based on your shipment details, destination and schedule.</p>
                <a class="fleet-load-options__button" href="{{ route('contact') }}#quote">Request Capacity ↗</a>
            </div>
        </div>
    </section>
@endsection
