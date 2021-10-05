<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
        content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Admin Login</title>
    <link rel="apple-touch-icon" href="{{url('assets-backend')}}/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets-backend')}}/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{url('assets-backend')}}/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{url('assets-backend')}}/css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page"
    data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
        <div class="col s12">
            <div class="container">
                <div id="login-page" class="row">
                    <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                        <form class="login-form" method="POST" action="{{route('admin.postLogin')}}">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <h5 class="ml-4">Sign in</h5>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">person_outline</i>
                                    <input id="email" type="text" name="email">
                                    <label for="email" class="center-align">Email</label>
                                </div>
                            </div>
                            <div class="row margin">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix pt-2">lock_outline</i>
                                    <input id="password" type="password" name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12 ml-2 mt-1">
                                    <p>
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me</span>
                                        </label>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin medium-small">
                                        <a href="user-register.html">Register Now!</a>
                                    </p>
                                </div>
                                <div class="input-field col s6 m6 l6">
                                    <p class="margin right-align medium-small">
                                        <a href="user-forgot-password.html">Forgot password ?</a>
                                    </p>
                                </div>
                            </div> -->
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-overlay"></div>
        </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="{{url('assets-backend')}}/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="{{url('assets-backend')}}/js/plugins.min.js"></script>
    <script src="{{url('assets-backend')}}/js/search.min.js"></script>
    <script src="{{url('assets-backend')}}/js/custom/custom-script.min.js"></script>
    <!-- END THEME  JS-->
</body>

</html>
