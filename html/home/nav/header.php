<body>
    <!-- Skippy & Prload -->
    <!-- skippy -->
<a id="skippy" class="skippy visually-hidden-focusable overflow-hidden" href="#content">
    <div class="container">
        <span class="u-skiplink-text">Skip to main content</span>
    </div>
</a>
<!-- End skippy -->
<!-- Preload -->
<div id="loading" class="loading-preloader">
    <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<!-- End Preload -->
    <!-- Edn Skippy & Prload -->
    <!-- Size Chart  -->
    <!-- Ask Form -->
<div class="modal-askform-view modal fade" id="px_ask_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ask about product</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Email address</label>
                                <input type="email" class="form-control" placeholder="E-mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Subject</label>
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label" for="exampleInputEmail1">Your Message</label>
                                <textarea class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Ask Form -->

<!-- Header Search -->
<div class="px-search-full collapse bg-body p-3 position-fixed w-100 top-0" id="search-open">
    <div class="container position-relative">
        <div class="row vh-100 justify-content-center">
            <div class="col-lg-8 pt-12">
                <h2 class="h1 mb-4">
                    <span class="d-block">Search</span>
                </h2>
                <form class="position-relative w-100">
                    <div class="mb-3 input-group">
                        <!-- Search input -->
                        <input class="form-control shadow-none" type="text" name="search" placeholder="What are you looking for?">
                        <!-- Search button -->
                        <button type="button" class="btn btn-primary shadow-none">
                            <i class="fi-search"></i>
                        </button>
                    </div>
                </form>
                <div class="row pt-3">
                    <div class="col-6 col-lg-4">
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Search Results List
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Search Results Grid
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> About
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Services
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Invoice
                        </a>
                    </div>
                    <div class="col-6 col-lg-4">
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Profile
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> User Contacts
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Reviews
                        </a>
                        <a class="nav-link px-0 py-1" href="#">
                            <i class="bi-chevron-right me-1"></i> Settings
                        </a>
                    </div>                    
                </div>
            </div>
            <!-- Search button close START -->
            <a class="search-close" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="true">
                <i class="bi bi-x p-0 lh-1"></i>
            </a>
            <!-- Search button close END -->
        </div>
    </div>
</div>
<!-- End Header Search -->


<!-- Header Side Search -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="header_search_popup" aria-labelledby="header_search_popupLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="header_search_popupLabel">Search</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <form class="position-relative w-100">
            <div class="input-group">
                <!-- Search input -->
                <input class="form-control shadow-none" type="text" name="search" placeholder="What are you looking for?">
                <!-- Search button -->
                <button type="button" class="btn btn-primary shadow-none">
                    <i class="fi-search"></i>
                </button>
            </div>
        </form>
        <div class="pt-3">
            <div class="nav tag-cloud">
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Design</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Development</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Travel</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Web Design</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Marketing</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Research</a>
                <a class="rounded-pill px-3 small font-w-500 py-1 bg-gray-200 me-1 mb-1 text-mode" href="#">Managment</a>
            </div>
        </div>
    </div>
</div>
<!-- End Header Side Search -->

<!-- Login Popup  -->
<div class="modal fade" id="topbarlogin">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <div class="modal-title p-3">
                    <h5 class="m-0 text-white">Sign in to your account!</h5>
                    <p class="m-0 text-white">Nice to see you! Please log in with your account.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="w-100 p-3">
                    <!-- Form START -->
                    <form>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="*********">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-dark">Login</button>
                            </div>
                            <div class="col-sm-8 text-sm-end">
                                <span class="text-muted">Don't have an account? <a href="sign-up.html">Signup here</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Login Popup  -->

<!-- Mini Cart  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="modalMiniCart" aria-labelledby="modalMiniCartLabel">
    <div class="offcanvas-header border-bottom">
        <h6 class="offcanvas-title" id="modalMiniCartLabel">Your Cart (2)</h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="list-unstyled m-0 p-0">
            <li class="py-2">
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- Image -->
                        <a href="#">
                            <img class="img-fluid border" src="../../assets/img/fashion/product-x-1.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-8">
                        <!-- Title -->
                        <p class="mb-2">
                            <a class="text-mode fw-500" href="#">Cotton floral print Dress</a>
                            <span class="m-0 text-muted w-100 d-block">$40.00</span>
                        </p>
                        <!--Footer -->
                        <div class="d-flex align-items-center">
                            <!-- Select -->
                            <select class="form-select form-select-sm w-auto">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                            </select>
                            <!-- Remove -->
                            <a class="small text-mode ms-auto" href="#!">
                                <i class="bi bi-x"></i> Remove
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="py-2">
                <div class="row align-items-center">
                    <div class="col-4">
                        <!-- Image -->
                        <a href="#">
                            <img class="img-fluid border" src="../../assets/img/fashion/product-x-1.jpg" alt="...">
                        </a>
                    </div>
                    <div class="col-8">
                        <!-- Title -->
                        <p class="mb-2">
                            <a class="text-mode fw-500" href="#">Cotton floral print Dress</a>
                            <span class="m-0 text-muted w-100 d-block">$40.00</span>
                        </p>
                        <!--Footer -->
                        <div class="d-flex align-items-center">
                            <!-- Select -->
                            <select class="form-select form-select-sm w-auto">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                            </select>
                            <!-- Remove -->
                            <a class="small text-mode ms-auto" href="#!">
                                <i class="bi bi-x"></i> Remove
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="offcanvas-footer border-top p-3">
        <div class="row g-0 py-2">
            <div class="col-8">
                <span class="text-mode">Subtotal</span>
            </div>
            <div class="col-4 text-end">
                <span class="ml-auto">$89.00</span>
            </div>
        </div>
        <div class="row g-0 py-2">
            <div class="col-8">
                <span class="text-mode">Taxes:</span>
            </div>
            <div class="col-4 text-end">
                <span class="ml-auto">$89.00</span>
            </div>
        </div>
        <div class="row g-0 pt-2 mt-2 border-top fw-bold text-mode">
            <div class="col-8">
                <span class="text-mode">Subtotal</span>
            </div>
            <div class="col-4 text-end">
                <span class="ml-auto">$89.00</span>
            </div>
        </div>
        <div class="pt-4">
            <a class="btn btn-block btn-mode w-100 mb-3" href="#">Continue to Checkout</a>
            <a class="btn btn-block btn-outline-mode w-100" href="#">View Cart</a>
        </div>
    </div>
</div>
<!-- End Mini Cart  -->

<!-- Quick View  -->
<div class="modal-quick-view modal fade" id="px-quick-view" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <button class="btn-close position-absolute end-0 top-0 me-2 mt-2 z-index-1" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body p-3">
                <div class="row">
                    <!-- Product Gallery -->
                    <div class="col-lg-6 lightbox-gallery product-gallery">
                        <img src="../../assets/img/fashion/product-x-1.jpg" class="img-fluid" title="" alt="">
                    </div>
                    <!-- End Product Gallery -->
                    <!-- Product Details -->
                    <div class="col-lg-6">
                        <div class="product-detail pt-4">
                            <div class="products-brand pb-2">
                                <span>Brand name</span>
                            </div>
                            <div class="products-title mb-2">
                                <h1 class="h4">Product Title Here</h1>
                            </div>
                            <div class="rating-star text small pb-4">
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star-fill active"></i>
                                <i class="bi bi-star"></i>
                                <small>(4 Reviews )</small>
                            </div>
                            <div class="product-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                            </div>
                            <div class="product-attribute">
                                <label class="fs-6 text-mode pb-2 fw-500">Size</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="xs2" checked="">
                                        <label class="radio-text-label" for="xs2">XS</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="s2">
                                        <label class="radio-text-label" for="s2">S</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="m2">
                                        <label class="radio-text-label" for="m2">M</label>
                                    </div>
                                    <div class="form-check radio-text form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="size3" id="l2">
                                        <label class="radio-text-label" for="l2">L</label>
                                    </div>
                                </div>
                                <label class="fs-6 text-mode pb-2 fw-500">Color</label>
                                <div class="nav-thumbs nav mb-3">
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color1" checked="">
                                        <label class="radio-color-label" for="color1">
                                            <span style="background-color: #126532;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color2">
                                        <label class="radio-color-label" for="color2">
                                            <span style="background-color: #ff9922;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color3">
                                        <label class="radio-color-label" for="color3">
                                            <span style="background-color: #326598;"></span>
                                        </label>
                                    </div>
                                    <div class="form-check radio-color large form-check-inline me-2">
                                        <input class="form-check-input" type="radio" name="color1" id="color4">
                                        <label class="radio-color-label" for="color4">
                                            <span style="background-color: #126578;"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="product-price fs-3 fw-500 mb-2">
                                <del class="text-muted fs-6">$38.<small>50</small></del>
                                <span class="text-primary">$28.<small>50</small></span>
                            </div>
                            <div class="product-detail-actions d-flex flex-wrap pt-3">
                                <div class="cart-qty me-3 mb-3">
                                    <div class="dec qty-btn">-</div>
                                    <input class="cart-qty-input form-control" type="text" name="qtybutton" value="1">
                                    <div class="inc qty-btn">+</div>
                                </div>
                                <div class="cart-button mb-3 d-flex">
                                    <button class="btn btn-mode me-3">
                                        <i class="fi-shopping-cart"></i> Add to cart
                                    </button>
                                    <button class="btn btn-outline-primary me-3">
                                        <i class="fi-heart"></i>
                                    </button>
                                    <button class="btn btn-outline-primary">
                                        <i class="fi-repeat"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Product Details -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Quick View  -->


<!-- Sipping Popup  -->
<div class="modal-shipping-view modal fade" id="px_shipping_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Shipping Information</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="mb-3">
                    <li>Comodous in tempor ullamcorper miaculis</li>
                    <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                    <li>Divamus sit amet purus justo.</li>
                    <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                </ul>
                <h4 class="pt-4">Privacy Policy</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul class="mb-5">
                    <li>Comodous in tempor ullamcorper miaculis</li>
                    <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                    <li>Divamus sit amet purus justo.</li>
                    <li>Proin molestie egestas orci ac suscipit risus posuere loremous</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Sipping Popup  -->


<!-- Size Chart  -->
<div class="modal-size-chart modal fade" id="px_size_chart_modal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Size Chart</h4>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table mb-0">
                    <thead>
                        <tr class="text-mode">
                            <th class="border-0 bg-body">US Sizes</th>
                            <th class="border-0 bg-body">Euro Sizes</th>
                            <th class="border-0 bg-body">UK Sizes</th>
                            <th class="border-0 bg-body">Inches</th>
                            <th class="border-0 bg-body">CM</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="">6</td>
                            <td>39</td>
                            <td>5.5</td>
                            <td>9.25"</td>
                            <td>23.5</td>
                        </tr>
                        <tr>
                            <td class="">6.5</td>
                            <td>39</td>
                            <td>6</td>
                            <td>9.5"</td>
                            <td>24.1</td>
                        </tr>
                        <tr>
                            <td class="">7</td>
                            <td>40</td>
                            <td>6.5</td>
                            <td>9.625"</td>
                            <td>24.4</td>
                        </tr>
                        <tr>
                            <td class="">7.5</td>
                            <td>40-41</td>
                            <td>7</td>
                            <td>9.75"</td>
                            <td>24.8</td>
                        </tr>
                        <tr>
                            <td class="">8</td>
                            <td>41</td>
                            <td>7.5</td>
                            <td>9.9375"</td>
                            <td>25.4</td>
                        </tr>
                        <tr>
                            <td class="">8.5</td>
                            <td>41-42</td>
                            <td>8</td>
                            <td>10.125"</td>
                            <td>25.7</td>
                        </tr>
                        <tr>
                            <td class="">9</td>
                            <td>42</td>
                            <td>8.5</td>
                            <td>10.25"</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td class="">9.5</td>
                            <td>42-43</td>
                            <td>9</td>
                            <td>10.4375"</td>
                            <td>26.7</td>
                        </tr>
                        <tr>
                            <td class="">10</td>
                            <td>43</td>
                            <td>9.5</td>
                            <td>10.5625"</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td class="">10.5</td>
                            <td>43-44</td>
                            <td>10</td>
                            <td>10.75"</td>
                            <td>27.3</td>
                        </tr>
                        <tr>
                            <td class="">11</td>
                            <td>44</td>
                            <td>10.5</td>
                            <td>10.9375"</td>
                            <td>27.9</td>
                        </tr>
                        <tr>
                            <td class="">11.5</td>
                            <td>44-45</td>
                            <td>11</td>
                            <td>11.125"</td>
                            <td>28.3</td>
                        </tr>
                        <tr>
                            <td class="">12</td>
                            <td>45</td>
                            <td>11.5</td>
                            <td>11.25"</td>
                            <td>28.6</td>
                        </tr>
                        <tr>
                            <td class="">13</td>
                            <td>46</td>
                            <td>12.5</td>
                            <td>11.5625"</td>
                            <td>29.4</td>
                        </tr>
                        <tr>
                            <td class="">14</td>
                            <td>47</td>
                            <td>13.5</td>
                            <td>11.875"</td>
                            <td>30.2</td>
                        </tr>
                        <tr>
                            <td class="">15</td>
                            <td>48</td>
                            <td>14.5</td>
                            <td>12.1875"</td>
                            <td>31</td>
                        </tr>
                        <tr>
                            <td class="">16</td>
                            <td>49</td>
                            <td>15.5</td>
                            <td>12.5"</td>
                            <td>31.8</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End Size Chart  -->
    <!-- End Size Chart  -->
    <!-- 
    ========================
        Wrapper 
    ========================
    -->
    <div class="wrapper">
        <!-- heder height -->
        <div class="header-height-bar"></div>
        <!-- Header -->
        <header class="header-main bg-mode-re header-dark header-option-3">
    <div class="header-top pt-3 pb-2 py-md-2 py-lg-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-3 text-center text-md-start">
                    <!-- Logo -->
                    <a class="navbar-brand" href="../index.html">
                        <h1 style="font-size: 2rem; color: black; font-family: 'Times New Roman', Times, serif;">FONICE</h1>
                        <h1 style="font-size: 2rem; color: white; font-family: 'Times New Roman', Times, serif;">FONICE</h1>
                    </a>
                    <!-- Logo -->
                    <hr class="d-md-none mt-3 mb-2">
                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <!-- Search input -->
                            <input class="form-control form-control-sm shadow-none px-3" type="text" name="search" placeholder="What are you looking for?">
                            <!-- Search button -->
                            <button type="button" class="btn btn-mode btn-sm shadow-none px-3">
                                <i class="fi-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="nav flex-nowrap align-items-center justify-content-md-end header-right w-100 w-md-auto position-relative">
                        <div class="nav-item h-switch dropdown">
                            <button class="theme-switch nav-link bg-transparent" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static">
                                <span class="bi my-1 theme-icon-active">
                                    <i class="bi-circle-half"></i>
                                </span>
                                <span class="d-none">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="bd-theme">
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="light">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-sun-fill"></i>
                                        </span>
                                        Light
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item" data-bs-theme-value="dark">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-moon-stars-fill"></i>
                                        </span>
                                        Dark
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item active" data-bs-theme-value="auto">
                                        <span class="bi me-2 opacity-50 theme-icon">
                                            <i class="bi-circle-half"></i>
                                        </span>
                                        Auto
                                        <span class="bi ms-auto d-none">
                                            <i class="bi-check2"></i>
                                        </span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <!-- Nav Search-->
                        <div class="nav-item dropdown position-static d-lg-none">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fi-search"> </i>
                            </a>
                            <div class="dropdown-menu w-100 w-lg-auto">
                                <form>
                                    <div class="input-group p-3">
                                        <!-- Search input -->
                                        <input class="form-control shadow-none" type="text" name="search" placeholder="What are you looking for?">
                                        <!-- Search button -->
                                        <button type="button" class="btn btn-primary shadow-none">
                                            <i class="fi-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Acount -->
                        <div class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static" aria-haspopup="true" aria-expanded="false">
                                <i class="fi-user"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-hover right shadow">
                                <a class="dropdown-item" href="../account/login.php">Login</a>
                                <a class="dropdown-item" href="../account/sign-up.php">Register</a>
                                <a class="dropdown-item" href="../account/wishlist.php">Wishlist</a>
                            </div>
                        </div>
                        <!-- Wishlist -->
                        <div class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fi-heart"> </i>
                            </a>
                        </div>
                        <!-- Cart -->
                        <div class="nav-item me-md-3 me-lg-0">
                            <a class="nav-link" data-bs-toggle="offcanvas" href="#modalMiniCart" role="button" aria-controls="modalMiniCart">
                                <span class="" data-cart-items="8">
                                    <i class="fi-shopping-cart"></i>
                                </span>
                            </a>
                        </div>
                        <!-- Mobile Toggle -->
                        <button class="navbar-toggler ms-auto ms-md-0 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="px-navbar-toggler-icon"></span>
                        </button>
                        <!-- End Mobile Toggle -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
        <div class="container">
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Latest</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-6 col-md-3">
                                        <ul class="list-unstyled link-list-style-04 m-0">
                                            <li>
                                                <a href="#">WHAT’S NEW</a>
                                            </li>
                                            <li>
                                                <a href="#">BEST SELLING</a>
                                            </li>
                                            <li>
                                                <a href="#">TOP RATED</a>
                                            </li>
                                            <li>
                                                <a href="#">MOST POPULAR</a>
                                            </li>
                                            <li>
                                                <a href="#">EDITOR’S PICKS</a>
                                            </li>
                                            <li>
                                                <a href="#">ON SALE</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-3 col-xl-2">
                                        <h6 class="sm-title-05 mb-3 fw-500">Women's</h6>
                                        <ul class="list-unstyled link-list-style-05 m-0">
                                            <li><a href="#">Fusion Wear</a></li>
                                            <li><a href="#">Dress Materials</a></li>
                                            <li><a href="#">Dupattas & Shawls </a></li>
                                            <li><a href="#">Ethnic Dresses </a></li>
                                            <li><a href="#">Jackets & Waistcoats</a></li>
                                            <li><a href="#">Kurtas & Suits</a></li>
                                            <li><a href="#">Sarees</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-3 col-xl-2">
                                        <h6 class="sm-title-05 mb-3 fw-500">Living Room</h6>
                                        <ul class="list-unstyled link-list-style-05 m-0">
                                            <li><a href="#">Sofa </a></li>
                                            <li><a href="#">Love Seat</a></li>
                                            <li><a href="#">Settee Sofa</a></li>
                                            <li><a href="#">Sleeper Sofas</a></li>
                                            <li><a href="#">Tuxedo</a></li>
                                            <li><a href="#">Chair & Ottomans</a></li>
                                            <li><a href="#">Wing Chair</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-md-3 col-xl-5 d-flex flex-row">
                                        <div class="min-h-200px bg-center bg-cover d-flex align-items-center justify-content-center h-100 w-100" style="background-image: url(../../assets/img/fashion/blog-home-2.jpg);">
                                            <div class="text-center px-4 py-3">
                                                <h6 class="text-uppercase text-white mb-0 letter-spacing-4 fw-300">NEW IN</h6>
                                                <h3 class="fw-600 h4 text-white">2022 Collection</h3>
                                                <div class="pt-2">
                                                    <a class="btn btn-white btn-sm" href="#">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Collection</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-lg-6">
                                        <div class="row gy-4">
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="sm-title-04"><a class="text-reset" href="#">Harum Quidem</a></h6>
                                                <ul class="list-unstyled link-list-style-03">
                                                    <li>
                                                        <a href="#">All Harum Quidem</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Cosmopolis</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Suitó</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Milancélos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Blazéro</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Glamos</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Metropolis</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex flex-column">
                                        <div class="rounded h-100 bg-cover bg-no-repeat d-flex align-items-center justify-content-center py-8 p-xl-5" style="background-image: url(../../assets/img/fashion/blog-home-3.jpg);">
                                            <div class="w-100 text-center">
                                                <h6 class="text-uppercase fw-300 text-white mb-2">NEW IN</h6>
                                                <h3 class="fw-400 h3 text-white">New Exclusive<br />2022 Collection</h3>
                                                <div class="pt-2">
                                                    <a class="btn btn-white btn-sm" href="#">Shop Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown dropdown-full nav-item">
                        <a href="#" class="nav-link">Categories</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <div class="dropdown-menu dropdown-mega-menu py-0">
                            <div class="container p-3 p-lg-4">
                                <div class="row gy-4">
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-12.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Living Room</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Sofa </a></li>
                                            <li><a href="#">Love Seat</a></li>
                                            <li><a href="#">Settee Sofa</a></li>
                                            <li><a href="#">Sleeper Sofas</a></li>
                                            <li><a href="#">Tuxedo</a></li>
                                            <li><a href="#">Chair & Ottomans</a></li>
                                            <li><a href="#">Wing Chair</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-13.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Women</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Fusion Wear</a></li>
                                            <li><a href="#">Dress Materials</a></li>
                                            <li><a href="#">Dupattas & Shawls </a></li>
                                            <li><a href="#">Ethnic Dresses </a></li>
                                            <li><a href="#">Jackets & Waistcoats</a></li>
                                            <li><a href="#">Kurtas & Suits</a></li>
                                            <li><a href="#">Sarees</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-14.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Western Wear</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Blazers & Waistcoats</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Jackets & Coats </a></li>
                                            <li><a href="#">Jeans & Jeggings </a></li>
                                            <li><a href="#">Jumpsuits</a></li>
                                            <li><a href="#">Shorts & Skirts </a></li>
                                            <li><a href="#">Shrugs </a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-15.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Footwear</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Boots</a></li>
                                            <li><a href="#">Casual Shoes</a></li>
                                            <li><a href="#">Heels</a></li>
                                            <li><a href="#">Sports Shoes</a></li>
                                            <li><a href="#">Sports Wear</a></li>
                                            <li><a href="#">Gym Wear</a></li>
                                            <li><a href="#">Vintage</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/shop-banner-16.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Kids</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Boys Clothing </a></li>
                                            <li><a href="#">Clothing Sets </a></li>
                                            <li><a href="#">Jacket & Sweater</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sleepwear</a></li>
                                            <li><a href="#">T-Shirts</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-6 col-md-4 col-lg-2">
                                        <div class="hover-scale position-relative mb-3">
                                            <div class="hover-scale-in">
                                                <a href="#">
                                                    <img src="../../assets/img/fashion3/home-banner-6.jpg" title="" alt="">
                                                </a>
                                            </div>
                                            <div class="pt-2 text-center position-absolute bottom-0 start-0 mb-3">
                                                <h5 class="m-0 h6 bg-white px-3 py-2"><a class="text-reset link-effect" href="#">Accessories</a></h5>
                                            </div>
                                        </div>
                                        <ul class="list-unstyled link-list-style-02">
                                            <li><a href="#">Handbags </a></li>
                                            <li><a href="#">Hand Purse</a></li>
                                            <li><a href="#">Laptop Bag</a></li>
                                            <li><a href="#">Leather Purse</a></li>
                                            <li><a href="#">Saddle Cross Bag</a></li>
                                            <li><a href="#">Shoulder Bag</a></li>
                                            <li><a href="#">Vintage</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="#" class="nav-link">Pages</a>
                        <label class="px-dropdown-toggle mob-menu"></label>
                        <ul class="dropdown-menu left shadow-lg">
                            <li><a class="dropdown-item" href="../pages/about.php">About</a></li>
                            <li><a class="dropdown-item" href="../pages/faq.php">FAQ's</a></li>
                            <li><a class="dropdown-item" href="../pages/policy.php">Policy</a></li>
                            <li><a class="dropdown-item" href="../pages/support.php">Support</a></li>
                            <li><a class="dropdown-item" href="../pages/contact-us.php">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->
        </div>
    </nav>
</header>