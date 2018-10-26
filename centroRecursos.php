<?php  
    
    require('queriesMysql.php');
    $error = [];
    $recurso = [];
    $link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
    if (!$link) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
      
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
       //HACER UN MODAL CON JS EN LOS BOTONES CON UN INPUT HIDDEN. DENTRO DEL MODAL
       // UN FORMULARIO METER LOS VALORES DEL TIPO CON JQUERY Y HACER EL SUBMIT() 
       // PASAR A LA FUNCION EL TIPO POR VARIABLE PARA REUTILIZARLA EN AMBAS QUERIES
       $getRecursosInm = queriesMysql::getRecursosInm($link);
       if ($getRecursosInm) {
           foreach ($getRecursosInm as $recursos){
               array_push($recurso, $recursos);
           }
       }
      // var_dump($error);
       if (count($error) ==0) {
           require('centro-recursos.php');
       }else{
           header('Location: login.php?error=true');
       }
        
    }else{
        header('Location: login.php');
    }  


