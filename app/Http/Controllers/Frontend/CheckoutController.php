<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function checkout(){
        return view('frontend.checkout_payment.checkout');
    }

    public function payment(){
        return view('frontend.checkout_payment.payment');
    }
}
