<?php

namespace App\Http\Controllers;


use App\Captcha;
use App\Contact;
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
    public function postContactUs(Request $request)
    {
        $message = $request['message'];      
        $user = Auth::user();
        $data = array();
        $captcha = new Captcha();
        $data['captcha'] =  $captcha->verifyCaptcha();
        $data['messageSubmitted'] = false;

        if(isset($message) && !empty($message) && $data['captcha'] === true)
        {
            $post = new Contact;
            $post->message = $message;
            $post->user_id = \Auth::id();            
            $post->created_at =new \DateTime;
            $post->updated_at = new \DateTime;

            if ($post->save()) {
                $data['messageSubmitted'] = true;
            }
        }        
        
        return view('more.contactUs')->with('data', $data);
    }
    public function feedback()
    {
        return view('more.feedback');
    }
    public function postFeedback(Request $request)
    {
        $feedback = $request['feedback'];
        $rating = $request['rating'];     

        $data = array();
        $captcha = new Captcha();
        $data['captcha'] =  $captcha->verifyCaptcha();
        $data['ratingGiven'] = false;
        $data['feedbackGiven'] = false;
   
        
        if(isset($rating) && !empty($rating) && $data['captcha'] === true) 
        {
            $post = new Rating;
            $post->rating = $rating;
            $post->user_id = \Auth::id();
            $post->rateable_id = 1;
            $post->rateable_type = 'App\Rating';
            $post->created_at =new \DateTime;
            $post->updated_at =new \DateTime;

            if ($post->save()) {
                $data['ratingGiven'] = true;
            }
        } 
        
        if(isset($feedback) && !empty($feedback) && $data['ratingGiven'] === true && $data['captcha'] === true)
        {
            $post = new Feedbacks;
            $post->feedback = $feedback;
            $post->user_id = \Auth::id();
            $post->rating = $rating;
            $post->created_at =new \DateTime;
            $post->updated_at = new \DateTime;
            
            if ($post->save()) {
                $data['feedbackGiven'] = true;
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
