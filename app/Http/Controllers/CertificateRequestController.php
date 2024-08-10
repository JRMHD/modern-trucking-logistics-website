<?php

namespace App\Http\Controllers;

use App\Models\CertificateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CertificateRequestMail;
use Illuminate\Support\Facades\Http;
use App\Rules\ReCaptcha;

class CertificateRequestController extends Controller
{
    public function index()
    {
        return view('certificate-request');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'companyName' => 'required|string|max:255',
            'dotNumber' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'certificateType' => 'required|string|max:255',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ]);

        $locationName = null;
        if ($request->latitude && $request->longitude) {
            $response = Http::get("https://nominatim.openstreetmap.org/reverse", [
                'format' => 'json',
                'lat' => $request->latitude,
                'lon' => $request->longitude,
            ]);

            if ($response->successful()) {
                $data = $response->json();
                $locationName = $data['display_name'] ?? null;
            }
        }

        $certificateRequest = CertificateRequest::create([
            'company_name' => $request->companyName,
            'dot_number' => $request->dotNumber,
            'email' => $request->email,
            'certificate_type' => $request->certificateType,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location_name' => $locationName,
        ]);

        Mail::to('Certs@aronsongroup.com')->send(new CertificateRequestMail($certificateRequest));

        return redirect()->route('certificate-request.thankyou')->with('success', 'Certificate request submitted successfully!');
    }

    public function thankyou()
    {
        return view('certificate-request.thankyou');
    }
}
