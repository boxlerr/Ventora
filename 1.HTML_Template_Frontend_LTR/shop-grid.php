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
    <title>Lista Productos</title>
  </head>
  <body>
    <?php
    include_once("consultas_bd.php");
    include_once("main2.php");
    include_once("cambio.php");
    ?>
    <main class="main">
      <!-- <div class="section-box d-none d-md-block">
        <div class="breadcrumbs-div">
          <div class="container">
            <ul class="breadcrumb">
              <li><a class="font-xs color-gray-1000" href="index.html">Home</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.html">Electronics</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.html">Cell phone</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.html">Accessories</a></li>
            </ul>
          </div>
        </div>
      </div> -->
      <div class="section-box shop-template mt-30">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 order-first order-lg-first d-none d-md-block">
              <div class="sidebar-border mb-0">
                <div class="sidebar-head">
                  <h6 class="color-gray-900">Product Categories</h6>
                </div>
                <div class="sidebar-content">
                  <ul class="list-nav-arrow">
                    <?php
                    $categorias=getCategorias();
                    $i=0;
                    while($i<15 && $categorias[0]>$i){   
                      echo"<li><a href='shop-grid.html'>".htmlspecialchars($categorias[1][$i]['nombre'])."<span class='number'>09</span></a></li>";
                      $i++;
                    }
                    ?>
                    </ul>
                    <?php
                    if($i==15 && $categorias[0]>$i){

                      echo"                      
                      <div>
                        <div class='collapse' id='moreMenu'>
                          <ul class='list-nav-arrow'>";
                          while($categorias[0]>$i){   
                            echo"<li><a href='shop-grid.html'>".htmlspecialchars($categorias[1][$i]['nombre'])."<span class='number'>09</span></a></li>";
                            $i++;
                          }
                          echo"
                          </ul>
                        </div><a class='link-see-more mt-5' data-bs-toggle='collapse' href='#moreMenu' role='button' aria-expanded='false' aria-controls='moreMenu'>See More</a>
                      </div>
                      ";
                    } 
                    ?>
                </div>
              </div>
              <div class="sidebar-border mb-40">
                <div class="sidebar-head">
                  <h6 class="color-gray-900">Products Filter</h6>
                </div>
                <div class="sidebar-content">
                  <h6 class="color-gray-900 mt-10 mb-10">Price</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                  <input type="checkbox" checked="checked"><span class="text-small">Under $<?php echo round(100 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">145</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$<?php echo round(100 * $moneda['precio_moneda']); ?> - $<?php echo round(200 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">56</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$<?php echo round(100 * $moneda['precio_moneda']); ?> - $<?php echo round(400 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">23</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$<?php echo round(400 * $moneda['precio_moneda']); ?> - $<?php echo round(600 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">43</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$<?php echo round(600 * $moneda['precio_moneda']); ?> - $<?php echo round(800 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">65</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Over $<?php echo round(1000 * $moneda['precio_moneda']); ?></span><span class="checkmark"></span>
                      </label><span class="number-item">56</span>
                    </li>
                  </ul>
                  <h6 class="color-gray-900 mt-20 mb-10">Brands</h6>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">Apple</span><span class="checkmark"></span>
                      </label><span class="number-item">12</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Sony</span><span class="checkmark"></span>
                      </label><span class="number-item">34</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Toshiba</span><span class="checkmark"></span>
                      </label><span class="number-item">56</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Assus</span><span class="checkmark"></span>
                      </label><span class="number-item">78</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Samsung</span><span class="checkmark"></span>
                      </label><span class="number-item">23</span>
                    </li>
                  </ul>
                  <a class="btn btn-filter font-sm color-brand-3 font-medium mt-10" href="#ModalFiltersForm" data-bs-toggle="modal">More Fillters</a>
                </div>
              </div>
              <!-- <div class="box-slider-item mb-30">
                <div class="head pb-15 border-brand-2">
                  <h5 class="color-gray-900">Best seller</h5>
                </div>
                <div class="content-slider">
                  <div class="box-swiper slide-shop">
                    <div class="swiper-container swiper-best-seller">
                      <div class="swiper-wrapper pt-5">
                        <div class="swiper-slide">
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/camera.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">HP Slim Desktop, Intel Celeron J4025, 4GB RAM</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$150</strong><span class="color-gray-500 font-sm price-line">$187</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/clock.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">Class 4K UHD (2160P) LED Roku Smart TV HDR</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$2900</strong><span class="color-gray-500 font-sm price-line">$3200</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/airpod.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">HP 11.6&quot; Chromebook, AMD A4, 4GB RAM, 32GB Storage</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$160</strong><span class="color-gray-500 font-sm price-line">$168</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/cat-img-7.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">LG 65&quot; Class 4K UHD Smart TV OLED A1 Series</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$325</strong><span class="color-gray-500 font-sm price-line">$392</span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/cat-img-8.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">Lenovo Legion 5i 15.6&quot; Laptop, Intel Core i5</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$150</strong><span class="color-gray-500 font-sm price-line">$187</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/cat-img-1.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">SAMSUNG Galaxy Tab A7 Lite, 8.7&quot; Tablet 32GB</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$2900</strong><span class="color-gray-500 font-sm price-line">$3200</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/cat-img-2.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">Apple AirPods Pro with MagSafe Charging</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$160</strong><span class="color-gray-500 font-sm price-line">$168</span>
                              </div>
                            </div>
                          </div>
                          <div class="card-grid-style-2 card-grid-none-border border-bottom mb-10">
                            <div class="image-box"><a href="shop-single-product-3.html"><img src="assets/imgs/page/homepage2/cat-img-3.png" alt="Ecom"></a>
                            </div>
                            <div class="info-right"><a class="color-brand-3 font-xs-bold" href="shop-single-product-3.html">Razer Power Up Gaming Bundle V2 - Cynosa</a>
                              <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                              <div class="price-info"><strong class="font-md-bold color-brand-3 price-main">$325</strong><span class="color-gray-500 font-sm price-line">$392</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next-style-2 swiper-button-next-bestseller"></div>
                    <div class="swiper-button-prev swiper-button-prev-style-2 swiper-button-prev-bestseller"></div>
                  </div>
                </div>
              </div> -->
              <!-- <div class="box-slider-item">
                <div class="head pb-15 border-brand-2">
                  <h5 class="color-gray-900">Product Tags</h5>
                </div>
                <div class="content-slider mb-50"><a class="btn btn-border mr-5" href="shop-grid.html">Games</a><a class="btn btn-border mr-5" href="shop-grid.html">Electronics</a><a class="btn btn-border mr-5" href="shop-grid.html">Video</a><a class="btn btn-border mr-5" href="shop-grid.html">Cellphone</a><a class="btn btn-border mr-5" href="shop-grid.html">Indoor</a><a class="btn btn-border mr-5" href="shop-grid.html">VGA Card</a><a class="btn btn-border mr-5" href="shop-grid.html">USB</a><a class="btn btn-border mr-5" href="shop-grid.html">Lightning</a><a class="btn btn-border mr-5" href="shop-grid.html">Camera</a><a class="btn btn-border" href="shop-grid.html">Window</a><a class="btn btn-border mr-5" href="shop-grid.html">Air Vent</a><a class="btn btn-border mr-5" href="shop-grid.html">Bedroom</a><a class="btn btn-border mr-5" href="shop-grid.html">Laptop</a><a class="btn btn-border mr-5" href="shop-grid.html">Dashboard</a><a class="btn btn-border mr-5" href="shop-grid.html">Keyboard</a></div>
              </div> -->
              <div class="banner-right h-500 text-center mb-30 d-none d-md-block">
                  <span class="text-no font-11">No.9</span>
                  <h5 class="font-23 mt-20">Sensitive Touch<br class="d-none d-lg-block">without fingerprint</h5>
                  <p class="text-desc font-16 mt-15">Smooth handle and accurate click</p>
                  <a href="shop-single-product-2.html">View Details</a>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 order-first order-lg-last">
              <div class="banner-ads-top mb-30"><a href="shop-single-product-3.html"><img src="assets/imgs/page/shop/banner.png" alt="Ecom"></a></div>
              <!-- <div class="box-filters mt-0 pb-5 border-bottom"> -->
                <div class="row filtros_celular">
                  <div class="col-xl-2 col-lg-3 col-md-6 mb-10 text-lg-start text-center d-none d-md-block"><a class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
                  <div class="col-xl-3 col-lg-5 col-md-6 mb-10 text-lg-end text-center d-none d-md-block">
                    <div class="d-inline-block"><span class="font-sm color-gray-500 font-medium">Sort by:</span>
                      <div class="dropdown dropdown-sort border-1-right">
                        <button class="btn dropdown-toggle font-sm color-gray-900 font-medium" id="dropdownSort" type="button" data-bs-toggle="dropdown" aria-expanded="false">Latest products</button>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownSort" style="margin: 0px;">
                          <li><a class="dropdown-item active" href="#">Latest products</a></li>
                          <li><a class="dropdown-item" href="#">Oldest products</a></li>
                          <li><a class="dropdown-item" href="#">Comments products</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-7 col-lg-4 col-md-12 d-none d-md-block">
                    <input class="form-control font-xs" type="text" value="" placeholder="Search for items">
                  </div>
                </div>
              <!-- </div> -->
              <div class="row mt-20">
                <?php   
                $productos = getProductos();
                foreach($productos as $producto){
                  $precio = round($producto['precio'] * $moneda['precio_moneda']);
                  echo"
                  <div class='col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12'>
                    <div class='card-grid-style-3 home6-style home7-style'>
                      <div class='card-grid-inner'>
                        <div class='tools'>
                          <!--<a class='btn btn-trend btn-tooltip mb-10' href='#' aria-label='Trend' data-bs-placement='left'></a> -->
                          <!--<a class='btn btn-wishlist btn-tooltip mb-10' href='shop-wishlist.html' aria-label='Add To Wishlist'></a> -->
                          <!--<a class='btn btn-compare btn-tooltip mb-10' href='shop-compare.php' aria-label='Compare'></a> -->
                          <!--<a class='btn btn-quickview btn-tooltip' aria-label='Quick view' href='#ModalQuickview' data-bs-toggle='modal'></a>-->
                        </div>
                        <div class='image-box'><span class='label bg-brand-2'>-17%</span><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'><img src='assets/imgs/".htmlspecialchars($producto['imagen_url'])."' alt='Ecom'></a></div>
                        <div class='info-right'><a class='font-xs color-gray-500' href='shop-vendor-single.php'>Amish</a><br><a class='color-brand-3 font-sm-bold' href='shop-single-product-2.html'>".htmlspecialchars($producto['nombre'])."</a>
                          <div class='rating'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><span class='font-xs color-gray-500'>(65)</span></div>
                          <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>$".$precio ."</strong><span class='color-gray-500 price-line'>$3225.6</span></div>
                          <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php'>Add To Cart</a></div> -->
                          <ul class='list-features'>
                            <li>".htmlspecialchars($producto['descripcion'])."</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  ";
                }
                ?>
              </div>
              <nav class>
                <ul id="flexcentrado" class="pagination">
                  <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">4</a></li>
                  <li class="page-item"><a class="page-link" href="#">5</a></li>
                  <li class="page-item"><a class="page-link" href="#">6</a></li>
                  <li class="page-item"><a class="page-link page-next" href="#"></a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <section class="section-box box-newsletter">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-12">
              <h3>Subscrible &amp; Get <span class="color-warning">10%</span> Discount</h3>
              <p class="font-lg">Get E-mail updates about our latest shop and <span class="font-lg-bold">special offers.</span></p>
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
              <h5 class="modal-title color-gray-1000 filters-icon">Advance Filters</h5>
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
            <div class="modal-footer justify-content-start pl-30"><a class="btn btn-buy w-auto" href="#">Apply Filter</a><a class="btn font-sm-bold color-gray-500" href="#">Reset Filter</a></div>
          </div>
        </div>
      </div>
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
    <!-- Count down--><script src="assets/js/vendors/jquery.elevatezoom.js"></script>
<script src="assets/js/vendors/slick.js"></script>
    <script src="assets/js/main.js?v=3.0.0"></script>
    <script src="assets/js/shop.js?v=1.2.1"></script>
    <script src="assets/js/javaS.js"></script>
  </body>
</html>