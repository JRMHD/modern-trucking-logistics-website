<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\DriverApplicationController;
use App\Http\Controllers\CertificateRequestController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\InquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('services', function () {
    return view('services');
});

Route::get('application', function () {
    return view('application');
});
Route::get('Application', function () {
    return view('Application');
});

Route::get('contact-us', function () {
    return view('contact-us');
});

Route::get('about-us', function () {
    return view('about-us');
});
Route::get('certrequest', function () {
    return view('certrequest');
});
Route::get('feedback', function () {
    return view('feedback');
});
Route::get('truckbook', function () {
    return view('truckbook');
});



// Auth Routes
require __DIR__ . '/auth.php';

// Dashboard Route (Requires Email Verification)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Authenticated Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Form Submission Routes
Route::post('/subscribe', [SubscriberController::class, 'subscribe'])->name('subscribe');
Route::post('/contact-submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/submit-quote', [QuoteController::class, 'submitQuote'])->name('submit.quote');
Route::post('/submit-application', [DriverApplicationController::class, 'store'])->name('submit.application');


Route::get('/certificate-request', [CertificateRequestController::class, 'index'])->name('certificate-request.index');
Route::post('/certificate-request', [CertificateRequestController::class, 'store'])->name('certificate-request.store');
Route::get('/certificate-request/thankyou', [CertificateRequestController::class, 'thankyou'])->name('certificate-request.thankyou');
Route::post('/certificate-request', [CertificateRequestController::class, 'store'])->name('certificate-request.store');


Route::post('/submit-inquiry', [InquiryController::class, 'store'])->name('inquiry.store');






Route::get('/feedback', function () {
    return view('feedback');
});

Route::post('/feedback', function (Request $request) {
    $request->validate([
        'on_time_deliveries' => 'required|integer|min:1|max:100',
        'customer_satisfaction' => 'required|integer|min:1|max:100',
    ]);

    Feedback::create($request->all());

    return redirect('/feedback')->with('status', 'Feedback submitted successfully!');
});

Route::get('/', function () {
    $ratings = Feedback::avg('on_time_deliveries') ?? 95;
    $satisfaction = Feedback::avg('customer_satisfaction') ?? 94;

    return view('welcome', compact('ratings', 'satisfaction'));
});
