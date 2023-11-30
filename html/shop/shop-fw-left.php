<!doctype html>
<html lang="zxx">

<head>
    <!-- metas -->
<meta charset="utf-8">
<meta name="author" content="Fonice" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="keywords" content="Shopy - eCommerce Bootstrap 5 Template" />
<meta name="description" content="Shopy - eCommerce Bootstrap 5 Template" />
<!-- title -->
<title>Fonice - Get your best products with us.</title>
<!-- Favicon -->
<link rel="shortcut icon" href="../../assets/img/favicon.ico">
<!-- CSS Template -->
<link href="../../assets/css/style.css" rel="stylesheet">
</head>

    <?php
        require dirname(__DIR__) ."/home/nav/header.php";
    ?>
        <!-- End Header -->
        <!-- Main -->
        <main>
            <!-- Breadcrumb -->
            <div class="py-3 bg-gray-100">
                <div class="container-fluid px-xxl-8">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">Shop</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap text-reset" href="#">Home</a></li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">Product</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <!-- Shop -->
            <section class="py-6">
                <div class="container-fluid px-xxl-8">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-lg-4 col-xl-3 pe-xl-5 offcanvas-lg offcanvas-start px-0 px-lg-3" tabindex="-1" id="shop_filter" aria-labelledby="shop_filterLabel">
                            <div class="offcanvas-header border-bottom">
                                <h5 class="offcanvas-title" id="shop_filterLabel">Shop Filter</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#shop_filter" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body flex-column">
                                <!-- Categories -->
                                <div class="shop-sidebar-block">
                                    <div class="shop-sidebar-title">
                                        <a class="h5" data-bs-toggle="collapse" href="#shop_categories" role="button" aria-expanded="true" aria-controls="shop_categories">Categories <i class="bi bi-chevron-up"></i></a>
                                    </div>
                                    <div class="shop-category-list collapse show" id="shop_categories">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link active">All Products</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Men <span>(25)</span></a>
                                                <a data-bs-toggle="collapse" href="#shop_cat_1" role="button" aria-expanded="false" aria-controls="shop_cat_1" class="s-icon"></a>
                                                <div class="collapse" id="shop_cat_1">
                                                    <ul class="nav nav-pills flex-column nav-hierarchy">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Topwear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Bottomwear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Footwear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Sports &amp; Active Wear</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Women <span>(40)</span></a>
                                                <a data-bs-toggle="collapse" href="#shop_cat_2" role="button" aria-expanded="false" aria-controls="shop_cat_2" class="s-icon"></a>
                                                <div class="collapse" id="shop_cat_2">
                                                    <ul class="nav nav-pills flex-column nav-hierarchy">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Indian &amp; Fusion Wear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Western Wear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Footwear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Beauty &amp; Personal Care</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Kids <span>(35)</span></a>
                                                <a data-bs-toggle="collapse" href="#shop_cat_3" role="button" aria-expanded="false" aria-controls="shop_cat_3" class="s-icon"></a>
                                                <div class="collapse" id="shop_cat_3">
                                                    <ul class="nav nav-pills flex-column nav-hierarchy">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Boys Clothing</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Girls Clothing</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Boys Footwear</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Girls Footwear</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link ">Home &amp; Living <span>(80)</span></a>
                                                <a data-bs-toggle="collapse" href="#shop_cat_4" role="button" aria-expanded="false" aria-controls="shop_cat_4" class="s-icon"></a>
                                                <div class="collapse" id="shop_cat_4">
                                                    <ul class="nav nav-pills flex-column nav-hierarchy">
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Bed Linen &amp; Furnishing</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Bath</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Home Decor</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#" class="nav-link ">Kitchen &amp; Table</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Categories -->
                                <!-- gender -->
                                <div class="shop-sidebar-block">
                                    <div class="shop-sidebar-title">
                                        <a class="h5" data-bs-toggle="collapse" href="#shop_Gender" role="button" aria-expanded="true" aria-controls="shop_Gender">Gender <i class="bi bi-chevron-up"></i></a>
                                    </div>
                                    <div class="shop-sidebar-list collapse show" id="shop_Gender">
                                        <ul>
                                            <li class="custom-radio">
                                                <input class="custom-control-input" id="gen1" type="radio" name="Gender" checked>
                                                <label class="custom-control-label" for="gen1">
                                                    Men
                                                </label>
                                            </li>
                                            <li class="custom-radio">
                                                <input class="custom-control-input" id="gen2" type="radio" name="Gender">
                                                <label class="custom-control-label" for="gen2">
                                                    Women
                                                </label>
                                            </li>
                                            <li class="custom-radio">
                                                <input class="custom-control-input" id="gen3" type="radio" name="Gender">
                                                <label class="custom-control-label" for="gen3">
                                                    Boys
                                                </label>
                                            </li>
                                            <li class="custom-radio">
                                                <input class="custom-control-input" id="gen4" type="radio" name="Gender">
                                                <label class="custom-control-label" for="gen4">
                                                    Girls
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Gender -->
                                <!-- Color -->
                                <div class="shop-sidebar-block">
                                    <div class="shop-sidebar-title">
                                        <a class="h5" data-bs-toggle="collapse" href="#shop_Color" role="button" aria-expanded="true" aria-controls="shop_Color">Color <i class="bi bi-chevron-up"></i></a>
                                    </div>
                                    <div class="shop-sidebar-list collapse show" id="shop_Color">
                                        <ul>
                                            <li class="custom-checkbox checkbox-color">
                                                <input class="custom-control-input" id="colorsidebar1" type="checkbox" checked="">
                                                <label class="custom-control-label" style="color: #1F45FC;" for="colorsidebar1">
                                                    <span class="text-body">
                                                        Royal Blue
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="custom-checkbox checkbox-color">
                                                <input class="custom-control-input" id="colorsidebar2" type="checkbox">
                                                <label class="custom-control-label" style="color: #FCD71E;" for="colorsidebar2">
                                                    <span class="text-body">
                                                        Yellow
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="custom-checkbox checkbox-color">
                                                <input class="custom-control-input" id="colorsidebar3" type="checkbox">
                                                <label class="custom-control-label" style="color: #000;" for="colorsidebar3">
                                                    <span class="text-body">
                                                        Black
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="custom-checkbox checkbox-color">
                                                <input class="custom-control-input" id="colorsidebar4" type="checkbox">
                                                <label class="custom-control-label" style="color: #f73636;" for="colorsidebar4">
                                                    <span class="text-body">
                                                        Red
                                                    </span>
                                                </label>
                                            </li>
                                            <li class="custom-checkbox checkbox-color">
                                                <input class="custom-control-input" id="colorsidebar5" type="checkbox" disabled="">
                                                <label class="custom-control-label" style="color: #17a2b8;" for="colorsidebar5">
                                                    <span class="text-body">
                                                        Cyan
                                                    </span>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Color -->
                                <!-- Brands -->
                                <div class="shop-sidebar-block">
                                    <div class="shop-sidebar-title">
                                        <a class="h5" data-bs-toggle="collapse" href="#shop_brand" role="button" aria-expanded="true" aria-controls="shop_brand">Brands <i class="bi bi-chevron-up"></i></a>
                                    </div>
                                    <div class="shop-sidebar-list collapse show" id="shop_brand">
                                        <ul>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="brand1" type="checkbox">
                                                <label class="custom-control-label" for="brand1">
                                                    Adidas
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="brand2" type="checkbox">
                                                <label class="custom-control-label" for="brand2">
                                                    Levis
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="brand3" type="checkbox">
                                                <label class="custom-control-label" for="brand3">
                                                    Puma
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="brand4" type="checkbox" disabled="">
                                                <label class="custom-control-label" for="brand4">
                                                    Roadster
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="brand5" type="checkbox">
                                                <label class="custom-control-label" for="brand5">
                                                    Converse
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End Brands -->
                                <!-- Brands -->
                                <div class="shop-sidebar-block">
                                    <div class="shop-sidebar-title">
                                        <a class="h5" data-bs-toggle="collapse" href="#shop_price" role="button" aria-expanded="true" aria-controls="shop_price">Price <i class="bi bi-chevron-up"></i></a>
                                    </div>
                                    <div class="shop-sidebar-list collapse show" id="shop_price">
                                        <ul>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="price1" type="checkbox">
                                                <label class="custom-control-label" for="price1">
                                                    $10.00 - $49.00
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="price2" type="checkbox">
                                                <label class="custom-control-label" for="price2">
                                                    $50.00 - $99.00
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="price3" type="checkbox">
                                                <label class="custom-control-label" for="price3">
                                                    $100.00 - $199.00
                                                </label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input class="custom-control-input" id="price4" type="checkbox">
                                                <label class="custom-control-label" for="price4">
                                                    $200.00 and Up
                                                </label>
                                            </li>
                                        </ul>
                                        <div class="d-flex align-items-center pt-3">
                                            <!-- Input -->
                                            <input type="number" class="form-control form-control-sm" placeholder="$10.00" min="10">
                                            <!-- Divider -->
                                            <div class="text-gray-350 mx-2">‒</div>
                                            <!-- Input -->
                                            <input type="number" class="form-control form-control-sm" placeholder="$350.00" max="350">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Brands -->
                            </div>
                        </div>
                        <!-- End Sidebar -->
                        <!-- Product Box -->
                        <div class="col-lg-8 col-xl-9">
                            <div class="shop-top-bar d-flex pb-3">
                                <div class="layout-change">
                                    <!-- Mobile Toggle -->
                                    <button class="btn btn-sm d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#shop_filter" aria-controls="shop_filter">
                                        <i class="fs-4 lh-1 bi bi-justify-left"></i>
                                    </button>
                                    <!-- End Mobile Toggle -->
                                    <a class="btn btn-sm active" href="#"><i class="bi bi-grid"></i></a>
                                    <a class="btn btn-sm" href="shop-fw-left-list.html"><i class="bi bi-view-stacked"></i></a>
                                </div>
                                <div class="shortby-dropdown ms-auto">
                                    <div class="dropdown">
                                        <a class="btn btn-none btn-sm border dropdown-toggle text-mode" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                            Short by
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Featured</a></li>
                                            <li><a class="dropdown-item" href="#">Best selling</a></li>
                                            <li><a class="dropdown-item" href="#">Alphabetically, A-Z</a></li>
                                            <li><a class="dropdown-item" href="#">Alphabetically, Z-A</a></li>
                                            <li><a class="dropdown-item" href="#">Price, low to high</a></li>
                                            <li><a class="dropdown-item" href="#">Price, high to low</a></li>
                                            <li><a class="dropdown-item" href="#">Date, old to new</a></li>
                                            <li><a class="dropdown-item" href="#">Date, new to old</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-1.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio__1" checked>
                                                    <label class="radio-text-label" for="btnradio__1">XS</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio_2">
                                                    <label class="radio-text-label" for="btnradio_2">S</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio_3">
                                                    <label class="radio-text-label" for="btnradio_3">M</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio_4">
                                                    <label class="radio-text-label" for="btnradio_4">L</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-2.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color_1" checked="">
                                                    <label class="radio-color-label" for="color_1">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color_2">
                                                    <label class="radio-color-label" for="color_2">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color_3">
                                                    <label class="radio-color-label" for="color_3">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color_4">
                                                    <label class="radio-color-label" for="color_4">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-3.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi1o_1" checked>
                                                    <label class="radio-text-label" for="btnradi1o_1">XS</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi1_o2">
                                                    <label class="radio-text-label" for="btnradi1_o2">S</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi1_o3">
                                                    <label class="radio-text-label" for="btnradi1_o3">M</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi1_o4">
                                                    <label class="radio-text-label" for="btnradi_o4">L</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-4.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color2" id="color_5" checked="">
                                                    <label class="radio-color-label" for="color_5">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color2" id="color_6">
                                                    <label class="radio-color-label" for="color_6">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color2" id="color_7">
                                                    <label class="radio-color-label" for="color_7">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color2" id="color_8">
                                                    <label class="radio-color-label" for="color_8">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-5.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-6.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-7.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-8.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-1.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-1.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio1" checked>
                                                    <label class="radio-text-label" for="btnradio1">XS</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio2">
                                                    <label class="radio-text-label" for="btnradio2">S</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio3">
                                                    <label class="radio-text-label" for="btnradio3">M</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size3" id="btnradio4">
                                                    <label class="radio-text-label" for="btnradio4">L</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-2.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color__1" checked="">
                                                    <label class="radio-color-label" for="color__1">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color__2">
                                                    <label class="radio-color-label" for="color__2">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color__3">
                                                    <label class="radio-color-label" for="color__3">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                                <div class="form-check radio-color form-check-inline">
                                                    <input class="form-check-input" type="radio" name="color1" id="color__4">
                                                    <label class="radio-color-label" for="color__4">
                                                        <span style="background-color: #d1dceb;"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                                <!-- Product Box -->
                                <div class="col-sm-6 col-lg-3">
                                    <div class="product-card-1">
                                        <div class="product-card-image">
                                            <div class="badge-ribbon">
                                                <span class="badge bg-danger">Sale</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-heart"></i>
                                                </a>
                                                <a href="#" class="btn btn-outline-primary">
                                                    <i class="fi-repeat"></i>
                                                </a>
                                                <a data-bs-toggle="modal" data-bs-target="#px-quick-view" href="javascript:void(0)" class="btn btn-outline-primary">
                                                    <i class="fi-eye"></i>
                                                </a>
                                            </div>
                                            <div class="product-media">
                                                <a href="#">
                                                    <img class="img-fluid" src="../../assets/img/fashion/product-3.jpg" title="" alt="">
                                                </a>
                                                <div class="product-cart-btn">
                                                    <a href="#" class="btn btn-primary btn-sm w-100">
                                                        <i class="fi-shopping-cart"></i>
                                                        Add to cart
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-card-info">
                                            <div class="product-meta small">
                                                <a href="#">Clothing</a>, <a href="#">Men</a>
                                            </div>
                                            <div class="rating-star text">
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star-fill active"></i>
                                                <i class="bi bi-star"></i>
                                            </div>
                                            <h6 class="product-title">
                                                <a href="#">Fine-knit sweater</a>
                                            </h6>
                                            <div class="product-price">
                                                <span class="text-primary">$28.<small>50</small></span>
                                                <del class="fs-sm text-muted">$38.<small>50</small></del>
                                            </div>
                                            <div class="nav-thumbs">
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradio_1" checked>
                                                    <label class="radio-text-label" for="btnradio_1">XS</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi_o2">
                                                    <label class="radio-text-label" for="btnradi_o2">S</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi_o3">
                                                    <label class="radio-text-label" for="btnradi_o3">M</label>
                                                </div>
                                                <div class="form-check radio-text form-check-inline">
                                                    <input class="form-check-input" type="radio" name="size4" id="btnradi_o4">
                                                    <label class="radio-text-label" for="btnradi_o4">L</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Box -->
                            </div>
                            <div class="shop-bottom-bar d-flex align-items-center mt-3">
                                <div>Showing: 1 - 12 of 17</div>
                                <div class="ms-auto">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Product Box -->
                    </div>
                </div>
            </section>
            <!-- End Shop -->
        </main>
        <!-- End Main -->
        <!-- Footer -->
        <?php 
        require dirname(__DIR__) ."/home/footer/footer.php";
       ?>
        <!-- End Footer -->
    </div>
    <!-- 
    ========================
       End Wrapper 
    ========================
    -->
    <!-- script start -->
    <!-- jquery -->
<script src="../../assets/js/jquery-3.5.1.min.js"></script>
<!--bootstrap-->
<script src="../../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- slick carousel -->
<script src="../../assets/vendor/swiper/swiper-bundle.min.js"></script>
<!-- magnific -->
<script src="../../assets/vendor/magnific/jquery.magnific-popup.min.js"></script>
<!-- isotope -->
<script src="../../assets/vendor/isotope/isotope.pkgd.min.js"></script>
<!-- count-down -->
<script src="../../assets/vendor/count-down/jquery.countdown.min.js"></script>
<!-- count-down -->
<script src="../../assets/vendor/jarallax/jarallax-all.js"></script>
<!-- Theme Js -->
<script src="../../assets/js/custom.js"></script>
<script src="../../assets/js/theme.js"></script>
<script src="../../assets/js/color-modes.js"></script>
    <!-- End script start -->
</body>

</html>