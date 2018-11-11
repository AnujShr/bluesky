<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ClientMail extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $message = $this->data['message'] ?? '';
        $subject = $this->data['subject'];
        $application_user = config('bluesky.application.user_name');
        $application_user_email = config('bluesky.application.email');
        $email = $this->data['email'];
        return $this->from([$application_user_email, $application_user])
            ->to($email)
            ->subject($subject)->markdown($this->data['view'])->with('message', $message);
    }
}
