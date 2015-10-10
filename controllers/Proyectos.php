<?php
//proyectos en Controller

	class Proyectos
	{

		private $proyecto;
		public $dat;

		function __construct()
		{
			require "../models/Proyecto.php";
			$this->proyecto = new Proyecto();
		}

		public function Duplicados($datos)
		{
			$respuesta = $this->proyecto->Duplicado($datos);
			if($respuesta == true)
			{
				header("Location: ../views/ListadoProyectos.php");
				echo "Existe un proyecto creado con la misma informacion";
			}else{
				$this->proyecto->Add($datos);
				header("location: ../views/ListadoProyectos.php");
			}
		}

		public function Listar()
		{
			$respuesta = $this->proyecto->Listar();
			return $respuesta;
		}

	}

	//Recogiendo los datos de los casiellors de la vista
	$anio        = $_REQUEST['anio'];
	$mes         = $_REQUEST['mes'];
	$titulo      = $_REQUEST['titulo'];
	$expinicio   = $_REQUEST['expinicio'];
	$expfinal    = $_REQUEST['expfinal'];
	$observacion = $_REQUEST['observacion'];
	$idUsuario   = '1';

	$datos = array(
		"anio"        => "$anio",
		"mes"         => "$mes",
		"titulo"      => "$titulo",
		"expinicio"   => "$expinicio",
		"expfinal"    => "$expfinal",
		"observacion" => "$observacion",
		"fecha"       => 'NOW()',
		"idUsuario"   => "$idUsuario");

	$proyectos = new Proyectos();
	$proyectos->Duplicados($datos);

 ?>