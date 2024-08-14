<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\InquiryReceived;
use App\Rules\ReCaptcha;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'dot_mc_number' => 'required|string|max:50',
            'equipment_type' => 'required|string|max:50',
            'equipment_details' => 'required|string',
            'additional_info' => 'nullable|string',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ]);

        // Store the form data
        $inquiry = Inquiry::create($validated);

        // Send an email with the form data
        Mail::to('letsroll@truk4you.com')->send(new InquiryReceived($inquiry));

        return back()->with('success', 'Your enquiry has been submitted successfully.');
    }
}
