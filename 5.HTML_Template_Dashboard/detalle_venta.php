<?php
require_once("../conexion/connect.php");

if (isset($_GET['pago_id'])) {
    $pago_id = $con->real_escape_string($_GET['pago_id']);

    // Consulta para obtener los detalles de la venta
    $sql = "SELECT v.venta_id, v.cliente_id, v.direccion_envio_id, v.fecha_venta, v.total, v.subtotal, v.estado, v.carrito_producto_id,
                   c.nombre AS nombre_cliente, c.correo, 
                   d.direccion, d.ciudad, d.estado, d.codigo_postal, d.pais,
                   GROUP_CONCAT(p.nombre SEPARATOR ', ') AS productos
            FROM detalle_pago dp
            JOIN venta v ON dp.venta_id = v.venta_id
            JOIN cliente c ON v.cliente_id = c.cliente_id
            JOIN direccion_envio d ON v.direccion_envio_id = d.direccion_envio_id
            JOIN carrito_producto cp ON v.carrito_producto_id = cp.carrito_producto_id
            JOIN producto p ON cp.producto_id = p.producto_id
            WHERE dp.pago_id = '$pago_id'
            GROUP BY v.venta_id";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $venta = $result->fetch_assoc();
        echo json_encode($venta); // Devolver los datos como JSON
    } else {
        echo "No se encontraron detalles de venta para el pago ID: $pago_id";
    }

    $con->close();
} else {
    echo "Pago ID no proporcionado";
}
?>
