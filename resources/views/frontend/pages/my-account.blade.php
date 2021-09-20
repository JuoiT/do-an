@extends('frontend.master')

@section('main')

<link href="{{url('assets-frontend')}}/css/page/my_account.css" rel="stylesheet"/>
<link href="{{url('assets-frontend')}}/css/library/fontello-1.css" rel="stylesheet"/>

<section class="fress-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 lpart wow slideInLeft">
                <div class="bg equal-height ">
                    <div class="my-account">
                        <div class="avatar">
                            <a href="#">
                                <img src="{{url('assets-frontend')}}/images/blog-9.jpg" alt="">
                            </a>
                        </div>
                        <div class="content">
                            <div class="name-info">
                                <p>Luan nv</p>
                            </div>
                            <!-- <div class="edit-info">
                                <a href="">
                                    <i class="icon-pencil"></i>Edit Profile
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="sidebar-acc">
                        <ul id="myBtnContainer" class="sidebar">
                            <li>
                                <button class="btn" onclick="filterSelection('my_account')">
                                    <i class="icon-user-o"></i>My account
                                </button>
                            </li>
                            <li>
                                <button class="btn active" onclick="filterSelection('order')">
                                    <i class="icon-doc-text"></i>Order
                                </button>
                            </li>
                            <li>
                                <button class="btn" onclick="filterSelection('notification')">
                                    <i class="icon-bell"></i>Notification
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 rpart wow slideInRight">
                <div class="bg equal-height">
                    <div class="filterDiv my_account">
                        <div class="content">
                            <p>My account</p>
                        </div>
                        <div class="info">
                            <div class="my-info">

                                <form class="account-form">

                                    <input type="text" name="name" class="form-control required" placeholder="Your Name" required="required"/>
                                    <span class="asterisk_input"></span>

                                    <input type="text" name="email" class="form-control required" placeholder="Your Email" required="required"/>
                                    <span class="asterisk_input"></span>

                                    <input type="text" name="phone" class="form-control required" placeholder="Your Phone Number" required="required"/>
                                    <span class="asterisk_input"></span>

                                    <input type="text" name="password" class="form-control required" placeholder="Password" required="required"/>
                                    <span class="asterisk_input"></span>

                                    <input type="text" name="repassword" class="form-control required" placeholder="Repeat Password" required="required"/>
                                    <span class="asterisk_input"></span>

                                    <button type="submit">SAVE</button>

                                    </form>

                            </div>
                            <div class="my-avatar">
                                <div class="avatar">
                                    <div class="avatar-img">
                                        <img src="{{url('assets-frontend')}}/images/blog-9.jpg" alt="">
                                    </div>
                                    <div class="edit-avatar">
                                        <input type="file" name="file" id="file" class="inputfile"/>
                                        <label for="file">Choose a file</label>

                                        <button type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filterDiv order">
                        <ul id="myBtnOrder" class="sidebar">
                            <li>
                                <button class="btn" onclick="filterSelection('confirmation')">
                                    <i class="icon-user-o"></i>My account
                                </button>
                            </li>
                            <li>
                                <button class="btn active" onclick="filterSelection('waiting')">
                                    <i class="icon-doc-text"></i>Order
                                </button>
                            </li>
                            <li>
                                <button class="btn" onclick="filterSelection('delivering')">
                                    <i class="icon-bell"></i>Notification
                                </button>
                            </li>
                            <li>
                                <button class="btn" onclick="filterSelection('delivered')">
                                    <i class="icon-bell"></i>Notification
                                </button>
                            </li>
                            <li>
                                <button class="btn" onclick="filterSelection('cancelled')">
                                    <i class="icon-bell"></i>Notification
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="filterDiv notification">c</div>
                </div>
            </div>
        </div>
</section>
<div class="clearfix"></div>

@stop

@section('script')
<script src="{{url('assets-frontend')}}/js/responsive-slider.js"></script>
<script src="{{url('assets-frontend')}}/js/jquery.event.move.js"></script>
<script src="{{url('assets-frontend')}}/js/my_account.js"></script>

@stop
