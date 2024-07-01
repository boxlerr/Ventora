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
  <title>Vestore - Admin</title>
</head>

<body class="dark">
  <?php
  include_once("header_admin.php")
  ?>
  <section class="content-main">
    <div class="content-header">
      <div>
        <h2 class="content-title card-title">Dashboard</h2>
        <p>Whole data about your business here</p>
      </div>
      <div><a class="btn btn-primary" href="#"><i class="text-muted material-icons md-post_add"></i>Create report</a></div>
    </div>

    <!-- mostrar datos con consultas -->
    <?php
require_once("../conexion/connect.php");

if ($con) {
    // Revenue
    $queryRevenue = "SELECT SUM(total) AS total_revenue FROM venta";
    $resultRevenue = mysqli_query($con, $queryRevenue);
    $rowRevenue = mysqli_fetch_assoc($resultRevenue);
    $totalRevenue = $rowRevenue['total_revenue'];

    // Orders
    $queryOrders = "SELECT COUNT(*) AS pending_orders FROM envio WHERE estado = 'pendiente'";
    $resultOrders = mysqli_query($con, $queryOrders);
    $rowOrders = mysqli_fetch_assoc($resultOrders);
    $pendingOrders = $rowOrders['pending_orders'];

    // Products
    $queryProducts = "SELECT COUNT(*) AS total_products FROM producto";
    $resultProducts = mysqli_query($con, $queryProducts);
    $rowProducts = mysqli_fetch_assoc($resultProducts);
    $totalProducts = $rowProducts['total_products'];

    // Categories
    $queryCategories = "SELECT COUNT(*) AS total_categories FROM categoria";
    $resultCategories = mysqli_query($con, $queryCategories);
    $rowCategories = mysqli_fetch_assoc($resultCategories);
    $totalCategories = $rowCategories['total_categories'];

    // Monthly Revenue
    $currentMonth = date('Y-m');
    $queryMonthlyRevenue = "SELECT SUM(total) AS monthly_revenue FROM venta WHERE DATE_FORMAT(fecha_venta, '%Y-%m') = '$currentMonth'";
    $resultMonthlyRevenue = mysqli_query($con, $queryMonthlyRevenue);
    $rowMonthlyRevenue = mysqli_fetch_assoc($resultMonthlyRevenue);
    $monthlyRevenue = $rowMonthlyRevenue['monthly_revenue'];
}
?>

<div class="row">
    <div class="col-lg-3">
        <div class="card card-body mb-4">
            <article class="icontext">
                <span class="icon icon-sm rounded-circle bg-primary-light">
                    <i class="text-primary material-icons md-monetization_on"></i>
                </span>
                <div class="text">
                    <h6 class="mb-1 card-title">Ganancia</h6>
                    <span><?php echo '$' . number_format($totalRevenue, 2); ?></span>
                    <span class="text-sm">Shipping fees are not included</span>
                </div>
            </article>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card card-body mb-4">
            <article class="icontext">
                <span class="icon icon-sm rounded-circle bg-success-light">
                    <i class="text-success material-icons md-local_shipping"></i>
                </span>
                <div class="text">
                    <h6 class="mb-1 card-title">Ordenes pendientes</h6>
                    <span><?php echo number_format($pendingOrders); ?></span>
                    <span class="text-sm">Excluding orders in transit</span>
                </div>
            </article>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card card-body mb-4">
            <article class="icontext">
                <span class="icon icon-sm rounded-circle bg-warning-light">
                    <i class="text-warning material-icons md-qr_code"></i>
                </span>
                <div class="text">
                    <h6 class="mb-1 card-title">Productos</h6>
                    <span><?php echo number_format($totalProducts); ?></span>
                    <span class="text-sm">In <?php echo number_format($totalCategories); ?> Categories</span>
                </div>
            </article>
        </div>
    </div>
    <div class="col-lg-3">
        <div class="card card-body mb-4">
            <article class="icontext">
                <span class="icon icon-sm rounded-circle bg-info-light">
                    <i class="text-info material-icons md-shopping_basket"></i>
                </span>
                <div class="text">
                    <h6 class="mb-1 card-title">Ganancia del mes</h6>
                    <span><?php echo '$' . number_format($monthlyRevenue, 2); ?></span>
                    <span class="text-sm">Based on your local time.</span>
                </div>
            </article>
        </div>
    </div>
</div>
    
    <div class="row">
      <div class="col-xl-8 col-lg-12">
        <div class="card mb-4">
          <article class="card-body">
            <h5 class="card-title">Sale statistics</h5>
            <canvas id="myChart" height="120px"></canvas>
          </article>
        </div>
        <div class="row">
          <div class="col-lg-5">
            <div class="card mb-4">
              <article class="card-body">
                <h5 class="card-title">New Members</h5>
                <div class="new-member-list">
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center"><img class="avatar" src="assets/imgs/people/avatar4.jpg" alt="">
                      <div>
                        <h6>Patric Adams</h6>
                        <p class="text-muted font-xs">Sanfrancisco</p>
                      </div>
                    </div><a class="btn btn-xs" href="#"><i class="material-icons md-add"></i> Add</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center"><img class="avatar" src="assets/imgs/people/avatar2.jpg" alt="">
                      <div>
                        <h6>Dilan Specter</h6>
                        <p class="text-muted font-xs">Sanfrancisco</p>
                      </div>
                    </div><a class="btn btn-xs" href="#"><i class="material-icons md-add"></i> Add</a>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="d-flex align-items-center"><img class="avatar" src="assets/imgs/people/avatar3.jpg" alt="">
                      <div>
                        <h6>Tomas Baker</h6>
                        <p class="text-muted font-xs">Sanfrancisco</p>
                      </div>
                    </div><a class="btn btn-xs" href="#"><i class="material-icons md-add"></i> Add</a>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="card mb-4">
              <article class="card-body">
                <h5 class="card-title">Recent activities</h5>
                <ul class="verti-timeline list-unstyled font-sm">
                  <li class="event-list">
                    <div class="event-timeline-dot"><i class="material-icons md-play_circle_outline font-xxl"></i></div>
                    <div class="media">
                      <div class="me-3">
                        <h6><span>Today</span><i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                      </div>
                      <div class="media-body">
                        <div>Lorem ipsum dolor sit amet consectetur</div>
                      </div>
                    </div>
                  </li>
                  <li class="event-list active">
                    <div class="event-timeline-dot"><i class="material-icons md-play_circle_outline font-xxl animation-fade-right"></i></div>
                    <div class="media">
                      <div class="me-3">
                        <h6><span>17 May</span><i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                      </div>
                      <div class="media-body">
                        <div>Debitis nesciunt voluptatum dicta reprehenderit</div>
                      </div>
                    </div>
                  </li>
                  <li class="event-list">
                    <div class="event-timeline-dot"><i class="material-icons md-play_circle_outline font-xxl"></i></div>
                    <div class="media">
                      <div class="me-3">
                        <h6><span>13 May</span><i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                      </div>
                      <div class="media-body">
                        <div>Accusamus voluptatibus voluptas.</div>
                      </div>
                    </div>
                  </li>
                  <li class="event-list">
                    <div class="event-timeline-dot"><i class="material-icons md-play_circle_outline font-xxl"></i></div>
                    <div class="media">
                      <div class="me-3">
                        <h6><span>05 April</span><i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                      </div>
                      <div class="media-body">
                        <div>At vero eos et accusamus et iusto odio dignissi</div>
                      </div>
                    </div>
                  </li>
                  <li class="event-list">
                    <div class="event-timeline-dot"><i class="material-icons md-play_circle_outline font-xxl"></i></div>
                    <div class="media">
                      <div class="me-3">
                        <h6><span>26 Mar</span><i class="material-icons md-trending_flat text-brand ml-15 d-inline-block"></i></h6>
                      </div>
                      <div class="media-body">
                        <div>Responded to need &ldquo;Volunteer Activities</div>
                      </div>
                    </div>
                  </li>
                </ul>
              </article>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-12">
        <div class="card mb-4">
          <article class="card-body">
            <h5 class="card-title">Revenue Base on Area</h5>
            <canvas id="myChart2" height="217"></canvas>
          </article>
        </div>
        <div class="card mb-4">
          <article class="card-body">
            <h5 class="card-title">Marketing Chanel</h5><span class="text-muted font-xs">Facebook</span>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 15%">15%</div>
            </div><span class="text-muted font-xs">Instagram</span>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 65%">65%</div>
            </div><span class="text-muted font-xs">Google</span>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 51%"> 51%</div>
            </div><span class="text-muted font-xs">Twitter</span>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
            </div><span class="text-muted font-xs">Other</span>
            <div class="progress mb-3">
              <div class="progress-bar" role="progressbar" style="width: 80%"> 80%</div>
            </div>
          </article>
        </div>
      </div>
    </div>


    <div class="card mb-4">
    <header class="card-header">
        <h4 class="card-title">Últimas Ventas</h4>
    </header>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table align-middle table-nowrap mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="text-center" scope="col">
                            <div class="form-check align-middle">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label"></label>
                            </div>
                        </th>
                        <th class="align-middle" scope="col">ID Venta</th>
                        <th class="align-middle" scope="col">Cliente</th>
                        <th class="align-middle" scope="col">Fecha</th>
                        <th class="align-middle" scope="col">Total</th>
                        <th class="align-middle" scope="col">Estado</th> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // 1. Conexión a la base de datos (asumiendo que ya tienes el código de conexión)
                    require_once("../conexion/connect.php");

                    // 2. Consulta SQL para obtener las últimas 5 ventas
                    $query = "SELECT v.venta_id, c.nombre AS nombre_cliente, v.fecha_venta, v.total, v.estado
                              FROM venta v
                              INNER JOIN cliente c ON v.cliente_id = c.cliente_id
                              ORDER BY v.fecha_venta DESC
                              LIMIT 5";
                    $result = mysqli_query($con, $query);

                    // 3. Mostrar los resultados en la estructura HTML
                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" id="transactionCheck<?php echo $row['venta_id']; ?>" type="checkbox">
                                        <label class="form-check-label" for="transactionCheck<?php echo $row['venta_id']; ?>"></label>
                                    </div>
                                </td>
                                <td><a class="fw-bold" href="#"><?php echo '#SK' . $row['venta_id']; ?></a></td>
                                <td><?php echo $row['nombre_cliente']; ?></td>
                                <td><?php echo date('d M, Y', strtotime($row['fecha_venta'])); ?></td>
                                <td>$<?php echo number_format($row['total'], 2); ?></td>
                                <td>
                                    <?php if ($row['estado'] == 'Paid') { ?>
                                        <span class="badge badge-pill badge-soft-success"><?php echo $row['estado']; ?></span>
                                    <?php } elseif ($row['estado'] == 'Chargeback') { ?>
                                        <span class="badge badge-pill badge-soft-danger"><?php echo $row['estado']; ?></span>
                                    <?php } elseif ($row['estado'] == 'Refund') { ?>
                                        <span class="badge badge-pill badge-soft-warning"><?php echo $row['estado']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-soft-info"><?php echo $row['estado']; ?></span>
                                    <?php } ?>
                                </td>
                                
                            </tr>
                            <?php
                        }
                    } else {
                        // Manejar el caso donde no hay resultados
                        ?>
                        <tr>
                            <td colspan="7" class="text-center">No se encontraron ventas.</td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
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