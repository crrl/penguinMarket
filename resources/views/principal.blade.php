<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PengüinMarket</title>
  <link rel="stylesheet" href="{{ asset("css/bootstrap.css")}}">
  <link rel="script" src="{{ asset("js/bootstrap.js")}}">
  <link rel="script" href="{{ asset("js/jquery-2.0.0.js")}}">
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">       
          <a class="navbar-brand" href="">ING. Web</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="usuarios">Usuarios <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  <!-- @yield('cabezera')
  <hr>
  @yield('conenido') -->
</body>
</html>