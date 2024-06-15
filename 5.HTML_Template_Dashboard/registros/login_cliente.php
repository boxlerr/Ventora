<?php
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $contraseña = mysqli_real_escape_string($con, $_POST['contraseña']);

    // Buscar al cliente por email en la base de datos
    $consulta = "SELECT * FROM cliente WHERE email = '$email'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        // Verificar si se encontró un usuario
        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_assoc($resultado);
            // Verificar la contraseña
            if (password_verify($contraseña, $fila['contraseña'])) {
                // Contraseña correcta, iniciar sesión
                $_SESSION['id_cliente'] = $fila['id_cliente'];
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['email'] = $fila['email'];
                // Redirigir al usuario a una página de bienvenida o perfil
                header("Location: ../bienvenida.php");
                exit();
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "No se encontró ningún usuario con ese email";
        }
    } else {
        echo "Error al consultar la base de datos: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
