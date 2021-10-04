<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brủh | Lmao</title>
    <link rel="apple-touch-icon" href="{{url('assets-backend')}}/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('assets-backend')}}/images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/animate-css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/chartist-js/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/chartist-js/chartist-plugin-tooltip.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/dropify/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/vendors/data-tables/css/jquery.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{url('assets-backend')}}/css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{url('assets-backend')}}/css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/pages/dashboard-modern.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/pages/intro.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/pages/app-contacts.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('assets-backend')}}/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns" data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down">
                        <i class="material-icons">search</i>
                        <input class="header-search-input z-depth-2" type="text" name="Search" placeholder="Search something (not work)" data-search="template-list">
                        <ul class="search-list collection display-none"></ul>
                    </div>
                    <ul class="navbar-list right">
                        <li class="dropdown-language">
                            <a class="waves-effect waves-block waves-light translation-button" href="#" data-target="translation-dropdown">
                                <span class="flag-icon flag-icon-gb"></span>
                            </a>
                        </li>
                        <li class="hide-on-med-and-down">
                            <a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);">
                                <i class="material-icons">settings_overscan</i>
                            </a>
                        </li>
                        <li class="hide-on-large-only search-input-wrapper">
                            <a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);">
                                <i class="material-icons">search</i>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown">
                                <i class="material-icons">notifications_none
                                    <small class="notification-badge">5</small>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown">
                                <span class="avatar-status avatar-online">
                                    <img src="{{url('upload-avatars')}}/{{Auth::user()->avatar}}" alt="avatar">
                                </span>
                            </a>
                        </li>
                        <li>
                            <a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right">
                                <i class="material-icons">format_indent_increase</i>
                            </a>
                        </li>
                    </ul>
                    <!-- translation-button-->
                    <ul class="dropdown-content" id="translation-dropdown">
                        <li class="dropdown-item">
                            <a class="grey-text text-darken-1" href="#!" data-language="en">
                                <i class="flag-icon flag-icon-gb"></i>English
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="grey-text text-darken-1" href="#!" data-language="fr">
                                <i class="flag-icon flag-icon-fr"></i>Vietnamese
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="grey-text text-darken-1" href="#!" data-language="pt">
                                <i class="flag-icon flag-icon-pt"></i>Chinese
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a class="grey-text text-darken-1" href="#!" data-language="de">
                                <i class="flag-icon flag-icon-de"></i>German
                            </a>
                        </li>
                    </ul>
                    <!-- notifications-dropdown-->
                    <ul class="dropdown-content" id="notifications-dropdown">
                        <li>
                            <h6>NOTIFICATIONS
                                <span class="new badge">5</span>
                            </h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="black-text" href="#!">
                                <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span>A new order has been placed!
                            </a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li>
                            <a class="black-text" href="#!">
                                <span class="material-icons icon-bg-circle red small">stars</span>Completed the task
                            </a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li>
                            <a class="black-text" href="#!">
                                <span class="material-icons icon-bg-circle teal small">settings</span>Settings updated
                            </a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li>
                            <a class="black-text" href="#!">
                                <span class="material-icons icon-bg-circle deep-orange small">today</span>Director meeting started
                            </a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li>
                            <a class="black-text" href="#!">
                                <span class="material-icons icon-bg-circle amber small">trending_up</span>Generate monthly report
                            </a>
                            <time class="media-meta grey-text darken-2" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown-->
                    <ul class="dropdown-content" id="profile-dropdown">
                        <!-- <li>
                            <a class="grey-text text-darken-1" href="user-profile-page.html">
                                <i class="material-icons">person_outline</i>Profile
                            </a>
                        </li>
                        <li>
                            <a class="grey-text text-darken-1" href="app-chat.html">
                                <i class="material-icons">chat_bubble_outline</i>Chat
                            </a>
                        </li>
                        <li>
                            <a class="grey-text text-darken-1" href="page-faq.html">
                                <i class="material-icons">help_outline</i>Help
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="grey-text text-darken-1" href="user-lock-screen.html">
                                <i class="material-icons">lock_outline</i>Lock
                            </a>
                        </li> -->
                        <li>
                            <a class="grey-text text-darken-1" href="{{route('logout')}}">
                                <i class="material-icons">keyboard_tab</i>Logout
                            </a>
                        </li>
                    </ul>
                </div>
                <nav class="display-none search-sm">
                    <div class="nav-wrapper">
                        <form id="navbarForm">
                            <div class="input-field search-input-sm">
                                <input class="search-box-sm mb-0" type="search" required="" id="search" placeholder="Search something (not work)" data-search="template-list">
                                <label class="label-icon" for="search">
                                    <i class="material-icons search-sm-icon">search</i>
                                </label>
                                <i class="material-icons search-sm-close">close</i>
                                <ul class="search-list collection search-list-sm display-none"></ul>
                            </div>
                        </form>
                    </div>
                </nav>
            </nav>
        </div>
    </header>
