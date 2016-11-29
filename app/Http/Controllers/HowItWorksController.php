<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowItWorksController extends Controller
{
    public function howItWorks()
    {
        return view('pages.howItWorks');
    }
}
