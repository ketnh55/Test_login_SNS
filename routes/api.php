<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users', 'api\UserController@GetUserList')->name('getAllUser');
Route::get('/remove/{id}', 'api\UserController@RemoveUser')->name('removeUser');
Route::post('auth/login', 'api\UserController@login');
Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info', 'api\UserController@getUserInfo');
});