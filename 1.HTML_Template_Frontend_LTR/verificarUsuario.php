<?php
include_once("consultas_bd.php");

if(isset($_POST['iniciarSesion'])){
    if(isset($_POST['email']) && isset($_POST['clave'])){
        $email = $_POST['email'];
        $clave = $_POST['clave'];
        $cliente = getCliente($email,$clave);
        if($cliente){
            session_start();
            $_SESSION["usuario"] = $cliente["cliente_id"];
            header("location: index-10.php");
            // exit();
        } else{
            header("location: page-login.php?error=Email o Contraseña incorrectos");
        }
    }
}

if(isset($_POST['crear'])){
    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['fecha_nacimiento']) && isset($_POST['nacionalidad']) && isset($_POST['contrasena'])){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $fecha_nacimiento = $_POST['fecha_nacimiento'];
        $nacionalidad = $_POST['nacionalidad'];
        $contrasena = $_POST['contrasena'];
        $cliente = getClienteEmail($email);
        if($cliente){
            header("location: page-register.php?error=Email en uso");
        } else{
            $id = agregarCliente($nombre,$email,$telefono,$fecha_nacimiento,$nacionalidad,$contrasena);
            crearCarrito($id);
            session_start();
            $_SESSION["usuario"] = htmlentities($id);
            header("location: index-10.php");
            exit();
        }
    }
}
