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
    <title>Shop Grid - Ecom Marketplace Template</title>
  </head>
  <body>
    <?php
    include_once("main2.php");
    ?>
    <main class="main">
      <div class="section-box d-none d-md-block">
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
      </div>
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
                    <li><a href="shop-grid.html">Computers &amp; Laptop<span class="number">09</span></a></li>
                    <li><a href="shop-grid.html">Electric accessories<span class="number">12</span></a></li>
                    <li><a href="shop-grid.html">Mainboard &amp; CPU<span class="number">24</span></a></li>
                    <li><a href="shop-grid.html">Bluetooth devices<span class="number">34</span></a></li>
                    <li><a href="shop-grid.html">Mouse &amp; Keyboard<span class="number">65</span></a></li>
                    <li><a href="shop-grid.html">Wired Headphone<span class="number">15</span></a></li>
                    <li><a href="shop-grid.html">Gaming Gatgets<span class="number">76</span></a></li>
                    <li><a href="shop-grid.html">Smart watches<span class="number">89</span></a></li>
                    <li><a href="shop-grid.html">Cell Phones<span class="number">23</span></a></li>
                    <li><a href="shop-grid.html">Headphone<span class="number">98</span></a></li>
                  </ul>
                  <div>
                    <div class="collapse" id="moreMenu">
                      <ul class="list-nav-arrow">
                        <li><a href="shop-grid.html">Home theater<span class="number">98</span></a></li>
                        <li><a href="shop-grid.html">Cameras & drones<span class="number">124</span></a></li>
                        <li><a href="shop-grid.html">PC gaming<span class="number">56</span></a></li>
                        <li><a href="shop-grid.html">Smart home<span class="number">87</span></a></li>
                        <li><a href="shop-grid.html">Networking<span class="number">36</span></a></li>
                      </ul>
                    </div><a class="link-see-more mt-5" data-bs-toggle="collapse" href="#moreMenu" role="button" aria-expanded="false" aria-controls="moreMenu">See More</a>
                  </div>
                </div>
              </div>
              <div class="sidebar-border mb-40">
                <div class="sidebar-head">
                  <h6 class="color-gray-900">Products Filter</h6>
                </div>
                <div class="sidebar-content">
                  <h6 class="color-gray-900 mt-10 mb-10">Price</h6>
                  <div class="box-slider-range mt-20 mb-15">
                    <div class="row mb-20">
                      <div class="col-sm-12">
                        <div id="slider-range"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-12">
                        <label class="lb-slider font-sm color-gray-500">Price Range: &nbsp</label><span class="min-value-money font-sm"></span>
                        <label class="lb-slider font-sm font-medium"></label>-
                        <span class="max-value-money font-sm font-medium"></span>
                      </div>
                      <div class="col-lg-12">
                        <input class="form-control min-value" type="hidden" name="min-value" value="">
                        <input class="form-control max-value" type="hidden" name="max-value" value="">
                      </div>
                    </div>
                  </div>
                  <ul class="list-checkbox">
                    <li>
                      <label class="cb-container">
                        <input type="checkbox" checked="checked"><span class="text-small">Free - $100</span><span class="checkmark"></span>
                      </label><span class="number-item">145</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$100 - $200</span><span class="checkmark"></span>
                      </label><span class="number-item">56</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$200 - $400</span><span class="checkmark"></span>
                      </label><span class="number-item">23</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$400 - $600</span><span class="checkmark"></span>
                      </label><span class="number-item">43</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">$600 - $800</span><span class="checkmark"></span>
                      </label><span class="number-item">65</span>
                    </li>
                    <li>
                      <label class="cb-container">
                        <input type="checkbox"><span class="text-small">Over $1000</span><span class="checkmark"></span>
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
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card-grid-style-3 home6-style home7-style">
                    <div class="card-grid-inner">
                      <div class="tools"><a class="btn btn-trend btn-tooltip mb-10" href="#" aria-label="Trend" data-bs-placement="left"></a><a class="btn btn-wishlist btn-tooltip mb-10" href="shop-wishlist.html" aria-label="Add To Wishlist"></a><a class="btn btn-compare btn-tooltip mb-10" href="shop-compare.html" aria-label="Compare"></a><a class="btn btn-quickview btn-tooltip" aria-label="Quick view" href="#ModalQuickview" data-bs-toggle="modal"></a></div>
                      <div class="image-box"><span class="label bg-brand-2">-17%</span><a href="shop-single-product-2.html"><img src="assets/imgs/page/homepage1/imgsp3.png" alt="Ecom"></a></div>
                      <div class="info-right"><a class="font-xs color-gray-500" href="shop-vendor-single.html">Amish</a><br><a class="color-brand-3 font-sm-bold" href="shop-single-product-2.html">Crown of Thorns. 2 months. Good vitality. Including pots.</a>
                        <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500">(65)</span></div>
                        <div class="price-info mb-10"><strong class="font-lg-bold color-brand-3 price-main">$2856.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                        <div class="mt-10 box-btn-cart"><a class="btn btn-cart" href="shop-cart.html">Add To Cart</a></div>
                        <ul class="list-features">
                          <li>27-inch (diagonal) Retina 5K display</li>
                          <li>3.1GHz 6-core 10th-generation Intel Core i5</li>
                          <li>AMD Radeon Pro 5300 graphics</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <nav>
                <ul class="pagination">
                  <li class="page-item"><a class="page-link page-prev" href="#"></a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link active" href="#">2</a></li>
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
      <section class="section-box mt-90 mb-50">
        <div class="container">
          <ul class="list-col-5">
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/delivery.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Free Delivery</h5>
                  <p class="font-sm color-gray-500">From all orders over $10</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/support.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Support 24/7</h5>
                  <p class="font-sm color-gray-500">Shop with an expert</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/voucher.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Gift voucher</h5>
                  <p class="font-sm color-gray-500">Refer a friend</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/return.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Return &amp; Refund</h5>
                  <p class="font-sm color-gray-500">Free return over $200</p>
                </div>
              </div>
            </li>
            <li>
              <div class="item-list">
                <div class="icon-left"><img src="assets/imgs/template/secure.svg" alt="Ecom"></div>
                <div class="info-right">
                  <h5 class="font-lg-bold color-gray-100">Secure payment</h5>
                  <p class="font-sm color-gray-500">100% Protected</p>
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
      <div class="footer-1">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 width-25 mb-30">
              <h4 class="mb-30 color-gray-1000">Contact</h4>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Address:</strong> 502 New Design Str, Melbourne, San Francisco, CA 94110, United States</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Phone:</strong> (+01) 123-456-789</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">E-mail:</strong> contact@ecom-market.com</div>
              <div class="font-md mb-20 color-gray-900"><strong class="font-md-bold">Hours:</strong> 8:00 - 17:00, Mon - Sat</div>
              <div class="mt-30"><a class="icon-socials icon-facebook" href="#"></a><a class="icon-socials icon-instagram" href="#"></a><a class="icon-socials icon-twitter" href="#"></a><a class="icon-socials icon-linkedin" href="#"></a></div>
            </div>
            <div class="col-lg-3 width-20 mb-30">
              <h4 class="mb-30 color-gray-1000">Make Money with Us</h4>
              <ul class="menu-footer">
                <li><a href="page-about-us.html">Mission &amp; Vision</a></li>
                <li><a href="page-about-us.html">Our Team</a></li>
                <li><a href="page-careers.html">Careers</a></li>
                <li><a href="#">Press &amp; Media</a></li>
                <li><a href="#">Advertising</a></li>
                <li><a href="#">Testimonials</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">Company</h4>
              <ul class="menu-footer">
                <li><a href="blog-2.html">Our Blog</a></li>
                <li><a href="#">Plans &amp; Pricing</a></li>
                <li><a href="#">Knowledge Base</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Office Center</a></li>
                <li><a href="blog.html">News &amp; Events</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-16 mb-30">
              <h4 class="mb-30 color-gray-1000">My account</h4>
              <ul class="menu-footer">
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Editor Help</a></li>
                <li><a href="#">Community</a></li>
                <li><a href="#">Live Chatting</a></li>
                <li><a href="page-contact.html">Contact Us</a></li>
                <li><a href="#">Support Center</a></li>
              </ul>
            </div>
            <div class="col-lg-3 width-23">
              <h4 class="mb-30 color-gray-1000">App &amp; Payment</h4>
              <div>
                <p class="font-md color-gray-900">Download our Apps and get extra 15% Discount on your first Order&mldr;!</p>
                <div class="mt-20"><a class="mr-10" href="#"><img src="assets/imgs/template/appstore.png" alt="Ecom"></a><a href="#"><img src="assets/imgs/template/google-play.png" alt="Ecom"></a></div>
                <p class="font-md color-gray-900 mt-20 mb-10">Secured Payment Gateways</p><img src="assets/imgs/template/payment-method.png" alt="Ecom">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-2">
        <div class="footer-bottom-1">
          <div class="container">
            <div class="footer-2-top mb-20"><a href="index.html"><img alt="Ecom" src="assets/imgs/template/logo-2.svg"></a><a class="font-xs color-gray-1000" href="#">EcomMarket.com</a><a class="font-xs color-gray-1000" href="#">Ecom Partners</a><a class="font-xs color-gray-1000" href="#">Ecom Bussiness</a><a class="font-xs color-gray-1000" href="#">Ecom Factory</a></div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Electronic:</h6>
              </div>
              <div class="tags-footer"><a href="shop-fullwidth.html">Cell Phones</a><a href="shop-grid.html">Headphones</a><a href="shop-grid-2.html">Television &amp; Video</a><a href="shop-list.html">Game Controller</a><a href="shop-list-2.html">Apple Watch</a><a href="shop-grid.html">HTC</a><a href="shop-grid.html">Ipad</a><a href="shop-grid.html">Keyboard</a><a href="shop-grid.html">Samsung</a><a href="shop-grid.html">Wireless Speaker</a><a href="shop-grid.html">Samsung Galaxy</a><a href="shop-grid.html">Gaming Mouse</a><a href="shop-grid.html">eBook Readers</a><a href="shop-grid.html">Service Plans</a><a href="shop-grid.html">Home Audio</a><a href="shop-grid.html">Office Electronics</a><a href="shop-grid.html">Lenovo</a><a href="shop-grid.html">Mackbook Pro M1</a><a href="shop-grid.html">HD Videos Player</a></div>
            </div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Furniture:</h6>
              </div>
              <div class="tags-footer"><a href="shop-grid.html">Sofa</a><a href="shop-grid.html">Chair</a><a href="shop-grid.html">Dining Table</a><a href="shop-grid.html">Living Room</a><a href="shop-grid.html">Table Lamp</a><a href="shop-grid.html">Night Stand</a><a href="shop-grid.html">Computer Desk</a><a href="shop-grid.html">Bar Table</a><a href="shop-grid.html">Pillow</a><a href="shop-grid.html">Radio</a><a href="shop-grid.html">Clock</a><a href="shop-grid.html">Bad Room</a><a href="shop-grid.html">Stool</a><a href="shop-grid.html">Television</a><a href="shop-grid.html">wardrobe</a><a href="shop-grid.html">Living Room Tables</a><a href="shop-grid.html">Dressers</a><a href="shop-grid.html">Patio Sofas</a><a href="shop-grid.html">Nursery</a><a href="shop-grid.html">Kitchen</a><a href="shop-grid.html">Accent Furniture</a><a href="shop-grid.html">Replacement Parts</a></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom mt-20">
            <div class="row">
              <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-gray-900 font-sm">Copyright &copy; 2022 Ecom Market. All rights reserved.</span></div>
              <div class="col-lg-6 col-md-12 text-center text-lg-end">
                <ul class="menu-bottom">
                  <li><a class="font-sm color-gray-900" href="page-term.html">Conditions of Use</a></li>
                  <li><a class="font-sm color-gray-900" href="page-term.html">Privacy Notice</a></li>
                  <li><a class="font-sm color-gray-900" href="page-careers.html">Interest-Based Ads</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
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