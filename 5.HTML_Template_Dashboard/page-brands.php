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
  include_once("header_admin.php");
  include_once("../conexion/connect.php");
  ?>
  
  <section class="content-main">
    <div class="content-header">
      <div>
        <h2 class="content-title card-title">Brand</h2>
        <p>Brand and vendor management</p>
      </div>
      <div><a class="btn btn-primary" href="#"><i class="text-muted material-icons md-post_add"></i>Add New Brand</a></div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 mb-lg-0 mb-15 me-auto">
            <input class="form-control" type="text" placeholder="Search...">
          </div>
          <!-- categorías -->
            
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
            
          

          <div class="col-lg-2 col-6">
            <input class="form-control" type="date" name="">
          </div>
        </div>
      </header>

      <div class="card-body">
        <div class="row gx-3">
        <?php
        // Consulta para obtener las marcas y la cantidad de productos
        $sql = "
            SELECT 
                marca.marca_id, 
                marca.nombre_marca, 
                marca.logo_marca, 
                COUNT(producto.producto_id) AS cantidad_productos 
            FROM 
                marca 
            LEFT JOIN 
                producto 
            ON 
                marca.marca_id = producto.marca_id 
            GROUP BY 
                marca.marca_id, 
                marca.nombre_marca, 
                marca.logo_marca
        ";

        $result = $con->query($sql);
        ?>

        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '
                <div class="col-xl-2 col-lg-3 col-md-4 col-6">
                    <figure class="card border-1">
                        <div class="card-header bg-white text-center">
                            <img class="img-fluid" height="76" src="assets/imgs/brands/'.$row["logo_marca"].'" alt="Logo">
                        </div>
                        <figcaption class="card-body text-center">
                            <h6 class="card-title m-0">'.$row["nombre_marca"].'</h6>
                            <a href="#"> '.$row["cantidad_productos"].' items</a>
                        </figcaption>
                    </figure>
                </div>';
            }
        } else {
            echo "No se encontraron marcas.";
        }
        $con->close();
        ?>
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
