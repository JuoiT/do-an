@extends('frontend.master')

@section('main')

    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/bootstrap-slider.min.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/smoothproducts.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/responsive-tabs.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/product-detail.css">

    <section class="sub-banner wow fadeInUp">
        <img class="banner" src="{{ url('assets-frontend') }}/images/product-page-banner.jpg" />
    </section>

    <section class="breadcrumb-section wow fadeInUp">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}">Shop</a>
                    </li>
                    <li>Detail</li>
                </ul>
                <h1 class="page-tit">Detail</h1>
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
                                <a href="{{ url('upload-images') }}/{{ $product->image }}">
                                    <img src="{{ url('upload-images') }}/{{ $product->image }}"
                                        alt="{{ $product->image }}">
                                </a>
                                @foreach ($product->productImages as $desImage)
                                    <a href="{{ url('upload-des-images') }}/{{ $desImage->image }}">
                                        <img src="{{ url('upload-des-images') }}/{{ $desImage->image }}"
                                            alt="{{ $desImage->image }}">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
                            <div class="product-single-meta">
                                <div class="product-name">{{ $product->name }}</div>
                                <div class="ratting">
                                    <div class="rating-row">
                                        <ul>
                                            @for ($i = 0; $i < (floor($product->comments->avg('rating'))); $i++)
                                                <li class=""><i class=" fa fa-star">
                                                    </i></li>
                                                @endfor
                                                @for ($i = 5; $i > (floor($product->comments->avg('rating'))); $i--)
                                                <li class=""><i class=" fa fa-star-o">
                                                    </i></li>
                                                @endfor
                                        </ul>
                                        <span>( {{ $product->comments->count() }} reviews, avg:
                                            {{ round($product->comments->avg('rating'), 2) }})</span>
                                    </div>
                                </div>
                                <div class="price">
                                    @if ($product->sale_price > 0)
                                        <div class="new-price">{{ toUsd($product->sale_price) }}</div>
                                        <div class="old-price">
                                            <del>{{ toUsd($product->price) }}</del>
                                        </div>
                                    @else
                                        <div class="new-price">{{ toUsd($product->price) }}</div>
                                    @endif
                                </div>
                                <div class="availablity">
                                    <span>Available:</span>
                                    @if ($product->status == 1)
                                        <span class="text-success">In Stock</span>
                                    @else
                                        <span class="text-danger">Out of Stock</span>
                                    @endif
                                </div>
                                <div class="cart-process">
                                    <form action="{{route('cart.add')}}" method="GET">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <div class="qty">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" disabled="disabled"
                                                    data-type="minus" data-field="quantity"> - </button>
                                            </span>
                                            <input type="text" name="quantity" class="form-control input-number" value="1"
                                                min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-default btn-number" data-type="plus"
                                                    data-field="quantity"> + </button>
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
                                            {{-- <li>
                                                <a href="#">
                                                    <i class="icon-menu"></i>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="tag-box">
                                    <div class="tag-row">
                                        <span class="tag-label category">Category</span>
                                        <span class="dots">:</span>
                                        <span
                                            class="tag-label-value category-value">{{ $product->category->name }}</span>
                                    </div>
                                    {{-- <div class="tag-row">
                                        <span class="tag-label">Tags</span>
                                        <span class="dots">:</span>
                                        <span class="tag-label-value">
                                            <a class="tag-btn" href="#">Bru</a>
                                            <a class="tag-btn" href="#">Lmao</a>
                                            <a class="tag-btn" href="#">Mlem</a>
                                        </span>
                                    </div> --}}
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
                                        <div class="product-information">{!! $product->description !!}</div>
                                    </div>
                                    <h2>Reviews({{ $product->comments->count() }})</h2>
                                    <div class="reviews">
                                        @if (Auth()->user())
                                            <form class="product-review-form row" action="{{ route('add_comment') }}"
                                                method="POST">
                                                <div class="col-sm-12 col-xs-12">
                                                    <h3>Write a review</h3>
                                                </div>

                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_id" value="{{ Auth()->user()->id }}">
                                                <div class="form-group col-sm-12 col-xs-12">
                                                    <div id="full-stars-example-two">
                                                        <div class="rating-group">
                                                            {{-- <input disabled checked
                                                            class="rating__input rating__input--none" name="rating3"
                                                            id="rating3-none" value="0" type="radio"> --}}
                                                            <label aria-label="1 star" class="rating__label"
                                                                for="rating3-1"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating3" id="rating3-1"
                                                                value="1" type="radio">
                                                            <label aria-label="2 stars" class="rating__label"
                                                                for="rating3-2"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating3" id="rating3-2"
                                                                value="2" type="radio">
                                                            <label aria-label="3 stars" class="rating__label"
                                                                for="rating3-3"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating3" id="rating3-3"
                                                                value="3" type="radio">
                                                            <label aria-label="4 stars" class="rating__label"
                                                                for="rating3-4"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating3" id="rating3-4"
                                                                value="4" type="radio">
                                                            <label aria-label="5 stars" class="rating__label"
                                                                for="rating3-5"><i
                                                                    class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                            <input class="rating__input" name="rating3" id="rating3-5"
                                                                value="5" type="radio" checked>
                                                        </div>
                                                    </div>
                                                    <textarea class="form-control" name="content" maxlength="2000"
                                                        rows="3" placeholder="Your rating and comment"></textarea>
                                                    @if ($errors->has('content'))
                                                        <small
                                                            class="text-danger">{{ $errors->first('content') }}</small>
                                                    @endif
                                                </div>
                                                <div class="col-sm-12 col-xs-12">
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                            </form>
                                        @else
                                            <h3><a href="{{ route('login') }}">Login</a><span> and shopping to write
                                                    comment!</span></h3>
                                        @endif

                                        <div class="comment-section">
                                            <h3>Recently Reviews</h3>
                                            <div class="comment-section">
                                                <div class="review">
                                                    <div class="comment-section">
                                                        @foreach ($comments as $comment)
                                                            <div class="media media-review">
                                                                <div class="media-body">
                                                                    <div class="M-flex">
                                                                        <div class="media-user"><img
                                                                                src="https://i.imgur.com/nUNhspp.jpg"
                                                                                alt="">
                                                                        </div>
                                                                        <div>
                                                                            <h2 class="title"><span>
                                                                                    {{ $comment->user->name }}
                                                                                </span>
                                                                                <div style="padding: 5px 0">
                                                                                    {{ $comment->created_at->format('d/m/Y') }}
                                                                                </div>
                                                                                <div class="rating-row">
                                                                                    <ul>
                                                                                        @for ($i = 0; $i < $comment->rating; $i++)
                                                                                            <li class=""><i class=" fa
                                                                                                fa-star">
                                                                                                </i></li>
                                                                                        @endfor
                                                                                        @for ($i = 5; $i > $comment->rating; $i--)
                                                                                            <li class=""><i class=" fa
                                                                                                fa-star-o">
                                                                                                </i></li>
                                                                                        @endfor
                                                                                    </ul>
                                                                                </div>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="description">{{ $comment->content }}
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        @endforeach
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


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
                                    @foreach ($relatedProducts as $item)
                                        <div class="item">
                                            <div class="wrapper">
                                                <div class="pro-img">
                                                    <img class="img-responsive"
                                                        src="{{ url('upload-images') }}/{{ $item->image }}" />
                                                </div>
                                                <div class="contain-wrapper">
                                                    <div class="tit">{{ $item->name }}</div>
                                                    @if ($item->sale_price > 0)
                                                        <div class="price">
                                                            <div class="new-price">{{ toUsd($item->sale_price) }}
                                                            </div>
                                                            <div class="old-price">
                                                                <del>{{ toUsd($item->price) }}</del>
                                                            </div>
                                                        </div>
                                                    @else
                                                        <div class="price">
                                                            <div class="new-price">{{ toUsd($item->price) }}</div>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="wrapper-box-hover">
                                                    <div class="text">
                                                        <ul>
                                                            <li>
                                                                <a href="{{ route('whishlist') }}">
                                                                    <i class="icon-heart-empty"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ route('detail', $item->id) }}">
                                                                    <i class="icon-eye"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <form action="{{route('cart.add')}}" method="GET">
                                                                    @csrf
                                                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                                                    <input type="hidden" name="quantity" value="1">
                                                                    <div class="cart">
                                                                        <button type="submit" style="border: none; background: none"><a><i class="icon-shopping-basket"></i></a></button>
                                                                    </div>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
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
    <script src="{{ url('assets-frontend') }}/js/responsiveTabs.min.js"></script>
    <script src="{{ url('assets-frontend') }}/js/smoothproducts.min.js"></script>
    <script src="{{ url('assets-frontend') }}/js/detail.js"></script>
@stop
