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
  <title>Lista de Deseos - Vestore</title>
</head>

<body>
  <?php
  include_once("consultas_bd.php");
  include_once("main.php");
  // include_once("cambio.php");
  ?>
  <main class="main">
    <section class="section-box shop-template">
      <div class="container">
        <div class="box-wishlist">
          <div class="head-wishlist">
            <div class="item-wishlist">
              <div class="wishlist-product"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="producto">Product</span></div>
                <div class="wishlist-price"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="precio">Price</span></div>
                <div class="wishlist-status"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="status_stock">Stock status</span></div>
                <div class="wishlist-action"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="accion">Action</span></div>
                <div class="wishlist-remove"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="remover">Remove</span></div>
              </div>
          </div>
          <div class="content-wishlist">
            <?php
            $wishlist = verWishlist($usuario);
            if($wishlist[0]){
              foreach($wishlist[1] as $articulo){
                $articulo = getProducto($producto['producto_id']);
                $precio = round($articulo['precio'] * $moneda['precio_moneda']);
                $precio = number_format($precio, 0, ',', '.');
                echo"                
                <div class='item-wishlist'>
                  <div class='wishlist-product'>
                    <div class='product-wishlist'>
                      <div class='product-image'><a href='shop-single-product-2.php?id=".htmlspecialchars($articulo['producto_id'])."'><img src='assets/imgs/page/product/".htmlspecialchars($articulo['imagen_url'])."' alt='Ecom'></a></div>
                      <div class='product-info'><a href='shop-single-product-2.php?id=".htmlspecialchars($articulo['producto_id'])."'>
                          <h6 class='color-brand-3'>".htmlspecialchars($articulo['nombre'])."</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class='wishlist-price'>
                    <h4 class='color-brand-3'>$".$precio."</h4>
                  </div>
                  <div class='wishlist-status'><span class='btn btn-gray font-md-bold color-brand-3' data-section='shop-wishlist' data-value='en_stock'>In Stock</span></div>
                  <div class='wishlist-action'><a class='btn btn-cart font-sm-bold' href='shop-single-product-2.php?id=".htmlspecialchars($articulo['producto_id'])."' data-section='shop-wishlist' data-value='añadir_al_carrito'>Add to Cart</a></div>
                  <form class='wishlist-remove' action='agregarWishlist.php' method='post'>
                    <input class='btn btn-delete' type='hidden' value='".htmlspecialchars($articulo['producto_id'])."' name='producto_id'>
                    <input class='btn btn-delete' type='hidden' value='".$usuario."' name='cliente_id'>
                    <input class='btn btn-delete' type='submit' value='' name='eliminar'>
                  </form>
                </div>
                ";
              }
            }else{
              echo "<h2>Aun no hay articulos en tus favoritos</h2>";
            }
            ?>
          </div>
        </div>
        <h4 class="color-brand-3" data-section="shop-wishlist" data-value="tambien_podria_gustarte">You may also like</h4>
        <div class="list-products-5 mt-20 mb-40">
          <?php
          $productos=getProductosLimitados(5);
          foreach($productos as $producto){
            $precio = round($producto['precio'] * $moneda['precio_moneda']);
            $precio = number_format($precio, 0, ',', '.');
            echo"              
              <div class='card-grid-style-3 home6-style home7-style'>
                <div class='card-grid-inner'>
                  <div class='tools'><a class='btn btn-trend btn-tooltip mb-10' href='#' aria-label='Trend' data-bs-placement='left'></a><a class='btn btn-wishlist btn-tooltip mb-10' href='shop-wishlist.php' aria-label='Add To Wishlist'></a><a class='btn btn-compare btn-tooltip mb-10' href='shop-compare.php' aria-label='Compare'></a><a class='btn btn-quickview btn-tooltip' aria-label='Quick view' href='#ModalQuickview' data-bs-toggle='modal'></a></div>
                  <div class='image-box'><span class='label bg-brand-2'>-17%</span><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'><img src='assets/imgs/".htmlspecialchars($producto['imagen_url'])."' alt='Ecom'></a></div>
                  <div class='info-right'><a class='font-xs color-gray-500' href='shop-vendor-single.php'>Amish</a><br><a class='color-brand-3 font-sm-bold' href='shop-single-product-2.php'>".htmlspecialchars($producto['nombre'])."</a>
                    <div class='rating'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><span class='font-xs color-gray-500'>(65)</span></div>
                    <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>$$precio</strong><span class='color-gray-500 price-line'>$3225.6</span></div>
                    <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php' data-section='index' data-value='agregar_carrito'>Add To Cart</a></div> -->
                    <ul class='list-features'>
                      <li>".htmlspecialchars($producto['descripcion'])."</li>
                    </ul>
                  </div>
                </div>
              </div>
            ";
          }
          ?>
        </div>
      </div>
    </section>
    <section class="section-box box-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-12">
          <h3 class="color-white" data-section="index" data-value="suscripcion">Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
          <p class="font-lg color-white" data-section="index" data-value="suscripcion_descripcion">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="box-form-newsletter mt-15">
              <form class="form-newsletter">
              <input class="input-newsletter font-xs" value="" placeholder="Ingresa tu mail">
              <button class="btn btn-brand-2" data-section="index" data-value="ingresar">Sign Up</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
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