<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //mutator for name attribute
    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    //mutator for password attribute
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    public function getNameAttribute($value){
         return ucfirst($value);
    }
   /* public function getEmailAttribute($value){
        return strtok($value,'@');
    }*/
}
