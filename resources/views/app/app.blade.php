<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Furbar - Furniture eCommerce Bootstrap 5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.png') }}">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="{asset('assets/css/vendor/plugins.min.css')">
    <link rel="stylesheet" href="{asset('assets/css/style.min.css') ">
     -->
</head>

<body>

<!-- Header Start  -->
<div class="header-area header-sticky d-none d-lg-block">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <!-- Header Logo End -->
            </div>

            <x-main-menu />

            <div class="col-lg-3">
                <!-- Header Meta Start -->
                <div class="header-meta">

                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"> <i class="pe-7s-search"></i> </a>

                        <div class="dropdown-menu dropdown-search">
                            <!-- Header Search Start -->
                            <div class="header-search">
                                <form action="#">
                                    <input type="text" placeholder="Enter your search key ... ">
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <!-- Header Search End -->
                        </div>
                    </div>

                    @if(auth()->user())
                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                            <ul class="dropdown-menu dropdown-profile">
                                <li><a href="my-account.html">My Account</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Sign In</a></li>
                            </ul>
                        </div>
                        <a class="action" href="wishlist.html"><i class="pe-7s-like"></i></a>

                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">3</span>
                            </a>

                            <div class="dropdown-menu dropdown-cart">
                                <div class="cart-content" id="cart-content">
                                    <ul>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/cart/cart-1.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">High quality vase bottle</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/cart/cart-2.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">Living & Bedroom Chair</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="assets/images/cart/cart-3.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">Herman Arm Grey Chair</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                    </ul>
                                </div>

                                <div class="cart-price">
                                    <div class="cart-subtotals">
                                        <div class="price-inline">
                                            <span class="label">Subtotal</span>
                                            <span class="value">$42.70</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Shipping</span>
                                            <span class="value">$7.00</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Taxes</span>
                                            <span class="value">$0.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div class="price-inline">
                                            <span class="label">Total</span>
                                            <span class="value">$49.70</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <a href="checkout.html" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <!-- Header Meta End -->
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Header Mobile Start -->
<div class="header-mobile section d-lg-none">

    <!-- Header Mobile top Start -->
    <div class="header-mobile-top header-sticky">
        <div class="container">
            <div class="row row-cols-3 gx-2 align-items-center">
                <div class="col">

                    <!-- Header Toggle Start -->
                    <div class="header-toggle">
                        <button class="mobile-menu-open">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->

                </div>
                <div class="col">

                    <!-- Header Logo Start -->
                    <div class="header-logo text-center">
                        <a href="{{ route('home') }}"><img src="assets/images/logo.png" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->

                </div>
                <div class="col">

                    @if(auth()->user())
                        <!-- Header Action Start -->
                        <div class="header-meta">
                            <div class="dropdown">
                                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                                <ul class="dropdown-menu dropdown-profile">
                                    <li><a href="my-account.html">My Account</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Sign In</a></li>
                                </ul>
                            </div>
                            <a class="action" href="cart.html">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">3</span>
                            </a>
                        </div>
                        <!-- Header Action End -->
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Header Mobile top End -->

    <!-- Header Mobile Bottom End -->
    <div class="header-mobile-bottom">
        <div class="container">

            <!-- Header Search Start -->
            <div class="header-search">
                <form action="#">
                    <input type="text" placeholder="Enter your search key ... ">
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- Header Search End -->

        </div>
    </div>
    <!-- Header Mobile Bottom End -->

</div>
<!-- Header Mobile End -->

<!-- off Canvas Start -->
<div class="off-canvas-box">

    @if(auth()->user())
        <!-- Canvas Action Start -->
        <div class="canvas-action">
            <a class="action" href="compare.html"><i class="icon-sliders"></i> Compare <span class="action-num">(3)</span></a>
            <a class="action" href="wishlist.html"><i class="icon-heart"></i> Wishlist <span class="action-num">(3)</span></a>
        </div>
        <!-- Canvas Action end -->
    @endif

    <!-- Canvas Close bar Start -->
    <div class="canvas-close-bar">
        <span>Menu</span>
        <a class="menu-close" href="javascript:;"><i class="pe-7s-angle-left"></i></a>
    </div>
    <!-- Canvas Close bar End -->

    <!-- Canvas Menu Start -->
    <div class="canvas-menu">
        <nav>
            <ul class="nav-menu">
                <li>
                    <a href="#">Home</a>
                    <ul class="sub-menu">
                        <li><a href="index.html">Home 01</a></li>
                        <li><a href="index-2.html">Home 02</a></li>
                    </ul>
                </li>
                <li><a href="about.html">About</a></li>
                <li>
                    <a href="#">Shop</a>
                    <ul class="mega-sub-menu">
                        <li>
                            <a href="#" class="menu-title">Shop Grid</a>

                            <ul class="menu-item">
                                <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                                <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                                <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                                <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-title">Shop List</a>

                            <ul class="menu-item">
                                <li><a href="shop-list.html">Shop List</a></li>
                                <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-title">Shop Single</a>

                            <ul class="menu-item">
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                                <li><a href="product-details-gallery.html">Product Details Gallery</a></li>
                                <li><a href="product-details-group.html">Product Details Group</a></li>
                                <li><a href="product-details-sticky.html">Product Details Sticky</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="menu-title">Page</a>

                            <ul class="menu-item">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                            </ul>
                        </li>

                        <li class="manu-banner">
                            <a href="#"><img src="assets/images/banner-menu-01.jpg" alt=""></a>
                        </li>
                        <li class="manu-banner">
                            <a href="#"><img src="assets/images/banner-menu-02.jpg" alt=""></a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Pages </a>
                    <ul class="sub-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li><a href="compare.html">Compare</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="empty-cart.html">Empty Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="my-account.html">My Account</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="#">Blog Grid</a>
                            <ul class="sub-menu">
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog List</a>
                            <ul class="sub-menu">
                                <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Blog Details</a>
                            <ul class="sub-menu">
                                <li><a href="blog-details-left-sidebar.html">Blog details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog details Right Sidebar</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </nav>
    </div>
    <!-- Canvas Menu End -->

</div>
<!-- off Canvas End -->

<div class="menu-overlay"></div>

@yield('content')

<!-- Footer Section Start -->
<div class="section footer-section">

    <!-- Footer Top Start -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-md-4">

                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/images/logo.png" alt="Logo"></a>
                    </div>
                    <!-- Footer Logo End -->

                </div>
                <div class="col-xl-5 col-md-8">

                    <!-- Footer Contact & Payment End -->
                    <div class="footer-contact-payment">
                        <div class="footer-contact">
                            <div class="contact-icon">
                                <img src="assets/images/icon/icon-4.png" alt="Icon">
                            </div>

                            <div class="contact-content">
                                <h6 class="title">Call Us:</h6>
                                <p>00 123 456 789</p>
                            </div>
                        </div>
                        <div class="footer-payment">
                            <img src="assets/images/payment.png" alt="Payment">
                        </div>
                    </div>
                    <!-- Footer Contact & Payment End -->

                </div>
                <div class="col-xl-5 ">

                    <!-- Footer Subscribe End -->
                    <div class="footer-subscribe">
                        <span class="title">Subscribe Now :</span>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Your Mail">
                                <button><i class="pe-7s-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Subscribe End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End -->

    <!-- Footer Widget Section Start -->
    <div class="footer-widget-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">

                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Customer Service</h4>

                        <ul class="footer-link">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns-Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->

                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Information</h4>

                        <ul class="footer-link">
                            <li><a href="#">About Furbar</a></li>
                            <li><a href="#">How to Shop</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Log in</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">My Account</h4>

                        <ul class="footer-link">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-2 col-md-5 col-sm-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Our Stores</h4>

                        <ul class="footer-link">
                            <li><a href="#">New aYork</a></li>
                            <li><a href="#">London SF</a></li>
                            <li><a href="#">Cockfosters BP</a></li>
                            <li><a href="#">Los Angeles</a></li>
                            <li><a href="#">Chicago</a></li>
                        </ul>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-7">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">About Us</h4>

                        <div class="widget-about">
                            <p>Lorem ipsum dolor sit amet consect adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Ut enim ad minim</p>
                        </div>
                        <div class="widget-social">
                            <ul>
                                <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                                <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Widget End -->

    <!-- Footer Copyright End -->
    <div class="copyright">
        <div class="container">
            <div class="copyright-text">
                <p>&copy; 2021 <span> Furbar </span> Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://hasthemes.com/" target="_blank">HasThemes</a></p>
            </div>
        </div>
    </div>
    <!-- Footer Copyright End -->

</div>
<!-- Footer Section End -->

<!--Back To Start-->
<a href="#" class="back-to-top">
    <i class="pe-7s-angle-up"></i>
</a>
<!--Back To End-->

<!-- Quick View Start -->
<div class="modal fade" id="quickView">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">

                <div class="row">
                    <div class="col-lg-6">

                        <!-- Quick View Images Start -->
                        <div class="quick-view-images">

                            <!-- Quick Gallery Images Start -->
                            <div class="quick-gallery-images">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-1.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-2.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-3.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-4.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="assets/images/product-details/product-details-5.jpg" alt="Product Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick Gallery Images End -->

                            <!-- Quick Gallery Thumbs Start -->
                            <div class="quick-gallery-thumbs">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-1.jpg" alt="Product Thumbnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-2.jpg" alt="Product Thumbnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-3.jpg" alt="Product Thumbnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-4.jpg" alt="Product Thumbnail">
                                        </div>
                                        <div class="swiper-slide">
                                            <img src="assets/images/product-details/product-details-5.jpg" alt="Product Thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            </div>
                            <!-- Quick Gallery Thumbs End -->

                        </div>
                        <!-- Quick View Images End -->

                    </div>
                    <div class="col-lg-6">

                        <!-- Quick View Description Start -->
                        <div class="quick-view-description">
                            <h4 class="product-name">Your Products Name Here.</h4>
                            <div class="price">
                                <span class="sale-price">$240.00</span>
                                <span class="old-price">$290.00</span>
                            </div>
                            <div class="review-wrapper">
                                <div class="review-star">
                                    <div class="star" style="width: 80%;"></div>
                                </div>
                                <p>( 1 Customer Review )</p>
                            </div>
                            <div class="product-color">
                                <span class="lable">Color:</span>
                                <ul>
                                    <li>
                                        <input type="radio" name="colors" id="color1">
                                        <label for="color1"><span class="color-blue"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color2">
                                        <label for="color2"><span class="color-gray"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color3">
                                        <label for="color3"><span class="color-dark-blue"></span></label>
                                    </li>
                                    <li>
                                        <input type="radio" name="colors" id="color4">
                                        <label for="color4"><span class="color-gray-dark"></span></label>
                                    </li>
                                </ul>
                            </div>

                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod temporf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tyu nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>

                            <div class="product-meta">
                                <div class="product-quantity d-inline-flex">
                                    <button type="button" class="sub">-</i></button>
                                    <input type="text" value="1" />
                                    <button type="button" class="add">+</button>
                                </div>
                                <div class="meta-action">
                                    <button class="btn btn-dark btn-hover-primary">Add To Cart</button>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                </div>
                            </div>

                            <div class="product-info">
                                <div class="single-info">
                                    <span class="lable">SKU:</span>
                                    <span class="value">Ch-256xl</span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Categories:</span>
                                    <span class="value"><a href="#">Office,</a> <a href="#">Home</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">tag:</span>
                                    <span class="value"><a href="#">Furniture</a></span>
                                </div>
                                <div class="single-info">
                                    <span class="lable">Share:</span>
                                    <ul class="social">
                                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Quick View Description End -->

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Quick View End -->





<!-- JS
============================================ -->

<!-- Modernizer & jQuery JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap JS -->
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ajax-contact.js') }}"></script>
<script src="{{ asset('assets/js/plugins/appear.js') }}"></script>
<script src="{{ asset('assets/js/plugins/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>

<!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
<!-- <script src="{ asset('assets/js/plugins.min.js') }"></script> -->


<!-- Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
