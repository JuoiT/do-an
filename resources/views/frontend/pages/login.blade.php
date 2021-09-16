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
                <li>Login</li>
            </ul>
            <h1 class="page-tit">Login</h1>
        </div>
    </div>
</section>

<div class="content-part account-page wow fadeInUp">
    <div class="container">
        <div class="myaccount-form text-left">
            <div class="row">
                <div class="main">

                    <form class="account-form-login">

                        <h2 class="text-left text-capitalize">Login</h2>

                        <input type="text" name="email" class="form-control" placeholder="Your Email"/>

                        <input type="text" name="password" class="form-control" placeholder="Password"/>

                        <label>
                            <input name="" type="checkbox">
                            <a> Remember me</a>
                        </label>

                        <label class="pull-right">
                            <input name="" type="checkbox">
                            <a> Forgot your Password</a>
                        </label>

                        <button type="submit">LOGIN</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@stop
