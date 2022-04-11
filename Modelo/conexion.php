<?php 
class Connection{
    public static function conectar(){
        try {
            $con=pg_connect('host=localhost port=5432 dbname=postgres user=postgres password=133010')
            or die('no se puedo conectar:'.pg_last_error());
            return $con;
        } catch (Exception $e) {
           echo $e->getMessage();
        }
    }
}
?>