<?php 
	class Datos{

		private $conexion;
		public function __construct()
		{
			require_once('../conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

	
		function registrar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11,$variable_12)
		{		
			$sql="INSERT INTO clients VALUES(0,'$variable_2','$variable_3','$variable_4','$variable_5','$variable_6','$variable_7','$variable_8','$variable_9','$variable_10','$variable_11','$variable_12')";

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
			$sql="DELETE FROM clients WHERE idClient='$variable_1'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

		function modificar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11,$variable_12)
		{
			$sql="UPDATE clients SET  NameClient='$variable_2', AddressClient='$variable_3', CountryClient='$variable_4', CurrClient='$variable_5', VAT='$variable_6', DateIni='$variable_7', email1='$variable_8', email2='$variable_9', email3='$variable_10', email4='$variable_11', email5='$variable_12' WHERE idClient='$variable_1'";
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