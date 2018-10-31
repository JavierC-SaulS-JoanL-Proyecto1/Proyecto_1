<?php  
    
    require('queriesMysql.php');
    $error = [];
    $recurso = [];
    $infoReserva = [];
    $link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
    if (!$link) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
      // Si se ha enviado el formulario de login
    if (isset($_REQUEST['enviar'])) {
        
       $usuario = $_REQUEST['usuario'];
       $password = $_REQUEST['password'];
       
       $validacionLogin = queriesMysql::validateLoginUser($link, $usuario, $password);
       if ($validacionLogin) {
            foreach($validacionLogin as $linea){
                $usuarioBD = $linea['usuario'];
                $passwordBD = $linea['password'];
            }
       }else{
           array_push($error,'Usuario incorrecto');
       }
        
    }else{
        header('Location: login.php');
    }  

        // Todo ok, se carga la página
    if (count($error) ==0) {
        require('centro-recursos.php');
    }else{
        header('Location: login.php?error=true');
    }  