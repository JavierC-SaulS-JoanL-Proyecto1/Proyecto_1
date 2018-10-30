<?php
require('queriesMysql.php');
$link = mysqli_connect('localhost', 'root', '', 'proyecto1bd');
$recurso = $_POST['recurso'];
$usuario = $_POST['usuario'];
$id_reserva = $_POST['id_reserva'];
    //convierte el nombre del recurso en su id
$id_recurso = queriesMysql::getIdRecurso($link, $recurso);
echo $id_recurso;
    //marca fecha devolucion
$finalizarReserva = queriesMysql::finalizarReserva($link,$id_recurso,(int)$id_reserva);
    // pone la disponibilidad a true
echo $recurso;
$devolverRecurso = queriesMysql::devolverRecurso($link, $recurso);
if($devolverRecurso){
    echo $devolverRecurso;
}else{
    echo "no hace la query";
}  
 
 