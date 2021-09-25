@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/contact.css"/>

<section class="sub-banner wow fadeInUp">
    <img class="banner" src="{{url('assets-frontend')}}/images/cart-page-banner.jpg" />
</section>

<section class="breadcrumb-section wow fadeInUp">
    <div class="container">
        <div class="breadcrumb">
            <ul class="list-inline">
                <li>
                    <a href="{{route('home')}}">Home</a>
                </li>
                <li>Contact Us</li>
            </ul>
            <h1 class="page-tit">Contact Us</h1>
        </div>
    </div>
</section>

<div class="content-part contact-page">
    <section class="address-part wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="logo-part">
                    <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/contact-page-logo.png" />
                </div>
                <div class="inner-part">
                    <div class="box address-box">
                        <div class="icon-part">
                            <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/location-icon.png" />
                        </div>
                        <div class="tit">
                            <h3>address</h3>
                            <p>63739 Street, Lorem Ipsum<br />Dolor132/B. City, Country</p>
                        </div>
                    </div>
                    <div class="box phone-box">
                        <div class="icon-part">
                            <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/phone-icon.png" />
                        </div>
                        <div class="tit">
                            <h3>Phone</h3>
                            <p><a href="tel:+11233123223">+1 123 312 32 23</a></p>
                        </div>
                    </div>
                    <div class="box email-box">
                        <div class="icon-part">
                            <img class="img-responsive center-block" src="{{url('assets-frontend')}}/images/message-icon.png" />
                        </div>
                        <div class="tit">
                            <h3>email</h3>
                            <p><a href="mailto:info@company.com">info@company.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="map-form">
        <div class="row">
            <div class="col-sm-6 col-xs-12 form-part equal-height wow fadeInLeft">
                <div class="inner-part">
                    <div class="tit">
                        <h3><span>get in touch</span> with us</h3>
                    </div>
                    <form action="#">
                        <div class="form-group col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Name" />
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <input type="text" class="form-control" placeholder="Phone" />
                        </div>
                        <div class="form-group col-sm-12 col-xs-12">
                            <textarea class="form-control" placeholder="Comments"></textarea>
                            <button class="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 map-section equal-height wow fadeInRight">
                <img class="img-responsive" src="{{url('assets-frontend')}}/images/map.jpg">
            </div>
        </div>
    </section>
</div>

@stop
@section('script')
<script src="{{url('assets-frontend')}}/js/contact.js"></script>
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
@endsection
