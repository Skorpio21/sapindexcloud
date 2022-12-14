function load_salir (){

    swal({
        title: "Información",
        text: "Desea Cerra sesión !",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Sí",
        cancelButtonText: "No",
        closeOnConfirm: false,
        buttons:{
          confirm: {
            text : 'Sí, salir!',
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
              url: "./model/anexos/anexos.php",
              type: "POST",
              data: "boton=salir" 
            }).done(function (resp) {

                if(resp=="exito"){
                    location.href='../login';
                }
        
              
            });
    
          } else {
            swal.close();
          }
        });

   }

function Loadclientes(){
    location.href='clientes';
}

function Loadproveedores(){ 
    location.href='proveedores';
}

function Load_frmproveedores(){ 
    location.href='frm-proveedores';
}

function Loadcontratos(){
    location.href='contratos';
}


