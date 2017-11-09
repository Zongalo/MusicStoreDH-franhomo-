<?php
	include("funciones.php");

	if (!estaLogueado()) {
		header("Location:login.php");exit;
	}

	$usuario = obtenerUsuarioLogueado();
?>

<?php include("header.php"); ?>
		<div class="jumbotron">Perfil de <?=$usuario["nombre"]?></div>
		<ul>
			<li>Nombre: <?=$usuario["nombre"]?> </li>
			<li>Email: <?=$usuario["email"]?> </li>
			<li>Edad: <?=$usuario["edad"]?> </li>
			<li>Pais: <?=$usuario["pais"]?> </li>
		</ul>



<?php include("footer.php"); ?>
