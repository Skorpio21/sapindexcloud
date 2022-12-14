<?php 
    require 'header.php';
    require 'sidebar.php';
?>

  <div class="main-panel full-height">
    <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title">Detalle de Proveedores</h4>

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
            <table style="font-size:12px;" id="table" class="table table-hover table-bordered" width="500%" cellspacing="5" cellpadding="5">
              <thead>
              <tr>
                  <th >id</th>                               
                  <th  style="text-align: left; width:300px;>">Nombres</th>
                  <th  style="text-align: left;width:300px;">Apellidos</th>
                  <th  style="text-align: left;width:400px;">Correo Corporativo</th>
                  <th  style="text-align: left;width:400px;">Correo Personal</th>
                  <th  style="text-align: left;width:300px;">Perfil</th>
                  <th  style="text-align: left;width:400px;">Dist. Grupo</th>
                  <th  style="text-align: left; width:300px;>">País</th>
                  <th  style="text-align: left;width:400px;">Ciudad</th>
                  <th  style="text-align: left;width:400px;">Dirección</th>
                  <th  style="text-align: left;width:150px;">Telefono</th>
                  <th  style="text-align: left; width:150px;>">Año</th>
                  <th  style="text-align: center;width:300px;">Lenguaje 1</th>
                  <th  style="text-align: center;width:300px;">Lenguaje 2</th>
                  <th  style="text-align: center;width:300px;">Lenguaje 3</th>
                  <th  style="text-align: center;width:300px;">Lenguaje 4</th>
                  <th  style="text-align: center;width:300px;">Lenguaje 5</th>
                  <th  style="text-align: center;width:300px;">Forma Pago</th>
                  <th  style="text-align: left;width:400px;">Usuario Pago</th>
                  <th  style="text-align: left;width:400px;">Link Pago</th>
                  <th  style="text-align: left;width:400px;">Dias Pago</th>
                  <th  style="text-align: left;width:200px;">Acción</th>


              </tr>
              </thead>

            </table>

        </div>
  
         </div>

        
      </div>
    </div>
  </div>



 <?php
 require 'view/modal-proveedores.php'; 
 require 'footer.php'; 
 ?>
 <script src="js/js.proveedores.js"></script>
 <script src="js/js.listar-proveedores.js"></script>
