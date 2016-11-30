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


use Illuminate\Support\Facades\Redirect;

Route::get('/', function(){
    return view('blade.bladetest');
});


/*Route::get('blade', 'PagesController@blade');

Route::get('users/create', ['uses' => 'UserController@create']);
Route::post('users', ['uses' => 'UserController@store']);*/
Auth::routes();

Route::get('/home', 'HomeController@index');

//Routes that requires authentication
Route::group(['middleware' => 'authenticated'], function(){
    Route::get('deal', 'DealController@deals');
    Route::get('/profile', 'ProfileController@index');
});


Route::get('howItWorks', 'HowItWorksController@howItWorks');

Route::get('amazon', function(){
    return Redirect::to('http://www.amazon.ca');
});
Route::get('bestbuy', function(){
    return Redirect::to('http://www.bestbuy.ca');
});

Route::get('aboutUs',  'AboutUsController@aboutUs');
Route::post('/profile', 'ProfileController@updateAvatar');