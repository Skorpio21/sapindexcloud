<?php
 require 'load.php';
?>
<!doctype html>
<html lang="es">
   <head>
      <meta charset="utf-8" />
      <!-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> -->
      <!-- <link rel="icon" type="image/png" href="../assets/img/favicon.png"> -->
      <link rel="apple-touch-icon" sizes="16x16" type="image/x-icon" href="../assets/img/favicon.ico">
      <link rel="icon" type="image/x-icon" href="../assets/img/favicon.ico">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <title>Timesheet</title>
      <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
      <meta name="viewport" content="width=device-width" />
      <!--     Fonts and icons     -->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
      <!-- CSS Files -->
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
      <link href="../assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />
      <!-- CSS Just for demo purpose, don't include it in your project -->
      <link href="../assets/css/demo7.css" rel="stylesheet" />
      <link rel="stylesheet" href="../assets/css/mystyle.css">
            
   </head>
   <body style="background-image: url('https://www.sapindex.es/timesheets2/img/bg_rep.png')">
   <div class="image-container set-full-height" >
         <!--   Creative Tim Branding   
         <a href="#">
            <div class="logo-container">
               <div class="logo">
                  <img src="../assets/img/new_logo.png">
               </div>
               <div class="brand">
                  admin
               </div>
            </div>
         </a>
-->
         <!--   Big container   -->
         <div class="container">
            <div class="row">
               <div class="col-sm-10 col-sm-offset-1">
                  <!--      Wizard container        -->
                  <div class="wizard-container">
                     <div class="card wizard-card" data-color="orange" id="wizardProfile">
                        <form action="" method="">
                           <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
                           <div class="wizard-header">

                               <div class="divlogo" >
                                         <img src="../img/sapindex-dos.png" class="imglogo" alt="Logo">    
                               </div>

                               <div class="divts">
                                 <h1><i><span class="ts">TimeSheets</span></i></h1>
                                 <div><label id="" class="provider"><?php echo base64_decode($_SESSION["Dsig-User"]);?></label></div>     
                               </div> 

                           </div>
                           <!-- <div class="wizard-navigation"> -->
                           <div class="wizard-navigation" style="display: none;">
                              <ul>
                                 <li><a href="#about" data-toggle="tab"></a></li>
                              </ul>
                           </div>
                           <div class="tab-content">
                              <div class="tab-pane" id="about">
                                 <div class="row divts">
                                    <!-- <div class="col-sm-3"> -->
                                    <div class="col-sm-6">
                                        <label id="a-prov" style="display:none;"><?php echo $_SESSION["Dsig-Prov"];?></label>
                                       <div class="form-group">
                                          <label >Año</label>															
                                          <select class=" form-control form-control-sm  input-pill" id="a-per">
                                          <option value=""></option>
                                          <option value="2022">2022</option>
                                        </select>
                                       </div>
                                    </div>
                                    <!-- <div class="col-sm-3"> -->
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label >Mes</label>																
                                          <select class=" form-control form-control-sm  input-pill" id="a-mes">
                                          <option value=""></option>
                                          <option value="1">Enero</option>
                                           <option value="2">Febrero</option>
                                           <option value="3">Marzo</option>
                                           <option value="4">Abril</option>
                                           <option value="5">Mayo</option>
                                           <option value="6">Junio</option>
                                           <option value="7">Julio</option>
                                           <option value="8">Agosto</option>
                                           <option value="9">Septiembre</option>
                                           <option value="10">Octubre</option>
                                           <option value="11">Noviembre</option>
                                           <option value="12">Diciembre</option>
                                          </select>
                                       </div>
                                    </div>

                                    <!-- <div class="col-sm-12">
                                       <div class="form-group">
                                          <label >Contrato</label>																
                                          <select class=" form-control form-control-sm input-pill" id="a-con">
                                          </select>
                                       </div>
                                    </div> -->

                                  <!-- New -->
                                 </div>
                                 <div class="row divts">

                                    <div class="col-sm-12">
                                       <div class="form-group">
                                          <label >Contrato</label>																
                                          <select class=" form-control form-control-sm input-pill" id="a-con">
                                          </select>
                                       </div>
                                    </div>

                                  <!-- New -->
                                  </div>
                                 <div class="row">

                                    <div class="container">
                                       <div >
                                          <div >
                                             <table  id ="table-dsig" class="table table-hover table-striped" width="100%" cellspacing="0">
                                                <thead >
                                                   <tr>
                                                      <th style= display:none;>Id</th>
                                                      <th style="text-align: center;" >Día</th>
                                                      <th>Trabajo</th>
                                                      <th>Ausencia</th>
                                                      <th>Vacaciones</th>
                                                      <th>Otros</th>
                                                      <th>Comentarios</th>
                                                   </tr>
                                                </thead>
                                                <tbody id="employee_grid">
                                                </tbody>

                                                <tfoot>
                                                  <tr>
                                                   <th scope="row"></th>


                                                  </tr>
                                                  <tr>
                                                   <th scope="row">Total:</th>
                                                    <td  id="tf1">0.00</td>
                                                    <td id="tf2">0.00</td>
                                                    <td id="tf3">0.00</td>
                                                    <td id="tf4">0.00</td>

                                                  </tr>
                                               </tfoot>
                                             </table>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="wizard-footer height-wizard">
                              <div class="pull-right">                               
                                
                              </div>

                              <div class="clearfix"></div>
                           </div>
                        </form>
                     </div>
                  </div>
                  <!-- wizard container -->
               </div>
            </div>
            <!-- end row -->
         </div>
         <!--  big container -->
         <div class="footer">
            <div class="container">
             
            </div>
         </div>
      </div>
   </body>
   <!--   Core JS Files   -->
   <script src="//code.jquery.com/jquery-2.0.3.min.js"></script>
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
   <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
   <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
   <script src="../assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
   <!--  Plugin for the Wizard -->
   <script src="../assets/js/gsdk-bootstrap-wizard.js"></script>
   <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
   <script src="../assets/js/jquery.validate.min.js"></script>
   <script type="text/javascript">
   
   </script>
   <script src="js/funciones.js"></script>
   <script src="js/js.timesheet.js"></script>




<script type="text/javascript">
      document.oncontextmenu = function(){return false;}
document.onkeydown = function(){return false;}
</html>