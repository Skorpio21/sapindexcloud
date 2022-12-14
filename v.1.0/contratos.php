<?php 
    require 'header.php';
    require 'sidebar.php';
?>

  <div class="main-panel full-height">
    <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Detalle de Contratos</h4>

        </div>
<!-- Button -->
<div class="d-flex">
	<button onclick="NuevoReg()" class="btn btn-primary btn-round ml-auto mb-3" data-toggle="modal" data-target="#addRowModal">
		<i class="fa fa-plus"></i>
		Nuevo
	</button>
</div>
        <div class="row">
         <div class="col-lg-12">
            <table style="font-size:12px;" id="table" class="table table-hover table-bordered" width="300%" cellspacing="5" cellpadding="5">
              <thead>
              <tr>
                  <th >id</th>                               
                  <th  style="text-align: left; width:250px;>">Clientes</th>
                  <th  style="text-align: left;width:250px;">Proveedores</th>
                  <th  style="text-align: left;width:200px;">Fecha Inicio</th>
                  <th  style="text-align: left;width:200px;">Fecha Fin</th>
                  <th  style="text-align: left;width:200px;">Precio Proveedor</th>
                  <th  style="text-align: left;width:300px;">Moneda Proveedor</th>
                  <th  style="text-align: left; width:200px;>">Precio Cliente</th>
                  <th  style="text-align: left;width:200px;">Moneda Cliente</th>
                  <th  style="text-align: left;width:400px;">Cliente Final</th>
                  <th  style="text-align: left;width:150px;">Tipo Trabajo</th>
                  <th  style="text-align: left;width:150px;">Accion</th>

              </tr>
              </thead>

            </table>

        </div>
  
         </div>

        
      </div>
    </div>
  </div>



 <?php
 require 'view/modal-contratos.php'; 
 require 'footer.php'; 
 ?>
 <script src="js/js.contratos.js"></script>
 <script src="js/js.listar-contratos.js"></script>
