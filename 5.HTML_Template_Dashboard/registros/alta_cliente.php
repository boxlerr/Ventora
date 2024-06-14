<?php
//include_once("../header.php");
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $telefono = $_POST['telefono'];
    $nacionalidad = $_POST['nacionalidad'];

    // Protege la contraseña con MD5 (aunque es recomendable usar bcrypt en producción)
    $contraseña_md5 = md5($contraseña);

    // Prepara la consulta SQL
    $consulta = "INSERT INTO cliente (nombre, email, contraseña, telefono, fecha_registro, nacionalidad) 
                 VALUES ('$nombre', '$email', '$contraseña_md5', '$telefono', NOW(), '$nacionalidad')";

    // Ejecuta la consulta
    if (mysqli_query($con, $consulta)) {
        header("Location: ../usuarios.php?alta=ok");
    } else {
        echo "Error: " . $consulta . "<br>" . mysqli_error($con);
    }

    // Cierra la conexión
    mysqli_close($con);
} else {
    header("Location: ../registro.php");
}
?>