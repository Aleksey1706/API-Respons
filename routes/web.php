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
Route::get('/usertoken',['uses'=>'IndexController@index','as'=>'home']);
Route::match(['get','post'],'/',['uses'=>'IndexController@show','as'=>'show_form']);

