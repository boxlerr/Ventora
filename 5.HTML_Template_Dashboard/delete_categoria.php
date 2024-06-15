
<?php
session_start();
require_once("../conexion/connect.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['categoria_id'])) {
        $categoria_id = $con->real_escape_string($_POST['categoria_id']);

        $sql = "DELETE FROM categoria WHERE categoria_id = '$categoria_id'";

        if ($con->query($sql) === TRUE) {
            echo "Categoría eliminada exitosamente";
        } else {
            echo "Error al eliminar la categoría: " . $con->error;
        }
    } else {
        echo "ID de categoría no proporcionado";
    }

    $con->close();
} else {
    echo "Método de solicitud no permitido";
}
?>
