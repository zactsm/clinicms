<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller{
    public function create()
    {
        return view('payment');
    }

    public function store(Request $request)
    {
    // Validate the request data
    $validatedData = $request->validate([
        'bill_id' => 'required',
        'amount' => 'required',
    ]);

    // Store the payment data in the database
    $payment = new Payment();
    $payment->billID = $validatedData['bill_id'];
    $payment->paymentAmount = $validatedData['amount'];
    $payment->paymentDate = now(); // or any other date you want
    $payment->save();

    // Construct the PayPal URL
    $paypalUrl = 'https://www.sandbox.paypal.com/cgi-bin/webscr?' . http_build_query([
        'cmd' => '_xclick',
        'business' => 'myclinic@business.example.com',
        'item_name' => 'Payment for Bill',
        'amount' => $validatedData['amount'],
        'currency_code' => 'MYR',
        'return' => url('/'), // or any other URL
        'cancel_return' => url('/payment-cancel'), // or any other URL
    ]);

    // Redirect the user to PayPal
    return redirect()->away($paypalUrl);
    }

    public function makePayment(Request $request)
    {
        // Validate the request data
        $request->validate([
            'bill_id' => 'required',
            'amount' => 'required|numeric',
        ]);

        // Create a new Payment record
        $payment = new Payment();
        $payment->bill_id = $request->input('bill_id');
        $payment->amount = $request->input('amount');
        $payment->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Payment successfully made.');
    }
}
