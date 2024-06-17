<?php
require_once("../../conexion/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $correo = mysqli_real_escape_string($con, $_POST['email']);
    $contraseña = mysqli_real_escape_string($con, $_POST['contraseña']);
    $contraseña_confirm = mysqli_real_escape_string($con, $_POST['confirmar_contraseña']);
    $telefono = mysqli_real_escape_string($con, $_POST['telefono']);

    // Verificar si las contraseñas coinciden
    if ($contraseña !== $contraseña_confirm) {
        echo "<script>alert('Las contraseñas no coinciden.'); window.history.back();</script>";
        exit();
    }

    // Verificar si el correo ya está en uso
    $consulta_correo = "SELECT * FROM administrador WHERE correo = '$correo'";
    $resultado_correo = mysqli_query($con, $consulta_correo);

    if (mysqli_num_rows($resultado_correo) > 0) {
        echo "<script>alert('El correo electrónico ya está en uso. Por favor, use otro correo.'); window.history.back();</script>";
        exit();
    }

    // Encriptar la contraseña
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Insertar datos en la base de datos
    $consulta = "INSERT INTO administrador (nombre, correo, contrasena, telefono, fecha_registro) 
                VALUES ('$nombre', '$correo', '$contraseña_hash', '$telefono', NOW())";

    if (mysqli_query($con, $consulta)) {
        header("Location: ../index.php?alta=ok");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
} else {
    header("Location: ../index.php");
    exit();
}
?>
