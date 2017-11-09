<?php include("header.php");
    require_once("funciones.php");

    if (estaLogueado()) {
        header("Location:index.php");exit;
    }

    if ($_POST) {
        $arrayDeErrores = validarLogin();

        if (count($arrayDeErrores) == 0) {
            loguear($_POST["email"]);

            if (isset($_POST["recordame"])) {
                setcookie("usuarioLogueado", $_POST["email"], time()+60*60*24*30);
            }

            header("Location:perfilDeUsuario.php?email=" . $_POST["email"]);
        }
    }

?>

        <?php if(isset($arrayDeErrores)) : ?>
            <ul class="errores">
                <?php foreach($arrayDeErrores as $error) : ?>
                    <li>
                        <?=$error?>
                    </li>
                    <?php endforeach;?>
            </ul>
            <?php endif; ?>
                <br>

                <br>
                <main>
                    <section>
                        <fieldset class="inicio-sesion">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-4 log-in-master">
                                        <img src="css/images/logo.png" alt="logotipo" class="logo">
                                        <?php if(isset($arrayDeErrores)) : ?>
                                            <ul class="errores">
                                                <?php foreach($arrayDeErrores as $error) : ?>
                                                    <li>
                                                        <?=$error?>
                                                    </li>
                                                    <?php endforeach;?>
                                            </ul>
                                            <?php endif; ?>
                                                <form method="POST" action="inicio-de-sesion.php" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label for="email" class="log-in">Email</label>
                                                        <input class="form-control" type="text" id="email" name="email" placeholder="correo@ejemplo.com">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="log-in">Contraseña</label>
                                                        <input class="form-control" type="password" name="password" placeholder="su contraseña">
                                                    </div>
                                                    <div class="form-group">
                                                        <input class="log-in" type="checkbox" name="terminos">
                                                        <p class="inputlogin"> Recordarme </p>
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="" class="Olvide">Olvide mi contraseña</a>
                                                    </div>
                                                    <button class="btn btn-primary log-in" type="submit">Ingresar</button>
                                                </form>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </section>
                </main>
                
