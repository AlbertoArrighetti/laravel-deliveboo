<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\NewOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function store(Request $request) {

     
        $newOrder = new Order();
        // fill
        $newOrder->fill($request->all());
        $newOrder->save();

        Mail::to('alberto.arrighetti1571@gmail.com')->send(new NewOrder($newOrder));



        // respond to the customer here
        return response()->json([
            'success' => true,
            'message' => 'Richiesta di contatto inviata correttamente',
            'request' => $request->all()
        ]);
    }
}
