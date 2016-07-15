<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PengüinMarket</title>
  <script src="js/jquery-2.0.0.js"></script>
  <script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="{{ asset("css/bootstrap.css")}}">
  <link rel="stylesheet" href="{{ asset("css/home.css")}}">
  <link rel="stylesheet" href="{{ asset("css/welcome.css")}}">
  <link rel="stylesheet" href="{{ asset("css/user.css")}}">
</head>
<body class="home-background">
    <nav class="navbar navbar-inverse nav-alpha">
      <div class="container-fluid">
       <div class="navbar-header">       
         <a class="navbar-brand logo-container" href="welcome">            
           <img src="{{asset("images/PINGUINO2.png")}}" alt="" class="logo">
         </a>
       </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="FAQ">Preguntas Frecuentes <span class="sr-only">(current)</span></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Iniciar Sesion</a></li>
            <li><a href="register">Registrarse</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="center">
      @yield('cabezera')
    </div>
    @yield('contenido')
</body>
</html>