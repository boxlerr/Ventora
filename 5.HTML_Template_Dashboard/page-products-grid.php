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
<body>
<?php
  include_once("header_admin.php")
  ?>
  <?php include_once("../conexion/connect.php"); ?>
  
  <section class="content-main">
    <div class="content-header">
      <div>
        <h2 class="content-title card-title">Products grid</h2>
        <p>Lorem ipsum dolor sit amet.</p>
      </div>
      <div>
        <a class="btn btn-light rounded font-md" href="#">Export</a>
        <a class="btn btn-light rounded font-md" href="#">Import</a>
        <a class="btn btn-primary btn-sm rounded" href="#">Create new</a>
      </div>
    </div>

    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <!-- Categorías de productos -->
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>All category</option>
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
          <!-- Orden de búsqueda de los productos -->
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Latest added</option>
              <option>Cheap first</option>
              <option>Most viewed</option>
            </select>
          </div>
        </div>
      </header>
      <!-- card-header end//-->

      <div class="row gx-3 mt-4">
      <?php
      $sql = "SELECT * FROM producto";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
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
                          <a class="btn btn-sm font-sm rounded btn-brand" href="modificar_producto"><i class="material-icons md-edit"></i> Edit</a>
                          <a class="btn btn-sm font-sm btn-light rounded" href="eliminar_producto"><i class="material-icons md-delete_forever"></i> Delete</a>
                        </div>
                      </div>
                    </div>';
          }
      } else {
          echo '<div class="col">0 results</div>';
      }
      ?>

      </div>
      <!-- Fin de card-body -->
    </div>
    <!-- card end//-->

    <div class="pagination-area mt-30 mb-50">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-start">
          <li class="page-item active"><a class="page-link" href="#">01</a></li>
          <li class="page-item"><a class="page-link" href="#">02</a></li>
          <li class="page-item"><a class="page-link" href="#">03</a></li>
          <li class="page-item"><a class="page-link dot" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">16</a></li>
          <li class="page-item"><a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a></li>
        </ul>
      </nav>
    </div>
  </section>

  <footer class="main-footer font-xs">
    <div class="row pb-30 pt-15">
      <div class="col-sm-6">
        <script>document.write(new Date().getFullYear())</script> &copy; Ecom - HTML Ecommerce Template .
      </div>
      <div class="col-sm-6">
        <div class="text-sm-end">All rights reserved</div>
      </div>
    </div>
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
