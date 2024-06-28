<?php
require_once("../conexion/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['producto_id'])) {
    $producto_id = mysqli_real_escape_string($con, $_GET['producto_id']);

    if ($producto_id <= 0) {
        $_SESSION['error'] = "ID de producto no válido.";
        header("Location: page-products-grid.php");
        exit();
    }

    // Iniciar una transacción
    $con->begin_transaction();

    try {
        // Eliminar registros de resena asociados al producto
        $consulta_resenas = "DELETE FROM resena WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_resenas)) {
            throw new Exception("Error al eliminar resenas del producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar registros de historial_precio asociados al producto
        $consulta_historial = "DELETE FROM historial_precio WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_historial)) {
            throw new Exception("Error al eliminar historial de precios del producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar descuentos asociados al producto
        $consulta_descuentos = "DELETE FROM descuento WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_descuentos)) {
            throw new Exception("Error al eliminar descuentos del producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar registros de inventario asociados al producto
        $consulta_inventario = "DELETE FROM inventario WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_inventario)) {
            throw new Exception("Error al eliminar inventario del producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar el producto
        $consulta_eliminar_producto = "DELETE FROM producto WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_eliminar_producto)) {
            throw new Exception("Error al eliminar el producto $producto_id: " . mysqli_error($con));
        }

        // Confirmar la transacción
        $con->commit();
        $_SESSION['message'] = "Producto eliminado exitosamente.";
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        $con->rollback();
        $_SESSION['error'] = "Error al eliminar el producto: " . $e->getMessage();
    }
} else {
    $_SESSION['error'] = "Solicitud inválida.";
}

// Redireccionar siempre al finalizar la lógica de negocio
header("Location: page-products-grid.php");
exit();
?>
