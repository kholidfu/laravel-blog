@extends('mylayout.base')
  @section('title', 'Password Reset')
  @section('content')
  <div class="row">
    <div class="col-md-8" style="margin-top: 50px;">
      <h2>Password Reset</h2>

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
          <small id="emailHelp" class="form-text text-muted">We'll send your password reset through your email.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
  @endsection
