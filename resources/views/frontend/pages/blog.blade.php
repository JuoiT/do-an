@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/blog.css"/>

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg"/>
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Blog</li>
            </ul>
            <h1 class="page-tit">Blog</h1>
        </div>
    </div>
</section>

<div class="content-part blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 blog">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-1.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>July 30, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>3 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Luan nv Bru Lmao</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-2.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>July 15, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>2 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Luan nv cốc bự</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-3.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>July 1, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>4 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Luan nv Dảk</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-4.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>June 30, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>3 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Luan nv mòe</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-5.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>June 15, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>6 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Dảk Brủh Lmao</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-6.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>June 1, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>2 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Bla Bla</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-7.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>May 30, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>2 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Bla Blu</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-8.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>May 15, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>1 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Lmao Lmao</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12  wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-9.jpg" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>May 1, 2021
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-interface"></i>3 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail')}}">Mòe lol</a>
                                </h2>
                                <a href="{{route('blog_detail')}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-nav">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="pagination text-center">
                                <a class="left" href="#">
                                    <i class="icon-right-arrow"></i>
                                </a>
                                <a class="active" href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a class="right" href="#">
                                    <i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm-down">
                <aside id="blog_sidebar">
                    <div class="blog_widget wow fadeInUp search-widget">
                        <div class="widget-content">
                            <form action="" method="POST" role="search" id="searchform" class="searchform">
                                <div>
                                    <input type="text" placeholder="Search here..." value="">
                                    <button type="submit" id="searchsubmit" value=""></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="blog_sidebar_widget wow fadeInUp popular-product-widget">
                        <div class="widget-title">
                            <h2 class="blog-header text-left">Recent Post</h2>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-1.jpg"/>
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">Luan nv Brủh vờ lờ</a>
                                </br>
                                <a href="#" class="blog-date">
                                    <i class="icon-clock"></i>July 30, 2021
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-4.jpg"/>
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">Bla Bla</a>
                                </br>
                                <a href="#" class="blog-date">
                                    <i class="icon-clock"></i>July 15, 2021
                                </a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-7.jpg"/>
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">Lmao</a>
                                </br>
                                <a href="#" class="blog-date">
                                    <i class="icon-clock"></i>July 1, 2021
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="blog_sidebar_widget wow fadeInUp popular-product-widget">
                        <div class="widget-title">
                            <h2 class="blog-header text-left">cetegory</h2>
                        </div>
                        <div class="post-cetegory">
                            <ul>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Fresh Fruits (8)</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Vegetables (13)</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Lmao (8)</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Bru (8)</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Dak (11)</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="blog_sidebar_widget wow fadeInUp popular-product-widget">
                        <div class="widget-title">
                            <h2 class="blog-header text-left">Tags</h2>
                        </div>
                        <div class="post-tag">
                            <ul>
                                <li>
                                    <a href="#">Fresh Fruit</a>
                                </li>
                                <li>
                                    <a href="#">Vegetables</a>
                                </li>
                                <li>
                                    <a href="#">Nut</a>
                                </li>
                                <li>
                                    <a href="#">Organic foods</a>
                                </li>
                                <li>
                                    <a href="#">Luan nv</a>
                                </li>
                                <li>
                                    <a href="#">Bru</a>
                                </li>
                                <li>
                                    <a href="#">Lmao</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <div class="blog_sidebar_widget wow fadeInUp popular-product-widget">
                        <div class="widget-title">
                            <h2 class="blog-header text-left">Archives</h2>
                        </div>
                        <div class="post-cetegory">
                            <ul>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">August 2021</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">July 2021</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">June 2021</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">May 2021</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">April 2021</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header">
                                        <a class="" href="#">Mảch 2021</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

@stop
@section('script')
<script src="{{url('assets-frontend')}}/js/jquery.matchHeight-min.js"></script>
<script src="{{url('assets-frontend')}}/js/blog.js"></script>
@stop