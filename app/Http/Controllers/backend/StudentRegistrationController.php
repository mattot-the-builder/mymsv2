<?php

namespace App\Http\Controllers\backend;

use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stripe\Error\Card;

class StudentRegistrationController extends Controller {
    // create function
    public function create() {
        return view('backend.student-registration.create');
    }

    // checkout function
    public function checkout(Request $request) {
        dd('remove this line after testing');
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        header('Content-Type: application/json');

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                // 'price' => 'pr_123',
                'price_data' => [
                    'currency' => 'myr',
                    'unit_amount' => 300,
                    'product_data' => [
                        'name' => 'payment testing',
                        'description' => 'payment testing',
                        'images' => ['https://picsum.photos/600'],
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            // 'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);

        return redirect()->away($checkout_session->url);

        // dd($checkout_session->url);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
    }
}
