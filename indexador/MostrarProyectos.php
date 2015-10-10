<?php include "header.php";  ?>

	<h1>Download</h1>
	<form action="">
		<a href="#" class="btn btn-warning">Descargar Lotes</a>
	</form>

	<div class="bs-docs-section">

        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Listado de Lotes descargados para Indexacion</h1>
            </div>

            <div class="bs-component">
              <table class="table table-striped table-hover ">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Enlaces</th>
                    <th>Estado</th>
                    <th>Acción</th>
                  </tr>
                </thead>
                <tbody>

					<?php
						require "../models/Listado.php";
						$listado = new Listado();
						$data = $listado->Listado();
						while ($row = $data->fetch_assoc()) {

					 ?>
					<tr>
						<td>N° <?php echo $i;?></td>
						<td>Proyecto <?php echo $row['codigo']." ". $row['dia']."-".$row['mes']."-".$row['anio'];?></td>
						<td>Abierto</td>
						<td><a href="documentos.php?idproy=<?php echo $row['idproy'];?>&idimagen=<?php echo $row['idimagen'];?>&iddocum=<?php echo $row['iddocum'];?>">Indexar</a></td>
					</tr>
					<?php }?>
	</table>
</div>
