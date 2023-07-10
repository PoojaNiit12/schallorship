<?php


namespace App\Http\Controllers;
use Razorpay\Api\Api;

use Illuminate\Http\Request;
use App\Models\payment;

class paymentController extends Controller
{
    public function paymentdata(Request $request)
    {
        $paymentId = $request->payment_id;

        Payment::create([
            'payment_id' => $paymentId,
        ]);

        return response()->json(['message' => 'Payment ID saved successfully.']);
    }
}
