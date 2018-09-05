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
  // process login
	Route::post('/login', 'LoginController@dologin');

    // show registration form
    Route::get('/register', array('as' => 'myuser_register', function() {
      return view('mylayout.register');
    }));
    // save register info into database
    Route::post('/register', 'RegisterController@store');

    // 1. show form to send email
    Route::get('/password-reset', array('as' => 'myuser_password_reset', function() {
      return view('mylayout.password_reset');
    }));
    // 2. send email (override Auth\ForgotPasswordController)
    Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('myuser.password.reset');

    // 3. show form to reset password
    Route::get('/password/reset/{token}', array('as' => 'password.reset.token', function($token) {
      return view('mylayout.password_reset_token', compact('token'));
    }));
    // 4. reset password
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');

    // logout
    Route::get('/logout', 'LoginController@logout')->name('logout');
});

Route::get('/user/{userId}/dashboard', 'DashboardController@index')->name('myuser_dashboard');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
