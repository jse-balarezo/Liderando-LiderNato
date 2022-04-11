<?php
include_once('conexion.php');
class Cusuario
{
    function validar($correo, $password)
    {
        $resultado = pg_query(Connection::conectar(), "select nombre from usuarios where correo='$correo' and contraseña='$password'");
        //return $resultado;
        $datos = pg_numrows($resultado);
        if ($datos > 0) {
            $usuario = pg_fetch_all($resultado);
            header("location:../Vista/index.php?usuario=" . $usuario[0]['nombre']);
        } else header("Location:../Vista/registroError.php");
        
       
        
        pg_freeresult($resultado);
    }
    function insertar($nombre,$correo,$password){   
        return pg_query(Connection::conectar(),"insert into usuarios (nombre,correo,contraseña) values('$nombre','$correo','$password')");
        // $connexion= Connection::conectar();//llamar un metodo estatico
        
    }
}
