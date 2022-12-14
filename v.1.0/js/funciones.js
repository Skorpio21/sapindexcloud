
 



// Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57 || key <= 46)
}

//return isNumberKey(event)
function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if ( charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
}
function conversionfecha(fecha){
                   var date = fecha;
                   var newdate = date.split("/").reverse().join("");
                  return newdate;
}

function showAlert(etiqueta, message, type, closeDelay, icon) {


    // default to alert-info; other options include success, warning, danger
    type = type || "info";    

    // create the alert div
      var alert = $('<div class="alert alert-' + type + ' alert-rounded"  ><i class="fa ' + icon +'"></i>')
        .append(
            $('<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true"></span>')
            .append("&times;")
        )
        .append(message);

    // add the alert div to top of alerts-container, use append() to add to bottom
    $(etiqueta).prepend(alert);

    // if closeDelay was passed - set a timeout to close the alert
    if (closeDelay)
        window.setTimeout(function() { alert.alert("close") }, closeDelay);     
}
   
function Bool_E(id) {
  if (id == true) {
    return 1;
  } else if (id == false) {
    return 0;
  }
}

function Bool_R(id) {
    alert(id)
    if (id == 0) {
      return true;
    } else if (id == 1) {
      return false;
    }
  }

  function conversionfecha2(fecha){
    var date = fecha;
    var newdate = date.split("-").reverse().join("/");
   return newdate;
  }

  function validateDecimal(valor) {
    var RE = /^\d*(\.\d{1})?\d{0,1}$/;
    if (RE.test(valor)) {
        return true;
    } else {
        return false;
    }
  }

  function validarFormatoFecha(campo) {
    var RegExPattern = /^\d{1,2}\/\d{1,2}\/\d{2,4}$/;
    if ((campo.match(RegExPattern)) && (campo!='')) {
          return true;
    } else {
          return false;
    }
  }

  // Solo permite ingresar numeros.
function soloNumeros(e){
	var key = window.Event ? e.which : e.keyCode
	return (key >= 48 && key <= 57 || key <= 46)
}

//https://www.regular-expressions.info/email.html
//\A[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])
function validarEmail(valor) {
  if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(valor)){
   return true;
  } else {
    return false
  }
}

function ceroIz(cod){  
  x=cod.toString();
  if(x.length==1){
    return "0"+cod;
  }else{
    return cod;
  }
}
  