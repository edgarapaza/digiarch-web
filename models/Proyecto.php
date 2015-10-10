<?php //models

	class Proyecto
	{

		private $con;

		function __construct(){
			require_once "../coreapp/conection.php";

			$conection = new Conection();
			$this->con = $conection->Conexion();

		}


		public function Add($datos){

			extract($datos, EXTR_PREFIX_SAME, "wddx");

			$sql = "INSERT INTO proyecto (idproy,anio,mes,titulo,expinicio,expfinal,observacion,fechaCreacion,idUsuario, estado) VALUES (null,'$anio','$mes','$titulo','$expinicio','$expfinal','$observacion',$fecha,'$idUsuario',1);";
			$this->con->query($sql);
		}

		public function Duplicado($datos){

			$respuesta = false;

			extract($datos, EXTR_PREFIX_SAME, "wddx");

			//echo "$anio, $mes, $titulo, $expinicio, $expfinal,$observacion, $fecha, $idUsuario <br>";
			$sql = "SELECT * FROM proyecto WHERE anio = '$anio'  and mes = '$mes' and titulo = '$titulo' and expinicio = '$expinicio' and expfinal = '$expfinal';";

			$valor = $this->con->query($sql);
			$numero = $valor->num_rows;

			if($numero > 0){
				$respuesta = true;
			}else{
				$respuesta = false;
			}
			return $respuesta;
			$mysqi->close();
		}

		public function Listar(){

			$sql = "SELECT idproy,anio,mes,titulo,expinicio,expfinal FROM proyecto WHERE estado = 1";
			$datos = $this->con->query($sql);
			return $datos;
		}
	}
 ?>