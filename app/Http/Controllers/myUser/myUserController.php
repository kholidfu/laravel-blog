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
        $credentials = array(['email' => $email, 'password' => $password]);

        if (Auth::attempt($credentials)) {
            session(['email' => $request->get('email')]);
            // return Redirect::back();
            return redirect("/home");
        } else {
            // return redirect()->guest('/');
            // return redirect()->back()->with('status', trans('Book has been successfully assigned to the reader.'));
            return "failed!";
        }
    }

    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        // return Redirect::back();
        return "logged out!";
    }
}
