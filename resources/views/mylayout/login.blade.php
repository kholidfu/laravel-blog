@extends('mylayout.base')
  @section('title', 'Login')
  @section('content')
  <div class="row">
    <div class="col-md-8" style="margin-top: 50px;">
      <h2>Login</h2>

      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <strong>Whoops!! </strong> There were some problems with your login.<br>
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
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ URL::route('myuser_password_reset') }}" class="btn btn-link">
          Forgot Your Password?
        </a>
      </form>
    </div>
  </div>
  @endsection
