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
            <!-- Page Title -->
            <div class="bg-no-repeat bg-cover bg-right-center position-relative" style="background-image: url(../../assets/img/fashion2/bg-banner-1.jpg);">
                <div class="position-absolute top-0 end-0 start-0 bottom-0 opacity-3 bg-dark"></div>
                <!-- Header Height Bar -->
                <div class="header-height-bar border-bottom opacity-3"></div>
                <div class="container py-6 position-relative">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-2">
                            <h1 class="m-0 h4 text-center text-lg-start text-white">Your cart</h1>
                        </div>
                        <div class="col-lg-6 my-2">
                            <ol class="breadcrumb breadcrumb-light m-0 small justify-content-center justify-content-lg-end">
                                <li class="breadcrumb-item"><a class="text-nowrap" href="#">Home</a></li>
                                <li class="breadcrumb-item text-nowrap active" aria-current="page">Your cart</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Title -->
            <!-- Section -->
            <section class="section">
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-md-7">
                            <!-- Form -->
                            <form>
                                <!-- Heading -->
                                <h6 class="mb-4 h3">Billing Details</h6>
                                <!-- Billing details -->
                                <div class="row mb-5 gy-4">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="checkout_Billing_First_Name">First Name *</label>
                                        <input class="form-control" id="checkout_Billing_First_Name" type="text" placeholder="First Name" required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="checkout_BillingLast_Name">Last Name *</label>
                                        <input class="form-control" id="checkout_BillingLast_Name" type="text" placeholder="Last Name" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkout_Billing_Email">Email *</label>
                                        <input class="form-control" id="checkout_Billing_Email" type="email" placeholder="Email" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkout_Billing_Company">Company name *</label>
                                        <input class="form-control" id="checkout_Billing_Company" type="text" placeholder="Company name (optional)">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkout_Billing_Country">Country *</label>
                                        <input class="form-control" id="checkout_Billing_Country" type="text" placeholder="Country" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkout_Billing_Address">Address Line 1 *</label>
                                        <input class="form-control" id="checkout_Billing_Address" type="text" placeholder="Address Line 1" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkout_Billing_Address_Two">Address Line 2</label>
                                        <input class="form-control" id="checkout_Billing_Address_Two" type="text" placeholder="Address Line 2 (optional)">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="checkout_Billing_Town">Town / City *</label>
                                        <input class="form-control" id="checkout_Billing_Town" type="text" placeholder="Town / City" required="">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="checkout_Billing_ZIP">ZIP / Postcode *</label>
                                        <input class="form-control" id="checkout_Billing_ZIP" type="text" placeholder="ZIP / Postcode" required="">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label" for="checkoutBillingPhone">Mobile Phone *</label>
                                        <input class="form-control" id="checkoutBillingPhone" type="tel" placeholder="Mobile Phone" required="">
                                    </div>
                                </div>
                                <!-- Heading -->
                                <h6 class="mb-4 h3">Shipping Details</h6>
                                <!-- Shipping details -->
                                <div class="table-responsive mb-6">
                                    <table class="table table-bordered table-hover mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="shipping" type="radio" id="checkoutShippingStandard">
                                                        <label class="form-check-label" for="checkoutShippingStandard">
                                                            Standard Shipping
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Delivery in 5 - 7 working days</td>
                                                <td>$8.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="shipping" type="radio" id="checkoutShippingExpress">
                                                        <label class="form-check-label" for="checkoutShippingExpress">
                                                            Express Shipping
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Delivery in 3 - 5 working days</td>
                                                <td>$12.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="shipping" type="radio" id="checkoutShippingShort">
                                                        <label class="form-check-label" for="checkoutShippingShort">
                                                            1 - 2 Shipping
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Delivery in 1 - 2 working days</td>
                                                <td>$18.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input class="form-check-input" name="shipping" type="radio" id="checkoutShippingFree">
                                                        <label class="form-check-label" for="checkoutShippingFree">
                                                            Free Shipping
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>Living won't the He one every subdue
                                                    meat replenish face was you morning
                                                    firmament darkness.</td>
                                                <td>$0.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Address -->
                                <div class="mb-5">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" id="checkout_Shipping_Address" type="checkbox">
                                        <label class="form-check-label" data-bs-toggle="collapse" data-bs-target="#checkout_Shipping_AddressCollapse" for="checkout_Shipping_Address">
                                            Ship to a different address?
                                        </label>
                                    </div>
                                    <!-- Collapse -->
                                    <div class="collapse" id="checkout_Shipping_AddressCollapse">
                                        <div class="row gy-4 pt-3">
                                            <div class="col-12">
                                                <label class="form-label" for="checkout_Shipping_Address_Country">Country *</label>
                                                <input class="form-control" id="checkout_Shipping_Address_Country" type="text" placeholder="Country">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="checkout_Shipping_AddressLine_One">Address Line 1 *</label>
                                                <input class="form-control" id="checkout_Shipping_AddressLine_One" type="text" placeholder="Address Line 1">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label" for="checkout_Shipping_AddressLine_Two">Address Line 2</label>
                                                <input class="form-control" id="checkout_Shipping_AddressLine_Two" type="text" placeholder="Address Line 2 (optional)">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="checkout_Shipping_Address_Town">Town / City *</label>
                                                <input class="form-control" id="checkout_Shipping_Address_Town" type="text" placeholder="Town / City">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="checkout_Shipping_Address_ZIP">ZIP / Postcode *</label>
                                                <input class="form-control" id="checkout_Shipping_Address_ZIP" type="text" placeholder="ZIP / Postcode">
                                            </div>
                                            <div class="col-12">
                                                <!-- Button -->
                                                <button class="btn btn-outline-mode" type="submit">
                                                    Save Address
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Heading -->
                                <h6 class="mb-4 h3">Payment</h6>
                                <!-- List group -->
                                <div class="list-group mb-5 accordion" id="payment-methods">
                                    <div class="list-group-item py-3">
                                        <!-- Radio -->
                                        <div class="form-check mb-0">
                                            <!-- Input -->
                                            <input class="form-check-input collapsed" id="checkout_Payment_Card" name="payment" type="radio" data-bs-toggle="collapse" data-bs-action="show" data-bs-target="#checkout_Payment_CardCollapse">
                                            <!-- Label -->
                                            <label class="form-check-label fw-500 stretched-link" for="checkout_Payment_Card">
                                                Credit Card <img class="ml-2" src="../../assets/img/cart/cards.svg" alt="...">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="list-group-item py-0 collapse" id="checkout_Payment_CardCollapse" data-bs-parent="#payment-methods">
                                        <!-- Form -->
                                        <div class="row py-4 g-3">
                                            <div class="col-12">
                                                <input class="form-control" id="checkout_Payment_CardNumber" type="text" placeholder="Card Number *" required="">
                                            </div>
                                            <div class="col-12">
                                                <input class="form-control" id="checkout_Payment_CardName" type="text" placeholder="Name on Card *" required="">
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <select class="form-select" id="checkoutPaymentMonth">
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <select class="form-select" id="checkout_Payment_CardYear">
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                    <option>2019</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="input-group input-group-merge">
                                                    <input class="form-control" id="checkout_Payment_CardCVV" type="text" placeholder="CVV *" required="">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text" data-bs-toggle="tooltip" data-bs-placement="top" title="The CVV Number on your credit card or debit card is a 3 digit number on VISA, MasterCard and Discover branded credit and debit cards.">
                                                            <i class="bi bi-info-circle"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-group-item py-3">
                                        <!-- Radio -->
                                        <div class="form-check mb-0">
                                            <!-- Input -->
                                            <input class="form-check-input collapsed" id="checkout_Payment_Paypal" name="payment" type="radio" data-bs-toggle="collapse" data-bs-action="hide" data-bs-target="#checkout_Payment_PayPalCollapse">
                                            <!-- Label -->
                                            <label class="form-check-label stretched-link" for="checkout_Payment_Paypal">
                                                <img src="../../assets/img/cart/paypal.svg" alt="...">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="list-group-item py-0 collapse" id="checkout_Payment_PayPalCollapse" data-bs-parent="#payment-methods">
                                        <div class="p-3">
                                            <p class="mb-0 text-body">By clicking on the button below you will be redirected to your PayPal account to complete the payment.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Notes -->
                                <label class="form-label" for="checkout_Billing_First_Name">Order Notes (optional)</label>
                                <textarea class="form-control mb-4 mb-md-0 font-size-xs" rows="5" placeholder="Order Notes"></textarea>
                            </form>
                        </div>
                        <div class="col-md-5 col-lg-4 offset-lg-1 sticky-lg-top sticky-lg-top-header">
                            <ul class="list-group mb-6">
                                <li class="list-group-item p-3">
                                    <div class="row g-2">
                                        <div class="col-3 col-md-2">
                                            <!-- Image -->
                                            <a href="#">
                                                <img src="../../assets/img/fashion2/product-1.jpg" alt="..." class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <!-- Title -->
                                            <div class="fw-600">
                                                <a class="text-mode" href="#">Fine-knit sweater</a>
                                            </div>
                                            <!--Footer -->
                                            <div class="d-flex align-items-center">
                                                <span class="text-body">$40.00</span>
                                                <!-- Remove -->
                                                <a class="ms-auto text-danger fs-sm" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item p-3">
                                    <div class="row g-2">
                                        <div class="col-3 col-md-2">
                                            <!-- Image -->
                                            <a href="#">
                                                <img src="../../assets/img/fashion2/product-2.jpg" alt="..." class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <!-- Title -->
                                            <div class="fw-600">
                                                <a class="text-mode" href="#">Fine-knit sweater</a>
                                            </div>
                                            <!--Footer -->
                                            <div class="d-flex align-items-center">
                                                <span class="text-body">$40.00</span>
                                                <!-- Remove -->
                                                <a class="ms-auto text-danger fs-sm" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item p-3">
                                    <div class="row g-2">
                                        <div class="col-3 col-md-2">
                                            <!-- Image -->
                                            <a href="#">
                                                <img src="../../assets/img/fashion2/product-3.jpg" alt="..." class="img-fluid">
                                            </a>
                                        </div>
                                        <div class="col">
                                            <!-- Title -->
                                            <div class="fw-600">
                                                <a class="text-mode" href="#">Fine-knit sweater</a>
                                            </div>
                                            <!--Footer -->
                                            <div class="d-flex align-items-center">
                                                <span class="text-body">$40.00</span>
                                                <!-- Remove -->
                                                <a class="ms-auto text-danger fs-sm" href="#!">
                                                    <i class="bi bi-x"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="card bg-gray-100">
                                <div class="card-body py-0 px-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex bg-transparent px-0 py-3">
                                            <span>Subtotal</span> <span class="ms-auto">$89.00</span>
                                        </li>
                                        <li class="list-group-item d-flex bg-transparent px-0 py-3">
                                            <span>Tax</span> <span class="ms-auto">$00.00</span>
                                        </li>
                                        <li class="list-group-item d-flex bg-transparent px-0 py-3">
                                            <span>Shipping</span> <span class="ms-auto">$10.00</span>
                                        </li>
                                        <li class="list-group-item d-flex bg-transparent px-0 py-3 fs-lg fw-600">
                                            <span>Total</span> <span class="ms-auto">$99.00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pt-4">
                                <button type="submit" class="btn btn-primary w-100">Place Order</button>
                                <p class="m-0 pt-3">By placing your order you agree to our <a href="#">Terms &amp; Conditions</a>, <a href="#">privacy and returns</a> policies. You also consent to some of your data being stored by Shopy, which may be used to make future shopping experiences better for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Section -->
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