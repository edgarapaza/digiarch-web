<?php

class Vehiculo {
	public $motor = false;
	public $marca;
	public $color;

	public function estado() {
		if ($this->motor) {
			echo "El motor esta encendido";

		} else {
			echo "El motor esta apagado";
		}
	}

	public function encender() {
		if ($this->motor) {
			echo "Cuidado, el motor ya esta prendido";
		} else {
			echo "El motor ahora esta encendido";
			$this->motor = true;
		}
	}
}

class Moto extends Vehiculo {

}

$moto = new Moto();
$moto->estado();
?>