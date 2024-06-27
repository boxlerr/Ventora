<?php
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
  <title>Ecom - Marketplace Dashboard Template</title>
</head>
<body class="dark">
  <?php
  include_once("header_admin.php");
  ?>
  <section class="content-main">
    <div class="row">
      <div class="col-9">
        <div class="content-header">
          <h2 class="content-title">Add New Product</h2>
          <div>
            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card mb-4">
          <div class="card-header">
            <h4>Producto</h4>
          </div>
          <div class="card-body">
            <form action="add_product.php" method="POST" enctype="multipart/form-data">
              <div class="mb-4">
                <label class="form-label" for="product_name">Product title</label>
                <input class="form-control" id="product_name" name="product_name" type="text" placeholder="Type here" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Full description</label>
                <textarea class="form-control" name="description" placeholder="Type here" rows="4" required></textarea>
              </div>
              <div class="mb-4">
                <label class="form-label">Regular price</label>
                <input class="form-control" name="price" placeholder="$" type="text" required>
              </div>
              <div class="mb-4">
                <label class="form-label">Category</label>
                <select class="form-select" name="category">
                  <?php
                  $sql = "SELECT categoria_id, nombre FROM categoria";
                  $result = $con->query($sql);
                  if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                      echo "<option value='" . $row['categoria_id'] . "'>" . $row['nombre'] . "</option>";
                    }
                  } else {
                    echo "<option value=''>No hay categorías disponibles</option>";
                  }
                  ?>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Image</label>
                <input class="form-control" type="file" name="image" required>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer class="main-footer font-xs">
    <?php
    include_once("footer_admin.php");
    ?>
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
