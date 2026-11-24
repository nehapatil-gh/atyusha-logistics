<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutUsPageTest extends TestCase
{
    public function test_about_page_displays_the_supplied_content_and_uses_shared_navigation(): void
    {
        $response = $this->get('/about');

        $response->assertOk()
            ->assertViewIs('pages.about')
            ->assertSee('ABOUT ATYUSHA LOGISTICS')
            ->assertSee('Structured road freight, operating since 2015')
            ->assertSee('ATYUSHA LOGISTICS LLP coordinates industrial and commercial road freight for manufacturing, FMCG, industrial, and corporate clients across India.')
            ->assertSee('OUR HISTORY')
            ->assertSee('Built on dependable industrial cargo coordination')
            ->assertSee('ATYUSHA LOGISTICS LLP began in 2015 with a focus on reliable movement of industrial cargo. Over time the company expanded its transport lines across primary, secondary, and distribution freight for multi-sector clients.')
            ->assertSee('Today the operation spans full truck load and part truck load movements, last-mile delivery, and reverse logistics, supported by a fleet ranging from Tata Ace vehicles to container trucks.')
            ->assertSee('OPERATING PRINCIPLES')
            ->assertSee('How we run the operation')
            ->assertSee('Our approach to governance, safety, and compliance shapes every movement we coordinate.')
            ->assertSee('Corporate governance')
            ->assertSee('Clear account coordination, documented dispatch processes, and accountable management for every corporate freight engagement.')
            ->assertSee('Road safety discipline')
            ->assertSee('Driver placement and vehicle readiness are managed against defined safety standards before any cargo is dispatched.')
            ->assertSee('Statutory compliance')
            ->assertSee('E-way billing support and commercial documentation are handled in line with logistics regulations, with POD and E-POD captured at delivery.')
            ->assertSee('images/atyusha-logo.jpg')
            ->assertSee('href="' . route('home') . '"', false)
            ->assertSee('href="' . route('about') . '" aria-current="page">About Us</a>', false)
            ->assertSee('Menu')
            ->assertSee('Home')
            ->assertSee('About Us')
            ->assertSee('Services')
            ->assertSee('Fleet & Infrastructure')
            ->assertSee('Operations')
            ->assertSee('Our Clients')
            ->assertSee('Contact')
            ->assertSee('Contacts')
            ->assertSee('adinath.nimone14@gmail.com')
            ->assertSee('(+91) 9043231050')
            ->assertSee('Socials')
            ->assertSee('Facebook')
            ->assertSee('Instagram')
            ->assertSee('TikTok')
            ->assertSee('WhatsApp')
            ->assertSee('Subscribe to our newsletter')
            ->assertSee('Email *')
            ->assertSee('Subscribe')
            ->assertSee('&copy; 2026', false)
            ->assertSee('ATYUSHA LOGISTICS LLP')
            ->assertSee('All rights reserved.');
    }

    public function test_home_navigation_remains_active_on_the_homepage(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('href="#home" aria-current="page">Home</a>', false)
            ->assertDontSee('href="' . route('about') . '" aria-current="page">About Us</a>', false);
    }
}
