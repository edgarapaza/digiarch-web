<?php
// Documentos en VIEWS
include "header.php";

//Recibiendo el id de la imagen
$idimagen = $_REQUEST['idimagen'];
$idproy = $_REQUEST['idproy'];
$iddocum = $_REQUEST['iddocum'];
 ?>

 <script type="text/javascript">
 	function aviso(){
		if (!confirm("Desea guardar este registro!."))
		{
			alert("Cancelado");
		}
		else
		{
			document.formulario1.submit();
		}
	}
 </script>


  <div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">
              <form class="form-horizontal" action="../controllers/Documentos.php" name="formulario1">
              	<input type="text" name="idproy" placeholder="idProyecto" value="<?php echo $idproy; ?>" required="required" />
 				<input type="text" name="idimagen" placeholder="idimagen" value="<?php echo $idimagen; ?>" required="required" />
 				<input type="text" name="iddocum" placeholder="iddocum" value="<?php echo $iddocum; ?>" required="required" />
 				<input type="text" name="idinvol" placeholder="idinvolucrado" value="1" required="required" />
				  <fieldset>
				    <div class="form-group">
				      <label for="inputCodigo" class="col-lg-2 control-label">Codigo</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="codigo" placeholder="Codigo" type="text" required="required">
				      </div>
				    </div>
				    <div class="form-group">
				      <label for="inputdia" class="col-lg-2 control-label">Dia</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="dia" placeholder="Dia" type="number" required="required" size="2" maxlength="2">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputmes" class="col-lg-2 control-label">Mes</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="mes" placeholder="Mes" type="text"  required="required">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputanio" class="col-lg-2 control-label">Año:</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="anio" placeholder="Año" type="number" required="required">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputNombre" class="col-lg-2 control-label">Nombre:</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="nombre" placeholder="Nombre(s)" type="text" required="required">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputApellidos" class="col-lg-2 control-label">Apellidos:</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="apellidos" placeholder="Apellidos" type="text" required="required">
				      </div>
				    </div>


				    <div class="form-group">
				      <label for="inputAsunto" class="col-lg-2 control-label">Asunto:</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="asunto" placeholder="Asunto" type="text">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="inputFolio" class="col-lg-2 control-label">Num Folios:</label>
				      <div class="col-lg-10">
				        <input class="form-control" name="cantfolios" placeholder="Num folios" type="number" required="required">
				      </div>
				    </div>

				    <div class="form-group">
				      <label for="textArea" class="col-lg-2 control-label">Observaciones:</label>
				      <div class="col-lg-10">
				        <textarea class="form-control" rows="3" name="observacion"></textarea>
				      </div>
				    </div>


				    <div class="form-group">
				      <div class="col-lg-10 col-lg-offset-2">
				        <button type="reset" class="btn btn-default">Cancel</button>
				        <button type="button" class="btn btn-primary" onClick="aviso();">Guardar</button>
				      </div>
				    </div>
				  </fieldset>
				</form>
            </div>
          </div>


<div class="col-lg-4">
	<div class="bs-component">
 		<iframe src="imagen.php?idimagen=<?php echo $idimagen; ?>" width="920" height="600"></iframe>
 	</div>
</div>