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
                    @foreach($list_blog as $value)
                    <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp blog-list-detail">
                        <div class="blog-list">
                            <figure>
                                <img class="img-responsive" src="{{url('upload-blogs')}}/{{$value->avatar}}" alt=""/>
                            </figure>
                            <div class="blog-info">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="icon-clock"></i>{{$value->created_at}}
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon-commenting-o"></i>300 Comments
                                        </a>
                                    </li>
                                </ul>
                                <h2 class="text-left text-uppercase">
                                    <a href="{{route('blog_detail', $value->id)}}">{{$value->title}}</a>
                                </h2>
                                <a href="{{route('blog_detail', $value->id)}}" class="rd-mr text-uppercase">read more</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="blog-nav">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="pagination text-center">
                                @if ($list_blog->currentPage() != 1)
                                    <a href="{{ $list_blog->previousPageUrl() }}" class="left">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                @endif
                                @for ($i = 1; $i <= $list_blog->lastpage(); $i++)
                                    <a href="{{ $list_blog->url($i) }}" class="{{ $i == $list_blog->currentPage() ? 'active' : '' }}">{{ $i }}</a>
                                @endfor
                                @if ($list_blog->currentPage() != $list_blog->lastpage())
                                    <a href="{{ $list_blog->nextPageUrl() }}" class="right">
                                        <i class="icon-angle-right"></i>
                                    </a>
                                @endif
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
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
<script src="{{url('assets-frontend')}}/js/blog.js"></script>
@stop
