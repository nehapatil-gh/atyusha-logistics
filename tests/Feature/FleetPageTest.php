<?php

namespace Tests\Feature;

use Tests\TestCase;

class FleetPageTest extends TestCase
{
    public function test_fleet_page_renders_vehicle_categories_load_options_and_footer(): void
    {
        $this->get('/fleet')
            ->assertOk()
            ->assertViewIs('pages.fleet')
            ->assertSee('FLEET & CAPACITY')
            ->assertSee('Capacity to move')
            ->assertSee('what matters.')
            ->assertSee('Vehicle capability across a range of transport requirements.')
            ->assertSee('Vehicle categories')
            ->assertSee('Available capacity depends on route, timing, load requirements and current operations. Contact us to confirm availability.')
            ->assertSee('Tata Ace')
            ->assertSee('Tata 407')
            ->assertSee('Tata 709 / 909')
            ->assertSee('22 FT vehicles')
            ->assertSee('Container trucks')
            ->assertSee('Transport option for different shipment and route needs.', false)
            ->assertSee('href="' . route('contact') . '#quote"', false)
            ->assertSee('Request Capacity ↗')
            ->assertSee('Complete Logistics Solutions. Reliable movement, responsible service, and logistics built around your business.')
            ->assertSee('Atyusha Logistics LLP')
            ->assertSee('+91 985032058')
            ->assertSee('+91 712392332')
            ->assertSee('+91 970247847')
            ->assertSee('AtyushaLogistics2@gmail.com')
            ->assertSee('© 2026 Atyusha Logistics LLP. All rights reserved.');
    }

    public function test_fleet_page_link_targets_the_contact_quote_section(): void
    {
        $this->get('/fleet')
            ->assertOk()
            ->assertSee('href="' . route('contact') . '#quote"', false);

        $this->get('/contact')
            ->assertOk()
            ->assertSee('id="quote"', false);
    }

    public function test_fleet_navigation_item_is_active_on_the_fleet_page(): void
    {
        $this->get('/fleet')
            ->assertOk()
            ->assertSee('href="' . route('fleet') . '" aria-current="page">Fleet &amp; Infrastructure</a>', false);
    }
}
