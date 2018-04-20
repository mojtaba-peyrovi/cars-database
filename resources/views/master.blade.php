
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/bootstrap/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('starter-template.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet">
  </head>
  <style media="screen">
  .demoHeaders {
    margin-top: 2em;
    }   
  </style>
  <body>
      <section class="jumbotron text-center bg-info">
          <div class="container">
            <h1 class="jumbotron-heading">Album example</h1>
            <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
            <p>
              <a href="#" class="btn btn-warning my-2">Main call to action</a>
              <a href="#" class="btn btn-secondary my-2">Secondary action</a>
            </p>
          </div>
        </section>
    @yield('content')



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/bootstrap/bootstrap.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script type="text/javascript">
        $( "#accordion" ).accordion();
    </script>

  </body>
</html>
