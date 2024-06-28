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

        // Obtener IDs de ventas asociadas al producto
        $consulta_ventas_ids = "SELECT venta_id FROM venta WHERE carrito_producto_id IN (
            SELECT carrito_producto_id FROM carrito_producto WHERE producto_id = '$producto_id'
        )";
        $resultado_ventas_ids = mysqli_query($con, $consulta_ventas_ids);

        if (!$resultado_ventas_ids) {
            throw new Exception("Error al obtener IDs de ventas asociadas al producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar registros de envio asociados a las ventas
        while ($row = mysqli_fetch_assoc($resultado_ventas_ids)) {
            $venta_id = $row['venta_id'];

            // Eliminar registros de venta_impuesto asociados a la venta
            $consulta_venta_impuesto = "DELETE FROM venta_impuesto WHERE venta_id = '$venta_id'";
            if (!mysqli_query($con, $consulta_venta_impuesto)) {
                throw new Exception("Error al eliminar registros de venta_impuesto asociados a la venta $venta_id: " . mysqli_error($con));
            }

            // Eliminar registros de detalle_pago asociados a la venta
            $consulta_detalle_pago = "DELETE FROM detalle_pago WHERE venta_id = '$venta_id'";
            if (!mysqli_query($con, $consulta_detalle_pago)) {
                throw new Exception("Error al eliminar registros de detalle_pago asociados a la venta $venta_id: " . mysqli_error($con));
            }

            // Eliminar registros de envio asociados a la venta
            $consulta_envio = "DELETE FROM envio WHERE venta_id = '$venta_id'";
            if (!mysqli_query($con, $consulta_envio)) {
                throw new Exception("Error al eliminar registros de envio asociados a la venta $venta_id: " . mysqli_error($con));
            }
        }

        // Eliminar ventas asociadas al producto
        $consulta_ventas = "DELETE FROM venta WHERE carrito_producto_id IN (
            SELECT carrito_producto_id FROM carrito_producto WHERE producto_id = '$producto_id'
        )";
        if (!mysqli_query($con, $consulta_ventas)) {
            throw new Exception("Error al eliminar ventas asociadas al producto $producto_id: " . mysqli_error($con));
        }

        // Eliminar registros de carrito_producto asociados al producto
        $consulta_carrito = "DELETE FROM carrito_producto WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_carrito)) {
            throw new Exception("Error al eliminar registros de carrito_producto del producto $producto_id: " . mysqli_error($con));
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
