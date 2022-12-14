<?php 
// header('Content-Type: text/html; charset=ISO-8859-1');
error_reporting(0); 
require_once('enc/config.php');	


require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;



if($_POST){

	if(!isset($_POST['mailforgot'])) {
        echo " 
            <script>
            alert('You need to input a Sapindex email account');
                location.href = 'https://www.sapindex.es/timesheets2/login4.php';
            </script>";  
        exit;
    }	   
      else{
		$mailforgot = $_POST['mailforgot'];		
	  }
}

// print json_encode($mailforgot);
	

		$connect = mysqli_connect($host_name, $user_name, $password, $database);
		if($connect === false){
			die("ERROR: Could not connect. " . mysqli_connect_error());
		}
	
		$sql = "SELECT * FROM Usuario where email = '$mailforgot'";	
        // print json_encode($sql); 		
		// $exec = mysqli_query($connect, $sql);

        if ( $exec = mysqli_query($connect, $sql) ){

            $mail = new PHPMailer(true);
            $url = 'https://www.sapindex.es/timesheets2/login2.php?username=' . $mailforgot;
               
            // print json_encode($url);            
            // print json_encode($mail);        

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_OFF;                         //Enable verbose debug output
                // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Enable verbose debug output
                // $mail->SMTPDebug = SMTP::DEBUG_LOWLEVEL;                 //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = $smtp_host;                             //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = $smtp_email;                            //SMTP username
                $mail->Password   = $smtp_pass;                             //SMTP password
                // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->SMTPSecure = 'tls';
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
            
                //Recipients
                $mail->setFrom('no-reply@sapindex.es', 'Sapindex TimeSheet');
                $mail->addAddress($mailforgot, '');                   //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('cc@example.com');
                $mail->addBCC('gabriel.garcia@sapindex.es');
            
                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
            
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Sapindex TimeSheets: link to set a new password';
                // print json_encode($url); 
                $mail->Body    = '<div style="text-align: center; max-width: 360px"><img style="width: 300px;" src="https://www.sapindex.es/timesheets2/img/logo_mail.png"><br><br><div style="text-align: left;"><b>This is an automated email from Sapindex TimeSheets.</b><br><br>Click on the following link to set a new password.<br><br><a href="'.$url.'">Click on this link to set a new password.</a></div></div>';                
                $mail->AltBody = 'This is an automated email from Sapindex TimeSheets';
            
                $mail->send();
                // echo 'Message has been sent';
                
                echo " 
                <script src='../lib/sweetalert2/dist/sweetalert2.all.min.js'></script>
                <script>
                alert('The email has been successfully sent.');
                location.href = 'https://www.sapindex.es/timesheets2/login.php';             
                </script>";            
                // swal({
                //     title: 'Error',
                //     text: 'The email has been successfully sent.',
                //     type: 'error',
                //     confirmButtonText: 'Ok'
                //     });                      
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }


			

            
		}
		        

?>