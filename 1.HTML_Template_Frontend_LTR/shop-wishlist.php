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
  ?>
  <main class="main">
    <section class="section-box shop-template">
      <div class="container">
        <div class="box-wishlist">
          <div class="head-wishlist">
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-all" type="checkbox">
              </div>
              <div class="wishlist-product"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="producto">Product</span></div>
                      <div class="wishlist-price"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="precio">Price</span></div>
                      <div class="wishlist-status"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="status_stock">Stock status</span></div>
                      <div class="wishlist-action"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="accion">Action</span></div>
                      <div class="wishlist-remove"><span class="font-md-bold color-brand-3" data-section="page-account" data-value="remover">Remove</span></div>
            </div>
          </div>
          <div class="content-wishlist">
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$2.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub2.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$1.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub3.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$3.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub4.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$4.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub5.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$3.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$2.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
            <div class="item-wishlist">
              <div class="wishlist-cb">
                <input class="cb-layout cb-select" type="checkbox">
              </div>
              <div class="wishlist-product">
                <div class="product-wishlist">
                  <div class="product-image"><a href="shop-single-product.html"><img src="assets/imgs/page/product/img-sub2.png" alt="Ecom"></a></div>
                  <div class="product-info"><a href="shop-single-product.html">
                      <h6 class="color-brand-3">Samsung 36&quot; French door 28 cu. ft. Smart Energy Star Refrigerator </h6>
                    </a>
                    <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  </div>
                </div>
              </div>
              <div class="wishlist-price">
                <h4 class="color-brand-3">$1.51</h4>
              </div>
              <div class="wishlist-status"><span class="btn btn-gray font-md-bold color-brand-3" data-section="shop-wishlist" data-value="en_stock">In Stock</span></div>
              <div class="wishlist-action"><a class="btn btn-cart font-sm-bold" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add to Cart</a></div>
              <div class="wishlist-remove"><a class="btn btn-delete" href="#"></a></div>
            </div>
          </div>
        </div>
        <h4 class="color-brand-3" data-section="shop-wishlist" data-value="tambien_podria_gustarte">You may also like</h4>
        <div class="list-products-5 mt-20 mb-40">
          <div class="card-grid-style-3">
            <div class="card-grid-inner">
              <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
              <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
              <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Razer Power Up Gaming Bundle V2 - Cynosa Lite</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add To Cart</a></div>
                <ul class="list-features">
                  <li>27-inch (diagonal) Retina 5K display</li>
                  <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                  <li>AMD Radeon Pro 5300 graphics</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-grid-style-3">
            <div class="card-grid-inner">
              <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
              <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp4.png" alt="Ecom"></a></div>
              <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add To Cart</a></div>
                <ul class="list-features">
                  <li>27-inch (diagonal) Retina 5K display</li>
                  <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                  <li>AMD Radeon Pro 5300 graphics</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-grid-style-3">
            <div class="card-grid-inner">
              <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
              <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp5.png" alt="Ecom"></a></div>
              <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">Samsung Galaxy Tab A7 Lite, 8.7&quot; Tablet 32</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add To Cart</a></div>
                <ul class="list-features">
                  <li>27-inch (diagonal) Retina 5K display</li>
                  <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                  <li>AMD Radeon Pro 5300 graphics</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-grid-style-3">
            <div class="card-grid-inner">
              <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
              <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp6.png" alt="Ecom"></a></div>
              <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">2022 Apple iMac with Retina 5K Display 8GB RAM</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add To Cart</a></div>
                <ul class="list-features">
                  <li>27-inch (diagonal) Retina 5K display</li>
                  <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                  <li>AMD Radeon Pro 5300 graphics</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-grid-style-3">
            <div class="card-grid-inner">
              <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.php" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.php" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
              <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp7.png" alt="Ecom"></a></div>
              <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.php">Apple</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product.html">HDR Smart Portable Projector - SP-LSP3B</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                <div class="mt-20 box-btn-cart"><a class="btn btn-cart" href="shop-cart.php" data-section="shop-wishlist" data-value="añadir_al_carrito">Add To Cart</a></div>
                <ul class="list-features">
                  <li>27-inch (diagonal) Retina 5K display</li>
                  <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                  <li>AMD Radeon Pro 5300 graphics</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <h4 class="color-brand-3" data-section="shop-wishlist" data-value="items_vistos_recientemente">Recently viewed items</h4>
        <div class="row mt-40">
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card-grid-style-2 card-grid-none-border hover-up">
              <div class="image-box"><a href="#"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a>
              </div>
              <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="#">HP 24 All-in-One PC, Intel Core i3-1115G4</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card-grid-style-2 card-grid-none-border hover-up">
              <div class="image-box"><a href="#"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a>
              </div>
              <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="#">HP 22 All-in-One PC, Intel Pentium Silver</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card-grid-style-2 card-grid-none-border hover-up">
              <div class="image-box"><a href="#"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a>
              </div>
              <div class="info-right"><span class="font-xs color-gray-500">Class</span><br><a class="color-brand-3 font-xs-bold" href="#">Class 4K UHD (2160P) LED Roku Smart TV HDR</a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card-grid-style-2 card-grid-none-border hover-up">
              <div class="image-box"><a href="#"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a>
              </div>
              <div class="info-right"><span class="font-xs color-gray-500">LG</span><br><a class="color-brand-3 font-xs-bold" href="#">LG 65&quot; Class 4K UHD Smart TV OLED A1 Series </a>
                <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
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