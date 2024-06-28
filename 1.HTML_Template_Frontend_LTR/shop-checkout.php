<?php
// Verificar si la sesión ya está iniciada
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$time_limit = 250; 

// Depuración: Mostrar el tiempo de inicio y el tiempo transcurrido
if (isset($_SESSION['start_time'])) {
    echo "Tiempo de inicio de la sesión: " . date('H:i:s', $_SESSION['start_time']) . "<br>";
    $elapsed_time = time() - $_SESSION['start_time'];
    echo "Tiempo transcurrido: " . $elapsed_time . " segundos<br>";

    if ($elapsed_time > $time_limit) {  
        echo "Tiempo expirado. Redirigiendo...<br>";
        unset($_SESSION['start_time']);
        header("Location: index.php");
        exit();
    } else {
        echo "Tiempo restante: " . ($time_limit - $elapsed_time) . " segundos<br>";
    }
} else {
    // Si no hay tiempo de inicio, establecemos uno
    $_SESSION['start_time'] = time();
    echo "Sesión de tiempo de inicio establecida en: " . date('H:i:s', $_SESSION['start_time']) . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="msapplication-TileColor" content="#0E0E0E">
  <meta name="template-color" content="#0E0E0E">
  <meta name="description" content="Index page">
  <meta name="keywords" content="index, page">
  <meta name="author" content="">
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
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
              <p>Tiempo restante: <?php echo $tiempo?></p>
            </div> -->
            <div class="box-border">
              <!-- <div class="box-payment"><a class="btn btn-gpay"><img src="assets/imgs/page/checkout/gpay.svg" alt="Ecom"></a><a class="btn btn-paypal"><img src="assets/imgs/page/checkout/paypal.svg" alt="Ecom"></a><a class="btn btn-amazon"><img src="assets/imgs/page/checkout/amazon.svg" alt="Ecom"></a></div>
              <div class="border-bottom-4 text-center mb-20">
                <div class="text-or font-md color-gray-500">Or</div>
              </div> -->
              <div class="row">
                <div class="col-lg-6 col-sm-6 mb-20">
                  <h5 class="font-md-bold color-brand-3 text-sm-start text-center">Contact information</h5>
                </div>
                <div class="col-lg-6 col-sm-6 mb-20 text-sm-end text-center"><span class="font-sm color-brand-3">Already have an account?</span><a class="font-sm color-brand-1" href="page-login.php"> Login</a></div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Email*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <h5 class="font-md-bold color-brand-3 mt-15 mb-20">Shipping address</h5>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="First name*">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Last name*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Address 1*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Address 2">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="form-control font-sm select-style1 color-gray-700">
                      <option value="">Select an option...</option>
                      <option value="1">Option 1</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="City*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="PostCode / ZIP*">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Company name">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input class="form-control font-sm" type="text" placeholder="Phone*">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group mb-0">
                    <textarea class="form-control font-sm" placeholder="Additional Information" rows="5"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-20">
              <div class="col-lg-6 col-5 mb-20"><a class="btn font-sm-bold color-brand-1 arrow-back-1" href="shop-cart.php">Return to Cart</a></div>
              <div class="col-lg-6 col-7 mb-20 text-end"><a class="btn btn-buy w-auto arrow-next" href="shop-pay.php">Pasar al pago</a></div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="box-border">
              <h5 class="font-md-bold mb-20">Tu orden</h5>
              <?php
              $carrito = mostrarCarrito($usuario);
              if($carrito[0]){
                $total=0;
                foreach($carrito[1] as $articulo){
                  $producto = getProducto($articulo['producto_id']);
                  $precio = round($articulo['total_carrito'] * $moneda['precio_moneda']);
                  $total += $precio;
                  $precio = number_format($precio, 0, ',', '.');
                  echo"
                  <div class='listCheckout'>
                    <div class='item-wishlist'>
                      <div class='wishlist-product'>
                        <div class='product-wishlist'>
                          <div class='product-image'><a href='shop-single-product.html'><img src='assets/imgs/".htmlspecialchars($producto['imagen_url'])."' alt='Ecom'></a></div>
                          <div class='product-info'><a href='shop-single-product.html'>
                              <h6 class='color-brand-3'>".htmlspecialchars($producto['nombre'])."</h6>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class='wishlist-status'>
                        <h5 class='color-gray-500'>x".htmlspecialchars($articulo['cantidad'])."</h5>
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
                    <div class="col-lg-6 col-6"><span class="font-md-bold color-brand-3">Shipping</span></div>
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
    <div class="modal fade" id="ModalFiltersForm" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-xl">
        <div class="modal-content apply-job-form">
          <div class="modal-header">
            <h5 class="modal-title color-gray-1000 filters-icon">Addvance Fillters</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body p-30">
            <div class="row">
              <div class="col-w-1">
                <h6 class="color-gray-900 mb-0">Brands</h6>
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">Apple</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Samsung</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Baseus</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Remax</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Handtown</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Elecom</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Razer</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Auto Focus</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Nillkin</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Logitech</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">ChromeBook</span><span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="col-w-1">
                <h6 class="color-gray-900 mb-0">Special offers</h6>
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">On sale</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">FREE shipping</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Big deals</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Shop Mall</span><span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
                <h6 class="color-gray-900 mb-0 mt-40">Ready to ship in</h6>
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">1 business day</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">1&ndash;3 business days</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">in 1 week</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Shipping now</span><span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
              </div>
              <div class="col-w-1">
                <h6 class="color-gray-900 mb-0">Ordering options</h6>
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Accepts gift cards</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Customizable</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">Can be gift-wrapped</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Installment 0%</span><span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
                <h6 class="color-gray-900 mb-0 mt-40">Rating</h6>
                <ul class="list-checkbox">
                  <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(5 stars)</span></a></li>
                  <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(4 stars)</span></a></li>
                  <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(3 stars)</span></a></li>
                  <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(2 stars)</span></a></li>
                  <li class="mb-5"><a href="#"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><img src="assets/imgs/template/icons/star-gray.svg" alt="Ecom"><span class="ml-10 font-xs color-gray-500 d-inline-block align-top">(1 star)</span></a></li>
                </ul>
              </div>
              <div class="col-w-2">
                <h6 class="color-gray-900 mb-0">Material</h6>
                <ul class="list-checkbox">
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Nylon (8)</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Tempered Glass (5)</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox" checked="checked"><span class="text-small">Liquid Silicone Rubber (5)</span><span class="checkmark"></span>
                    </label>
                  </li>
                  <li>
                    <label class="cb-container">
                      <input type="checkbox"><span class="text-small">Aluminium Alloy (3)</span><span class="checkmark"></span>
                    </label>
                  </li>
                </ul>
                <h6 class="color-gray-900 mb-20 mt-40">Product tags</h6>
                <div><a class="btn btn-border mr-5" href="#">Games</a><a class="btn btn-border mr-5" href="#">Electronics</a><a class="btn btn-border mr-5" href="#">Video</a><a class="btn btn-border mr-5" href="#">Cellphone</a><a class="btn btn-border mr-5" href="#">Indoor</a><a class="btn btn-border mr-5" href="#">VGA Card</a><a class="btn btn-border mr-5" href="#">USB</a><a class="btn btn-border mr-5" href="#">Lightning</a><a class="btn btn-border mr-5" href="#">Camera</a></div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto" href="#">Apply Fillter</a><a class="btn font-sm-bold color-gray-500" href="#">Reset Fillter</a></div>
        </div>
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