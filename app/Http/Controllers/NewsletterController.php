<?php

namespace App\Http\Controllers;

use App\Models\NewsletterSubscriber;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function subscribe(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('newsletter', [
            'email' => ['required', 'email:rfc', 'max:254'],
        ]);

        $subscriber = NewsletterSubscriber::query()->firstOrCreate([
            'email' => $validated['email'],
        ]);

        if (! $subscriber->wasRecentlyCreated) {
            return back()
                ->withInput()
                ->with('newsletter_error', 'You are already subscribed!');
        }

        return back()->with('newsletter_success', 'Thank you for subscribing to our newsletter!');
    }
}
