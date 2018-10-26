<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
    <?php require('scripts.php'); ?>
</head>
<body>
    <?php require('header.php'); ?>
    <div class="container">
        <div class="col-xs-12 titulo">
            <h1>CENTRO DE RECURSOS PARA USUARIOS</h1>
        </div>
        <div class="col-xs-12 blq-cntr" style="background-color: antiquewhite">
            <label class="blq-cntr-titulo">Seleccion el tipo de recurso que deseas reservar</label> 
            <button class="col-xs-5 btn btn-primary recursosInmo" id="btn-recurso-inm">Recursos Inmuebles</button>
            <button class="col-xs-5 btn btn-primary recursosElec" id="btn-recurso-elec">Recursos Electrónicos</button>

           <div id="resultado" class="modalmask">
                <div class="modalbox movedown" id="resultadoContent">
                    <a href="#close" title="Close" class="close">X</a>
                    <h2 id="tituloResultado">TITULO</h2>
                    <div id="contenidoResultado">contenido resultado</div>
                </div>
            </div>
        </div>
        <?php 
            echo "Info recursos para meter en select::::::<br>";
            foreach ($recurso as $nombreRecurso){
                echo $nombreRecurso['recurso'];
            }
        ?>
        <div class="xs-col-12 tablaUsuario">
            <br><br><p>Hacer aqui una ventana con los recursos que estan en uso por el usuario logueado</p>
            <table>
                <tr>
                    <th>Recurso</th>
                    <th>Fecha</th>
                    <th>Tipo</th>
                </tr>
                <tr>
                    <td>
                        recurso tal
                    </td>
                    <td>
                        fecha tal
                    </td>
                    <td>
                        tipo tal
                    </td>
                </tr>
            </table>
        </div>
    </div>
     <?php //echo $usuario.$password." <br>".$usuarioBD.$passwordBD; ?>
</body>
</html>
   
<script>
    // boton cerrar sesion
    $( "#btn-cerrarSesion" ).click(function() {
        window.location = 'login.php';
    });
    
    //botones para reservar recurso
    $( "#btn-recurso-inm" ).click(function() {
        alert('hola');
        //document.getElementById('resultadoContent').className='modalbox resize';
       // $('#resultadoContent').show();
    });
</script>