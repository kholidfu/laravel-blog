@extends('mylayout.base')
  @section('title', 'Dashboard')
  @section('content')
  <div class="row">
    <div class="col-md-8" style="margin-top: 50px;">
      <h2>Please logout</h2>
      <a class="btn btn-primary" href="{{ URL::route('logout') }}">Logout</a>
    </div>
  </div>
  @endsection
