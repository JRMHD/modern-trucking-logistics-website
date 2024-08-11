<?php

namespace App\Mail;

use App\Models\CertificateRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

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
        $email = $this->view('emails.certificate-request')
            ->subject('New Certificate Request - Truck4You');

        // Attach the certificate to the email
        if ($this->certificateRequest->insurance_certificate) {
            $email->attach(storage_path('app/public/' . $this->certificateRequest->insurance_certificate));
        }

        return $email;
    }
}
