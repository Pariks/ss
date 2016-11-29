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

Route::get('/', function(){
    return view('welcome');
});


/*Route::get('blade', 'PagesController@blade');

Route::get('users/create', ['uses' => 'UserController@create']);
Route::post('users', ['uses' => 'UserController@store']);*/
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::group(['middleware' => 'authenticated'], function(){
    Route::get('deal', 'DealController@deals');

    Route::get('aboutUs',  'AboutUsController@aboutUs');
});
Route::get('howItWorks', 'HowItWorksController@howItWorks');