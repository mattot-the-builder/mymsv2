<?php

namespace App\Http\Controllers\backend;

use App\Mail\Invoice as AppInvoice;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\StudentRegistration;
use App\Models\Invoice;
use App\Exports\StudentRegistrationExport;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
// use LaravelDaily\Invoices\Invoice;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\InvoiceItem;
use App\Mail\Receipt;

class StudentRegistrationController extends Controller
{
    //index function
    public function index(Request $request)
    {
        $student_registrations = StudentRegistration::sortable()->latest()->paginate(10);
        return view('backend.student-registration.index', compact('student_registrations'));
    }

    // create function
    public function create()
    {
        $courses = Course::all();
        return view('backend.student-registration.create', compact('courses'));
    }

    public function invoiceTest()
    {
        $customer = new Buyer([
                   'name'          => 'John Doe',
                   'custom_fields' => [
                       'email' => 'test@example.com',
                   ],
               ]);

        $item = (new InvoiceItem())->title('Service 1')->pricePerUnit(2);

        $invoice = Invoice::make()
            ->buyer($customer)
            ->discountByPercent(10)
            ->taxRate(15)
            ->shipping(1.99)
            ->addItem($item);

        return $invoice->stream();
    }

    public function store(Request $request)
    {
        $student_registration = new StudentRegistration();
        $student_registration->user_id = Auth::user()->id;
        $student_registration->name = $request->name;
        $student_registration->ic_number = $request->ic_number;
        $student_registration->contact = $request->contact;
        $student_registration->company_name = $request->company_name;
        $student_registration->address = $request->address;
        $student_registration->is_sponsored = $request->is_sponsored;
        $student_registration->competency = $request->competency;
        $student_registration->position = $request->position;
        $student_registration->course_id = $request->course_id;
        $student_registration->contact = $request->contact;
        $student_registration->status = 'pending';

        $invoice = new Invoice();

        if ($student_registration->save()) {

            $invoice->user_id = Auth::user()->id;
            $invoice->student_registration_id = $student_registration->id;

            if ($invoice->save()) {

                $invoice_data = [
                    'id' => $invoice->id,
                    'date' => $invoice->created_at,
                    'user_name' => $invoice->user->name,
                    'user_address' => $invoice->studentRegistration->address,
                    'course_name' => $invoice->studentRegistration->course->name,
                    'fee' => $invoice->studentRegistration->course->fee,
                    'user_id' => $invoice->user_id
                ];

                $invoice_mail = new AppInvoice(compact('invoice_data'));

                Mail::to('matott@receive.com')->send($invoice_mail);

                return view('backend.student-registration.invoice', compact('invoice'))->with('success', 'Registered successfully');
            }
        } else {
            return view('backend.student-registration.create', compact('student_registration'))->with('error', 'Failed to register student');
        }
    }

    public function checkout($id, Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $invoice = Invoice::findOrfail($id);

        $session = $stripe->checkout->sessions->create([

            'line_items' => [[
                'price_data' => [
                    'currency' => 'myr',
                    'unit_amount' => $invoice->studentRegistration->course->fee * 100,
                    'product_data' => [
                        'name' => $invoice->studentRegistration->course->name,
                        'images' => ['https://picsum.photos/600'],
                    ],
                ],
                'quantity' => 1,
            ]],
            'customer_email' => Auth::user()->email,
            'client_reference_id' => $invoice->id,
            'mode' => 'payment',
            'success_url' => env('APP_URL') . '/register-programme/success?session_id={CHECKOUT_SESSION_ID}&contact=' . $invoice->studentRegistration->contact,
            'payment_method_types' => [$request->payment_method],
        ]);

        return redirect()->away($session->url);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $session->url);

    }

    /**
    // checkout function
    public function checkout(Request $request)
    {

        $student_registration = new StudentRegistration();
        $student_registration->user_id = Auth::user()->id;
        $student_registration->ic_number = $request->ic_number;
        $student_registration->contact = $request->contact;
        $student_registration->company_name = $request->company_name;
        $student_registration->address = $request->address;
        $student_registration->is_sponsored = $request->is_sponsored;
        $student_registration->competency = $request->competency;
        $student_registration->position = $request->position;
        $student_registration->course_id = $request->course_id;
        $student_registration->contact = $request->contact;
        $student_registration->status = 'pending';

        if ($student_registration->save()) {
            $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

            $session = $stripe->checkout->sessions->create([

                'line_items' => [[
                    'price_data' => [
                        'currency' => 'myr',
                        'unit_amount' => $request->amount * 100,
                        'product_data' => [
                            'name' => Course::find($request->course_id)->name,
                            'images' => ['https://picsum.photos/600'],
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'customer_email' => Auth::user()->email,
                'client_reference_id' => $request->course_id,
                'mode' => 'payment',
                'success_url' => env('APP_URL') . '/register-programme/success?session_id={CHECKOUT_SESSION_ID}&contact=' . $request->contact,
                // 'success_url' => route('success', ['session_id' => '{CHECKOUT_SESSION_ID}', 'course_id' => $request->course, 'contact' => $request->contact]),
                // 'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
                'payment_method_types' => [$request->payment_method],
            ]);

            return redirect()->away($session->url);

            header("HTTP/1.1 303 See Other");
            header("Location: " . $session->url);
        } else {
            return redirect()->route('student-registration.index')->with('error', 'Failed to register course');
        }
    }
    **/

    public function success(Request $request)
    {
        // Initialize Stripe with your secret key

        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $session = $stripe->checkout->sessions->retrieve($request->query('session_id'));

        $student_registration = Auth::user()->studentRegistrations->last();
        $student_registration->payment_id = $session->id;
        $invoice = Invoice::where('student_registration_id', '=', $student_registration->id)->first();

        $invoice_data = [
            'id' => $invoice->id,
            'date' => $invoice->created_at,
            'user_name' => $invoice->user->name,
            'user_address' => $invoice->studentRegistration->address,
            'course_name' => $invoice->studentRegistration->course->name,
            'fee' => $invoice->studentRegistration->course->fee,
            'payment_method' => $session->payment_method_types[0],
            'user_id' => $invoice->user_id
        ];

        $receipt_mail = new Receipt(compact('invoice_data'));

        Mail::to('matott@receive.com')->send($receipt_mail);

        if ($student_registration->save()) {
            return view('backend.student-registration.receipt', compact('session', 'invoice'));
        } else {
            dd('failed');
        }

        // Handle your application logic based on the payment status
        // Redirect to a thank-you page or display success message

    }

    // exportAsExcel function
    public function exportAsExcel()
    {
        return Excel::download(new StudentRegistrationExport(), 'student-registration.xlsx');
    }

    // destroy function
    public function destroy($id)
    {
        $student_registration = StudentRegistration::find($id);
        if ($student_registration->delete()) {
            return redirect()->route('student-registration.index')->with('success', 'Student registration deleted successfully');
        } else {
            return redirect()->route('student-registration.index')->with('error', 'Student registration failed to delete');
        }
    }
}
