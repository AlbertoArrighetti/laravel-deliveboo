<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $gateway;

    public function __construct()
    {
        $this->gateway = new Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchant_id'),
            'publicKey' => config('services.braintree.public_key'),
            'privateKey' => config('services.braintree.private_key'),
        ]);
    }

    public function token()
    {
        $token = $this->gateway->clientToken()->generate();
        return response()->json(['token' => $token]);
    }

    public function checkout(Request $request)
    {
        $amount = $request->amount; // Amount to charge
        $nonce = $request->payment_method_nonce;

        $result = $this->gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            'options' => [
                'submitForSettlement' => true,
            ],
        ]);

        if ($result->success) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => $result->message]);
        }
    }

}
