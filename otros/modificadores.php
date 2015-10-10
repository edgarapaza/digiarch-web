<?php

class Facebook {
	//Atributos
	public $nombre;
	public $edad;
	private $pass;

	function __construct($nombre, $edad, $contraseña) {
		$this->nombre = $nombre;
		$this->edad   = $edad;
		$this->pass   = $contraseña;
	}

	public function verInformacion() {
		echo "Nombre: ".$this->nombre."<br>";
		echo "Edad: ".$this->edad."<br>";
		self::cambiarPass('54634');
		echo "Password: ".$this->pass."<br>";
	}

	private function cambiarPass($pass) {
		$this->pass = $pass;
	}
}

$facebook = new Facebook('Edgar Apaza', '20', '1234');

$facebook->verInformacion();

?>