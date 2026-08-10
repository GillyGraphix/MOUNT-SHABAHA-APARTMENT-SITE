<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// Route ya kufungua website
Route::get('/', function () {
    return view('welcome');
});

// Route ya kupokea form na kutuma Email kupitia RESEND API
Route::post('/submit-booking', function (Request $request) {
    // 1. Validate form inputs
    $data = $request->validate([
        'name'     => 'required|string|max:255',
        'email'    => 'required|email',
        'phone'    => 'required|string',
        'checkin'  => 'required|date',
        'checkout' => 'required|date',
        'guests'   => 'required|integer|min:1',
        'space'    => 'required|string',
    ]);

    // 2. Format the email message in English
    $messageBody = "Hello Team,\n\nYou have a new booking inquiry from the Mount Shabaha website:\n\n";
    $messageBody .= "Guest Name: " . $data['name'] . "\n";
    $messageBody .= "Email Address: " . $data['email'] . "\n";
    $messageBody .= "Phone Number: " . $data['phone'] . "\n";
    $messageBody .= "Check-In Date: " . $data['checkin'] . "\n";
    $messageBody .= "Check-Out Date: " . $data['checkout'] . "\n";
    $messageBody .= "Total Guests: " . $data['guests'] . "\n";
    $messageBody .= "Selected Space: " . ucfirst($data['space']) . "\n\n";
    $messageBody .= "Please reach out to the guest as soon as possible to confirm their stay.";

    // 3. Tuma Email kupitia Resend API
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env('RESEND_API_KEY'),
        'Content-Type' => 'application/json',
    ])->post('https://api.resend.com/emails', [
        'from' => 'onboarding@resend.dev',
        'to' => ['booking.mtshabahaapartment@gmail.com'],
        'subject' => 'New Booking Request from: ' . $data['name'],
        'text' => $messageBody,
        'reply_to' => $data['email']
    ]);

    // 4. Redirect back with success message
    return back()->with('success', 'Thank you! Your booking request has been successfully sent. Our team will contact you shortly.');
    
})->name('booking.submit');