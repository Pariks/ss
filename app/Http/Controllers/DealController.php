<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DealController extends Controller
{
    public function __construct()
    {

    }

    public function deals()
    {
        $deals = ['100', '200', '300'];
        return view('pages.deal')->with('deals', $deals);
    }
}
