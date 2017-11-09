<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:inicio.php");exit;
	}
	$email = $_GET["email"];
	$usuario = traerPorEmail($email);
?>

<?php include("header.php"); ?>
		<div class="jumbotron">Perfil de <?=$usuario["nombre"]?></div>
		<ul>
			<li>Nombre: <?=$usuario["nombre"]?> </li>
			<li>Email: <?=$usuario["email"]?> </li>
		</ul>



<?php include("footer.php"); ?>
