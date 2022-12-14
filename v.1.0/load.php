<?php
session_start();

if (isset($_SESSION["Dsig-User"] )!= ''){

$user= base64_decode($_SESSION["Dsig-User"]) ;
$type= base64_decode($_SESSION["Dsig-Types"]) ;

require_once 'model/conexion.php';
$mysqli =  conectar();


if ($type=="Usuario"){
    $myquery = "SELECT t1.email,t1.type_user,CONCAT(t2.NameProvider, ' ',t2.SurnameProvider) AS nameProv,t2.idProvider from Usuario as t1
    inner join providers as t2 on t2.email_corp = t1.email
    where  t1.email='$user'";
    $resultado = $mysqli->query($myquery);
    $row = mysqli_fetch_array($resultado);
    $_SESSION["Dsig-Prov"]=$row[3];

}else if ($type=="Administrador"){
    $myquery = "SELECT t1.email,t1.type_user 
    from Usuario as t1
    where  t1.email='$user'";
    $resultado = $mysqli->query($myquery);
    $row = mysqli_fetch_array($resultado);
}




mysqli_close($mysqli);

// 1=Administrador ; 0 = usuario
if ($type=="Administrador"){
 
    if ($row[0]!=$user || $row[1]!=1){
         header("Location: ../login");
     }

}else {

}

if ($type=="Usuario"){
    if ($row[0]!=$user || $row[1]!=0){
         header("Location: ../login");
     }
}else{
   // header("Location: ../login");
}

}else{
    ///echo 'agustin.campanelli@sap-index.com';
    header("Location: ../login");
}


/*=============================================
CALCULA EL DIGITO DE VERIFICACION
=============================================*/
/*
jQuery('.soloNumeros').keypress(function (tecla) {
  if (tecla.charCode < 48 || tecla.charCode > 57) return false;
});

$("#nuevoIdTercero").on("keyup", function() {
    // llamada AJAX


      // Verificar que haya un numero
  let nit = this.value;//document.getElementById("nit").value;
  let isNitValid = nit >>> 0 === parseFloat(nit) ? true : false; // Validate a positive integer
  
  // Si es un número se calcula el Dígito de Verificación
  if ( isNitValid ) {
    // let inputDigVerificacion = document.getElementById("digitoVerificacion");
     var Dv = calcularDigitoVerificacion (nit);

    $("#digitoVerificacion").val(Dv);

  }
});


function  calcularDigitoVerificacion ( myNit )  {

  var vpri,
      x,
      y,
      z;
  
  // Se limpia el Nit
  myNit = myNit.replace ( /\s/g, "" ) ; // Espacios
  myNit = myNit.replace ( /,/g,  "" ) ; // Comas
  myNit = myNit.replace ( /\./g, "" ) ; // Puntos
  myNit = myNit.replace ( /-/g,  "" ) ; // Guiones
  
  // // Se valida el nit
  // if  ( isNaN ( myNit ) )  {
  //   console.log ("El nit/cédula '" + myNit + "' no es válido(a).") ;
  //   return "" ;
  // };
  
  // Procedimiento
  vpri = new Array(16) ; 
  z = myNit.length ;

  vpri[1]  =  3 ;
  vpri[2]  =  7 ;
  vpri[3]  = 13 ; 
  vpri[4]  = 17 ;
  vpri[5]  = 19 ;
  vpri[6]  = 23 ;
  vpri[7]  = 29 ;
  vpri[8]  = 37 ;
  vpri[9]  = 41 ;
  vpri[10] = 43 ;
  vpri[11] = 47 ;  
  vpri[12] = 53 ;  
  vpri[13] = 59 ; 
  vpri[14] = 67 ; 
  vpri[15] = 71 ;

  x = 0 ;
  y = 0 ;
  for  ( var i = 0; i < z; i++ )  { 
    y = ( myNit.substr (i, 1 ) ) ;
    // console.log ( y + "x" + vpri[z-i] + ":" ) ;

    x += ( y * vpri [z-i] ) ;
    // console.log ( x ) ;    
  }

  y = x % 11 ;
  // console.log ( y ) ;

  return ( y > 1 ) ? 11 - y : y ;
}*/
?>