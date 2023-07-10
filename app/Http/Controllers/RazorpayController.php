<?php

namespace App\Http\Controllers;
use Razorpay\Api\Api;

use Illuminate\Http\Request;

class RazorpayController extends Controller

{public $api;

    public function __construct($Foo = null)
    {
        $this->api = new api("rzp_test_mQnvnD1wDNDgpK", "8yeqoOAZ3evBZl97ldlaGOnV");
    }

    public function formPage()
    {
        return view('payment');
    }

    public function makerOrder(Request $req)
    {
        $this->validate($req, [
            'amount' => 'required|numeric'
        ]);

        $orderid = rand(111111, 999999);
        $orderData = [
            'receipt'   => 'rcptid_11',
            'amount'    => ($req->input('amount') * 100),
            'currency'  => 'INR',
            'notes'     => [
                'order_id' => $orderid,
            ],
        ];

        $razorpayOrder = $this->api->order->create($orderData);
        // dd($razorpayOrder);

        return view('order_details', compact('orderid', 'razorpayOrder'));


    }
    public function success(Request $request){
      // dd($request->all());


// Status check ke liye cammnd..
$paymentId = $request->get('payment_id');

$status = $this->api->payment->fetch($paymentId);

// dd($status);
if($status->status== 'captured'){
   return redirect()->route('home')->with('success','payment was suicessfuliy done');
}
else{
    return redirect()->route('home')->with('success','payment was failed done');

}




}
}

