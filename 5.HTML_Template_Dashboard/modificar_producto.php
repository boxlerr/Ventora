<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/style.css" rel="stylesheet">
  <title>Modificar Producto</title>
</head>

<body class="dark">
  <?php
  include_once("header_admin.php");
  require_once("../conexion/connect.php");

  if ($con) {
    if (isset($_GET['producto_id'])) {
      $producto_id = $con->real_escape_string($_GET['producto_id']);

      $consulta = "SELECT producto_id, nombre, descripcion, precio, imagen_url FROM producto WHERE producto_id='$producto_id'";
      $resultado = mysqli_query($con, $consulta);

      if ($resultado) {
        $fila = mysqli_fetch_array($resultado);
        ?>
        <div class="card">
          <div class="card-body">
            <form action="modificar_producto2.php" method="post" enctype="multipart/form-data" class="admin-form">
              <div class="form-group">
                <h2>ID del Producto: <?php echo $fila['producto_id']; ?></h2>
                <input type="hidden" name="producto_id" value="<?php echo $fila['producto_id']; ?>" class="form-control mb-3" />
              </div>
              <div class="form-group">
                <label class="admin-label" for="nombre">Nombre del Producto</label>
                <input class="form-control mb-3" value="<?php echo $fila['nombre']; ?>" id="nombre" type="text" name="nombre" />
              </div>
              <div class="form-group">
                <label class="admin-label" for="descripcion">Descripción</label>
                <textarea class="form-control mb-3" id="descripcion" name="descripcion"><?php echo $fila['descripcion']; ?></textarea>
              </div>
              <div class="form-group">
                <label class="admin-label" for="precio">Precio</label>
                <input class="form-control mb-3" value="<?php echo $fila['precio']; ?>" id="precio" type="number" step="0.01" name="precio" />
              </div>
              <div class="form-group">
                <label class="admin-label" for="imagen_url">URL de la Imagen</label>
                <input class="form-control mb-3" value="<?php echo $fila['imagen_url']; ?>" id="imagen_url" type="text" name="imagen_url" />
              </div>
              <input class="btn btn-primary" type="submit" value="Modificar Producto" />
            </form>
          </div>
        </div>
        <?php
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
  <script src="assets/js/main.js?v=1.0.0"></script>
</body>

</html>
