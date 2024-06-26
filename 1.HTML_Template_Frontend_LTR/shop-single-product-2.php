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
    <title>Single Product 2 - Ecom Marketplace Template</title>
  </head>
  <body>
    <?php
    include_once("consultas_bd.php");
    include_once("main.php");
    include_once("cambio.php");
    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $producto = getProducto($id);
      $precio = round($producto['precio'] * $moneda['precio_moneda']);
      $precio = number_format($precio, 0, ',', '.');
    }
    ?>
    <main class="main">
      <div class="section-box">
      </div>
      <section class="section-box shop-template">
        <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <div class="gallery-image">
                <div class="galleries">
                  <div class="detail-gallery">
                    <label class="label">-17%</label>
                    <div class="product-image-slider">
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-1.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-2.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-3.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-4.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-5.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-6.jpg" alt="product image"></figure>
                      <figure class="border-radius-10"><img src="assets/imgs/page/product/img-gallery-7.jpg" alt="product image"></figure>
                    </div>
                  </div>
                  <div class="slider-nav-thumbnails">
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
            </div>
            <div class="col-lg-7">
              <?php
              $prodWish = buscarWishlist($producto['producto_id']);
              ?>
              <h3 class="color-brand-3 mb-25"><?php echo htmlspecialchars($producto['nombre']) ?></h3>
              <form class="row align-items-center" method="post" action="agregarWishlist.php">
                <div class="col-lg-4 col-md-4 col-sm-3 mb-mobile">
                  <div class="rating mt-5"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500 font-medium"> (65 reviews)</span></div>
                </div>
                <input type="hidden" value="<?php echo htmlspecialchars($producto['producto_id']) ?>" name="producto_id">
                <?php
                if($usuario){
                  if($prodWish){
                    echo "<div class='col-lg-8 col-md-8 col-sm-9 text-start text-sm-end'><span class='mr-20'><button type='submit' name='quitarWishlist' class='btn btn-wishlist wishlist_seleccionado mr-5 opacity-100 transform-none'></button><span class='font-md color-gray-900'>Quitar de favoritos</span></span></div>";
                  }else{
                    echo "<div class='col-lg-8 col-md-8 col-sm-9 text-start text-sm-end'><span class='mr-20'><button type='submit' name='agregarWishlist' class='btn btn-wishlist mr-5 opacity-100 transform-none'></button><span class='font-md color-gray-900'>Agregar a favoritos</span></span></div>";
                  }
                } else{
                  echo "<div class='col-lg-8 col-md-8 col-sm-9 text-start text-sm-end'><a class='mr-20' href='page-login.php'><span class='btn btn-wishlist mr-5 opacity-100 transform-none'></span><span class='font-md color-gray-900'>Add to Wish list</span></a></div>";
                }
                ?>
              </form>
              <div class="border-bottom pt-10 mb-20"></div>
              <div class="row">
                <div class="col-lg-7">
                  <div class="box-product-price">
                    <h3 class="color-brand-3 price-main d-inline-block mr-10"><?php echo $precio ?></h3> <!-- <span class="color-gray-500 price-line font-xl line-througt">$3225.6</span> -->
                  </div>
                  <div class="product-description color-gray-900">
                    <ul class="list-dot">
                      <li><?php echo htmlspecialchars($producto['descripcion']) ?></li>
                    </ul>
                  </div>
                  <div class="border-bottom mt-20 mb-20"></div>
                  <div class="info-product">
                    <div class="row align-items-end">
                      <div class="col-lg-6 col-md-6 mb-20"><span class="font-sm font-medium color-gray-900">SKU:<span class="color-gray-500">iphone12pro128</span><br>Category:<span class="color-gray-500">Smartphones</span><br>Tags:<span class="color-gray-500">Blue, Smartphone</span></span></div>
                      <div class="col-lg-6 col-md-6 mb-20"><span class="font-sm font-medium color-gray-900">Free Delivery<br><span class="color-gray-500">Available for all locations.</span><br><span class="color-gray-500">Delivery Options & Info</span></span></div>
                      <div class="col-lg-12 mb-20">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <form class="box-border-product" method="post" action="agregarCarrito.php">
                    <!-- <div class="box-product-color">
                      <p class="font-sm color-gray-900">Color:<span class="color-brand-2 nameColor">Pink Gold</span></p>
                      <ul class="list-colors">
                        <li class="disabled"><img src="assets/imgs/page/product/img-thumb.png" alt="Ecom" title="Pink"></li>
                        <li><img src="assets/imgs/page/product/img-thumb.png" alt="Ecom" title="Gold"></li>
                        <li><img src="assets/imgs/page/product/img-thumb.png" alt="Ecom" title="Pink Gold"></li>
                        <li><img src="assets/imgs/page/product/img-thumb.png" alt="Ecom" title="Silver"></li>
                        <li class="active"><img src="assets/imgs/page/product/img-thumb.png" alt="Ecom" title="Pink Gold"></li>
                      </ul>
                    </div> -->
                    <!-- <div class="box-product-style-size mt-20">
                      <div class="row">
                        <div class="col-lg-12 mb-20">
                          <p class="font-sm color-gray-900">Style:<span class="color-brand-2 nameStyle">S22</span></p>
                          <ul class="list-styles">
                            <li class="disabled" title="S22 Ultra">S22 Ultra</li>
                            <li class="active" title="S22">S22</li>
                          </ul>
                        </div>
                        <div class="col-lg-12 mb-10">
                          <p class="font-sm color-gray-900">Size:<span class="color-brand-2 nameSize">512GB</span></p>
                          <ul class="list-sizes">
                            <li class="disabled" title="1GB">1GB</li>
                            <li class="active" title="512 GB">512 GB</li>
                            <li title="256 GB">256 GB</li>
                          </ul>
                        </div>
                      </div>
                    </div> -->
                    <div class="buy-product mt-10 d-flex">
                      <div class="font-sm text-quantity">Quantity</div>
                      <div class="box-quantity">
                        <div class="input-quantity">
                          <input class="font-xl color-brand-3" type="text" value="1" name="cantidad"><span class="minus-cart"></span><span class="plus-cart"></span>
                        </div>
                      </div>
                    </div>
                    <input type="hidden" value="<?php echo htmlspecialchars($producto['producto_id']) ?>" name="producto_id">
                    <?php
                    if($usuario){
                      echo "<div class='button-buy mt-15'><input class='btn btn-cart mb-15' type='submit' name='agregarCarrito' value='Add to cart'>";
                    } else{
                      echo "<div class='button-buy mt-15'><a class='btn btn-cart mb-15' href='page-login.php'>Add to cart</a>";
                    }
                    ?>
                    <a class="btn btn-buy" href="shop-checkout.php">Buy now</a></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="border-bottom pt-30 mb-40"></div>
          <h4 class="color-brand-3 mb-20">Frequently Bought Together</h4>
          <div class="box-bought-together">
            <div class="box-product-bought box-product-bought-2">
              <div class="product-bought"><img src="assets/imgs/page/product/sp1.png" alt="Ecom"></div>
              <div class="product-bought"><img src="assets/imgs/page/product/sp2.png" alt="Ecom"></div>
              <div class="product-bought"><img src="assets/imgs/page/product/sp3.png" alt="Ecom"></div>
              <div class="product-bought"><img src="assets/imgs/page/product/sp4.png" alt="Ecom"></div>
            </div>
            <div class="price-bought">
              <h3 class="color-brand-3 mr-10">$2856.3</h3><span class="font-lg color-gray-900">(3 items)</span>
              <div class="box-btn-add-cart"><a class="btn btn-cart" href="shop-cart.php">Add To Cart</a></div>
            </div>
          </div>
          <label class="cb-container-2">
            <input type="checkbox" checked="checked"><span class="font-md color-brand-3"><strong>This item:</strong>iPhone 12 Pro Max 128GB Pacific Blue - $1,099.00</span><span class="checkmark"></span>
          </label>
          <label class="cb-container-2">
            <input type="checkbox" checked="checked"><span class="font-md color-brand-3">Apple AirPods Pro, Active Noise Cancellation, Custom Fit - $197.00</span><span class="checkmark"></span>
          </label>
          <label class="cb-container-2">
            <input type="checkbox" checked="checked"><span class="font-md color-brand-3">Apple iMac 24" All-In-One Computer, Apple M1, 8GB RAM, 512GB SSD, macOS Big Sur, Green, MGPJ3LL/A - $1,599.00</span><span class="checkmark"></span>
          </label>
        </div> -->
      </section>
      <section class="section-box shop-template">
        <div class="container">
          <div class="pt-30 mb-10">
            <ul class="nav nav-tabs nav-tabs-product" role="tablist">
              <li><a class="active" href="#tab-description" data-bs-toggle="tab" role="tab" aria-controls="tab-description" aria-selected="true">Description</a></li>
              <li><a href="#tab-specification" data-bs-toggle="tab" role="tab" aria-controls="tab-specification" aria-selected="true">Specification</a></li>
              <li><a href="#tab-additional" data-bs-toggle="tab" role="tab" aria-controls="tab-additional" aria-selected="true">Additional information</a></li>
              <li><a href="#tab-reviews" data-bs-toggle="tab" role="tab" aria-controls="tab-reviews" aria-selected="true">Reviews (2)</a></li>
              <li><a href="#tab-vendor" data-bs-toggle="tab" role="tab" aria-controls="tab-vendor" aria-selected="true">Vendor</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade active show" id="tab-description" role="tabpanel" aria-labelledby="tab-description">
                <div class="display-text-short">
                  <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word “and” and the Little Blind Text should turn around and return to its own, safe country. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                  <p><img src="assets/imgs/page/product/product-banner.jpg" alt="Ecom"></p>
                  <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                  <p><img src="assets/imgs/page/product/product-banner-2.jpg" alt="Ecom"></p>
                  <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word “and” and the Little Blind Text should turn around and return to its own, safe country.</p>
                </div>
                <div class="mt-20 text-center"><a class="btn btn-border font-sm-bold pl-80 pr-80 btn-expand-more">More Details</a></div>
              </div>
              <div class="tab-pane fade" id="tab-specification" role="tabpanel" aria-labelledby="tab-specification">
                <h5 class="mb-25">Specification</h5>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tr>
                      <td>Mode</td>
                      <td>#SK10923</td>
                    </tr>
                    <tr>
                      <td>Brand</td>
                      <td>SamSung</td>
                    </tr>
                    <tr>
                      <td>Size</td>
                      <td>6.7"</td>
                    </tr>
                    <tr>
                      <td>Finish</td>
                      <td>Pacific Blue</td>
                    </tr>
                    <tr>
                      <td>Origin of Country</td>
                      <td>United States</td>
                    </tr>
                    <tr>
                      <td>Manufacturer</td>
                      <td>USA</td>
                    </tr>
                    <tr>
                      <td>Released Year</td>
                      <td>2022</td>
                    </tr>
                    <tr>
                      <td>Warranty</td>
                      <td>International</td>
                    </tr>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-additional" role="tabpanel" aria-labelledby="tab-additional">
                <h5 class="mb-25">Additional information</h5>
                <div class="table-responsive">
                  <table class="table table-striped">
                    <tbody>
                      <tr>
                        <td>Weight</td>
                        <td>
                          <p>0.240 kg</p>
                        </td>
                      </tr>
                      <tr>
                        <td>Dimensions</td>
                        <td>
                          <p>0.74 x 7.64 x 16.08 cm</p>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="tab-reviews">
                <div class="comments-area">
                  <div class="row">
                    <div class="col-lg-8">
                      <h4 class="mb-30 title-question">Customer questions &amp; answers</h4>
                      <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex mb-30 hover-up">
                          <div class="user justify-content-between d-flex">
                            <div class="thumb text-center"><img src="assets/imgs/page/product/author-2.png" alt="Ecom"><a class="font-heading text-brand" href="#">Sienna</a></div>
                            <div class="desc">
                              <div class="d-flex justify-content-between mb-10">
                                <div class="d-flex align-items-center"><span class="font-xs color-gray-700">December 4, 2022 at 3:12 pm</span></div>
                                <div class="product-rate d-inline-block">
                                  <div class="product-rating" style="width: 100%"></div>
                                </div>
                              </div>
                              <p class="mb-10 font-sm color-gray-900">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                repudiandae minus ab deleniti totam officia id incidunt?<a class="reply" href="#"> Reply</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="single-comment justify-content-between d-flex mb-30 ml-30 hover-up">
                          <div class="user justify-content-between d-flex">
                            <div class="thumb text-center"><img src="assets/imgs/page/product/author-3.png" alt="Ecom"><a class="font-heading text-brand" href="#">Brenna</a></div>
                            <div class="desc">
                              <div class="d-flex justify-content-between mb-10">
                                <div class="d-flex align-items-center"><span class="font-xs color-gray-700">December 4, 2022 at 3:12 pm</span></div>
                                <div class="product-rate d-inline-block">
                                  <div class="product-rating" style="width: 80%"></div>
                                </div>
                              </div>
                              <p class="mb-10 font-sm color-gray-900">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                repudiandae minus ab deleniti totam officia id incidunt?<a class="reply" href="#"> Reply</a>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="single-comment justify-content-between d-flex hover-up">
                          <div class="user justify-content-between d-flex">
                            <div class="thumb text-center"><img src="assets/imgs/page/product/author-4.png" alt="Ecom"><a class="font-heading text-brand" href="#">Gemma</a></div>
                            <div class="desc">
                              <div class="d-flex justify-content-between mb-10">
                                <div class="d-flex align-items-center"><span class="font-xs color-gray-700">December 4, 2022 at 3:12 pm</span></div>
                                <div class="product-rate d-inline-block">
                                  <div class="product-rating" style="width: 80%"></div>
                                </div>
                              </div>
                              <p class="mb-10 font-sm color-gray-900">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, suscipit exercitationem accusantium obcaecati quos voluptate nesciunt facilis itaque modi commodi dignissimos sequi
                                repudiandae minus ab deleniti totam officia id incidunt?<a class="reply" href="#"> Reply</a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <h4 class="mb-30 title-question">Customer reviews</h4>
                      <div class="d-flex mb-30">
                        <div class="product-rate d-inline-block mr-15">
                          <div class="product-rating" style="width: 90%"></div>
                        </div>
                        <h6>4.8 out of 5</h6>
                      </div>
                      <div class="progress"><span>5 star</span>
                        <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                      </div>
                      <div class="progress"><span>4 star</span>
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                      </div>
                      <div class="progress"><span>3 star</span>
                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                      </div>
                      <div class="progress"><span>2 star</span>
                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                      </div>
                      <div class="progress mb-30"><span>1 star</span>
                        <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                      </div><a class="font-xs text-muted" href="#">How are ratings calculated?</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="tab-vendor" role="tabpanel" aria-labelledby="tab-vendor">
                <div class="vendor-logo d-flex mb-30"><img src="assets/imgs/page/product/futur.png" alt="">
                  <div class="vendor-name ml-15">
                    <h6><a href="shop-vendor-single.php">Futur Tech.</a></h6>
                    <div class="product-rate-cover text-end">
                      <div class="product-rate d-inline-block">
                        <div class="product-rating" style="width: 90%"></div>
                      </div><span class="font-small ml-5 text-muted"> (32 reviews)</span>
                    </div>
                  </div>
                </div>
                <ul class="contact-infor mb-50">
                  <li><img src="assets/imgs/page/product/icon-location.svg" alt=""><strong>Address:</strong><span> 5171 W Campbell Ave undefined Kent, Utah 53127 United States</span></li>
                  <li><img src="assets/imgs/page/product/icon-contact.svg" alt=""><strong>Contact Seller:</strong><span> (+91) - 540-025-553</span></li>
                </ul>
                <div class="d-flex mb-25">
                  <div class="mr-30">
                    <p class="color-brand-1 font-xs">Rating</p>
                    <h4 class="mb-0">92%</h4>
                  </div>
                  <div class="mr-30">
                    <p class="color-brand-1 font-xs">Ship on time</p>
                    <h4 class="mb-0">100%</h4>
                  </div>
                  <div>
                    <p class="color-brand-1 font-xs">Chat response</p>
                    <h4 class="mb-0">89%</h4>
                  </div>
                </div>
                <p class="font-sm color-gray-500 mb-15">
                  Noodles &amp; Company is an American fast-casual restaurant that offers international and American noodle dishes and pasta in addition to soups and salads. Noodles &amp; Company was founded in 1995 by Aaron Kennedy and is headquartered in Broomfield,
                  Colorado. The company went public in 2013 and recorded a $457 million revenue in 2017.In late 2018, there were 460 Noodles &amp; Company locations across 29 states and Washington, D.C.
                </p>
                <p class="font-sm color-gray-500">Proin congue dapibus rhoncus. Curabitur ipsum orci, malesuada in porttitor a, porttitor quis diam. Nunc at arcu ut turpis facilisis volutpat. Proin tristique, mauris non gravida dignissim, purus mauris malesuada tellus, in tincidunt orci enim eget ligula. Quisque bibendum, ipsum id malesuada placerat, purus felis vehicula risus, vel fringilla justo erat ullamcorper ligula. Fusce congue ullamcorper ligula, at commodo turpis molestie vel.</p>
              </div>
              <div class="border-bottom pt-30 mb-50"></div>
              <h4 class="color-brand-3">Related Products</h4>
              <div class="list-products-5 mt-20">
                <?php
                $productos=getProductosLimitados(5);
                foreach($productos as $producto){
                  $precio = round($producto['precio'] * $moneda['precio_moneda']);
                  echo"              
                    <div class='card-grid-style-3 home6-style home7-style'>
                      <div class='card-grid-inner'>
                        <div class='tools'><a class='btn btn-trend btn-tooltip mb-10' href='#' aria-label='Trend' data-bs-placement='left'></a><a class='btn btn-wishlist btn-tooltip mb-10' href='shop-wishlist.php' aria-label='Add To Wishlist'></a><a class='btn btn-compare btn-tooltip mb-10' href='shop-compare.php' aria-label='Compare'></a><a class='btn btn-quickview btn-tooltip' aria-label='Quick view' href='#ModalQuickview' data-bs-toggle='modal'></a></div>
                        <div class='image-box'><span class='label bg-brand-2'>-17%</span><a href='shop-single-product-2.php?id=".htmlspecialchars($producto['producto_id'])."'><img src='assets/imgs/".htmlspecialchars($producto['imagen_url'])."' alt='Ecom'></a></div>
                        <div class='info-right'><a class='font-xs color-gray-500' href='shop-vendor-single.php'>Apple</a><br><a class='color-brand-3 font-sm-bold' href='shop-single-product-2.php'>".htmlspecialchars($producto['nombre'])."</a>
                          <div class='rating'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><img src='assets/imgs/template/icons/star.svg' alt='Ecom'><span class='font-xs color-gray-500'>(65)</span></div>
                          <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>$$precio</strong><span class='color-gray-500 price-line'>$3225.6</span></div>
                          <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php'>Add To Cart</a></div> -->
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
                    <div class="d-inline-block mr-25"><span class="font-sm font-medium color-gray-900">Categoria:</span><a class="link" href="#">Smartphones</a></div>
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
                <li><a href="page-about-us.php">Mission &amp; Vision</a></li>
                <li><a href="page-about-us.php">Our Team</a></li>
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
                <li><a href="page-contact.php">Contact Us</a></li>
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
              <div class="tags-footer"><a href="shop-fullwidth.html">Cell Phones</a><a href="shop-grid.php">Headphones</a><a href="shop-grid-2.html">Television &amp; Video</a><a href="shop-list.html">Game Controller</a><a href="shop-list-2.html">Apple Watch</a><a href="shop-grid.php">HTC</a><a href="shop-grid.php">Ipad</a><a href="shop-grid.php">Keyboard</a><a href="shop-grid.php">Samsung</a><a href="shop-grid.php">Wireless Speaker</a><a href="shop-grid.php">Samsung Galaxy</a><a href="shop-grid.php">Gaming Mouse</a><a href="shop-grid.php">eBook Readers</a><a href="shop-grid.php">Service Plans</a><a href="shop-grid.php">Home Audio</a><a href="shop-grid.php">Office Electronics</a><a href="shop-grid.php">Lenovo</a><a href="shop-grid.php">Mackbook Pro M1</a><a href="shop-grid.php">HD Videos Player</a></div>
            </div>
            <div class="footer-2-bottom">
              <div class="head-left-footer">
                <h6 class="color-gray-1000">Furniture:</h6>
              </div>
              <div class="tags-footer"><a href="shop-grid.php">Sofa</a><a href="shop-grid.php">Chair</a><a href="shop-grid.php">Dining Table</a><a href="shop-grid.php">Living Room</a><a href="shop-grid.php">Table Lamp</a><a href="shop-grid.php">Night Stand</a><a href="shop-grid.php">Computer Desk</a><a href="shop-grid.php">Bar Table</a><a href="shop-grid.php">Pillow</a><a href="shop-grid.php">Radio</a><a href="shop-grid.php">Clock</a><a href="shop-grid.php">Bad Room</a><a href="shop-grid.php">Stool</a><a href="shop-grid.php">Television</a><a href="shop-grid.php">wardrobe</a><a href="shop-grid.php">Living Room Tables</a><a href="shop-grid.php">Dressers</a><a href="shop-grid.php">Patio Sofas</a><a href="shop-grid.php">Nursery</a><a href="shop-grid.php">Kitchen</a><a href="shop-grid.php">Accent Furniture</a><a href="shop-grid.php">Replacement Parts</a></div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-bottom mt-20">
            <div class="row">
              <div class="col-lg-6 col-md-12 text-center text-lg-start"><span class="color-gray-900 font-sm">Copyright &copy; 2022 Ecom Market. All rights reserved.</span></div>
              <div class="col-lg-6 col-md-12 text-center text-lg-end">
                <ul class="menu-bottom">
                  <li><a class="font-sm color-gray-900" href="page-term.php">Conditions of Use</a></li>
                  <li><a class="font-sm color-gray-900" href="page-term.php">Privacy Notice</a></li>
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
    <script src="assets/js/javaS.js"></script>
  </body>
</html>