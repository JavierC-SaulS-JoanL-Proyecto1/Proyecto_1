<?php
 
class queriesMysql{

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
    
    public function getRecursosInm (&$link){
        $recurso = [];
        $queryGetRecurso="
            SELECT
                recurso
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
}