<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NewsletterSubscriptionTest extends TestCase
{
    use RefreshDatabase;

    public function test_footer_has_a_csrf_protected_required_email_submission_form(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('action="'.route('newsletter.subscribe').'"', false)
            ->assertSee('name="_token"', false)
            ->assertSee('id="newsletter-email"', false)
            ->assertSee('type="email"', false)
            ->assertSee('required', false)
            ->assertSee('type="submit">Subscribe', false);
    }

    public function test_valid_email_is_saved_and_success_is_reported(): void
    {
        $this->from('/')
            ->post(route('newsletter.subscribe'), ['email' => 'subscriber@example.com'])
            ->assertRedirect('/')
            ->assertSessionHas('newsletter_success', 'Thank you for subscribing to our newsletter!');

        $this->assertDatabaseHas('newsletter_subscribers', ['email' => 'subscriber@example.com']);
    }

    public function test_duplicate_email_is_not_added_and_gets_a_friendly_message(): void
    {
        $this->post(route('newsletter.subscribe'), ['email' => 'subscriber@example.com']);

        $this->from('/')
            ->post(route('newsletter.subscribe'), ['email' => 'subscriber@example.com'])
            ->assertRedirect('/')
            ->assertSessionHas('newsletter_error', 'You are already subscribed!');

        $this->assertDatabaseCount('newsletter_subscribers', 1);
    }

    public function test_invalid_and_empty_emails_fail_validation(): void
    {
        $this->from('/')
            ->post(route('newsletter.subscribe'), ['email' => 'not-an-email'])
            ->assertRedirect('/')
            ->assertSessionHasErrorsIn('newsletter', ['email']);

        $this->from('/')
            ->post(route('newsletter.subscribe'), ['email' => ''])
            ->assertRedirect('/')
            ->assertSessionHasErrorsIn('newsletter', ['email']);

        $this->assertDatabaseCount('newsletter_subscribers', 0);
    }
}
