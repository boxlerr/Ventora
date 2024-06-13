<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <link href="assets/css/style.css?v=1.0.0" rel="stylesheet">
    <title>Ecom - Marketplace Dashboard Template</title>
</head>
<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
      
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
        
        </header>
        <section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Add New Product</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Basic</h4>
                        </div>
                        <div class="card-body">
                            <form action="add_product.php" method="post" enctype="multipart/form-data">
                                <div class="mb-4">
                                    <label class="form-label" for="product_name">Product title</label>
                                    <input class="form-control" id="product_name" name="product_name" type="text" placeholder="Type here" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Full description</label>
                                    <textarea class="form-control" name="description" placeholder="Type here" rows="4" required></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Price</label>
                                    <input class="form-control" name="price" placeholder="$" type="number" step="0.01" required>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Category</label>
                                    <select class="form-select" name="category" required>
                                        <option value="1">Auriculares Gamer</option>
                                        <option value="2">Auriculares Inalámbricos</option>
                                        <option value="3">Auriculares Deportivos</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Image</label>
                                    <input class="form-control" type="file" name="image" accept="image/*" required>
                                </div>
                                <div class="mb-4">
                                    <button class="btn btn-primary" type="submit">Add Product</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
              
            </div>
        </section>
        <footer class="main-footer font-xs">
        
        </footer>
    </main>
    <script src="assets/js/vendors/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendors/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendors/select2.min.js"></script>
    <script src="assets/js/vendors/perfect-scrollbar.js"></script>
    <script src="assets/js/vendors/jquery.fullscreen.min.js"></script>
    <script src="assets/js/vendors/chart.js"></script>
    <script src="assets/js/main.js?v=1.0.0"></script>
    <script src="assets/js/custom-chart.js" type="text/javascript"></script>
</body>
</html>
