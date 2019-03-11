<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/redirect_facebook', 'LoginFacebookController@redirectToProvider')->name('redirect');

Route::get('/callback', 'LoginFacebookController@callBack')->name('callback');
Route::get('/redirect_tw', 'LoginFacebookController@redirectToProviderTW')->name('redirect_tw');
Route::get('/callback_tw', 'LoginFacebookController@callBack_tw')->name('callback_tw');



//Route::get('/api/users', 'api\UserController@GetUserList')->name('getAllUser');