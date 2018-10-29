<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php require('scripts.php') ?>
        
    </head>
    <body class="color_fondo">
        <div class="container">
            <?php require('header_login.php'); ?>
            	
               
                        <div class="login_centro">
                            <?php 
                                if(isset($_REQUEST['error'])){
                                    if ($_REQUEST['error']) {
                                        echo '<script type="text/javascript">alert("Usuario o Contraseña incorrectos"); </script>';
                                    }
                                }
                            ?>
                            <center>
                            <i class="fa fa-user-circle fa-5x"></i>
                            <h1 class="titulo-login">Acceder al sistema</h1>
                             </center>
                            <form name="formulario1" action="centroRecursos.php" method="POST" onsubmit="return validar()" class="clase1" >
                                <div class="input-group margin-bottom-sm">
                                    <span class="input-group-addon"><i class="fa fa-user-circle fa-fw"></i></span>
                                    <input class="form-control" name="usuario" type="text" placeholder="Usuario">
                                </div>
                                <div class="input-group" style="padding-top: 1%; padding-bottom: 2%;">
                                    <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                                    <input class="form-control" name="password" type="password" placeholder="Password">
                                </div>
                                <button class="btn btn-success" type="" name="enviar">Entrar</button>
                            </form>
                        </div>
               
            <?php require('footer_login.php'); ?>
        </div>
    </body>
</html>
