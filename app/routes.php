<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showMain');
Route::get('/studio', 'HomeController@showUs');

Route::get('/hilena', 'AdminController@getHiLena');
Route::post('/login', 'AdminController@postLogin');
Route::get('/logout', 'AdminController@getLogout');
Route::get('/main', 'AdminController@getMain');