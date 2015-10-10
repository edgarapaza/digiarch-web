<?php
define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

//require_once(WWW_ROOT.DS.'autoload.php');
echo WWW_ROOT.DS.'autoload.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DigiArch</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
	<h1>Ingreso</h1>
	<p>Sistema de digitalizacion de arhivos</p>
	<a href="operator/ListadoProyectos.php" class="btn btn-danger">Ingresar como Operador de Camara</a>
	<a href="indexador/ListadoProyectos.php" class="btn btn-warning">Ingresar como Indexador</a>
</body>
</html>
