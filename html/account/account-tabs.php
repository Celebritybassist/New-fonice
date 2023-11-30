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
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start">My Account</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">My Account</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Breadcrumb -->
            <!-- Table -->
            <div class="py-6 my-account">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="nav flex-column nav-pills me-3 border" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a href="#" class="nav-link active" id="v-pills-personal-tab" data-bs-toggle="pill" data-bs-target="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="false"><i class="bi bi-person me-3"></i> Personal Data</a>
                                <a href="#" class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password" role="tab" aria-controls="v-pills-password" aria-selected="false"><i class="bi bi-lock me-3"></i> Change Password</a>
                                <a href="#" class="nav-link" id="v-pills-address-tab" data-bs-toggle="pill" data-bs-target="#v-pills-address" role="tab" aria-controls="v-pills-address" aria-selected="false"><i class="bi bi-house-door me-3"></i> Address</a>
                                <a href="#" class="nav-link" id="v-pills-order-tab" data-bs-toggle="pill" data-bs-target="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="true"><i class="bi bi-box-seam me-3"></i> Orders</a>
                                <a class="nav-link" href="wishlist.html"><i class="bi bi-suit-heart me-3"></i> Wishlist</a>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="tab-content " id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                    <h4 class="pb-3">
                                        Personal Detail
                                    </h4>
                                    <form>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">First Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="First name">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Last name">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email address<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="E-mail">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Mobile Number<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Mobile">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Landline Number</label>
                                                <input type="text" class="form-control" placeholder="Landline">
                                            </div>
                                        </div>
                                        <div class="">
                                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                            <label class="form-check-label" for="inlineRadio1">Male</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                            <label class="form-check-label" for="inlineRadio2">Female</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                                            <label class="form-check-label" for="inlineRadio3">Other</label>
                                        </div>
                                        <div class="form-group mt-4"><button type="submit" class="btn btn-primary">Save Changes</button></div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab">
                                    <h4 class="mb-3">
                                        Change Password
                                    </h4>
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Old-Password<span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="exampleInputEmail4" placeholder="Old Password">
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Password<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter Your Password">
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <label class="form-label">Conform Password<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Conform Your Password">
                                            </div>
                                        </div>
                                        <div class="form-group mt-4"><button type="submit" class="btn btn-primary">Change Passwod</button></div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="v-pills-address" role="tabpanel" aria-labelledby="v-pills-address-tab">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-sm-6">
                                            <h4 class="m-0">
                                                Addresses
                                            </h4>
                                        </div>
                                        <div class="col-sm-6 text-sm-end">
                                            <a href="#" class="underline"><i class="bi bi-plus-circle"></i> Add new address</a>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-lg-6 my-3">
                                            <div class="card bg-transparent">
                                                <div class="card-header bg-transparent px-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h5 class="card-title m-0">Billing Address</h5>
                                                        </div>
                                                        <div class="col">
                                                            <div class="dropdown text-end">
                                                                <a class="btn btn-sm px-2" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-3">
                                                    <p class="m-0">EDWARD JOE<br>
                                                        301 The Greenhouse London,<br>
                                                        E2 8DY UK<br>
                                                        United Kingdom<br>
                                                        (0123)-456789<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 my-3">
                                            <div class="card bg-transparent">
                                                <div class="card-header bg-transparent px-3">
                                                    <div class="row align-items-center">
                                                        <div class="col-8">
                                                            <h5 class="card-title m-0">Billing Address</h5>
                                                        </div>
                                                        <div class="col">
                                                            <div class="dropdown text-end">
                                                                <a class="btn btn-sm px-2" href="#" role="button" id="dropdownMenuLink_01" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bi bi-pencil-square"></i>
                                                                </a>
                                                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink_01">
                                                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body px-3">
                                                    <p class="m-0">EDWARD JOE<br>
                                                        301 The Greenhouse London,<br>
                                                        E2 8DY UK<br>
                                                        United Kingdom<br>
                                                        (0123)-456789<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                                    <h4 class="m-0 pb-3">
                                        My Orders
                                    </h4>
                                    <!-- Cart Table -->
                                    <div class="table-content table-responsive cart-table-content">
                                        <table class="table table-bordered align-middle">
                                            <thead>
                                                <tr class="text-uppercase text-nowrap">
                                                    <th style="width: 100px" class="text-mode text-center fw-500">Image</th>
                                                    <th class="text-mode text-center fw-500">Product Name</th>
                                                    <th class="text-mode text-center fw-500">Until Price</th>
                                                    <th class="text-mode text-center fw-500">Qty</th>
                                                    <th class="text-mode text-center fw-500">Subtotal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center product-thumbnail">
                                                        <a class="text-reset" href="#"><img src="../../assets/img/fashion/product-1.jpg" class="img-fluid" width="100" alt=""></a>
                                                    </td>
                                                    <td class="text-center product-name"><a class="text-reset" href="#">Product Name</a></td>
                                                    <td class="text-center product-price-cart"><span class="amount">$260.00</span></td>
                                                    <td class="text-center product-quantity">
                                                        10
                                                    </td>
                                                    <td class="text-center product-subtotal">$110.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Table -->
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