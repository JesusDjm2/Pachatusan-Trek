<?php

namespace App\Mail;

use App\Models\Review;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewReviewNotification extends Mailable
{
    use Queueable, SerializesModels;

    public Review $review;

    public function __construct(Review $review)
    {
        $this->review = $review;
    }

    public function build(): self
    {
        return $this
            ->from(
                (string) config('mail.from.address'),
                (string) config('mail.from.name', 'Pachatusan Trek')
            )
            ->subject('Nuevo review pendiente de aprobación — Pachatusan Trek')
            ->view('emails.new-review');
    }
}
