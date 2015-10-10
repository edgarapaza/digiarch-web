<?php

	class Cheking{

		public function ProyectosMaximos()
		{

			require "../models/Proyecto.php";
			$proyecto = new Proyecto();

			$cantidad = $proyecto->Listar();
			$numero = $cantidad->num_rows;

			$msgbox = null;

			if($numero == 0)
			{
				$msgbox = "No tienes proyectos creados";
				header("Location: ../views/newproyecto.php");
			}
			if ($numero >= 1 && $numero < 3)
			{
				$msgbox = "Tiene 1 o 2 proyectos abiertos. Deseas crear un Nuevo proyecto?. Click Aqui <a href='../views/newproyecto.php'>Agregar Nuevo Proyecto</a>";

				header("Location: ../views/ListadoProyectos.php?mensaje=". $msgbox);

			}
			else{
				$msgbox = "No puede crear Nuevos proyectos hasta haber cerrado alguno de los proyectos que tiene en lista";
				header("Location: ../views/ListadoProyectos.php?mensaje=". $msgbox);
			}

			echo $msgbox;
			return $msgbox;
		}

	}

	$cheking = new Cheking();
	$res = $cheking->ProyectosMaximos();

	echo $res;
 ?>