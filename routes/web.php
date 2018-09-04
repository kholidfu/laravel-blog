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

Route::group(['prefix' => 'user'], function() {
	Route::get('/register', array('as' => 'myuser_register', function() {
		return view('myuser.register');
	}));
	
	Route::get('/login', array('as' => 'myuser_login', function() {
		return view('myuser.login');
	}));
	Route::post('/login', 'myUser\myUserController@login');
	Route::get('/logout', 'myUser\myUserController@logout');
});

Route::get('/users', array('as' => 'users', function() {
	// pull data straight from App\User controller
	$users = User::all();
	return $users;
}));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
