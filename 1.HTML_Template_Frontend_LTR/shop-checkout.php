<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
  <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">
  <title>Pagos</title>
</head>

<body>
  <?php
  include_once("consultas_bd.php");
  include_once("main.php");
  include_once("cambio.php");
  ?>
  <main class="main">
    <section class="section-box shop-template mt-20">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- <div class="row">
              <?php
              $tiempoRestante = (time() - $_SESSION['start_time']) - (15 * 60);
              if ($tiempoRestante < 0) {
                $tiempoRestante *= -1;
              }
              $minutos = floor($tiempoRestante / 60);
              $segundosRestantes = $tiempoRestante % 60;
              $tiempo = sprintf("%02d:%02d", $minutos, $segundosRestantes);
              ?>
              <p>Tiempo restante: <?php echo $tiempo ?></p>
            </div> -->
            <div class="box-border" style="background-color: #20303f;">
              <form class="row" id="shippingForm">
                  <div class="col-lg-6 col-sm-6 mb-20">
                      <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Informacion de contacto</h5>
                  </div>
                  <!-- <div class="col-lg-12">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Email*" name="email">
                      </div>
                  </div> -->
                  <div class="col-lg-12">
                      <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Datos del envio</h5>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Nombre*" name="nombre">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Apellido*" name="apellido">
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Direccion 1*" name="direccion1">
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Direccion 2" name="direccion2">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="País*" name="pais">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Ciudad*" name="ciudad">
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Codigo postal / ZIP*" name="codigo_postal">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Nombre de la empresa" name="empresa">
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="form-group">
                          <input class="form-input form-control" type="text" placeholder="Celular*" name="celular">
                      </div>
                  </div>
                  <div class="col-lg-12">
                      <div class="form-group mb-0">
                          <textarea class="form-input form-control" placeholder="Informacion Adicional" rows="5" name="informacion_adicional"></textarea>
                      </div>
                  </div>
                </div>
                <div class="row mt-20">
                    <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1" href="shop-cart.php">Volver al carrito</a></div>
                    <div class="col-lg-6 col-7 mb-20 text-end">
                        <input class="btn btn-buy w-auto" type="submit" value="Pasar al pago">
                    </div>
                </div>
            </form>
          </div>
          <div class="col-lg-6">
            <div class="box-border">
              <h5 class="font-md-bold mb-20">Tu orden</h5>
              <?php
              $carrito = mostrarCarrito($usuario);
              if ($carrito[0]) {
                $total = 0;
                foreach ($carrito[1] as $articulo) {
                  $producto = getProducto($articulo['producto_id']);
                  $precio = round($articulo['total_carrito'] * $moneda['precio_moneda']);
                  $total += $precio;
                  $precio = number_format($precio, 0, ',', '.');
                  echo "
                  <div class='listCheckout'>
                    <div class='item-wishlist'>
                      <div class='wishlist-product'>
                        <div class='product-wishlist'>
                          <div class='product-image'><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'><img src='assets/imgs/" . htmlspecialchars($producto['imagen_url']) . "' alt='Ecom'></a></div>
                          <div class='product-info'><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'>
                              <h6 class='color-brand-3'>" . htmlspecialchars($producto['nombre']) . "</h6>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class='wishlist-status'>
                        <h5 class='color-gray-500'>x" . htmlspecialchars($articulo['cantidad']) . "</h5>
                      </div>
                      <div class='wishlist-price'>
                        <h4 class='color-brand-3 font-lg-bold'>$$precio</h4>
                      </div>
                    </div>
                  </div>
                  ";
                }
                $total = number_format($total, 0, ',', '.');
              }

              ?>

              <div class="form-group mb-0">
                <div class="row mb-10">
                  <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Subtotal</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3"><?php echo $total ?></span></div>
                </div>
                <div class="border-bottom mb-10 pb-5">
                  <div class="row">
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Envio</span></div>
                    <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">-</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Total</span></div>
                  <div class="col-lg-6 col-6 text-end"><span class="font-lg-bold color-brand-3">$6.51</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box box-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-12">
            <h3 class="color-white">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
            <p class="font-lg color-white">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="box-form-newsletter mt-15">
              <form class="form-newsletter">
                <input class="input-newsletter font-xs" value="" placeholder="Your email Address">
                <button class="btn btn-brand-2">Sign Up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p id="modalMessage"></p>
        </div>
    </div>
  </main>
  <footer class="footer">
    <?php
    include_once("footer.php")
    ?>
  </footer>
  <script src="assets/js/vendors/modernizr-3.6.0.min.js"></script>
  <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
  <script src="assets/js/vendors/jquery-migrate-3.3.0.min.js"></script>
  <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
  <script src="assets/js/vendors/waypoints.js"></script>
  <script src="assets/js/vendors/wow.js"></script>
  <script src="assets/js/vendors/magnific-popup.js"></script>
  <script src="assets/js/vendors/perfect-scrollbar.min.js"></script>
  <script src="assets/js/vendors/select2.min.js"></script>
  <script src="assets/js/vendors/isotope.js"></script>
  <script src="assets/js/vendors/scrollup.js"></script>
  <script src="assets/js/vendors/swiper-bundle.min.js"></script>
  <script src="assets/js/vendors/noUISlider.js"></script>
  <script src="assets/js/vendors/slider.js"></script>
  <!-- Count down-->
  <script src="assets/js/vendors/counterup.js"></script>
  <script src="assets/js/vendors/jquery.countdown.min.js"></script>
  <!-- Count down-->
  <script src="assets/js/vendors/jquery.elevatezoom.js"></script>
  <script src="assets/js/vendors/slick.js"></script>
  <script src="assets/js/main.js?v=3.0.0"></script>
  <script src="assets/js/shop.js?v=1.2.1"></script>
  <script src="assets/js/javaS.js"></script>
</body>

</html>