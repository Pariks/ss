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
        return view('pages.deal');
    }
}
