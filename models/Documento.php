<?php
//dentro de Models
	class Documento{

		public function Add($datos)
		{
			require "../coreapp/conection.php";
			extract($datos);

			//echo "$idproy,$idimagen,$idinvol,$codigo,$dia,$mes,$anio,$nombres,$apellidos,$asunto,$direccion,$cantfolios,$obs";

			$sql = "INSERT INTO documento (iddocum,idproy,idimagen,idinvol,codigo,dia,mes,anio,nombres,apellidos,asunto,direccion,cantfolios,obs, estado) VALUES (null,'$idproy','$idimagen','$idinvol','$codigo','$dia','$mes','$anio','$nombres','$apellidos','$asunto','$direccion','$cantfolios','$obs',0);";
			$mysqli->query($sql);
		}

		public function Duplicado($datos)
		{

			require "../coreapp/conection.php";
			$respuesta = false;

			extract($datos, EXTR_PREFIX_SAME, "form_");

			$sql = "SELECT iddocum FROM documento WHERE idproy = '$idproy' AND idimagen = '$idimagen' AND codigo = '$codigo' AND dia = '$dia' AND mes = '$mes' AND anio = '$anio'";

			$valor = $mysqli->query($sql);
			$numero = $valor->num_rows;

			if($numero > 0){
				$respuesta = true;
			}else{
				$respuesta = false;
			}
			return $respuesta;

		}
	}

 ?>