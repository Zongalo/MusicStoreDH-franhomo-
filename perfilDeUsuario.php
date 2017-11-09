<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:inicio-de-sesion.php");exit;
	}
?>

<?php include("header.php"); ?>



<div class="Desktop">


            <div class="container-fluid body-main-page body-fuq">
                    <section class="banner">
                        <img src="css/images/logo.png" alt="logotipo" class="logo logo-main">
                        <img src="css/images/img-banner.jpg" alt="banner" class="banner-main">
                        <div class="nav-header">
                        <nav class="header-nav">
                            <ul class="main-nav">
                                <li class="header-nav"> <a href="index.php">HOME</a></li>
                                <li class="header-nav"> <a href="categorias.php">CATEGORIAS</a></li>
                                <li class="header-nav"> <a href="faq.php">FAQ</a></li>
                                <li class="header-nav"> <a href="#">CONTACTO</a></li>
                            </ul>
                        </nav>
                        </div>
                    </section>


                    <!-- Título Novedades -->
                    <div class="container body-main">
                    </div>
            </div>

    <fieldset class="inicio-sesion">

          <div class="col-md-4 col-md-offset-4 perfil-master">

              <div class="title-perfil">
                
                <img src="css/images/logo.png" alt="logotipo" class="logo perfil">
                <div class="perfil-title">
                    <div class="form-group">
                    <div class="row">
                    <strong class="perfil-title">MusicStore:</strong><h3 class="perfil-title">Perfil de <?php echo obtenerUsuarioLogueado();?></h3>
                    </div>
                    </div>
                </div>
              </div>
            
          <div class="perfil-cuerpo">

                <div class="cuerpo-title">
                    <strong class="cuerpo-title">Datos Personales:</strong>
                </div>

                <div class="cuerpo-perfil">
                   <label class="perfil-cuerpo">Nombre: </label>
                   <strong class="perfil-cuerpo"><?php echo obtenerNombrePerfil();?></strong>
                </div>

                <div class="cuerpo-perfil">
                    <label class="perfil-cuerpo">Email: </label>
                    <strong class="perfil-cuerpo"> <?php echo obtenerEmailPerfil();?> </strong>
                </div>

                <div class="cuerpo-perfil">
                    <label class="perfil-cuerpo">Pais: </label>
                    <strong class="perfil-cuerpo"><?php echo obtenerPaisPerfil();?></strong>
                </div>

          </div>
      
          </div>

      </fieldset>
  </div>
	</section>
	</main>
