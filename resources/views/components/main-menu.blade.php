<div class="col-lg-6">
    <div class="header-menu">
        <ul class="nav-menu">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li>
                <a href="{{ route('shop_list') }}">Shop</a>
                <ul class="mega-sub-menu">
                    <li>
                        <a href="#" class="menu-title">Top sells</a>

                        <ul class="menu-item">
                            <li><a href="shop-grid-3-column.html">Shop Grid 3 Column</a></li>
                            <li><a href="shop-grid-4-column.html">Shop Grid 4 Column</a></li>
                            <li><a href="shop-grid-left-sidebar.html">Shop Grid Left Sidebar</a></li>
                            <li><a href="shop-grid-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-title">Top sale products</a>

                        <ul class="menu-item">
                            <li><a href="shop-list.html">Shop List</a></li>
                            <li><a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                            <li><a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-title">New products</a>

                        <ul class="menu-item">
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="product-details-affiliate.html">Product Details Affiliate</a></li>
                            <li><a href="product-details-gallery.html">Product Details Gallery</a></li>
                            <li><a href="product-details-group.html">Product Details Group</a></li>
                            <li><a href="product-details-sticky.html">Product Details Sticky</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-title">Account</a>

                        <ul class="menu-item">
                            @if(auth()->user())
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="#">My Account</a></li>
                            @else
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @endif
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
                <a href="{{ route('blog_list') }}">Blog</a>
            </li>
            <li><a href="contact.html">Contact</a></li>
        </ul>

    </div>
</div>
