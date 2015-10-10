<?php namespace controller;

define('WWW_ROOT', "/var/www/html/digiarch/img");
define('DS', DIRECTORY_SEPARATOR);

    class Carpetas{

        private $carpeta;


        public function Duplicados($nombre){
            $msg;
            //Leer la carpeta y verificar que no exista
            if(mkdir(WWW_ROOT.DS.$nombre."/",0777,true)){
                chown(WWW_ROOT.DS.$nombre."/","edgar");
                $msg = "Carpeta Creada: ".$nombre;
            }else{
                $msg = "El carpeta ya existe";
            }

            header("Location: ../operator/carpeta.php?msg=".$msg);
        }
    }

    $nombre = $_POST['carpeta'];
    $carpetas = new Carpetas();
    $carpetas->Duplicados($nombre);
?>