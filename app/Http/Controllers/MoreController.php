<?php

namespace App\Http\Controllers;


use App\Feedbacks;
use Illuminate\Http\Request;
use App\Rating;
use Auth;
class MoreController extends Controller
{


    public function aboutUs()
    {
        return view('more.aboutUs');
    }
    public function contactUs()
    {
        return view('more.contactUs');
    }
    public function feedback()
    {
        return view('more.feedback');
    }
    public function postFeedback(Request $request)
    {
        $message = $request['message'];
        $rating = $request['rating'];
        $user = Auth::user();

        $data = array();
        $data['captcha'] = false;
        $data['ratingValue'] = false;
        $data['feedbackSent'] = false;

        
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){

            $secret = '6LfLRA4UAAAAAIJXHp2dGqwpNLUSjpFhSM1V1emA';
            $ip = $_SERVER['REMOTE_ADDR'];
            $captcha = $_POST['g-recaptcha-response'];
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captcha.'&remoteip'.$ip);
            $responseArr = json_decode($response, true);

            if($responseArr['success']){
                $data['captcha'] = true;
            }else{
                $data['captcha'] = false;
            }
        }
        
        if(isset($rating) && !empty($rating) && $data['captcha'] === true) {
            $post = new Rating;
            $post->rating = $rating;
            $post->user_id = \Auth::id();
            $post->rateable_id = 1;
            $post->rateable_type = 'App\Rating';
            $post->created_at =new \DateTime;
            $post->updated_at =new \DateTime;

            if ($post->save()) {
                $data['ratingValue'] = true;
            }
        } 
        
        if(isset($message) && !empty($message) && $data['ratingValue'] === true && $data['captcha'] === true) {
            $post = new Feedbacks;
            $post->message = $message;
            $post->user_id = \Auth::id();
            $post->rating = $rating;
            $post->created_at =new \DateTime;
            $post->updated_at = new \DateTime;
            
            if ($post->save()) {
                $data['feedbackSent'] = true;
            }
        }

        return view('more.feedback')->with('data', $data);
    }
    public function learnHow()
    {
        return view('more.learnHow');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
