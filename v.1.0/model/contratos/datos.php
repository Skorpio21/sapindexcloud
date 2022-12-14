<?php 
	class Datos{

		private $conexion;
		public function __construct()
		{
			require_once('../conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

	
		function registrar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11)
		{		
			$sql="INSERT INTO contracts VALUES(0,'$variable_2','$variable_3','$variable_4','$variable_5','$variable_6','$variable_7','$variable_8','$variable_9','$variable_10','$variable_11')";

			if($this->conexion->conexion->query($sql)){

				return true;
			}
			else
			{
				return false;
			}

			$this->conexion->cerrar();
		}

		function eliminar($variable_1){
			$sql="DELETE FROM contracts WHERE idContract='$variable_1'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

		function modificar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11)
		{
			$sql="UPDATE contracts SET  idProvider='$variable_2', idClient='$variable_3', 
			DateIni='$variable_4',DateFin='$variable_5', RateProv='$variable_6',
			CurRateProv='$variable_7', RateCli='$variable_8',
			CurRateCli='$variable_9', EndClient='$variable_10', 
		     work_type='$variable_11' WHERE idContract='$variable_1'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

	
	}

	
?>