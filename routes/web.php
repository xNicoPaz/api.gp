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


/*
	Members API
*/
Route::post('/members', 'MemberController@store');
Route::get('/members', 'MemberController@index');
Route::get('/members/{member}', 'MemberController@show');
Route::post('/members/{member}/update', 'MemberController@update');
