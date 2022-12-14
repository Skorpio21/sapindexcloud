var editor; 
$(function()
 {
    listar();
    loadMonedas();
    loadPaises();

    $('#a-fecha').datetimepicker({
			format: 'DD/MM/YYYY',
		});

        $('#m2-1').addClass('active');
});

var listar = function(){
    var table = $("#table").DataTable({
        "ajax":{
            "type":"POST",
            "url":"./model/clientes/listar.php"
        },
        responsive: true,
        autoWidth: true,
        columnDefs: [
            { className: 'text-center', targets: [0] },
            { targets: [0], visible: true, searchable: true, orderable: true },  //Clave primaria
            { targets: [1], visible: true, searchable: true, orderable: true },
            { targets: [2], visible: true, searchable: true, orderable: true }, 
            { targets: [3], visible: true, searchable: true, orderable: true },
            { targets: [4], visible: true, searchable: true, orderable: true },
            { targets: [5], visible: true, searchable: true, orderable: true },
            { targets: [6], visible: true, searchable: true, orderable: true },
            { targets: [7], visible: true, searchable: true, orderable: true },
            { targets: [8], visible: true, searchable: true, orderable: true },
            { targets: [9], visible: true, searchable: true, orderable: true },
            { targets: [10], visible: true, searchable: true, orderable: true },
            { targets: [11], visible: true, searchable: true, orderable: true }

        ],
        "columns":[
            {"data":"idClient"},
            {"data":"NameClient"},
            {"data":"AddressClient"},
            {"data":"DetCountry"},            
            {"data":"DetCurr"},
            {"data":"VAT"},
            {"data":"DateIni"},
            {"data":"email1"},
            {"data":"email2"},
            {"data":"email3"},
            {"data":"email4"},
            {"data":"email5"},
            {
                "className":      'details-control',
                "orderable":      false,
                "data":           null,
                "defaultContent": 
                "<button type='button' data-toggle='tooltip' title='' class='editar btn btn-link btn-primary btn-lg' data-original-title='Edit Task'> <i class='fa fa-edit'></i></button>" +
                "<button type='button' data-toggle='tooltip' title='' class='eliminar btn btn-link btn-danger btn-lg' data-original-title='Edit Task'> <i class='fa fa-times'></i></button>" 
            }
        ],
        "order": [[2, 'asc']],
        "language": {
        "emptyTable":			"<i>No hay datos disponibles en la tabla.</i>",
        "info":		   		"Del _START_ al _END_ de _TOTAL_ ",
        "infoEmpty":			"Mostrando 0 registros de un total de 0.",
        "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
        "infoPostFix":			"(actualizados)",
        "lengthMenu":			"Mostrar _MENU_ registros",
        "loadingRecords":		"Cargando...",
        "processing":			"Procesando...",
        "search":			"<span style='font-size:15px;'>Buscar:</span>",
        "searchPlaceholder":		"Dato para buscar",
        "zeroRecords":			"No se han encontrado coincidencias.",
        "paginate": {
          "first":			"Primera",
          "last":				"Última",
          "next":				"Siguiente",
          "previous":			"Anterior"
        },
        "aria": {
          "sortAscending":	"Ordenación ascendente",
          "sortDescending":	"Ordenación descendente"
        }
      },
     "processing": true,
      "scrollX": true,
      "dom": 'lBfrtip',
      "buttons": [
          'copy', 'excel', 'pdf'
      ],
  
      "lengthMenu":		[[3,5,7, 10, 20, 25, 50, -1], [3,5,7, 10, 20, 25, 50, "Todos"]],
      "iDisplayLength":	7,

    });
}
 

      
    var obtener_data_editar = function (tbody, table){
         $(document).on("click",".editar",function(){
        _trEdit = $(this).closest('tr');
         var _0 = $(_trEdit).find('td:eq(0)').text();
         eddocumento(_0);
        });
    }

    var obtener_data_eliminar = function (tbody, table){
        $(document).on("click",".eliminar",function(){
       _trEdit = $(this).closest('tr');
        var _0 = $(_trEdit).find('td:eq(0)').text();       
        deldocumento(_0);
       });
   }



    obtener_data_editar("#table tbody", table);
    obtener_data_eliminar("#table tbody", table);

  
    function ReloadTabla(){
      var table = $('#table').DataTable();
      table.destroy();
  
     // $('#table').empty();
      listar();
    }

    function loadregistro(){
   //   location.href='contribuyentes';
    }
  
 
