<!DOCTYPE html>
<html>
<head>
    <title>Prueba</title>
    <?php include('scripts.php');
          include('modales.php')?>
</head>
<body>
    <?php require('header.php'); ?>
    <div class="container">
        <div class="col-xs-12 titulo">
            <h1>CENTRO DE RECURSOS PARA USUARIOS</h1>
        </div>
        <div class="col-xs-12 blq-cntr" style="background-color: antiquewhite">
            <label class="blq-cntr-titulo">Seleccion el tipo de recurso que deseas reservar</label> 
            <button class="col-xs-5 btn btn-primary recursosInmo" id="btn-recurso-inm" 
                    data-toggle="modal" data-target="#modalInmuebles">Recursos Inmuebles</button>
            <button class="col-xs-5 btn btn-primary recursosElec" id="btn-recurso-elec"
                    data-toggle="modal" data-target="#modalElectronicos">Recursos Electrónicos</button>

           <div id="resultado" class="modalmask">
                <div class="modalbox movedown" id="resultadoContent">
                    <a href="#close" title="Close" class="close">X</a>
                    <h2 id="tituloResultado">TITULO</h2>
                    <div id="contenidoResultado">contenido resultado</div>
                </div>
            </div>
        </div>
        
        <div class="xs-col-12">
            <?php include('tablaModal.php')?>
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
       // alert('hola');
        document.getElementById('resultadoContent').className='modalbox resize';
        $('#resultadoContent').dialog();
    });
</script>