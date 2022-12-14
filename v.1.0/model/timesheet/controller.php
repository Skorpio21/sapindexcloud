<?php
require_once('datos.php');
   $boton=$_POST['boton'];
		switch ($boton) {
			case 'validar':
				$variable_1 = $_POST['variable_1'];
				$variable_2 = $_POST['variable_2'];
				$variable_3 = $_POST['variable_3'];
				$variable_4 = $_POST['variable_4'];

				$ins = new Datos();
				$array=$ins->identificar($variable_1,$variable_2,$variable_3,$variable_4);
				if ($array[0]=="DSIG") 
				{
					echo '0';
				}
				else
				{
					echo '1';

				}
			break;

			case 'registrar':
					$variable_1 = $_POST['variable_1'];
					$variable_2 = $_POST['variable_2'];
					$variable_3 = $_POST['variable_3'];
					$variable_4 = $_POST['variable_4'];
                    $variable_5 = $_POST['variable_5'];

					$instancia = new Datos();
					if($instancia->registrar($variable_1,$variable_2,$variable_3,$variable_4,$variable_5))
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