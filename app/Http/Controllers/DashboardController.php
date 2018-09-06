<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use URL;

class DashboardController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
    // $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  // public function index($userId)
  public function index()
  {
    if (!Auth::user()) {
      return redirect()->route('myuser_login');
    }
    return view('mylayout.dashboard');
  }
}
