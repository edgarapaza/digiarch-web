<?php

// views
include "header.php";
?>

<link rel="stylesheet" type="text/css" href="../css/newproyect.css">

<div id="cuerpo">
	<h2>Nuevo Proyecto</h2>
	<hr>
	<form action="../controllers/Proyectos.php">
		<table>
			<thead>
				<tr>
					<th>Elementos</th>
					<th>Campos</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Año: </td>
					<td><input type="text" name="anio" placeholder="Año" size="4" maxlength="4" required="required"></td>
				</tr>
				<tr>
					<td>Mes: </td>
					<td>
						<select name="mes">
							<option value="0">[Escoga Mes]</option>
							<option value="Enero">Enero</option>
							<option value="Febrero">Febrero</option>
							<option value="Marzo">Marzo</option>
							<option value="Abril">Abril</option>
							<option value="Mayo">Mayo</option>
							<option value="Junio">Junio</option>
							<option value="Julio">Julio</option>
							<option value="Agosto">Agosto</option>
							<option value="Septiembre">Septiembre</option>
							<option value="Octubre">Octubre</option>
							<option value="Noviembre">Noviembre</option>
							<option value="Diciembre">Diciembre</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Titulo del Documento: </td>
					<td><input type="text" name="titulo" placeholder="Titulo del Documento" size="70" maxlength="255" required="required"></td>
				</tr>
				<tr>
					<td>Documento Inicial: </td>
					<td><input type="text" name="expinicial" placeholder="Documento inicial" maxlength="10" required="required"></td>
				</tr>
				<tr>
					<td>Documento Final: </td>
					<td><input type="text" name="expfinal" placeholder="Documento Final" maxlength="10" required="required"></td>
				</tr>
				<tr>
					<td>Observaciones: </td>
					<td><textarea cols="70" rows="4" name="observacion"></textarea></td>
					<input type="text" name="idUsuario" value="1">
				</tr>
				<tfoot>
					<tr>
						<td><button>Cancelar</button></td>
						<td><button type="submit">Guardar</button></td>
					</tr>
				</tfoot>
			</tbody>
		</table>
	</form>
</div>