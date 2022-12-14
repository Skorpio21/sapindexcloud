<html>
  <?php 
    require 'header.php';
    ?>
<style>
    .table td, .table th{
    padding: .25rem;
    height:26px;
    
}

*{box-sizing: border-box;}

.tabla, input, textarea, select{
  width: 100%;
}

</style>

  <div class="main-panel full-height">
    <div class="container">
      <div class="page-inner">
        <div class="page-header">
          <h4 class="page-title"><?php echo $_SERVER['DOCUMENT_ROOT'].'/chat/test.php'; ?>Registro del Servicio</h4>

        </div>

        <div class="row ">
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <div class="form-group">
              <label class="placeholder">N° de Contrato</label>
              <input
                id="a-contrato"
                type="text"
                class="form-control form-control-sm"
              />
            </div>
          </div>
          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <div class="form-group ">
              <label class="placeholder">Estado</label>
              <select class="form-control form-control-sm" id="a-periodo">
                <option value="">&nbsp;</option>
                <option>COTIZACION</option>
                <option>VENTA</option>
                <option>ANULADO</option>
              </select>
            </div>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12 form-group">
            <div class="form-group">
              <label class="placeholder">Tour</label>
              <select class="form-control form-control-sm" id="a-periodo">
                <option value="">&nbsp;</option>
                <option>TOUR 1</option>
                <option>TOUR 2</option>
                <option>TOUR 3</option>
              </select>
            </div>
          </div>

          <div class="col-md-1 col-sm-12 col-xs-12 form-group">
            <div class="form-group">
              <label class="placeholder">Dias</label>
              <input
                id="a-serie"
                type="text"
                class="form-control form-control-sm"
              />
            </div>
          </div>

          <div class="col-md-2 col-sm-12 col-xs-12 form-group">
            <div class="form-group ">
              <label class="placeholder">Tipo</label>
              <select class="form-control form-control-sm" id="a-periodo">
                <option value="">&nbsp;</option>
                <option>INDIVIDUAL</option>
                <option>COMPAÑIA</option>
                <option>GRUPO</option>
              </select>
            </div>
          </div>

        </div>



        <div class="row">
          <span id="error"></span>
          <table width="100%" class="table-bordered"  id="item_table">
            <tr>
              <th width="46%">Cliente</th>
              <th width="5%">
              <div class="btn-group">
                <button
                  type="button"
                  onclick="InsertarFila();"
                  class="btn btn-success btn-sm"
                >
                +
                </button>
                <button
                  type="button"
                  onclick="InsertarFila();"
                  class="btn btn-info btn-sm"
                >
                <i class="fa fa-user"></i>
                </button>
                </div>
              </th>
            </tr>
          </table>
          <div align="center">
            <input
              type="submit"
              name="submit"
              class="btn btn-info"
              value="Insert"
            />
          </div>
        
        </div>
        
      </div>
    </div>
  </div>

  <?php 
       require 'footer.php';
    ?>

  <script src="js/funciones.js"></script>
  <script src="js/listados.js"></script>
</html>