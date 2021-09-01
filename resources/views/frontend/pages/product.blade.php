@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/product_listing.css">

<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/product-page-banner.jpg" alt="">
</div>

<!-- Product -->
<div class="product">
    <div class="product-container">
        <div class="container-main">
            <ul class="list-page">
                <li><a href="home.html">Home</a></li>
                <li>Vegetables</li>
            </ul>
            <h1 class="title">Vegetables</h1>
        </div>
    </div>

    <div class="product-item">
        <div class="product-left">
            <div class="sidebar">
                <div class="categories">
                    <div class="tit">
                        <h2>Categories</h2>
                    </div>
                    <div class="list-menu">
                        <ul class="level_1">
                            <li>
                                <a href="#">Vegetables</a>
                                <span class="show-menu-lv2">
                                    <i class="far fa-plus chage"></i>
                                </span>
                                <ul class="level_2">
                                    <li>
                                        <span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Leaf vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul><!-- End Menu-level_3 -->
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Pod vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Fruit vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Bulb Vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu-level_2 -->
                            </li>

                            <li>
                                <a href="#">Fruits</a>
                                <span class="show-menu-lv2">
                                    <i class="far fa-plus"></i>
                                </span>
                                <ul class="level_2">
                                    <li>
                                        <span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Leaf vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul><!-- End Menu-level_3 -->
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Pod vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Fruit vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Bulb Vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu-level_2 -->
                            </li>

                            <li>
                                <a href="#">Fruits
                                    Organic Fruits</a>
                                <span class="show-menu-lv2">
                                    <i class="far fa-plus"></i>
                                </span>
                                <ul class="level_2">
                                    <li>
                                        <span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Leaf vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul><!-- End Menu-level_3 -->
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Pod vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Fruit vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Bulb Vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu-level_2 -->
                            </li>

                            <li>
                                <a href="#">Sprouts</a>
                                <span class="show-menu-lv2">
                                    <i class="far fa-plus"></i>
                                </span>
                                <ul class="level_2">
                                    <li>
                                        <span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Leaf vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul><!-- End Menu-level_3 -->
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Pod vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Fruit vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Bulb Vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu-level_2 -->
                            </li>

                            <li>
                                <a href="#">Custom</a>
                                <span class="show-menu-lv2">
                                    <i class="far fa-plus"></i>
                                </span>
                                <ul class="level_2">
                                    <li>
                                        <span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Leaf vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul><!-- End Menu-level_3 -->
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Pod vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Fruit vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Bulb Vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                    <li><span class="icon-right"><i class="far fa-chevron-right"></i></span><a
                                            href="#">Root vegetables</a>
                                        <span class="icon-plus show-menu-lv3"><i class="far fa-plus"></i></span>
                                        <ul class="level_3">
                                            <li><a href="">- Spinach</a></li>
                                            <li><a href="">- Spring Onion</a></li>
                                            <li><a href="">- Cabbage</a></li>
                                            <li><a href="">- Lettuce</a></li>
                                        </ul>
                                    </li>
                                </ul><!-- End Menu-level_2 -->
                            </li>


                        </ul><!-- End Menu-level_1 -->
                    </div><!-- End List-Menu -->
                </div>

                <!-- <div class="price">
                        <div class="tit">
                            <h2>By price</h2>
                        </div>
                    </div> -->

                <div class="top-sell">
                    <div class="tit">
                        <h2>Top seller</h2>
                    </div>
                    <div class="item-product">
                        <div class="item">
                            <div class="image">
                                <img src="{{url('assets-frontend')}}/images/top-seller-img-1.jpg" alt="">
                            </div>
                            <div class="content">
                                <p class="title">Raddish Chits</p>
                                <p class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                                <p class="price-sell">$19.00</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <img src="{{url('assets-frontend')}}/images/top-seller-img-2.jpg" alt="">
                            </div>
                            <div class="content">
                                <p class="title">Raddish Chits</p>
                                <p class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                                <p class="price-sell">$19.00</p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="image">
                                <img src="{{url('assets-frontend')}}/images/top-seller-img-3.jpg" alt="">
                            </div>
                            <div class="content">
                                <p class="title">Raddish Chits</p>
                                <p class="stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                        class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                </p>
                                <p class="price-sell">$19.00</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="popular-tags">
                    <div class="tit">
                        <h2>popular tags</h2>
                    </div>
                    <div class="tag-div">
                        <a class="tag-btn" href="#">Cucumber</a>
                        <a class="tag-btn" href="#">Vegetables</a>
                        <a class="tag-btn" href="#">Fruits</a>
                        <a class="tag-btn" href="#">Organic Food</a>
                        <a class="tag-btn" href="#">Food</a>
                        <a class="tag-btn" href="#">True Natural</a>
                        <a class="tag-btn" href="#">Garden</a>
                        <a class="tag-btn" href="#">Green</a>
                    </div>
                </div>
                <div class="hot-collection">
                    <img src="{{url('assets-frontend')}}/images/hot-collection-img.jpg" alt="">
                </div>
            </div>
        </div><!-- End Product Left -->

        <div class="product-right">
            <div class="sidebar">
                <div class="filter">
                    <div class="l-part">
                        <p>Showing 1–20 of 30 results</p>
                    </div>
                    <div class="r-part">
                        <div class="shorf-1">
                            <label for="short">Short By:</label>
                            <select id="short">
                                <option value="">Default</option>
                                <option value="">A to Z</option>
                                <option value="">Z to A</option>
                            </select>
                        </div>
                        <div class="shorf-2">
                            <label for="show">Show:</label>
                            <select id="show">
                                <option value="">12</option>
                                <option value="">24</option>
                                <option value="">30</option>
                            </select>
                        </div>
                        <div class="grid">
                            <div class="grid-layout"><i class="far fa-th"></i></div>
                            <div class="list-grid"><i class="fas fa-list"></i></div>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="list-item">
                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="sale">sale</p>
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-1.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                        <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                                NOW</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <img src="{{url('assets-frontend')}}/images/product-img-2.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="new">new</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-8.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="sale">sale</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-4.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <img src="{{url('assets-frontend')}}/images/product-img-3.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="new">new</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-5.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="sale">sale</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-8.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <img src="{{url('assets-frontend')}}/images/product-img-7.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="new">new</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-6.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="sale">sale</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-9.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <img src="{{url('assets-frontend')}}/images/product-img-10.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="item-product">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html"><i
                                                class="fal fa-heart"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html"><i
                                                class="fal fa-eye"></i></a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html"><i
                                                class="far fa-shopping-basket"></i></a>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <p class="new">new</p>
                                    <img src="{{url('assets-frontend')}}/images/product-img-12.jpg" alt="">
                                    <p class="name-product">JLee Uniforms Vegetable's</p>
                                    <p class="price"><span>$33.00</span><span class="del">$12.00</span></p>
                                    <a class="buy-now"><i class="fas fa-shopping-basket"></i><span>BUY
                                            NOW</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-page">
                    <ul>
                        <li><a href="#"><span><i class="far fa-chevron-left"></i></span></a></li>
                        <li><a href="#"><span></span>1</a></li>
                        <li><a href="#"><span></span>2</a></li>
                        <li><a href="#"><span></span>3</a></li>
                        <li><a href="#"><span><i class="far fa-chevron-right"></i></span></a></li>
                    </ul>

                </div>
            </div><!-- End Product Right-->
        </div><!-- End Row -->
    </div><!-- End Product-->
</div><!-- End product-->

@stop
