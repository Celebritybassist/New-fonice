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
                            <h1 class="m-0 h4 text-center text-lg-start">Your Order</h1>
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
            <div class="py-6">
                <div class="container">
                    <div class="row">
                        <!-- Profile Menu -->
                        <div class="col-lg-4 pb-4 pb-lg-0 col-xxl-3  pe-xxl-5">
                            <div class="bg-body border border-bottom-0 shadow-lg">
                                <div class="d-flex p-3 align-items-center">
                                    <div class="avatar avatar-lg rounded-circle">
                                        <img src="../../assets/img/avatar/avatar-2.jpg" title="" alt="">
                                    </div>
                                    <div class="col ps-3">
                                        <h6 class="m-0">Jennifer Winget</h6>
                                        <small><a href="#">your@email.com</a></small>
                                    </div>
                                </div>
                                <div class="bg-gray-200 p-3 border-bottom border-top">
                                    <h6 class="m-0">Dashboard</h6>
                                </div>
                                <ul class="list-unstyled mb-0 theme-link">
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center active p-3" href="account-order.html">
                                            <i class="bi bi-bag me-2"></i> Order <div class="ms-auto badge-pill badge bg-secondary">5</div>
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="account-wishlist.html">
                                            <i class="fi-heart me-2"></i>Wishlist <div class="ms-auto badge-pill badge bg-secondary">5</div>
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="account-tickets.html">
                                            <i class="bi bi-bookmark me-2"></i>Support Tickets <div class="ms-auto badge-pill badge bg-secondary">0</div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="bg-gray-200 p-3 border-bottom">
                                    <h6 class="m-0">Account settings</h6>
                                </div>
                                <ul class="list-unstyled mb-0 theme-link">
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="account-profile.html">
                                            <i class="fi-user me-2"></i>Profile info
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="account-address.html">
                                            <i class="bi bi-map-fill me-2"></i>Addresses
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="account-payment.html">
                                            <i class="bi bi-credit-card me-2"></i>Payment
                                        </a>
                                    </li>
                                    <li class="border-bottom mb-0">
                                        <a class="nav-link-style d-flex align-items-center p-3" href="#">
                                            <i class="bi bi-box-arrow-left me-2"></i>Logout
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Profile Menu -->
                        <!-- Content -->
                        <div class="col-lg-8 col-xxl-9">
                            <div class="table-responsive fs-md mb-4">
                                <table class="table table-bordered table-hover mb-0">
                                    <thead class="text-700 bg-gray-200">
                                        <tr>
                                            <th class="fw-600">Order #</th>
                                            <th class="fw-600">Date Purchased</th>
                                            <th class="fw-600">Status</th>
                                            <th class="fw-600 text-end">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-info m-0">In Progress</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-danger m-0">Cancel</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-success m-0">Delivered</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-warning m-0">On Hold</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-info m-0">In Progress</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-info m-0">In Progress</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-info m-0">In Progress</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-danger m-0">Cancel</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-success m-0">Delivered</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        <tr>
                                            <td class="p-3"><a class="text-mode" href="#order-details" data-bs-toggle="modal">#8560</a></td>
                                            <td class="p-3">May 21, 2021</td>
                                            <td class="p-3"><span class="badge bg-warning m-0">On Hold</span></td>
                                            <td class="p-3 text-end">$150</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <div class="d-none d-lg-block">Showing: 1 - 12 of 17</div>
                                <div class="ms-lg-auto">
                                    <ul class="pagination m-0">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                                <span aria-hidden="true">»</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Content -->
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