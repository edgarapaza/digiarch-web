<?php
$idimagen = $_REQUEST['idimagen'];
//$idimagen = 1;
require_once "../models/Listado.php";

$listado = new Listado();
$data = $listado->RutaArchivo($idimagen);
$fila = $data->fetch_assoc();
/*echo "Ruta del archivo:  " . $fila['ruta']."<br>";
echo "Directorio:  " . $fila['directorio']."<br>";*/
 ?>
<img src="<?php echo $fila['ruta']; ?>" height="2108" width="1080">
