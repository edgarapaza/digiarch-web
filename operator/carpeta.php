<?php include 'header.php'; ?>
<h1>.</h1>
<?php echo $msg = $_REQUEST['msg']; ?>
<form action="../controllers/carpetas.php" method="post">
    <h3>Crear carpetas</h3>
    <label>Nombre de la carpeta:</label>
    <input type="text" name="carpeta">
    <button type="submit" class="btn btn-danger">Crear carpeta</button>
</form>