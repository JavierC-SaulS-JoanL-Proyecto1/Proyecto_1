<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <?php require('scripts.php') ?>
    </head>
    <body class="color_fondo">
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
                        <!-- MIRAR ESTO PORQUE ESTA INTERESANTE
                        <div class="input-group margin-bottom-sm">
                            <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                            <input class="form-control" type="text" placeholder="Email address">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        -->
                        <form action="centroRecursos.php" method="POST" class="clase1">	
                            <input type="text" name="usuario" class="form-control usuario inputForm"placeholder="Usuario">
                            <br>
                            <input type="password" name="password" class="form-control col-xs-4 password inputForm" placeholder="Contraseña">
                            <br><br>
                            <button class="btn btn-success" name="enviar">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
