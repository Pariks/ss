<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function payment()
    {

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

            $secret = '6LfLRA4UAAAAAIJXHp2dGqwpNLUSjpFhSM1V1emA';
            $ip = $_SERVER['REMOTE_ADDR'];
            $captcha = $_POST['g-recaptcha-response'];
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captcha.'&remoteip'.$ip);
            $responseArr = json_decode($response, true);

            if($responseArr['success']){
                echo 'done';
            }else{
                echo 'Spam';
            }

        }else{
            var_dump($_POST['addr1']);
            view('home')->with('post', ['hi'=>'hello']);
        }
        return view('home');
    }
}
