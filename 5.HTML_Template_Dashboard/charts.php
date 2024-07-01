<?php
include '../conexion/connect.php'; // Incluir el archivo de conexión

// Obtener cantidad de productos vendidos
$sql_productos_vendidos = "
    SELECT DATE_FORMAT(v.fecha_venta, '%Y-%m') AS mes, SUM(cp.cantidad) AS productos_vendidos
    FROM venta v
    JOIN carrito_producto cp ON v.carrito_producto_id = cp.carrito_producto_id
    GROUP BY mes
";
$result_productos_vendidos = $con->query($sql_productos_vendidos);

// Obtener cantidad de personas que visitan el sitio (asumiendo que hay una tabla `visitas`)
$sql_visitas = "
    SELECT DATE_FORMAT(fecha, '%Y-%m') AS mes, COUNT(*) AS visitas
    FROM visitas
    GROUP BY mes
";
$result_visitas = $con->query($sql_visitas);

// Obtener cantidad de ventas
$sql_ventas = "
    SELECT DATE_FORMAT(fecha_venta, '%Y-%m') AS mes, COUNT(*) AS ventas
    FROM venta
    GROUP BY mes
";
$result_ventas = $con->query($sql_ventas);

$data = [
    'meses' => [],
    'productos_vendidos' => [],
    'visitas' => [],
    'ventas' => []
];

// Procesar los resultados de productos vendidos
while($row = $result_productos_vendidos->fetch_assoc()) {
    $data['meses'][] = $row['mes'];
    $data['productos_vendidos'][] = $row['productos_vendidos'];
}

// Procesar los resultados de visitas
while($row = $result_visitas->fetch_assoc()) {
    $data['visitas'][] = $row['visitas'];
}

// Procesar los resultados de ventas
while($row = $result_ventas->fetch_assoc()) {
    $data['ventas'][] = $row['ventas'];
}

// Imprimir datos para depuración
echo '<pre>';
print_r($data);
echo '</pre>';

// Cerrar la conexión
$con->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadísticas de Ventas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="salesChart"></canvas>
    <script>
        var data = <?php echo json_encode($data); ?>;
        console.log(data); // Agregar esta línea para depuración en la consola del navegador

        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: data.meses,
                datasets: [
                    {
                        label: 'Productos Vendidos',
                        data: data.productos_vendidos,
                        borderColor: 'rgba(255, 99, 132, 1)',
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        fill: false
                    },
                    {
                        label: 'Visitas',
                        data: data.visitas,
                        borderColor: 'rgba(54, 162, 235, 1)',
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        fill: false
                    },
                    {
                        label: 'Ventas',
                        data: data.ventas,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        type: 'category',
                        labels: data.meses
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
