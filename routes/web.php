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

Route::get('/', array('as' => 'index', function () {
    return view('blog.index');
}));

Route::get('/users', array('as' => 'users', function() {
	// pull data straight from App\User controller
	$users = User::all();
	return $users;
}));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
