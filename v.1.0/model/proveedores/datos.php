<?php 
	class Datos{

		private $conexion;
		public function __construct()
		{
			require_once('../conexion.php');
			$this->conexion= new conexion();
			$this->conexion->conectar();
		}

	
		function registrar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11,$variable_12,$variable_13,$variable_14,$variable_15,$variable_16,$variable_17,$variable_18,$variable_19,$variable_20,$variable_21)
		{		
			$sql="INSERT INTO providers VALUES(0,'$variable_2','$variable_3','$variable_4','$variable_5','$variable_6','$variable_7','$variable_8','$variable_9','$variable_10','$variable_11','$variable_12','$variable_13','$variable_14','$variable_15','$variable_16','$variable_17','$variable_18','$variable_19','$variable_20','$variable_21')";

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
			$sql="DELETE FROM providers WHERE idProvider='$variable_1'";
			if($this->conexion->conexion->query($sql)){
				return true;
			}
			else
			{
				return false;
			}
			$this->conexion->cerrar();
		}

		function modificar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11,$variable_12,$variable_13,$variable_14,$variable_15,$variable_16,$variable_17,$variable_18,$variable_19,$variable_20,$variable_21)
		{

			$sql="UPDATE providers SET  NameProvider='$variable_2', SurnameProvider='$variable_3', 
			email_corp='$variable_4', 
			email_pers='$variable_5', profile_='$variable_6',dist_group='$variable_7', IdCountry='$variable_8',
			 city='$variable_9', addressProvider='$variable_10', 
			phone='$variable_11', sap_year='$variable_12', lang1='$variable_13'
			, lang2='$variable_14', lang3='$variable_15', lang4='$variable_16', lang5='$variable_17'
			, idPayment='$variable_18', user_payment='$variable_19',link_payment='$variable_20', day_payment ='$variable_21' WHERE idProvider='$variable_1'";
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