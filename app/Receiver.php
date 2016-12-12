<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Receiver extends Model
{
    public static function latest(){
        return DB::table('receivers')->orderBy('created_at', 'desc')->first();
    }
}
