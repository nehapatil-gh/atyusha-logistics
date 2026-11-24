<?php

namespace Tests\Feature;

use Tests\TestCase;

class ServicesPageTest extends TestCase
{
    public function test_services_page_renders_all_services_principles_and_footer(): void
    {
        $this->get('/services')
            ->assertOk()
            ->assertViewIs('pages.services')
            ->assertSee('OUR SERVICES')
            ->assertSee('End-to-end logistics')
            ->assertSee('for every movement.')
            ->assertSee('Transportation and distribution solutions tailored to shipment size and operational needs.')
            ->assertSee('Full Truck Load (FTL)')
            ->assertSee('Part Truck Load (PTL)')
            ->assertSee('Primary Transportation')
            ->assertSee('Secondary Distribution')
            ->assertSee('Last-Mile Delivery')
            ->assertSee('Reverse Logistics')
            ->assertSee('Operationally coordinated service to support your supply chain with clear communication and adaptable execution.')
            ->assertSee('Responsive, practical')
            ->assertSee('and accountable.')
            ->assertSee('Shipment-focused planning')
            ->assertSee('Coordination with customers and transport partners')
            ->assertSee('Flexible vehicle and load options')
            ->assertSee('Support across primary and distribution movements')
            ->assertSee('Long-term service relationship mindset')
            ->assertSee('Atyusha Logistics LLP')
            ->assertSee('Complete Logistics Solutions. Reliable movement, responsible service, and logistics built around your business.')
            ->assertSee('href="/admin"', false)
            ->assertSee('© 2026 Atyusha Logistics LLP. All rights reserved.');
    }

    public function test_services_navigation_points_to_the_named_route(): void
    {
        $this->get('/services')
            ->assertOk()
            ->assertSee('href="' . route('services') . '" aria-current="page">Services</a>', false);
    }
}
