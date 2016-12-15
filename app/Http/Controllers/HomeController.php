<?php

namespace App\Http\Controllers;

use App\Captcha;
use App\Order;
use App\Receiver;
use App\Sender;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function orders(Request $request)
    {

        $user = Auth::user();
        $data = array();
        $captcha = new Captcha();
        $data['captcha'] =  $captcha->verifyCaptcha();
        if($data['captcha'] === false)
        {
            return view('home')->with('data', $data);
        }

        $postSender = new Sender;
        $postSender->name = $data['sernderName'] = $request['sendername'];
        $postSender->loggedIn_userId = Auth::id();
        $postSender->addr1 = $request['senderaddr1'];
        $postSender->addr2 = $request['senderaddr2'];
        $postSender->phone_no= $request['senderphone'];
        $postSender->postal_code = $request['senderpostalcode'];
        $postSender->city = $request['sendercity'];
        $postSender->country = $request['sendercontry'];
        $postSender->created_at = new \DateTime;
        $postSender->updated_at = new \DateTime;
        $data['sender'] = $postSender->save();

        $postReceiver = new Receiver;
        $postReceiver->name = $request['name'];
        $postReceiver->loggedIn_userId = Auth::id();
        $postReceiver->gift_amount = $request['amount'];
        $postReceiver->age_range = $request['agerange'];
        $postReceiver->gift_link = $request['giftlink'];
        $postReceiver->phone_no= $request['phone'];
        $postReceiver->addr1 = $request['addr1'];
        $postReceiver->addr2 = $request['addr2'];        
        $postReceiver->postal_code = $request['postalcode'];
        $postReceiver->city = $request['city'];
        $postReceiver->country = $request['contry'];
        $postReceiver->dealCode = $request['dealcode'];
        $postReceiver->created_at = new \DateTime;
        $postReceiver->updated_at = new \DateTime;
        $data['receiver'] = $postReceiver->save();

        $latestSender = Sender::latest();
        $latestReceiver = Receiver::latest();

        $postOrder = new Order;
        $postOrder->sender_id = $latestSender->id;
        $postOrder->receiver_id = $latestReceiver->id;
        $postOrder->user_id = $latestSender->loggedIn_userId;
        $postOrder->amount = $request['amount'];
        $postOrder->created_at = new \DateTime;
        $postOrder->updated_at = new \DateTime;
        $data['order'] = $postOrder->save();
        
        
        if($data['order'] && $data['receiver'] && $data['sender'] ){
            return view('subscription.subscription')->with('data', $data);
        }


        return view('home')->with('data', $data);
    }
}
