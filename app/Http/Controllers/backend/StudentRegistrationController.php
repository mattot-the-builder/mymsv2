<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\StudentRegistration;
use Stripe\Stripe;

class StudentRegistrationController extends Controller {
    // create function
    public function create() {
        $courses = Course::all();
        return view('backend.student-registration.create', compact('courses'));
    }

    // checkout function
    public function checkout(Request $request) {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->create([

            'line_items' => [[
                'price_data' => [
                    'currency' => 'myr',
                    'unit_amount' => $request->amount * 100,
                    'product_data' => [
                        'name' => Course::find($request->course)->name,
                        'description' => Course::find($request->course)->details,
                        'images' => ['https://picsum.photos/600'],
                    ],
                ],
                'quantity' => 1,
            ]],
            'customer_email' => Auth::user()->email,
            'client_reference_id' => $request->course,
            'mode' => 'payment',
            'success_url' => 'http://localhost:8000/register-programme/success?session_id={CHECKOUT_SESSION_ID}&contact=' . $request->contact,
            // 'success_url' => route('success', ['session_id' => '{CHECKOUT_SESSION_ID}', 'course_id' => $request->course, 'contact' => $request->contact]),
            // 'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        return redirect()->away($session->url);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $session->url);
    }

    public function success(Request $request) {
        // Initialize Stripe with your secret key

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->retrieve($request->query('session_id'));

        $student_registration = new StudentRegistration();
        $student_registration->user_id = Auth::user()->id;

        $student_registration->course_id = $session->client_reference_id;
        $student_registration->payment_id = $session->id;
        $student_registration->contact = $request->query('contact');
        $student_registration->status = 'pending';

        if ($student_registration->save()) {
            return view('backend.student-registration.success', compact('session'));
        } else {
            dd('failed');
        }

        // Handle your application logic based on the payment status
        // Redirect to a thank-you page or display success message

    }
}
