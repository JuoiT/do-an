@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/blog-detail.css" />

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" />
</section>
<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('blog')}}">Blog</a></li>
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
                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/blog-detail-main-img.jpg" />
                </div>
                <div class="blog-txt wow fadeInUp">
                    <ul>
                        <li><a href="#"><i class="icon-clock"></i>July 30, 2021</a></li>
                        <li><a href="#"><i class="icon-interface"></i>3 Comments</a></li>
                    </ul>
                    <h2 class="text-left wow fadeInUp">Luan nv Bru Lmao</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                        numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                        officiis obcaecati. Delectus, quaerat voluptates?
                    </p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                        numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                        officiis obcaecati. Delectus, quaerat voluptates?
                    </p>
                    <section class="middle-section">
                        <div class="row">
                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 pull-right   wow fadeInRight">
                                <div class="youtube-video">
                                    <img class="img-responsive" src="{{url('assets-frontend')}}/images/video-img.jpg" />
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 pull-left   wow fadeInLeft">
                                <div class="tit">
                                    <h3>Mòe lol</h3>
                                </div>
                                <ul class="talk-about-list">
                                    <li>Luan nv Bru</li>
                                    <li>Luan nv Lmao</li>
                                    <li>Luan nv Dak</li>
                                    <li>Bla Bla</li>
                                    <li>Blu Bla</li>
                                    <li>Bru</li>
                                    <li>Lmao</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="bottom-section">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12   wow fadeInUp">
                                <h4>Ảo ma canada</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                                    numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                                    officiis obcaecati. Delectus, quaerat voluptates?
                                </p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                                    numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                                    officiis obcaecati. Delectus, quaerat voluptates?
                                </p>
                                <div class="share-section">
                                    <div class="tag-part">
                                        <ul>
                                            <li><a href="#">Bru</a></li>
                                            <li><a href="#">Lmao</a></li>
                                            <li><a href="#">Dak</a></li>
                                        </ul>
                                    </div>
                                    <div class="social-part">
                                        <label>Share Link:</label>
                                        <ul class="social">
                                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-google-plus"></i></a></li>
                                            <li><a href="#"><i class="icon-pinterest"></i></a></li>
                                            <li><a href="#"><i class="icon-youtube"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="comment-section">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12   wow fadeInUp">
                                <div class="tit">
                                    <h3>3 Comments</h3>
                                </div>
                                <div class="comment-box">
                                    <div class="icon-part">
                                        <img class="img-responsive"
                                            src="{{url('assets-frontend')}}/images/user-icon.png" />
                                    </div>
                                    <div class="comment-part">
                                        <div class="top-part">
                                            <div class="l-part">
                                                <div class="date">August 01, 2021</div>
                                                <div class="user-name">Mòe lol</div>
                                            </div>
                                            <div class="r-part">
                                                <a class="btn replay-btn" href="#">reply</a>
                                            </div>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                                                numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                                                officiis obcaecati. Delectus, quaerat voluptates?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="icon-part">
                                        <img class="img-responsive"
                                            src="{{url('assets-frontend')}}/images/user-icon.png" />
                                    </div>
                                    <div class="comment-part">
                                        <div class="top-part">
                                            <div class="l-part">
                                                <div class="date">August 01, 2021</div>
                                                <div class="user-name">Chó ngu</div>
                                            </div>
                                            <div class="r-part">
                                                <a class="btn replay-btn" href="#">reply</a>
                                            </div>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                                                numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                                                officiis obcaecati. Delectus, quaerat voluptates?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-box">
                                    <div class="icon-part">
                                        <img class="img-responsive"
                                            src="{{url('assets-frontend')}}/images/user-icon.png" />
                                    </div>
                                    <div class="comment-part">
                                        <div class="top-part">
                                            <div class="l-part">
                                                <div class="date">August 01, 2021</div>
                                                <div class="user-name">Bò ngu</div>
                                            </div>
                                            <div class="r-part">
                                                <a class="btn replay-btn" href="#">reply</a>
                                            </div>
                                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum repellat quos soluta ut? Dolor
                                                numquam, incidunt accusantium impedit, itaque earum vel soluta provident molestias aperiam
                                                officiis obcaecati. Delectus, quaerat voluptates?
                                            </p>
                                        </div>
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
                                <form action="#">
                                    <div class="form-group col-sm-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Name" />
                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Email" />
                                    </div>
                                    <div class="form-group col-sm-4 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Website" />
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
                            <form role="search" method="get" id="searchform" class="searchform" action="#">
                                <div>
                                    <input type="text" placeholder="Search here..." value="">
                                    <input type="submit" id="searchsubmit" value="">
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
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-1.jpg" />
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">Mòe lol</a> </br>
                                <a href="#" class="blog-date"><i class="icon-clock"></i>July 30, 2021</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-4.jpg" />
                            </div>
                            <div class="txt-part">

                                <a class="blog-tit" href="#">Dak Lmao</a> </br>
                                <a href="#" class="blog-date"><i class="icon-clock"></i>July 15, 2021</a>
                            </div>
                        </div>
                        <div class="box">
                            <div class="img-part">
                                <img class="img-fluid" src="{{url('assets-frontend')}}/images/blog-7.jpg" />
                            </div>
                            <div class="txt-part">
                                <a class="blog-tit" href="#">Bla Bla Blu Blu</a> </br>
                                <a href="#" class="blog-date"><i class="icon-clock"></i>July 1, 2021</a>
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
                                    <div class="post-cetegory-header"><a class="" href="#">Fresh Fruits (8)</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">Vegetables (13)</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">Lmao (8)</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">Bru (8)</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">Dak (11)</a></div>
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
                                <li><a href="#">Fresh Fruit</a></li>
                                <li><a href="#">Vegetables</a></li>
                                <li><a href="#">Nut</a></li>
                                <li><a href="#">Organic foods</a></li>
                                <li><a href="#">Luan nv</a></li>
                                <li><a href="#">Bru</a></li>
                                <li><a href="#">Lmao</a></li>
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
                                    <div class="post-cetegory-header"><a class="" href="#">August 2021</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">July 2021</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">June 2021</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">May 2021</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">April 2021</a></div>
                                </li>
                                <li>
                                    <div class="post-cetegory-header"><a class="" href="#">Mảch 2021</a></div>
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
