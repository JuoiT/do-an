<div class="menu">
                <ul>
                    <li><a href="{{route('home')}}">Home<img class="leave {{(Request::url() === 'http://127.0.0.1:8000/organic/home') ? 'leave_1' : ''}}" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a>
                    </li>
                    <li><a href="">About<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a></li>
                    <li><a href="{{route('product')}}">Shop<img class="leave {{(Request::url() === 'http://127.0.0.1:8000/organic/product') ? 'leave_1' : ''}}" src="{{url('assets-frontend')}}/images/leave.png"
                                alt=""></a>

                    </li>
                    <li><a href="">Organic Fruits<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a>
                        <ul class="menu-child">
                            <li><a href="">Seasonal Fruits</a></li>
                            <li><a href="">Dry Fruits</a></li>
                            <li><a href="">Regular Fruits</a></li>
                            <li><a href="">Exotics Fruits</a></li>
                            <li><a href="">Imported Fruits</a></li>
                        </ul>
                    </li>
                    <li><a href="">Pages<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a>
                        <!-- <ul class="menu-child">
                            <li><a href="{{url('assets-frontend')}}/html/product_listing.html">Product Listing</a></li>
                            <li><a href="{{url('assets-frontend')}}/html/product-detail.html">Product Detail</a></li>
                            <li><a href="">Faq</a></li>
                            <li><a href="{{url('assets-frontend')}}/html/my_account.html">My account</a></li>
                            <li><a href="{{url('assets-frontend')}}/html/shopping_cart.html">Cart</a></li>
                            <li><a href="{{url('assets-frontend')}}/html/whishlist.html">Whishlist</a></li>
                            <li><a href="{{url('assets-frontend')}}/html/check_out.html">Checkout</a></li>
                            <li><a href="">404</a></li>
                        </ul> -->
                    </li>
                    <li><a href="">Gallery<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a></li>
                    <li><a href="">Blog<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a></li>
                    <li><a href="">Contact<img class="leave" src="{{url('assets-frontend')}}/images/leave.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <div class="menu-mobile">
            <div class="menu-mobile-main" id="navigation">
                <div class="remove"><i class="far fa-times"></i></div>
                <div class="menu-logo"><a href=""><img src="{{url('assets-frontend')}}/images/logo.png" alt="logo nav mobile"></a></div>

                <ul class="list-menu">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li class="megamenu-li"><a href="{{route('product')}}">Shop</a>
                        <!-- <i id="show-menu-shop" class="far fa-chevron-down"></i>
                        <div class="menu-lv2">
                            <ul class="mega-menu-shop">
                                <li><a href="#">Banana</a></li>
                                <li><a href="#">Tender Coconut</a></li>
                                <li><a href="#">Mango</a></li>
                                <li><a href="#">Orange</a></li>
                                <li><a href="#">Grapes</a></li>
                                <li><a href="#">Avocado</a></li>
                                <li><a href="#">Mangosteen</a></li>
                                <li><a href="#">Kiwi Green</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Passion Fruit</a></li>
                                <li><a href="#">Oranges</a></li>
                                <li><a href="#">Lemons</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Passion Fruit</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li class="droapdown">
                        <a href="#">Organic Fruits</a>
                        <i id="show-menu-organic" class="far fa-chevron-down"></i>
                        <div class="menu-lv2">
                            <ul class="mega-menu-organic">
                                <li><a href="#">Seasonal Fruits</a></li>
                                <li><a href="#">Dry Fruits</a></li>
                                <li><a href="#">Regular Fruits</a></li>
                                <li><a href="#">Exotics Fruits</a></li>
                                <li><a href="#">Imported Fruits</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="droapdown">
                        <a href="#">Pages</a>
                        <!-- <i id="show-menu-page" class="far fa-chevron-down"></i>
                        <div class="menu-lv2">
                            <ul class="mega-menu-page">
                                <li><a href="{{url('assets-frontend')}}/html/product_listing.html">Product Listing</a></li>
                                <li><a href="{{url('assets-frontend')}}/html/product-detail.html">Product Detail</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="{{url('assets-frontend')}}/html/my_account.html">My account</a></li>
                                <li><a href="{{url('assets-frontend')}}/html/shopping_cart.html">Cart</a></li>
                                <li><a href="{{url('assets-frontend')}}/html/whishlist.html">Whishlist</a></li>
                                <li><a href="{{url('assets-frontend')}}/html/check_out.html">Checkout</a></li>
                                <li><a href="#">404</a></li>
                            </ul>
                        </div> -->
                    </li>
                    <li><a href="#">Gallery</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="nav-overlay remove"></div>
    </nav>
