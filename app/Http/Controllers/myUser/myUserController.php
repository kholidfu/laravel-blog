<?php

namespace App\Http\Controllers\myUser;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class myUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hi login";
    }

    public function login(Request $request)
    // get login data, validate, process
    {
        $email = $request->Input('email');
        $password = $request->Input('password');

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Auth passed ....
            if (Auth::attempt(array(
                'email' => $email,
                'password' => $password
            ))) {
                session(['email' => $request->get('email')]);
                // return Redirect::back();
                return redirect("/home");
            } else {
                // Session::flash('message', "Invalid credentials, please try again.");
                // return Redirect::back();
                return redirect("/");
            }
            
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        // return Redirect::back();
        return "logged out!";
    }
}
