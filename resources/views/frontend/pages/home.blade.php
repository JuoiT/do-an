@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/home.css">

<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<div class="banner">
    <div class="banner-img">
        <div id="banner" class="owl-banner owl-carousel owl-theme owl-banner">
            <div class="item">
                <img src="{{url('assets-frontend')}}/images/slider-banner.jpg" alt="">
                <div class="banner_content">
                    <div class="title">
                        <p>Natural Health Care Ingredientsa</p>
                    </div>
                    <div class="orgnanic">
                        <p>100% <span>ORGANIC</span></p>
                    </div>
                    <div class="question">
                        <p>Are they safer? More nutritious?</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{url('assets-frontend')}}/images/slider-banner.jpg" alt="">
                <div class="banner_content">
                    <div class="title">
                        <p>Natural Health Care Ingredientsa</p>
                    </div>
                    <div class="orgnanic">
                        <p>100% <span>ORGANIC</span></p>
                    </div>
                    <div class="question">
                        <p>Are they safer? More nutritious?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End Banner-->

<!-- Catagories -->
<div class="categories">
    <div class="catagories_items">
        <div class="items">
            <div class="row">
                <div class="product-item">
                    <div class="item">
                        <img src="{{url('assets-frontend')}}/images/fresh-fruits-img.jpg" alt="">
                        <p class="name-product">Fresh <span>Fruits</span></p>
                        <a class="title">View Collections</a>
                    </div><!-- End item-->
                </div><!-- End product-item-->

                <div class="product-item">
                    <div class="item">
                        <img src="{{url('assets-frontend')}}/images/fresh-vegetables-img.jpg" alt="">
                        <p class="name-product">Fresh <span>Vegetables</span></p>
                        <a class="title">View Collections</a>
                    </div><!-- End item-->
                </div><!-- End product-item-->

                <div class="product-item">
                    <div class="item">
                        <img src="{{url('assets-frontend')}}/images/organic-foods-img.jpg" alt="">
                        <p class="name-product">Organic <span>Foods</span></p>
                        <a class="title">View Collections</a>
                    </div><!-- End item-->
                </div><!-- End product-item-->
            </div><!-- End product-row-->
        </div><!-- Items -->
    </div><!-- End catagories_items -->
</div><!-- End Categories-->

<div class="arrivars">
    <div class="banner-product">
        <img src="{{url('assets-frontend')}}/images/banner-product.png" alt="">
    </div>
    <div class="owl-product owl-carousel owl-theme">
        @foreach($new_product as $value)
        <div class="item">
            <div class="item-bg">
                <div class="icon-bg">
                    <a href="{{route('whishlist')}}"><i class="fal fa-heart"></i></a>
                    <a href="{{route('detail')}}"><i class="fal fa-eye"></i></a>
                    <a href="{{route('cart')}}"><i class="far fa-shopping-basket"></i></a>
                </div>
            </div>
            <div class="item-product">
                <div class="new">new</div>
                <!-- <div class="sale">sale</div> -->
                <img src="{{url('product-images')}}/{{$value->image}}" alt="">
                <p class="name-product">{{$value->name}}</p>
                @if($value->sale_price == 0)
                <p class="price"><span>{{number_format($value->price)}} đ</span></p>
                @else
                <p class="price"><span>{{number_format($value->sale_price)}} đ</span><span class="del">{{number_format($value->price)}} đ</span></p>
                @endif
                <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY NOW</span></a>
            </div>
        </div>
        @endforeach
    </div>
</div><!-- End Arrivars-->
<div class="content">
    <div class="logo">
        <img src="{{url('assets-frontend')}}/images/logo_2.png" alt="">
    </div>
    <div class="menu-product">
        <p>
            <span><a href="">all</a></span>
            @foreach($category as $value)
            /<span><a href="">{{$value->name}}</a></span>
            @endforeach
        </p>
    </div>
    <div class="product-sale">
        <div class="poduct-item">
            <div class="item-child items-left">
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-1.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>

                </div>
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-2.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>

                </div>
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-3.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>
                </div>
            </div><!-- End Item-left-->

            <div class="items-importan">
                <div class="item">
                    <div class="cover">
                        <img src="{{url('assets-frontend')}}/images/slider-bg-1.png" alt="">
                        <div class="product">
                            <div class="img">
                                <img src="{{url('assets-frontend')}}/images/deal-img-7.png" alt="">
                            </div>
                            <div class="importan-product">
                                <p class="title">Kensie Fruit's Wool Cocoon CoatKensie Fruits</p>
                                <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                        class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i>
                                </p>
                                <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                                <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                        class="far fa-shopping-basket"></i><span>BUY
                                        NOW</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- End Items-importan-->

            <div class="item-child items-right">
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-4.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>

                </div>
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-5.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>

                </div>
                <div class="item">
                    <div class="img">
                        <img src="{{url('assets-frontend')}}/images/deal-img-6.jpg" alt="">
                    </div>
                    <div class="content-product">
                        <p class="title">Jessica Simpson Fruit's</p>
                        <p class="stars"><i class="far fa-star"></i><i class="far fa-star"></i><i
                                class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></p>
                        <p class="price"><span>$25.00</span><span class="del">$12.00</span></p>
                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html" class="buy-now"><i
                                class="far fa-shopping-basket"></i><span>BUY NOW</span></a>
                    </div>
                </div>
            </div><!-- End Item-right-->
        </div><!-- End Product-item-->
        <div class="product-baner">
            <div class="baner-left">
                <div class="left-child">
                    <div class="image">
                        <img src="" alt="">
                    </div>
                    <div class="title">
                        <p>fresh <span>Fruits</span></p>
                    </div>
                    <div class="shop-now">
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
            <div class="baner-right">
                <div class="right-child">
                    <p class="title">Free Shipping</p>
                    <p class="oder-over">With order over $500</p>
                    <a href="#" class="shop-now">SHOP NOW</a>
                </div>
            </div>
        </div>
    </div><!-- End Product-sale-->
    <div class="organic-news">
        <div class="logo">
            <img src="{{url('assets-frontend')}}/images/logo-organic-new.png" alt="">
        </div>
        <div class="product-items">
            <div class="item-row">
                <!-- Item 1 -->
                <div class="item">
                    <div class="item-child">
                        <img src="{{url('assets-frontend')}}/images/organic-news-img-1.jpg" alt="">
                        <div class="content">
                            <p class="date">March 04, 2018</p>
                            <p class="title">Quick dinners, healthy<br /> recipes, and more. </p>
                        </div>
                        <div class="item_child-bg"></div>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="item">
                    <div class="item-child">
                        <div class="img">
                            <img src="{{url('assets-frontend')}}/images/organic-news-img-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="date">March 04, 2018</p>
                            <p class="title">5 Reasons Why Grapes<br> Are Good for You </p>
                        </div>
                        <div class="item_child-bg"></div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="item">
                    <div class="item-child">
                        <div class="img">
                            <img src="{{url('assets-frontend')}}/images/organic-news-img-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="date">March 04, 2018</p>
                            <p class="title">Chicken & Spring <br>Vegetable Lasagna Recipe </p>
                        </div>
                        <div class="item_child-bg"></div>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="item">
                    <div class="item-child">
                        <div class="img">
                            <img src="{{url('assets-frontend')}}/images/organic-news-img-4.jpg" alt="">
                        </div>
                        <div class="content">
                            <p class="date">March 04, 2018</p>
                            <p class="title">Fusce ac pharetra urna.<br> Duis non lacus sit</p>
                        </div>
                        <div class="item_child-bg"></div>
                    </div>
                </div>
            </div><!-- End Item-row -->
        </div><!-- End Product-items-->
    </div><!-- End Organic-news -->
    <div class="delivery">
        <div class="logo">
            <img src="{{url('assets-frontend')}}/images/logo_delivery.png" alt="">
        </div>
        <div class="steps">
            <div class="step-child">
                <div class="image">
                    <div class="img">
                        <img class="bg" src="{{url('assets-frontend')}}/images/step-1.png" alt="">
                    </div>
                    <div class="arrow-right"></div>
                    <div class="icon-step">
                        <i class="fal fa-carrot step-icon"></i>
                    </div>
                </div>
                <div class="content">
                    <p class="step">Step 01</p>
                    <p class="text">Choose one or more products</p>
                </div>
            </div>

            <div class="step-child">
                <div class="image">
                    <div class="img">
                        <img class="bg" src="{{url('assets-frontend')}}/images/step-2.png" alt="">
                    </div>
                    <div class="arrow-right"></div>
                    <div class="icon-step">
                        <i class="fal fa-home-lg-alt step-icon icon-2"></i>
                    </div>
                </div>
                <div class="content">
                    <p class="step">Step 02</p>
                    <p class="text">Determine our Farm</p>
                </div>
            </div>

            <div class="step-child">
                <div class="image">
                    <div class="img">
                        <img class="bg" src="{{url('assets-frontend')}}/images/step-3.png" alt="">
                    </div>
                    <div class="arrow-right"></div>
                    <div class="icon-step">
                        <i class="fas fa-map-marker-alt step-icon"></i>
                    </div>
                </div>
                <div class="content">
                    <p class="step">Step 03</p>
                    <p class="text">Write Your Location</p>
                </div>
            </div>

            <div class="step-child">
                <div class="image">
                    <div class="img">
                        <img class="bg" src="{{url('assets-frontend')}}/images/step-4.png" alt="">
                    </div>
                    <div class="icon-step">
                        <i class="fal fa-box-usd step-icon"></i>
                    </div>
                </div>
                <div class="content">
                    <p class="step">Step 04</p>
                    <p class="text">Fast Delivery</p>
                </div>
            </div>
        </div><!-- End Steps -->
    </div><!-- End Delivery -->
    <div class="newsletter">
        <div class="main">
            <div class="main-text">
                <p class="title">Sign up <span>newsletter</span></p>
                <p class="text">Sign up our newsletter to recieve <span>latest news</span> and <span>greate
                        offers</span></p>
            </div>
            <div class="main-email">
                <input type="text" name="" id="" placeholder="Enter your email here...">
                <button>Subscribe</button>
            </div>
        </div>
    </div><!-- End Newsletter-->
    <div class="brands">
        <div class="brands-item">
            <div class="owl-brands owl-carousel owl-theme">
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-1.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-2.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-3.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-5.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-6.png" alt="">
                    </div>
                </div>
                <div class="item">
                    <div class="image">
                        <img src="{{url('assets-frontend')}}/images/brand-3.png" alt="">
                    </div>
                </div>
            </div><!-- End Owl-brands -->
        </div> <!-- End Brands Item -->
    </div><!-- End Brands -->
</div><!-- End Content -->

@stop
