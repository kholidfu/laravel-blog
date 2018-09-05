@extends('mylayout.base')
  @section('title', 'Password Reset')
  @section('content')
  <div class="row">
    <div class="col-md-8" style="margin-top: 50px;">
      <h2>Password Reset</h2>

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

      <form method="POST" action="{{ URL::route('do.password.reset') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
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
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Reset Password</button>
      </form>
    </div>
  </div>
  @endsection
