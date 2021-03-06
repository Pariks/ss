<?php

namespace App\Http\Controllers;

use App\Order;
use App\PaymentCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class BillingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = array();
        $data['success'] = false;
        
        $latestOrder = Order::latest();
        $data['amount'] = $latestOrder->amount;
        $data['taxes'] = (int)$data['amount']*0.15;
        $data['total-charge'] =  $data['taxes'] + (int)$data['amount'];
        
        $billing = App::make('app\Billing\BillingInterface');
        $billingResponse = $billing->charge([
            'amount' =>  $data['total-charge'],
            'email' => Input::get('email'),
            'token' => Input::get('stripe-token')
        ]);

        $saveCard = new PaymentCard;
        $saveCard->card_number = $request['cardNumber'];
        $saveCard->card_cvc = $request['cvc'];
        $saveCard->expiration = $request['month'].'/'.$request['year'];
        $saveCard->user_id = \Auth::id();
        $saveCard->save();

        if($billingResponse['charge-error'] === true) {
            $data['success'] = false;
            return view('subscription.result')->with('data', $data);
        }else{
            $updateLatestOrder = Order::find($latestOrder->id);
            $updateLatestOrder->active = 1;
            $updateLatestOrder->save();
            $data['success'] = true;
            return view('subscription.result')->with('data', $data);
        }
    }
    public function getIndex(){

        return view('subscription.subscription');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
