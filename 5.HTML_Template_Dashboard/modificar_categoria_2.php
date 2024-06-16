<?php
require_once("../conexion/connect.php");

if ($con) {
    if (isset($_POST['categoria_id']) && isset($_POST['nombre']) && isset($_POST['descripcion']) && isset($_POST['slug'])) {
        $categoria_id = $con->real_escape_string($_POST['categoria_id']);
        $nombre = $con->real_escape_string($_POST['nombre']);
        $descripcion = $con->real_escape_string($_POST['descripcion']);
        $slug = $con->real_escape_string($_POST['slug']);

        $consulta = "UPDATE categoria SET nombre='$nombre', descripcion='$descripcion', slug='$slug' WHERE categoria_id='$categoria_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            header("Location: page-categories.php");
            exit();
        } else {
            echo "Error al actualizar la categoría: " . mysqli_error($con);
        }
    } else {
        echo "Por favor completa todos los campos del formulario.";
    }

    $con->close();
} else {
    echo "Error al conectar con la base de datos.";
}
?>
