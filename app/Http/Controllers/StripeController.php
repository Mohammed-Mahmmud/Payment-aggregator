<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Illuminate\Support\Facades\Session;
use Stripe;
use Stripe\Stripe as StripeStripe;

class StripeController extends Controller
{
    //
    
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            'amount' => 10000,
            'currency'=>"usd",
            'source'=> $request->stripeToken,
            'description' =>'Test payment'
        ]);

        Session::flash('success','Payment has been successfully');
        return back();
    }


}
