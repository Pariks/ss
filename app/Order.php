<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    public static function latest(){
        return DB::table('orders')->orderBy('created_at', 'desc')->first();
    }
}
