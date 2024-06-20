<?php
require_once("../conexion/connect.php");

if ($con) {
    if (isset($_POST['producto_id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['precio']) && isset($_POST['imagen_url'])) {
        $producto_id = $con->real_escape_string($_POST['producto_id']);
        $nombre = $con->real_escape_string($_POST['nombre']);
        $descripcion = $con->real_escape_string($_POST['descripcion']);
        $precio = $con->real_escape_string($_POST['precio']);
        $imagen_url = $con->real_escape_string($_POST['imagen_url']);

        $consulta = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio='$precio', imagen_url='$imagen_url' WHERE producto_id='$producto_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            header("Location: page-form-product.php");
            exit();
        } else {
            echo "Error al actualizar el producto: " . mysqli_error($con);
        }
    } else {
        echo "Por favor completa todos los campos del formulario.";
    }

    $con->close();
} else {
    echo "Error al conectar con la base de datos.";
}
?>
