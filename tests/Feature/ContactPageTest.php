<?php

namespace Tests\Feature;

use App\Mail\QuotationRequestMail;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_page_shows_supplied_details_form_options_and_footer(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertViewIs('pages.contact')
            ->assertSee('Let’s get your cargo moving.')
            ->assertSee('Share your requirements and our team will get back to you.')
            ->assertSee('Talk logistics with our team.')
            ->assertSee('+91 985032058')
            ->assertSee('+91 712392332')
            ->assertSee('+91 970247847')
            ->assertSee('href="mailto:AtyushaLogistics2@gmail.com"', false)
            ->assertSee('Office No. 39, Mahaganapati Vyapar Sankul, Ranjangaon Ganpati, Pune, Maharashtra – 412209, India')
            ->assertSee('href="https://www.instagram.com/vakratundtransport2791/"', false)
            ->assertSee('Request a quotation')
            ->assertSee('Complete the details below to help us understand your requirements.')
            ->assertSee('Origin, destination, cargo, timeline, etc.')
            ->assertSee('Full Truck Load (FTL)')
            ->assertSee('Part Truck Load (PTL)')
            ->assertSee('Primary Transportation')
            ->assertSee('Secondary Distribution')
            ->assertSee('Last-Mile Delivery')
            ->assertSee('Reverse Logistics')
            ->assertSee('Please do not submit sensitive or confidential information in this form.')
            ->assertSee('Submit Request ↗')
            ->assertSee('Complete Logistics Solutions. Reliable movement, responsible service, and logistics built around your business.')
            ->assertSee('Fleet &amp; Capacity', false)
            ->assertSee('© 2026 ATYUSHA LOGISTICS LLP. All rights reserved.');
    }

    public function test_homepage_quote_buttons_navigate_to_contact(): void
    {
        $response = $this->get('/');

        $response->assertOk();
        $this->assertSame(
            2,
            substr_count($response->getContent(), 'href="'.route('contact').'">Request a Quote</a>')
        );
    }

    public function test_quote_submission_validates_name_phone_email_and_service(): void
    {
        $this->from(route('contact'))
            ->post(route('contact.submit'), [
                'name' => '',
                'phone' => 'not a phone',
                'email' => 'not-an-email',
                'service' => 'Unlisted service',
            ])
            ->assertRedirect(route('contact'))
            ->assertSessionHasErrors(['name', 'phone', 'email', 'service']);
    }

    public function test_valid_quote_is_saved_and_emailed(): void
    {
        config(['mail.default' => 'smtp']);
        Mail::fake();

        $this->post(route('contact.submit'), [
            'name' => 'Atyusha Customer',
            'phone' => '+91 985032058',
            'email' => 'customer@example.com',
            'company' => 'Customer Company',
            'service' => 'Full Truck Load (FTL)',
            'details' => 'Origin, destination, cargo, timeline, etc.',
            'website' => 'https://example.com',
        ])
            ->assertRedirect(route('contact'))
            ->assertSessionHas('success', 'Thank you for contacting Atyusha Logistics. Your enquiry has been submitted successfully. Our team will get back to you soon.');

        Mail::assertSent(QuotationRequestMail::class, fn (QuotationRequestMail $mail): bool => $mail->hasTo('AtyushaLogistics2@gmail.com'));
        $this->assertDatabaseHas('contact_enquiries', [
            'name' => 'Atyusha Customer',
            'email' => 'customer@example.com',
            'phone' => '+91 985032058',
            'company' => 'Customer Company',
            'service' => 'Full Truck Load (FTL)',
            'details' => 'Origin, destination, cargo, timeline, etc.',
            'website' => 'https://example.com',
            'status' => 'new',
        ]);
    }

    public function test_log_mailer_does_not_show_a_fake_success_message(): void
    {
        config(['mail.default' => 'log']);
        Mail::fake();

        $this->post(route('contact.submit'), [
            'name' => 'Atyusha Customer',
            'phone' => '+91 985032058',
        ])
            ->assertRedirect(route('contact'))
            ->assertSessionMissing('error')
            ->assertSessionHas('success', 'Thank you for contacting Atyusha Logistics. Your enquiry has been submitted successfully. Our team will get back to you soon.')
            ->assertSessionHas('warning');

        Mail::assertNothingSent();
        $this->assertDatabaseHas('contact_enquiries', [
            'name' => 'Atyusha Customer',
            'phone' => '+91 985032058',
        ]);
    }
}
