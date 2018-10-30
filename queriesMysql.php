<?php
 
class queriesMysql{

    // Query que valida al usuario
    public function validateLoginUser(&$link, string $user, string $password){
        //var_dump($user,$password);
        $queryValidateLogin = "
            SELECT
                usuario,
                password
            FROM
                usuarios
            WHERE
                usuario LIKE '$user' AND password LIKE '$password'";
        /* @var $validateLogin type */
        $validateLogin = mysqli_query($link, $queryValidateLogin);
        
        if(mysqli_num_rows($validateLogin) > 0){
            return $validateLogin;
        }else{
            return false;
        }
    }
    
    // Query que devuelve todos los recursos INMUEBLES
    public function getRecursosInm (&$link){
        $recurso = [];
        $queryGetRecurso="
            SELECT
                recurso,
                id_recurso
            FROM
                recursos
            WHERE
                tipo = 1 AND disponible = 1";
        $getRecurso = mysqli_query($link, $queryGetRecurso);
        
        while ($row = mysqli_fetch_array($getRecurso)) {
            array_push($recurso, $row);
        }
       return $recurso;
        
    }
    
    // Query que devuelve una lista con todos los recuross ELECTRONICOS
    public function getRecursosElec(&$link){
        $recurso = [];
        $queryGetRecurso="
            SELECT
                recurso,
                id_recurso
            FROM
                recursos
            WHERE
                tipo = 2 AND disponible = 1";
        $getRecurso = mysqli_query($link, $queryGetRecurso);
        
        while ($row = mysqli_fetch_array($getRecurso)) {
            array_push($recurso, $row);
        }
       return $recurso;
    }
    
    // Query que recibe el usuario y devuelve todas sus reservas
    public function getInfoReservas(&$link, string $usuario ){
        $reserva = [];
        $queryGetInfoReserva="
            SELECT
                reserva.usuario_fk, reserva.id_recurso_fk, recursos.recurso, recursos.tipo, 
                reserva.fecha_entrega, reserva.fecha_devolucion, reserva.id_reserva
            FROM
                reserva INNER JOIN recursos ON reserva.id_recurso_fk = recursos.id_recurso
            WHERE
                usuario_fk = '$usuario'
            ORDER BY
                fecha_devolucion ASC";
        $getReserva = mysqli_query($link,$queryGetInfoReserva);
        if($getReserva){
            while ($row = mysqli_fetch_array($getReserva)){
                array_push($reserva, $row);
            }
        }
        //var_dump($reserva);die;
        return $reserva;
    }
  
    // Query que hace el update en el recurso reservado
    public function insertReserva(&$link,string $usuario, int $recurso){
     
       $queryInsertReserva="INSERT INTO reserva(usuario_fk,id_recurso_fk,fecha_entrega) VALUES('$usuario',$recurso,NOW())";
       $insertReserva = mysqli_query($link, $queryInsertReserva);
       echo $insertReserva;
       return true;
       
    }
    
    // Query para poner el disponible a false en recrusos despues de pedirlo
    public function updateRecursos(&$link, int $recurso){
        $queryUpdateRecurso ="
            UPDATE recursos
            SET disponible = 0 WHERE id_recurso = $recurso";
        echo $queryUpdateRecurso;
        mysqli_query($link, $queryUpdateRecurso);
        return "Recurso actualizado";
    }
    
    // Query para devolver el recurso y poner la disponibilidad a true
    public function devolverRecurso(&$link, string $recurso){
        $queryDevolverRecurso="
            UPDATE recursos
            SET disponible = 1 WHERE recurso = '$recurso'";
       $devolverRecurso = mysqli_query($link, $queryDevolverRecurso);
       if($devolverRecurso){
           return "Pasa la query";
       }else{
           return "no pasa la query";
       }
    }
   /* 
    // Query que borra el registro al devolver un recurso
    public function borrarRegistro(&$link, string $usuario, string $recurso){
        $queryBorrarRegistro="
            DELETE FROM reservas WHERE usuario = '$usuario' AND recurso = '$recurso'";
        echo  "DELETE FROM reservas WHERE usuario = '$usuario' AND recurso = '$recurso'";
        $borrarRegistro = mysqli_query($link, $queryBorrarRegistro);
        if($borrarRegistro){
            return "hace la query borrar";
        }else{
            return "no hace la query borrar";
        }
    }
    */
    //Query que devuelve el id del recurso dando el nombre
    public function getIdRecurso(&$link, string $recurso){
        $queryGetIdRecurso="
            SELECT
                id_recurso
            FROM 
                recursos
            WHERE recurso = '$recurso'";
        $QueryIdRecurso = mysqli_query($link, $queryGetIdRecurso);
        $id_recurso = mysqli_fetch_array($QueryIdRecurso);
        return $id_recurso[0];
    }
   
    //Query para poner fecha fin a reserva
    public function finalizarReserva(&$link, int $id_recurso, int $id_reserva){
        $queryFinalizarReserva="
            UPDATE reserva
            SET fecha_devolucion = NOW() 
            WHERE id_recurso_fk = $id_recurso AND id_reserva = $id_reserva";
        $finalizarReserva = mysqli_query($link, $queryFinalizarReserva);
        if($finalizarReserva) return true;
    }
    
    //Query para sacar la info de los recursos para el modal
    public function getInfoRecurso(&$link, int $id_recurso){
        $queryGetInfoRecurso="
            SELECT descripcion, imagen FROM recursos WHERE id_recurso = $id_recurso";
        $QueryInfoRecurso = mysqli_query($link, $queryGetInfoRecurso);
        $infoRecurso = mysqli_fetch_array($QueryInfoRecurso);
        return $infoRecurso;
    }
}