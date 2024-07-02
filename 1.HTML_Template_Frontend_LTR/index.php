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
  <title>Vestore - Página Oficial</title>
</head>

<body>
  <?php
  include_once("consultas_bd.php");
  include_once("main.php");
  include_once("cambio.php");
  ?>
  <main class="main">
    <section class="section-box mt-30">
      <div class="banner-hero banner-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="box-swiper">
                <div class="swiper-container swiper-group-1">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="banner-big bg-11 bannerc"><span class="font-sm text-uppercase" data-section="index" data-value="tendencia_ahora_mismo">Tendencia ahora mismo</span>
                        <h2 class="mt-10" data-section="index" data-value="descuento50">Descuento hasta un 50%</h2>
                        <h1 data-section="index" data-value="dispositivos_Moviles">Dispositivos Moviles</h1>
                        <!-- <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div> -->
                        <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-big bg-11-2"><span class="font-sm text-uppercase" data-section="index" data-value="tendencia_ahora">Tendencia ahora</span>
                        <h2 class="mt-10" data-section="index" data-value="descuento25">Grandes descuentos 25%</h2>
                        <h1 data-section="index" data-value="laptop_y_pc">Laptop & PC</h1>
                        <!-- <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div> -->
                        <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-big bg-11-3"><span class="font-sm text-uppercase" data-section="index" data-value="mas_vendido_mes">Más vendido este mes</span>
                        <h2 class="mt-10" data-section="index" data-value="hot_collection">Hot Collection</h2>
                        <h1 data-section="index" data-value="gafas_virtuales">Gafas de realidad virtual</h1>
                        <!-- <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div> -->
                        <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-pagination swiper-pagination-1"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                  <div class="banner-small banner-small-1 bg-13"><span class="color-danger text-uppercase font-sm-lh32">10%<span class="color-brand-3" data-section="index" data-value="descuento10">de descuento</span></span>
                    <h4 class="mb-10" data-section="index" data-value="airpods">AirPods 3ra Gen.</h4>
                    <p class="color-brand-3 font-desc" data-section="index" data-value="oferta">No te pierdas esta oferta única</p>
                    <div class="mt-20"><a class="btn btn-brand-3" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a></div>
                  </div>
                </div>
                <div class="col-lg-12 col-md-6 col-sm-12">
                  <div class="banner-small banner-small-2 bg-14"><span class="color-danger text-uppercase font-sm-lh32" data-section="index" data-value="ultima_coleccion">ÚLTIMA COLECCIÓN</span>
                    <h4 class="mb-10" data-section="index" data-value="airpodsmax">AirPods Max</h4>
                    <p class="color-brand-3 font-md" data-section="index" data-value="mejor_precio">Los mejores precios</p>
                    <div class="mt-20"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="section-box mb-20">
      <div class="head-main text-center border-none mb-0">
        <h3 class="mb-5" data-section="index" data-value="nuestros_productos">Nuestros productos</h3>
      </div>
      <div class="container">
        <div class="box-swiper">
          <div class="swiper-container swiper-group-5">
            <div class="swiper-wrapper pt-5">
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpods3ra.webp" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria">Airpods 3ra Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpods3ra.webp" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria1">Airpods 3ra Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpods3ra.webp" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria2">Airpods 3ra Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpodspro.png" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria3">Airpods Pro 2da Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpodspromax.png" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria4">Airpods Pro Max</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpods3ra.webp" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria5">Airpods 3ra Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpodspro.png" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria6">Airpods Pro 2da Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpodspromax.png" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria7">Airpods Pro Max</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="item-cat">
                  <div class="box-category-1">
                    <div class="box-image">
                      <div class="inner-image"><img src="assets/imgs/img/airpods3ra.webp" alt="Ecom"></div>
                    </div>
                    <div class="box-info"> <a id="productosindex" class="font-md-bold" href="#" data-section="index" data-value="categoria8">Airpods 3ra Gen.</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="section-box mt-50">
      <div class="container">
        <div class="head-main text-center border-none mb-0">
          <h3 class="mb-5" data-section="index" data-value="productos_destacados">Productos Destacados</h3>
        </div>
        <div class="mt-0">
          <div class="list-products-5 list-products-home10">
            <?php
            $productos = getProductosLimitados(5);
            foreach ($productos as $producto) {
              $precio = round($producto['precio'] * $moneda['precio_moneda']);
              $precio = number_format($precio, 0, ',', '.');
              echo"
                <div class='card-grid-style-3 home6-style home7-style'>
                  <div class='card-grid-inner'>
                    <div class='image-box'><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'><img src='assets/imgs/".htmlspecialchars($producto['imagen_url'])."' alt='Ecom'></a></div>
                    <div class='info-right'><a class='font-xs color-gray-500' href=#>Apple</a><br><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."' class='color-brand-3 font-sm-bold'>".htmlspecialchars($producto['nombre'])."</a>
                      <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>".$moneda['simbolo']. $precio ."</strong></div>
                      <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php'>Add To Cart</a></div> -->
                    </div>
                  </div>
                </div>
              ";
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box mt-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-20">
            <div class="banner-small-home10 bg-2">
              <div class="info-banner">
                <h1 class="color-gray-1000 mb-10 bcr" data-section="index" data-value="descuento">Descuento</h1>
                <h3 class="color-brand-3 mb-5 bcr2">10% OFF</h3>
                <h4 class="color-gray-500 mb-5 bcr3" data-section="index" data-value="auriculares">Auriculares</h4>
                <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a></div>
              </div>
              <div class="box-img-banner"> <img class="img1" src="assets/imgs/img/airpodsprofondotransparente.png" alt="Ecom"></div>
            </div>
          </div>
          <div class="col-lg-4 mb-20">
            <div class="banner-small-home10 bg-3">
              <div class="info-banner">
                <h1 class="color-gray-1000 mb-10 bcr" data-section="index" data-value="ofertas">Ofertas</h1>
                <h3 class="color-gray-500 mb-5 bcr2" data-section="index" data-value="electronica">Electronica</h3>
                <h4 class="color-gray-500 mb-5 bcr3" data-section="index" data-value="envio_gratis">Envio gratis</h4>
                <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                </div>
              </div>
              <div class="box-img-banner"> <img class="img2" src="assets/imgs/img/airpods2gen.png" alt="Ecom"></div>
            </div>
          </div>
          <div class="col-lg-4 mb-20">
            <div class="banner-small-home10 bg-32">
              <div class="info-banner">
                <h1 class="color-gray-1000 bcr" data-section="index" data-value="ultima_tendencia">Ultima <br class="d-none d-lg-block">Tendencia</h1>
                <h3 class="color-gray-500 mb-0 bcr2" data-section="index" data-value="productos">Productos</h3>
                <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                </div>
              </div>
              <div class="box-img-banner"> <img class="img3" src="assets/imgs/img/bannercuadradomax.png" alt="Ecom"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-box box-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-7 col-sm-12">
            <h3 class="color-white" data-section="index" data-value="suscripcion">Suscribete y consigue 10% de Descuento</h3>
            <p class="font-lg color-white" data-section="index" data-value="suscripcion_descripcion">Recibe actualizaciones por correo electrónico sobre nuestra tienda y ofertas especiales</span></p>
          </div>
          <div class="col-lg-4 col-md-5 col-sm-12">
            <div class="box-form-newsletter mt-15">
              <form class="form-newsletter">
              <div data-section="placeholder" data-value="ingresa_mail"> 
                <input class="input-newsletter font-xs" value="" placeholder="Ingresa tu mail">
                </div>
                <button class="btn btn-brand-2" data-section="index" data-value="ingresar">Ingresar</button>
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