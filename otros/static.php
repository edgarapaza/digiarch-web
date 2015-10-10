<?php

class Pagina {

	//Atributos
	public $nombre     = "Codigo facilito";
	public static $url = "www.codigofacilito.com";

	//Metodos
	public function bienvenida() {
		echo "bienvenida a ".$this->nombre." y a la pagina es".Pagina::$url." dentro.";
	}

	public static function bienvenida2() {
		echo "Bienvenidos a ".Pagina::$url;
	}

}

class Web extends Pagina {

}

Web::bienvenida2();

?>