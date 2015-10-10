<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Nueva Ruta</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
</head>

<body>
	<div class="row">
          <div class="col-lg-6">
            <div class="well bs-component">

              <form enctype="multipart/form-data" action="" method="POST" class="form-horizontal">
                <fieldset>
                  <legend>Elegir Imagen</legend>
					<input type="hidden" name="MAX_FILE_SIZE" value="200000" />
                  <div class="form-group">
                    <label for="inputArchivo" class="col-lg-2 control-label">Imagen</label>
                    <div class="col-lg-10">
                      <input type="file" name="archivo" class="form-control" id="Archivo" placeholder="Archivo">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Carpeta</label>
                    <div class="col-lg-10">
                      <input type="text" name="carpeta" class="form-control" id="inputText" placeholder="Carpeta">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                      <button type="reset" class="btn btn-default">Cancel</button>
                      <button type="submit" name="btnGuardar" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
	</div>
</body>
</html>

<?php
	require "../coreapp/conection.php";
	$conection = new Conection();
	$mysqli = $conection->Conexion();

	if(isset($_POST['btnGuardar'])){
		$archivo = $_FILES['archivo']['tmp_name'];
		$destino = $_SERVER['DOCUMENT_ROOT']."/digiarch/img/". $_FILES['archivo']['name'];

		move_uploaded_file($archivo,$destino);
		//echo $mysqli->host_info. " aqui en addtruta";
		$sql="INSERT INTO imagenes (idimagen,ruta,directorio,idproy) VALUES (null,'$destino','carpeta',19)";
		$mysqli->query($sql);
		//Insertar en base de datos

	}

?>