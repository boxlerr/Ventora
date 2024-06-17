<?php
include_once("consultas_bd.php");

if(isset($_POST['iniciarSesion'])){
    if(isset($_POST['email']) && isset($_POST['clave'])){
        $email = $_POST['email'];
        $clave = $_POST['clave'];
    }
}

$cliente = getCliente($email,$clave);
if($cliente){
    session_start();
    $_SESSION["usuario"] = htmlentities($cliente['nombre']);
    header("location: index-10.php");
    exit();
} else{
    header("location: page-login.php?error=Email o Contraseña incorrectos");
}