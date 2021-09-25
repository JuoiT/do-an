@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/bootstrap-slider.min.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/smoothproducts.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/library/responsive-tabs.css">
<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/product-detail.css">

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/product-page-banner.jpg"/>
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('product')}}">Shop</a>
                </li>
                <li>Detail</li>
            </ul>
            <h1 class="page-tit">Lmao</h1>
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
                            <a>
                                <img src="{{url('assets-frontend')}}/images/fruit_01.jpg" alt="">
                            </a>
                            <a>
                                <img src="{{url('assets-frontend')}}/images/fruit_02.jpg" alt="">
                            </a>
                            <a>
                                <img src="{{url('assets-frontend')}}/images/fruit_03.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                        <div class="product-single-meta">
                            <div class="product-name">Bru Lmao</div>
                            <div class="ratting">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-1.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-1.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/green-star-1.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-1.png">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/dark-star-1.png">
                                        </a>
                                    </li>
                                </ul>
                                <span>( 05 reviews )</span>
                            </div>
                            <div class="price">
                                <div class="new-price">$3.00</div>
                                <div class="old-price">
                                    <del>$5.00</del>
                                </div>
                            </div>
                            <div class="availablity">
                                Available: <span>In Stock</span>
                            </div>
                            <p class="product-information">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Iusto, vitae. Repudiandae in perspiciatis fugiat consequuntur accusantium asperiores
                                debitis illo ut, illum recusandae eos voluptatem vitae sunt animi deserunt. Quas,
                                aperiam.</p>
                            <div class="cart-process">
                                <form action="" method="POST">
                                    <div class="qty">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quantity"> - </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                                        <span class="input-group-btn">
                                            <button type="button" class="btn btn-default btn-number" data-type="plus" data-field="quantity"> + </button>
                                        </span>
                                    </div>
                                    <div class="cart">
                                        <button type="submit" class="cart-btn">Add to cart</button>
                                    </div>
                                </form>
                                <div class="extra">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#">
                                                <i class="icon-heart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-menu"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tag-box">
                                <div class="tag-row">
                                    <span class="tag-label category">Category</span>
                                    <span class="dots">:</span>
                                    <span class="tag-label-value category-value">Vegetables</span>
                                </div>
                                <div class="tag-row">
                                    <span class="tag-label">Tags</span>
                                    <span class="dots">:</span>
                                    <span
                                        class="tag-label-value">
                                        <a class="tag-btn" href="#">Bru</a>
                                        <a class="tag-btn" href="#">Lmao</a>
                                        <a class="tag-btn" href="#">Mlem</a>
                                    </span>
                                </div>
                                <div class="tag-row">
                                    <span class="tag-label">Share</span>
                                    <span class="dots">:</span>
                                    <span class="tag-label-value">
                                        <ul class="social">
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icon-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icon-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icon-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icon-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class="icon-youtube-play"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="tab-section wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="responsive-tabs">
                                <h2>Description</h2>
                                <div class="responsive-tabs__panel--active">
                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti, nemo minus
                                        amet fugiat accusamus iusto enim blanditiis possimus magnam hic nostrum commodi
                                        autem est molestias? Incidunt accusantium rem dolores est.</p>
                                    <p class="mar-btm-60">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                        Deleniti, nemo minus
                                        amet fugiat accusamus iusto enim blanditiis possimus magnam hic nostrum commodi
                                        autem est molestias? Incidunt accusantium rem dolores est. Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Deleniti, nemo minus
                                        amet fugiat accusamus iusto enim blanditiis possimus magnam hic nostrum commodi
                                        autem est molestias? Incidunt accusantium rem dolores est. Lorem ipsum dolor,
                                        sit amet consectetur adipisicing elit. Deleniti, nemo minus
                                        amet fugiat accusamus iusto enim blanditiis possimus magnam hic nostrum commodi
                                        autem est molestias? Incidunt accusantium rem dolores est.</p>
                                    <h3>Ngu vừa phải thì đừng ăn</h3>
                                    <ul class="list-view">
                                        <li>Lmao Bru Mlem Dak Mòe lol Ccasjbcajk</li>
                                    </ul>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio alias mollitia hic
                                        reprehenderit, voluptas libero obcaecati dignissimos impedit cumque, vitae
                                        officia. Repellat doloremque vitae omnis nobis saepe atque consequatur
                                        temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio alias mollitia hic
                                        reprehenderit, voluptas libero obcaecati dignissimos impedit cumque, vitae
                                        officia. Repellat doloremque vitae omnis nobis saepe atque consequatur
                                        temporibus?</p>
                                </div>
                                <h2>Reviews(6)</h2>
                                <div>
                                    <form class="product-review-form row">
                                        <div class="col-sm-12 col-xs-12">
                                            <h3>Write a review</h3>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" required/>
                                        </div>
                                        <div class="form-group col-sm-6 col-xs-12">
                                            <label>Email</label>
                                            <input type="email" class="form-control" required/>
                                        </div>
                                        <div class="form-group col-sm-12 col-xs-12">
                                            <label>Review</label>
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
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-7.jpg"/>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Lmao</div>
                                            <div class="price">
                                                <div class="new-price">$3.00</div>
                                                <div class="old-price">
                                                    <del>$5.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('whishlist')}}">
                                                            <i class="icon-heart-empty"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('detail')}}">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('cart')}}">
                                                            <i class="icon-shopping-basket"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-8.jpg"/>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Bru</div>
                                            <div class="price">
                                                <div class="new-price">$3.00</div>
                                                <div class="old-price">
                                                    <del>$7.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('whishlist')}}">
                                                            <i class="icon-heart-empty"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('detail')}}">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('cart')}}">
                                                            <i class="icon-shopping-basket"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-9.jpg"/>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Lmao Bru</div>
                                            <div class="price">
                                                <div class="new-price">$4.00</div>
                                                <div class="old-price">
                                                    <del>$6.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('whishlist')}}">
                                                            <i class="icon-heart-empty"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('detail')}}">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('cart')}}">
                                                            <i class="icon-shopping-basket"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="wrapper">
                                        <div class="pro-img">
                                            <img class="img-responsive" src="{{url('assets-frontend')}}/images/product-img-5.jpg"/>
                                        </div>
                                        <div class="contain-wrapper">
                                            <div class="tit">Mòe lol</div>
                                            <div class="price">
                                                <div class="new-price">$3.00</div>
                                                <div class="old-price">
                                                    <del>$6.00</del>
                                                </div>
                                            </div>
                                            <div class="btn-part">
                                                <a href="{{route('cart')}}" class="cart-btn">buy now</a>
                                                <i class="icon-shopping-basket"></i>
                                            </div>
                                        </div>
                                        <div class="wrapper-box-hover">
                                            <div class="text">
                                                <ul>
                                                    <li>
                                                        <a href="{{route('whishlist')}}">
                                                            <i class="icon-heart-empty"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('detail')}}">
                                                            <i class="icon-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('cart')}}">
                                                            <i class="icon-shopping-basket"></i>
                                                        </a>
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

@section('script')
<script src="{{url('assets-frontend')}}/js/responsiveTabs.min.js"></script>
<script src="{{url('assets-frontend')}}/js/smoothproducts.min.js"></script>
<script src="{{url('assets-frontend')}}/js/detail.js"></script>
@stop
