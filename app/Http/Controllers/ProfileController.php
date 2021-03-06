<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array();
        $data['total-amount'] = Order::getTotalAmount(Auth::id());
        $amounts = Order::getLastAmount(Auth::id());
        if(isset($amounts)) {
            foreach ($amounts as $amount) {
                $data['last-amount'] = $amount->amount;
                break;
            }
        }
        
        return view('pages.profile' )->with('user', Auth::user())->with('data', $data);
    }
    public function updateAvatar(Request $request)
    {
        //Handle user upload of avatar
        If($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(500,500)->save(public_path('/images/uploads/avatars/'.$filename));
            $user = Auth::user();
            $user->avatar = $filename;
            $user->update();
        }

        $data = array();
        $data['total-amount'] = Order::getTotalAmount(Auth::id());

        $amounts = Order::getLastAmount(Auth::id());
        if(isset($amounts)) {
            foreach ($amounts as $amount) {
                $data['last-amount'] = $amount->amount;
                break;
            }
        }
        return view('pages.profile' )->with('user', Auth::user())->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->hasFile('avatar'));
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
