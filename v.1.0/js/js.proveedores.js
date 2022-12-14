let  principal;
$(function()
 {
    loadPagos();
    loadPaises();
    loadLenguajes();
    $('#m2-2').addClass('active');

});



//===================== registro de operadores =======================//
function NuevoReg(){
    $('#modal-cli').on('show.bs.modal', function () {
      LimpiarCajas();
    });

    $('#modal-cli').on('shown.bs.modal', function () {
      $('#a-nom').focus();
    });

    $("#modal-cli").modal({backdrop: 'static', keyboard: false});
}


function loadPagos(){
    $.ajax({
        url:'./model/anexos/anexos.php',
        type:'POST',
        data:'boton=pagos',
        success: function(data){
           $('#a-pago').html(data);
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

function loadLenguajes(){
  $.ajax({
      url:'./model/anexos/anexos.php',
      type:'POST',
      data:'boton=lang',
      success: function(data){
         $('#a-lang1').html(data);
         $('#a-lang2').html(data);
         $('#a-lang3').html(data);
         $('#a-lang4').html(data);
         $('#a-lang5').html(data);
      }
  });
}



function RegistrarModal(){
    variable_1 = $("#a-id").val();
    variable_2 = $("#a-nom").val();
    variable_3 = $("#a-ape").val();
    variable_4 = $("#a-email-cor").val();
    variable_5 = $("#a-email-per").val();
    variable_6 = $("#a-perfil").val();
    variable_7 = $("#a-grupo").val();
    variable_8 = $("#a-pais").val();
    variable_9 = $("#a-ciudad").val();
    variable_10 = $("#a-dir").val();
    variable_11 = $("#a-tel").val();
    variable_12 = $("#a-per").val();
    variable_13 = $("#a-lang1").val();
    variable_14 = $("#a-lang2").val();
    variable_15 = $("#a-lang3").val();
    variable_16 = $("#a-lang4").val();
    variable_17 = $("#a-lang5").val();
    variable_18 = $("#a-pago").val();
    variable_19 = $("#a-uspago").val();
    variable_20 = $("#a-linkpago").val();
    variable_21 = $("#a-dpago").val();



    if (variable_2==''){
        showAlert("#exito-0","  Espere!, Ingrese el nombre", "info", 1500, " fa-exclamation-triangle");
        $("#a-nom").focus();
        return false;
    }

    if (variable_3==''){
      showAlert("#exito-0","  Espere!, Ingrese el Apellido", "info", 1500, " fa-exclamation-triangle");
      $("#a-ape").focus();
      return false;
    }

    if (variable_4==''){
      showAlert("#exito-0","  Espere!, Ingrese el correo corporativo", "info", 1500, " fa-exclamation-triangle");
      $("#a-email-cor").focus();
      return false;
    }

    if (variable_5==''){
      showAlert("#exito-0","  Espere!, Ingrese el correo personal", "info", 1500, " fa-exclamation-triangle");
      $("#a-email-per").focus();
      return false;
    }

    if (variable_4!=''){
      if(validarEmail(variable_4)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado corporativo es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email-cor").focus();
        return false;
      }
    }

    if (variable_5!=''){
      if(validarEmail(variable_5)==false){
        showAlert("#exito-0","  Espere!, el correo ingresado personal es invalido", "info", 1500, " fa-exclamation-triangle");
        $("#a-email-per").focus();
        return false;
      }
    }

    if (variable_6==''){
      showAlert("#exito-0","  Espere!, Ingrese el perfil", "info", 1500, " fa-exclamation-triangle");
      $("#a-perfil").focus();
      return false;
    }

    if (variable_7==''){
      showAlert("#exito-0","  Espere!, Ingrese el Grupo", "info", 1500, " fa-exclamation-triangle");
      $("#a-grupo").focus();
      return false;
    }

    if (variable_8==null){
      showAlert("#exito-0","  Espere!, seleccione el País", "info", 1500, " fa-exclamation-triangle");
      $("#a-pais").focus();
      return false;
   }

   if (variable_10==''){
    showAlert("#exito-0","  Espere!, Ingrese la dirección", "info", 1500, " fa-exclamation-triangle");
    $("#a-dir").focus();
    return false;
  }

  if (variable_11==''){
    showAlert("#exito-0","  Espere!, Ingrese el telefono", "info", 1500, " fa-exclamation-triangle");
    $("#a-tel").focus();
    return false;
  }

  if (variable_18==null){
    showAlert("#exito-0","  Espere!, seleccione el País", "info", 1500, " fa-exclamation-triangle");
    $("#a-pago").focus();
    return false;
 }


    if (variable_1==''){
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,variable_13, variable_14, variable_15, variable_16, variable_17,variable_18,variable_19,variable_20,variable_21,
          'registrar');
    }else{
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,variable_13, variable_14, variable_15, variable_16, variable_17,variable_18,variable_19,variable_20,variable_21,
          'modificar');
    }
}
  

  function registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,variable_12,variable_13, variable_14, variable_15, variable_16, variable_17,variable_18,variable_19,variable_20,variable_21,
    boton){

    $.ajax({
      url: "./model/proveedores/entidad.php",
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
        "&variable_13=" +
        variable_13 +
        "&variable_14=" +
        variable_14 +
        "&variable_15=" +
        variable_15 +
        "&variable_16=" +
        variable_16 +
        "&variable_17=" +
        variable_17 +
        "&variable_18=" +
        variable_18 +
        "&variable_19=" +
        variable_19 +
        "&variable_20=" +
        variable_20 +
        "&variable_21=" +
        variable_21 +       
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
        url: './model/proveedores/editar.php',
        success: function (valores) {
  
            var datos = eval(valores);

                document.getElementById("a-id").value = datos[0];
                document.getElementById("a-nom").value = datos[1];
                document.getElementById("a-ape").value = datos[2];
                document.getElementById("a-email-cor").value = datos[3];
                document.getElementById("a-email-per").value = datos[4];
                document.getElementById("a-perfil").value = datos[5];
                document.getElementById("a-grupo").value = datos[6];
                document.getElementById("a-pais").value = datos[7];
                document.getElementById("a-ciudad").value = datos[8];
                document.getElementById("a-dir").value = datos[9];
                document.getElementById("a-tel").value = datos[10];
                document.getElementById("a-per").value = datos[11];
                document.getElementById("a-lang1").value = datos[12];
                document.getElementById("a-lang2").value = datos[13];
                document.getElementById("a-lang3").value = datos[14];
                document.getElementById("a-lang4").value = datos[15];
                document.getElementById("a-lang5").value = datos[16];
                document.getElementById("a-pago").value = datos[17];
                document.getElementById("a-uspago").value = datos[18];
                document.getElementById("a-linkpago").value = datos[19];
                document.getElementById("a-dpago").value = datos[20];

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
          url: "./model/proveedores/entidad.php",
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
     $("#a-ape").val('');
     $("#a-email-cor").val('');
     $("#a-email-per").val('');
     $("#a-perfil").val('');
     $("#a-grupo").val('');
     $("#a-pais").val('');
     $("#a-ciudad").val('');
     $("#a-dir").val('');
     $("#a-tel").val('');
     $("#a-per").val('');
     $("#a-lang1").val('');
     $("#a-lang2").val('');
     $("#a-lang3").val('');
     $("#a-lang4").val('');
     $("#a-lang5").val('');
     $("#a-pago").val('');
     $("#a-uspago").val('');
     $("#a-linkpago").val('');
     $("#a-dpago").val('');

     document.getElementById('addregistro').innerHTML = "Guardar";
     $("a-nom").focus();
  }