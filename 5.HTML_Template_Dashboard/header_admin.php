    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
      <div class="aside-top"><a class="brand-wrap ml-50" href="index.php"><img class="logo" src="assets/imgs/img/vestorelogo.png" height="50%" alt="Vestore"></a>
        <div>
          <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
        </div>
      </div>
      <nav>
        <ul class="menu-aside">
          <li class="menu-item"><a class="menu-link" href="index.php">
              <i class="icon material-icons md-home"></i><span class="text">Inicio</span></a>
          </li>
          <li class="menu-item"><a class="menu-link" href="page-products-grid.php">
              <i class="icon material-icons md-shopping_bag"></i><span class="text">Productos</span></a>
          </li>
          <li class="menu-item">
            <a class="menu-link" href="page-categories.php"><i class="icon material-icons md-shopping_bag"></i><span class="text">Categorías</span></a>
          </li>
          <li class="menu-item has-submenu"><a class="menu-link" href="page-orders-1.html"><i class="icon material-icons md-shopping_cart"></i><span class="text">Pedidos</span></a>
            <div class="submenu"><a href="page-orders-1.php">Pedidos</a><a href="page-orders-detail.php">Order detail</a><a href="page-orders-tracking.php">Order tracking</a><a href="page-invoice.php">Invoice</a></div>
          </li>
          <li class="menu-item has-submenu"><a class="menu-link" href="page-sellers-cards.html"><i class="icon material-icons md-store"></i><span class="text">Proveedores</span></a>
            <div class="submenu"><a href="page-sellers-cards.php">Sellers cards</a><a href="page-sellers-list.php">Sellers list</a><a href="page-seller-detail.php">Seller profile</a></div>
          </li>
          <li class="menu-item"><a class="menu-link" href="page-form-product-1.php"><i class="icon material-icons md-add_box"></i><span class="text">Añadir producto</span></a>
          </li>
          <li class="menu-item"><a class="menu-link" href="page-transactions-2.php"><i class="icon material-icons md-monetization_on"></i><span class="text">Transacciones</span></a>
          </li>

          <li class="menu-item"><a class="menu-link" href="page-reviews.php"><i class="icon material-icons md-comment"></i><span class="text">Reseñas</span></a></li>
          <li class="menu-item"><a class="menu-link" href="page-brands.php"><i class="icon material-icons md-stars"></i><span class="text">Marcas</span></a></li>
        </ul>
        <hr>
      </nav>
    </aside>
    <main class="main-wrap">
      <header class="main-header navbar">
        <div class="col-search">
          <form class="searchform">
            <div class="input-group">
              <input class="form-control" list="search_terms" type="text" placeholder="Search term">
              <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
            </div>
            <datalist id="search_terms">
              <option value="Products"></option>
              <option value="New orders"></option>
              <option value="Apple iphone"></option>
              <option value="Ahmed Hassan"></option>
            </datalist>
          </form>
        </div>
        <div class="col-nav">
          <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
          <ul class="nav">
            <!-- modo oscuro -->
            <!--<li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i class="material-icons md-nights_stay"></i></a></li>-->
            <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i class="material-icons md-cast"></i></a></li>
            
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown" href="#" aria-expanded="false"><img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a><a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a></a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </header>