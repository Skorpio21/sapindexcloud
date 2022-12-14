<?php
class Datos
{

    private $conexion;
    public function __construct()
    {
        require_once '../conexion.php';
        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    public function identificar($variable_1, $variable_2, $variable_3, $variable_4)
    {
        $sql = "SELECT * FROM timesheet
			 WHERE idProvider='$variable_1' and idContract='$variable_2'
			 and Month_ts='$variable_3' and Year_ts='$variable_4'";

        $resulatdos = $this->conexion->conexion->query($sql);
        if ($resulatdos->num_rows > 0) {
            $r = $resulatdos->fetch_array();
        } else {
            $r[0] = "DSIG";
        }
        return $r;
        $this->conexion->cerrar();
    }
    public function registrar($variable_1, $variable_2, $variable_3, $variable_4, $variable_5)
    {

        try {
			$Json = json_decode("[" . $variable_2 . "]", JSON_UNESCAPED_UNICODE);
            foreach ($Json as $cabezera) {
                foreach ($cabezera['items'] as $detalle) {
                    $cod = $detalle['CodItem'];
                    $sql = "INSERT INTO timesheet VALUES(0,'$variable_1','$cod','$variable_3','$variable_4','$variable_5','','','','','')";
                    $this->conexion->conexion->query($sql);
                }

            }
            return true;
        } catch (Exception $e) {
            return false;
        }

        $this->conexion->cerrar();
    }

}
