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

use App\User;

// use App\Http\Controllers\myUser;

Route::get('/', array('as' => 'index', function () {
    return view('mylayout.index');
}));

Route::prefix('user')->group(function() {
	// show login page
	Route::get('/login', array('as' => 'myuser_login', function() {
		return view('mylayout.login');
	}));

	Route::post('/login', 'LoginController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
