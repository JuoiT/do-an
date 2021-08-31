<script>
var x = location.href;
</script>
<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper">
            <a class="brand-logo darken-1" href="index.html">
                <img class="hide-on-med-and-down" src="{{url('assets-backend')}}/images/logo/materialize-logo-color.png" alt="materialize logo" />
                <img class="show-on-medium-and-down hide-on-med-and-up" src="{{url('assets-backend')}}/images/logo/materialize-logo.png" alt="materialize logo" />
                <span class="logo-text hide-on-med-and-down">Brủh Lmao</span>
            </a>
            <a class="navbar-toggler" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">

        <!-- Chuyển đến cửa hàng -->

        <li class="bold">
            <a class="waves-effect waves-cyan" href="{{route('home')}}">
                <i class="material-icons">storefront</i>
                <span class="menu-title" data-i18n="Chat">Shop</span>
            </a>
        </li>

        <!-- Home admin -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin') ? 'active' : ''}} bold">
            <a class="waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin') ? 'active' : ''}}" href="{{route('home_admin')}}">
                <i class="material-icons">home</i>
                <span class="menu-title" data-i18n="Chat">Trang chủ</span>
            </a>
        </li>

        <!-- Danh mục -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/category'|Request::url() === 'http://127.0.0.1:8000/admin/category/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/category'|Request::url() === 'http://127.0.0.1:8000/admin/category/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">settings_input_svideo</i>
                <span class="menu-title" data-i18n="Dashboard">Danh mục</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/category') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/category') ? 'active' : ''}}" href="{{route('category.index')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách danh mục</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/category/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/category/create') ? 'active' : ''}}" href="{{route('category.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Thêm mới danh mục</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Sản phẩm -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/product'|Request::url() === 'http://127.0.0.1:8000/admin/product/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/product'|Request::url() === 'http://127.0.0.1:8000/admin/product/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">dvr</i>
                <span class="menu-title" data-i18n="Templates">Sản phẩm</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/product') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/product') ? 'active' : ''}}" href="{{route('product.index')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách sản phẩm</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/product/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/product/create') ? 'active' : ''}}" href="{{route('product.create')}}">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Thêm mới sản phẩm</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- People -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/user'|Request::url() === 'http://127.0.0.1:8000/admin/user/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/user'|Request::url() === 'http://127.0.0.1:8000/admin/user/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">people</i>
                <span class="menu-title" data-i18n="Dashboard">People</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/user') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/user') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách users</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/user/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/user/create') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Thêm mới users</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Banner -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/banner'|Request::url() === 'http://127.0.0.1:8000/admin/banner/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/banner'|Request::url() === 'http://127.0.0.1:8000/admin/banner/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">palette</i>
                <span class="menu-title" data-i18n="Dashboard">Banners</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/banner') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/banner') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách banner</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/banner/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/banner/create') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Thêm mới banner</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Slide -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/slide'|Request::url() === 'http://127.0.0.1:8000/admin/slide/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/slide'|Request::url() === 'http://127.0.0.1:8000/admin/slide/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">slideshow</i>
                <span class="menu-title" data-i18n="Dashboard">Slides</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/slide') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/slide') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách slide</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/slide/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/slide/create') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Thêm mới slide</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Blogs -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/blog'|Request::url() === 'http://127.0.0.1:8000/admin/blog/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/blog'|Request::url() === 'http://127.0.0.1:8000/admin/blog/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">description</i>
                <span class="menu-title" data-i18n="Dashboard">Blogs</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/blog') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/blog') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách blogs</span>
                        </a>
                    </li>
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/blog/create') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/blog/create') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="eCommerce">Thêm mới blog</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Order -->

        <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/order'|Request::url() === 'http://127.0.0.1:8000/admin/order/create') ? 'active' : ''}} bold">
            <a class="collapsible-header waves-effect waves-cyan {{(Request::url() === 'http://127.0.0.1:8000/admin/order'|Request::url() === 'http://127.0.0.1:8000/admin/order/create') ? 'active' : ''}}" href="JavaScript:void(0)">
                <i class="material-icons">menu_book</i>
                <span class="menu-title" data-i18n="Dashboard">Orders</span>
            </a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">
                    <li class="{{(Request::url() === 'http://127.0.0.1:8000/admin/order') ? 'active' : ''}}">
                        <a class="{{(Request::url() === 'http://127.0.0.1:8000/admin/order') ? 'active' : ''}}" href="">
                            <i class="material-icons">radio_button_unchecked</i>
                            <span data-i18n="Modern">Danh sách order</span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
    <div class="navigation-background"></div>
    <a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out">
        <i class="material-icons">menu</i>
    </a>
</aside>
<div id="main">
    <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
            <div class="container">
