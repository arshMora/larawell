<?php

use Illuminate\Http\Request;

/*
|------------------------   --------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/getusers/','UserController@getUsers');
Route::post('/postusers/','UserController@postUsers');
Route::patch('/updateusers/','UserController@updateUsers');
Route::post('/registrationusers/','UserController@registrationUsers');
Route::post('/postregistr/','RegistrController@postRegistr');
Route::post('/autoregistr/','RegistrController@autoRegistr');