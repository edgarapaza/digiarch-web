<?php
include_once "header.php";

echo $server = $_SERVER['DOCUMENT_ROOT'];
$proyecto = $_REQUEST['proyecto'];
echo "<br/><br/><br/><br/>";
?>

<head>
	<script type="text/javascript">
		function abrirVentana(url) {
		    window.open(url, "nuevo", "directories=no, location=no, menubar=no, scrollbars=yes, statusbar=no, tittlebar=no, width=400, height=400");
		}
	</script>
</head>

<div class="bs-component">
	<table class="table table-striped table-hover ">
		<tr>
			<th>Nro</th>
			<th>Imagen</th>
			<th>Carpeta</th>
			<th>
				<a href="#" onClick="abrirVentana('AddRuta.php')" class="btn btn-info">Agregar +</a>
				<a href="ListadoProyectos.php" class="btn btn-info">Listado de Proyectos</a>
			</th>

		</tr>
		<?php
			require "../models/Imagen.php";
			$imagen = new Imagen();
			$datos = $imagen->Mostrar($proyecto);
			$i = 1;
			while ($row = $datos->fetch_assoc())
			{

		?>
			<tr class="active">
				<td><?php echo $i; ?></td>
				<td><?php echo $row['ruta']; ?></td>
				<td><?php echo $row['directorio']; ?> proy: <?php echo $row['idproy']; ?></td>
				<td><input type="file" name="file"></td>
			</tr>
		<?php  $i++; } ?>
	</table>
</div>