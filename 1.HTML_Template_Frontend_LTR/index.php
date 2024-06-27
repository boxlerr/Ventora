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
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/template/favicon.svg">
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
                      <div class="banner-big bg-11"><span class="font-sm text-uppercase" data-section="index" data-value="tendencia_ahora_mismo">Tendencia ahora mismo</span>
                        <h2 class="mt-10" data-section="index" data-value="descuento50">Descuento hasta un 50%</h2>
                        <h1 data-section="index" data-value="dispositivos_Moviles">Dispositivos Moviles</h1>
                        <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div>
                        <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-big bg-11-2"><span class="font-sm text-uppercase" data-section="index" data-value="tendencia_ahora">Tendencia ahora</span>
                        <h2 class="mt-10" data-section="index" data-value="descuento25">Grandes descuentos 25%</h2>
                        <h1 data-section="index" data-value="laptop_y_pc">Laptop & PC</h1>
                        <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div>
                        <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="banner-big bg-11-3"><span class="font-sm text-uppercase" data-section="index" data-value="mas_vendido_mes">Más vendido este mes</span>
                        <h2 class="mt-10" data-section="index" data-value="hot_collection">Hot Collection</h2>
                        <h1 data-section="index" data-value="gafas_virtuales">Gafas de realidad virtual</h1>
                        <div class="row">
                          <div class="col-lg-5 col-md-7 col-sm-12">
                            <p class="font-sm color-brand-3" data-section="index" data-value="carrouselP3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                          </div>
                        </div>
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
                    <h4 class="mb-10" data-section="index" data-value="airpodspro">AirPods Pro 2da Gen.</h4>
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
              echo "              
                <div class='card-grid-style-3 home6-style home7-style'>
                  <div class='card-grid-inner'>
                    <div class='tools'><a class='btn btn-trend btn-tooltip mb-10' href='#' aria-label='Trend' data-bs-placement='left'></a><a class='btn btn-wishlist btn-tooltip mb-10' href='shop-wishlist.php' aria-label='Add To Wishlist'></a><a class='btn btn-compare btn-tooltip mb-10' href='shop-compare.php' aria-label='Compare'></a><a class='btn btn-quickview btn-tooltip' aria-label='Quick view' href='#ModalQuickview' data-bs-toggle='modal'></a></div>
                    <div class='image-box'><span class='label bg-brand-2'>-17%</span><a href='shop-single-product-2.php?id=" . htmlspecialchars($producto['producto_id']) . "'><img src='assets/imgs/" . htmlspecialchars($producto['imagen_url']) . "' alt='Ecom'></a></div>
                    <div class='info-right'><a class='font-xs color-gray-500' href='shop-vendor-single.php'>Apple</a><br><a class='color-brand-3 font-sm-bold' href='shop-single-product-2.php'>" . htmlspecialchars($producto['nombre']) . "</a>
                      <div class='rating'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><span class='font-xs color-gray-500'>(65)</span></div>
                      <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>$$precio</strong><span class='color-gray-500 price-line'>$9999</span></div>
                      <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php' data-section='index' data-value='agregar_carrito'>Add To Cart</a></div> -->
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
                <h1 class="color-gray-1000 mb-10" data-section="index" data-value="descuento">Descuento</h1>
                <h3 class="color-brand-3 mb-5">70% OFF</h3>
                <h4 class="color-gray-500 mb-5" data-section="index" data-value="auriculares">Auriculares</h4>
                <div class="mt-30"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a></div>
              </div>
              <div class="box-img-banner"> <img class="img1" src="assets/imgs/page/homepage10/banner3.png" alt="Ecom"></div>
            </div>
          </div>
          <div class="col-lg-4 mb-20">
            <div class="banner-small-home10 bg-3">
              <div class="info-banner">
                <h1 class="color-gray-1000 mb-10" data-section="index" data-value="ofertas">Ofertas</h1>
                <h3 class="color-gray-500 mb-5" data-section="index" data-value="electronica">Electronica</h3>
                <h4 class="color-gray-500 mb-5" data-section="index" data-value="envio_gratis">Envio gratis</h4>
                <div class="mt-30"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                </div>
              </div>
              <div class="box-img-banner"> <img class="img2" src="assets/imgs/page/homepage10/banner4.png" alt="Ecom"></div>
            </div>
          </div>
          <div class="col-lg-4 mb-20">
            <div class="banner-small-home10 bg-32">
              <div class="info-banner">
                <h1 class="color-gray-1000" data-section="index" data-value="ultima_tendencia">Ultima <br class="d-none d-lg-block">Tendencia</h1>
                <h3 class="color-gray-500 mb-0" data-section="index" data-value="productos">Productos</h3>
                <div class="mt-30"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.php" data-section="index" data-value="comprar_ahora">Comprar ahora</a>
                </div>
              </div>
              <div class="box-img-banner"> <img class="img3" src="assets/imgs/page/homepage10/banner5.png" alt="Ecom"></div>
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
                <input class="input-newsletter font-xs" value="" placeholder="Ingresa tu mail">
                <button class="btn btn-brand-2" data-section="index" data-value="ingresar">Ingresar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="modal fade" id="ModalQuickview" tabindex="-1" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-xl">
        <div class="modal-content apply-job-form">
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-body p-30">
            <div class="row">
              <div class="col-lg-6">
                <div class="gallery-image">
                  <div class="galleries-2">
                    <div class="detail-gallery">
                      <div class="product-image-slider-2">
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></figure>
                        <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></figure>
                      </div>
                    </div>
                    <div class="slider-nav-thumbnails-2">
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></div>
                      </div>
                      <div>
                        <div class="item-thumb"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="box-tags">
                  <div class="d-inline-block mr-25"><span class="font-sm font-medium color-gray-900">Category:</span><a class="link" href="#">Smartphones</a></div>
                  <div class="d-inline-block"><span class="font-sm font-medium color-gray-900">Tags:</span><a class="link" href="#">Blue</a>,<a class="link" href="#">Smartphone</a></div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="product-info">
                  <h5 class="mb-15">SAMSUNG Galaxy S22 Ultra, 8K Camera & Video, Brightest Display Screen, S Pen Pro</h5>
                  <div class="info-by"><span class="bytext color-gray-500 font-xs font-medium">by</span><a class="byAUthor color-gray-900 font-xs font-medium" href="shop-vendor-list.html"> Ecom Tech</a>
                    <div class="rating d-inline-block"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65 reviews)</span></div>
                  </div>
                  <div class="border-bottom pt-10 mb-20"></div>
                  <div class="box-product-price">
                    <h3 class="color-brand-3 price-main d-inline-block mr-10">$2856.3</h3><span class="color-gray-500 price-line font-xl line-througt">$3225.6</span>
                  </div>
                  <div class="product-description mt-10 color-gray-900">
                    <ul class="list-dot">
                      <li>8k super steady video</li>
                      <li>Nightography plus portait mode</li>
                      <li>50mp photo resolution plus bright display</li>
                      <li>Adaptive color contrast</li>
                      <li>premium design & craftmanship</li>
                      <li>Long lasting battery plus fast charging</li>
                    </ul>
                  </div>
                  <div class="box-product-color mt-10">
                    <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span></p>
                    <ul class="list-colors">
                      <li class="disabled"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="Ecom" title="Pink"></li>
                      <li><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="Ecom" title="Gold"></li>
                      <li><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="Ecom" title="Pink Gold"></li>
                      <li><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="Ecom" title="Silver"></li>
                      <li class="active"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="Ecom" title="Pink Gold"></li>
                      <li class="disabled"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="Ecom" title="Black"></li>
                      <li class="disabled"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="Ecom" title="Red"></li>
                    </ul>
                  </div>
                  <div class="box-product-style-size mt-10">
                    <div class="row">
                      <div class="col-lg-12 mb-10">
                        <p class="font-sm color-gray-900">Style:<span class="color-brand-2 nameStyle">S22</span></p>
                        <ul class="list-styles">
                          <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                          <li class="active" title="S22">S22</li>
                          <li title="S22 + Standing Cover">S22 + Standing Cover</li>
                        </ul>
                      </div>
                      <div class="col-lg-12 mb-10">
                        <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span></p>
                        <ul class="list-sizes">
                          <li class="disabled" title="1GB">1GB</li>
                          <li class="active" title="512 GB">512 GB</li>
                          <li title="256 GB">256 GB</li>
                          <li title="128 GB">128 GB</li>
                          <li class="disabled" title="64GB">64GB</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="buy-product mt-5">
                    <p class="font-sm mb-10">Quantity</p>
                    <div class="box-quantity">
                      <div class="input-quantity">
                        <input class="font-xl color-brand-3" type="text" value="1"><span class="minus-cart"></span><span class="plus-cart"></span>
                      </div>
                      <div class="button-buy"><a class="btn btn-cart" href="shop-cart.php">Add to cart</a><a class="btn btn-buy" href="shop-checkout.php">Buy now</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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