<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


 
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

Route::get('/', function(){
    return view('blade.bladetest');
});


/*Route::get('blade', 'PagesController@blade');

Route::get('users/create', ['uses' => 'UserController@create']);
Route::post('users', ['uses' => 'UserController@store']);*/
Auth::routes();

//Routes that requires authentication
Route::group(['middleware' => 'authenticated'], function(){
    Route::get('home', 'HomeController@index');
    Route::post('makePayment', 'HomeController@orders');
    Route::get('makePayment','BillingController@getIndex');
    Route::get('profile', 'ProfileController@index');
    Route::get('contactUs',  'MoreController@contactUs');
    Route::post('contactUs',  'MoreController@postContactUs');
    Route::get('feedback', 'MoreController@feedback');
    Route::post('feedback', 'MoreController@postFeedback');

    Route::get('billingConfirmation', 'BillingController@getIndex');

    Route::post('billingConfirmation','BillingController@index');
    Route::post('profile', 'ProfileController@updateAvatar');
    
    
});


Route::get('howItWorks', 'HowItWorksController@howItWorks');

Route::get('amazon', function(){
    return Redirect::to('http://www.amazon.ca');
});
Route::get('bestbuy', function(){
    return Redirect::to('http://www.bestbuy.ca');
});
Route::get('deal', 'DealController@deals');
Route::get('aboutUs',  'MoreController@aboutUs');
Route::get('learnHow', 'MoreController@learnHow');




  