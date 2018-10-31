<?php require('scripts.php')?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <?php 
            // INFO DE LA RESERVA POR USUARIO LOGUEADO //
        $reservas = queriesMysql::getInfoReservas($link, $usuario);
        if($reservas){ 
            $sinReserva = false;
        }else {$sinReserva = true;}

        if($sinReserva){
            echo "<h1 class='col-xs-12'>Sin reservas realizadas. "
            ."<i class='fas fa-arrow-up'></i>"
            ."<i class='fas fa-arrow-up'></i>"
            ."<i class='fas fa-arrow-up'></i> Puedes reservar ahora!</h1>";
        } 
        ?>
        <table id="tablaTable" class="table table-striped table-hover"> 
            <thead class="thead-dark"> 
            <tr> 
                <th scope="col">Usuario</th> 
                <th scope="col">Fecha</th>
                <th scope="col">Recurso</th> 
                <th scope="col">Fecha Retorno</th>
                <th scope="col">Devolver Recurso</th>
            </tr> 
            </thead> 
            <tbody> 
                <?php 
                if(count($reservas) >0){
                    $cont = 0;
                        foreach($reservas as $reserva){
                            echo '<tr>';
                            echo "<td class='usuario'>".$reservas[$cont]['usuario_fk']."</td> ";
                            echo "<td>".$reservas[$cont]['fecha_entrega']."</td> ";
                            echo "<td class='recurso'>".$reservas[$cont]['recurso']."</td> ";
                           // echo "<input class='id_recurso' type='hidden' value='".$reservas[$cont]['id_recurso_fk']."'></input>";
                            if($reservas[$cont]['fecha_devolucion'] == '0000-00-00 00:00:00'){
                                echo "<td>---</td> ";
                            }else{echo "<td>".$reservas[$cont]['fecha_devolucion']."</td> ";}
                            if($reservas[$cont]['fecha_devolucion'] == '0000-00-00 00:00:00'){
                                echo '<td><button class="btn btn-danger devolverRecursos" '
                                . ' title="Click para devolver este Recurso"'
                                . ' value="'.$reservas[$cont]['id_reserva'].'">X</button></td>';
                                echo '</tr>';
                            }else{ 
                                echo '<td></td>';
                            }

                            $cont++;
                        }
                }else{
                    echo '<tr>';
                    echo "<td></td> ";
                    echo "<td></td> ";
                    echo "<td></td> ";
                    echo "<td></td> ";
                    echo "<td></td> ";
                    echo '</tr>';
                }
                ?>  
            </tbody> 
        </table> 

    </body>
</html>

<script>
$(document).ready(function(){
   $('.devolverRecursos').click(function(){
       var recurso = $(this).closest("tr").find('.recurso').text();
       var usuario = $(this).closest("tr").find('.usuario').text();
       var id_reserva = $(this).val();
       //console.log(id_reserva);
        $.ajax({
            data: {recurso,usuario, id_reserva},
            url: 'devolverRecursoControllerAJAX.php',
            type: 'POST',
            beforeSend: function(){
                console.log(recurso,usuario,id_reserva);
            },
            success: function (response){
                console.log(response);
                location.reload();
                //$("#tituloPrueba").html('Recurso reservado');
            }
        });
      //console.log(recurso);
    });
});
</script>