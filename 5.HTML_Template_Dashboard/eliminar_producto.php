<?php
include '../conexion/conexion.php';

if (isset($_GET['producto_id'])) {
    $producto_id = intval($_GET['producto_id']);

    // Preparar y ejecutar la consulta SQL para eliminar el producto
    $sql = "DELETE FROM producto WHERE producto_id = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("i", $producto_id);

    if ($stmt->execute()) {
        echo "Producto eliminado exitosamente";
    } else {
        echo "Error al eliminar el producto: " . $con->error;
    }

    $stmt->close();
    $con->close();

    header('Location: page-form-product.php');
    exit;
} else {
    echo "ID de producto no especificado";
}

$con->close();
?>
