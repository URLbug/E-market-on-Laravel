@extends('app.app')

@section('content')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
        <div class="container">

            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Product Details</h2>

                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->

        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Details Section Start -->
    <div class="section section-padding-02 mt-n10">
        <div class="container">

            <div class="row">
                <div class="col-lg-6">

                    <!-- Product Details Images Start -->
                    <div class="product-details-images">

                        <!-- Details Gallery Images Start -->
                        <div class="product-gallery-images">
                            <div class="row g-3 row-cols-2">
                                <div class="col">
                                    <div class="single-gallery-image">
                                        <img src="assets/images/product-details/product-details-1.jpg" alt="Product Details">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="single-gallery-image">
                                        <img src="assets/images/product-details/product-details-2.jpg" alt="Product Details">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="single-gallery-image">
                                        <img src="assets/images/product-details/product-details-3.jpg" alt="Product Details">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="single-gallery-image">
                                        <img src="assets/images/product-details/product-details-4.jpg" alt="Product Details">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Details Gallery Images End -->

                    </div>
                    <!-- Product Details Images End -->

                </div>
                <div class="col-lg-6">

                    <!-- Product Details Description Start -->
                    <div class="product-details-description">
                        <h4 class="product-name">High quality vase bottle.</h4>
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
                    <!-- Product Details Description End -->

                </div>
            </div>

        </div>
    </div>
    <!-- Product Details Section End -->

    <!-- Product Details tab Section Start -->
    <div class="section section-padding-02">
        <div class="container">

            <!-- Product Details Tabs Start -->
            <div class="product-details-tabs">
                <ul class="nav justify-content-center">
                    <li><button data-bs-toggle="tab" data-bs-target="#information">Information</button></li>
                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#description">Description</button></li>
                    <li><button data-bs-toggle="tab" data-bs-target="#reviews">Reviews (03)</button></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="information">
                        <!-- Information Content Start -->
                        <div class="information-content">
                            <h4 class="title">Information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci.</p>

                            <h4 class="title">Fabric & care</h4>
                            <ul>
                                <li>Faux suede fabric</li>
                                <li>Gold tone metal hoop handles.</li>
                                <li>RI branding</li>
                                <li>Snake print trim interior</li>
                                <li>Adjustable cross body strap</li>
                                <li>Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                            </ul>

                            <h4 class="title">Size</h4>
                            <p>one size</p>
                        </div>
                        <!-- Information Content End -->
                    </div>
                    <div class="tab-pane fade show active" id="description">
                        <!-- Description Content Start -->
                        <div class="description-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimlo ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officiarty deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantiu totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, </p>
                        </div>
                        <!-- Description Content End -->
                    </div>
                    <div class="tab-pane fade" id="reviews">
                        <!-- Reviews Content Start -->
                        <div class="reviews-content">

                            <!-- Review Comment Start  -->
                            <div class="reviews-comment">
                                <!-- Single Comment Start  -->
                                <div class="single-reviews">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-1.png" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-rating">
                                            <h6 class="name">Rosie Silva</h6>
                                            <div class="review-star">
                                                <div class="star" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="date">11/20/2021</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                    </div>
                                </div>
                                <!-- Single Comment End  -->
                                <!-- Single Comment Start  -->
                                <div class="single-reviews">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-2.png" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-rating">
                                            <h6 class="name">Aidyn Cody</h6>
                                            <div class="review-star">
                                                <div class="star" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="date">11/20/2021</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                    </div>
                                </div>
                                <!-- Single Comment End  -->
                                <!-- Single Comment Start  -->
                                <div class="single-reviews">
                                    <div class="comment-author">
                                        <img src="assets/images/author/author-3.png" alt="">
                                    </div>
                                    <div class="comment-content">
                                        <div class="author-name-rating">
                                            <h6 class="name">Rosie Silva</h6>
                                            <div class="review-star">
                                                <div class="star" style="width: 80%;"></div>
                                            </div>
                                        </div>
                                        <span class="date">11/20/2021</span>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse deleniti itaque velit explicabo at eum incidunt vel reprehenderit maxime eos facere ut pariatur voluptas aut, porro quia molestias sequi cupiditate!</p>
                                    </div>
                                </div>
                                <!-- Single Comment End  -->
                            </div>
                            <!-- Review Comment End  -->

                            <!-- Review Form Start  -->
                            <div class="reviews-form">
                                <h3 class="reviews-title">Add a review </h3>

                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="email" placeholder="john.smith@example.com">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="review-rating">
                                                <label class="title">Rating:</label>
                                                <ul id="rating" class="rating">
                                                    <li class="star" title='Poor' data-value='1'><i class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='2'><i class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='3'><i class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='4'><i class="fa fa-star-o"></i></li>
                                                    <li class="star" title='Poor' data-value='5'><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <textarea placeholder="Write your comments here"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <button class="btn btn-dark btn-hover-primary">Submit Review</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Review Form End  -->

                        </div>
                        <!-- Reviews Content End -->
                    </div>
                </div>
            </div>
            <!-- Product Details Tabs End -->

        </div>
    </div>
    <!-- Product Details tab Section End -->

    <!-- Sale Product Section Start -->
    <div class="section section-padding mt-n1">
        <div class="container">
            <div class="">
                <!-- Product Wrapper Start -->
                <div class="product-wrapper product-active-02">

                    <!-- Product Top Wrapper Start -->
                    <div class="product-top-wrapper mt-n1">

                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="title"># Related Products</h2>
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
@endsection
