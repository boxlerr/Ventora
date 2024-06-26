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
  <title>Carrito - Vestore</title>
</head>

<body>
  <?php
  include_once("consultas_bd.php");
  include_once("main.php");
  ?>
  <main class="main">
    <!-- <div class="section-box">
        <div class="breadcrumbs-div">
          <div class="container">
            <ul class="breadcrumb">
              <li><a class="font-xs color-gray-1000" href="index.html">Homee</a></li>
              <li><a class="font-xs color-gray-500" href="shop-grid.php">Shop</a></li>
              <li><a class="font-xs color-gray-500" href="shop-cart.php">Cart</a></li>
            </ul>
          </div>
        </div>
      </div> -->
    <section class="section-box shop-template">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="box-carts">
              <div class="head-wishlist">
                <div class="item-wishlist mt-55">
                  <div class="wishlist-product"><span class="font-md-bold color-brand-3" data-section="shop-cart" data-value="producto">Producto</span></div>
                  <div class="wishlist-price"><span class="font-md-bold color-brand-3" data-section="shop-cart" data-value="precio_unidad">Precio Unidad</span></div>
                  <div class="wishlist-status"><span class="font-md-bold color-brand-3" data-section="shop-cart" data-value="cantidad">Cantidad</span></div>
                  <div class="wishlist-action"><span class="font-md-bold color-brand-3" data-section="shop-cart" data-value="subtotal">Sub total</span></div>
                  <div class="wishlist-remove"><span class="font-md-bold color-brand-3" data-section="shop-cart" data-value="remover">Remover</span></div>
                </div>
              </div>
              <div class="content-wishlist mb-20">
                <?php
                $carrito = mostrarCarrito($usuario);
                if ($carrito[0]) {
                  $total = 0;
                  foreach ($carrito[1] as $articulo) {
                    $producto = getProducto($articulo['producto_id']);
                    $total += $articulo['total_carrito'];
                    $precio = round($producto['precio'] * $moneda['precio_moneda']);
                    $precio = number_format($precio, 0, ',', '.');
                    $total_carrito = round($articulo['total_carrito'] * $moneda['precio_moneda']);
                    $total_carrito = number_format($total_carrito, 0, ',', '.');
                    echo "                      
                        <div class='item-wishlist'>
                          <div class='wishlist-product'>
                            <div class='product-wishlist'>
                              <div class='product-image'><a href='shop-single-product-2.php?id=" . htmlspecialchars($articulo['producto_id']) . "'><img src='assets/imgs/" . htmlspecialchars($producto['imagen_url']) . "' alt='Ecom'></a></div>
                              <div class='product-info'><a href='shop-single-product.html'>
                                <h6 class='color-brand-3'>" . htmlspecialchars($producto['nombre']) . "</h6></a>
                              </div>
                            </div>
                          </div>
                          <div class='wishlist-price'>
                            <h4 class='color-brand-3'>" . $moneda['simbolo'] . $precio . "</h4>
                          </div>
                          <div class='wishlist-status'>
                            <div class='box-quantity'>
                              <div class='input-quantity'>
                                <input class='font-xl color-brand-3' type='text' value='" . htmlspecialchars($articulo['cantidad']) . "'><span class='minus-cart'></span><span class='plus-cart'></span>
                              </div>
                            </div>
                          </div>
                          <div class='wishlist-action'>
                            <h4 class='color-brand-3'>" . $moneda['simbolo'] . $total_carrito . "</h4>
                          </div>
                          <div class='wishlist-remove'><a class='btn btn-delete' href='agregarCarrito.php?eliminar=" . htmlspecialchars($articulo['carrito_producto_id']) . "'></a></div>
                        </div>";
                  }
                  $total = round($total * $moneda['precio_moneda']);
                  $total = number_format($total, 0, ',', '.');
                }
                ?>
              </div>
              <div class="row mb-40">
                <div class="col-lg-8 col-md-6 col-sm-6-col-6">
                  <a class="btn btn-buy w-auto arrow-back mb-10" href="shop-grid.php" data-section="shop-cart" data-value="continuar_comprando">Continuar Comprando</a>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6-col-6 text-md-end">
                  <h4 class='color-brand-3'>Total: <?php echo $moneda['simbolo'] . $total ?></h4>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6-col-6 text-md-end">
                  <a class="btn btn-buy w-auto" href="shop-checkout.php" data-section="header" data-value="pago">Proceder al pago</a>
                </div>
                <div class="text-md-end">
                  <a class="btn btn-buy w-auto update-cart mb-10" href="shop-cart.php" data-section="shop-cart" data-value="actualizar_carrito"> Actualizar Carrito </a>
                </div>
              </div>
              <div class="row mb-50">
                <div class="col-lg-6 col-md-6">
                  <!-- <div class="box-cart-left">
                      <h5 class="font-md-bold mb-10" data-section="shop-cart" data-value="calcular_envio">Calculate Shipping</h5><span class="font-sm-bold mb-5 d-inline-block color-gray-500" data-section="shop-cart" data-value="tarifa_plana">Flat rate:</span><span class="font-sm-bold d-inline-block color-brand-3">5%</span>
                      <div class="row">
                        <div class="col-lg-6 mb-10">
                          <input class="form-control" placeholder="Stage / Country">
                        </div>
                        <div class="col-lg-6 mb-10">
                          <input class="form-control" placeholder="PostCode / ZIP">
                        </div>
                      </div>
                    </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-3 mt-55"> -->
          <!-- <div class="summary-cart">
                <div class="border-bottom mb-10">
                  <div class="row">
                    <div class="col-6"><span class="font-md-bold color-gray-500" data-section="shop-cart" data-value="subtotal">Subtotal</span></div>
                    <div class="col-6 text-end">
                      <h4>	$2.51</h4>
                    </div>
                  </div>
                </div> -->
          <!-- <div class="border-bottom mb-10">
                  <div class="row">
                    <div class="col-6"><span class="font-md-bold color-gray-500" data-section="shop-cart" data-value="envio">Shipping</span></div>
                    <div class="col-6 text-end">
                      <h4 data-section="shop-cart" data-value="gratis">Free</h4>
                    </div>
                  </div>
                </div>
                <div class="border-bottom mb-10">
                  <div class="row">
                    <div class="col-6"><span class="font-md-bold color-gray-500" data-section="shop-cart" data-value="estimacion_para">Estimate for</span></div>
                    <div class="col-6 text-end">
                      <h6>United Kingdom</h6>
                    </div>
                  </div>
                </div>
                <div class="mb-10">
                  <div class="row">
                    <div class="col-6"><span class="font-md-bold color-gray-500" data-section="shop-cart" data-value="total">Total</span></div>
                    <div class="col-6 text-end">
                      <h4>	$2.51</h4>
                    </div>
                  </div>
                </div>
                <div class="box-button"><a class="btn btn-buy" href="shop-checkout.php" data-section="shop-cart" data-value="proceder_al_pago">Proceed To CheckOut</a></div>
              </div> -->
          <!-- </div> -->
        </div>
        <h4 class="color-brand-3" data-section="shop-cart" data-value="tambien_podria_gustarte">Tambien podria gustarte</h4>
        <div class="list-products-5 mt-20 mb-40">
          <?php
          $productos = getProductosLimitados(5);
          foreach ($productos as $producto) {
            $precio = round($producto['precio'] * $moneda['precio_moneda']);
            $precio = number_format($precio, 0, ',', '.');
            echo "              
                <div class='card-grid-style-3 home6-style home7-style'>
                  <div class='card-grid-inner'>
                    <div class='image-box'><a href='shop-single-product-2.php?id=" . htmlspecialchars($producto['producto_id']) . "'><img src='assets/imgs/" . htmlspecialchars($producto['imagen_url']) . "' alt='Ecom'></a></div>
                    <div class='info-right'><a class='font-xs color-gray-500' href=#>Apple</a><br><a href='shop-single-product-2.php?id=" . htmlspecialchars($producto['producto_id']) . "' class='color-brand-3 font-sm-bold'>" . htmlspecialchars($producto['nombre']) . "</a>
                      <div class='price-info mb-10'><strong class='font-lg-bold color-brand-3 price-main'>" . $moneda['simbolo'] . $precio . "</strong></div>
                      <!-- <div class='mt-10 box-btn-cart'><a class='btn btn-cart' href='shop-cart.php'>Add To Cart</a></div> -->
                    </div>
                  </div>
                </div>
              ";
          }
          ?>
        </div>
        <!-- <h4 class="color-brand-3">Recently viewed items</h4>
          <div class="row mt-40">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.html">HP DeskJet 2755e Wireless Color All-in-One Printer</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">HP</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.html">Original HP 63XL Black High-yield Ink Cartridge</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp1.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Logitech</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.html">Logitech H390 Wired Headset, Stereo Headphones</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card-grid-style-2 card-grid-none-border hover-up">
                <div class="image-box"><a href="shop-single-product.html"><img src="assets/imgs/page/homepage1/imgsp2.png" alt="Ecom"></a>
                </div>
                <div class="info-right"><span class="font-xs color-gray-500">Logitech</span><br><a class="color-brand-3 font-xs-bold" href="shop-single-product.html">Logitech MK345 Wireless Combo Full-Sized</a>
                  <div class="rating"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><img src="assets/imgs/template/icons/star.svg" alt="Ecom"><span class="font-xs color-gray-500"> (65)</span></div>
                  <div class="price-info"><strong class="font-lg-bold color-brand-3 price-main">$2556.3</strong><span class="color-gray-500 price-line">$3225.6</span></div>
                </div>
              </div>
            </div>
          </div> -->
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