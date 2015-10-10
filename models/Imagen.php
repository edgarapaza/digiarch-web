<?php

	class Imagen
	{

		private $con;

		function __construct()
		{
			require_once "../coreapp/conection.php";
			$this->con = new Conection();
			$this->con = Conection::Conexion();
		}

		public function Mostrar($idproy){
			//echo $this->con->host_info . "\n Imagen.php";
			$sql = "SELECT ruta,directorio,idproy FROM imagenes WHERE idproy = ".$idproy;
			$datos = $this->con->query($sql);
			return $datos;
		}

		public function Add(){

		}

		public function Modificar(){

		}
	}

?>