<?php 
require 'header.php';
require 'sidebar.php';
?>

  <div class="main-panel full-height">
    <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Detalle de Clientes</h4>

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
            <table style="font-size:12px;" id="table" class="table table-hover table-bordered" width="300%" cellspacing="1" cellpadding="1">
              <thead>
              <tr>
                  
                   <th >id</th>   

                  <!-- <th  style="text-align: left; width:300px;>">Nombres</th>
                  <th  style="text-align: left;width:400px;">Dirección</th>
                  <th  style="text-align: left;width:400px;">País</th>
                  <th  style="text-align: left;width:400px;">Moneda</th>
                  <th  style="text-align: left;">VAT</th>
                  <th  style="text-align: left;width:150px;">Fecha</th>
                  <th  style="text-align: center;">Correo 1</th>
                  <th  style="text-align: center;">Correo 2</th>
                  <th  style="text-align: center;">Correo 3</th>
                  <th  style="text-align: center;">Correo 4</th>
                  <th  style="text-align: center;">Correo 5</th>
                  <th  style="text-align: left;width:200px;">Acción</th> -->
                  <th  style="text-align: left; width: fit-content;>">Nombres</th>
                  <th  style="text-align: left; width: fit-content;">Dirección</th>
                  <th  style="text-align: left; width: fit-content;">País</th>
                  <th  style="text-align: left; width: fit-content;">Moneda</th>
                  <th  style="text-align: left; width: fit-content;">VAT</th>
                  <th  style="text-align: left; width: fit-content;">Fecha</th>
                  <th  style="text-align: center; width: fit-content;">Correo 1</th>
                  <th  style="text-align: center; width: fit-content;">Correo 2</th>
                  <th  style="text-align: center; width: fit-content;">Correo 3</th>
                  <th  style="text-align: center; width: fit-content;">Correo 4</th>
                  <th  style="text-align: center; width: fit-content;">Correo 5</th>
                  <th  style="text-align: left; width: fit-content;">Acción</th>                  


              </tr>
              </thead>

            </table>

        </div>
  
         </div>

        
      </div>
    </div>
  </div>



 <?php
 require 'view/modal-clientes.php'; 
 require 'footer.php'; 
 ?>
 <script src="js/js.clientes.js"></script>
 <script src="js/js.listar-clientes.js"></script>
