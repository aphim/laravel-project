{{-- <!DOCTYPE html>

<html>
    <head>

        <title> My Application</title>
    
    </head>
    
    <body>

        <div class="container">

            @yield('content')

        </div>


        @yield('footer')

    </body>

</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Album example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>
      
      @include ('layouts.nav')

    </header>

    <div class="container" p-3 p-md-5>

      <div class="row">
        @yield ('content')
        @include ('layouts.sidebar')
      </div>
    </div>

    @include ('layouts.footer')
  </body>

</html>
