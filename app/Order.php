<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public static function latest(){
        return DB::table('orders')->orderBy('created_at', 'desc')->first();
    }

    public static function getTotalAmount($userId){
        return DB::table('orders')->where('user_id', $userId)->sum('amount');
    }

    public static function getLastAmount($userId){
        return DB::table('orders')->select('amount')->where('user_id', $userId)->orderBy('created_at', 'desc')->get();
    }

}
