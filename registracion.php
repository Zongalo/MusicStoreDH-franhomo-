<?php include("header.php");
require_once("funciones.php");

  if (estaLogueado()) {
    header("Location:index.php");exit;
  }

  $paises = [
    "Ar" => "Argentina",
    "Br" => "Brasil",
    "Co" => "Colombia",
    "Fr" => "Francia",
    "Ch" => "China"
  ];

  $nombreDefault = $_POST ? $_POST["nombre"] : "";
  $emailDefault = $_POST ? $_POST["email"] : "";

  /*
  if ($_POST){
    $nombreDefault = $_POST["nombre"];
  }
  else {
    $nombreDefault = "";
  }
  */

  //Si el tipo envió información
  if ($_POST) {
    // Validar
    $arrayDeErrores = validarInformacion();

    //Si no hay errores
    if (count($arrayDeErrores) == 0) {
      //Registrar
      
      $new_user = NEW Usuario($_POST);
      $new_user-> SubirNuevoUsuario();

      //Subir la foto
      $nombreArchivo = $_FILES["avatar"]["name"];

      $extension = pathinfo($nombreArchivo, PATHINFO_EXTENSION);

      $nombre =  "img/" . $_POST["email"] . ".$extension";

      $nombre =  "img/" . $_POST["email"] . ".$extension";
      $archivo = $_FILES["avatar"]["tmp_name"];
      move_uploaded_file($archivo, $nombre);

      //Redirigir a la confirmacion
      header("Location:inicio-de-sesion.php");exit;
    }
  }
?>
    <br>
    <main>
        <section>
            <fieldset class="inicio-sesion">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4 sing-in-master">
                            <img src="css/images/logo.png" alt="logotipo" class="logo sing-in">
                            <?php if(isset($arrayDeErrores)) : ?>
                                <ul class="errores">
                                    <?php foreach($arrayDeErrores as $error) : ?>
                                        <li>
                                            <?=$error?>
                                        </li>
                                        <?php endforeach;?>
                                </ul>
                                <?php endif; ?>
                                    <form method="POST" action="registracion.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="nombre_completo" class="sing-in">Nombre completo:</label>
                                            <input class="form-control form-control-sing" type="text" placeholder="Nombre y Apellido" name="nombre_completo" value="<?=$nombreDefault?>" id="nombre_completo">
                                        </div>
                                        <div class="form-group">
                                            <label for="email" class="sing-in">Email:</label>
                                            <input class="form-control form-control-sing" type="text" placeholder="correo@ejemplo.com" name="email" value="<?=$emailDefault?>" id="email">
                                        </div>
                                       <!-- Se comenta el campo EDAD-->
                                       <!--<div class="form-group">
                                            <label>Edad:</label>
                                            <input class="form-control" type="text" name="edad" value="<?=$edadDefault?>">
                                        </div>-->
                                        <div class="form-group">
                                            <label for="password" class="sing-in">Contraseña:</label>
                                            <input class="form-control form-control-sing" type="password" placeholder="su contraseña" name="password" id="password">
                                        </div>
                                        <?php if(isset($_GET["versionCorta"]) == false) : ?>
                                            <div class="form-group">
                                                <label for="confirme" class="sing-in">Confirmar Contraseña:</label>
                                                <input class="form-control form-control-sing" type="password" placeholder="confirme su contraseña" name="cpassword" id="cpassword">
                                            </div>
                                                <?php endif; ?>
      <?php if (count($paises) > 0) : ?>
        <div class="form-group">
          <label for="pais">Pais:</label>
          <select name="pais" id="pais">
            <?php foreach ($paises as $key => $pais) : ?>
              <?php if ($key == $_POST["pais"]) : ?>
                <option value="<?=$key?>" selected>
                  <?=$pais?>
                </option>
              <?php else: ?>
                <option value="<?=$key?>">
                  <?=$pais?>
                </option>
              <?php endif; ?>

            <?php endforeach; ?>

          </select>
        </div>
      <?php endif; ?>
     <!-- <div>
        Avatar: <input type="file" name="avatar">
      </div>-->
      <div class="form-group">
        <input type="checkbox" name="terminos">Acepto T&C
        <button class="btn btn-primary" type="submit">Registrar</button>
      </div>
    </form>
