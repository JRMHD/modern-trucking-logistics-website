<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\NewSubscriberNotification;
use App\Mail\SubscriptionConfirmation;
use App\Rules\ReCaptcha;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:subscribers,email',
                'g-recaptcha-response' => ['required', new ReCaptcha],
            ]);

            $subscriber = Subscriber::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);

            // Send email to owner
            Mail::to('letsroll@truk4you.com')->send(new NewSubscriberNotification($subscriber));

            // Send confirmation email to subscriber
            Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));

            return redirect()->back()->with('success', 'Thank you for subscribing!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            Log::error('Subscription error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again later.');
        }
    }
}
