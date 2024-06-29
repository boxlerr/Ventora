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
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Ecom - Marketplace Dashboard Template</title>
</head>

<body class="dark">
<?php

include_once("header_admin.php");

require_once("../conexion/connect.php");

if ($con) {
    if (isset($_GET['categoria_id'])) {
        $categoria_id = $_GET['categoria_id'];

        $consulta = "SELECT categoria_id, nombre, descripcion, slug FROM categoria WHERE categoria_id='$categoria_id'";
        $resultado = mysqli_query($con, $consulta);

        if ($resultado) {
            $fila = mysqli_fetch_array($resultado);
            echo "
                <div class='card'>
                    <div class='card-body mb-200'>
                        <div class='table-responsive'>
                            <form action='modificar_categoria_2.php' method='post' enctype='multipart/form-data' class='admin-form'>
                                <div class='form-group mb-3'>
                                    <h2>ID de la Categoría: {$fila['categoria_id']}</h2>
                                    <input type='hidden' name='categoria_id' value='{$fila['categoria_id']}' class='form-control mb-3' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='nombre'>Nombre de la Categoría</label>
                                    <input class='form-control mb-3' value='{$fila['nombre']}' id='nombre' type='text' name='nombre' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='descripcion'>Descripción</label>
                                    <input class='form-control mb-3' value='{$fila['descripcion']}' id='descripcion' type='text' name='descripcion' />
                                </div>
                                <div class='form-group mb-3'>
                                    <label class='admin-label' for='slug'>Slug</label>
                                    <input class='form-control mb-3' value='{$fila['slug']}' id='slug' type='text' name='slug' />
                                </div>
                                <input class='btn btn-primary' type='submit' value='Modificar Categoría' />
                            </form>
                        </div>
                    </div>
                </div>
            ";
        } else {
            echo "Error al recuperar los datos de la categoría.";
        }
    } else {
        echo "ID de categoría no proporcionado.";
    }
} else {
    echo "Error al conectar con la base de datos.";
}
?>
<footer class="main-footer font-xs">
    <?php
    include_once("footer_admin.php")
    ?>
  </footer>
  </main>
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