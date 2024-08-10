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
        return $this->view('emails.certificate-request')
            ->subject('New Certificate Request - Truck4You');
    }
}
