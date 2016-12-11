<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captcha extends Model
{
    public function verifyCaptcha()
    {
        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
        {
            $secret = '6LfLRA4UAAAAAIJXHp2dGqwpNLUSjpFhSM1V1emA';
            $ip = $_SERVER['REMOTE_ADDR'];
            $captcha = $_POST['g-recaptcha-response'];
            $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$captcha.'&remoteip'.$ip);
            $responseArr = json_decode($response, true);

            if($responseArr['success']){
                return true;
            }else{
                return false;
            }
        }

        return false;
    }
}
