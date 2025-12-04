<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AdminReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $originalMessage;
    public $replyBody;

    /**
     * Create a new message instance.
     */
    public function __construct($originalMessage, $replyBody)
    {
        $this->originalMessage = $originalMessage;
        $this->replyBody = $replyBody;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        $subject = 'Balasan: ' . ($this->originalMessage->subject ?? 'Pesan dari situs');

        return $this->subject($subject)
                    ->view('emails.admin_reply')
                    ->with([
                        'original' => $this->originalMessage,
                        'replyBody' => $this->replyBody,
                    ]);
    }
}
