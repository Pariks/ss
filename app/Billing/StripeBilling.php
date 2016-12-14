<?php

namespace app\Billing;


use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Stripe\Error\Api;
use Stripe\Error\ApiConnection;
use Stripe\Error\Authentication;
use Stripe\Error\Card;
use Stripe\Error\InvalidRequest;
use Stripe\Error\RateLimit;
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
        $errors = array();
        $errors['charge-error'] = false;
        try {
            return Charge::create([

                'amount' => (int)$data['amount']*100, //$10
                'currency' => 'usd',
                'description' => $data['email'],
                'card' => $data['token']
            ]);
        }


        catch(InvalidRequest $e){

            //Invalid request errors arise when your request has invalid parameters.

            dd($e);
        }

        catch(ApiConnection $e){

            //Failure to connect to Stripe's API.
            dd($e);
        }

        catch(Api  $e){

            //API errors cover any other type of problem (e.g., a temporary problem with Stripe's servers) and are extremely uncommon.
            dd($e);
        }
        catch(Authentication $e){

            //Failure to properly authenticate yourself in the request.
            dd($e);
        }
        catch(RateLimit $e){

            //Too many requests hit the API too quickly.
            dd($e);
        }
       
        catch(Card $e){
           
            //card was declided
            $errors['charge-error'] = true;
           return $errors;

        }


    }
}