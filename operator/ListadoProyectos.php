<?php
// en Views

include "header.php";
include "../models/Proyecto.php";

$mensaje = $_REQUEST['mensaje'];

?>
<br><br>
<h2>Listado de proyectos</h2>
<p class="alert alert-dismissible alert-warning"><?php echo $mensaje; ?></p>
<div class="bs-component">
	<table class="table table-striped table-hover ">
		<tr>
			<th>Cohigo Proyecto</th>
			<th>Año:</th>
			<th>Mes:</th>
			<th>Titulo:</th>
			<th>Expehiente Inicial:</th>
			<th>Expehiente Final:</th>
			<th>Estaho:</th>
			<th>Acción:</th>

		</tr>
		<?php
			//require_once "../coreapp/conection.php";

			$proyecto = new Proyecto();
			$datos = $proyecto->Listar();

			while ($row = $datos->fetch_assoc()) {
		?>
		<tr class="active">
			<td><?php echo $row['idproy']; ?></td>
			<td><?php echo $row['anio']; ?></td>
			<td><?php echo $row['mes']; ?></td>
			<td><?php echo $row['titulo']; ?></td>
			<td><?php echo $row['expinicio']; ?></td>
			<td><?php echo $row['expfinal']; ?></td>
			<td>ABIERTO</td>
			<td><a href="vincularImagen.php?proyecto=<?php echo $row['idproy']; ?>" class="btn btn-warning">Continuar</a></td>
			<td><a href="#" class="btn btn-danger">Cerrar Proyecto</a></td>
		</tr>

		<?php
			}

		?>
	</table>
</div>