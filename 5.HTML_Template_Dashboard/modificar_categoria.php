<?php
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['categoria_id'], $_POST['nombre'], $_POST['descripcion'], $_POST['slug'])) {
        $categoria_id = $con->real_escape_string($_POST['categoria_id']);
        $nombre = $con->real_escape_string($_POST['nombre']);
        $descripcion = $con->real_escape_string($_POST['descripcion']);
        $slug = $con->real_escape_string($_POST['slug']);

        $sql = "UPDATE categoria SET nombre='$nombre', descripcion='$descripcion', slug='$slug' WHERE categoria_id='$categoria_id'";

        if ($con->query($sql) === TRUE) {
            echo "Categoría actualizada exitosamente";
        } else {
            echo "Error al actualizar la categoría: " . $con->error;
        }
    } else {
        echo "Por favor completa todos los campos del formulario";
    }

    $con->close();
} else {
    echo "Método de solicitud no permitido";
}
?>