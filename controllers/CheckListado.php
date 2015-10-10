<?php

	class CheckListado{

		//Recuperar los proyetos creados y cerrados
		//
		private $numero = 10;

		public function CantidadProyecto()
		{
			if($this->numero <= 10){
				echo "Puede Crear nuevos proyectos";
			}
			else{
				echo "No puede crear mas proyectos";
			}
		}

		public function Estado()
		{

		}

	}

	$checklistado = new CheckListado();
	$checklistado->Estado();
?>