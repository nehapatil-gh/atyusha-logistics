<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientsPageTest extends TestCase
{
    public function test_clients_page_renders_supplied_names_disclaimer_and_footer(): void
    {
        $this->get('/clients')
            ->assertOk()
            ->assertViewIs('pages.clients')
            ->assertSee('CUSTOMER PARTNERS')
            ->assertSee('Relationships built')
            ->assertSee('on dependable service.')
            ->assertSee('Our company profile references customers across manufacturing, FMCG and industrial sectors.')
            ->assertSee('Britannia Industries Ltd.')
            ->assertSee('ITC Ltd.')
            ->assertSee('Whirlpool of India')
            ->assertSee('LG Electronics')
            ->assertSee('Minds Corp. Ltd.')
            ->assertSee('Atharva Metal Pvt. Ltd.')
            ->assertSee('Client names are listed as supplied in the company profile. Confirm logo and name usage permissions before publication.')
            ->assertSee("Let's make your logistics simpler.")
            ->assertSee('href="' . route('contact') . '"', false)
            ->assertSee('Contact Us ↗')
            ->assertSee('Complete Logistics Solutions. Reliable movement, responsible service, and logistics built around your business.')
            ->assertSee('Fleet &amp; Capacity', false)
            ->assertSee('Atyusha Logistics LLP')
            ->assertSee('+91 985032058')
            ->assertSee('+91 712392332')
            ->assertSee('+91 970247847')
            ->assertSee('AtyushaLogistics2@gmail.com')
            ->assertSee('© 2026 Atyusha Logistics LLP. All rights reserved.');
    }

    public function test_clients_navigation_item_is_active_on_the_clients_page(): void
    {
        $this->get('/clients')
            ->assertOk()
            ->assertSee('href="' . route('clients') . '" aria-current="page">Our Clients</a>', false);
    }
}
