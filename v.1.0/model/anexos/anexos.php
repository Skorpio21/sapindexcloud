<?php
require_once '../conexion.php';
$mysqli = conectar();
$boton = $_POST['boton'];
switch ($boton) {
    case 'moneda':
        $myquery = "SELECT * FROM currencies ";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idcurrency'] . '">' . $fila['idcurrency'] . ' - ' . $fila['Description'] . '</option>';
        }
        break;

    case 'pais':
        $myquery = "SELECT * FROM country ";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idCountry'] . '">' . $fila['idCountry'] . ' - ' . $fila['Description'] . '</option>';
        }
        break;

    case 'lang':
        $myquery = "SELECT * FROM lang";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idlang'] . '">' . $fila['description'] . '</option>';
        }
        break;

    case 'pagos':
        $myquery = "SELECT * FROM payments";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idPayment'] . '">' . $fila['descPayment'] . '</option>';
        }
        break;

    case 'trabajo':
        $myquery = "SELECT * FROM work_type";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idWorkType'] . '">' . $fila['Description'] . '</option>';
        }
        break;

    case 'clientes':
        $myquery = "SELECT idClient, concat(NameClient) as detclient FROM clients";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idClient'] . '">' . $fila['detclient'] . '</option>';
        }
        break;

    case 'proveedores':
        $myquery = "SELECT idProvider, concat(NameProvider,' ',SurnameProvider) as detprov FROM providers";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idProvider'] . '">' . $fila['detprov'] . '</option>';
        }
        break;

    case 'salir':
        session_start();
        session_destroy();
        echo "exito";
        break;

    case 'contratos':
        $variable_1 = $_POST['idprov'];
        $myquery = "SELECT t1.idContract, concat(t2.NameClient) as detclient FROM contracts as t1
                            INNER JOIN clients as t2 on t2.idClient= t1.idClient
                            WHERE idProvider='$variable_1'";
        $resultado = $mysqli->query($myquery);

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['idContract'] . '">' . $fila['detclient'] . '</option>';
        }
        break;

     case 'calculos':

        $variable_1 = $_POST['variable_1'];
        $variable_2 = $_POST['variable_2'];
        $variable_3 = $_POST['variable_3'];
        $variable_4 = $_POST['variable_4'];

            $xujing_1 = "SELECT sum(hours_work) as a FROM timesheet
            WHERE idProvider='$variable_1' and idContract='$variable_2'
			and Month_ts='$variable_3' and Year_ts='$variable_4'";          
            $dsig_1 = $mysqli->query($xujing_1);
            $row = mysqli_fetch_array($dsig_1);
            $a = $row[0];

            $xujing_2 = "SELECT sum(hours_absence) as a FROM timesheet
            WHERE idProvider='$variable_1' and idContract='$variable_2'
            and Month_ts='$variable_3' and Year_ts='$variable_4'";
            $dsig_2 = $mysqli->query($xujing_2);
            $row = mysqli_fetch_array($dsig_2);
            $b = $row[0];
            
            $xujing_3 = "SELECT sum(hours_vacaton) as a FROM timesheet
            WHERE idProvider='$variable_1' and idContract='$variable_2'
            and Month_ts='$variable_3' and Year_ts='$variable_4'";
            $dsig_3 = $mysqli->query($xujing_3);
            $row = mysqli_fetch_array($dsig_3);
            $c = $row[0];
            
            $xujing_4 = "SELECT sum(hours_other) as a FROM timesheet
            WHERE idProvider='$variable_1' and idContract='$variable_2'
            and Month_ts='$variable_3' and Year_ts='$variable_4'";
            $dsig_4 = $mysqli->query($xujing_4);
            $row = mysqli_fetch_array($dsig_4);
            $d = $row[0];

            
            $lista[] = array('retorno_0' => $a,
            'retorno_1' => $b,
            'retorno_2' => $c,
            'retorno_3' => $d);


             $json_string = json_encode($lista);



            echo $json_string ;

            break;

    case 'list-prov':

        //----------------- LISTAR CAJA ---------------------//
        $myquery = "";

        $resultado = $mysqli->query($myquery);

        echo '<div id="table">';
        echo '<table id="data-table" class="table table-hover table-bordered" width="100%" cellspacing="5" cellpadding="5">
                       <thead ">
                         <tr >
                         	    <th style="text-align:center;background:#00acac;color:#fff;" colspan="3">Información</th>
                              <th style="text-align:center;background:#00acac;color:#fff;"colspan="3">Soles</th>
                              <th style="text-align:center;background:#00acac;color:#fff;" colspan="3">Dólar Americano</th>
                         </tr>
                         <tr>
                               <th  width="4%" style="text-align:center;background:#00acac;color:#fff;">Acción</th>
                               <th  width="12%" style="text-align:center;background:#00acac;color:#fff;">Concepto</th>
                               <th  width="25%" style="text-align:center;background:#00acac;color:#fff;">Tipo de Pago</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Comisión</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Ingreso</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Egreso</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Comisión</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Ingreso</th>
                               <th  width="8%" style="text-align:center;background:#00acac;color:#fff;">Egreso</th>

                         </tr>
                         </thead>
                         <tbody>';
        if ($resultado->num_rows > 0) {
            while ($mostrar = $resultado->fetch_array()) {
                $i = 1;
                echo '<tr>
                     <td >
                                   <div class="btn-group">
                                            <div  class="dropdown">
                                              <button id="botonmenu" class="btn btn-primary btn-xs dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-bars"></i> <span class="caret"></span></button>
                                               <ul id="st7" class="dropdown-menu">
                                                <li><a href="javascript:eddocumento(' . $mostrar['id'] . ');"><span class="fa fa-edit"></span>  Editar</a></li>
                                                <li><a href="javascript:deldocumento(' . $mostrar['id'] . ');"><span class="fa fa-trash-o"></span>  Eliminar</a></li>
                                               </ul>
                                            </div>
                                            </div>
                     </td>
                     <td >' . $mostrar['concepto'] . '</td>
                     <td >' . $mostrar['tipopago'] . '</td>
                     <td style="text-align:right;">' . number_format($mostrar['com_sol'], 2) . '</td>
                     <td style="text-align:right;">' . 'S/ ' . number_format($mostrar['ingS'], 2) . '</td>
                     <td style="text-align:right;">' . 'S/ ' . number_format($mostrar['egS'], 2) . '</td>
                     <td style="text-align:right;">' . number_format($mostrar['com_dol'], 2) . '</td>
                     <td style="text-align:right;">' . 'US$ ' . number_format($mostrar['ingD'], 2) . '</td>
                     <td style="text-align:right;">' . 'US$ ' . number_format($mostrar['egD'], 2) . '</td>
                   </tr>';
                $i = $i + 1;
            }

        } else {
            echo '<tr>
                               <td colspan="6">No se a filtrado ninguna infromación</td>
                            </tr>';
        }

        echo '</tbody>';

        echo '</table>';
        echo '</div>';

        break;

}

mysqli_close($mysqli);
