<?php
require_once("../conexion/connect.php");
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['categoria_id'])) {
    $categoria_id = mysqli_real_escape_string($con, $_GET['categoria_id']);

    // Obtener todos los productos relacionados con la categoría
    $consulta_productos = "SELECT producto_id FROM producto WHERE categoria_id = '$categoria_id'";
    $resultado_productos = mysqli_query($con, $consulta_productos);

    if (!$resultado_productos) {
        $_SESSION['error'] = "Error al obtener los productos relacionados: " . mysqli_error($con);
        header("Location: page-categories.php");
        exit();
    }

    // Recorrer todos los productos y eliminar registros en las tablas dependientes
    while ($row = mysqli_fetch_assoc($resultado_productos)) {
        $producto_id = $row['producto_id'];

        // Eliminar registros de resena asociados al producto
        $consulta_resenas = "DELETE FROM resena WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_resenas)) {
            $_SESSION['error'] = "Error al eliminar resenas del producto $producto_id: " . mysqli_error($con);
            header("Location: page-categories.php");
            exit();
        }

        // Eliminar registros de historial_precio asociados al producto
        $consulta_historial = "DELETE FROM historial_precio WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_historial)) {
            $_SESSION['error'] = "Error al eliminar historial de precios del producto $producto_id: " . mysqli_error($con);
            header("Location: page-categories.php");
            exit();
        }

        // Eliminar descuentos asociados al producto
        $consulta_descuentos = "DELETE FROM descuento WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_descuentos)) {
            $_SESSION['error'] = "Error al eliminar descuentos del producto $producto_id: " . mysqli_error($con);
            header("Location: page-categories.php");
            exit();
        }

        // Eliminar registros de inventario asociados al producto
        $consulta_inventario = "DELETE FROM inventario WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_inventario)) {
            $_SESSION['error'] = "Error al eliminar inventario del producto $producto_id: " . mysqli_error($con);
            header("Location: page-categories.php");
            exit();
        }

        // Eliminar el producto
        $consulta_eliminar_producto = "DELETE FROM producto WHERE producto_id = '$producto_id'";
        if (!mysqli_query($con, $consulta_eliminar_producto)) {
            $_SESSION['error'] = "Error al eliminar el producto $producto_id: " . mysqli_error($con);
            header("Location: page-categories.php");
            exit();
        }
    }

    // Una vez eliminados todos los productos, eliminar la categoría
    $consulta_eliminar_categoria = "DELETE FROM categoria WHERE categoria_id = '$categoria_id'";
    if (mysqli_query($con, $consulta_eliminar_categoria)) {
        $_SESSION['message'] = "Categoría y productos relacionados eliminados exitosamente.";
    } else {
        $_SESSION['error'] = "Error al eliminar la categoría: " . mysqli_error($con);
    }
} else {
    $_SESSION['error'] = "Solicitud inválida.";
}

// Redireccionar siempre al finalizar la lógica de negocio
header("Location: page-categories.php");
exit();
?>
