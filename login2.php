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
    <body>
        <div class="divlogo" >
          <img src="img/sapindex-dos.png" class="imglogo" alt="Logo">    
        </div>	

        <div class="divts">
            <h1><i><span class="ts">TimeSheets</span></i></h1>    
        </div>          
        <form onsubmit="event.preventDefault(); send_pass();" class="login-form" id="form_login2" action="php/login3.php" method="POST" target='_self' enctype="multipart/form-data" >
         
            <div class="login-form__content">            
                <div class="login-form__header">Set your password for TimeSheets</div>                
                <!-- <input class="login-form__input" type="text" id="usermail" name="usermail" placeholder="Sapindex email account" autocomplete="email"> -->
                <?php
                  $email=$_GET['usermail'];
                ?>
                <input class="login-form__input" type="hidden" id="usermail" name="usermail" value="<?php echo $email;?>" >
                
                <input class="login-form__input" type="password" id="pass1" name="pass1" placeholder="Write your password (it can be the same)" autocomplete="password">
                <input class="login-form__input" type="password" id="pass2" name="pass2" placeholder="Repeat your password" autocomplete="password">
                <!-- <button onclick="send_form();" class="login-form__button" type="submit">Login</button> -->

               <div><button onclick="send_pass();" class="login-form__button">Set password</button></div>             

                <label class="checkbox2"><input onClick="togglepass2()" type="checkbox" style="margin: 5px;">Show passwords</label><br>
			    <!-- <label class="checkbox2"><input onClick="remember_me()" type="checkbox" id="btn_recordar" value="first_checkbox" style="margin: 5px 5px 25px 5px;">Remember me on this device</label><br>                 -->
                <!-- <div class="login-form__links">	
                    <a class="login-form__link" href="./">Forgot your password?</a>
                </div> -->
                <?php //echo $rowCount; ?>
                <?php //echo $result[0]; ?>
                
            </div>
        </form>
    </body>


</html>
