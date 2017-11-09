<?php require_once ("funciones.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Declaro el viewport de media queries -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="Faq.css">
    <link rel="stylesheet" type="text/css" href="Log-In.css">
    <link rel="stylesheet" type="text/css" href="Sing-in.css">
    <link rel="stylesheet" type="text/css" href="Categorias.css">
    <link rel="stylesheet" type="text/css" href="Mainpage.css">
    <link rel="stylesheet" type="text/css" href="header.css">
    <title> Music Store DH</title>
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
      <a class="navbar-brand" href="index.php">Music Store DH</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li class="active"><a href="inicio.php">Inicio</a></li>
        <li><a href="Categorias.php">Categorias</a></li>
        <li><a href="faq.php">Preguntas Frecuentes</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">

            <?php if(!estaLogueado()) : ?>

            <li><a href="registracion.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>

            <li><a href="inicio-de-sesion.php"><span class="glyphicon glyphicon-log-in"></span> Ingresar</a></li>

                      <?php endif; ?>

                     <?php if (estaLogueado()) : ?>
            <li class="headerli"> <span class="glyphicon glyphicon-log-in"></span> <a id="headera" href="logout.php">Logout</a> </li>
            <li> <a href="perfilDeUsuario.php"> <span class="glyphicon glyphicon-user"></span> Perfil de <?php echo obtenerUsuarioLogueado();?> </a></li>
                     <?php endif; ?>

          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



