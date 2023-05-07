<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class testSendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data_email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_email)
    {
        $this->data_email = $data_email;
    }

    public function build()
    {
        return $this->subject($this->data_email['subject'])
            ->from($this->data_email['email'], $this->data_email['name'])
            ->view('user.messageView');
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    // public function envelope()
    // {
    //     return new Envelope(
    //         // subject: $this->data_email['subject'],
    //     );
    // }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     // return $this->subject($this->data_email['subject'])
    //     //     ->from($this->data_email['email'])
    //     //     ->view('user.contactUs');
    //     return new Content(
    //         view: 'user.email',
    //         with: [
    //             'subject'
    //         ]
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array
    //  */
    // public function attachments()
    // {
    //     return [];
    // }
}
