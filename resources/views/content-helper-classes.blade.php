<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Helper Classes - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/ui/prism.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu navbar-fixed navbar-shadow navbar-brand-center">
        <div class="navbar-header d-xl-block d-none">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                        <div class="brand-logo"></div>
                    </a></li>
            </ul>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav bookmark-icons">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                <div class="bookmark-input search-input">
                                    <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="0" data-search="template-list">
                                    <ul class="search-list search-list-bookmark"></ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-us"></i><span class="selected-language">English</span></a>
                            <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item" href="#" data-language="en"><i class="flag-icon flag-icon-us"></i> English</a><a class="dropdown-item" href="#" data-language="fr"><i class="flag-icon flag-icon-fr"></i> French</a><a class="dropdown-item" href="#" data-language="de"><i class="flag-icon flag-icon-de"></i> German</a><a class="dropdown-item" href="#" data-language="pt"><i class="flag-icon flag-icon-pt"></i> Portuguese</a></div>
                        </li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>
                            <div class="search-input">
                                <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                <input class="input" type="text" placeholder="Explore Vuexy..." tabindex="-1" data-search="template-list">
                                <div class="search-input-close"><i class="feather icon-x"></i></div>
                                <ul class="search-list search-list-main"></ul>
                            </div>
                        </li>
                        <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <div class="dropdown-header m-0 p-2">
                                        <h3 class="white">5 New</h3><span class="notification-title">App Notifications</span>
                                    </div>
                                </li>
                                <li class="scrollable-container media-list"><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                            <div class="media-body">
                                                <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hours ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                            <div class="media-body">
                                                <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                            <div class="media-body">
                                                <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                            <div class="media-body">
                                                <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                        </div>
                                    </a><a class="d-flex justify-content-between" href="javascript:void(0)">
                                        <div class="media d-flex align-items-start">
                                            <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                            <div class="media-body">
                                                <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                            </div><small>
                                                <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">John Doe</span><span class="user-status">Available</span></div><span><img class="round" src="../../../app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a><a class="dropdown-item" href="app-email.html"><i class="feather icon-mail"></i> My Inbox</a><a class="dropdown-item" href="app-todo.html"><i class="feather icon-check-square"></i> Task</a><a class="dropdown-item" href="app-chat.html"><i class="feather icon-message-square"></i> Chats</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="auth-login.html"><i class="feather icon-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <ul class="main-search-list-defaultlist d-none">
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Files</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/xls.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/jpg.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/pdf.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100" href="#">
                <div class="d-flex">
                    <div class="mr-50"><img src="../../../app-assets/images/icons/doc.png" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna_Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
            </a></li>
        <li class="d-flex align-items-center"><a class="pb-25" href="#">
                <h6 class="text-primary mb-0">Members</h6>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-8.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd Developer</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-14.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Milena Gibson</p><small class="text-muted">Digital Marketing Manager</small>
                    </div>
                </div>
            </a></li>
        <li class="auto-suggestion d-flex align-items-center cursor-pointer"><a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
                <div class="d-flex align-items-center">
                    <div class="avatar mr-50"><img src="../../../app-assets/images/portrait/small/avatar-s-6.jpg" alt="png" height="32"></div>
                    <div class="search-data">
                        <p class="search-data-title mb-0">Anna Strong</p><small class="text-muted">Web Designer</small>
                    </div>
                </div>
            </a></li>
    </ul>
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/horizontal-menu-template/index.html">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content" data-menu="menu-container">
                <!-- include ../../../includes/mixins-->
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html" data-toggle="dropdown"><i class="feather icon-home"></i><span data-i18n="Dashboard">Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-activity"></i>Analytics</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html" data-toggle="dropdown" data-i18n="eCommerce"><i class="feather icon-shopping-cart"></i>eCommerce</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-package"></i><span data-i18n="Apps">Apps</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle="dropdown" data-i18n="Email"><i class="feather icon-mail"></i>Email</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle="dropdown" data-i18n="Chat"><i class="feather icon-message-square"></i>Chat</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown" data-i18n="Todo"><i class="feather icon-check-square"></i>Todo</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-calender.html" data-toggle="dropdown" data-i18n="Calender"><i class="feather icon-calendar"></i>Calender</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Ecommerce"><i class="feather icon-shopping-cart"></i>Ecommerce</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-shop.html" data-toggle="dropdown" data-i18n="Shop"><i class="feather icon-circle"></i>Shop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-details.html" data-toggle="dropdown" data-i18n="Details"><i class="feather icon-circle"></i>Details</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-wishlist.html" data-toggle="dropdown" data-i18n="Wish List"><i class="feather icon-circle"></i>Wish List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-checkout.html" data-toggle="dropdown" data-i18n="Checkout"><i class="feather icon-circle"></i>Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="User"><i class="feather icon-user"></i>User</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-user-list.html" data-toggle="dropdown" data-i18n="List"><i class="feather icon-circle"></i>List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-view.html" data-toggle="dropdown" data-i18n="View"><i class="feather icon-circle"></i>View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-edit.html" data-toggle="dropdown" data-i18n="Edit"><i class="feather icon-circle"></i>Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-layers"></i><span data-i18n="UI Elements">UI Elements</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Data List"><i class="feather icon-list"></i>Data List</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="data-list-view.html" data-toggle="dropdown" data-i18n="List View"><i class="feather icon-circle"></i>List View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="data-thumb-view.html" data-toggle="dropdown" data-i18n="Thumb View"><i class="feather icon-circle"></i>Thumb View</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Content"><i class="feather icon-layout"></i>Content</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="content-grid.html" data-toggle="dropdown" data-i18n="Grid"><i class="feather icon-circle"></i>Grid</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-typography.html" data-toggle="dropdown" data-i18n="Typography"><i class="feather icon-circle"></i>Typography</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html" data-toggle="dropdown" data-i18n="Text Utilities"><i class="feather icon-circle"></i>Text Utilities</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html" data-toggle="dropdown" data-i18n="Syntax Highlighter"><i class="feather icon-circle"></i>Syntax Highlighter</a>
                                    </li>
                                    <li class="active" data-menu=""><a class="dropdown-item" href="content-helper-classes.html" data-toggle="dropdown" data-i18n="Helper Classes"><i class="feather icon-circle"></i>Helper Classes</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="colors.html" data-toggle="dropdown" data-i18n="Colors"><i class="feather icon-droplet"></i>Colors</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Cards"><i class="feather icon-credit-card"></i>Cards</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="card-basic.html" data-toggle="dropdown" data-i18n="Basic"><i class="feather icon-circle"></i>Basic</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-advance.html" data-toggle="dropdown" data-i18n="Advance"><i class="feather icon-circle"></i>Advance</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-statistics.html" data-toggle="dropdown" data-i18n="Statistics"><i class="feather icon-circle"></i>Statistics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-analytics.html" data-toggle="dropdown" data-i18n="Analytics"><i class="feather icon-circle"></i>Analytics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-actions.html" data-toggle="dropdown" data-i18n="Card Actions"><i class="feather icon-circle"></i>Card Actions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Icons"><i class="feather icon-eye"></i>Icons</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="icons-feather.html" data-toggle="dropdown" data-i18n="Feather"><i class="feather icon-circle"></i>Feather</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="icons-font-awesome.html" data-toggle="dropdown" data-i18n="Font Awesome"><i class="feather icon-circle"></i>Font Awesome</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Components"><i class="feather icon-briefcase"></i>Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="component-alerts.html" data-toggle="dropdown" data-i18n="Alerts"><i class="feather icon-circle"></i>Alerts</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html" data-toggle="dropdown" data-i18n="Buttons"><i class="feather icon-circle"></i>Buttons</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-breadcrumbs.html" data-toggle="dropdown" data-i18n="Breadcrumbs"><i class="feather icon-circle"></i>Breadcrumbs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-carousel.html" data-toggle="dropdown" data-i18n="Carousel"><i class="feather icon-circle"></i>Carousel</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-collapse.html" data-toggle="dropdown" data-i18n="Collapse"><i class="feather icon-circle"></i>Collapse</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html" data-toggle="dropdown" data-i18n="Dropdowns"><i class="feather icon-circle"></i>Dropdowns</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-list-group.html" data-toggle="dropdown" data-i18n="List Group"><i class="feather icon-circle"></i>List Group</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-modals.html" data-toggle="dropdown" data-i18n="Modals"><i class="feather icon-circle"></i>Modals</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pagination.html" data-toggle="dropdown" data-i18n="Pagination"><i class="feather icon-circle"></i>Pagination</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navs-component.html" data-toggle="dropdown" data-i18n="Navs Component"><i class="feather icon-circle"></i>Navs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navbar.html" data-toggle="dropdown" data-i18n="Navbar"><i class="feather icon-circle"></i>Navbar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html" data-toggle="dropdown" data-i18n="Tabs Component"><i class="feather icon-circle"></i>Tabs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pills-component.html" data-toggle="dropdown" data-i18n="Pills Component"><i class="feather icon-circle"></i>Pills Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tooltips.html" data-toggle="dropdown" data-i18n="Tooltips"><i class="feather icon-circle"></i>Tooltips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-popovers.html" data-toggle="dropdown" data-i18n="Popovers"><i class="feather icon-circle"></i>Popovers</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-badges.html" data-toggle="dropdown" data-i18n="Badges"><i class="feather icon-circle"></i>Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html" data-toggle="dropdown" data-i18n="Pill Badges"><i class="feather icon-circle"></i>Pill Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-progress.html" data-toggle="dropdown" data-i18n="Progress"><i class="feather icon-circle"></i>Progress</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-media-objects.html" data-toggle="dropdown" data-i18n=""><i class="feather icon-circle"></i>Media Objects</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-spinner.html" data-toggle="dropdown" data-i18n="Spinner"><i class="feather icon-circle"></i>Spinner</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-bs-toast.html" data-toggle="dropdown" data-i18n="Toasts"><i class="feather icon-circle"></i>Toasts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Extra Components"><i class="feather icon-box"></i>Extra Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-avatar.html" data-toggle="dropdown" data-i18n="Avatar"><i class="feather icon-circle"></i>Avatar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-chips.html" data-toggle="dropdown" data-i18n="Chips"><i class="feather icon-circle"></i>Chips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-divider.html" data-toggle="dropdown" data-i18n="Divider"><i class="feather icon-circle"></i>Divider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Extensions"><i class="feather icon-box"></i>Extensions</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-sweet-alerts.html" data-toggle="dropdown" data-i18n="Sweet Alert"><i class="feather icon-circle"></i>Sweet Alert</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-toastr.html" data-toggle="dropdown" data-i18n="Toastr"><i class="feather icon-circle"></i>Toastr</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-noui-slider.html" data-toggle="dropdown" data-i18n="NoUi Slider"><i class="feather icon-circle"></i>NoUi Slider</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-file-uploader.html" data-toggle="dropdown" data-i18n="File Uploader"><i class="feather icon-circle"></i>File Uploader</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-quill-editor.html" data-toggle="dropdown" data-i18n="Quill Editor"><i class="feather icon-circle"></i>Quill Editor</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-drag-drop.html" data-toggle="dropdown" data-i18n="Drag &amp; Drop"><i class="feather icon-circle"></i>Drag &amp; Drop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-tour.html" data-toggle="dropdown" data-i18n="Tour"><i class="feather icon-circle"></i>Tour</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-clipboard.html" data-toggle="dropdown" data-i18n="Clipboard"><i class="feather icon-circle"></i>Clipboard</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-plyr.html" data-toggle="dropdown" data-i18n="Media Player"><i class="feather icon-circle"></i>Media Player</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-context-menu.html" data-toggle="dropdown" data-i18n="Context Menu"><i class="feather icon-circle"></i>Context Menu</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-swiper.html" data-toggle="dropdown" data-i18n="swiper"><i class="feather icon-smartphone"></i>swiper</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-i18n.html" data-toggle="dropdown" data-i18n="l18n"><i class="feather icon-circle"></i>l18n</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-edit-2"></i><span data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Form Elements"><i class="feather icon-copy"></i>Form Elements</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="form-select.html" data-toggle="dropdown" data-i18n="Select"><i class="feather icon-circle"></i>Select</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-switch.html" data-toggle="dropdown" data-i18n="Switch"><i class="feather icon-circle"></i>Switch</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-checkbox.html" data-toggle="dropdown" data-i18n="Checkbox"><i class="feather icon-circle"></i>Checkbox</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-radio.html" data-toggle="dropdown" data-i18n="Radio"><i class="feather icon-circle"></i>Radio</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-inputs.html" data-toggle="dropdown" data-i18n="Input"><i class="feather icon-circle"></i>Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-input-groups.html" data-toggle="dropdown" data-i18n="Input Groups"><i class="feather icon-circle"></i>Input Groups</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-number-input.html" data-toggle="dropdown" data-i18n="Number Input"><i class="feather icon-circle"></i>Number Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-textarea.html" data-toggle="dropdown" data-i18n="Textarea"><i class="feather icon-circle"></i>Textarea</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-date-time-picker.html" data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i class="feather icon-circle"></i>Date &amp; Time Picker</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-layout.html" data-toggle="dropdown" data-i18n="Form Layout"><i class="feather icon-box"></i>Form Layout</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown" data-i18n="Form Wizard"><i class="feather icon-package"></i>Form Wizard</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-validation.html" data-toggle="dropdown" data-i18n="Form Validation"><i class="feather icon-check-circle"></i>Form Validation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table.html" data-toggle="dropdown" data-i18n="Table"><i class="feather icon-server"></i>Table</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-datatable.html" data-toggle="dropdown" data-i18n="Datatable"><i class="feather icon-grid"></i>Datatable</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-ag-grid.html" data-toggle="dropdown" data-i18n="agGrid Table"><i class="feather icon-grid"></i>agGrid Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="page-user-profile.html" data-toggle="dropdown" data-i18n="Profile"><i class="feather icon-user"></i>Profile</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-account-settings.html" data-toggle="dropdown" data-i18n="Account Settings"><i class="feather icon-settings"></i>Account Settings</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-faq.html" data-toggle="dropdown" data-i18n="FAQ"><i class="feather icon-help-circle"></i>FAQ</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-knowledge-base.html" data-toggle="dropdown" data-i18n="Knowledge Base"><i class="feather icon-info"></i>Knowledge Base</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-search.html" data-toggle="dropdown" data-i18n="Search"><i class="feather icon-search"></i>Search</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-invoice.html" data-toggle="dropdown" data-i18n="Invoice"><i class="feather icon-file"></i>Invoice</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Authentication"><i class="feather icon-unlock"></i>Authentication</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="auth-login.html" data-toggle="dropdown" data-i18n="Login"><i class="feather icon-circle"></i>Login</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-register.html" data-toggle="dropdown" data-i18n="Register"><i class="feather icon-circle"></i>Register</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-forgot-password.html" data-toggle="dropdown" data-i18n="Forgot Password"><i class="feather icon-circle"></i>Forgot Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-reset-password.html" data-toggle="dropdown" data-i18n="Reset Password"><i class="feather icon-circle"></i>Reset Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-lock-screen.html" data-toggle="dropdown" data-i18n="Lock Screen"><i class="feather icon-circle"></i>Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Miscellaneous"><i class="feather icon-file-text"></i>Miscellaneous</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="page-coming-soon.html" data-toggle="dropdown" data-i18n="Coming Soon"><i class="feather icon-circle"></i>Coming Soon</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-404.html" data-toggle="dropdown" data-i18n="404"><i class="feather icon-circle"></i>Error 404</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-500.html" data-toggle="dropdown" data-i18n="500"><i class="feather icon-circle"></i>Error 500</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-not-authorized.html" data-toggle="dropdown" data-i18n="Not Authorized"><i class="feather icon-circle"></i>Not Authorized</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-maintenance.html" data-toggle="dropdown" data-i18n="Maintenance"><i class="feather icon-circle"></i>Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Charts"><i class="feather icon-pie-chart"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="chart-apex.html" data-toggle="dropdown" data-i18n="Apex"><i class="feather icon-circle"></i>Apex</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-chartjs.html" data-toggle="dropdown" data-i18n="Chartjs"><i class="feather icon-circle"></i>Chartjs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-echarts.html" data-toggle="dropdown" data-i18n="Echarts"><i class="feather icon-circle"></i>Echarts</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="maps-google.html" data-toggle="dropdown" data-i18n="Google Maps"><i class="feather icon-map"></i>Google Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span data-i18n="Others">Others</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Menu Levels"><i class="feather icon-menu"></i>Menu Levels</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown" data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Third Level"><i class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown" data-i18n="Third Level"><i class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item" href="" data-toggle="dropdown" data-i18n="Disabled Menu"><i class="feather icon-eye-off"></i>Disabled Menu</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation" data-toggle="dropdown" data-i18n="Documentation"><i class="feather icon-folder"></i>Documentation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.ticksy.com/" data-toggle="dropdown" data-i18n="Raise Support"><i class="feather icon-life-buoy"></i>Raise Support</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Helper Classes</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Content</a>
                                    </li>
                                    <li class="breadcrumb-item active">Helper Classes
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Borders -->
                <section id="borders" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Borders</h4>
                    </div>
                    <div class="card-content">
                        <!--Add borders-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <p class="bd-lead">Use border utilities to quickly style the border and border-radius of an element. Great for
                                    images, buttons, or any other element.</p>
                                <h5 class="text-bold-600">Add border</h5>
                                <p>Add one of these to class to add border on the required side.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.border</code></td>
                                        <td>Add solid border of 1px on each side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-{top/bottom/left/right}</code></td>
                                        <td>Add solid border top/bottom/left/right of 1px.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Add borders-->

                        <!--Remove borders-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Remove border</h5>
                                <p>Add one of these to class to remove border on the required side.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.no-border</code></td>
                                        <td>Remove border from all side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-{top/bottom/left/right}-0</code></td>
                                        <td>Remove border from the top/bottom/left/right side.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Remove borders-->

                        <!--Border widths-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Border widths</h5>
                                <p>Add one of these to class to change border width on the required side.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.border-2</code></td>
                                        <td>Chande border width to 2px on each side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.border-{side}-{size}</code></td>
                                        <td>Chande border width of given size (2px, 3px, ...) on given side (top, bottom, left, right).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Border width-->

                        <!--Border color-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Border color</h5>
                                <p>Change the border color using utilities built on our theme colors. For more border color related options
                                    please check color palette pages.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.border border-{colorName}</code></td>
                                        <td>Add colored border to all side. ColorName can be primary, success, danger, warning, info, secondary light, dark, white.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Border color-->

                        <!--Border-radius-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Border-radius</h5>
                                <p>Add classes to an element to easily round its corners.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.rounded</code></td>
                                        <td>Add round corners border to all side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.rounded-{side}</code></td>
                                        <td>Add round corners border to the given side only (top, bottom, left, right).</td>
                                    </tr>
                                    <tr>
                                        <td><code>.rounded-circle</code></td>
                                        <td>Create round circle border.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.rounded-0</code></td>
                                        <td>Remove border corder from the all side.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Border-radius-->


                        <!--Remove border radius-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Remove border radius</h5>
                                <p>Add one of these to class to remove border radius on the required side.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.no-border-{top/bottom}-radius</code></td>
                                        <td>Remove border radius from top / bottom side.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.no-border-{top/bottom}-{left/right}-radius</code></td>
                                        <td>Remove top / bottom border radius from left / right side.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Remove borders-->
                    </div>
                </section>
                <!--/ Borders-->

                <!--Clearfix-->
                <section id="clearfix" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Clearfix</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text my-1">
                                <p>Quickly and easily clear floated content within a container by adding a clearfix utility.</p>
                                <p>Easily clear <code class="highlighter-rouge">float</code>s by adding <code class="highlighter-rouge">.clearfix</code> <strong>to the parent element</strong>. Can also be used as a
                                    mixin.</p>
                            </div>
                            <pre>
				<code class="language-html">
				    &lt;div class="clearfix"&gt;...&lt;/div&gt;
				</code>
			</pre>
                            <pre>
				<code class="language-css">
				    // Mixin itself
                    @mixin clearfix() {
                      &::after {
                        display: block;
                        content: "";
                        clear: both;
                      }
                    }

                    // Usage as a mixin
                    .element {
                      @include clearfix;
                    };
				</code>
			</pre>
                            <p class="py-1">The following example shows how the clearfix can be used. Without the clearfix the wrapping div
                                would not span around the buttons which would cause a broken layout.</p>
                            <div class="bd-example my-3">
                                <div class="bg-info clearfix">
                                    <button type="button" class="btn btn-danger float-left">Example Button floated left</button>
                                    <button type="button" class="btn btn-warning float-right">Example Button floated right</button>
                                </div>
                            </div>
                            <pre><code class="language-html">
            &lt;div class="bg-info clearfix"&gt;
              &lt;button type="button" class="btn btn-danger float-left"&gt;Example Button floated left&lt;/button&gt;
              &lt;button type="button" class="btn btn-warning float-right"&gt;Example Button floated right&lt;/button&gt;
            &lt;/div&gt;
            </code></pre>
                        </div>
                    </div>
                </section>
                <!--/Clearfix-->

                <!--Close icon-->
                <section id="close-icon" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Close icon</h4>
                    </div>
                    <div class="card-content">


                        <div class="card-body">
                            <div class="card-text my-1">
                                <p>Use a generic close icon for dismissing content like modals and alerts.</p>
                                <p><strong>Be sure to include text for screen readers</strong>, as we’ve done with <code class="highlighter-rouge">aria-label</code>.</p>
                            </div>
                            <div class="bd-example d-flex">
                                <button type="button" class="close" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <pre>
				<code class="language-html">
				    &lt;button type="button" class="close" aria-label="Close"&gt;
                      &lt;span aria-hidden="true"&gt;&times;&lt;/span&gt;
                    &lt;/button&gt;
				</code>
			</pre>
                        </div>
                    </div>
                </section>
                <!--/Close icon-->

                <!-- Display property -->
                <section id="display-property" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Display property</h4>
                    </div>
                    <div class="card-content">
                        <!--Display-->
                        <div class="card-body">
                            <div class="card-text">
                                <p>Quickly and responsively toggle the display value of components and more with our display utilities. Includes
                                    support for some of the more common values, as well as some extras for controlling display when printing.</p>
                                <h5 class="text-bold-600 my-1">Common display values</h5>
                                <p>The <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/display"><code class="highlighter-rouge">display</code> property</a> accepts a handful of values and we support many of
                                    them with utility classes. We purposefully don’t provide every value as a utility, so here’s what we support:
                                </p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.d-none</code></td>
                                        <td>Forces the element to hide on all viewports.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-inline</code></td>
                                        <td>Forces the element to behave like an inline element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-inline-block</code></td>
                                        <td>Forces the element to behave like an inline-block element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-block</code></td>
                                        <td>Forces the element to behave like an block element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-table</code></td>
                                        <td>Forces the element to behave like <code>&lt;table&gt;</code> element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-table-cell</code></td>
                                        <td>Forces the element to behave like <code>&lt;td&gt;</code> element.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-flex</code></td>
                                        <td>Forces the element as a block-level flex container.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.d-inline-flex</code></td>
                                        <td>Forces the element as an inline-level flex container.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>Put them to use by applying any of the classes to an element of your choice. For example, here’s how you
                                    could use the inline, block, or inline-block utilities (the same applies to the other classes).</p>
                                <div class="bd-example my-3">
                                    <div class="d-inline bg-success p-1 white">d-inline</div>
                                    <div class="d-inline bg-success  p-1 white">d-inline</div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-inline bg-success"&gt;d-inline&lt;/div&gt;
                &lt;div class="d-inline bg-success"&gt;d-inline&lt;/div&gt;
                </code></pre>

                                <div class="bd-example my-3">
                                    <span class="d-block bg-primary p-1 white">d-block</span>
                                </div>

                                <pre><code class="language-html">
                &lt;span class="d-block bg-primary"&gt;d-block&lt;/span&gt;
                </code></pre>
                                <div class="bd-example my-3">
                                    <div class="d-inline-block bg-warning p-1 white">d-inline-block</div>
                                    <div class="d-inline-block bg-warning p-1 white">d-inline-block</div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="d-inline-block bg-warning"&gt;d-inline-block&lt;/div&gt;
                &lt;div class="d-inline-block bg-warning"&gt;d-inline-block&lt;/div&gt;
                </code></pre>
                                <p>Responsive variations also exist for every single utility mentioned above.</p>
                                <ul>
                                    <li><code class="highlighter-rouge">.d-none</code></li>
                                    <li><code class="highlighter-rouge">.d-inline</code></li>
                                    <li><code class="highlighter-rouge">.d-inline-block</code></li>
                                    <li><code class="highlighter-rouge">.d-block</code></li>
                                    <li><code class="highlighter-rouge">.d-table</code></li>
                                    <li><code class="highlighter-rouge">.d-table-cell</code></li>
                                    <li><code class="highlighter-rouge">.d-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-inline-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-none</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-inline</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-inline-block</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-block</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-table</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-table-cell</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakPoint}-inline-flex</code></li>
                                </ul>
                                <h5 class="text-bold-600 my-1">Hiding Elements</h5>
                                <p>For faster mobile-friendly development, use responsive display classes for showing and hiding elements by device. Avoid creating entirely different versions of the same site, instead hide element responsively for each screen size.</p>
                                <p>To hide elements simply use the <code class="highlighter-rouge">.d-none</code> class or one of the <code class="highlighter-rouge">.d-{sm,md,lg,xl}-none</code> classes for any responsive screen variation.</p>
                                <p>To show an element only on a given interval of screen sizes you can combine one <code class="highlighter-rouge">.d-*-none</code> class with a <code class="highlighter-rouge">.d-*-*</code> class, for example <code class="highlighter-rouge">.d-none.d-md-block.d-xl-none</code> will hide the element for all
                                    screen sizes except on medium and large devices.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Screen Size</th>
                                                <th>Class</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Hidden on all</td>
                                                <td><code class="highlighter-rouge">d-none</code></td>
                                            </tr>
                                            <tr>
                                                <td>Hidden only on breakpoint size.</td>
                                                <td><code class="highlighter-rouge">d-{breakPoint}-none d-{breakPoint}-block</code></td>
                                            </tr>
                                            <tr>
                                                <td>Visible on all</td>
                                                <td><code class="highlighter-rouge">d-block</code></td>
                                            </tr>
                                            <tr>
                                                <td>Visible only on breakpoint size</td>
                                                <td><code class="highlighter-rouge">d-{breakPoint}-none d-{breakPoint}-block </code></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <h5 class="text-bold-600 my-1">Display in print</h5>
                                <p>Change the <code class="highlighter-rouge">display</code> value of elements when printing with our print
                                    display utilities.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Print style</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><code class="highlighter-rouge">.d-print-block</code></td>
                                                <td>Applies <code class="highlighter-rouge">display: block</code> to the element when printing</td>
                                            </tr>
                                            <tr>
                                                <td><code class="highlighter-rouge">.d-print-inline</code></td>
                                                <td>Applies <code class="highlighter-rouge">display: inline</code> to the element when printing</td>
                                            </tr>
                                            <tr>
                                                <td><code class="highlighter-rouge">.d-print-inline-block</code></td>
                                                <td>Applies <code class="highlighter-rouge">display: inline-block</code> to the element when printing
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><code class="highlighter-rouge">.d-print-none</code></td>
                                                <td>Applies <code class="highlighter-rouge">display: none</code> to the element when printing</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--/Display-->
                    </div>
                </section>


                <!--Embeds-->
                <section id="embeds" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Embeds</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Create responsive video or slideshow embeds based on the width of the parent by creating an intrinsic ratio
                                    that scales on any device.</p>
                                <p>Rules are directly applied to <code class="highlighter-rouge">&lt;iframe&gt;</code>, <code class="highlighter-rouge">&lt;embed&gt;</code>, <code class="highlighter-rouge">&lt;video&gt;</code>, and
                                    <code class="highlighter-rouge">&lt;object&gt;</code> elements; optionally use an explicit descendant class
                                    <code class="highlighter-rouge">.embed-responsive-item</code> when you want to match the styling for other
                                    attributes.</p>
                                <p><strong>Pro-Tip!</strong> You don’t need to include <code class="highlighter-rouge">frameborder="0"</code> in
                                    your <code class="highlighter-rouge">&lt;iframe&gt;</code>s as we override that for you.</p>
                                <h5>Example</h5>
                                <p>Wrap any embed like an <code class="highlighter-rouge">&lt;iframe&gt;</code> in a parent element with <code class="highlighter-rouge">.embed-responsive</code> and an aspect ratio. The <code class="highlighter-rouge">.embed-responsive-item</code> isn’t strictly required, but we encourage it.</p>
                                <div class="bd-example">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen=""></iframe>
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                  &lt;iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen&gt;&lt;/iframe&gt;
                &lt;/div&gt;
                </code></pre>
                                <h5>Aspect ratios</h5>
                                <p>Aspect ratios can be customized with modifier classes.</p>
                                <pre><code class="language-html">
                &lt;!-- 21:9 aspect ratio --&gt;
                &lt;div class="embed-responsive embed-responsive-21by9"&gt;
                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                &lt;/div&gt;

                &lt;!-- 16:9 aspect ratio --&gt;
                &lt;div class="embed-responsive embed-responsive-16by9"&gt;
                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                &lt;/div&gt;

                &lt;!-- 4:3 aspect ratio --&gt;
                &lt;div class="embed-responsive embed-responsive-4by3"&gt;
                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                &lt;/div&gt;

                &lt;!-- 1:1 aspect ratio --&gt;
                &lt;div class="embed-responsive embed-responsive-1by1"&gt;
                  &lt;iframe class="embed-responsive-item" src="..."&gt;&lt;/iframe&gt;
                &lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/Embeds-->

                <!--Flex-->
                <section id="flex" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Flex</h4>
                    </div>
                    <div class="card-content">
                        <!--Enable flex behaviors-->
                        <div class="card-body">
                            <div class="card-text">
                                <p class="bd-lead">Quickly manage the layout, alignment, and sizing of grid columns, navigation, components, and
                                    more with a full suite of responsive flexbox utilities. For more complex implementations, custom CSS may be
                                    necessary.</p>
                                <h5 id="enable-flex-behaviors" class="text-bold-600">Enable flex behaviors</h5>

                                <p>Apply <code class="highlighter-rouge">display</code> utilities to create a flexbox container and transform
                                    <strong>direct children elements</strong> into flex items. Flex containers and items are able to be modified
                                    further with additional flex properties.</p>

                                <div class="bd-example">
                                    <div class="d-flex p-2 bd-highlight">I'm a flexbox container!</div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="d-flex p-2"&gt;I'm a flexbox container!&lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-inline-flex p-2 bd-highlight">I'm an inline flexbox container!</div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="d-inline-flex p-2"&gt;I'm an inline flexbox container!&lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">.d-flex</code> and <code class="highlighter-rouge">.d-inline-flex</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.d-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-inline-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakpoint}-flex</code></li>
                                    <li><code class="highlighter-rouge">.d-{breakpoint}-inline-flex</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Direction-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="direction" class="text-bold-600">Direction</h5>

                                <p>Set the direction of flex items in a flex container with direction utilities. In most cases you can omit the
                                    horizontal class here as the browser default is <code class="highlighter-rouge">row</code>. However, you may
                                    encounter situations where you needed to explicitly set this value (like responsive layouts).</p>

                                <p>Use <code class="highlighter-rouge">.flex-row</code> to set a horizontal direction (the browser default), or
                                    <code class="highlighter-rouge">.flex-row-reverse</code> to start the horizontal direction from the opposite
                                    side.</p>

                                <div class="bd-example">
                                    <div class="d-flex flex-row bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item 1</div>
                                        <div class="p-2 bd-highlight">Flex item 2</div>
                                        <div class="p-2 bd-highlight">Flex item 3</div>
                                    </div>
                                    <div class="d-flex flex-row-reverse bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item 1</div>
                                        <div class="p-2 bd-highlight">Flex item 2</div>
                                        <div class="p-2 bd-highlight">Flex item 3</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex flex-row"&gt;
                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="d-flex flex-row-reverse"&gt;
                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>

                                <p>Use <code class="highlighter-rouge">.flex-column</code> to set a vertical direction, or <code class="highlighter-rouge">.flex-column-reverse</code> to start the vertical direction from the opposite
                                    side.</p>

                                <div class="bd-example">
                                    <div class="d-flex flex-column bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item 1</div>
                                        <div class="p-2 bd-highlight">Flex item 2</div>
                                        <div class="p-2 bd-highlight">Flex item 3</div>
                                    </div>
                                    <div class="d-flex flex-column-reverse bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item 1</div>
                                        <div class="p-2 bd-highlight">Flex item 2</div>
                                        <div class="p-2 bd-highlight">Flex item 3</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex flex-column"&gt;
                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="d-flex flex-column-reverse"&gt;
                  &lt;div class="p-2"&gt;Flex item 1&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 2&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item 3&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">flex-direction</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.flex-{row/column}</code></li>
                                    <li><code class="highlighter-rouge">.flex-{row-reverse/column-reverse}</code></li>
                                    <li><code class="highlighter-rouge">.flex-{breakpoint}-{row/column}</code></li>
                                    <li><code class="highlighter-rouge">.flex-{breakpoint}-{row-reverse/column-reverse}</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Justify content-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="justify-content" class="text-bold-600">Justify content</h5>
                                <p>Use <code class="highlighter-rouge">justify-content</code> utilities on flexbox containers to change the
                                    alignment of flex items on the main axis (the x-axis to start, y-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from <code class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">between</code>, or <code class="highlighter-rouge">around</code>.</p>

                                <div class="bd-example">
                                    <div class="d-flex justify-content-start bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-end bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-center bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-between bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex justify-content-around bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex justify-content-start"&gt;...&lt;/div&gt;
                &lt;div class="d-flex justify-content-end"&gt;...&lt;/div&gt;
                &lt;div class="d-flex justify-content-center"&gt;...&lt;/div&gt;
                &lt;div class="d-flex justify-content-between"&gt;...&lt;/div&gt;
                &lt;div class="d-flex justify-content-around"&gt;...&lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">justify-content</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.justify-content-start</code></li>
                                    <li><code class="highlighter-rouge">.justify-content-end</code></li>
                                    <li><code class="highlighter-rouge">.justify-content-center</code></li>
                                    <li><code class="highlighter-rouge">.justify-content-between</code></li>
                                    <li><code class="highlighter-rouge">.justify-content-around</code></li>
                                    <li><code class="highlighter-rouge">.justify-content-{breakpoint}-{start/end/center/between/around}</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Align items-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="align-items" class="text-bold-600">Align items</h5>

                                <p>Use <code class="highlighter-rouge">align-items</code> utilities on flexbox containers to change the
                                    alignment of flex items on the cross axis (the y-axis to start, x-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from <code class="highlighter-rouge">start</code>, <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">baseline</code>, or <code class="highlighter-rouge">stretch</code> (browser default).</p>

                                <div class="bd-example">
                                    <div class="d-flex align-items-start bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-end bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-center bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-baseline bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex align-items-stretch bd-highlight" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-items-start"&gt;...&lt;/div&gt;
                &lt;div class="d-flex align-items-end"&gt;...&lt;/div&gt;
                &lt;div class="d-flex align-items-center"&gt;...&lt;/div&gt;
                &lt;div class="d-flex align-items-baseline"&gt;...&lt;/div&gt;
                &lt;div class="d-flex align-items-stretch"&gt;...&lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">align-items</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.align-items-start</code></li>
                                    <li><code class="highlighter-rouge">.align-items-end</code></li>
                                    <li><code class="highlighter-rouge">.align-items-center</code></li>
                                    <li><code class="highlighter-rouge">.align-items-baseline</code></li>
                                    <li><code class="highlighter-rouge">.align-items-stretch</code></li>
                                    <li><code class="highlighter-rouge">.align-items-{breakpoint}-{start/end/center/baseline/stretch}</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Align self-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="align-self" class="text-bold-600">Align self</h5>
                                <p>Use <code class="highlighter-rouge">align-self</code> utilities on flexbox items to individually change their
                                    alignment on the cross axis (the y-axis to start, x-axis if <code class="highlighter-rouge">flex-direction: column</code>). Choose from the same options as <code class="highlighter-rouge">align-items</code>: <code class="highlighter-rouge">start</code>, <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">baseline</code>, or <code class="highlighter-rouge">stretch</code> (browser
                                    default).</p>

                                <div class="bd-example">
                                    <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="align-self-start p-2 bd-highlight">Aligned flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="align-self-end p-2 bd-highlight">Aligned flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="align-self-center p-2 bd-highlight">Aligned flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex bd-highlight mb-3" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="align-self-baseline p-2 bd-highlight">Aligned flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                    <div class="d-flex bd-highlight" style="height: 100px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="align-self-stretch p-2 bd-highlight">Aligned flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="align-self-start"&gt;Aligned flex item&lt;/div&gt;
                &lt;div class="align-self-end"&gt;Aligned flex item&lt;/div&gt;
                &lt;div class="align-self-center"&gt;Aligned flex item&lt;/div&gt;
                &lt;div class="align-self-baseline"&gt;Aligned flex item&lt;/div&gt;
                &lt;div class="align-self-stretch"&gt;Aligned flex item&lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">align-self</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.align-self-start</code></li>
                                    <li><code class="highlighter-rouge">.align-self-end</code></li>
                                    <li><code class="highlighter-rouge">.align-self-center</code></li>
                                    <li><code class="highlighter-rouge">.align-self-baseline</code></li>
                                    <li><code class="highlighter-rouge">.align-self-stretch</code></li>
                                    <li><code class="highlighter-rouge">.align-self-{breakpoint}-{start/end/center/baseline/stretch}</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Auto margins-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="align-self-margin" class="text-bold-600">Auto margins</h5>

                                <p>Flexbox can do some pretty awesome things when you mix flex alignments with auto margins. Shown below are
                                    three examples of controlling flex items via auto margins: default (no auto margin), pushing two items to the
                                    right (<code class="highlighter-rouge">.mr-auto</code>), and pushing two items to the left (<code class="highlighter-rouge">.ml-auto</code>).</p>

                                <p><strong>Unfortunately, IE10 and IE11 do not properly support auto margins on flex items whose parent has a
                                        non-default <code class="highlighter-rouge">justify-content</code> value.</strong> <a href="https://stackoverflow.com/a/37535548">See this StackOverflow answer</a> for more details.</p>

                                <div class="bd-example">
                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>

                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="mr-auto p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>

                                    <div class="d-flex bd-highlight mb-3">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="ml-auto p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex"&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="d-flex"&gt;
                  &lt;div class="mr-auto p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="d-flex"&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="ml-auto p-2"&gt;Flex item&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>
                            </div>
                        </div>

                        <!--With align-items-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="with-align-items" class="text-bold-600">With align-items</h5>
                                <p>Vertically move one flex item to the top or bottom of a container by mixing <code class="highlighter-rouge">align-items</code>, <code class="highlighter-rouge">flex-direction: column</code>,
                                    and <code class="highlighter-rouge">margin-top: auto</code> or <code class="highlighter-rouge">margin-bottom: auto</code>.</p>

                                <div class="bd-example">
                                    <div class="d-flex align-items-start flex-column bd-highlight mb-3" style="height: 200px;">
                                        <div class="mb-auto p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>

                                    <div class="d-flex align-items-end flex-column bd-highlight mb-3" style="height: 200px;">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="mt-auto p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="d-flex align-items-start flex-column" style="height: 200px;"&gt;
                  &lt;div class="mb-auto p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                &lt;/div&gt;

                &lt;div class="d-flex align-items-end flex-column" style="height: 200px;"&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="p-2"&gt;Flex item&lt;/div&gt;
                  &lt;div class="mt-auto p-2"&gt;Flex item&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>
                            </div>
                        </div>

                        <!--Wrap-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="wrap" class="text-bold-600">Wrap</h5>

                                <p>Change how flex items wrap in a flex container. Choose from no wrapping at all (the browser default) with
                                    <code class="highlighter-rouge">.flex-nowrap</code>, wrapping with <code class="highlighter-rouge">.flex-wrap</code>, or reverse wrapping with <code class="highlighter-rouge">.flex-wrap-reverse</code>.</p>

                                <div class="bd-example">
                                    <div class="d-flex flex-nowrap bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex flex-nowrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex flex-wrap bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex flex-wrap-reverse bd-highlight">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex flex-wrap-reverse"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">flex-wrap</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.flex-nowrap</code></li>
                                    <li><code class="highlighter-rouge">.flex-wrap</code></li>
                                    <li><code class="highlighter-rouge">.flex-wrap-reverse</code></li>
                                    <li><code class="highlighter-rouge">.flex-{breakpoint}-{nowrap/wrap/wrap-reverse}</code></li>
                                    <li><code class="highlighter-rouge">.flex-sm-wrap</code></li>
                                    <li><code class="highlighter-rouge">.flex-sm-wrap-reverse</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Order-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="order" class="text-bold-600">Order</h5>

                                <p>Change the <em>visual</em> order of specific flex items with a handful of <code class="highlighter-rouge">order</code> utilities. We only provide options for making an item first or last, as well as a reset to use the DOM order. As <code class="highlighter-rouge">order</code> takes any integer value (e.g., <code class="highlighter-rouge">5</code>), add custom CSS for any additional values needed.</p>

                                <div class="bd-example">
                                    <div class="d-flex flex-nowrap bd-highlight">
                                        <div class="order-3 p-2 bd-highlight">First flex item</div>
                                        <div class="order-2 p-2 bd-highlight">Second flex item</div>
                                        <div class="order-1 p-2 bd-highlight">Third flex item</div>
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="d-flex flex-nowrap"&gt;
                  &lt;div class="order-3 p-2"&gt;First flex item&lt;/div&gt;
                  &lt;div class="order-2 p-2"&gt;Second flex item&lt;/div&gt;
                  &lt;div class="order-1 p-2"&gt;Third flex item&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">order</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.order-{value}</code></li>
                                    <li><code class="highlighter-rouge">.order-{breakpoint}-{value}</code></li>
                                </ul>
                            </div>
                        </div>

                        <!--Align content-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 id="align-content" class="text-bold-600">Align content</h5>
                                <p>Use <code class="highlighter-rouge">align-content</code> utilities on flexbox containers to align flex items <em>together</em> on the cross axis. Choose from <code class="highlighter-rouge">start</code> (browser default), <code class="highlighter-rouge">end</code>, <code class="highlighter-rouge">center</code>, <code class="highlighter-rouge">between</code>, <code class="highlighter-rouge">around</code>, or <code class="highlighter-rouge">stretch</code>. To demonstrate these utilities, we’ve enforced <code class="highlighter-rouge">flex-wrap: wrap</code> and increased the number of flex items.</p>

                                <p><strong>Heads up!</strong> This property has no effect on single rows of flex items.</p>

                                <div class="bd-example">
                                    <div class="d-flex align-content-start flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-start flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex align-content-end flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-end flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex align-content-center flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-center flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex align-content-between flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-between flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>


                                <div class="bd-example">
                                    <div class="d-flex align-content-around flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-around flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <div class="bd-example">
                                    <div class="d-flex align-content-stretch flex-wrap bd-highlight mb-3" style="height: 200px">
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                        <div class="p-2 bd-highlight">Flex item</div>
                                    </div>
                                </div>

                                <pre><code class="language-html">
                &lt;div class="d-flex align-content-stretch flex-wrap"&gt;
                  ...
                &lt;/div&gt;
                </code></pre>

                                <p>Responsive variations also exist for <code class="highlighter-rouge">align-content</code>.</p>

                                <ul>
                                    <li><code class="highlighter-rouge">.align-content-start</code></li>
                                    <li><code class="highlighter-rouge">.align-content-end</code></li>
                                    <li><code class="highlighter-rouge">.align-content-center</code></li>
                                    <li><code class="highlighter-rouge">.align-content-around</code></li>
                                    <li><code class="highlighter-rouge">.align-content-stretch</code></li>
                                    <li><code class="highlighter-rouge">.align-content-{breakpoint}-{start/end/center/around/stretch}</code></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/Flex-->

                <!--Float-->
                <section id="Float" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Float</h4>
                    </div>
                    <div class="card-content">
                        <!--Overview-->
                        <div class="card-body">
                            <div class="card-text">
                                <p class="bd-lead">Toggle floats on any element, across any breakpoint, using our responsive float utilities.
                                </p>
                                <p>These utility classes float an element to the left or right, or disable floating, based on the current
                                    viewport size using the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/float">CSS <code class="highlighter-rouge">float</code> property</a>. <code class="highlighter-rouge">!important</code> is
                                    included to avoid specificity issues. These use the same viewport breakpoints as our grid system.</p>
                                <p>Toggle a float with a class:</p>
                                <div class="bd-example">
                                    <div class="float-left">Float left on all viewport sizes</div><br>
                                    <div class="float-right">Float right on all viewport sizes</div><br>
                                    <div class="float-none">Don't float on all viewport sizes</div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="float-left"&gt;Float left on all viewport sizes&lt;/div&gt;&lt;br&gt;
                &lt;div class="float-right"&gt;Float right on all viewport sizes&lt;/div&gt;&lt;br&gt;
                &lt;div class="float-none"&gt;Don't float on all viewport sizes&lt;/div&gt;
                </code></pre>
                                <h5 id="float-responsive" class="text-bold-600">Responsive</h5>
                                <p>Responsive variations also exist for each <code class="highlighter-rouge">float</code> value.</p>
                                <div class="bd-example">
                                    <div class="float-sm-left">Float left on viewports sized SM (small) or wider</div><br>
                                    <div class="float-md-left">Float left on viewports sized MD (medium) or wider</div><br>
                                    <div class="float-lg-left">Float left on viewports sized LG (large) or wider</div><br>
                                    <div class="float-xl-left">Float left on viewports sized XL (extra-large) or wider</div><br>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="float-sm-left"&gt;Float left on viewports sized SM (small) or wider&lt;/div&gt;&lt;br&gt;
                &lt;div class="float-md-left"&gt;Float left on viewports sized MD (medium) or wider&lt;/div&gt;&lt;br&gt;
                &lt;div class="float-lg-left"&gt;Float left on viewports sized LG (large) or wider&lt;/div&gt;&lt;br&gt;
                &lt;div class="float-xl-left"&gt;Float left on viewports sized XL (extra-large) or wider&lt;/div&gt;&lt;br&gt;
                </code></pre>
                                <p>Here are all the support classes;</p>
                                <ul>
                                    <li><code class="highlighter-rouge">.float-{left/right/none}</code></li>
                                    <li><code class="highlighter-rouge">.float-{breakpoint}-{left/right/none}</code></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!--Image replacement-->
                <section id="image-replacement" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image replacement</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Swap text for background images with the image replacement class.</p>
                                <p>Utilize the <code class="highlighter-rouge">.text-hide</code> class or mixin to help replace an element’s
                                    text content with a background image.</p>
                                <pre><code class="language-html">
                &lt;h1 class="text-hide"&gt;Custom heading&lt;/h1&gt;
                </code></pre>
                                <p>Use the <code class="highlighter-rouge">.text-hide</code> class to maintain the accessibility and SEO
                                    benefits of heading tags, but want to utilize a <code class="highlighter-rouge">background-image</code>
                                    instead of text.</p>
                                <div class="bd-example">
                                    <h1 class="text-hide my-2" style="background-image: url('../../../app-assets/images/logo/logo.png'); width: 30px; height: 26px;">
                                        Bootstrap</h1>
                                </div>
                                <pre><code class="language-html">
                &lt;h1 class="text-hide my-2" style="background-image: url('../../../app-assets/images/logo/logo.png'); width: 30px; height: 26px;"&gt;Bootstrap&lt;/h1&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/Image replacement-->

                <!--position-->
                <section id="display-position" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Position</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Use these shorthand utilities for quickly configuring the position of an element.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.position-fixed</code></td>
                                        <td>Changes element's position to fixed.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-relative</code></td>
                                        <td>Changes element's position to relative.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-absolute</code></td>
                                        <td>Changes element's position to absolute.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-static</code></td>
                                        <td>Changes element's position to static.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.position-sticky</code></td>
                                        <td>Changes element's position to static.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Fixed top</h5>
                                <p>Position an element at the top of the viewport, from edge to edge. Be sure you understand the ramifications
                                    of fixed position in your project; you may need to add aditional CSS.</p>
                                <pre><code class="language-html">
                &lt;div class="fixed-top"&gt;...&lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Fixed bottom</h5>
                                <p>Position an element at the bottom of the viewport, from edge to edge. Be sure you understand the
                                    ramifications of fixed position in your project; you may need to add aditional CSS.</p>
                                <pre><code class="language-html">
                &lt;div class="fixed-footer"&gt;...&lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Sticky top</h5>
                                <p>Position an element at the top of the viewport, from edge to edge, but only after you scroll past it. The
                                    <code class="highlighter-rouge">.sticky-top</code> utility uses CSS’s <code class="highlighter-rouge">position: sticky</code>, which isn’t fully supported in all browsers.</p>
                                <p><strong>Microsoft Edge and IE11 will render <code class="highlighter-rouge">position: sticky</code> as <code class="highlighter-rouge">position: relative</code>.</strong> As such, we wrap the styles in a <code class="highlighter-rouge">@supports</code> query, limiting the stickiness to only browsers that properly can
                                    render it.</p>
                                <pre><code class="language-html">
                &lt;div class="sticky-top"&gt;...&lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/position-->

                <!--Screenreaders-->
                <section id="screenreaders" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Screenreaders</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Use screenreader utilities to hide elements on all devices except screen readers.</p>
                                <p>Hide an element to all devices <strong>except screen readers</strong> with <code class="highlighter-rouge">.sr-only</code>. Combine <code class="highlighter-rouge">.sr-only</code> with
                                    <code class="highlighter-rouge">.sr-only-focusable</code> to show the element again when it’s focused (e.g. by
                                    a keyboard-only user). Can also be used as mixins.</p>
                                <pre><code class="language-html">
                &lt;a class="sr-only sr-only-focusable" href="#content"&gt;Skip to main content&lt;/a&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Screenreaders-->

                <!--Sizing-->
                <section id="sizing" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sizing</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Easily make an element as wide or as tall (relative to its parent) with our width and height utilities.</p>
                                <p>Width and height utilities are generated from the <code class="highlighter-rouge">$sizes</code> Sass map in
                                    <code class="highlighter-rouge">_variables.scss</code>. Includes support for <code class="highlighter-rouge">25%</code>, <code class="highlighter-rouge">50%</code>, <code class="highlighter-rouge">75%</code>, and <code class="highlighter-rouge">100%</code> by default. Modify
                                    those values as you need to generate different utilities here.</p>
                                <div class="bd-example">
                                    <div class="w-25 width-example p-3" style="background-color: #eee;">Width 25%</div>
                                    <div class="w-50 width-example p-3" style="background-color: #eee;">Width 50%</div>
                                    <div class="w-75 width-example p-3" style="background-color: #eee;">Width 75%</div>
                                    <div class="w-100 width-example p-3" style="background-color: #eee;">Width 100%</div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="w-25 p-3" style="background-color: #eee;"&gt;Width 25%&lt;/div&gt;
                &lt;div class="w-50 p-3" style="background-color: #eee;"&gt;Width 50%&lt;/div&gt;
                &lt;div class="w-75 p-3" style="background-color: #eee;"&gt;Width 75%&lt;/div&gt;
                &lt;div class="w-100 p-3" style="background-color: #eee;"&gt;Width 100%&lt;/div&gt;
                </code></pre>
                                <div class="bd-example">
                                    <div class="height-example-wrapper" style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                        <div class="h-25 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                                            Height 25%</div>
                                        <div class="h-50 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                                            Height 50%</div>
                                        <div class="h-75 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                                            Height 75%</div>
                                        <div class="h-100 height-example d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">
                                            Height 100%</div>
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                  &lt;div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 25%&lt;/div&gt;
                  &lt;div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 50%&lt;/div&gt;
                  &lt;div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 75%&lt;/div&gt;
                  &lt;div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)"&gt;Height 100%&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>
                                <p>You can also use <code class="highlighter-rouge">max-width: 100%;</code> and <code class="highlighter-rouge">max-height: 100%;</code> utilities as needed.</p>
                                <div class="bd-example">
                                    <img class="mw-100" data-src="holder.js/1000px100?text=Max-width%20%3D%20100%25" alt="Max-width = 100% [1000%x100]" style="height: 100px; width: 1000%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22782%22%20height%3D%22100%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20782%20100%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_15fc00274c0%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A39pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_15fc00274c0%22%3E%3Crect%20width%3D%22782%22%20height%3D%22100%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22176.3984375%22%20y%3D%2267.4%22%3EMax-width%20%3D%20100%25%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                </div>
                                <pre><code class="language-html">
                    &lt;img class="mw-100" src="..." alt="Max-width 100%"&gt;
                </code></pre>
                                <div class="bd-example">
                                    <div class="height-example-wrapper" style="height: 100px; background-color: rgba(255,0,0,0.1);">
                                        <div class="mh-100 height-example" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);">Max-height
                                            100%</div>
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div style="height: 100px; background-color: rgba(255,0,0,0.1);"&gt;
                  &lt;div class="mh-100" style="width: 100px; height: 200px; background-color: rgba(0,0,255,0.1);"&gt;Max-height 100%&lt;/div&gt;
                &lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                        <!--Width && Height-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Width && Height</h5>
                                <p>Add one of these to class to set width of the content.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.fit</code></td>
                                        <td>Set content maximum width 100%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.half-width</code></td>
                                        <td>Set content width 50%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.full-width</code></td>
                                        <td>Set content width 100%.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.full-height</code></td>
                                        <td>Set content height 100%.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Width && Height-->


                        <!--Fixed Width-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Fixed Width</h5>
                                <p>Add one of these to class to set fixed width of the content.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.width-{size}</code></td>
                                        <td>Set content fixed width in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350,
                                            400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.width-50</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.width-{size}-per</code></td>
                                        <td>Set content fixed width in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%,
                                            35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.width-5-per</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Fixed Width-->

                        <!--Fixed Height-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600">Fixed Height</h5>
                                <p>Add one of these to class to set fixed height of the content.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.height-{size}</code></td>
                                        <td>Set content fixed height in pixel of selected size where size can be 50, 100, 150, 200, 250, 300, 350, 400, 450, 500, 550, 600, 650, 700, 750 and 800. i.e <code>.height-50</code></td>
                                    </tr>
                                    <tr>
                                        <td><code>.height-{size}-per</code></td>
                                        <td>Set content fixed height in percentage of selected size where size can be 5%, 10%, 15%, 20%, 25%, 30%, 35%, 40%, 45%, 50%, 55%, 60%, 65%, 70%, 75% and 80%. i.e <code>.height-5-per</code></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Fixed Height-->
                    </div>
                </section>
                <!--/Sizing-->

                <!-- Spacing -->
                <section id="spacing" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Spacing</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Bootstrap includes a wide range of shorthand responsive margin and padding utility classes to modify an
                                    element's appearance.</p>
                                <h5 class="text-bold-600">How it works</h5>
                                <p>Assign responsive-friendly <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> values to an element or a subset of its sides with shorthand classes. Includes support for individual properties, all properties, and vertical and horizontal properties. Classes are built from a default Sass map ranging from <code class="highlighter-rouge">.25rem</code> to <code class="highlighter-rouge">3rem</code>.</p>
                                <h5 class="text-bold-600">Notation</h5>
                                <p>Spacing utilities that apply to all breakpoints, from <code class="highlighter-rouge">xs</code> to <code class="highlighter-rouge">xl</code>, have no breakpoint abbreviation in them. This is because those classes are applied from <code class="highlighter-rouge">min-width: 0</code> and up, and thus are not bound by a media query. The remaining breakpoints, however, do include a breakpoint abbreviation.</p>
                                <p>The classes are named using the format <code class="highlighter-rouge">{property}{sides}-{size}</code> for
                                    <code class="highlighter-rouge">xs</code> and <code class="highlighter-rouge">{property}{sides}-{breakpoint}-{size}</code> for <code class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>.</p>
                                <p>Where <em>property</em> is one of:</p>
                                <ul>
                                    <li><code class="highlighter-rouge">m</code> - for classes that set <code class="highlighter-rouge">margin</code></li>
                                    <li><code class="highlighter-rouge">p</code> - for classes that set <code class="highlighter-rouge">padding</code></li>
                                </ul>
                                <p>Where <em>sides</em> is one of:</p>
                                <ul>
                                    <li><code class="highlighter-rouge">t</code> - for classes that set <code class="highlighter-rouge">margin-top</code> or <code class="highlighter-rouge">padding-top</code></li>
                                    <li><code class="highlighter-rouge">b</code> - for classes that set <code class="highlighter-rouge">margin-bottom</code> or <code class="highlighter-rouge">padding-bottom</code>
                                    </li>
                                    <li><code class="highlighter-rouge">l</code> - for classes that set <code class="highlighter-rouge">margin-left</code> or <code class="highlighter-rouge">padding-left</code></li>
                                    <li><code class="highlighter-rouge">r</code> - for classes that set <code class="highlighter-rouge">margin-right</code> or <code class="highlighter-rouge">padding-right</code></li>
                                    <li><code class="highlighter-rouge">x</code> - for classes that set both <code class="highlighter-rouge">*-left</code> and <code class="highlighter-rouge">*-right</code></li>
                                    <li><code class="highlighter-rouge">y</code> - for classes that set both <code class="highlighter-rouge">*-top</code> and <code class="highlighter-rouge">*-bottom</code></li>
                                    <li>blank - for classes that set a <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> on all 4 sides of the element</li>
                                </ul>
                                <p>Where <em>size</em> is one of:</p>
                                <ul>
                                    <li><code class="highlighter-rouge">0</code> - for classes that eliminate the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> by setting it to
                                        <code class="highlighter-rouge">0</code></li>
                                    <li><code class="highlighter-rouge">1</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer * .25</code></li>
                                    <li><code class="highlighter-rouge">2</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer * .5</code></li>
                                    <li><code class="highlighter-rouge">3</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer</code></li>
                                    <li><code class="highlighter-rouge">4</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer * 1.5</code></li>
                                    <li><code class="highlighter-rouge">5</code> - (by default) for classes that set the <code class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to <code class="highlighter-rouge">$spacer * 3</code></li>
                                    <li><code class="highlighter-rouge">auto</code> - for classes that set the <code class="highlighter-rouge">margin</code> to auto</li>
                                </ul>
                                <p>(You can add more sizes by adding entries to the <code class="highlighter-rouge">$spacers</code> Sass map
                                    variable.)</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600">Horizontal centering</h5>
                                <p>Additionally, Bootstrap also includes an <code class="highlighter-rouge">.mx-auto</code> class for
                                    horizontally centering fixed-width block level content—that is, content that has <code class="highlighter-rouge">display: block</code> and a <code class="highlighter-rouge">width</code> set—by
                                    setting the horizontal margins to <code class="highlighter-rouge">auto</code>.</p>
                                <div class="bd-example my-2">
                                    <div class="mx-auto" style="width: 200px; background-color: rgba(86,61,124,.15);">
                                        Centered element
                                    </div>
                                </div>
                                <pre><code class="language-html">
                &lt;div class="mx-auto" style="width: 200px;"&gt;
                  Centered element
                &lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Spacing -->

                <!--vertical alignment-->
                <section id="vertical-alignment" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Vertical alignment</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Easily change the vertical alignment of inline, inline-block, inline-table, and table cell elements.</p>
                                <p>Change the alignment of elements with the <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/vertical-align"><code class="highlighter-rouge">vertical-alignment</code></a> utilities. Please note that vertical-align only
                                    affects inline, inline-block, inline-table, and table cell elements.</p>
                                <p>Choose from <code class="highlighter-rouge">.align-baseline</code>, <code class="highlighter-rouge">.align-top</code>, <code class="highlighter-rouge">.align-middle</code>, <code class="highlighter-rouge">.align-bottom</code>, <code class="highlighter-rouge">.align-text-bottom</code>,
                                    and <code class="highlighter-rouge">.align-text-top</code> as needed.</p>

                                <div class="bd-example">
                                    <span class="align-baseline">baseline</span>
                                    <span class="align-top">top</span>
                                    <span class="align-middle">middle</span>
                                    <span class="align-bottom">bottom</span>
                                    <span class="align-text-top">text-top</span>
                                    <span class="align-text-bottom">text-bottom</span>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.align-{direction}</code></td>
                                        <td>Changes element's vertical alignment to mentioned direction (top, middle, bottom, baseline).</td>
                                    </tr>
                                    <tr>
                                        <td><code>.align-text-{top/bottom}</code></td>
                                        <td>Top of the element is aligned with the top / bottom of the parent element's font.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <p>With table cells:</p>
                                <div class="bd-example">
                                    <table style="height: 100px;">
                                        <tbody>
                                            <tr>
                                                <td class="align-baseline">baseline</td>
                                                <td class="align-top">top</td>
                                                <td class="align-middle">middle</td>
                                                <td class="align-bottom">bottom</td>
                                                <td class="align-text-top">text-top</td>
                                                <td class="align-text-bottom">text-bottom</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <pre><code class="language-html">
                &lt;table style="height: 100px;"&gt;
                  &lt;tbody&gt;
                    &lt;tr&gt;
                      &lt;td class="align-baseline"&gt;baseline&lt;/td&gt;
                      &lt;td class="align-top"&gt;top&lt;/td&gt;
                      &lt;td class="align-middle"&gt;middle&lt;/td&gt;
                      &lt;td class="align-bottom"&gt;bottom&lt;/td&gt;
                      &lt;td class="align-text-top"&gt;text-top&lt;/td&gt;
                      &lt;td class="align-text-bottom"&gt;text-bottom&lt;/td&gt;
                    &lt;/tr&gt;
                  &lt;/tbody&gt;
                &lt;/table&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/vertical alignment-->

                <!--Image-->
                <section id="image" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Add one of these to class to change image size and other property.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.bg-cover</code></td>
                                        <td>Scale the background image to be as large as possible so that the background area is completely covered
                                            by the background image.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.background-repeat</code></td>
                                        <td>Repeat the background image.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.background-no-repeat</code></td>
                                        <td>Do not repeat the background image.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
                <!--/Image-->

                <!--/Content helpers-->
                <section id="content-helpers" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Content helpers</h4>
                    </div>
                    <div class="card-content">
                        <!--z-index-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">z-index</h5>
                                <p>Add one of these classes to change the elemets' z-index properties.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.zindex-minus-{1/2/3/4}</code></td>
                                        <td>Set element's z-index value minus 1/2/3/4.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.zindex-{1/2/3/4}</code></td>
                                        <td>Set element's z-index value 1/2/3/4.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/z-index-->

                        <!--Edges-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Edges</h5>
                                <p>Add one of these to removes the slected edge of the elements, works with absolute, fixed and relative
                                    positioned elements.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.no-edge-{direction}</code></td>
                                        <td>Removes the edge of the element for given direction (top/bottom/left/right).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Edges-->

                        <!--Cursors-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Cursors</h5>
                                <p>Add one of these to class to change cursor style.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.cursor-pointer</code></td>
                                        <td>The cursor is a pointer and indicates a link. Useful for user interaction feedback.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.cursor-move</code></td>
                                        <td>The cursor indicates something is to be moved. Used in shortable components</td>
                                    </tr>
                                    <tr>
                                        <td><code>.cursor-default</code></td>
                                        <td>Set cursor to browser default style.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.cursor-progress</code></td>
                                        <td>The cursor indicates that the program is busy (in progress).</td>
                                    </tr>
                                    <tr>
                                        <td><code>.cursor-not-allowed</code></td>
                                        <td>The cursor indicates that the requested action will not be executed.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--/Cursors-->

                        <!--Overflow-->
                        <div class="card-body">
                            <div class="card-text">
                                <h5 class="text-bold-600 my-1">Overflow</h5>
                                <p>Add one of these to class to change overflow of element.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.overflow-visible</code></td>
                                        <td>Default. The overflow is not clipped. It renders outside the element's box.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-hidden</code></td>
                                        <td>The overflow is clipped, and the rest of the content will be invisible.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-auto</code></td>
                                        <td>If overflow is clipped, a scrollbar should be added to see the rest of the content.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.overflow-scroll</code></td>
                                        <td>The overflow is clipped, but a scrollbar is added to see the rest of the content.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <!--List-->
                        <div class="card-body">
                            <div class="card-text my-1">
                                <h5 class="text-bold-600 my-1">List</h5>
                                <p>Add one of these to class to change list style.</p>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Classes</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><code>.list-unstyled</code></td>
                                        <td>No marker is shown in the list item.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.bullets-inside</code></td>
                                        <td>Indents the marker and the text. The bullets appear inside the content flow</td>
                                    </tr>
                                    <tr>
                                        <td><code>.list-style-circle</code></td>
                                        <td>Set the list item marker to circle.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.list-style-square</code></td>
                                        <td>Set the list item marker to square.</td>
                                    </tr>
                                    <tr>
                                        <td><code>.list-style-icons</code></td>
                                        <td>Set the list item marker with icons.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!--List-->

                    </div>
                </section>
                <!--/ Content helpers-->

                <!--Visibility-->
                <section id="visibility" class="card">
                    <div class="card-header">
                        <h4 class="card-title">Visibility</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <div class="card-text">
                                <p>Control the visibility, without modifying the display, of elements with visibility utilities.</p>
                                <p>Set the <code class="highlighter-rouge">visibility</code> of elements with our visibility utilities. These do
                                    not modify the <code class="highlighter-rouge">display</code> value at all and are helpful for hiding content
                                    from most users, but still keeping them for screen readers.</p>
                                <p>Apply <code class="highlighter-rouge">.visible</code> or <code class="highlighter-rouge">.invisible</code> as
                                    needed.</p>

                                <pre><code class="language-html">
                &lt;div class="visible"&gt;...&lt;/div&gt;
                &lt;div class="invisible"&gt;...&lt;/div&gt;
                </code></pre>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ visibility-->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light navbar-shadow">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2019<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="../../../app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/vendors/js/ui/prism.min.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>