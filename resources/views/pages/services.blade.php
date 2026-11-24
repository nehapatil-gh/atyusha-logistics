@extends('layouts.app')

@section('title', 'Services | ATYUSHA LOGISTICS LLP')
@section('meta_description', 'Transportation and distribution solutions tailored to shipment size and operational needs.')

@section('content')
    <section class="services-page-hero" aria-labelledby="services-page-title">
        <div class="container services-page-hero__inner">
            <p class="eyebrow services-page-hero__eyebrow">OUR SERVICES</p>
            <h1 id="services-page-title">End-to-end logistics<br>for every movement.</h1>
            <p>Transportation and distribution solutions tailored to shipment size and operational needs.</p>
        </div>
    </section>

    <section class="services-page-section section" aria-labelledby="services-page-list-title">
        <div class="container">
            <div class="services-page-section__heading">
                <h2 id="services-page-list-title">OUR SERVICES</h2>
            </div>

            <div class="services-page__grid">
                @foreach ($services as $service)
                    <x-service-card
                        :number="$service['number']"
                        :title="$service['title']"
                        :description="$serviceDescription"
                    />
                @endforeach
            </div>
        </div>
    </section>

    <section class="service-principles section" aria-labelledby="service-principles-title">
        <div class="container service-principles__layout">
            <div class="service-principles__heading">
                <p class="eyebrow">SERVICE PRINCIPLES</p>
                <h2 id="service-principles-title">Responsive, practical<br>and accountable.</h2>
            </div>

            <ul class="service-principles__list">
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m5 12.5 4.2 4.2L19 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Shipment-focused planning</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m5 12.5 4.2 4.2L19 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Coordination with customers and transport partners</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m5 12.5 4.2 4.2L19 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Flexible vehicle and load options</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m5 12.5 4.2 4.2L19 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Support across primary and distribution movements</span>
                </li>
                <li>
                    <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
                        <path d="m5 12.5 4.2 4.2L19 7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span>Long-term service relationship mindset</span>
                </li>
            </ul>
        </div>
    </section>
@endsection
