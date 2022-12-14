<?php
session_start();
// header('Content-Type: text/html; charset=ISO-8859-1');
error_reporting(0); 
require_once('enc/config.php');	

if($_POST){

	if(!isset($_POST['usermail'])) {
        echo " 
            <script>
                alert('You need to input a Sapindex email account');
                location.href = 'https://www.sapindex.es/timesheets2/login.php';
            </script>";  
        exit;
    }	 
      elseif(!isset($_POST['pass'])) {
        echo " 
            <script>
                alert('You need to input a password');
                location.href = 'https://www.sapindex.es/timesheets2/login.php';
            </script>";  
        exit;
      }    
      else{
		$user = $_POST['usermail'];
		$pass = $_POST['pass'];		
		$pass_dec = hash('sha256', $pass);
	  }
}

//  print json_encode($user);
//  print json_encode($pass);
//  print json_encode($pass_dec);
	

		
		// $connect = mysql_connect($host_name, $user_name, $password, $database);
		// if (mysql_errno()) {
		// 	die('<p>Error al conectar con servidor MySQL: '.mysql_error().'</p>');
		// } else {
		// 	// echo '<p>Se ha establecido la conexión al servidor MySQL con éxito.</p >';
		// }		

        // mysql_select_db($database) or die("Error al seleccionar la BBDD " . mysql_error()); 		

		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if($connect === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
		
		// $sql = "SELECT email FROM Usuario";			
		// $result = mysqli_query($connect, $sql);

		// $rowCount = mysqli_num_rows($result);		

		// print json_encode($host_name);
		// print json_encode($user_name);
		// print json_encode($password);
		// print json_encode($database);
		// print json_encode($result);
		// print json_encode($rowCount);
	
		
		$sql_init = "SELECT * FROM Usuario where email = '$user'";			
		$exec_init = mysqli_query($connect, $sql_init);

		// print json_encode($sql_init);			
		// print json_encode($connect);			
		// print json_encode($exec_init);			
			     
		while($row = mysqli_fetch_array($exec_init)):
			$_SESSION["Dsig-User"] = base64_encode($row['email']);
			//$_SESSION["Dsig-Types"] = base64_encode($row['type_user']);

			$email = $row['email']; 
			$password = $row['password'];
			$init = $row['init'];
			$link = $row['link'];
			$type_user = $row['type_user'];

			// print json_encode($email);
			// print json_encode($password);
			// print json_encode($init);
			// print json_encode($link);
			if ($init == '1'){
				header("Location: https://www.sapindex.es/timesheets2/login2.php?usermail=".$email);
			}	
			else{

				//$sql_pass="SELECT * FROM Usuario 
				//WHERE (email = '".$_POST['usermail']."') 
				//AND password ='".hash('sha256', $_POST['pass'])."'";
				
				$sql_pass="SELECT * FROM Usuario";
		
				$exec_pass = mysqli_query($connect, $sql_pass);

				if (mysqli_num_rows($exec_pass) == 0) {
					header("Location: https://www.sapindex.es/timesheets2/login.php?error=1");
				  } else {
					while($row2 = mysqli_fetch_array($exec_pass)):
						$init2 = $row['init'];
						$link2 = $row['link'];
						if ($init2 == '0'){

							if($type_user == 0){
								/*
								$myquery_ = "SELECT t1.email,t1.type_user,CONCAT(t2.NameProvider, ' ',t2.SurnameProvider) AS nameProv,t2.idProvider from Usuario as t1
								inner join providers as t2 on t2.email_corp = t1.email
								where t1.email = '$user'";
								$SI_ = $connect->query($myquery_);
								$SI_ = $SI_->fetch_array();
								$_SESSION["Dsig-Prov"] = $SI_[3];*/
								$_SESSION["Dsig-Types"] = base64_encode("Usuario");
								header("Location: ../v.1.0/timesheet");
							}else{
								$_SESSION["Dsig-Types"] = base64_encode("Administrador");
								header("Location: ../v.1.0/clientes");
							}


							
						}
						else{
							header("Location: https://www.sapindex.es/timesheets2/login2.php?usermail=".$email);
						}
					endwhile;
						
				  }				
				// header("Location: ".$link);
			}		
		endwhile;
         

?>