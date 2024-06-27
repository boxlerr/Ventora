<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Ecom - Marketplace Dashboard Template</title>
</head>
<body class="dark">
<?php
include_once("header_admin.php");
require_once("../conexion/connect.php");

if ($con) {
    if (isset($_GET['producto_id'])) {
        $producto_id = $_GET['producto_id'];

        $consulta = "SELECT producto_id, nombre, descripcion, precio, imagen_url FROM producto WHERE producto_id='$producto_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $fila = mysqli_fetch_array($resultado);
            echo "
                <div class='card'>
                    <div class='card-body mb-200'>
                        <div class='table-responsive'>
                            <form action='modificar_producto_2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                                <div class='form-group mb-3'>
                                    <h2>ID del Producto: {$fila['producto_id']}</h2>
                                    <input type='hidden' name='producto_id' value='{$fila['producto_id']}' class='form-control mb-3' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='nombre'>Nombre del Producto</label>
                                    <input class='form-control mb-3' value='{$fila['nombre']}' id='nombre' type='text' name='nombre' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='descripcion'>Descripción</label>
                                    <textarea class='form-control mb-3' id='descripcion' name='descripcion'>{$fila['descripcion']}</textarea>
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='precio'>Precio</label>
                                    <input class='form-control mb-3' value='{$fila['precio']}' id='precio' type='number' step='0.01' name='precio' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='imagen_url'>URL de la Imagen</label>
                                    <input class='form-control mb-3' value='{$fila['imagen_url']}' id='imagen_url' type='text' name='imagen_url' />
                                </div>
                                <input class='btn btn-primary' type='submit' value='Modificar Producto' />
                            </form>
                        </div>
                    </div>
                </div>
            ";
        } else {
            echo "Error al recuperar los datos del producto.";
        }
    } else {
        echo "ID del producto no proporcionado.";
    }
} else {
    echo "Error al conectar con la base de datos.";
}
?>
<footer class="main-footer font-xs">
    <?php include_once("footer_admin.php"); ?>
</footer>
<script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
<script src="assets/js/vendors/select2.min.js"></script>
<script src="assets/js/vendors/perfect-scrollbar.js"></script>
<script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
<script src="assets/js/vendors/chart.js"></script>
<script src="assets/js/main.js?v=1.0.0"></script>
<script src="assets/js/custom-chart.js" type="text/javascript"></script>
</body>
</html>
