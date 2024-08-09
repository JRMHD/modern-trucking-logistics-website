<?php

namespace App\Http\Controllers;

use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'usermail' => 'required|email|max:255',
            'userphone' => 'required|string|max:20',
            'usersubject' => 'required|string|max:255',
            'usermessage' => 'required|string',
            // 'g-recaptcha-response' => 'required|recaptcha',
            'g-recaptcha-response' => ['required', new ReCaptcha],
        ]);

        $submission = ContactSubmission::create($validated);

        Mail::to('letsroll@truk4you.com')->send(new ContactFormSubmission($submission));

        return redirect()->back()->with('success', 'Your message has been sent successfully! We will get back to you soon.');
    }
}
