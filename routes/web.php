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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chargings/api/', 'ChargingApiController@index');
Route::get('/chargings/api/open/{id}', 'ChargingApiController@open');
Route::get('/chargings/api/close/{id}', 'ChargingApiController@close');

Auth::routes();
Route::group(['middleware'=>'auth'], function (){
    Route::get('/chargings', 'ChargingController@index');
    Route::put('/chargings/{charging}', 'ChargingController@update');
    Route::post('/chargings', 'ChargingController@store');
    Route::get('/chargings/create', 'ChargingController@create');
    Route::get('/chargings/{charging}', 'ChargingController@show');
    Route::get('/chargings/delete/{charging}','ChargingController@destroy');
    Route::get('/index', 'IndexController@index');
});


//Route::get('/home', 'HomeController@index');
