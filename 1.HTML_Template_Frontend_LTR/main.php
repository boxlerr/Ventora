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
                <li><a class="font-xs" href="page-about-us.php" data-section="header" data-value="sobre_nosotros">Sobre nosotros</a></li>
                <li><a class="font-xs" href="page-contact.php" data-section="header" data-value="contacto">Contacto</a></li>
            </ul>
        </div>
        <div class="info-topbar text-center d-none d-xl-block"><span class="font-xs color-brand-3" data-section="header" data-value="envios_gratis">Envío gratis en compras a partir de</span><span class="font-sm-bold color-success"> ARS 40.000</span></div>
        <div class="menu-topbar-right">
            <!-- <span class="font-xs color-brand-3">Ayuda? Llámanos:</span><span class="font-sm-bold color-success"> + 1800 900</span> -->
            <div class="dropdown dropdown-language dropdown-flags">
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
                <div class="header-logo"><a class="d-flex" href="index.php"><img id="logoheader" alt="Ecom" src="assets/imgs/img/vestorelogo.png"></a></div>
                <div class="header-search ">
                    <div class="box-header-search">
                        <form class="form-search" method="post" action="#">
                            <div class="box-keysearch">
                                <input class="form-control font-xs" type="text" value="" placeholder="Buscar productos">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="header-nav">
                    <nav class="nav-main-menu d-none d-xl-block">
                        <ul class="main-menu">
                            <li><a class="active" href="index.php" data-section="header" data-value="inicio">Inicio</a></li>
                            <li class="has-children"><a href="#" data-section="header" data-value="productos">Productos</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.php" data-section="header" data-value="minorista">Minorista</a></li>
                                    <li><a href="shop-grid-mayorista.php" data-section="header" data-value="mayorista">Mayorista</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#" data-section="header" data-value="trabaja_con_nosotros">Trabajá con nosotros</a>
                                <ul class="sub-menu">
                                    <li><a href="importar.php" data-section="header" data-value="importa">Importá</a></li>
                                    <li><a href="exportar.php" data-section="header" data-value="exporta">Exportá</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#" data-section="header" data-value="paginas">Paginas</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about-us.php" data-section="header" data-value="sobre_nosotros">Sobre nosotros</a></li>
                                    <li><a href="page-term.php" data-section="header" data-value="terminos_condiciones">Términos y condiciones</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.php" data-section="header" data-value="contacto">Contacto</a></li>
                        </ul>
                    </nav>
                    <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
                </div>
                <div class="header-shop">
                    <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-account"><span data-section="header" data-value="cuenta">Cuenta</span></span>
                        <div class="dropdown-account">
                            <ul>
                                <?php
                                if ($usuario) {
                                    echo "
                        <li><a href='page-account.php' data-section='header' data-value='mi_cuenta'>Mi cuenta</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='historial_compras'>Historial de compras</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='mis_favoritos'>Mis favoritos</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='configuracion'>Configuracion</a></li>
                        <li><a href='index.php?accion=afrg323sd44sfe' data-section='header' data-value='cerrar_cuenta'>Cerrar sesión</a></li>
                        ";
                                } else {
                                    echo "<li><a href='page-login.php' data-section='header' data-value='iniciar_sesion'>Iniciar sesion</a></li>";
                                    echo "<li><a href='page-register.php' data-section='header' data-value='crear_cuenta'>Crear cuenta</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                    if ($usuario) {
                        echo "<a class='font-lg icon-list icon-wishlist' href='shop-wishlist.php'><span data-section='header' data-value='lista_de_deseos'>Favoritos</span></a>";
                    } else {
                        echo "<a class='font-lg icon-list icon-wishlist' href='page-login.php'><span data-section='header' data-value='lista_de_deseos'>Favoritos</span></a>";
                    }
                    ?>

                    <?php
                    if (!$usuario) {
                        echo "<a href='page-login.php' class='font-lg icon-list icon-cart'><span data-section='header' data-value='carrito'>Cart</span></a>";
                    } else {
                        $carrito = mostrarCarrito($usuario);
                    ?>
                        <div class="d-inline-block box-dropdown-cart"><span class="font-lg icon-list icon-cart"><span data-section="header" data-value="carrito">Carrito</span><?php if ($carrito[0] > 0) {
                                                                                                                                                                                    echo "<span class='number-item font-xs'>$carrito[0] </span>";
                                                                                                                                                                                } ?> </span>
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
                                        <div class="col-6 text-start"><span class="font-md-bold color-brand-3" data-section="header" data-value="total">Total</span></div>
                                        <div class="col-6"><span class="font-md-bold color-brand-1">$<?php echo $total; ?></span></div>
                                    </div>
                                    <div class="row mt-15">
                                        <div class="col-6 text-start"><a class="btn btn-cart w-auto" href="shop-cart.php" data-section="header" data-value="vista_carrito">View cart</a></div>
                                        <div class="col-6"><a class="btn btn-buy w-auto" href="shop-checkout.php" data-section="header" data-value="pago">Checkout</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-content-area">
            <div class="mobile-logo"><a class="d-flex" href="index.php"><img id="logoheader" alt="Ecom" src="assets/imgs/img/vestorelogo.png"></a></div>
            <div class="perfect-scroll">
                <div class="mobile-menu-wrap mobile-header-border">
                    <nav class="mt-15">
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a class="active" href="index.php" data-section="header" data-value="home">Inicio</a></li>
                            <li class="has-children"><a href="shop-grid.php" data-section="header" data-value="productos">Productos</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-grid.php" data-section="header" data-value="minorista">Minorista</a></li>
                                    <li><a href="shop-single-product-2.php" data-section="header" data-value="mayorista">Mayorista</a></li>
                                </ul>
                            </li>
                            </li>
                            <li class="has-children"><a href="#" data-section="header" data-value="trabaja_con_nosotros">Trabajá con nosotros</a>
                                <ul class="sub-menu">
                                    <li><a href="importar.php" data-section="header" data-value="importa">Importá</a></li>
                                    <li><a href="exportar.php" data-section="header" data-value="exporta">Exportá</a></li>
                                </ul>
                            </li>
                            <li class="has-children"><a href="#" data-section="header" data-value="paginas">Paginas</a>
                                <ul class="sub-menu">
                                    <li><a href="page-about-us.php" data-section="header" data-value="sobre_nosotros">Sobre nosotros</a></li>
                                    <li><a href="page-term.php" data-section="header" data-value="terminos_condiciones">Términos y condiciones</a></li>
                                </ul>
                            </li>
                            <li><a href="page-contact.php" data-section="header" data-value="contacto">Contacto</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <ul class="mobile-menu">
                    <?php
                                if ($usuario) {
                                    echo "
                        <li><a href='page-account.php' data-section='header' data-value='mi_cuenta'>Mi cuenta</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='historial_compras'>Historial de compras</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='mis_favoritos'>Mis favoritos</a></li>
                        <li><a href='page-account.php' data-section='header' data-value='configuracion'>Configuracion</a></li>
                        <li><a href='index.php?accion=afrg323sd44sfe' data-section='header' data-value='cerrar_cuenta'>Cerrar sesión</a></li>
                        ";
                                } else {
                                    echo "<li><a href='page-login.php' data-section='header' data-value='iniciar_sesion'>Iniciar sesion</a></li>";
                                    echo "<li><a href='page-register.php' data-section='header' data-value='crear_cuenta'>Crear cuenta</a></li>";
                                }
                                ?>
                    </ul>
                </div>
                <div class="site-copyright color-gray-400 mt-30">Copyright 2024 &copy; Vestore</div>
            </div>
        </div>
    </div>
</div>