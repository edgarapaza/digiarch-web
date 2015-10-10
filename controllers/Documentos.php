<?php
// Dentro de controllers
	class Documentos{

		public function Duplicados($datos){
			require "../models/Documento.php";

			$documento = new Documento();
			$respuesta = $documento->Duplicado($datos);
			if($respuesta == true)
			{
				echo "Existe un documento creado con la misma informacion";
			}else{
				$documento->Add($datos);
				echo "Se han  Ingresado correctamente los datos";
				header("Location: ../views/MostrarProyectos.php");
			}
		}

	}

	//Recogiendo los datos de los casiellors de la vista
	$iddocum    = $_REQUEST['iddocum'];
	$idproy     = $_REQUEST['idproy'];
	$idimagen   = $_REQUEST['idimagen'];
	$idinvol    = $_REQUEST['idinvol'];
	$codigo     = $_REQUEST['codigo'];
	$dia        = $_REQUEST['dia'];
	$mes        = $_REQUEST['mes'];
	$anio       = $_REQUEST['anio'];
	$nombres    = $_REQUEST['nombres'];
	$apellidos  = $_REQUEST['apellidos'];
	$asunto     = $_REQUEST['asunto'];
	$direccion  = $_REQUEST['direccion'];
	$cantfolios = $_REQUEST['cantfolios'];
	$obs        = $_REQUEST['obs'];

	$datos = array(
		"iddocum"    => "$iddocum",
		"idproy"     => "$idproy",
		"idimagen"   => "$idimagen",
		"idinvol"    => "$idinvol",
		"codigo"     => "$codigo",
		"dia"        => "$dia",
		"mes"        => "$mes",
		"anio"       => "$anio",
		"nombres"    => "$nombres",
		"apellidos"  => "$apellidos",
		"asunto"     => "$asunto",
		"direccion"  => "$direccion",
		"cantfolios" => "$cantfolios",
		"obs"        => "$obs");

	$documentos = new Documentos();
	$documentos->Duplicados($datos);
 ?>