<?php
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correo = mysqli_real_escape_string($con, $_POST['email']);
    $contraseña = mysqli_real_escape_string($con, $_POST['contraseña']);


    $consulta = "SELECT * FROM cliente WHERE correo = '$correo'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
    
        if (mysqli_num_rows($resultado) == 1) {
            $fila = mysqli_fetch_assoc($resultado);
            
            if (password_verify($contraseña, $fila['contrasena'])) {
                
                $_SESSION['id_cliente'] = $fila['cliente_id'];
                $_SESSION['nombre'] = $fila['nombre'];
                $_SESSION['correo'] = $fila['correo']; 
                
                header("Location: ../index.php");
                exit();
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "No se encontró ningún usuario con ese correo";
        }
    } else {
        echo "Error al consultar la base de datos: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>
