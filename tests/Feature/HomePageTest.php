<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomePageTest extends TestCase
{
    public function test_homepage_displays_company_details_and_transport_services(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertViewIs('pages.home')
            ->assertSee('ATYUSHA LOGISTICS LLP')
            ->assertSee('B2B Road Freight')
            ->assertSee('Industrial road freight, planned and dispatched with precision')
            ->assertSee('Full truck load, part truck load, primary and secondary transportation, last-mile delivery and reverse logistics for manufacturing, FMCG, industrial and corporate clients across India.')
            ->assertSee('Request a Quote')
            ->assertSee('Explore Services')
            ->assertSee('Operating scale')
            ->assertSee('Verified operating scale')
            ->assertSee('400+')
            ->assertSee('30+')
            ->assertSee('₹3 Cr')
            ->assertSee('Service scope')
            ->assertSee('Freight movement across every load size')
            ->assertSee('We coordinate transportation across full and part truck loads, primary and secondary movement, and last-mile delivery.')
            ->assertSee('Full truck load')
            ->assertSee('Part truck load')
            ->assertSee('Primary and secondary transport')
            ->assertSee('Vehicles matched to the cargo')
            ->assertSee('Container and heavy haulage')
            ->assertSee('Tata Ace, Tata 407 and Tata 709/909')
            ->assertSee('Sector trust')
            ->assertSee('Growth since 2015')
            ->assertSee('ATYUSHA LOGISTICS LLP founded to provide road freight coordination.')
            ->assertSee('Expanded vehicle placements and customer base across primary and secondary routes.')
            ->assertSee('400+ vehicle placements and 30+ customers supported by 24/7 operational support and MIS reporting.')
            ->assertSee('Request a freight quote')
            ->assertSee('Share your pickup and delivery locations, cargo details and transport requirements. We will confirm fleet availability and dispatch.')
            ->assertSee('images/atyusha-logo.jpg')
            ->assertSee('Fleet & Infrastructure')
            ->assertSee('mailto:adinath.nimone14@gmail.com', false)
            ->assertSee('tel:+919043231050', false)
            ->assertSee('Subscribe to our newsletter')
            ->assertSee('Email *')
            ->assertSee('Facebook')
            ->assertSee('Instagram')
            ->assertSee('TikTok')
            ->assertSee('WhatsApp')
            ->assertSee('&copy; 2026', false)
            ->assertSee('All rights reserved.');
    }
}
