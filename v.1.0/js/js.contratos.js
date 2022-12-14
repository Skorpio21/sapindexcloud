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


function loadTrabajo(){
    $.ajax({
        url:'./model/anexos/anexos.php',
        type:'POST',
        data:'boton=trabajo',
        success: function(data){
           $('#a-trab').html(data);
        }
    });
}

function loadClientes(){
  $.ajax({
      url:'./model/anexos/anexos.php',
      type:'POST',
      data:'boton=clientes',
      success: function(data){
         $('#a-cli').html(data);
      }
  });
}

function loadProveedores(){
  $.ajax({
      url:'./model/anexos/anexos.php',
      type:'POST',
      data:'boton=proveedores',
      success: function(data){
         $('#a-prov').html(data);
      }
  });
}

function loadMoneda(){
  $.ajax({
      url:'./model/anexos/anexos.php',
      type:'POST',
      data:'boton=moneda',
      success: function(data){
         $('#a-mon-pro').html(data);
         $('#a-mon-cli').html(data);

      }
  });
}



function RegistrarModal(){
    variable_1 = $("#a-id").val();
    variable_2 = $("#a-prov").val();
    variable_3 = $("#a-cli").val();
    variable_4 = $("#a-fecha-in").val();
    variable_5 = $("#a-fecha-fin").val();
    variable_6 = $("#a-pre-pro").val();
    variable_7 = $("#a-mon-pro").val();
    variable_8 = $("#a-pre-cli").val();
    variable_9 = $("#a-mon-cli").val();
    variable_10 = $("#a-cli-fin").val();
    variable_11 = $("#a-trab").val();



    if (variable_2==null){
      showAlert("#exito-0","  Espere!, Ingrese el Proveedor", "info", 1500, " fa-exclamation-triangle");
      $("#a-prov").focus();
      return false;
    }

    if (variable_3==null){
        showAlert("#exito-0","  Espere!, Ingrese el Cliente", "info", 1500, " fa-exclamation-triangle");
        $("#a-cli").focus();
        return false;
    }


    if (variable_4==''){
      showAlert("#exito-0","  Espere!, Ingrese la fecha de inicio", "info", 1500, " fa-exclamation-triangle");
      $("#a-fecha-in").focus();
      return false;
    }

    if (variable_5==''){
      showAlert("#exito-0","  Espere!, Ingrese la fecha de fin", "info", 1500, " fa-exclamation-triangle");
      $("#a-fecha-fin").focus();
      return false;
    }

    if (variable_6==''){
      showAlert("#exito-0","  Espere!, Ingrese el precio del proveedor", "info", 1500, " fa-exclamation-triangle");
      $("#a-pre-pro").focus();
      return false;
    }

    if (variable_7==null){
      showAlert("#exito-0","  Espere!, Ingrese la moneda del proveedor", "info", 1500, " fa-exclamation-triangle");
      $("#a-mon-pro").focus();
      return false;
    }

    if (variable_8==''){
      showAlert("#exito-0","  Espere!, ingrese el precio del cliente", "info", 1500, " fa-exclamation-triangle");
      $("#a-pre-cli").focus();
      return false;
   }

   if (variable_9==null){
     showAlert("#exito-0","  Espere!, Ingrese la moneda del cliente", "info", 1500, " fa-exclamation-triangle");
     $("#a-mon-pro").focus();
     return false;
  }

  if (variable_11==null){
    showAlert("#exito-0","  Espere!, Ingrese el tipo de trabajo", "info", 1500, " fa-exclamation-triangle");
    $("#a-trab").focus();
    return false;
  }

  variable_4=conversionfecha(variable_4);
  variable_5=conversionfecha(variable_5);

    if (variable_1==''){
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11,'registrar');
    }else{
        registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11, 'modificar');
    }
}
  

  function registrarForm(variable_1, variable_2, variable_3, variable_4, variable_5, variable_6, variable_7,variable_8,variable_9,variable_10,variable_11, boton){

    $.ajax({
      url: "./model/contratos/entidad.php",
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
        "&boton="+boton,
    }).done(function (resp) {

        if(resp=='exito'){

            if(boton=='registrar'){
                swal("En Buena Hora!","El registro se Registro con Exito!","success");
            }else{
                swal("En Buena Hora!","El registro se Actualizo con Exito!","success");
            }
            LimpiarCajas()
            ReloadTabla()
   
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
        url: './model/contratos/editar.php',
        success: function (valores) {
  
            var datos = eval(valores);
                document.getElementById("a-id").value = datos[0];
                document.getElementById("a-prov").value = datos[1];
                document.getElementById("a-cli").value = datos[2];
                document.getElementById("a-fecha-in").value = conversionfecha2(datos[3]);
                document.getElementById("a-fecha-fin").value = conversionfecha2(datos[4]);
                document.getElementById("a-pre-pro").value = datos[5];
                document.getElementById("a-mon-pro").value = datos[6];
                document.getElementById("a-pre-cli").value = datos[7];
                document.getElementById("a-mon-cli").value = datos[8];
                document.getElementById("a-cli-fin").value = datos[9];
                document.getElementById("a-trab").value = datos[10]; 

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
          url: "./model/contratos/entidad.php",
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
      $("#a-prov").val('');
      $("#a-cli").val('');
      $("#a-fecha-in").val('');
      $("#a-fecha-fin").val('');
      $("#a-pre-pro").val('');
      $("#a-mon-pro").val('');
      $("#a-pre-cli").val('');
      $("#a-mon-cli").val('');
      $("#a-cli-fin").val('');
      $("#a-trab").val('');;

     document.getElementById('addregistro').innerHTML = "Guardar";
     $("a-prov").focus();
  }