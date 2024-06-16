<?php
session_start();
require_once("../conexion/connect.php");

if (isset($_GET['categoria_id'])) {
    $categoria_id = $con->real_escape_string($_GET['categoria_id']);

    $sql = "DELETE FROM categoria WHERE categoria_id = '$categoria_id'";

    if ($con->query($sql) === TRUE) {
        $_SESSION['message'] = "Categoría eliminada exitosamente";
    } else {
        $_SESSION['error'] = "Error al eliminar la categoría: " . $con->error;
    }

    $con->close();
} else {
    $_SESSION['error'] = "ID de categoría no proporcionado";
}

// Redireccionar a page-categories.php después de procesar la eliminación
header("Location: page-categories.php");
exit();
?>
