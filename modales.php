<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modales</title>
  <meta charset="utf-8">
 <?php include('scripts.php');  ?>
</head>
<body>

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="modalInmuebles">
    <div class="modal-dialog">
      <div class="modal-content">
          
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Recursos Inmuebles disponibles:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="col-xs-8">   
                <select class="form-control">
                    <?php
                        $getRecursosInm = queriesMysql::getRecursosInm($link);
                        if ($getRecursosInm) {
                            foreach ($getRecursosInm as $recursos){
                               echo "<option value='$recursos[id_recurso]]'>".$recursos['recurso']."</option>";
                            }
                        }
                    ?>
                </select>   
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
    
    
    <!-- MODAL ELECTRONICOS -->
<div class="container">
  <!-- The Modal -->
  <div class="modal" id="modalElectronicos">
    <div class="modal-dialog">
      <div class="modal-content">
          
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Recursos Electronicos disponibles:</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <div class="col-xs-8">   
                <select class="form-control">
                    <?php
                        $getRecursosInm = queriesMysql::getRecursosElec($link);
                        if ($getRecursosInm) {
                            foreach ($getRecursosInm as $recursos){
                               echo "<option value='$recursos[id_recurso]]'>".$recursos['recurso']."</option>";
                            }
                        }
                    ?>
                </select>   
            </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
