<?php
require ('queriesMysql.php');
$usuario = $_POST['usuario'];
$recurso = $_POST['recurso'];


echo $recurso,$usuario;
$link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');

$insertReserva = queriesMysql::insertReserva($link, $usuario, (int)$recurso);

if($insertReserva === true){
    $updateReserva = queriesMysql::updateRecursos($link,$recurso);
    
}else{ echo 'fallo';}

