let  principal;




//===================== registro de operadores =======================//
function NuevoReg(){
    $('#modal-cli').on('show.bs.modal', function () {
      LimpiarCajas()
    });


    $('#modal-cli').on('shown.bs.modal', function () {  

      $('#a-nom').focus();
    });

    $("#modal-cli").modal({backdrop: 'static', keyboard: false});
}


function loadMonedas(){
    $.ajax({
        url:'./model/anexos/anexos.php',
        type:'POST',
        data:'boton=moneda',
        success: function(data){
           $('#a-mon').html(data);
        }
    });
}

function loadPaises(){
  $.ajax({
      url:'./model/anexos/anexos.php',
      type:'POST',
      data:'boton=pais',
      success: function(data){
         $('#a-pais').html(data);
      }
  });
}

function RegistrarModal(){
    variable_1 = $("#a-id").val();
    variable_2 = $("#a-nom").val();
    variable_3 = $("#a-dir").val();
    variable_4 = $("#a-pais").val();
    variable_5 = $("#a-mon").val();
    variable_6 = $("#a-vat").val();
    variable_7 = $("#a-fecha").val();
    variable_8 = $("#a-email1").val();
    variable_9 = $("#a-email2").val();
    variable_10 = $("#a-email3").val();
    variable_11 = $("#a-email4").val();
    variable_12 = $("#a-email5").val();



    if (variable_2==''){
        showAlert("#exito-0","  Espere!, Ingrese el nombre", "info", 1500, " fa-exclamation-triangle");
        $("#a-nom").focus();
        return false;
    }

    if (variable_3==''){
      showAlert("#exito-0","  Espere!, Ingrese la dirección", "info", 1500, " fa-exclamation-triangle");
      $("#a-dir").focus();
      return false;
    }

    if (variable_4==null){
      showAlert("#exito-0","  Espere!, seleccione el País", "info", 1500, " fa-exclamation-triangle");
      $("#a-pais").focus();
      return false;
   }

   if (variable_5==null){
      showAlert("#exito-0","  Espere!, seleccione la moneda", "info", 1500, " fa-exclamation-triangle");
      $("#a-mon").focus();
      return false;
   }

    if (variable_6==''){
        showAlert("#exito-0","  Espere!, Ingrese el Vat", "info", 1500, " fa-exclamation-triangle");
        $("#a-vat").focus();
        return false;
    }

    if (variable_7==''){
      showAlert("#exito-0","  Espere!, Ingrese la fecha", "info", 1500, " fa-exclamation-triangle");
      $("#a-fecha").focus();
      return false;
    }

    if (variable_8!=''){
      if(validarEmail(variable_8)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email1").focus();
        return false;
      }
    }

    if (variable_9!=''){
      if(validarEmail(variable_9)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email2").focus();
        return false;
      }
    }

    if (variable_10!=''){
      if(validarEmail(variable_10)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email3").focus();
        return false;
      }
    }

    if (variable_11!=''){
      if(validarEmail(variable_11)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email4").focus();
        return false;
      }
    }

    if (variable_12!=''){
      if(validarEmail(variable_12)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email5").focus();
        return false;
      }
    }


    
 

    variable_7=conversionfecha(variable_7);

    if (variable_1==''){
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,'registrar');
    }else{
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,'modificar');
    }
}
  

  function registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,boton){

    $.ajax({
      url: "./model/clientes/entidad.php",
      type: "POST",
      data:
        "variable_1=" +
        variable_1 +
        "&variable_2=" +
        variable_2 +
        "&variable_3=" +
        variable_3 +
        "&variable_4=" +
        variable_4 +
        "&variable_5=" +
        variable_5 +
        "&variable_6=" +
        variable_6 +
        "&variable_7=" +
        variable_7 +
        "&variable_8=" +
        variable_8 +
        "&variable_9=" +
        variable_9 +
        "&variable_10=" +
        variable_10 +
        "&variable_11=" +
        variable_11 +
        "&variable_12=" +
        variable_12 +
        "&boton="+boton,
    }).done(function (resp) {
   
        if(resp=='exito'){

            if(boton=='registrar'){
                swal("En Buena Hora!","El registro se Registro con Exito!","success");
            }else{
                swal("En Buena Hora!","El registro se Actualizo con Exito!","success");
            }

            ReloadTabla()
            LimpiarCajas()   
            $("#modal-cli").modal("hide");        

        }else{
            showAlert("#exito-0","  Espere!, Error no de guardo el registro", "danger", 2500, " fa-exclamation-triangle");

        }

    });
  }

  function eddocumento(codigo) {
    $('#modal-cli').on('show.bs.modal', function () {
       LimpiarCajas()   
     });


     $('#modal-cli').on('shown.bs.modal', function () {
            $('#a-nom').focus();
     });

      $("#modal-cli").modal({backdrop: 'static', keyboard: false});

    
   $.ajax({
        type: 'POST',
        data: 'codigo=' + codigo,
        url: './model/clientes/editar.php',
        success: function (valores) {
      
            var datos = eval(valores);

                document.getElementById("a-id").value = datos[0];
                document.getElementById("a-nom").value = datos[1];
                document.getElementById("a-dir").value = datos[2];
                document.getElementById("a-pais").value = datos[3];
                document.getElementById("a-mon").value = datos[4];
                document.getElementById("a-vat").value = datos[5];
                document.getElementById("a-fecha").value = datos[6];
                document.getElementById("a-email1").value = datos[7];
                document.getElementById("a-email2").value = datos[8];
                document.getElementById("a-email3").value = datos[9];
                document.getElementById("a-email4").value = datos[10];
                document.getElementById("a-email5").value = datos[11];



        }

    });

        document.getElementById('addregistro').innerHTML = "Actualizar";
    
}


  function deldocumento(id) {

    swal({
      title: "Información",
      text: "Desea Usted Eliminar e registro !",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Sí",
      cancelButtonText: "No",
      closeOnConfirm: false,
      buttons:{
        confirm: {
          text : 'Sí, Eliminar!',
          className : 'btn btn-success'
        },
        cancel: {
          visible: true,
          className: 'btn btn-danger'
        }
      }
    }).then((Delete) => {
    
      if (Delete) {
        $.ajax({
          url: "./model/clientes/entidad.php",
          type: "POST",
          data: "variable_1=" + id + "&boton=eliminar",
        }).done(function (resp) {
    
          if (resp == "exito") {
            swal(
              "En Buena Hora!",
              "El registro se elimino con Exito!",
              "success"
            );
            ReloadTabla()
          } else {
            swal(
              "Error !",
              "El registro no se elimino, vuelvalo a intentar !",
              "error"
            );
          }
        });

      } else {
        swal.close();
      }
    });

  }

  function LimpiarCajas(){
     $("#a-id").val('');
     $("#a-nom").val('');
     $("#a-dir").val('');
     $("#a-pais").val('');
     $("#a-mon").val('');
     $("#a-vat").val('');
     $("#a-fecha").val('');
     $("#a-email1").val('');
     $("#a-email2").val('');
     $("#a-email3").val('');
     $("#a-email4").val('');
     $("#a-email5").val('');
     document.getElementById('addregistro').innerHTML = "Guardar";
     $("a-nom").focus('');
  }