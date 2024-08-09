<?php

namespace App\Mail;

use App\Models\DriverApplication;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DriverApplicationSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $application;
    public $resumePath;

    public function __construct(DriverApplication $application, $resumePath = null)
    {
        $this->application = $application;
        $this->resumePath = $resumePath;
    }

    public function build()
    {
        $mail = $this->view('emails.driver_application_submitted')
            ->subject('New Driver Application Submitted');

        if ($this->resumePath) {
            $mail->attach(public_path($this->resumePath));
        }

        return $mail;
    }
}
