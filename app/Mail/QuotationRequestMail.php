<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class QuotationRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @param  array<string, string|null>  $details
     */
    public function __construct(public readonly array $details)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(subject: 'New freight quotation request');
    }

    public function content(): Content
    {
        return new Content(view: 'mail.quotation-request');
    }

    public function attachments(): array
    {
        return [];
    }
}
