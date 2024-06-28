<?php
// Incluir el archivo de conexión
include('../conexion/connect.php');

// Verificar si se ha recibido el ID del envío a eliminar
if (isset($_GET['id'])) {
    $envio_id = $_GET['id'];

    // Preparar la consulta SQL para eliminar el registro
    $sql = "DELETE FROM envio WHERE envio_id = ?";

    // Preparar la declaración
    if ($stmt = $con->prepare($sql)) {
        // Enlazar las variables a la declaración preparada como parámetros
        $stmt->bind_param("i", $envio_id);

        // Intentar ejecutar la declaración
        if ($stmt->execute()) {
            // Redireccionar a la página de lista de envíos con un mensaje de éxito
            header("Location: page-orders-1?message=success");
            exit();
        } else {
            // Redireccionar a la página de lista de envíos con un mensaje de error
            header("Location: page-orders-1?message=error");
            exit();
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        // Redireccionar a la página de lista de envíos con un mensaje de error
        header("Location: page-orders-1?message=error");
        exit();
    }
} else {
    // Redireccionar a la página de lista de envíos si no se recibió el ID del envío
    header("Location: lista_envios.php");
    exit();
}

// Cerrar la conexión
$con->close();
?>
