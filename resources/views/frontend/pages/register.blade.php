@extends('frontend.master')

@section('main')

<link rel="stylesheet" href="{{url('assets-frontend')}}/css/page/login-register.css"/>

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
                <li>Register</li>
            </ul>
            <h1 class="page-tit">Register</h1>
        </div>
    </div>
</section>

<div class="content-part account-page wow fadeInUp">
    <div class="container">
        <div class="myaccount-form text-left">
            <div class="row">
                <div class="main">

                    <form class="account-form-reg">

                        <h2 class="text-left text-capitalize">Register</h2>

                        <input type="text" name="name" class="form-control required" placeholder="Your Name" required="required"/>
                        <span class="asterisk_input"></span>

                        <input type="text" name="email" class="form-control required" placeholder="Your Email" required="required"/>
                        <span class="asterisk_input"></span>

                        <input type="text" name="password" class="form-control required" placeholder="Password" required="required"/>
                        <span class="asterisk_input"></span>

                        <input type="text" name="repassword" class="form-control required" placeholder="Repeat Password" required="required"/>
                        <span class="asterisk_input"></span>

                        <button type="submit">SUBMIT</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop
