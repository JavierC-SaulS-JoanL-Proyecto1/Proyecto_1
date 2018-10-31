<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modales</title>
  <meta charset="utf-8">
 <?php include('scripts.php');  ?>
</head>
<body>
<!-- MODAL INMUEBLES -->
<div class="containerv2">
  <!-- The Modal -->
  <div class="modal" id="modalInmuebles">
    <div class="modal-dialog">
      <div class="modal-content">
          
        <!-- Modal Header -->
        <div class="modal-header">
            <h1 id="titpuloPrueba"></h1>
          <h4 class="modal-title">Recursos Inmuebles disponibles:</h4>
          <h1 id="tituloPrueba"></h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="cuerpoModal">
            <div class="col-xs-8">   
                <select class="form-control" id="selectFormReserva" name="selectRecurso" 
                        onchange="getInfoRecurso(this);">
                    <option value="0">Selecciona un recurso</option>
                    <?php
                        $getRecursosInm = queriesMysql::getRecursosInm($link);
                        if ($getRecursosInm) {
                            foreach ($getRecursosInm as $recursos){
                               echo "<option value='$recursos[id_recurso]'>".$recursos['recurso']."</option>";
                            }
                        }
                    ?>
                </select>  
            </div>
            <div class="col-xs-12 ">
                <div class="bloqueDescRecursoInm"></div>
                <p class="infoRecursoInm"></p>
            </div>
            <div>
                <div class="col-xs-12" id="divBtnReservar">
                    <button class="btn btn-success" id="btnReservar" 
                            onclick="UpdateRecursoAJAX($('#selectFormReserva option:selected').val(),
                                    $('#usuarioLogueado').text() )">Reservar</button>  
                </div>
            </div>
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal" style="float: left;">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  
</div>
    
    
    <!-- MODAL ELECTRONICOS -->
<div class="containerv2">
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
        <div class="cuerpoModal">
            <div class="col-xs-8">   
                <select class="form-control" id="selectFormReservaElec" name="selectFormReservaElec"
                        onchange="getInfoRecurso(this);">
                    <option value="0">Selecciona un recurso</option>
                    <?php
                        $getRecursosElec = queriesMysql::getRecursosElec($link);
                        if ($getRecursosElec) {
                            foreach ($getRecursosElec as $recursos){
                               echo "<option value='$recursos[id_recurso]'>".$recursos['recurso']."</option>";
                            }
                        }
                    ?>
                </select>   
            </div>
            <div class="col-xs-12">
                <div class="bloqueDescRecursoElec"></div>
                <p class="infoRecursoElec"></p>
            </div>
            <div>
                <div class="col-xs-12" id="divBtnReservar" style="float: right;">
                    <button class="btn btn-success" id="btnReservar" 
                         onclick="UpdateRecursoAJAX($('#selectFormReservaElec option:selected').val(),
                             $('#usuarioLogueado').text() )">Reservar</button>  
                </div>
            </div>
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" 
                    style="float: left;">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

<script>
    function UpdateRecursoAJAX(recurso, usuario ){
       
        $.ajax({
            data: {usuario, recurso},
            url: 'gestionRecursosController.php',
            type: 'POST',
            beforeSend: function(){
                console.log(recurso, usuario);
            },
            success: function (response){
                console.log(response);
                location.reload();
                //$("#tituloPrueba").html('Recurso reservado');
            }
        });
    }
   
     // funcion que abre un bloque en los selects.
   // INTENTAR HACERLO CON ID'S EN VEZ DE CLASES. HACER 2 FUNCIONES
    
    function getInfoRecurso(id_recurso){
        console.log(id_recurso.value);
        if((id_recurso.value)!= 0){
            if((id_recurso.value) >= 7 ){
                var pDestino = '.infoRecursoInm'; 
                var imgRecurso = ".bloqueDescRecursoInm";
            }else { 
                pDestino = '.infoRecursoElec';
                var imgRecurso = ".bloqueDescRecursoElec";
            }
           //alert(recurso.value);
          var recurso = id_recurso.value;
          //alert(recurso);
          // console.log(recurso);
            $.ajax({
                data: {recurso},
                url: 'getInfoRecursosController.php',
                type: 'POST',
                beforeSend: function(){
                    console.log(recurso);
                },
                success: function (response){
                    console.log(response);
                    var arrayRespuesta = response.split('@');
                    // meter la descripcion en el bloque
                    $(pDestino).html(arrayRespuesta[0]);
                    $(imgRecurso).html("<img src='./Imagenes/"+arrayRespuesta[1]+".jpg' class='resol_imagenes'>");
                }
            });   
        }else if((id_recurso.value) == 0){
        console.log('entra en el else');
            $('.resol_imagen').remove();
            //$('.resol_imagen').css('display','none');
            $('.infoRecursoInm').html('');
            $('.infoRecursoElec').html('');
        }
    }

   
</script>