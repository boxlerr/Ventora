<?php
session_start();
require_once("../conect/conect.php");

if ($con) {
    
    $usuario=$_POST['usuario1'];
    $pass=$_POST['pass1'];

    $consulta = "SELECT * FROM usuarios WHERE nombre='$usuario' AND contraseña=MD5('$pass')";

    $resultado=mysqli_query($con, $consulta);

    $filas = mysqli_fetch_array($resultado);


    if($filas['tipo'] == 'admin'){

        $_SESSION = $filas;
        header("Location: ../admin/index.php");

    }else{

        $_SESSION = $filas;
        header("Location: ../permisos/index.php");
        
    }

    
    if($filas == NULL){

     header("Location: ../usuarios.php?error=ok");

    }

    if($filas['estado'] == 'baneado'){

     header("Location: ../usuarios.php?ban=ok");

    }


}

include_once("../footer.php");
?> 