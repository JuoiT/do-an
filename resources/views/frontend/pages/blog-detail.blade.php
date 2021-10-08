@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/blog-detail.css"/>

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
                <li>
                    <a href="{{route('blog')}}">Blog</a>
                </li>
                <li>Blog Detail</li>
            </ul>
            <h1 class="page-tit">Blog Detail</h1>
        </div>
    </div>
</section>

<div class="content-part blog-page">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 blog-detail">
                <div class="blog-img wow fadeInUp">
                    <img class="img-responsive" src="{{url('upload-blogs')}}/{{$blog_detail->avatar}}"/>
                </div>
                <div class="blog-txt wow fadeInUp">
                    <ul>
                        <li>
                            <a>
                                <i class="icon-clock"></i>{{$blog_detail->created_at}}
                            </a>
                        </li>
                        <li>
                            <a>
                                <i class="icon-commenting-o"></i>3 Comments
                            </a>
                        </li>
                    </ul>
                    <h2 class="text-left wow fadeInUp">{{$blog_detail->title}}</h2>


                    <section class="bottom-section">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInUp">
                                <p>{{!! $blog_detail->content !!}}
                                </p>
                                <div class="share-section">
                                    <div class="social-part">
                                        <label>Share Link:</label>
                                        <ul class="social">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-facebook"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-google"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-pinterest"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="icon-youtube-play"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="form-section wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="tit">
                                    <h3>Leave a Comment</h3>
                                    <p class="slogan">Your email address will not be published.</p>
                                </div>
                                <form action="" method="POST">
                                    <div class="form-group col-sm-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Name"/>
                                    </div>
                                    <div class="form-group col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Email"/>
                                    </div>
                                    <div class="form-group col-sm-12 col-xs-12">
                                        <textarea class="form-control" placeholder="Your Comment"></textarea>
                                        <button class="submit">Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
            <div class="col-md-3 hidden-sm-down">
                <aside id="blog_sidebar">
                    <div class="blog_widget wow fadeInUp search-widget">
                        <div class="widget-content">
                            <form action="" method="POST" role="search" id="searchform" class="searchform">
                                <div>
                                    <input type="text" placeholder="Search here..." value="">
                                    <button type="submit" id="searchsubmit"></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="blog_sidebar_widget wow fadeInUp popular-product-widget">
                        <div class="widget-title">
                            <h2 class="blog-header text-left">New Post</h2>
                        </div>
                        @foreach($new_blog as $value)
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('upload-blogs')}}/{{$value->avatar}}"/>
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">{{$value->title}}</a>
                                </br>
                                <a href="#" class="blog-date">
                                    <i class="icon-clock"></i>{{$value->created_at}}
                                </a>
                            </div>
                        </div>
                        @endforeach
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
                                        <a class="" href="#">March 2021</a>
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
<script src="{{url('assets-frontend')}}/js/blog-detail.js"></script>
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
@endsection
