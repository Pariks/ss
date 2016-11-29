<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{

    public function index()
    {
       if(View::exists('pages.index'))
           return view('pages.index');
        else
            return 'No view exists';


    }

    public function profile()
    {
       return view('pages.profile');
    }
    public function settings()
    {
        return view('pages.settings');
    }
    public function blade()
    {
        $gender = 'male';
        $text = 'not empty';
        return view('blade.bladetest', compact('gender', 'text'));
    }
}
