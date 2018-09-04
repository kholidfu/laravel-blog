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
    public function store(Request $request)
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
            return Redirect::to('/user/login')
            ->withErrors($validator) // send back all errors to the login form
            ->withInput(Input::except('password')); // send back the input (not the password)
        } else {
            // create user data for the authentication process
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password'),
            );

            // inserting data to dbase
            
        }

    }
}
