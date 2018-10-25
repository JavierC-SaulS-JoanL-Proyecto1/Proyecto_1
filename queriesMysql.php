<?php
 
class queriesMysql{
    // query de prueba. por si las cosas se tuercen
    public function queryPrueba(&$link){

        $queryPrueba = "SELECT * FROM usuarios";
        $query = mysqli_query($link, $queryPrueba);
        if ($query) {
            return $query;
        }
    }
    
    public function validateLoginUser(&$link, string $user, string $password){
        $queryValidateLogin = "
            SELECT
                usuario,
                password
            FROM
                usuarios
            WHERE
                usuario LIKE $user && password LIKE $password";
        /* @var $validateLogin type */
        $validateLogin = mysqli_query($link, $queryValidateLogin);
        var_dump($validateLogin);
        if(mysqli_num_rows($validateLogin) > 0){
            return $validateLogin;
        }else{
            return $validateLogin;
        }
    }
}