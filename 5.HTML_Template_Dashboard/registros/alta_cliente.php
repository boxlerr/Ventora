<?php
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contraseña = mysqli_real_escape_string($con, $_POST['contraseña']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);
    $nacionalidad = mysqli_real_escape_string($con, $_POST['nacionalidad']);

    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    $consulta = "INSERT INTO cliente (nombre, email, contraseña, telefono, fecha_registro, nacionalidad) 
                VALUES ('$nombre', '$email', '$contraseña_hash', '$telefono', NOW(), '$nacionalidad')";

    if (mysqli_query($con, $consulta)) {
    
        header("Location: ../usuarios.php?alta=ok");
        exit(); 
    } else {
        // Mostrar error si la consulta falla
        echo "Error: " . $consulta . "<br>" . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    
    header("Location: ../registro.php");
    exit(); 
}
?>
