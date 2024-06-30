<?php
session_start();
require_once("../conexion/connect.php");
?>

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
    <title>Productos</title>
</head>

<body class="dark">
    <?php include_once("header_admin.php"); ?>

    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Lista de productos</h2>
            </div>
            <div>
                <a class="btn btn-primary btn-sm rounded" href="page-form-product-1.php">Crear un producto</a>
            </div>
        </div>

        <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input class="form-control" type="text" placeholder="Buscar...">
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Todas las categorías</option>
                            <?php
                            // Obtener categorías desde la base de datos
                            $sql_categorias = "SELECT nombre FROM categoria";
                            $result_categorias = $con->query($sql_categorias);

                            if ($result_categorias->num_rows > 0) {
                                while ($row = $result_categorias->fetch_assoc()) {
                                    $categoria_nombre = htmlspecialchars($row['nombre']);
                                    echo '<option>' . $categoria_nombre . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </header>

            <div class="row gx-3 mt-4">
                <?php
                $sql = "SELECT * FROM producto";
                $result = $con->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $producto_id = $row['producto_id'];
                        $nombre = htmlspecialchars($row['nombre']);
                        $descripcion = htmlspecialchars($row['descripcion']);
                        $precio = number_format($row['precio'], 2);
                        $imagen_url = $row['imagen_url'];

                        echo '<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                                <div class="card card-product-grid">
                                    <a class="img-wrap" href="#"><img src="' . $imagen_url . '" alt="' . $nombre . '"></a>
                                    <div class="info-wrap">
                                        <a class="title text-truncate" href="#">' . $nombre . '</a>
                                        <div class="price mb-2">$' . $precio . '</div>
                                        <a class="btn btn-sm font-sm rounded btn-brand" href="modificar_producto.php?producto_id=' . $producto_id . '"><i class="material-icons md-edit"></i> Editar</a>
                                        <a class="btn btn-sm font-sm btn-light rounded" href="eliminar_producto.php?producto_id=' . $producto_id . '"><i class="material-icons md-delete_forever"></i> Eliminar</a>
                                    </div>
                                </div>
                            </div>';
                    }
                } else {
                    echo '<div class="col">No hay resultados</div>';
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="main-footer font-xs">
        <?php include_once("footer_admin.php") ?>
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
<?php $con->close(); ?>
