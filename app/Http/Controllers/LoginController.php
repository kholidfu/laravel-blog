<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

// use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
  public function dologin(Request $request)
  {
    // set rules
    $rules = array(
      'email' => 'required',
      'password' => 'required',
    );

    // run the validation rules on the inputs from the form
    $validator = Validator::make(Input::all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
      return Redirect::route('myuser_login')
      ->withErrors($validator) // send back all errors to the login form
      ->withInput(Input::except('password')); // send back the input (not the password)
    } else {
      // create user data for the authentication process
      $userdata = array(
        'email' => Input::get('email'),
        'password' => Input::get('password'),
      );

      // try to login
      if (Auth::attempt($userdata)) {
        // validation successful
        // get user id to build correct path
        // $userId = Auth::id();
        // redirect them to the secure section or whatever
        // return Redirect::route('myuser_dashboard', $userId);
        return Redirect::route('myuser_dashboard');
        // for now we'll just echo success (even though echoing in controller is bad)
        // echo 'SUCCESS!!';
      } else {
        // validation not successfull, send back to form
        return Redirect::route('myuser_login')
        ->withErrors([
            'approve' => 'Password mismatch'
        ]);
      }
    }

  }

  public function logout(Request $request)
  {
    Auth::logout();
    return Redirect::route('index');
  }
}
