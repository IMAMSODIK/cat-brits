<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\VideoCall;

class NewBookingForGuru extends Mailable
{
    use Queueable, SerializesModels;
    public $call;

    public function __construct(VideoCall $call) { $this->call = $call; }

    public function build()
    {
        return $this->subject("Permintaan Video Call baru dari " . $this->call->murid->name)
                    ->markdown('emails.video_calls.new_booking');
    }
}
