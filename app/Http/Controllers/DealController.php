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
        $deals = [
           
            '100' =>[
                'amount' => '100',
                'deal' => '130'
            ],
            '200'=>[
                'amount' => '200',
                'deal' => '250'
            ],
            '300'=>[
                'amount' => '300',
                'deal' => '370'
            ],
            '400'=>[
                'amount' => '400',
                'deal' => '490'
            ]
        ];
        return view('pages.deal')->with('deals', $deals);
    }
}
