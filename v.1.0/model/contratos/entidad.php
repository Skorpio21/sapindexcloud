<?php
require_once('datos.php');
   $boton=$_POST['boton'];
		switch ($boton) {


			case 'registrar':
					$variable_1 = $_POST['variable_1'];
					$variable_2 = $_POST['variable_2'];
					$variable_3 = $_POST['variable_3'];
					$variable_4 = $_POST['variable_4'];
					$variable_5 = $_POST['variable_5'];
					$variable_6 = $_POST['variable_6'];
					$variable_7 = $_POST['variable_7'];
					$variable_8 = $_POST['variable_8'];
					$variable_9 = $_POST['variable_9'];
					$variable_10 = $_POST['variable_10'];
					$variable_11 = $_POST['variable_11'];

					
					$instancia = new Datos();
					if($instancia->registrar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11))
					{
					    echo "exito";
					}
					else{
						echo "No se registro";
					}

				break;

			case 'eliminar':
					
					$variable_1 = $_POST['variable_1']; 

					$instancia = new Datos();
					if($instancia->eliminar($variable_1))
					{
						echo "exito";
					}
					else{
						echo "No se registro";
					}
				break;


			case 'modificar':
				$variable_1 = $_POST['variable_1'];
				$variable_2 = $_POST['variable_2'];
				$variable_3 = $_POST['variable_3'];
				$variable_4 = $_POST['variable_4'];
				$variable_5 = $_POST['variable_5'];
				$variable_6 = $_POST['variable_6'];
				$variable_7 = $_POST['variable_7'];
				$variable_8 = $_POST['variable_8'];
				$variable_9 = $_POST['variable_9'];
				$variable_10 = $_POST['variable_10'];
				$variable_11 = $_POST['variable_11'];



					$instancia = new Datos();
					if($instancia->modificar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5,$variable_6,$variable_7,$variable_8,$variable_9,$variable_10,$variable_11))
					{
					    echo "exito";
					}
					else{
						echo "No se registro";
					}

				break;
			


			break;

			default:
				# code...
				break;
		}
		
?>