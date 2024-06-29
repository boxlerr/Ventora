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
  include_once("header_admin.php")
  ?>
  <section class="content-main">
    <div class="content-header">
      <h2 class="content-title">Sellers cards</h2>
      <div><a class="btn btn-primary" href="#"><i class="material-icons md-plus"></i> Create new</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Status: all</option>
              <option>Active only</option>
              <option>Disabled</option>
            </select>
          </div>
        </div>
      </header>
      <!-- card-header end//-->
      <div class="card-body">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
        <?php
require_once("../conexion/connect.php");

$sql = "SELECT * FROM proveedor";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="col">';
        echo '    <div class="card card-user">';
        echo '        <div class="card-header"><img class="img-md img-avatar" src="' . $row['img'] . '" alt="User pic"></div>';
        echo '        <div class="card-body">';
        echo '            <h5 class="card-title mt-50">' . $row['nombre'] . '</h5>';
        echo '            <div class="card-text text-muted">';
        echo '                <p class="m-0">Seller ID: #' . $row['id_proveedor'] . '</p>';
        echo '                <p>' . $row['correo'] . '</p>';
        echo '                <a class="btn btn-sm btn-brand rounded font-sm mt-15" href="#">View details</a>';
        echo '            </div>';
        echo '        </div>';
        echo '    </div>';
        echo '</div>';
    }
} else {
    echo "No hay proveedores disponibles";
}

$con->close();
?>
          <!-- col.//-->
          
          <!-- col.//-->
          <!-- row.//-->
          <!-- card-body end//-->
        </div>
      </div>
    </div>
    <!-- card end//-->
    <div class="pagination-area mt-15 mb-50">
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