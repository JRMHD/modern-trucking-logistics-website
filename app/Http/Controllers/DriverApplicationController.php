<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DriverApplication;
use Illuminate\Support\Facades\Mail;
use App\Mail\DriverApplicationSubmitted;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use App\Rules\ReCaptcha;

class DriverApplicationController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'license' => 'required|string|max:255',
                'license_expiration' => 'required|date',
                'endorsements' => 'required|string|max:255',
                // 'background_check' => 'required|boolean', // Still validate as boolean
                'schedule' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'experience' => 'required|string',
                'resume' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png,gif|max:10000',

                'role' => 'required|string|in:Owner Operator,Driver',
                'g-recaptcha-response' => ['required', new ReCaptcha],
            ]);

            // Create a new application instance
            $application = new DriverApplication();
            $application->fill($validated);

            // Handle file upload if provided
            if ($request->hasFile('resume')) {
                $file = $request->file('resume');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                try {
                    $file->move(public_path('resumes'), $filename);
                    $application->resume = $filename;
                } catch (\Exception $e) {
                    Log::error('File upload error: ' . $e->getMessage());
                    return redirect()->back()->withErrors('Failed to upload the resume. Please try again.');
                }
            }

            // Handle checkbox default value
            $application->background_check = $request->input('background_check', false); // Default to false if not checked

            // Save the application data to the database
            try {
                $application->save();
            } catch (\Exception $e) {
                Log::error('Database save error: ' . $e->getMessage());
                return redirect()->back()->withErrors('Failed to save your application. Please try again.');
            }

            // Send an email with the application data and file
            try {
                Mail::to('letsroll@truk4you.com')->send(new DriverApplicationSubmitted($application));
            } catch (\Exception $e) {
                Log::error('Email send error: ' . $e->getMessage());
                return redirect()->back()->withErrors('Failed to send the application email. Please contact support.');
            }

            // Redirect back with a success message
            return redirect()->back()->with('success', 'Application submitted successfully.');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Handle validation errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // Handle general errors
            Log::error('General error: ' . $e->getMessage());
            return redirect()->back()->withErrors('An unexpected error occurred. Please try again later.');
        }
    }
}
