<?php

trait Persona2 {
	public $nombre;

	public function mostrarNombre() {
		echo $this->nombre;
	}

	abstract function asignarNombre($nombre);
}

trait Trabajador {
	protected function mensaje() {
		echo " y soyun Trabajador";
	}
}

class Persona {
	use Persona2, Trabajador;

	public function asignarNombre($nombre) {
		$this->nombre = self::mensaje().$nombre;
	}
}

$persona = new Persona();
$persona->asignarNombre("Edgar");
$persona->mostrarNombre();

?>