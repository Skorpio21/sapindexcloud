<?php 
// header('Content-Type: text/html; charset=ISO-8859-1');
// error_reporting(0); 
require_once('enc/config.php');	

if($_POST){

	if(!isset($_POST['pass1'])) {
        echo " 
            <script>
                alert('The first password is empty');
                location.href = 'https://www.sapindex.es/timesheets2/login2.php';
            </script>";  
        exit;
    }	 
      elseif(!isset($_POST['pass2'])) {
        echo " 
            <script>
                alert('The second password is empty');
                location.href = 'https://www.sapindex.es/timesheets2/login2.php';
            </script>";  
        exit;
      }    
      else{
		$email = $_POST['usermail'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];		
	  }
}

// print json_encode($email);
// print json_encode($password1);
// print json_encode($password2);
	

		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if($connect === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	
		// idUsuario, email, password, init, link
		// $sql_insert = "UPDATE * FROM Usuario where email = '$user'";	
		$hash = hash('sha256',$password1);
		// print json_encode($hash);
		// $sql_insert = "UPDATE Usuario SET password ='".hash('sha256',$password1)."', init = 0 WHERE email ='$email' ";	
		$sql_insert = "UPDATE Usuario SET password ='$hash', init = 0 WHERE email ='$email' ";	

		// print json_encode($email);
		// print json_encode($sql_insert);

		$exec_insert = mysqli_query($connect, $sql_insert);

        if ( $exec_insert ){
			echo " 
            <script>
                alert('The password has been successfully updated.');
                location.href = 'https://www.sapindex.es/timesheets2/login.php';
            </script>"; 			
		}
		        

?>