<?php
include_once("consultas_bd.php");

if(isset($_POST['iniciarSesion'])){
    if(isset($_POST['email']) && isset($_POST['clave'])){
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $clave = mysqli_real_escape_string($con, $_POST['clave']);
        // $email = $_POST['email'];
        // $clave = $_POST['clave'];
        $cliente = getCliente($email,$clave);
        if($cliente){
            session_start();
            $_SESSION["usuario"] = $cliente["cliente_id"];
            header("location: index.php");
            // exit();
        } else{
            header("location: page-login.php?error=Email o Contraseña incorrectos");
        }
    }
}

if(isset($_POST['crear'])){
    if(isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['telefono']) && isset($_POST['fecha_nacimiento']) && isset($_POST['nacionalidad']) && isset($_POST['contrasena'])){
        $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
        $fecha_nacimiento = mysqli_real_escape_string($con, $_POST['fecha_nacimiento']);
        $nacionalidad = mysqli_real_escape_string($con, $_POST['nacionalidad']);
        $contrasena = mysqli_real_escape_string($con, $_POST['contrasena']);
        // $nombre = $_POST['nombre']; 
        // $email = $_POST['email'];
        // $telefono = $_POST['telefono'];
        // $fecha_nacimiento = $_POST['fecha_nacimiento'];
        // $nacionalidad = $_POST['nacionalidad'];
        // $contrasena = $_POST['contrasena'];
        $cliente = getClienteEmail($email);
        if($cliente){
            header("location: page-register.php?error=Email en uso");
        } else{
            $id = agregarCliente($nombre,$email,$telefono,$fecha_nacimiento,$nacionalidad,$contrasena);
            crearCarrito($id);
            crearWislist($id);
            session_start();
            $_SESSION["usuario"] = htmlentities($id);
            header("location: index.php");
            exit();
        }
    }
}
