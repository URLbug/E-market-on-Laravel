<!-- Banner Section Start -->
<div class="section section-padding-02 mt-n6">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <!-- Single Banner Start -->
                    <div class="single-banner">
                        <img
                            src="{{asset($product->picture) }}"
                            alt="Banner"
                            style="
                            width: 370px;
                            height: 245px;
                            "
                        >

                        <div class="banner-content">
                            <h3 class="title"><a href="shop-grid-4-column.html">{{$product->name}} <br> Sideboard</a></h3>
                            <span class="discount">30% Off</span>
                            <a class="btn btn-primary btn-hover-dark" href="shop-grid-4-column.html">Shop Now</a>
                        </div>
                    </div>
                    <!-- Single Banner End -->
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Banner Section End -->
