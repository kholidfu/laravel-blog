<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ URL::route('index') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          @if(Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::route('logout') }}">Logout</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::route('myuser_dashboard') }}">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::route('myuser_register') }}">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ URL::route('myuser_login') }}">My Account</a>
          </li>
          @endif
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
