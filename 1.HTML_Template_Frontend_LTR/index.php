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
    <title>Vestore - Página Oficial</title>
  </head>
  <body>
  <?php
    if(isset($_GET['accion'])){
      session_start();
      $_SESSION["usuario"] = false;
      session_abort();
    }
    include_once("main.php");
    ?>
  <!-- tengo que quitar incluide de main.php porque no cargaba la pagina -->
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
                        <div class="banner-big bg-11" style="background-image: url(assets/imgs/page/homepage1/banner.png)"><span class="font-sm text-uppercase">Tendencia ahora mismo</span>
                          <h2 class="mt-10">Descuento hasta un 50%</h2>
                          <h1>Dispositivos Moviles</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.html">Comprar ahora</a><a class="btn btn-link" href="shop-grid.html">Saber más</a></div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="banner-big bg-11-2" style="background-image: url(assets/imgs/page/homepage1/banner-hero-2.png)"><span class="font-sm text-uppercase">Tendencia ahora</span>
                          <h2 class="mt-10">Grandes descuentos 25%</h2>
                          <h1>Laptop & PC</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.html">Comprar ahora</a><a class="btn btn-link" href="shop-grid.html">Saber más</a></div>
                        </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="banner-big bg-11-3" style="background-image: url(assets/imgs/page/homepage1/banner-hero-3.png)"><span class="font-sm text-uppercase">Más vendido este mes</span>
                          <h2 class="mt-10">Hot Collection</h2>
                          <h1>Gafas de realidad virtual</h1>
                          <div class="row">
                            <div class="col-lg-5 col-md-7 col-sm-12">
                              <p class="font-sm color-brand-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus consequatur praesentium</p>
                            </div>
                          </div>
                          <div class="mt-30"><a class="btn btn-brand-2" href="shop-grid.html">Comprar ahora</a><a class="btn btn-link" href="shop-grid.html">Saber más</a></div>
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
                    <div class="banner-small banner-small-1 bg-13"><span class="color-danger text-uppercase font-sm-lh32">10%<span class="color-brand-3">de descuento</span></span>
                      <h4 class="mb-10">Apple Watch Serial 7</h4>
                      <p class="color-brand-3 font-desc">No te pierdas la última oportunidad.</p>
                      <div class="mt-20"><a class="btn btn-brand-3 btn-arrow-right" href="shop-grid.html">Comprar ahora</a></div>
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="banner-small banner-small-2 bg-14"><span class="color-danger text-uppercase font-sm-lh32">ÚLTIMA COLECCIÓN</span>
                      <h4 class="mb-10">Dispositivos y Software Apple</h4>
                      <p class="color-brand-3 font-md">No te pierdas la última oportunidad.</p>
                      <div class="mt-20"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.html">Comprar ahora</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="section-box mt-30">
        <div class="container">
          <div class="box-swiper">
            <div class="swiper-container swiper-group-9">
              <div class="swiper-wrapper pt-5">
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat1.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 1</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat2.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 2</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat3.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 3</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat4.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 4</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat5.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 5</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat6.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 6</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat7.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 7</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat8.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 8</a>
                        <p class="font-xs color-gray-500">2356 items</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item-cat"> 
                    <div class="box-category-1">
                      <div class="box-image"> 
                        <div class="inner-image"><img src="assets/imgs/page/homepage10/cat9.png" alt="Ecom"></div>
                      </div>
                      <div class="box-info"> <a class="color-gray-900 font-md-bold" href="#">Producto 9</a>
                        <p class="font-xs color-gray-500">2356 items</p>
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
            <h3 class="mb-5">Productos Destacados</h3> 
          </div>
          <div class="mt-0">
            <div class="list-products-5 list-products-home10">
              <div class="card-grid-style-3 home6-style home7-style">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                  <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage10/sp1.png" alt="Ecom"></a>
                  </div>
                  <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Airpods</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">La mejor calidad de sonido</a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                    <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Agregar al Carrito</a></div>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3 home6-style home7-style">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                  <div class="image-box"><span class="label bg-danger">Tendencia</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage10/sp2.png" alt="Ecom"></a>
                  </div>
                  <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Airpods Max</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">La mejor calidad de sonido</a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                    <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Agregar al Carrito</a></div>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3 home6-style home7-style">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                  <div class="image-box"><span class="label bg-success">New</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage10/sp3.png" alt="Ecom"></a>
                  </div>
                  <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Airpods Pro</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">La mejor calidad de sonido</a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                    <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Agregar al Carrito</a></div>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3 home6-style home7-style">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                  <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage10/sp4.png" alt="Ecom"></a>
                  </div>
                  <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Airpods 2da Generación</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">La mejor calidad de sonido</a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                    <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Agregar al Carrito</a></div>
                  </div>
                </div>
              </div>
              <div class="card-grid-style-3 home6-style home7-style">
                <div class="card-grid-inner">
                  <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                  <div class="image-box"><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage10/sp5.png" alt="Ecom"></a>
                  </div>
                  <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Airpods 3ra Generación</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">La mejor calidad de sonido</a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                    <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                    <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Agregar al Carrito</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- <section class="section-box mt-50">
        <div class="container">
          <div class="row">  
            <div class="col-lg-4 mb-20">
              <div class="banner-small-home10 bg-2">
                <div class="info-banner">
                  <h1 class="color-gray-1000 mb-10">Sale</h1>
                  <h3 class="color-brand-3 mb-5">70% OFF</h3>
                  <h4 class="color-gray-500 mb-5">Potted in home</h4>
                  <div class="mt-30"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.html">Shop now</a></div>
                </div>
                <div class="box-img-banner"> <img class="img1" src="assets/imgs/page/homepage10/banner3.png" alt="Ecom"></div>
              </div>
            </div>
            <div class="col-lg-4 mb-20">
              <div class="banner-small-home10 bg-3">
                <div class="info-banner">
                  <h1 class="color-gray-1000 mb-10">Deals</h1>
                  <h3 class="color-gray-500 mb-5">Cactus Collection</h3>
                  <h4 class="color-gray-500 mb-5">Free Shipping</h4>
                  <div class="mt-30"><a class="btn btn-brand-2 btn-arrow-right" href="shop-grid.html">Shop now</a></div>
                </div>
                <div class="box-img-banner"> <img class="img2" src="assets/imgs/page/homepage10/banner4.png" alt="Ecom"></div>
              </div>
            </div>
            <div class="col-lg-4 mb-20">
              <div class="banner-small-home10 bg-32">
                <div class="info-banner">
                  <h1 class="color-gray-1000">Hot <br class="d-none d-lg-block">Trend</h1>
                  <h3 class="color-gray-500 mb-0">Summer 2022</h3>
                  <div class="mt-0"><a class="btn btn-link-brand-2 btn-arrow-brand-2 font-normal" href="shop-grid.html">Learn more</a></div>
                </div>
                <div class="box-img-banner"> <img class="img3" src="assets/imgs/page/homepage10/banner5.png" alt="Ecom"></div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <section class="section-box mt-50">
        <div class="container">
          <div class="head-main bd-gray-200">
            <div class="row">
              <div class="col-xl-6 col-lg-4">
                <h3 class="mb-5">Mas Vendidos</h3>
                <p class="font-base color-gray-500">Productos Especiales de este Mes</p>
              </div>
              <div class="col-xl-6 col-lg-8">
                <ul class="nav nav-tabs text-uppercase pr-100" role="tablist">
                  <li><a class="active" href="#tab-3-all" data-bs-toggle="tab" role="tab" aria-controls="tab-3-all" aria-selected="true" data-index="1">Todos</a></li>
                  <li><a href="#tab-3-bestseller" data-bs-toggle="tab" role="tab" aria-controls="tab-3-bestseller" aria-selected="false" data-index="2">Mas Vendidos</a></li>
                  <li><a href="#tab-3-mostviewed" data-bs-toggle="tab" role="tab" aria-controls="tab-3-mostviewed" aria-selected="false" data-index="3">Mas Vistos</a></li>
                  <li><a href="#tab-3-topbrands" data-bs-toggle="tab" role="tab" aria-controls="tab-3-topbrands" aria-selected="false" data-index="4">Mejores Marcas</a></li>
                </ul>
                <!-- Button slider-->
                <div class="box-button-slider">
                  <div class="button-slider-nav" id="tab-3-all-nav">
                    <div class="swiper-button-next swiper-button-next-tab-1"></div>
                    <div class="swiper-button-prev swiper-button-prev-tab-1"></div>
                  </div>
                  <div class="button-slider-nav" id="tab-3-bestseller-nav" style="display: none;">
                    <div class="swiper-button-next swiper-button-next-tab-2"></div>
                    <div class="swiper-button-prev swiper-button-prev-tab-2"></div>
                  </div>
                  <div class="button-slider-nav" id="tab-3-mostviewed-nav" style="display: none;">
                    <div class="swiper-button-next swiper-button-next-tab-3"></div>
                    <div class="swiper-button-prev swiper-button-prev-tab-3"></div>
                  </div>
                  <div class="button-slider-nav" id="tab-3-topbrands-nav" style="display: none;">
                    <div class="swiper-button-next swiper-button-next-tab-4"></div>
                    <div class="swiper-button-prev swiper-button-prev-tab-4"></div>
                  </div>
                </div>
                <!-- End Button slider-->
              </div>
            </div>
          </div>
          <div class="tab-content tab-content-slider">
            <div class="tab-pane fade active show" id="tab-3-all" role="tabpanel" aria-labelledby="tab-3-all">
              <div class="box-swiper">
                <div class="swiper-container swiper-tab-1">
                  <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                      <div class="list-products-5">
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots1.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-danger">Tendencia</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots2.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods Max</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-success">Nuevo</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots3.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods Pro</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots4.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 2da Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots5.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 3ra Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-3-bestseller" role="tabpanel" aria-labelledby="tab-3-bestseller">
              <div class="box-swiper">
                <div class="swiper-container swiper-tab-2">
                  <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                      <div class="list-products-5">
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots1.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-danger">Tendencia</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots2.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods Max</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-success">Nuevo</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots3.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods Pro</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots4.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 2da Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots5.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 3ra Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-3-mostviewed" role="tabpanel" aria-labelledby="tab-3-mostviewed">
              <div class="box-swiper">
                <div class="swiper-container swiper-tab-3">
                  <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                      <div class="list-products-5">
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots1.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-danger">Tendencia</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots2.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods Max</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-success">Nuevo</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots3.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods Pro</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots4.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 2da Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots5.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 3ra Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-3-topbrands" role="tabpanel" aria-labelledby="tab-3-topbrands">
              <div class="box-swiper">
                <div class="swiper-container swiper-tab-4">
                  <div class="swiper-wrapper pt-5">
                    <div class="swiper-slide">
                      <div class="list-products-5">
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots1.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-danger">Tendencia</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage10/pots2.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-3.html">Airpods Max</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><span class="label bg-success">Nuevo</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots3.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods Pro</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots4.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 2da Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                        <div class="card-grid-style-3">
                          <div class="card-grid-inner">
                            <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                            <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage10/pots5.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><span class="font-xs color-gray-500">Apple</span><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Airpods 3ra Generación</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                              <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                              <ul class="list-features">
                                <li>text1</li>
                                <li>text2</li>
                                <li>text3</li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section-box mt-10 mb-50">
        <div class="container">
          <ul class="list-col-5">
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/delivery.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Envío gratis</h5>
                  <p class="font-sm color-gray-500">Para compras mayores a $40.000</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/support.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Soporte</h5>
                  <p class="font-sm color-gray-500">Compra con un experto</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/voucher.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Tarjetas de Regalo</h5>
                  <p class="font-sm color-gray-500">Recomenda a un amigo</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/return.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Reembolsos</h5>
                  <p class="font-sm color-gray-500">Reembolsos asegurados</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/secure.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Compra Segura</h5>
                  <p class="font-sm color-gray-500">100% Protegido</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="section-box box-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3 class="color-white">Suscribete y consigue 10% de Descuento</h3>
              <p class="font-lg color-white">Recibe actualizaciones por correo electrónico sobre nuestra tienda y ofertas especiales</span></p>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-12">
              <div class="box-form-newsletter mt-15">
                <form class="form-newsletter">
                  <input class="input-newsletter font-xs" value="" placeholder="Ingresa tu mail">
                  <button class="btn btn-brand-2">Ingresar</button>
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
                        <div class="button-buy"><a class="btn btn-cart" href="shop-cart.html">Add to cart</a><a class="btn btn-buy" href="shop-checkout.html">Buy now</a></div>
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
    <!-- Count down--><script src="assets/js/vendors/jquery.elevatezoom.js"></script>
<script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/main.js?v=3.0.0"></script>
    <script src="assets/js/shop.js?v=1.2.1"></script>
  </body>
</html>