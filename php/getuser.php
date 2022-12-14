<?php 
// header('Content-Type: text/html; charset=ISO-8859-1');
error_reporting(0); 

	
	
require_once('enc/config.php');	
		
		$connect = mysql_connect($host_name, $user_name, $password, $database);
		if (mysql_errno()) {
			die('<p>Error al conectar con servidor MySQL: '.mysql_error().'</p>');
		} else {
			// echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p >';
		}		

        mysql_select_db($database) or die("Error al seleccionar la BBDD " . mysql_error()); 

        $email = $_POST['user'];
		
		$sql = "SELECT init FROM Usuario where email = $email";			
		$init = mysql_query($sql, $connect );
			     
         

?>