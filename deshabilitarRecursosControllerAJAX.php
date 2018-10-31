<?php
require('queriesMysql.php');
$link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
$recurso = $_POST['recurso'];
//var_dump($recurso);
    //convierte el nombre del recurso en su id
$id_recurso = queriesMysql::getIdRecurso($link, $recurso);
echo $id_recurso;
    //marca fecha devolucion
$deshabilitarRecurso = queriesMysql::deshabilitarRecurso($link,$id_recurso);
if($deshabilitarRecurso){ echo "recurso deshabilitado";}
    
 
 