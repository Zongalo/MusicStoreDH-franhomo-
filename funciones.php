<?php
	 $host = 'mysql:host=localhost;dbname=music_store;charset=utf8mb4';
      $user = 'root';
      $pass = '';
      $conn = new PDO($host, $user, $pass);


	session_start();

	if (isset($_COOKIE["usuarioLogueado"]) && !estaLogueado()) {
		loguear($_COOKIE["usuarioLogueado"]);
	}

	function validarLogin() {
		$arrayDeErrores = [];


		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Es requerido un mail para ingresar";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "Escriba correctamente el email";
		}
		else if (traerPorEmail() == 0) {
			$arrayDeErrores["email"] = "Email inexistente";
		}
		else {
			//El mail existe!!
			if (traerPorEmail() == 1 && traerPorPassword() == 1) {
        	return "existe el usuario que intenta ingresar";
        	
			if (traerPorEmail() == 0 && traerPorPassword() == 0) {
				$arrayDeErrores["password"] = "La contraseña no verifica";
			}
		}

		}
		return $arrayDeErrores;
	}

	function validarInformacion() {
		$arrayDeErrores = [];

		// $nombre_completoArchivo = $_FILES["avatar"]["nombre_completo"];

		// $extension = pathinfo($nombre_completoArchivo, PATHINFO_EXTENSION);

		// if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK) {
			// $arrayDeErrores["avatar"] = "Ey, no se subio bien la foto";
		// }
		// else if ($extension != "jpg" && $extension != "jpeg" && $extension != "gif" && $extension != "png") {
		//	$arrayDeErrores["avatar"] = "La foto no tiene un formato valido";
		// }

		if ($_POST["nombre_completo"] == "") {
			$arrayDeErrores["nombre_completo"] = "Formato invalido de nombre_completo";
		}

		if ($_POST["email"] == "") {
			$arrayDeErrores["email"] = "Es requerido un mail para registrarse";
		}
		else if(filter_var($_POST["email"],  FILTER_VALIDATE_EMAIL) == false) {
			$arrayDeErrores["email"] = "Escriba correctamente el email";
		}
		else if (traerPorEmail($_POST["email"]) != null) {
			$arrayDeErrores["email"] = "El mail utilizado no esta disponible";
		}

		// if (is_numeric($_POST["edad"]) == false) {
		//	$arrayDeErrores["edad"] = "Che, pusiste cualquier cosa en la edad";
		// }

		if (strlen($_POST["password"]) < 6) {
			$arrayDeErrores["password"] = "La contraseña requiere mas de 6 caracteres";
		}
		else if ($_POST["password"] != $_POST["cpassword"]) {
			$arrayDeErrores["password"] = "Las contraseñas no verifican";
		}

		if (isset($_POST["terminos"]) == false) {
			$arrayDeErrores["terminos"] = "Debe aceptar los terminos para registrarse";
		}

		return $arrayDeErrores;
	}

	function armarUsuario($informacion) {
		return [
			"nombre_completo" => $informacion["nombre_completo"],
			"email" => $informacion["email"],
			"password" => password_hash($informacion["password"], PASSWORD_DEFAULT),
			// "edad" => $informacion["edad"],
			"pais" => $informacion["pais"],

		];
	}


	function SubirNuevoUsuario(){

		global $conn;

		 $new_user = $conn->prepare("SELECT * FROM users WHERE email = :email");
		   		$email = $_POST['email'];
		        $new_user->bindValue(':email', $email, PDO::PARAM_STR);
		        $new_user->execute();
		        $rows = $new_user->rowCount();

		        echo "Estos son los users";
		        var_dump($rows);

		        if ($rows == 0) {
		        	$new_user = $conn->prepare("INSERT INTO users (nombre_completo,email,password,pais) VALUES (:nombre_completo,:email,:password,:pais)");

		            $nombre_completo = $_POST['nombre_completo'];
		            $email = $_POST['email'];
		            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		            $pais = $_POST['pais'];
		            
		            $new_user->bindValue(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
		            $new_user->bindValue(':email', $email, PDO::PARAM_INT);
		            $new_user->bindValue(':password', $password, PDO::PARAM_INT);
		            $new_user->bindValue(':pais', $pais, PDO::PARAM_INT);
		            
		            var_dump($new_user);
		            $new_user->execute();
		            echo"Bienvenido $nombre_completo";

		          } else {
		            echo "El Mail introducido ya es existente, por favor corrija los campos o introdusca un nuevo mail. Disculpe las molestias.";
		          }
	}

		/*
		|$json = json_encode($usuario);
		|file_put_contents("users.json", $json . PHP_EOL, FILE_APPEND);}
		*/

	function traerTodosLosusers() {
		global $conn;

		$query = $conn->prepare("SELECT * FROM users");

		$query->execute();

		return $query->fethcAll(PDO:: FETCH_ASSOC);	


		/*
		|Json USUARIOS
		|
		|$archivo = fopen("users.json", "r");
		|
		|$linea = fgets($archivo);
		|
		|$users = [];
		|
		|while($linea != false) { KILLIT WITH FIRE!
		|
		|	$array = json_decode($linea, true);
		|	$users[] = $array;
		|
		|$linea = fgets($archivo);
		*/
		}

	//	return $users;
	//}

	function traerPorEmail() {
		global $conn;

		$bring_email = $conn->prepare("SELECT * FROM users WHERE email = :email");
		$email = $_POST['email'];
		$bring_email->bindValue(':email', $email, PDO::PARAM_STR);
		$bring_email->execute();
		$rows = $bring_email->rowCount();

         return $rows;
	     		        
	}

	function traerPorPassword() {
		global $conn;

		$bring_password = $conn->prepare("SELECT * FROM users WHERE password = :password");
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$bring_password->bindValue(':password', $password, PDO::PARAM_STR);
		$bring_password->execute();
		$rows = $bring_password->rowCount();

         return $rows;
	     		        
	}


	/*	$archivo = fopen("users.json", "r");

		$linea = fgets($archivo);

		while($linea != false) {

			$array = json_decode($linea, true);

			if ($array["email"] == $email) {
				return $array;
			}
			$linea = fgets($archivo);
		}

		return null;
	}
*/
	function loguear($email) {
		$_SESSION["usuarioLogueado"] = $email;
	}

	function estaLogueado() {
		if (isset($_SESSION["usuarioLogueado"])) {
			return true;
		}
		else {
			return false;
		}
	}

	function logout() {
		session_destroy();
		setcookie("usuarioLogueado", "", -1);
	}

	function obtenerUsuarioLogueado() {
			
		global $conn;

			$titulo = $conn->prepare("SELECT nombre_completo FROM users WHERE email = :email");
			$email_titulo = $_SESSION["usuarioLogueado"];
			$titulo->bindValue(':email', $email_titulo, PDO::PARAM_STR);		    
		    $titulo->execute();

		    $resultado = $titulo->fetch(PDO::FETCH_ASSOC);
		    $nombre = $resultado["nombre_completo"];
		    return $nombre;
	}


	function obtenerNombrePerfil() {
			
		global $conn;

			$titulo = $conn->prepare("SELECT nombre_completo FROM users WHERE email = :email");
			$email_titulo = $_SESSION["usuarioLogueado"];
			$titulo->bindValue(':email', $email_titulo, PDO::PARAM_STR);		    
		    $titulo->execute();

		    $resultado = $titulo->fetch(PDO::FETCH_ASSOC);
		    $nombre = $resultado["nombre_completo"];
		    return $nombre;
	}

	function obtenerEmailPerfil() {
			
		global $conn;

			$titulo = $conn->prepare("SELECT email FROM users WHERE email = :email");
			$email_titulo = $_SESSION["usuarioLogueado"];
			$titulo->bindValue(':email', $email_titulo, PDO::PARAM_STR);		    
		    $titulo->execute();

		    $resultado = $titulo->fetch(PDO::FETCH_ASSOC);
		    $nombre = $resultado["email"];
		    return $nombre;
	}

	function obtenerPaisPerfil() {
			
		global $conn;

			$titulo = $conn->prepare("SELECT pais FROM users WHERE email = :email");
			$email_titulo = $_SESSION["usuarioLogueado"];
			$titulo->bindValue(':email', $email_titulo, PDO::PARAM_STR);		    
		    $titulo->execute();

		    $resultado = $titulo->fetch(PDO::FETCH_ASSOC);
		    $nombre = $resultado["pais"];
		    return $nombre;
	}







	// Nuevas clases de funcion.php/


	class Usuario {

		protected $id;
		protected $nombre_completo;
		protected $email;
		protected $password;
		protected $pais;
		protected $rol;

		function __construct(array $array /*=$_POST*/){
			$this->nombre_completo = $array['nombre_completo'];
			$this->email = $array['email'];
			$this->password = $array['password'];
			$this->pais = $array['pais'];
			
		}

		public function SubirNuevoUsuario(){

		global $conn;

		 $new_user = $conn->prepare("SELECT * FROM users WHERE email = :email");
		   		$email = $this->email;
		        $new_user->bindValue(':email', $email, PDO::PARAM_STR);
		        $new_user->execute();
		        $rows = $new_user->rowCount();

		        echo "Estos son los users";
		        var_dump($rows);

		        if ($rows == 0) {
		        	$new_user = $conn->prepare("INSERT INTO users (nombre_completo,email,password,pais) VALUES (:nombre_completo,:email,:password,:pais)");

		            $nombre_completo = $this->nombre_completo;
		            $email = $this->email;
		            $password = password_hash($this->password, PASSWORD_DEFAULT);
		            $pais = $this->pais;
		            
		            $new_user->bindValue(':nombre_completo', $nombre_completo, PDO::PARAM_STR);
		            $new_user->bindValue(':email', $email, PDO::PARAM_INT);
		            $new_user->bindValue(':password', $password, PDO::PARAM_INT);
		            $new_user->bindValue(':pais', $pais, PDO::PARAM_INT);
		            
		            var_dump($new_user);
		            $new_user->execute();
		            echo"Bienvenido $nombre_completo";

		          } else {
		            echo "El Mail introducido ya es existente, por favor corrija los campos o introdusca un nuevo mail. Disculpe las molestias.";
		          }
	}

	}


	?>
