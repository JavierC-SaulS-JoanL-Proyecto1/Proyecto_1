<?php  
    require('centro-recursos.php');
    require('queriesMysql.php');
    $link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
    if (!$link) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
   
    $prueba = queriesMysql::queryPrueba($link);
    //var_dump($prueba);die;  
    
    if (isset($_REQUEST['enviar'])) {
        echo "hola<br>";
        /*
        $pruebas = queriesMysql::queryPrueba($link);
        
        while($usuario = mysqli_fetch_array($pruebas)){
            $cont =0;
            for($i=0;$i<4;$i++){
                echo $usuario[$cont]."<br>";
                 $cont++; 
            }
        }cho $pruebas."<br>";
         echo $pruebas."<br>";
       */
       
       $usuario = $_REQUEST['usuario'];
       $password = $_REQUEST['password'];
       $validacionLogin = queriesMysql::validateLoginUser($link, $usuario, $password);
        
    }else{ echo'formulario no enviado';}  


