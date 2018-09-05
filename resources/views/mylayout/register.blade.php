@extends('mylayout.base')
  @section('title', 'Register')
  @section('content')
  <div class="row">
    <div class="col-md-8" style="margin-top: 50px;">
      <h2>Register</h2>

      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!! </strong> There were some problems with your registration process.<br>
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form method="POST">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name.">
        </div>
        <div class="form-group">
          <label for="email">E-Mail Address</label>
          <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input type="password" name="confirm-password" class="form-control" id="confirm-password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  @endsection
