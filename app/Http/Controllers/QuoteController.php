<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Mail\QuoteRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\ReCaptcha;

class QuoteController extends Controller
{
    public function submitQuote(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'usermail' => 'required|email|max:255',
            'userphone' => 'required|string|max:20',
            'phone_ext' => 'nullable|string|max:10',
            'company' => 'nullable|string|max:255',
            'equipment' => 'required|string|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ]);

        // Store the data in the database
        $quote = Quote::create($validated);

        // Send an email to the web owner
        Mail::to('letsroll@truk4you.com')->send(new QuoteRequestMail($quote));

        // Optionally, redirect back with a success message
        return redirect()->back()->with('success', 'Quote request submitted successfully!');
    }
}
