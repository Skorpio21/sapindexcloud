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
        <form onsubmit="event.preventDefault(); send_forgot();" class="login-form" id="form_forgot" action="php/login5.php" method="POST" target='_self' enctype="multipart/form-data" >
         
            <div class="login-form__content">            
                <div class="login-form__header">We'll send you a link by email to set a new password</div>                
                <input class="login-form__input" type="email" id="mailforgot" name="mailforgot" placeholder="Write your Sapindex account" autocomplete="email">

               <div><button onclick="send_forgot();" class="login-form__button">Send recovery link</button></div>             
                
                
            </div>
        </form>
    </body>



</html>
