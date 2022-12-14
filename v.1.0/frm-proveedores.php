<?php 
    require 'header.php';
    require 'sidebar.php';
?>

<style>
.bt7{
    border: solid 2px #a3166b;
    border-radius: 15px 15px 15px 15px;
    box-shadow: 2px 2px 5px #999999;
    background: #ffffff;
    box-shadow: 0 0 0 .2rem rgba(0, 123, 255, .25)
 }

 .bt8{
    font-size:42px;
    color: #a3166b;
    text-align:center;
 }
 input:focus {

border: 1px solid #a3166b ;
}



    </style>
  <div class="main-panel">
    <div class="container ">
      <div class="page-inner bt7">
        <div class="pahe-header">
          <h4 class="page-title bt8">Proveedores</h4>
        </div>

         <div class="row">
         <div class="col-lg-12">
         <div class="form">
         <div id="exito-0"></div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Nombres :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
											    <input type="text" class="form-control form-control-sm  input-pill" id="a-id" style="display:none;" autocomplete="off" >
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-nom" placeholder="Nombre" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Apellidos :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-ape" placeholder="Apellidos" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Correo Corporativo :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-email-cor" placeholder="Correo corporativo" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Correo Personal :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-email-per" placeholder="Correo Personal" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Perfil :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-perfil" placeholder="Perfil" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Distr. Grupo :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-grupo" placeholder="Distribución de Grupo" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>País :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
											       <select class=" form-control form-control-sm  input-pill" id="a-pais">
									                </select>
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Ciudad :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-ciudad" placeholder="Ciudad" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Dirección :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-dir" placeholder="Dirección" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Teléfono :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-tel" placeholder="Teléfono" autocomplete="off" >
											</div>
										</div>										
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Pago :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
											       <select class=" form-control form-control-sm  input-pill" id="a-pago">
									                </select>
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Usuario de Pago :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-uspago" placeholder="Usuario de pago" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Link de Pago :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-linkpago" placeholder="Link de Pago" autocomplete="off" >
											</div>
										</div>
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Día de Pago :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-dpago" placeholder="Día de Pago" autocomplete="off" >
											</div>
										</div>	
										<div class="form-group form-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-4 text-right">
												<label>Año Inicio SAP :</label>
											</div>
											<div class="col-lg-9 col-md-9 col-sm-8">
									            <input type="text" class="form-control form-control-sm  input-pill" id="a-per" placeholder="Año Inicio SAP" autocomplete="off" >
											</div>
										</div>	
                                        
                                        
                                <div class="form-group">
                                 
                                 <div class="col-md-9 pull-right">
                                     <button id="btn-guardar" onclick="RegistrarModal();" type="button" class="btn btn-primary"><span class='glyphicon glyphicon-floppy-save'> Guardar</button>
                                     <button id="btn-buscar" onclick="Loadproveedores();" type="button" class="btn btn btn-info"> Buscar</button>
                                 </div>
                             </div>

									</div>

        </div>
  
         </div>

        
      </div>
    </div>
  </div>



 <?php

 require 'footer.php'; 
 ?>
 <script src="js/js.proveedores.js"></script>
 <script src="js/js.listar-proveedores.js"></script>
