<?php
require_once("functions.php");

// Mostrar productos
$productos = getProductos();
if ($productos->num_rows > 0) {
    echo '<div class="seccion-productos"><h2>Productos</h2><table><thead><tr><th>Nombre</th><th>Descripción</th><th>Precio</th><th>Categoría</th><th>Imagen</th><th>Rating</th></tr></thead><tbody>';
    while ($row = $productos->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['descripcion']) . '</td>';
        echo '<td>$' . number_format($row['precio'], 2, '.', ',') . '</td>';
        echo '<td>' . htmlspecialchars($row['categoria']) . '</td>';
        echo '<td><img src="' . htmlspecialchars($row['imagen']) . '" alt="' . htmlspecialchars($row['nombre']) . '" /></td>';
        echo '<td>';
        $rating = $row['rating'];
        for ($i = 1; $i <= 5; $i++) {
            if ($i <= $rating) {
                echo '<img src="assets/imgs/template/icons/star.svg" alt="star filled">';
            } else {
                echo '<img src="assets/imgs/template/icons/star-outline.svg" alt="star outline">';
            }
        }
        echo '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay productos cargados</p>";
}

// Mostrar ventas
$ventas = getVentas();
if ($ventas->num_rows > 0) {
    echo '<div class="seccion-ventas"><h2>Ventas</h2><table><thead><tr><th>ID Venta</th><th>Cliente ID</th><th>Dirección de Envío ID</th><th>Fecha de Venta</th><th>Total</th><th>Subtotal</th><th>Estado</th><th>Carrito Producto ID</th></tr></thead><tbody>';
    while ($row = $ventas->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['venta_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['cliente_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['direccion_envio_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['fecha_venta']) . '</td>';
        echo '<td>' . number_format($row['total'], 2, '.', ',') . '</td>';
        echo '<td>' . number_format($row['subtotal'], 2, '.', ',') . '</td>';
        echo '<td>' . htmlspecialchars($row['estado']) . '</td>';
        echo '<td>' . htmlspecialchars($row['carrito_producto_id']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay ventas cargadas</p>";
}

// Mostrar empresas
$empresas = getEmpresas();
if ($empresas->num_rows > 0) {
    echo '<div class="seccion-empresas"><h2>Empresas</h2><table><thead><tr><th>ID Empresa</th><th>Logo</th><th>Nombre</th><th>Teléfono</th><th>Celular</th><th>Dirección</th><th>Correo</th></tr></thead><tbody>';
    while ($row = $empresas->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['id_empresa']) . '</td>';
        echo '<td><img src="' . htmlspecialchars($row['logo']) . '" alt="' . htmlspecialchars($row['nombre']) . '"></td>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
        echo '<td>' . htmlspecialchars($row['celular']) . '</td>';
        echo '<td>' . htmlspecialchars($row['direccion']) . '</td>';
        echo '<td>' . htmlspecialchars($row['correo']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay empresas cargadas</p>";
}

// Mostrar categorías
$categorias = getCategorias();
if ($categorias->num_rows > 0) {
    echo '<div class="seccion-categorias"><h2>Categorías</h2><table><thead><tr><th>ID Categoría</th><th>Nombre</th></tr></thead><tbody>';
    while ($row = $categorias->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['categoria_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay categorías cargadas</p>";
}

// Mostrar inventarios
$inventarios = getInventarios();
if ($inventarios->num_rows > 0) {
    echo '<div class="seccion-inventarios"><h2>Inventarios</h2><table><thead><tr><th>ID Inventario</th><th>ID Producto</th><th>Cantidad</th><th>Fecha Agregado</th><th>Cantidad Ingresada</th></tr></thead><tbody>';
    while ($row = $inventarios->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['inventario_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['producto_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['cantidad']) . '</td>';
        echo '<td>' . htmlspecialchars($row['fecha_agregado']) . '</td>';
        echo '<td>' . htmlspecialchars($row['cantidad_ingresada']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay inventarios cargados</p>";
}

// Mostrar clientes
$clientes = getClientes();
if ($clientes->num_rows > 0) {
    echo '<div class="seccion-clientes"><h2>Clientes</h2><table><thead><tr><th>ID Cliente</th><th>Nombre</th><th>Correo</th><th>Teléfono</th><th>Fecha Registro</th><th>Fecha Nacimiento</th><th>Nacionalidad</th></tr></thead><tbody>';
    while ($row = $clientes->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($row['cliente_id']) . '</td>';
        echo '<td>' . htmlspecialchars($row['nombre']) . '</td>';
        echo '<td>' . htmlspecialchars($row['correo']) . '</td>';
        echo '<td>' . htmlspecialchars($row['telefono']) . '</td>';
        echo '<td>' . htmlspecialchars($row['fecha_registro']) . '</td>';
        echo '<td>' . htmlspecialchars($row['fecha_nacimiento']) . '</td>';
        echo '<td>' . htmlspecialchars($row['nacionalidad']) . '</td>';
        echo '</tr>';
    }
    echo '</tbody></table></div>';
} else {
    echo "<p>No hay clientes cargados</p>";
}
?>
