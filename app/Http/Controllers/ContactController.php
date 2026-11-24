<?php

namespace App\Http\Controllers;

use App\Mail\QuotationRequestMail;
use App\Models\ContactEnquiry;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use InvalidArgumentException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

class ContactController extends Controller
{
    public const SERVICES = [
        'Full Truck Load (FTL)',
        'Part Truck Load (PTL)',
        'Primary Transportation',
        'Secondary Distribution',
        'Last-Mile Delivery',
        'Reverse Logistics',
    ];

    public function show(): View
    {
        return view('pages.contact', ['services' => self::SERVICES]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30', 'regex:/^\+?[0-9][0-9\s().-]{6,23}$/'],
            'email' => ['nullable', 'email:rfc', 'max:254'],
            'company' => ['nullable', 'string', 'max:160'],
            'service' => ['nullable', Rule::in(self::SERVICES)],
            'details' => ['nullable', 'string', 'max:10000'],
            'website' => ['nullable', 'url', 'max:255'],
        ]);

        ContactEnquiry::create($validated);

        $mailer = config('mail.default');
        $fallbackMailers = (array) config('mail.mailers.failover.mailers', []);
        $notificationWarning = null;

        if (
            in_array($mailer, ['log', 'array'], true)
            || ($mailer === 'failover' && in_array('log', $fallbackMailers, true))
        ) {
            $notificationWarning = 'Your enquiry was saved, but email notifications are not configured.';
        } else {
            try {
                $message = new QuotationRequestMail($validated);

                if (! empty($validated['email'])) {
                    $message->replyTo($validated['email'], $validated['name']);
                }

                Mail::to('AtyushaLogistics2@gmail.com')->send($message);
            } catch (TransportExceptionInterface|InvalidArgumentException $exception) {
                report($exception);
                $notificationWarning = 'Your enquiry was saved, but we could not send the notification email.';
            }
        }

        $response = to_route('contact')
            ->with('success', 'Thank you for contacting Atyusha Logistics. Your enquiry has been submitted successfully. Our team will get back to you soon.');

        if ($notificationWarning !== null) {
            $response->with('warning', $notificationWarning);
        }

        return $response;
    }
}
