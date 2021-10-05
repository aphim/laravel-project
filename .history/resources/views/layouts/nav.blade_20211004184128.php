<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>


        <a class="nav-link" href="/posts/create">Create</a>

        <a class="nav-link" href="#">Press</a>

        <a class="nav-link" href="#">New Hires</a>

        @if (! Auth::check())
        <a class="nav-link ml" href="/login">Login</a>
        <a class="nav-link ml" href="/register">Register</a>

        @endif

        @if (Auth::check())

        <a class="nav-link ml" href="/logout">Logout</a>

        <a class="nav-link ml-auto" href="#">{{Auth::user()->name }}</a>

        @endif
        
  </div>
</nav>