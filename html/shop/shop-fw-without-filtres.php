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
                    <!-- Product Box -->
                    <div class="shop-top-bar d-flex pb-3">
                        <div class="layout-change">
                            <a class="btn btn-white btn-sm active" href="#"><i class="bi bi-grid"></i></a>
                            <a class="btn btn-white btn-sm" href="shop-list-fw-without-filtres.html"><i class="bi bi-view-stacked"></i></a>
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
                    </div>
                    <div class="shop-bottom-bar d-flex align-items-center pt-3 mt-3">
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
                    <!-- End Product Box -->
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