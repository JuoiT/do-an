@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/bootstrap-slider.min.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/smoothproducts.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/responsive-tabs.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/product-detail.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/product-page-banner.jpg" />
</section>
<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('product')}}">Shop</a></li>
                <li>Detail</li>
            </ul>
            <h1 class="page-tit">Retis Lapen Casen</h1>
        </div>
    </div>
</section>

<div class="content-part detail-page">
    <div class="container">
        <div class="row">
            <section class="single-post-section">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                        <div class="sp-wrap">
                            <a href="{{url('assets-frontend')}}/images/fruit_01.jpg">
                                <img src="{{url('assets-frontend')}}/images/fruit_01.jpg" alt="">
                            </a>
                            <a href="{{url('assets-frontend')}}/images/fruit_02.jpg">
                                <img src="{{url('assets-frontend')}}/images/fruit_02.jpg" alt="">
                            </a>
                            <a href="{{url('assets-frontend')}}/images/fruit_03.jpg">
                                <img src="{{url('assets-frontend')}}/images/fruit_03.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                        <div class="product-single-meta">
                            <div class="product-name">Retis Lapen Casen</div>
                            <div class="ratting">
                                <ul>
                                    <li><a href="#"><img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/green-star-1.png"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/green-star-1.png"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/green-star-1.png"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/dark-star-1.png"></a></li>
                                    <li><a href="#"><img class="img-responsive"
                                                src="{{url('assets-frontend')}}/images/dark-star-1.png"></a></li>
                                </ul>
                                <span>( 05 reviews )</span>
                            </div>
                            <div class="price">
                                <div class="new-price">$23.00</div>
                                <div class="old-price"><del>$12.00</del></div>
                            </div>
                            <div class="availablity">
                                Available: <span>In Stock</span>
                            </div>
                            <p class="product-information">Retis Lapen Casen is a rich source of Vitamin A, B & C and
                                minerals such as magnesium, zinc and "potassium". It is cholesterol-free and contains
                                dietary fibre. Calories = 22. It aids in the prevention of certain types of "cancer" and
                                in the regulation of cholesterol in the blood. It helps boost the immune system and
                                increases bone health.</p>

                            <div class="cart-process">
                                <div class="qty">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                            data-type="minus" data-field="quant[1]"> - </button>
                                    </span>
                                    <input type="text" name="quant[1]" class="form-control input-number" value="1"
                                        min="1" max="10">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-default btn-number" data-type="plus"
                                            data-field="quant[1]"> + </button>
                                    </span>
                                </div>
                                <div class="cart">
                                    <button class="cart-btn">Add to cart</button>
                                </div>
                                <div class="extra">
                                    <ul class="list-inline">
                                        <li><a href="#"><i class="icon-favorite-heart-button"></i></a></li>
                                        <li><a href="#"><i class="icon-line-menu"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tag-box">
                                <div class="tag-row">
                                    <span class="tag-label sku">SKU</span><span class="dots">:</span><span
                                        class="tag-label-value sku-value"> &nbsp;537mkc8500</span>
                                </div>
                                <div class="tag-row">
                                    <span class="tag-label category">Category</span><span class="dots">:</span><span
                                        class="tag-label-value category-value"> &nbsp;Vegetables</span>
                                </div>
                                <div class="tag-row">
                                    <span class="tag-label">Tags</span><span class="dots">:</span><span
                                        class="tag-label-value"> &nbsp;
                                        <a class="tag-btn" href="#">Food</a>
                                        <a class="tag-btn" href="#">Organic Food</a>
                                        <a class="tag-btn" href="#">Garden</a>

                                    </span>
                                </div>
                                <div class="tag-row">
                                    <span class="tag-label">Share</span><span class="dots">:</span><span
                                        class="tag-label-value"> &nbsp;
                                        <ul class="social">
                                            <li><a href="#" target="_blank"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="icon-google-plus"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="icon-pinterest"></i></a></li>
                                            <li><a href="#" target="_blank"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- =============== Single Post Section ============== -->
            <section class="tab-section wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="responsive-tabs">
                                <h2>Description</h2>
                                <div class="responsive-tabs__panel--active">
                                    <p>Retis Lapen Casen is a rich source of Vitamin A, B & C and minerals such as
                                        magnesium, zinc and "potassium". It is cholesterol-free and contains dietary
                                        fibre. Calories = 22. It aids in the prevention of certain types.</p>
                                    <p class="mar-btm-60">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                        ever since the 1500s, when an unknown printer took a galley of type and
                                        scrambled it to make a type specimen book. It has survived not only five
                                        centuries, but also the leap into electronic typesetting, remaining essentially
                                        unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                        containing Lorem Ipsum passages, and more recently with desktop publishing
                                        software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <h3>Retis Lapen Casen is a rich source of Vitamin</h3>
                                    <ul class="list-view">
                                        <li>Etiam et justo ut magna lobortis convallis a eu mauris.</li>
                                        <li>Etiam sed dolor sagittis, ultricies nibh vitae, cursus nibh.</li>
                                        <li>Phasellus laoreet orci ut massa sagittis luctus.</li>
                                        <li>Mauris pretium ex nec nisi lacinia, id blandit odio scelerisque.</li>
                                        <li>Proin sit amet diam hendrerit, eleifend lacus posuere, pulvinar erat.</li>
                                        <li>Vestibulum sollicitudin massa non tortor malesuada, quis tristique leo
                                            aliquet.</li>
                                        <li>Nulla vestibulum arcu bibendum eros pharetra facilisis.</li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s
                                        with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                        recently with desktop publishing software like Aldus PageMaker including
                                        versions of Lorem Ipsum.</p>
                                </div>
                                <h2>Reviews(s)</h2>
                                <div>
                                    <form class="product-review-form row">
                                        <div class="col-sm-12 col-xs-12">
                                            <h3>Write a review</h3>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required />
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label>Email address</label>
                                            <input type="email" class="form-control" required />
                                        </div>
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label>Example textarea</label>
                                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                        </div>
                                        <div class="col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section class="related-products wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="tit">
                                <h2>Related Products</h2>
                            </div>
                            <div class="owl-carousel owl-theme related-product-slider">
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-7.jpg" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Jessica Simpson Fruit's</div>
                                            <div class="price">
                                                <div class="new-price">$23.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                                    <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-8.jpg" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Lee Uniforms Vegetable's Short-Sleeve</div>
                                            <div class="price">
                                                <div class="new-price">$33.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                                    <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-9.jpg" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Original Penguin Vegetable’s Chest-Stripe</div>
                                            <div class="price">
                                                <div class="new-price">$25.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                                    <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-5.jpg" />
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Original Penguin Vegetable’s Chest-Stripe</div>
                                            <div class="price">
                                                <div class="new-price">$25.00</div>
                                                <div class="old-price"><del>$12.00</del></div>
                                            </div>
                                            <div class="btn-part"> <a href="cart.html" class="cart-btn">buy now</a>
                                                <i class="icon-basket-supermarket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li><a href="whishlist.html"><i class="icon-heart"></i></a></li>
                                                    <li><a href="product-detail.html"><i class="icon-view"></i></a></li>
                                                    <li><a href="cart.html"><i class="icon-basket-supermarket"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@stop
