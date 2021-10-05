<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>


        <a class="nav-link" href="#">New Features</a>


        <a class="nav-link" href="#">Press</a>

        <a class="nav-link" href="#">New Hires</a>

        <a class="nav-link ml-auto" href="#">{{Auth::user()->name }}</a>

  </div>
</nav>