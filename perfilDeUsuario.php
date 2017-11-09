<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:inicio-de-sesion.php");exit;
	}
	$email = $_GET["email"];
	$usuario = traerPorEmail($email);
?>

<?php include("header.php"); ?>





<fieldset class="inicio-sesion">
        <div class="container">

          <div class="row">
            <div class="col-md-4 col-md-offset-4 sing-in-master">
             <img src="css/images/logo.png" alt="logotipo" class="logo sing-in">
                <div class="form-group">
                    <div class="row">
                    <div class="jumbotron sing-in"><h3>Perfil de <?php echo obtenerUsuarioLogueado();?></h3></div>

            </div>
                   <label class="sing-in">Nombre: <?php echo obtenerNombrePerfil();?></label>
                </div>
                <div class="form-group">
                    <label class="sing-in">Email: <?php echo obtenerEmailPerfil();?></label>
                </div>
                <div class="form-group">
          <label class="sing-in">Pais: <?php echo obtenerPaisPerfil();?></label>
        </div>
      </div>

      </form>
          </div>
        </div>
      </div>
    </fieldset>
	</section>
	</main>
