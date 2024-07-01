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
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/img/logovestoreventana.png">
  <link href="assets/css/style.css?v=3.0.0" rel="stylesheet">
  <title>Tu Cuenta</title>
</head>

<body>
  <?php
  include_once("consultas_bd.php");
  include_once("main.php");
  ?>
  <main class="main">
    <section class="section-box shop-template mt-30">
      <div class="container box-account-template">
        <h3 data-section="page-account" data-value="hola">Hello Steven</h3>
        <p class="font-md color-gray-500" data-section="page-account" data-value="desde_el_panel">From your account dashboard. you can easily check & view your recent orders,<br class="d-none d-lg-block">manage your shipping and billing addresses and edit your password and account details.</p>
        <div class="box-tabs mb-100">
          <ul class="nav nav-tabs nav-tabs-account" role="tablist">
            <li><a class="active" href="#tab-notification" data-bs-toggle="tab" role="tab" aria-controls="tab-notification" aria-selected="true" data-section="page-account" data-value="notificacion">Notification</a></li>
            <li><a href="#tab-wishlist" data-bs-toggle="tab" role="tab" aria-controls="tab-wishlist" aria-selected="true" data-section="page-account" data-value="lista_de_deseos">Wishlist</a></li>
            <li><a href="#tab-orders" data-bs-toggle="tab" role="tab" aria-controls="tab-orders" aria-selected="true" data-section="page-account" data-value="ordenes">Orders</a></li>
            <li><a href="#tab-order-tracking" data-bs-toggle="tab" role="tab" aria-controls="tab-order-tracking" aria-selected="true" data-section="page-account" data-value="seguimiento_ordenes">Order Tracking</a></li>
            <li><a href="#tab-setting" data-bs-toggle="tab" role="tab" aria-controls="tab-setting" aria-selected="true" data-section="page-account" data-value="ajustes">Setting</a></li>
          </ul>
          <div class="border-bottom mt-20 mb-40"></div>
          <div class="tab-content mt-30">
            <div class="tab-pane fade active show" id="tab-notification" role="tabpanel" aria-labelledby="tab-notification">
              <div class="list-notifications">
                <div class="item-notification">
                  <div class="image-notification"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                  <div class="info-notification">
                    <h5 class="mb-5" data-section="page-account" data-value="pago_confirmado">COD payment confirmed</h5>
                    <p class="font-md color-brand-3" data-section="page-account" data-value="confirmacion">Has been confirmed. Please check the estimated delivery time in the order details section!</p>
                  </div>
                  <div class="button-notification"><a class="btn btn-buy w-auto" data-section="page-account" data-value="ver_detalles">Ver Detalles</a></div>
                </div>
                <div class="item-notification">
                  <div class="image-notification"><img src="assets/imgs/page/account/img-2.png" alt="Ecom"></div>
                  <div class="info-notification">
                    <h5 class="mb-5">COD payment confirmed</h5>
                    <p class="font-md color-brand-3" data-section="page-account" data-value="confirmacion">Has been confirmed. Please check the estimated delivery time in the order details section!</p>
                  </div>
                  <div class="button-notification"><a class="btn btn-buy w-auto" data-section="page-account" data-value="ver_detalles">Ver Detalles</a></div>
                </div>
                <div class="item-notification">
                  <div class="image-notification"><img src="assets/imgs/page/account/img-3.png" alt="Ecom"></div>
                  <div class="info-notification">
                    <h5 class="mb-5">COD payment confirmed</h5>
                    <p class="font-md color-brand-3" data-section="page-account" data-value="confirmacion">Has been confirmed. Please check the estimated delivery time in the order details section!</p>
                  </div>
                  <div class="button-notification"><a class="btn btn-buy w-auto" data-section="page-account" data-value="ver_detalles">Ver Detalles</a></div>
                </div>
                <div class="item-notification">
                  <div class="image-notification"><img src="assets/imgs/page/account/img-4.png" alt="Ecom"></div>
                  <div class="info-notification">
                    <h5>COD payment confirmed</h5>
                    <p class="font-md color-brand-3" data-section="page-account" data-value="confirmacion">Has been confirmed. Please check the estimated delivery time in the order details section!</p>
                  </div>
                  <div class="button-notification"><a class="btn btn-buy w-auto" data-section="page-account" data-value="ver_detalles">Ver Detalles</a></div>
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
            <div class="tab-pane fade" id="tab-wishlist" role="tabpanel" aria-labelledby="tab-wishlist">
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
                      if ($wishlist[0]) {
                        foreach ($wishlist[1] as $articulo) {
                          $articulo = getProducto($articulo['producto_id']);
                          $precio = round($articulo['precio'] * $moneda['precio_moneda']);
                          $precio = number_format($precio, 0, ',', '.');
                          echo "                
                <div class='item-wishlist'>
                  <div class='wishlist-product'>
                    <div class='product-wishlist'>
                      <div class='product-image'><a href='shop-single-product-2.php?id=" . htmlspecialchars($articulo['producto_id']) . "'><img src='assets/imgs/" . htmlspecialchars($articulo['imagen_url']) . "' alt='Ecom'></a></div>
                      <div class='product-info'><a href='shop-single-product-2.php?id=" . htmlspecialchars($articulo['producto_id']) . "'>
                          <h6 class='color-brand-3'>" . htmlspecialchars($articulo['nombre']) . "</h6>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class='wishlist-price'>
                    <h4 class='color-brand-3'>$" . $precio . "</h4>
                  </div>
                  <div class='wishlist-status'><span class='btn btn-gray font-md-bold color-brand-3' data-section='shop-wishlist' data-value='en_stock'>In Stock</span></div>
                  <div class='wishlist-action'><a class='btn btn-cart font-sm-bold' href='shop-single-product-2.php?id=" . htmlspecialchars($articulo['producto_id']) . "' data-section='shop-wishlist' data-value='añadir_al_carrito'>Add to Cart</a></div>
                  <form class='wishlist-remove' action='agregarWishlist.php' method='post'>
                    <input class='btn btn-delete' type='hidden' value='" . htmlspecialchars($articulo['producto_id']) . "' name='producto_id'>
                    <input class='btn btn-delete' type='hidden' value='" . $usuario . "' name='cliente_id'>
                    <input class='btn btn-delete' type='submit' value='' name='eliminar'>
                  </form>
                </div>
                ";
                        }
                      } else {
                        echo "<h2>Aun no hay articulos en tus favoritos</h2>";
                      }
                      ?>
                    </div>
                  </div>
                  <h4 class="color-brand-3" data-section="shop-wishlist" data-value="tambien_podria_gustarte">You may also like</h4>
                  <div class="list-products-5 mt-20 mb-40">
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
                    <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>$$precio</strong><span class='color-gray-500 price-line'>$3225.6</span></div>
                    <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php' data-section='index' data-value='agregar_carrito'>Add To Cart</a></div> -->
                  </div>
                </div>
              </div>
            ";
                    }
                    ?>
                  </div>
                </div>
              </section>
            </div>
            <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders">
              <div class="box-orders">
                <div class="head-orders">
                  <div class="head-left">
                    <h5 class="mr-20">Order ID: #EWFDSAF1321655</h5><span class="font-md color-brand-3 mr-20"><span data-section="page-account" data-value="fecha">Date:</span> 18 September 2022</span><span class="label-delivery" data-section="page-account" data-value="entrega_en_progreso">Delivery in progress</span>
                  </div>
                  <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto" data-section="page-account" data-value="ver_orden">View Order</a></div>
                </div>
                <div class="body-orders">
                  <div class="list-orders">
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
                      </div>
                    </div>
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-orders">
                <div class="head-orders">
                  <div class="head-left">
                    <h5 class="mr-20">Order ID: #EWFDSAF1321655</h5><span class="font-md color-brand-3 mr-20">Date: 18 September 2022</span><span class="label-delivery label-delivered" data-section="page-account" data-value="entregado">Delivered</span>
                  </div>
                  <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto" data-section="page-account" data-value="ver_orden">View Order</a></div>
                </div>
                <div class="body-orders">
                  <div class="list-orders">
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
                      </div>
                    </div>
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/account/img-1.png" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="box-orders">
                <div class="head-orders">
                  <div class="head-left">
                    <h5 class="mr-20">Order ID: #EWFDSAF1321655</h5><span class="font-md color-brand-3 mr-20">Date: 18 September 2022</span><span class="label-delivery label-cancel" data-section="page-account" data-value="cancelado">Cancel</span>
                  </div>
                  <div class="head-right"><a class="btn btn-buy font-sm-bold w-auto" data-section="page-account" data-value="ver_orden">View Order</a></div>
                </div>
                <div class="body-orders">
                  <div class="list-orders">
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/product/ss.jpg" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
                      </div>
                    </div>
                    <div class="item-orders">
                      <div class="image-orders"><img src="assets/imgs/page/product/ss2.jpg" alt="Ecom"></div>
                      <div class="info-orders">
                        <h5>Samsung 36" French door 28 cu. ft. Smart Energy Star Refrigerator</h5>
                      </div>
                      <div class="quantity-orders">
                        <h5><span data-section="page-account" data-value="cantidad">Quantity:</span> 01</h5>
                      </div>
                      <div class="price-orders">
                        <h3>$2.51</h3>
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
            <div class="tab-pane fade" id="tab-order-tracking" role="tabpanel" aria-labelledby="tab-order-tracking">
              <p class="font-md color-gray-600" data-section="page-account" data-value="para_rastrear">To track your order please enter your OrderID in the box below and press "Track" button. This was given to you on<br class="d-none d-lg-block">your receipt and in the confirmation email you should have received.</p>
              <div class="row mt-30">
                <div class="col-lg-6">
                  <div class="form-tracking">
                    <form action="#" method="get">
                      <div class="d-flex">
                        <div class="form-group box-input">
                          <input class="form-control" type="text" placeholder="FDSFWRFAF13585">
                        </div>
                        <div class="form-group box-button">
                          <button class="btn btn-buy font-md-bold" type="submit" data-section="page-account" data-value="rastreando_ahora">Tracking Now</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="border-bottom mb-20 mt-20"></div>
              <h3 class="mb-10"><span data-section="page-account" data-value="order_status">Order Status:</span><span class="color-success" data-section="page-account" data-value="envio_internacional"> International shipping</span></h3>
              <h6 class="color-gray-500"><span data-section="page-account" data-value="fecha_estimada_entrega">Estimated Delivery Date:</span> 27 August - 29 August</h6>
              <div class="table-responsive">
                <div class="list-steps">
                  <div class="item-step">
                    <div class="rounded-step">
                      <div class="icon-step step-1 active"></div>
                      <h6 class="mb-5" data-section="page-account" data-value="pedido_realizado">Order Placed</h6>
                      <p class="font-md color-gray-500">15 August 2022</p>
                    </div>
                  </div>
                  <div class="item-step">
                    <div class="rounded-step">
                      <div class="icon-step step-2 active"></div>
                      <h6 class="mb-5" data-section="page-account" data-value="en_produccion">In Production</h6>
                      <p class="font-md color-gray-500">16 August 2022</p>
                    </div>
                  </div>
                  <div class="item-step">
                    <div class="rounded-step">
                      <div class="icon-step step-3 active"></div>
                      <h6 class="mb-5" data-section="page-account" data-value="envio_internacional">International shipping</h6>
                      <p class="font-md color-gray-500">17 August 2022</p>
                    </div>
                  </div>
                  <div class="item-step">
                    <div class="rounded-step">
                      <div class="icon-step step-4"></div>
                      <h6 class="mb-5" data-section="page-account" data-value="entrega_ult_milla">Shipping Final Mile</h6>
                      <p class="font-md color-gray-500">18 August 2022</p>
                    </div>
                  </div>
                  <div class="item-step">
                    <div class="rounded-step">
                      <div class="icon-step step-5"></div>
                      <h6 class="mb-5" data-section="page-account" data-value="entregado">Delivered</h6>
                      <p class="font-md color-gray-500">19 August 2022</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="list-features">
                <ul>
                  <li>09:10 25 August 2022: Delivery in progress</li>
                  <li>08:25 25 August 2022: The order has arrived at warehouse 05-YBI Marvel LM Hub</li>
                  <li>05:44 25 August 2022: Order has been shipped</li>
                  <li>04:51 25 August 2022: The order has arrived at Marvel SOC warehouse</li>
                  <li>20:54 18 August 2022: Order has been shipped</li>
                  <li>18:21 17 August 2022: The order has arrived at Marvel SOC warehouse</li>
                  <li>17:09 17 August 2022: Order has been shipped</li>
                  <li>15:23 17 August 2022: The order has arrived at warehouse 20-HNI Marvel 2 SOC</li>
                  <li>12:42 16 August 2022: Successful pick up</li>
                  <li>10:44 15 August 2022: The sender is preparing the goods</li>
                </ul>
              </div>
              <h3 data-section="page-account" data-value="localizacion_paquete">Package Location</h3>
              <div class="map-account">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d325467.51371614134!2d-58.481592!3d-34.603722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1ses!2s!4v1664373110059!5m2!1ses!2s&hl=es" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <p class="color-gray-500 mb-20" data-section="page-account" data-value="parrafo1">Comienza cuando el proveedor confirma el pedido y lo registra en un sistema de seguimiento con un número de identificación único. El paquete se transporta al puerto o aeropuerto de salida, pasa por controles aduaneros y embarca hacia el país de destino, con actualizaciones periódicas sobre su ubicación en el sistema</p>
                </div>
                <div class="col-lg-6">
                  <p class="color-gray-500 mb-20" data-section="page-account" data-value="parrafo2">Al llegar al país de destino, el paquete se somete a inspecciones aduaneras y, tras la aprobación, se transfiere a la red de distribución local. El sistema de seguimiento continúa proporcionando información actualizada sobre su ubicación y estado hasta que el paquete llega al cliente final, asegurando transparencia en cada etapa del proceso</p>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="tab-setting" role="tabpanel" aria-labelledby="tab-setting">
              <div class="row">
                <div class="col-lg-6 mb-20">
                  <form action="#" method="get">
                    <div class="row">
                      <div class="col-lg-12 mb-20">
                        <h5 class="font-md-bold color-brand-3 text-sm-start text-center" data-section="page-account" data-value="informacion_contacto">Contact information</h5>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input class="form-control font-sm" type="text" placeholder="Fullname *">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input class="form-control font-sm" type="text" placeholder="Username *">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input class="form-control font-sm" type="text" placeholder="Phone Number *">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <input class="form-control font-sm" type="text" placeholder="Email *">
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="form-group">
                          <label class="font-sm color-brand-3" for="checkboxOffers">
                            <input class="checkboxOffer" id="checkboxOffers" type="checkbox">
                            <span data-section="page-account" data-value="mantenme_al_tanto">
                              Keep me up to date on news and exclusive offers
                            </span>
                          </label>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <h5 class="font-md-bold color-brand-3 mt-15 mb-20" data-section="page-account" data-value="direccion_envio">Shipping address</h5>
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
                          <input class="form-control font-sm" type="text" placeholder="Address 2*">
                        </div>
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <select class="form-control font-sm select-style1 color-gray-700">
                            <option value="" data-section="page-account" data-value="elige_una_opcion">Select an option...</option>
                            <option value="1" data-section="page-account" data-value="opcion1">Option 1</option>
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
                      <div class="col-lg-12">
                        <div class="form-group mt-20">
                          <input class="btn btn-buy w-auto h54 font-md-bold" value="Save change">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-lg-1 mb-20"></div>
                <div class="col-lg-5 mb-20">
                  <div class="mt-40">
                    <h4 class="mb-10">Steven Job</h4>
                    <div class="mb-10">
                      <p class="font-sm color-brand-3 font-medium" data-section="page-account" data-value="direccion_casa">Home Address:</p><span class="font-sm color-gray-500 font-medium">205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</span>
                    </div>
                    <div class="mb-10">
                      <p class="font-sm color-brand-3 font-medium" data-section="page-account" data-value="direccion_entrega">Delivery address:</p><span class="font-sm color-gray-500 font-medium">205 North Michigan Avenue, Suite 810 Chicago, 60601, USA</span>
                    </div>
                    <div class="mb-10">
                      <p class="font-sm color-brand-3 font-medium" data-section="page-account" data-value="numero_telefono">Phone Number:</p><span class="font-sm color-gray-500 font-medium">(+01) 234 567 89 - (+01) 688 866 99</span>
                    </div>
                    <div class="mb-10 mt-15"><a class="btn btn-cart w-auto" data-section="page-account" data-value="establecer_predeterminado">Set as Default</a></div>
                  </div>
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