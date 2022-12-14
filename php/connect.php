<?php 
// header('Content-Type: text/html; charset=ISO-8859-1');
error_reporting(0); 

	
	
require_once('enc/config.php');	


		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if($connect === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		$sql = "SELECT email FROM Usuario";			
		$result = mysqli_query($connect, $sql);

		$rowCount = mysqli_num_rows($result);

      
         

?>