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

Route::post('/registration/','loginorsigninController@registrationUsers');
Route::post('/authorization/','loginorsigninController@authorizationUsers');

Route::get('/getproducts/','productsController@getProducts');
Route::post('/postproducts/','productsController@postProducts');
Route::delete('/deleteproducts/','productsController@deleteProducts');
