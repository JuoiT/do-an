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
                        <div class="widget categories-widget">
                            <div class="widget-tit">
                                <h2>Categories</h2>
                                <div class="button" data-toggle="collapse" data-target="#categories">
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
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
                        </div>
                        <div class="widget top-seller-widget" data-toggle="collapse" data-target="#top-seller">
                            <div class="widget-tit">
                                <h2>top seller</h2>
                                <div class="button">
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
                                    <span class="icon-barcode"></span>
                                </div>
                            </div>
                            <div class="widget-contian" id="top-seller">
                                <div class="seller-box">
                                    <div class="seller-img">
                                        <img class="img-responsive"
                                            src="{{ url('assets-frontend') }}/images/top-seller-img-1.jpg" />
                                    </div>
                                    <div class="seller-text">
                                        <a class="seller-name" href="#">Lmao</a>
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
                                        <div class="price">$1.00</div>
                                    </div>
                                </div>
                                <div class="seller-box">
                                    <div class="seller-img">
                                        <img class="img-responsive"
                                            src="{{ url('assets-frontend') }}/images/top-seller-img-2.jpg" />
                                    </div>
                                    <div class="seller-text">
                                        <a class="seller-name" href="#">Bru</a>
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
                                        <div class="price">$2.00</div>
                                    </div>
                                </div>
                                <div class="seller-box">
                                    <div class="seller-img">
                                        <img class="img-responsive"
                                            src="{{ url('assets-frontend') }}/images/top-seller-img-3.jpg" />
                                    </div>
                                    <div class="seller-text">
                                        <a class="seller-name" href="#">Dak</a>
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
                                        <div class="price">$3.00</div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                    <a class="tag-btn" href="#">Lmao</a>
                                    <a class="tag-btn" href="#">Dảkádasd</a>
                                    <a class="tag-btn" href="#">Mlem</a>
                                    <a class="tag-btn" href="#">Mòe</a>
                                    <a class="tag-btn" href="#">Luan nv</a>
                                    <a class="tag-btn" href="#">Bla</a>
                                    <a class="tag-btn" href="#">Blu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <div class="col-md-8 col-sm-12 col-xs-12 wow fadeInRight">
                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            {{-- Start filter --}}
                            <div class="filter">
                                <div class="l-part">
                                    <div class="shorting-box-1">
                                        <label class="shorting-label">Danh mục:</label>
                                        <select id="f-category" class="f-filter">
                                            <option value="" selected>Tất cả</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="shorting-box-2">
                                        <label class="shorting-label">Lọc: </label>
                                        <select id="f-order-by" class="f-filter">
                                            <option value="created_at" selected>Mới nhất</option>
                                            {{-- <option value="hot">Sản phẩm hot</option> --}}
                                            <option value="order_details_count">Bán chạy</option>
                                            <option value="price-asc">Giá tăng dần</option>
                                            <option value="price-desc">Giá giảm dần</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="r-part">
                                    <div class="form-group">
                                        <input type="text" class="form-control f-filter" value="" name="search" id="f-search"
                                            aria-describedby="helpId" placeholder="Tìm kiếm">
                                    </div>
                                </div>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>
                    <div class="col-sm-12 col-xs-12 wow fadeInUp item">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item indicator left">
                                    <a class="page-link" href="#">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link active" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item indicator right">
                                    <a class="page-link" href="#">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
=======
                        {{-- End filter --}}

                        <div id="shop-product">
                            {{-- Show product (ajax.shop-product)  --}}

                        </div>
>>>>>>> bf96f3b1822add2ab26bd4e1018a870e9d40f523
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop

@section('script')
    <script src="{{ url('assets-frontend') }}/js/bootstrap-slider.min.js"></script>
    <script src="{{ url('assets-frontend') }}/js/product.js"></script>

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
