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
        // Validate the request data
        $validatedData = $request->validate([
            'companyName' => 'required|string|max:255',
            'companyAddress' => 'required|string|max:1000',
            'reason' => 'required|string|max:1000',
            'email' => 'required|email',
            'deliveryEmail' => 'required|email',
            'limitRequested' => 'required|numeric',
            'dotNumber' => 'nullable|string',
            'latitude' => 'nullable|numeric',
            'longitude' => 'nullable|numeric',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ]);
        // Reverse geocoding to get the location name
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

        // Create a new certificate request record
        $certificateRequest = CertificateRequest::create([
            'company_name' => $request->companyName,
            'company_address' => $request->companyAddress,
            'reason' => $request->reason,
            'email' => $request->email,
            'delivery_email' => $request->deliveryEmail, // Ensure this is added in your model and migration
            'limit_requested' => $request->limitRequested,
            'dot_number' => $request->dotNumber,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'location_name' => $locationName,
            'special_requests' => $request->input('specialRequests'),
        ]);

        // Determine response based on limitRequested
        if ($request->input('limitRequested') > 150000) {
            return redirect()->route('certificate-request.thankyou')
                ->with('warning', 'Your request exceeds $150,000. Please contact us directly at letsroll@truk4you.com or (303) 944-7371.');
        }

        if ($request->input('limitRequested') > 100000) {
            // Send direct notification
            $this->sendDirectNotification($certificateRequest);
            return redirect()->route('certificate-request.thankyou')
                ->with('warning', 'Your request exceeds $100,000. Please contact us directly at letsroll@truk4you.com or (303) 944-7371.');
        }

        // Send request for approval
        Mail::to('letsroll@truk4you.com')->send(new CertificateRequestMail($certificateRequest));

        return redirect()->route('certificate-request.thankyou')
            ->with('success', 'Certificate request submitted successfully! It will be reviewed and processed shortly.');
    }

    protected function sendDirectNotification($certificateRequest)
    {
        // Send an email directly to yourself or another specific address
        Mail::to('letsroll@truk4you.com')->send(new CertificateRequestMail($certificateRequest));
    }

    public function thankyou()
    {
        return view('certificate-request.thankyou');
    }
}
