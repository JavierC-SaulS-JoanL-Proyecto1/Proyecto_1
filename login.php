<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php require('scripts.php') ?>
        
    </head>
    <body class="color_fondo">
        <?php require('header_login.php'); ?>
        <div class="container">
            <div class="col-xs-12">	
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="login_centro">
                        <?php 
                            if(isset($_REQUEST['error'])){
                                if ($_REQUEST['error']) {
                                    echo '<script type="text/javascript">alert("Usuario o Contraseña incorrectos"); </script>';
                                }
                            }
                        ?>
                        <i class="fa fa-user-circle fa-5x"></i>
                        <h1>Iniciar sesion:</h1>
                         
                        <form name="formulario1" action="centroRecursosController.php" method="POST" onsubmit="return validar()" class="clase1" >
                            <div class="input-group margin-bottom-sm">
                                <span class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i></span>
                                <input class="form-control" id="user" name="usuario" type="text" placeholder="Usuario">
                            </div>
                            <div class="input-group" style="padding-top: 1%; padding-bottom: 2%;">
                                <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                <input class="form-control" id="passwd" name="password" type="password" placeholder="Password">
                            </div>
                            <button class="btn btn-success" type="" name="enviar">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php require('footer_login.php'); ?>
    </body>
</html>
