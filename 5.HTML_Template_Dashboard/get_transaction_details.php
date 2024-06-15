<?php
include '../conexion/connect.php';

if (isset($_GET['pago_id'])) {
    $pago_id = $con->real_escape_string($_GET['pago_id']);
    $sql = "SELECT * FROM detalle_pago WHERE pago_id = '$pago_id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<h6 class="mt-15">Transaction Details</h6>';
        echo '<hr>';
        echo '<h6 class="mb-0">Transaction ID:</h6>';
        echo '<p>' . htmlspecialchars($row['pago_id']) . '</p><br>';
        echo '<h6 class="mb-0">Sale ID:</h6>';
        echo '<p>' . htmlspecialchars($row['venta_id']) . '</p><br>';
        echo '<h6 class="mb-0">Payment Method:</h6>';
        echo '<p>' . htmlspecialchars($row['metodo_pago']) . '</p><br>';
        echo '<h6 class="mb-0">Payment Status:</h6>';
        echo '<p>' . htmlspecialchars($row['estado_pago']) . '</p><br>';
        echo '<h6 class="mb-0">Payment Date:</h6>';
        echo '<p>' . htmlspecialchars($row['fecha_pago']) . '</p><br>';
        echo '<h6 class="mb-0">Total Payment:</h6>';
        echo '<p>$' . htmlspecialchars(number_format($row['total_pago'], 2)) . '</p><br>';
    } else {
        echo '<p>No se encontraron detalles para esta transacción.</p>';
    }
} else {
    echo '<p>ID de transacción no especificado.</p>';
}

$con->close();
?>
