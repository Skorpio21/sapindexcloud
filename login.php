<!DOCTYPE html>
<html>
    <head>
        <title>Sapindex TimeSheets</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">


        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/style.css">

        <script src="lib/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="js/functions.js"></script>
        <?php include("php/connect.php"); ?>



    </head>
    <body style="background-image: url('https://www.sapindex.es/timesheets2/img/bg_rep.png');">

    <?php
        $error=$_GET['error'];
        if ( $error == '1' ){
        echo " 
            <script>
                alert('The user and password are not correct.');
                location.href = 'https://www.sapindex.es/timesheets2/login.php';
            </script>";  
        }      
    ?>    
        <div class="divlogo" >
          <img src="img/sapindex-dos.png" class="imglogo" alt="Logo">    
        </div>	

        <div class="divts">
            <h1><i><span class="ts">TimeSheets</span></i></h1>    
        </div>          
        <form onsubmit="event.preventDefault(); send_form();" class="login-form" id="form_login" action="php/login1.php" method="POST" target='_self' enctype="multipart/form-data" >
         
            <div class="login-form__content">            
                <div class="login-form__header">Login to your Sapindex account</div>                
                <input class="login-form__input" type="email" id="usermail" name="usermail" placeholder="Sapindex email account" autocomplete="email">
                <input class="login-form__input" type="password" id="pass" name="pass" placeholder="Password" autocomplete="password">
                <!-- <button onclick="send_form();" class="login-form__button" type="submit">Login</button> -->

               <div><button onclick="send_form();" class="login-form__button">Login</button></div>             

                <label class="checkbox2"><input onClick="togglepass()" type="checkbox" style="margin: 5px;">Show password</label><br>
			    <label class="checkbox2"><input onClick="remember_me()" type="checkbox" name="btn_recordar" id="btn_recordar" style="margin: 5px 5px 25px 5px;">Remember me on this device</label><br>                
                <div class="login-form__links">	
                    <a class="login-form__link" href="login4.php">Forgot your password?</a>
                </div>
                <?php //echo $rowCount; ?>
                <?php //echo $result[0]; ?>
                
            </div>
        </form>
    </body>



</html>
