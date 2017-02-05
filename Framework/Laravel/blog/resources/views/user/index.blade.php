<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../web/favicon.ico">
    <title>Laravel @yield('title')</title>
        <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap-theme.min.css"></script>
        <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      @section('nav')
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
    @show
    <div class="jumbotron">
      @section('content')
      <div class="container">
        <h1>Hello, world!</h1>
        <p>Study Laravel fo make money !</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Doneo dui. </p>
          <p><a class="btn btn-default" href="#" role="button">Blog &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>How to study laravel . </p>
          <p><a class="btn btn-default" href="#" role="button">About &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Heading</h2>
          <p>Donessa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#" role="button">Study &raquo;</a></p>
        </div>
      </div>
    @show
      <hr>
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div>
  </body>
</html>
