<!DOCTYPE html>
<html>
<head>
    <title>Central de Recursos</title>
    <?php include('scripts.php');
          include('modales.php')?>
</head>
<body class="color_fondo">
    <div class="containerv2">
        <?php require('header.php'); ?>
        <div class="col-xs-12 titulo">
            <h1 class="titulo-login">Centro de recursos para usuarios</h1>
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
            <?php include('tablaRecursos.php')?>
        </div>
        <?php include("footer.php") ?>
    </div>
</body>
</html>
   
<script>
    // boton cerrar sesion
    $( "#btn-cerrarSesion" ).click(function() {
        window.location = 'login.php';
    });
    
    
</script>