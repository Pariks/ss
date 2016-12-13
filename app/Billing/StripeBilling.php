<?php

namespace app\Billing;


use Illuminate\Support\Facades\Config;
use Stripe\Error\Card;
use Stripe\Stripe;
use Stripe\Charge;


class StripeBilling implements BillingInterface
{

    public function __construct()
    {
        Stripe::setApiKey(Config::get('stripe.secret_key'));
    }

    public function charge(array $data)
    {
        try {
            return Charge::create([

                'amount' => 1000, //$10
                'currency' => 'usd',
                'description' => $data['email'],
                'card' => $data['token']
            ]);
        }

        
        catch(Card $e){
            
            //card was declided
            dd($e);
        }
    }
}