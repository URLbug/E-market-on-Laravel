@extends('app.app')

@section('content')


    <!-- Slider Section Start -->
    <div class="section slider-section">

        <div class="slider-shape"></div>

        <div class="container">
            <div class="slider-active">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <!-- Single Slider Start  -->
                        <div class="single-slider swiper-slide animation-style-01">

                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <h2 class="title">New Stylish <br> Decore Furniture</h2>
                                <p>Unique Furniture Style Design for Your Family</p>
                                <a href="product-details.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                            </div>
                            <!-- Slider Content End -->

                            <!-- Slider images Start -->
                            <div class="slider-images">
                                <img src="assets/images/slider/slider-item-1.png" alt="Slider">
                            </div>
                            <!-- Slider images End -->

                        </div>
                        <!-- Single Slider End  -->

                        <!-- Single Slider Start  -->
                        <div class="single-slider swiper-slide animation-style-01">

                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <h2 class="title">New Stylish <br> Decore Furniture</h2>
                                <p>Unique Furniture Style Design for Your Family</p>
                                <a href="product-details.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                            </div>
                            <!-- Slider Content End -->

                            <!-- Slider images Start -->
                            <div class="slider-images">
                                <img src="assets/images/slider/slider-item-2.png" alt="Slider">
                            </div>
                            <!-- Slider images End -->

                        </div>
                        <!-- Single Slider End  -->

                        <!-- Single Slider Start  -->
                        <div class="single-slider swiper-slide animation-style-01">

                            <!-- Slider Content Start -->
                            <div class="slider-content">
                                <h2 class="title">New Stylish <br> Decore Furniture</h2>
                                <p>Unique Furniture Style Design for Your Family</p>
                                <a href="product-details.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                            </div>
                            <!-- Slider Content End -->

                            <!-- Slider images Start -->
                            <div class="slider-images">
                                <img src="assets/images/slider/slider-item-3.png" alt="Slider">
                            </div>
                            <!-- Slider images End -->

                        </div>
                        <!-- Single Slider End  -->

                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <x-seal-banner-single/>

    <!-- New Product Section Start -->
    <div class="section section-padding mt-n10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <!-- Single Banner Start -->
                    <div class="single-banner-02 mt-10">
                        <img src="assets/images/banner/banner-04.jpg" alt="Banner">

                        <div class="banner-content">
                            <h3 class="title"><a href="shop-grid-left-sidebar.html">All New Furniture</a></h3>
                            <span class="discount">40% Off</span>
                            <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-9 ">
                    <!-- Product Wrapper Start -->
                    <div class="product-wrapper mt-9 product-active">

                        <!-- Product Top Wrapper Start -->
                        <div class="product-top-wrapper">

                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title"># New Products</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Product Menu Start -->
                            <div class="product-menu">
                                <ul class="nav">
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab1">Just Now</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab2">New Arrival</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab3">Top Seals</button></li>
                                </ul>
                            </div>
                            <!-- Product Menu End -->

                            <!-- Swiper Arrows End -->
                            <div class="swiper-arrows">
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            </div>
                            <!-- Swiper Arrows End -->

                        </div>
                        <!-- Product Top Wrapper End -->

                        <!-- Product Tabs Content Start -->
                        <div class="product-tabs-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab1">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$40.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html"> Pendant Chandelier Light</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Living & Bedroom Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Herman Arm Grey Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-08.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Tabs Content End -->

                    </div>
                    <!-- Product Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Section End -->

    <!-- Call To Action Section Start -->
    <div class="section call-to-action" style="background-image: url(assets/images/bg-1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <!-- Call To Action Content Start -->
                    <div class="call-to-action-content text-center">
                        <h1 class="title">Welcome To Store</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="shop-grid-left-sidebar.html" class="btn btn-primary btn-hover-dark">purchase now</a>
                    </div>
                    <!-- Call To Action Content End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Call To Action Section End -->

    <!-- Best Sellers Section Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <!-- Single Banner Start -->
                    <div class="single-banner-02 mt-10">
                        <img src="assets/images/banner/banner-04.jpg" alt="Banner">

                        <div class="banner-content">
                            <h3 class="title"><a href="shop-grid-left-sidebar.html">All New Furniture</a></h3>
                            <span class="discount">40% Off</span>
                            <a class="btn btn-primary btn-hover-dark" href="shop-grid-left-sidebar.html">Shop Now</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
                <div class="col-lg-9">
                    <!-- Product Wrapper Start -->
                    <div class="product-wrapper mt-9 product-active">

                        <!-- Product Top Wrapper Start -->
                        <div class="product-top-wrapper">

                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title"># Best Sellers</h2>
                            </div>
                            <!-- Section Title End -->

                            <!-- Product Menu Start -->
                            <div class="product-menu">
                                <ul class="nav">
                                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab4">All Time</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab5">This Year</button></li>
                                    <li><button data-bs-toggle="tab" data-bs-target="#tab6">This Month</button></li>
                                </ul>
                            </div>
                            <!-- Product Menu End -->

                            <!-- Swiper Arrows End -->
                            <div class="swiper-arrows">
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                            </div>
                            <!-- Swiper Arrows End -->

                        </div>
                        <!-- Product Top Wrapper End -->

                        <!-- Product Tabs Content Start -->
                        <div class="product-tabs-content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab4">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-05.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Living & Bedroom Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-06.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Herman Arm Grey Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$40.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-02.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html"> Pendant Chandelier Light</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab6">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-07.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-08.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                            <div class="swiper-slide">
                                                <!-- Single Product Start -->
                                                <div class="single-product">
                                                    <a href="product-details.html"><img src="assets/images/product/product-09.jpg" alt="product"></a>
                                                    <div class="product-content">
                                                        <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                        <div class="price">
                                                            <span class="sale-price">$240.00</span>
                                                        </div>
                                                    </div>
                                                    <ul class="product-meta">
                                                        <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                        <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                    </ul>
                                                </div>
                                                <!-- Single Product End -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Product Tabs Content End -->

                    </div>
                    <!-- Product Wrapper End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Best Sellers Section End -->

    <!-- Benefit Section Start -->
    <div class="section section-padding mt-n6">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">

                    <!-- Single Benefit Start -->
                    <div class="single-benefit">
                        <img src="assets/images/icon/icon-1.png" alt="Icon">
                        <h3 class="title">Free Shipping</h3>
                        <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                    </div>
                    <!-- Single Benefit End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Benefit Start -->
                    <div class="single-benefit">
                        <img src="assets/images/icon/icon-2.png" alt="Icon">
                        <h3 class="title">Safe Payment</h3>
                        <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                    </div>
                    <!-- Single Benefit End -->

                </div>
                <div class="col-lg-4 col-md-6">

                    <!-- Single Benefit Start -->
                    <div class="single-benefit">
                        <img src="assets/images/icon/icon-3.png" alt="Icon">
                        <h3 class="title">Online Support</h3>
                        <p>Get 10% cash back, free shipping, free returns, and more at 1000+ top retailers!</p>
                    </div>
                    <!-- Single Benefit End -->

                </div>
            </div>
        </div>
    </div>
    <!-- Benefit Section End -->

    <!-- Sale Product Section Start -->
    <div class="section section-padding bg-color-01">
        <div class="container">
            <div class="">
                <!-- Product Wrapper Start -->
                <div class="product-wrapper product-active-02">

                    <!-- Product Top Wrapper Start -->
                    <div class="product-top-wrapper mt-n1">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title"># Sale Products</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Product Menu Start -->
                        <div class="product-menu">
                            <ul class="nav">
                                <li><button class="active" data-bs-toggle="tab" data-bs-target="#tab7">All Time</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab8">This Year</button></li>
                                <li><button data-bs-toggle="tab" data-bs-target="#tab9">This Month</button></li>
                            </ul>
                        </div>
                        <!-- Product Menu End -->

                        <!-- Swiper Arrows End -->
                        <div class="swiper-arrows">
                            <!-- Add Arrows -->
                            <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                            <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                        </div>
                        <!-- Swiper Arrows End -->

                    </div>
                    <!-- Product Top Wrapper End -->

                    <!-- Product Tabs Content Start -->
                    <div class="product-tabs-content">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tab7">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-07.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Wooden decorations</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-08.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Herman Seater Sofa</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-09.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Reece Seater Sofa</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-10.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Round Swivel Chair</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab8">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-02.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Simple minimal Chair</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Pendant Chandelier Light</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab9">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-04.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">High quality vase bottle</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-03.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Pendant Chandelier Light</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-01.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Elona bedside grey table</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                        <div class="swiper-slide">
                                            <!-- Single Product Start -->
                                            <div class="single-product">
                                                <a href="#"><img src="assets/images/product/product-10.jpg" alt="product"></a>
                                                <div class="product-content">
                                                    <h4 class="title"><a href="product-details.html">Round Swivel Chair</a></h4>
                                                    <div class="price">
                                                        <span class="sale-price">$240.00</span>
                                                    </div>
                                                </div>
                                                <ul class="product-meta">
                                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" href="#"><i class="pe-7s-search"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-shopbag"></i></a></li>
                                                    <li><a class="action" href="#"><i class="pe-7s-like"></i></a></li>
                                                </ul>
                                            </div>
                                            <!-- Single Product End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Tabs Content End -->

                </div>
                <!-- Product Wrapper End -->
            </div>
        </div>
    </div>
    <!-- Sale Product Section End -->

    <!-- Product Banner Section Start -->
    <div class="section">
        <div class="products-banner products-banner-active">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <!-- Single Products Banner Start -->
                        <div class="single-products-banner">
                            <img src="assets/images/products-banner/products-01.jpg" alt="Products">

                            <div class="products-banner-content">
                                <div class="banner-content-wrapper">
                                    <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                    <span class="products-count">15 Products</span>
                                    <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Products Banner End -->

                    </div>
                    <div class="swiper-slide">

                        <!-- Single Products Banner Start -->
                        <div class="single-products-banner">
                            <img src="assets/images/products-banner/products-02.jpg" alt="Products">

                            <div class="products-banner-content">
                                <div class="banner-content-wrapper">
                                    <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                    <span class="products-count">15 Products</span>
                                    <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Products Banner End -->

                    </div>
                    <div class="swiper-slide">

                        <!-- Single Products Banner Start -->
                        <div class="single-products-banner">
                            <img src="assets/images/products-banner/products-03.jpg" alt="Products">

                            <div class="products-banner-content">
                                <div class="banner-content-wrapper">
                                    <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                    <span class="products-count">15 Products</span>
                                    <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Products Banner End -->

                    </div>
                    <div class="swiper-slide">

                        <!-- Single Products Banner Start -->
                        <div class="single-products-banner">
                            <img src="assets/images/products-banner/products-04.jpg" alt="Products">

                            <div class="products-banner-content">
                                <div class="banner-content-wrapper">
                                    <h4 class="title"><a href="product-details.html">Drawing Furniture</a></h4>
                                    <span class="products-count">15 Products</span>
                                    <a href="product-details.html" class="arrow"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Products Banner End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Banner Section End -->

    <!-- Blog Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Blog Wrapper End -->
            <div class="blog-wrapper blog-active">

                <!-- Blog Top Wrapper Start -->
                <div class="blog-top-wrapper mt-n1">

                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title"># Latest Blog</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Swiper Arrows End -->
                    <div class="swiper-arrows">
                        <!-- Add Arrows -->
                        <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                        <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                    </div>
                    <!-- Swiper Arrows End -->

                </div>
                <!-- Blog Top Wrapper End -->

                <!-- Blog Items Wrapper End -->
                <div class="blog-items-wrapper">
                    <div class="swiper-container">
                        <div class="swiper-wrapper"">
                        <div class=" swiper-slide">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-01.jpg" alt="Blog"></a>

                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                        <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details-left-sidebar.html">Unique products that will impress your home.</a></h4>
                                    <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read More</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-02.jpg" alt="Blog"></a>

                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                        <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details-left-sidebar.html">Interior designer Nancy, the witch of the unique space.</a></h4>
                                    <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read More</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                        <div class="swiper-slide">

                            <!-- Single Blog Start -->
                            <div class="single-blog">
                                <a href="blog-details-left-sidebar.html"><img src="assets/images/blog/blog-03.jpg" alt="Blog"></a>

                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><i class="pe-7s-user"></i> <span> BY:<a href="#">ADMIN</a></span> </li>
                                        <li><i class="pe-7s-date"></i> <span>27 FEB 2021</span></li>
                                    </ul>
                                    <h4 class="title"><a href="blog-details-left-sidebar.html">Decorate your home with the most modern furnishings.</a></h4>
                                    <a href="blog-details-left-sidebar.html" class="btn btn-dark btn-hover-primary">Read More</a>
                                </div>
                            </div>
                            <!-- Single Blog End -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Items Wrapper End -->

        </div>
        <!-- Blog Wrapper End -->

    </div>
    </div>
    <!-- Blog Section End -->
@endsection
