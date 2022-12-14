let conteo = 0;
const input = document.querySelector('input');

$(function () {
    loadContratos()


    make_editable_col('#employee_grid', 'td.hours_work', 'model/timesheet/entidad.php?action=edit', 'hours work');
    make_editable_col('#employee_grid', 'td.hours_absence', 'model/timesheet/entidad.php?action=edit', 'hours absence');
    make_editable_col('#employee_grid', 'td.hours_vacaton', 'model/timesheet/entidad.php?action=edit', 'hours vacation');
    make_editable_col('#employee_grid', 'td.hours_other', 'model/timesheet/entidad.php?action=edit', 'hours other');
    make_editable_col('#employee_grid', 'td.comments', 'model/timesheet/entidad.php?action=edit', 'comments');




})

function getEmployee(variable_1, variable_3, variable_4, variable_5) {
    $.ajax({
        type: "GET",
        url: "model/timesheet/entidad.php",
        dataType: "json",
        data:
            "variable_1=" +
            variable_1 +
            "&variable_2=" +
            variable_5 +
            "&variable_3=" +
            variable_3 +
            "&variable_4=" +
            variable_4,
        success: function (response) {
            $('#table-dsig tbody').empty();

            for (var i = 0; i < response.length; i++) {
                $('#employee_grid').append("<tr><td style= display:none; >" +
                    response[i].idTimeSheet + "</td><td style='text-align: center;'  data-name='Date_ts' class='Date_ts' data-type='text' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].Date_ts + "</td><td data-name='hours_work' class='hours_work' data-type='number' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].hours_work + "</td><td data-name='hours_absence' class='hours_absence' data-type='number' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].hours_absence + "</td><td data-name='hours_vacaton' class='hours_vacaton' data-type='number' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].hours_vacaton + "</td><td data-name='hours_other' class='hours_other' data-type='number' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].hours_other + "</td><td data-name='comments' class='comments' data-type='wysihtml5' data-pk='" + response[i].idTimeSheet + "'>" +
                    response[i].comments + "</td></tr>");
            }

            loadCalculos(variable_1, variable_3, variable_4, variable_5);

        },
        error: function (jqXHR, textStatus, errorThrown) {
            // alert("loading error data " + errorThrown);
        }
    });
}

function ajaxAction(action) {
    data = $("#frm_" + action).serializeArray();
    $.ajax({
        type: "POST",
        url: "model/timesheet/entidad.php",
        data: data,
        dataType: "json",
        success: function (response) {
            $('#' + action + '_model').modal('hide');
            $("#employee_grid").bootgrid('reload');

        }
    });
}

function make_editable_col(table_selector, column_selector, ajax_url, title) {

    var variable_1 = document.getElementById('a-prov').innerHTML;
    variable_1 = variable_1.trim();
    variable_2 = $("#a-con").val();
    variable_3 = $("#a-mes").val();
    variable_4 = $("#a-per").val();


    $(table_selector).editable({
        selector: column_selector,
        url: ajax_url,
        title: title,
        type: "POST",
        dataType: 'json'
    });
    $.fn.editable.defaults.mode = 'inline';
  //  loadCalculos(variable_1, variable_2, variable_3, variable_4)
}

function ActualizarData(){
    
    var variable_1 = document.getElementById('a-prov').innerHTML;
    variable_1 = variable_1.trim();
    variable_3 = $("#a-mes").val();
    variable_4 = $("#a-per").val();
    variable_5 = $("#a-con").val();
    loadCalculos(variable_1, variable_3, variable_4, variable_5);
}



//Para cargar datos el proveedor tiene que tener un contrato.

function loadContratos() {
    var variable_1 = document.getElementById('a-prov').innerHTML;
    variable_1 = variable_1.trim();
    $.ajax({
        url: './model/anexos/anexos.php',
        type: 'POST',
        data: 'boton=contratos&idprov=' + variable_1,
        success: function (data) {
            $('#a-con').html(data);
        }
    });
}


function loadCalculos(variable_1, variable_3, variable_4, variable_5) {
    var variable_1 = document.getElementById('a-prov').innerHTML;
    variable_1 = variable_1.trim();
    $.ajax({
        url: './model/anexos/anexos.php',
        type: 'POST',
        data:
            "variable_1=" +
            variable_1 +
            "&variable_2=" +
            variable_5 +
            "&variable_3=" +
            variable_3 +
            "&variable_4=" +
            variable_4 +
            "&boton=calculos",
        success: function (data) {

            var data = JSON.parse(data);
            document.getElementById('tf1').innerHTML = data[0].retorno_0;
            document.getElementById('tf2').innerHTML = data[0].retorno_1;
            document.getElementById('tf3').innerHTML = data[0].retorno_2;
            document.getElementById('tf4').innerHTML = data[0].retorno_3;


        }
    });
}

$("#a-con").on("change", function () {
    Validar();
})

$("#a-mes").on("change", function () {
    Validar();
})

$("#a-per").on("change", function () {
    Validar();
})

function Validar() {
    var variable_1 = document.getElementById('a-prov').innerHTML;
    variable_1 = variable_1.trim();
    variable_2 = '';
    variable_3 = $("#a-mes").val();
    variable_4 = $("#a-per").val();
    variable_5 = $("#a-con").val();


    if (variable_1 != '') {
        if (variable_3 != '') {
            if (variable_4 != '') {
                $('#table-dsig tbody').empty();
                $.ajax({
                    url: "./model/timesheet/controller.php",
                    type: "POST",
                    data:
                        "variable_1=" +
                        variable_1 +
                        "&variable_2=" +
                        variable_5 +
                        "&variable_3=" +
                        variable_3 +
                        "&variable_4=" +
                        variable_4 +
                        "&boton=validar",
                }).done(function (resp) {
                    alert(resp)
                    if (resp == '0') {
                        Registrar(variable_1, variable_2, variable_3, variable_4, variable_5);
                        timeoutID = window.setTimeout(getEmployee, 700, variable_1, variable_3, variable_4, variable_5);
                    } else {
                        getEmployee(variable_1, variable_3, variable_4, variable_5);
                    }
                });



            }
        }
    }

}

function Registrar(variable_1, variable_2, variable_3, variable_4, variable_5) {


    var año = variable_4;
    var mes = variable_3;

    var diasMes = new Date(año, mes, 0).getDate();
    var diasSemana = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
    var i = 0;

    var miObjeto = new Object();
    miObjeto.Ceo = "Fernando Mamani Blas - Info@excelservicios.com";
    miObjeto.items = new Array();

    for (var dia = 1; dia <= diasMes; dia++) {
        var indice = new Date(año, mes - 1, dia).getDay();
        variable_2 = conversionfecha(ceroIz(dia.toString()) + "/" + ceroIz(mes.toString()) + "/" + año.toString());
        //  console.log( conversionfecha(ceroIz(dia.toString()) + "/" + ceroIz(mes.toString()) + "/" + año.toString()));

        miObjeto.items[i] = new Object();
        miObjeto.items[i].CodItem = conversionfecha(ceroIz(dia.toString()) + "/" + ceroIz(mes.toString()) + "/" + año.toString());
        i = i + 1;

    }

    variable_2 = JSON.stringify(miObjeto);

    $.ajax({
        url: "./model/timesheet/controller.php",
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
            "&boton=registrar",
    }).done(function (resp) {

        if (resp == 'exito') {
            console.log("exito");
        } else {
            console.log("error");
        }

    })

}
