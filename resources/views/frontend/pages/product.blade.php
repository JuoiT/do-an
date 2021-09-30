@extends('frontend.master')

@section('main')

    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/library/bootstrap-slider.min.css">
    <link rel="stylesheet" href="{{ url('assets-frontend') }}/css/page/product.css">

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
                    <li>Products</li>
                </ul>
                <h1 class="page-tit">Products</h1>
            </div>
        </div>
    </section>

    <div class="content-part listing-page">
        <div class="container">
            <div class="row">
                <aside class="col-md-4 col-sm-12 col-xs-12 wow fadeInLeft">
                    <div id="sidebar">
                        {{-- <div class="widget categories-widget">
                            <div class="widget-tit">
                                <h2>Categories</h2>
                                <div class="button" data-toggle="collapse" data-target="#categories">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="categories">
                                <ul class="level-1">
                                    <li>
                                        <a style="cursor: pointer" id="category-0">Tất cả</a>
                                    </li>
                                    @foreach ($categories as $item)
                                        <li>
                                            <a style="cursor: pointer"
                                                id="category-{{ $item->id }}">{{ $item->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div> --}}

                        {{-- hot products --}}
                        <div class="widget top-seller-widget">
                            <div class="widget-tit">
                                <h2>Hot products</h2>
                                <div class="button" data-toggle="collapse" data-target="#hot-product">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="hot-product">
                                @foreach ($hotProducts as $item)
                                    <div class="seller-box">
                                        <div class="seller-img">
                                            <img class="img-responsive" style="height: 70px; width: 90px; object-fit: cover"
                                                src="{{ url('upload-images') }}/{{ $item->image }}" />
                                        </div>
                                        <div class="seller-text">
                                            <a class="seller-name" style="font-weight: 700; font-size: 14px"
                                                href="{{ route('detail', $item->id) }}">{{ $item->name }}</a>
                                            <div class="ratting">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                @if ($item->sale_price > 0)
                                                    <span class="text-success">{{ toUsd($item->sale_price) }}</span>
                                                    <small><del
                                                            class="text-danger">{{ toUsd($item->price) }}</del></small>
                                                @else
                                                    <span class="text-success">{{ toUsd($item->price) }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- end hot products --}}

                        {{-- top seller --}}
                        <div class="widget top-seller-widget">
                            <div class="widget-tit">
                                <h2>Best seller</h2>
                                <div class="button" data-toggle="collapse" data-target="#top-seller">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="top-seller">
                                @foreach ($bestSeller as $item)
                                    <div class="seller-box">
                                        <div class="seller-img">
                                            <img class="img-responsive" style="height: 70px; width: 90px; object-fit: cover"
                                                src="{{ url('upload-images') }}/{{ $item->image }}" />
                                        </div>
                                        <div class="seller-text">
                                            <a class="seller-name" style="font-weight: 700; font-size: 14px"
                                                href="{{ route('detail', $item->id) }}">{{ $item->name }}</a>
                                            <div class="ratting">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/green-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="img-responsive"
                                                                src="{{ url('assets-frontend') }}/images/dark-star-2.png">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="price">
                                                @if ($item->sale_price > 0)
                                                    <span class="text-success">{{ toUsd($item->sale_price) }}</span>
                                                    <small><del
                                                            class="text-danger">{{ toUsd($item->price) }}</del></small>
                                                @else
                                                    <span class="text-success">{{ toUsd($item->price) }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- end top seller --}}

                        <div class="widget tag-widgwet">
                            <div class="widget-tit">
                                <h2>Popular tags</h2>
                                <div class="button" data-toggle="collapse" data-target="#tag">
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="tag">
                                <div class="tag-div">
                                    <a class="tag-btn" href="#">Bru</a>
                                    <a class="tag-btn" href="#">Bru</a>
                                    <a class="tag-btn" href="#">Bru</a>
                                    <a class="tag-btn" href="#">Bru</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="row">
                        {{-- <h3 style="padding-bottom: 20px">Danh sách sản phẩm</h3> --}}
                        <div class="col-sm-12 col-xs-12">
                            {{-- Start filter --}}
                            <div class="filter">
                                <div class="l-part">
                                    <div class="shorting-box-1">
                                        <label class="shorting-label">Category:</label>
                                        <select id="f-category" class="f-filter">
                                            <option value="" selected>All</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="shorting-box-2">
                                        <label class="shorting-label">Filter: </label>
                                        <select id="f-order-by" class="f-filter">
                                            <option value="created_at" selected>Newest</option>
                                            {{-- <option value="hot">Hottest</option> --}}
                                            <option value="order_details_count">Best seller</option>
                                            <option value="price-asc">Price ascending</option>
                                            <option value="price-desc">Price descending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="r-part">
                                    <div class="form-group">
                                        <input type="text" class="form-control f-filter" value="" name="search"
                                            id="f-search" aria-describedby="helpId" placeholder="Search">
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- End filter --}}

                        <div id="shop-product">
                            {{-- Show product (ajax.shop-product) --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/bootstrap-slider.min.js"></script>
    <script src="{{ url('assets-frontend') }}/js/product.js"></script>
    <script src="{{ url('assets-frontend') }}/js/jquery.event.move.js"></script>

    <script>
        jQuery(document).ready(function() {
            filter(1);

            $('.f-filter').change(function() {
                filter(1);
            });
        });

        function filter(page) {
            var ajaxurl = 'filter-product';

            $.ajax({
                type: "GET",
                url: ajaxurl,
                data: {
                    _token: "{{ csrf_token() }}",
                    category_id: jQuery('#f-category').val(),
                    orderBy: jQuery('#f-order-by').val(),
                    name: jQuery('#f-search').val(),
                    page: page,
                },

                success: function(data) {
                    $('html,body').animate({
                        scrollTop: $(".breadcrumb").offset().top
                    }, 'slow');

                    console.log('filter work');
                    // console.log(data);
                    $("#shop-product").html(data);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }
    </script>
@stop
