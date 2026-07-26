<?php

namespace App\Mail;

use App\Models\SendMsg;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public SendMsg $contactMessage
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Portfolio Contact Message',
            replyTo: [
                $this->contactMessage->email,
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-message',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}