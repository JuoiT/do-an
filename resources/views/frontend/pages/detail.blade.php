@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/product-detail.css">

<div class="back-top">
    <i class="fal fa-chevron-up"></i>
</div>

<!-- <div id="loading">
        <div class="loader">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
  </div>
   -->
<!-- Banner -->
<div class="banner">
    <img src="{{url('assets-frontend')}}/images/product-page-banner.jpg" alt="">
</div>

<!-- Main page -->
<div class="main-page">
    <div class="product-container">
        <div class="container-main">
            <ul class="list-page">
                <li>
                    <a href="home.html">Home</a>
                </li>
                <li>
                    <a href="home.html">Vegetables</a>
                </li>
                <li>
                    <a href="home.html">Leaf vegetables</a>
                </li>
                <li>Vegetables</li>
            </ul>
            <h1 class="title">Retis Lapen Casen</h1>
        </div>
    </div>
    <div class="product-item">
        <div class="products">
            <div class="product-image">
                <!-- <div class="image-slide owl-carousel owl-theme"> -->
                <div class="image-show">
                    <div class="image">
                        <img class="slide" src="{{url('assets-frontend')}}/images/product-img-3.jpg" alt="">
                    </div>
                </div>

                <div class="select-img">
                    <img src="{{url('assets-frontend')}}/images/product-img-3.jpg" alt="" class="img-child img-child-1">
                    <img src="{{url('assets-frontend')}}/images/product-img-4.jpg" alt="" class="img-child img-child-2">
                    <img src="{{url('assets-frontend')}}/images/product-img-12.jpg" alt=""
                        class="img-child img-child-3">
                </div>
            </div>

            <div class="product-content">
                <div class="content">
                    <p class="name-product">Retis Lapen Casen</p>
                    <p class="stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <span>( 05 reviews )</span>
                    </p>
                    <p class="price">
                        <span class="new-price">$19.00</span>
                        <span class="old-price">$12.00</span>
                    </p>
                    <p class="availablity">Available:
                        <span>In Stock</span>
                    </p>
                    <p class="information">Retis Lapen Casen is a rich source of Vitamin A, B & C and minerals such as magnesium, zinc and "potassium". It is cholesterol-free and contains dietary fibre. Calories = 22. It aids in the prevention of certain types of "cancer" and in the regulation of cholesterol in the blood. It helps boost the immune system and increases bone health.</p>
                </div>
                <div class="cart-process">
                    <div class="btn">
                        <span class="input-btn">
                            <button class="minus">-</button>
                        </span>
                        <span class="input-btn">
                            <input class="value" value="1">
                        </span>
                        <span class="input-btn">
                            <button class="plus">+</button>
                        </span>
                    </div>
                    <div class="card">
                        <button>add to card</button>
                    </div>
                    <div class="extra">
                        <i class="fas fa-heart"></i>
                        <i class="far fa-equals"></i>
                    </div>
                </div>
                <div class="tag-box">
                    <div class="tag-row">
                        <span class="tag-label">SKU</span>
                        <span class="dots">:</span>
                        <span class="inf">537mkc8500</span>
                    </div>
                    <div class="tag-row">
                        <span class="tag-label">Category</span>
                        <span class="dots">:</span>
                        <span class="category">Vegetables</span>
                    </div>
                    <div class="tag-row">
                        <span class="tag-label">Tags</span>
                        <span class="dots">:</span>
                        <div class="tag-label-value">
                            <a class="tag-btn" href="#">Food</a>
                            <a class="tag-btn" href="#">Organic Food</a>
                            <a class="tag-btn" href="#">Garden</a>
                        </div>
                    </div>
                    <div class="tag-row">
                        <span class="tag-label">Share</span>
                        <span class="dots">:</span>
                        <div class="tag-label">
                            <ul class="social">
                                <li>
                                    <a href="">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="wapper-pc">
                <div class="tab-wapper">
                    <div class="tab-list">
                        <span class="list-item list-item-1">Description</span>
                        <span class="list-item list-item-2">Reviews(S)</span>
                    </div>
                    <div class="border-wapper"></div>
                </div>
                <div class="descriptions">
                    <p>Retis Lapen Casen is a rich source of Vitamin A, B & C and minerals such as magnesium, zinc and "potassium". It is cholesterol-free and contains dietary fibre. Calories = 22. It aids in the prevention of certain types.</p>
                    <p class="mar-btm-60">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    <h3>Retis Lapen Casen is a rich source of Vitamin</h3>
                    <ul class="list-view">
                        <li>Etiam et justo ut magna lobortis convallis a eu mauris.</li>
                        <li>Etiam sed dolor sagittis, ultricies nibh vitae, cursus nibh.</li>
                        <li>Phasellus laoreet orci ut massa sagittis luctus.</li>
                        <li>Mauris pretium ex nec nisi lacinia, id blandit odio scelerisque.</li>
                        <li>Proin sit amet diam hendrerit, eleifend lacus posuere, pulvinar erat.</li>
                        <li>Vestibulum sollicitudin massa non tortor malesuada, quis tristique leo aliquet.</li>
                        <li>Nulla vestibulum arcu bibendum eros pharetra facilisis.</li>
                    </ul>
                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="reviews" style="display: none">
                    <h3>Write a reviews</h3>
                    <form id="form-review-pc">
                        <div class="inf">
                            <div class="input-name">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name">
                            </div>
                            <div class="input-name">
                                <label for="email">Email address</label>
                                <input class="form-control" type="text" name="email">
                            </div>
                        </div>
                        <div class="comments">
                            <label for="comment">Comment</label>
                            <textarea class="form-control" name="comment"></textarea>
                        </div>
                        <div class="submit-form">
                            <input type="submit" class="btn-submit" value="submit">
                        </div>
                    </form>
                </div>
            </div>

            <div class="wapper-mobile">
                <div class="wapper-des">
                    <div class="btn-des">
                        <span class="btn" id="btn-1">Description
                            <i id="change-value-1" class="fas fa-sort-down"></i>
                        </span>
                    </div>
                    <div class="descriptions des-mobile">
                        <p> Retis Lapen Casen is a rich source of Vitamin A, B & C and minerals such as magnesium, zinc and "potassium". It is cholesterol-free and contains dietary fibre. Calories = 22. It aids in the prevention of certain types.</p>
                        <p class="mar-btm-60">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <h3>Retis Lapen Casen is a rich source of Vitamin</h3>
                        <ul class="list-view">
                            <li>Etiam et justo ut magna lobortis convallis a eu mauris.</li>
                            <li>Etiam sed dolor sagittis, ultricies nibh vitae, cursus nibh.</li>
                            <li>Phasellus laoreet orci ut massa sagittis luctus.</li>
                            <li>Mauris pretium ex nec nisi lacinia, id blandit odio scelerisque.</li>
                            <li>Proin sit amet diam hendrerit, eleifend lacus posuere, pulvinar erat.</li>
                            <li>Vestibulum sollicitudin massa non tortor malesuada, quis tristique leo aliquet.</li>
                            <li>Nulla vestibulum arcu bibendum eros pharetra facilisis.</li>
                        </ul>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
                    </div>
                </div>
                <div class="wapper-reviews">
                    <div class="btn-reviews">
                        <span class="btn" id="btn-2">Reviews(S)
                            <i id="change-value-2" class="fas fa-sort-down"></i>
                        </span>
                    </div>
                    <div class="reviews rev-mobile">
                        <h3>Write a reviews</h3>
                        <form id="form-review-mobile">
                            <div class="inf">
                                <div class="input-name">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="input-name">
                                    <label for="email">Email address</label>
                                    <input class="form-control" type="text" name="email">
                                </div>
                            </div>
                            <div class="comments">
                                <label for="comment">Comment</label>
                                <textarea class="form-control" name="comment"></textarea>
                            </div>
                            <div class="submit-form">
                                <input type="submit" class="btn-submit" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- End Product-->
    </div><!-- End Product Item -->
    <div class="related-product">
        <div class="container">
            <div class="row">
                <div class="title">
                    <h2>Related Products</h2>
                </div>
                <div class="border-wapper"></div>

                <div class="product">
                    <div class="owl-product owl-carousel owl-theme">

                        <div class="product-item">
                            <div class="item">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                            <i class="far fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-product">
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-3.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price">
                                            <span>$33.00</span>
                                            <span class="del">$12.00</span>
                                        </p>
                                        <a class="buy-now">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>BUY NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="item">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                            <i class="far fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-product">
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-4.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price">
                                            <span>$33.00</span>
                                            <span class="del">$12.00</span>
                                        </p>
                                        <a class="buy-now">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>BUY NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="item">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                            <i class="far fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-product">
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-6.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price">
                                            <span>$33.00</span>
                                            <span class="del">$12.00</span>
                                        </p>
                                        <a class="buy-now">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>BUY NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="item">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                            <i class="far fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-product">
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-8.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price">
                                            <span>$33.00</span>
                                            <span class="del">$12.00</span>
                                        </p>
                                        <a class="buy-now">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>BUY NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="product-item">
                            <div class="item">
                                <div class="item-bg">
                                    <div class="icon-bg">
                                        <a href="{{url('assets-frontend')}}/html/whishlist.html">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/product-detail.html">
                                            <i class="fal fa-eye"></i>
                                        </a>
                                        <a href="{{url('assets-frontend')}}/html/shopping_cart.html">
                                            <i class="far fa-shopping-basket"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="item-product">
                                    <div class="image">
                                        <img src="{{url('assets-frontend')}}/images/product-img-9.jpg" alt="">
                                    </div>
                                    <div class="content">
                                        <p class="name-product">JLee Uniforms Vegetable's</p>
                                        <p class="price">
                                            <span>$33.00</span>
                                            <span class="del">$12.00</span>
                                        </p>
                                        <a class="buy-now">
                                            <i class="fas fa-shopping-basket"></i>
                                            <span>BUY NOW</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
