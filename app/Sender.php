<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sender extends Model
{
    public static function latest(){
        return DB::table('senders')->orderBy('created_at', 'desc')->first();
    }
}
