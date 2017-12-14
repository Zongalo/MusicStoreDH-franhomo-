<!DOCTYPE html>0
<html>
<head>
  <!-- Declaro el viewport de media queries -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   
<title> Music Store DH</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  
  
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Hind+Vadodara" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Pathway+Gothic+One" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="grid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/Faq.css">
    <link rel="stylesheet" type="text/css" href="css/Log-In.css">
    <link rel="stylesheet" type="text/css" href="/css/Sing-in.css">
    <link rel="stylesheet" type="text/css" href="css/Categorias.css">
    <link rel="stylesheet" type="text/css" href="css/Mainpage.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/perfilDeUsuario.css">

</head>
  <body>


<nav class="navbar navbar-inverse navbar-fixed-top">

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index">Music Store DH</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index">Inicio</a></li>
            <li class="active"><a href="categorias">Categorias</a></li>
            <li class="active"><a href="faq">Preguntas Frecuentes</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">


      @guest
        <li><a href="{{ route('login') }}"> <span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>

        <li><a href="{{ route('register') }}"> <span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
      
      @else

          <li> <a href="perfil"> <span class="glyphicon glyphicon-user"></span> Perfil de {{ Auth::user()->name }} </a></li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                     <span class="glyphicon glyphicon-log-in"></span> Log out <span class="caret"></span>
          </a>

                               
         <ul class="dropdown-menu">
         <li>
         <a href="{{ route('logout') }}"
              onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
              Logout
         </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
          </form>

        </li>
        </ul>
        </li>
       @endguest

     	 </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->


</nav>

@yield('main')


  </body>
</html>