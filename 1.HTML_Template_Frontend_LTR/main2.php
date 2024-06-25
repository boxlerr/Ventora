<?php
include_once("moneda.php");

// session_start();
if (empty($_SESSION["usuario"]) || isset($_GET['accion'])) {
    $usuario = false;
    unset($_SESSION["usuario"]);
    // session_destroy();
} else {
    $usuario = $_SESSION["usuario"];
}


?>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img class="mb-10" src="assets/imgs/template/favicon.svg" alt="Ecom">
                <div class="preloader-dots"></div>
            </div>
        </div>
    </div>
</div>
<div class="topbar">
    <div class="container-topbar">
        <div class="menu-topbar-left d-none d-xl-block">
            <ul class="nav-small">
                <li><a class="font-xs" href="page-contact.php">Sobre nosotros</a></li>
                <li><a class="font-xs" href="page-careers.html">Contacto</a></li>
                <li><a class="font-xs" href="page-register.php">Importá con nosotros</a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3">Envío gratis en compras a partir de</span><span class="font-sm-bold color-success"> ARS 40.000</span></div>
        <div class="menu-topbar-right">
            <!-- <span class="font-xs color-brand-3">Ayuda? Llámanos:</span><span class="font-sm-bold color-success"> + 1800 900</span> -->
            <div class="dropdown dropdown-language dropdown-flags">
                <!-- <button class="btn dropdown-toggle" id="dropdownPage" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static"><span class="dropdown-right font-xs color-brand-3"><img src="assets/imgs/template/en.svg" alt="Ecom"> English</span></button>
        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownPage" data-bs-popper="static">
            <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-en.svg" alt="Ecom"> English</a></li>
            <li><a class="dropdown-item" href="#"><img src="assets/imgs/template/flag-es.svg" alt="Ecom"> Español</a></li>
        </ul> -->
                <div id="flags" class="flags">
                    <div class="flags__item" data-language="es">
                        <img src="assets/imgs/flags/es.svg" alt="">
                    </div>
                    <div class="flags__item" data-language="in">
                        <img src="assets/imgs/flags/sh.svg" alt="">
                    </div>
                </div>
            </div>
            <form class="dropdown-language" action="" method="">
                <!-- <button class="btn dropdown-toggle" id="dropdownPage2" type="button" data-bs-toggle="dropdown" aria-expanded="true" data-bs-display="static"><span class="dropdown-right font-xs color-brand-3">USD</span></button> -->
                <select name="mascara" id="monedas" class="seleccionMoneda dropdown-type" aria-labelledby="dropdownPage2" data-bs-popper="static">
                    <?php
                    $monedas = getMonedas();
                    if (!empty($_SESSION["moneda"])) {
                        foreach ($monedas as $moneda) {
                            if ($moneda[0] == $_SESSION["moneda"]) {
                                echo "<option class='opcionMoneda' selected>$moneda[0]</option>";
                            } else {
                                echo "<option class='opcionMoneda'>$moneda[0]</option>";
                            }
                        }
                    } else {
                        foreach ($monedas as $moneda) {
                            echo "<option class='opcionMoneda'>$moneda[0]</option>";
                        }
                    }
                    ?>
                </select>
            </form>
        </div>
    </div>
</div>
<header class="header sticky-bar">
    <div class="container">
        <div class="main-header">
            <div class="header-left">
                <div class="header-logo"><a class="d-flex" href="index.php"><img alt="Ecom" src="assets/imgs/template/logo.svg"></a></div>
                <div class="header-search ">
                    <div class="box-header-search">
                        <form class="form-search" method="post" action="#">
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" value="" placeholder="Search for items">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="active" href="index.php">Inicio</a></li>
                            <li class="has-children"><a href="#" data-section="header" data-value="productos">Productos</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.php" data-section="header" data-value="minorista">Minorista</a></li>
                                    <li><a href="shop-grid-mayorista.php" data-section="header" data-value="mayorista">Mayorista</a></li>
                                </ul>
                            <li class="has-children"><a href="#">Trabajá con nosotros</a>
                                <ul class="sub-menu">
                                    <li><a href="importar.php">Importá</a></li>
                                    <li><a href="exportar.php">Exportá</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#">Paginas</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about-us.php">Sobre nosotros</a></li>
                                    <li><a href="page-term.php">Términos y condiciones</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.php">Contacto</a></li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-shop">
                    <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-account"><span>Account</span></span>
                        <div class="dropdown-account">
                            <ul>
                                <?php
                                if ($usuario) {
                                    echo "
                                    <li><a href='page-account.php'>Mi cuenta</a></li>
                                    <li><a href='page-account.php'>Historial de compras</a></li>
                                    <li><a href='page-account.php'>Mis compras</a></li>
                                    <li><a href='page-account.php'>Mis favoritos</a></li>
                                    <li><a href='page-account.php'>Configuracion</a></li>
                                    <li><a href='index.php?accion=afrg323sd44sfe'>Cerrar cuenta</a></li>
                                    ";
                                } else {
                                    echo "<li><a href='page-login.php'>Iniciar sesion</a></li>";
                                    echo "<li><a href='page-register.php'>Crear cuenta</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                    if($usuario){
                        echo "<a class='font-lg icon-list icon-wishlist' href='shop-wishlist.php'><span data-section='header' data-value='lista_de_deseos'>Lista de Deseos</span></a>'";
                    } else{
                        echo "<a class='font-lg icon-list icon-wishlist' href='page-login.php'><span data-section='header' data-value='lista_de_deseos'>Lista de Deseos</span></a>'";
                    }
                    ?>
                    <?php
                    if (!$usuario) {
                        echo "<a href='page-login.php' class='font-lg icon-list icon-cart'><span>Cart</span></a>";
                    } else {
                        $carrito = mostrarCarrito($usuario);
                    ?>
                        <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-cart"><span>Cart</span><?php if ($carrito[0] > 0) {                                                                                                     } ?> </span>
                            <div class="dropdown-cart">
                                <?php
                                if (empty($_SESSION["moneda"])) {
                                    $moneda = getTipoCambio('ARS');
                                } else {
                                    $moneda = getTipoCambio($_SESSION["moneda"]);
                                }
                                $total = 0;
                                foreach ($carrito[1] as $producto) {
                                    $articulo = getProducto($producto['producto_id']);
                                    $total_prod_mod = round($articulo['precio'] * $moneda['precio_moneda']);
                                    $total_prod_mod = number_format($total_prod_mod, 0, ',', '.');
                                    $total += round($producto['total_carrito']);
                                    echo "
                            <div class='item-cart mb-20'>
                                <div class='cart-image'><img src='assets/imgs/page/" . htmlspecialchars($articulo['imagen_url']) . "' alt='Ecom'></div>
                                <div class='cart-info'><a class='font-sm-bold color-brand-3' href='shop-single-product-2.php'>" . htmlspecialchars($articulo['nombre']) . "</a>
                                    <p><span class='color-brand-2 font-sm-bold'>$total_prod_mod x " . htmlspecialchars($producto['cantidad']) . "</span></p>
                                </div>
                            </div>
                            ";
                                }
                                $total = round($total * $moneda['precio_moneda']);
                                $total = number_format($total, 0, ',', '.');
                                ?>

                                <div class="border-bottom pt-0 mb-15"></div>
                                <div class="cart-total">
                                    <div class="row">
                                        <div class="col-6 text-start"><span class="font-md-bold color-brand-3">Total</span></div>
                                        <div class="col-6"><span class="font-md-bold color-brand-1">$<?php echo $total; ?></span></div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start"><a class="btn btn-cart w-auto" href="shop-cart.php">View cart</a></div>
                                        <div class="col-6"><a class="btn btn-buy w-auto" href="shop-checkout.php">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <a class="font-lg icon-list icon-compare" href="shop-compare.php"><span>Compare</span></a>
                </div>
            </div>
        </div>
        <div class="row filtros_celular d-md-none">
            <div class="col-sm-6 col-5 mb-10 text-lg-start text-center filtro"><a class="btn btn-filter font-sm color-brand-3 font-medium" href="#ModalFiltersForm" data-bs-toggle="modal">All Fillters</a></div>
            <div class="col-sm-6 col-7 mb-10 text-lg-end text-center filtro">
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
            <div class="col-12 order-last filtro_barra">
                <input class="form-control font-xs" type="text" value="" placeholder="Search for items">
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="index.php"><img alt="Ecom" src="assets/imgs/template/logo.svg"></a></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.php">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.php">Homepage - 1</a></li>
                                    <li><a href="index-2.html">Homepage - 2</a></li>
                                    <li><a href="index-3.html">Homepage - 3</a></li>
                                    <li><a href="index-4.html">Homepage - 4</a></li>
                                    <li><a href="index-5.html">Homepage - 5</a></li>
                                    <li><a href="index-6.html">Homepage - 6</a></li>
                                    <li><a href="index-7.html">Homepage - 7</a></li>
                                    <li><a href="index-8.html">Homepage - 8</a></li>
                                    <li><a href="index-9.html">Homepage - 9</a></li>
                                    <li><a href="index-10.php">Homepage - 10</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-grid.php">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.php">Shop Grid</a></li>
                                    <li><a href="shop-grid-2.html">Shop Grid 2</a></li>
                                    <li><a href="shop-list.html">Shop List</a></li>
                                    <li><a href="shop-list-2.html">Shop List 2</a></li>
                                    <li><a href="shop-fullwidth.html">Shop Fullwidth</a></li>
                                    <li><a href="shop-single-product.html">Single Product</a></li>
                                    <li><a href="shop-single-product-2.php">Single Product 2</a></li>
                                    <li><a href="shop-single-product-3.html">Single Product 3</a></li>
                                    <li><a href="shop-single-product-4.html">Single Product 4</a></li>
                                    <li><a href="shop-cart.php">Shop Cart</a></li>
                                    <li><a href="shop-checkout.php">Shop Checkout</a></li>
                                    <li><a href="shop-compare.php">Shop Compare</a></li>
                                    <li><a href="shop-wishlist.php">Shop Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="shop-vendor-list.html">Vendors</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-vendor-list.html">Vendors Listing</a></li>
                                    <li><a href="shop-vendor-single.php">Vendor Single</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="page-contact.php">About Us</a></li>
                                    <li><a href="page-contact.php">Contact Us</a></li>
                                    <li><a href="page-careers.html">Careers</a></li>
                                    <li><a href="page-term.php">Term and Condition</a></li>
                                    <li><a href="page-register.php">Register</a></li>
                                    <li><a href="page-login.php">Login</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="blog.html">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog Grid</a></li>
                                    <li><a href="blog-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-list.html">Blog List</a></li>
                                    <li><a href="blog-big.html">Blog Big</a></li>
                                    <li><a href="blog-single.html">Blog Single - Left sidebar</a></li>
                                    <li><a href="blog-single-2.html">Blog Single - Right sidebar</a></li>
                                    <li><a href="blog-single-3.html">Blog Single - No sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <div class="mobile-header-top">
                        <div class="user-account"><a href="page-account.php"><img src="assets/imgs/template/ava_1.png" alt="Ecom"></a>
                            <div class="content">
                                <h6 class="user-name">Hello<span class="text-brand"> Steven !</span></h6>
                                <p class="font-xs text-muted">You have 3 new messages</p>
                            </div>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                        <li><a href="page-account.php">My Account</a></li>
                        <li><a href="page-account.php">Order Tracking</a></li>
                        <li><a href="page-account.php">My Orders</a></li>
                        <li><a href="page-account.php">My Wishlist</a></li>
                        <li><a href="page-account.php">Setting</a></li>
                        <li><a href="page-login.php">Sign out</a></li>
                    </ul>
                </div>
                <div class="mobile-banner">
                    <div class="bg-5 block-iphone"><span class="color-brand-3 font-sm-lh32">Starting from $899</span>
                        <h3 class="font-xl mb-10">iPhone 12 Pro 128Gb</h3>
                        <p class="font-base color-brand-3 mb-10">Special Sale</p><a class="btn btn-arrow" href="shop-grid.php">learn more</a>
                    </div>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2022 &copy; Ecom - Marketplace Template.<br>Designed by<a href="http://alithemes.com" target="_blank">&nbsp; AliThemes</a></div>
            </div>
        </div>
    </div>
</div>