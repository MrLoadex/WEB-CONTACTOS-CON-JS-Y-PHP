
<?php 
	
	class Conexion {

		public function conectar() {
			$servidor = "localhost";
			$usuario = "root";
			$password = "";
			$bd = "agendafa";
			// log("Conexion establecida");
			$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

			return $conexion;
		}
	}

 ?>