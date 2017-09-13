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
	return view('index');
});

// About
Route::get('/about', 'AboutController@index');

// Examples
Route::get('/examples', 'ExamplesController@index');

// Accoms
Route::get('/accoms', 'AccomsController@index');