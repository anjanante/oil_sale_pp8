<!doctype html>
<html lang="en">

<!-- Head -->

<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <base href="http://localhost:8000/">
    <!-- Custom Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500;600&family=Roboto:wght@300;400;700&display=auto" rel="stylesheet">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/letter-n-svgrepo-com.svg">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/letter-n-svgrepo-com.svg">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/letter-n-svgrepo-com.svg">
    <link rel="mask-icon" href="./assets/images/favicon/letter-n-svgrepo-com.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/theme.bundle.css" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
            /**
          * Reinstate scrolling for non-JS clients
          */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Oil Sales</title>
</head>

<body class="">

    <!-- Navbar -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white flex-column border-0  ">
        <div class="container-fluid">
            <div class="w-100">
                <div class="d-flex justify-content-between align-items-center flex-wrap">

                    <!-- Logo-->
                    <a class="navbar-brand fw-bold fs-3 m-0 p-0 flex-shrink-0 order-0" href="./">
                        <div class="d-flex align-items-center">
                            <svg fill="#000000" height="30px" width="30px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 23.631 23.631" xml:space="preserve">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <g>
                                        <g>
                                            <polygon points="0,0.663 9.401,0.663 15.882,7.146 15.882,14.127 5.307,3.608 5.274,22.969 0,22.969 "></polygon>
                                            <polygon points="23.631,22.969 14.232,22.969 7.752,16.485 7.752,9.501 18.327,20.018 18.359,0.662 23.631,0.662 "></polygon>
                                        </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                        <g> </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </a>
                    <!-- / Logo-->

                    <!-- Navbar Icons-->
                    <ul class="list-unstyled mb-0 d-flex align-items-center order-1 order-lg-2 nav-sidelinks">

                        <!-- Mobile Nav Toggler-->
                        <li class="d-lg-none">
                            <span class="nav-link text-body d-flex align-items-center cursor-pointer" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="ri-menu-line ri-lg me-1"></i> Menu</span>
                        </li>
                        <!-- /Mobile Nav Toggler-->

                        <!-- Navbar Search-->
                        <li class="d-none d-sm-block">
                            <span class="nav-link text-body search-trigger cursor-pointer">Search</span>

                            <!-- Search navbar overlay-->
                            <div class="navbar-search d-none">
                                <div class="input-group mb-3 h-100">
                                    <span class="input-group-text px-4 bg-transparent border-0"><i class="ri-search-line ri-lg"></i></span>
                                    <input type="text" class="form-control text-body bg-transparent border-0" placeholder="Enter your search terms...">
                                    <span class="input-group-text px-4 cursor-pointer disable-child-pointer close-search bg-transparent border-0"><i class="ri-close-circle-line ri-lg"></i></span>
                                </div>
                            </div>
                            <div class="search-overlay"></div>
                            <!-- / Search navbar overlay-->

                        </li>
                        <!-- /Navbar Search-->

                        <!-- Navbar Login-->
                        <?php if(isset($_SESSION) && isset($_SESSION['logged']) && $_SESSION['logged']): ?>
                        <li class="ms-1 d-none d-lg-inline-block dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Connected
                                <svg id="connected-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="text-success" viewBox="0 0 16 16">
                                    <circle cx="8" cy="8" r="8"></circle>
                                </svg>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><?= $_SESSION['email'] ?></a></li>
                                <li><a class="dropdown-item" href="/index.php/logout">Logout</a></li>
                            </ul>
                        </li>
                        <?php else:; ?>
                        <li class="ms-1 d-none d-lg-inline-block">
                            <a class="nav-link text-body" href="/index.php/login">
                                Account
                            </a>
                        </li>
                        <?php endif; ?>
                        <!-- /Navbar Login-->

                        <!-- Navbar Cart Icon-->
                        <li class="ms-1 d-inline-block position-relative dropdown-cart">
                            <button class="nav-link me-0 disable-child-pointer border-0 p-0 bg-transparent text-body" type="button">
                                Bag (2)
                            </button>
                            <div class="cart-dropdown dropdown-menu">

                                <!-- Cart Header-->
                                <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-4">
                                    <h6 class="fw-bolder m-0">Cart Summary (2 items)</h6>
                                    <i class="ri-close-circle-line text-muted ri-lg cursor-pointer btn-close-cart"></i>
                                </div>
                                <!-- / Cart Header-->

                                <!-- Cart Items-->
                                <div>

                                    <!-- Cart Product-->
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-1.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Emblica Officinals
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 9 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$85.00</p>
                                        </div>
                                    </div>
                                    <!-- Cart Product-->
                                    <div class="row mx-0 py-4 g-0 border-bottom">
                                        <div class="col-2 position-relative">
                                            <picture class="d-block ">
                                                <img class="img-fluid" src="./assets/images/products/product-cart-2.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                            </picture>
                                        </div>
                                        <div class="col-9 offset-1">
                                            <div>
                                                <h6 class="justify-content-between d-flex align-items-start mb-2">
                                                    Herbal Collection
                                                    <i class="ri-close-line ms-3"></i>
                                                </h6>
                                                <span class="d-block text-muted fw-bolder text-uppercase fs-9">Size: 11 / Qty: 1</span>
                                            </div>
                                            <p class="fw-bolder text-end text-muted m-0">$125.00</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Cart Items-->

                                <!-- Cart Summary-->
                                <div>
                                    <div class="pt-3">
                                        <div class="d-flex flex-column flex-md-row justify-content-md-between align-items-md-start mb-4 mb-md-2">
                                            <div>
                                                <p class="m-0 fw-bold fs-5">Grand Total</p>
                                                <span class="text-muted small">Inc $45.89 sales tax</span>
                                            </div>
                                            <p class="m-0 fs-5 fw-bold">$422.99</p>
                                        </div>
                                    </div>
                                    <a href="./cart.html" class="btn btn-outline-dark w-100 text-center mt-4" role="button">View Cart</a>
                                    <a href="./checkout.html" class="btn btn-dark w-100 text-center mt-2" role="button">Proceed To Checkout</a>
                                </div>
                                <!-- / Cart Summary-->
                            </div>


                        </li>
                        <!-- /Navbar Cart Icon-->

                    </ul>
                    <!-- Navbar Icons-->

                    <!-- Main Navigation-->
                    <div class="flex-shrink-0 collapse navbar-collapse navbar-collapse-light w-auto flex-grow-1 order-2 order-lg-1" id="navbarNavDropdown">

                        <!-- Menu-->
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <!--li class="nav-item dropdown dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Men
                                </a>
                                <!-- Menswear dropdown menu-->
                            <div class="dropdown-menu dropdown-megamenu">
                                <div class="container-fluid">
                                    <div class="row g-0 g-lg-3">
                                        <!-- Menswear Dropdown Menu Links Section-->
                                        <div class="col col-lg-8 py-lg-5">
                                            <div class="row py-3 py-lg-0 flex-wrap gx-4 gy-6">
                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Coats & Jackets</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Waterproof Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Insulated Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Down Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Softshell Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Casual Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Windproof Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Breathable Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Cleaning & Proofing</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->

                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading">Insulated</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Insulated Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Bodywarmers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Parkas</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Baselayers & Thermals</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Winter Hats</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Scarves & Neck</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Gloves & Mitts</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->

                                                <!-- menu row-->
                                                <div class="d-none d-xxl-block col">
                                                    <h6 class="dropdown-heading">Footwear</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Lifestyle & Casual</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Walking Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Running Shoes</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Military Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Fabric Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Leather Walking Boots</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Wellies</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item" href="./category.php">Winter Footwear</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item dropdown-link-all" href="./category.php">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->

                                                <!-- menu row-->
                                                <div class="col">
                                                    <h6 class="dropdown-heading text-danger">Special Offers</h6>
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Insulated Jackets</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Bodywarmers</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Parkas</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Baselayers & Thermals</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Winter Hats</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Scarves & Neck</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Gloves & Mitts</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger" href="./category.php">Accessories</a></li>
                                                        <li class="dropdown-list-item"><a class="dropdown-item text-danger dropdown-link-all" href="./category.php">View All</a></li>
                                                    </ul>
                                                </div>
                                                <!-- / menu row-->
                                            </div>

                                            <div class="align-items-center justify-content-between mt-5 d-none d-lg-flex">
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-1.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-2.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-3.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-4.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-5.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                                <div class="me-5 f-w-20">
                                                    <a class="d-block" href="./category.php">
                                                        <picture>
                                                            <img class="img-fluid d-table mx-auto" src="./assets/images/logos/logo-6.svg" alt="">
                                                        </picture>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Menswear Dropdown Menu Links Section-->

                                        <!-- Menswear Dropdown Menu Images Section-->
                                        <div class="col-lg-4 d-none d-lg-block">
                                            <div class="vw-50 border-start h-100 position-absolute"></div>
                                            <div class="py-lg-5 position-relative z-index-10 px-lg-4">
                                                <div class="row g-4">
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="./assets/images/banners/banner-12.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.php">Latest Arrivals</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="./assets/images/banners/banner-13.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.php">Accessories</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="./assets/images/banners/banner-14.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.php">T-Shirts</a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <div class="card justify-content-center d-flex align-items-center bg-transparent">
                                                            <picture class="w-100 d-block mb-2 mx-auto">
                                                                <img class="w-100 rounded" title="" src="./assets/images/banners/banner-15.jpg" alt="HTML Bootstrap Template by Pixel Rocket">
                                                            </picture>
                                                            <a class="fw-bolder link-cover" href="./category.php">Jackets</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="./category.php" class="btn btn-link p-0 fw-bolder text-link-border mt-5 text-dark mx-auto d-table">Visit Mens Section</a>
                                            </div>
                                        </div>
                                        <!-- Menswear Dropdown Menu Images Section-->
                                    </div>
                                </div>
                            </div>
                            <!-- / Menswear dropdown menu-->
                            <!--/li-->
                            <!--li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Women
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./category.php">Tops</a></li>
                                    <li><a class="dropdown-item" href="./category.php">Bottoms</a></li>
                                    <li><a class="dropdown-item" href="./category.php">Jeans</a></li>
                                    <li><a class="dropdown-item" href="./category.php">T-Shirts</a></li>
                                    <li><a class="dropdown-item" href="./category.php">Shoes</a></li>
                                    <li><a class="dropdown-item" href="./category.php">Accessories</a></li>
                                </ul>
                            </li-->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="./category.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Category
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="index.php/category">Category 1</a></li>
                                    <li><a class="dropdown-item" href="index.php/category">Category 2</a></li>
                                    <li><a class="dropdown-item" href="index.php/category">Category 3</a></li>
                                    <li><a class="dropdown-item" href="index.php/category">Category 4</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./cart.html" role="button">
                                    Checkout
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Annex
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/index.php/login">Login</a></li>
                                    <li><a class="dropdown-item" href="/index.php/register">Register</a></li>
                                    <li><a class="dropdown-item" href="/index.php/admin">Admin</a></li>
                                </ul>
                            </li>
                        </ul> <!-- / Menu-->

                    </div>
                    <!-- / Main Navigation-->

                </div>
            </div>
        </div>
    </nav>

    <!-- Main Section-->
    <section class="mt-0 ">