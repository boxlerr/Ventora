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
  <?php include_once("header_admin.php"); ?>
  <section class="content-main">
    <div class="content-header">
      <div>
        <h2 class="content-title card-title">Lista de Envíos</h2>
        <p>Administración de envíos</p>
      </div>
      <div>
        <input class="form-control bg-white" type="text" placeholder="Buscar ID de envío">
      </div>
    </div>
    <div class="card mb-4">
      <header class="card-header">
        <div class="row gx-3">
          <div class="col-lg-4 col-md-6 me-auto">
            <input class="form-control" type="text" placeholder="Buscar...">
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Estado</option>
              <option>Activo</option>
              <option>Deshabilitado</option>
              <option>Mostrar todos</option>
            </select>
          </div>
          <div class="col-lg-2 col-6 col-md-3">
            <select class="form-select">
              <option>Mostrar 20</option>
              <option>Mostrar 30</option>
              <option>Mostrar 40</option>
            </select>
          </div>
        </div>
      </header>

      <div class="card-body">
        <div class="table-responsive">
          <?php
          // Incluir el archivo de conexión
          include('../conexion/connect.php');

          // Consulta SQL para obtener los datos de la tabla "envio"
          $sql = "SELECT envio_id, venta_id, metodo_envio, estado, costo_envio, fecha_envio, fecha_entrega_estimada, fecha_entrega FROM envio";
          $result = $con->query($sql);
          ?>

          <table class="table table-hover">
            <thead>
              <tr>
                <th>#ID</th>
                <th scope="col">Venta ID</th>
                <th scope="col">Método de Envío</th>
                <th scope="col">Estado</th>
                <th scope="col">Costo de Envío</th>
                <th scope="col">Fecha de Envío</th>
                <th scope="col">Fecha de Entrega Estimada</th>
                <th scope="col">Fecha de Entrega</th>
                <th class="text-end" scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($result->num_rows > 0) {
                // Mostrar los datos de cada fila
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>{$row['envio_id']}</td>
                          <td>{$row['venta_id']}</td>
                          <td>{$row['metodo_envio']}</td>
                          <td>{$row['estado']}</td>
                          <td>\${$row['costo_envio']}</td>
                          <td>{$row['fecha_envio']}</td>
                          <td>{$row['fecha_entrega_estimada']}</td>
                          <td>{$row['fecha_entrega']}</td>
                          <td class='text-end'>
                            <div class='dropdown'>
                              <a class='btn btn-light rounded btn-sm font-sm' href='#' data-bs-toggle='dropdown'>
                                <i class='material-icons md-more_horiz'></i>
                              </a>
                              <div class='dropdown-menu'>
                                <a class='dropdown-item text-danger' href='eliminar_envio.php?id={$row['envio_id']}'>Eliminar</a>
                              </div>
                            </div>
                          </td>
                        </tr>";
                }
              } else {
                echo "<tr><td colspan='9'>No se encontraron resultados</td></tr>";
              }
              $con->close();
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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
