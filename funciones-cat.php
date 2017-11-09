<?php
	 $host = 'mysql:host=localhost;dbname=music_store;charset=utf8mb4';
      $user = 'root';
      $pass = '';
      $conn = new PDO($host, $user, $pass);

 

   //Clases de las categorias e instrumentos.
      
    class Instrumento {
      	
      	protected $nombre_instrumento;
      	protected $descripccion;
      	protected $price;
      	protected $thubnail;

      	function __construct(array $array /*=$_POST*/){
			$this->nombre_instrumento = $array['nombre_instrumento'];
			$this->descripccion = $array['descripccion'];
			$this->price = $array['price'];
			$this->thubnail = $array['thubnail'];
			
		}

		public function SubirNuevoItem(){

		global $conn;

		 $new_user = $conn->prepare("SELECT * FROM instrumentos WHERE descripccion = :descripccion");
		   		$descripccion = $this->descripccion;
		        $new_user->bindValue(':descripccion', $descripccion, PDO::PARAM_STR);
		        $new_user->execute();
		        $rows = $new_user->rowCount();

		        echo "Estos son los instrumentos";
		        var_dump($rows);

		        if ($rows == 0) {
		        	$new_user = $conn->prepare("INSERT INTO instrumentos (nombre_instrumento,descripccion,price,thubnail) VALUES (:nombre_instrumento,:descripccion,:price,:thubnail)");

		            $nombre_instrumento = $this->nombre_instrumento;
		            $descripccion = $this->descripccion;
		            $price = $this->price;
		            $thubnail = $this->thubnail;
		            
		            $new_user->bindValue(':nombre_instrumento', $nombre_instrumento, PDO::PARAM_STR);
		            $new_user->bindValue(':descripccion', $descripccion, PDO::PARAM_INT);
		            $new_user->bindValue(':price', $price, PDO::PARAM_INT);
		            $new_user->bindValue(':thubnail', $thubnail, PDO::PARAM_INT);
		            
		            var_dump($new_user);
		            $new_user->execute();
		            echo"Bienvenido $nombre_instrumento";

		          } else {
		       
		        		$update_item = $conn->prepare("UPDATE instrumentos SET nombre_instrumento = :nombre_instrumento, descripccion = :descripccion, price = :price, thubnail = :thubnail WHERE nombre_instrumento = :nombre_instrumento");
		              
			            $nombre_instrumento = $this->nombre_instrumento;
			            $descripccion = $this->descripccion;
			            $price = $this->price;
			            $thubnail = $this->thubnail;
			              

			            $update_item->bindValue(':nombre_instrumento', $nombre_instrumento, PDO::PARAM_INT);
			            $update_item->bindValue(':descripccion', $descripccion, PDO::PARAM_INT);
			            $update_item->bindValue(':price', $price, PDO::PARAM_INT);
			            $update_item->bindValue(':thubnail', $thubnail, PDO::PARAM_STR);
			            var_dump($update_item);
			            $update_item->execute();
			            echo "Me ejecute. Lo actuelize por que ya estaba";
			        }
		    }

		  
		}

	

      
