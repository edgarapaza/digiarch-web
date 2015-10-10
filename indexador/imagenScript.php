<?php

if($_POST['image_fon']){
    if(is_uploaded_file($_FILES['image_fon']['tmp_name']))
    {
        //Definir nombres
        $nombre=$_FILES['nombre_image']['name'];
        $nombre=strtolower($nombre);
        $tipo=$_FILES['nombre_image']['type'];
        $tipo=strtolower($tipo);
        $size=$_FILES['nombre_image']['size'];
        $error=$_FILES['nombre_image']['error'];
        $extension=substr($tipo,strpos($tipo,'/')+1);
        $name=$_SESSION['user'].'-'.time().'.'.$extension;
        $lugar='photos/';
        //Fin de definir nombres

        if(!empty($nombre) && isset($nombre)){
            if($error==0){
                if(strpos($tipo,'gif') || strpos($tipo,'jpg') || strpos($tipo,'jpeg') || strpos($tipo,'bmp') || strpos($tipo,'png')){
                    if($size<819200){
                        if(move_uploaded_file($_FILES['nombre_image']['tmp_name'],$lugar.$name)){

                            $con=mysql_connect($h,$u,$p,$b) or die(mysql_error());
                            $b=mysql_select_db($b,$con);
                            mysql_query('INSERT INTO articulos VALUES (NULL,"'.trim($_POST['description']).'","'.trim($_POST['precio']).'","'.trim($_POST['stock']).'","'.$lugar.$name.'")');
                                                 print 'Imagen subida y guardada!';
                        }
                    }
                }else{
                    $error_file='Imagen demasiado grande.';
                }
            }else{
                $error_file='Formato incorrecto.';
            }
        }else{
            $error_file='Error al subir la foto.';
        }
    }else{
        $error_file='La imagen no se subio bien.';
                    }
}else{
    $error_file='Por favor elija una foto.';
}

 ?>