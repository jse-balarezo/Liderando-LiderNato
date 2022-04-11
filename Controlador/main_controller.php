<?php
require_once '../Modelo/conexion.php';
require_once '../Modelo/operaciones.php';

switch ($_POST['accion']) {
    case 1: {
            if (isset($_POST['correo'])) {
                $nombre = $_POST['nombre']; //recibe el dato correo del formulario
                $correo = $_POST['correo']; //recibe el dato nombre del formulario
                $password = $_POST['password'];
                $obj = new Cusuario(); //instancia de la clase usuario
                if($obj->insertar($nombre, $correo, $password)==true){
                    header("Location:../Vista/registroValido.php");
                }
                else{
                    header("Location:../Vista/registroError.php");
                }
            } else if ($ver=pg_query(Connection::conectar(),"select * from registro where correo='$correo'")) {
                header("Location:../Vista/registroError.php");
            }
        }
        break;
    case 2: {
            require_once '../Vista/login.php';
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            $obj = new Cusuario();
            $obj->validar($correo, $password);
        }
}
