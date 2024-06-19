    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
      <div class="aside-top"><a class="brand-wrap" href="index.php"><img class="logo" src="assets/imgs/theme/logo.svg" alt="Evara Dashboard"></a>
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
          <li class="menu-item has-submenu"><a class="menu-link" href="#"><i class="icon material-icons md-person"></i><span class="text">Cuentas</span></a>
            <div class="submenu"><a href="page-account-login.php">User login</a><a href="page-account-register.php">User registration</a><a href="page-error-404.php">Error 404</a></div>
          </li>
          <li class="menu-item"><a class="menu-link" href="page-reviews.php"><i class="icon material-icons md-comment"></i><span class="text">Reseñas</span></a></li>
          <li class="menu-item"><a class="menu-link" href="page-brands.php"><i class="icon material-icons md-stars"></i><span class="text">Marcas</span></a></li>
        </ul>
        <hr>
        <ul class="menu-aside">
          <li class="menu-item has-submenu"><a class="menu-link" href="#"><i class="icon material-icons md-settings"></i><span class="text">Settings</span></a>
            <div class="submenu"><a href="page-settings-1.html">Setting sample 1</a><a href="page-settings-2.html">Setting sample 2</a></div>
          </li>
        </ul>
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
            <li class="nav-item"><a class="nav-link btn-icon" href="#"><i class="material-icons md-notifications animation-shake"></i><span class="badge rounded-pill">3</span></a></li>
            <li class="nav-item"><a class="nav-link btn-icon darkmode" href="#"><i class="material-icons md-nights_stay"></i></a></li>
            <li class="nav-item"><a class="requestfullscreen nav-link btn-icon" href="#"><i class="material-icons md-cast"></i></a></li>
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown" href="#" aria-expanded="false"><i class="material-icons md-public"></i></a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage"><a class="dropdown-item text-brand" href="#"><img src="assets/imgs/theme/flag-us.png" alt="English">English</a><a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-fr.png" alt="Français">Fran&ccedil;ais</a><a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-jp.png" alt="Français">&#x65E5;&#x672C;&#x8A9E;</a><a class="dropdown-item" href="#"><img src="assets/imgs/theme/flag-cn.png" alt="Français">&#x4E2D;&#x56FD;&#x4EBA;</a></div>
            </li>
            <li class="dropdown nav-item"><a class="dropdown-toggle" id="dropdownAccount" data-bs-toggle="dropdown" href="#" aria-expanded="false"><img class="img-xs rounded-circle" src="assets/imgs/people/avatar2.jpg" alt="User"></a>
              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount"><a class="dropdown-item" href="#"><i class="material-icons md-perm_identity"></i>Edit Profile</a><a class="dropdown-item" href="#"><i class="material-icons md-settings"></i>Account Settings</a><a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a><a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a><a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </header>