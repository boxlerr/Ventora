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
  <section class="content-main">
    <div class="content-header">
      <div>
        <h2 class="content-title card-title">Order Tracking</h2>
        <p>Details for Order ID: 3453012</p>
      </div>
    </div>
    <div class="card">
      <header class="card-header">
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-6 mb-lg-0 mb-15"><span><i class="material-icons md-calendar_today"></i><b>Wed, Aug 13, 2022, 4:34PM</b></span><br><small class="text-muted">Order ID: 3453012</small><br><small class="text-muted">Your order has been delivered</small></div>
          <div class="col-lg-6 col-md-6 ms-auto text-md-end">
            <select class="form-select d-inline-block mb-lg-0 mb-15 mw-200 mr-15">
              <option>Change status</option>
              <option>Awaiting payment</option>
              <option>Confirmed</option>
              <option>Shipped</option>
              <option>Delivered</option>
            </select><a class="btn btn-primary" href="#">Screenshot</a><a class="btn btn-secondary print ms-2" href="#"><i class="icon material-icons md-print mr-5"></i>Print</a>
          </div>
        </div>
      </header>
      <div class="card-body">
        <div class="order-tracking mb-100">
          <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between">
            <div class="step completed">
              <div class="step-icon-wrap">
                <div class="step-icon"><i class="material-icons md-shopping_cart"></i></div>
              </div>
              <h4 class="step-title">Confirmed Order</h4><small class="text-muted text-sm">15 March 2022</small>
            </div>
            <div class="step completed">
              <div class="step-icon-wrap">
                <div class="step-icon"><i class="material-icons md-settings"></i></div>
              </div>
              <h4 class="step-title">Processing Order</h4><small class="text-muted text-sm">16 March 2022</small>
            </div>
            <div class="step completed">
              <div class="step-icon-wrap">
                <div class="step-icon"><i class="material-icons md-shopping_bag"></i></div>
              </div>
              <h4 class="step-title">Quality Check</h4><small class="text-muted text-sm">17 March 2022</small>
            </div>
            <div class="step">
              <div class="step-icon-wrap">
                <div class="step-icon"><i class="material-icons md-local_shipping"></i></div>
              </div>
              <h4 class="step-title">Product Dispatched</h4><small class="text-muted text-sm">18 March 2022</small>
            </div>
            <div class="step">
              <div class="step-icon-wrap">
                <div class="step-icon"><i class="material-icons md-check_circle"></i></div>
              </div>
              <h4 class="step-title">Product Delivered</h4><small class="text-muted text-sm">20 March 2022</small>
            </div>
          </div>
        </div>
        <div class="row mb-50 mt-20 order-info-wrap text-center">
          <div class="col-md-4">
            <article class="icontext align-items-start">
              <div class="text">
                <h6 class="mb-1">Customer</h6>
                <p class="mb-1">John Alexander<br> alex@example.com<br> +998 99 22123456</p><a href="#">View profile</a>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="icontext align-items-start">
              <div class="text">
                <h6 class="mb-1">Order info</h6>
                <p class="mb-1">Shipping: Fargo express<br> Pay method: card<br> Status: new</p><a href="#">Download info</a>
              </div>
            </article>
          </div>
          <div class="col-md-4">
            <article class="icontext align-items-start">
              <div class="text">
                <h6 class="mb-1">Deliver to</h6>
                <p class="mb-1">City: Tashkent, Uzbekistan<br>Block A, House 123, Floor 2<br> Po Box 10000</p><a href="#">View profile</a>
              </div>
            </article>
          </div>
        </div>
        <div class="row">
          <div class="text-center mt-100 mb-50"><a class="btn btn-primary" href="page-orders-detail.html">View Order Details</a></div>
        </div>
      </div>
    </div>
  </section>
  <footer class="main-footer font-xs">
      <?php
        include_once("footer_admin.php")
      ?>
    </div>
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