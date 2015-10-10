<?php

	class Listado{

		public function Listado(){
			require "../coreapp/conection.php";

			$sql = "SELECT codigo, dia, mes, anio, idimagen, idproy, iddocum FROM documento WHERE estado = 1 LIMIT 0,10;";
			$data = $mysqli->query($sql);
			return $data;
		}

		public function RutaArchivo($idimagen){
			require "../coreapp/conection.php";

			$sql = "SELECT ruta, directorio FROM imagenes WHERE idimagen = $idimagen";
			$data = $mysqli->query($sql);
			return $data;
		}
	}
 ?>