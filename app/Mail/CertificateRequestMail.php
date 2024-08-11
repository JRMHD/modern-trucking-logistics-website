<?php

namespace App\Mail;

use App\Models\CertificateRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CertificateRequestMail extends Mailable
{
    use Queueable, SerializesModels;

    public $certificateRequest;

    public function __construct(CertificateRequest $certificateRequest)
    {
        $this->certificateRequest = $certificateRequest;
    }

    public function build()
    {
        $mail = $this->subject('New Certificate Request - Truck4You')
            ->view('emails.certificate-request'); // Update to match the path of your email template

        // Attach the certificate if it exists
        if ($this->certificateRequest->insurance_certificate) {
            $mail->attach(storage_path('app/public/' . $this->certificateRequest->insurance_certificate));
        }

        return $mail;
    }
}
