<?php include 'layouts/header.php'; ?>

<?php include 'layouts/headerStyle.php'; ?>

    <body class="fixed-left">

        <?php include 'layouts/loader.php'; ?>

        <!-- Begin page -->
        <div id="wrapper">

            <?php include 'layouts/navbar.php'; ?>

            <!-- Start right Content here -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <nav class="navbar-custom">
                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline float-right mb-0">
                                <!-- Search -->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>
                                <!-- Fullscreen -->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                                        <i class="mdi mdi-fullscreen noti-icon"></i>
                                    </a>
                                </li>
                                <!-- language-->
                                <li class="list-inline-item dropdown notification-list hidden-xs-down">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect text-muted" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        English <img src="public/assets/images/flags/us_flag.jpg" class="ml-2" height="16" alt=""/>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right language-switch">
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/germany_flag.jpg" alt="" height="16"/><span> German </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/italy_flag.jpg" alt="" height="16"/><span> Italian </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/french_flag.jpg" alt="" height="16"/><span> French </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/spain_flag.jpg" alt="" height="16"/><span> Spanish </span></a>
                                        <a class="dropdown-item" href="#"><img src="public/assets/images/flags/russia_flag.jpg" alt="" height="16"/><span> Russian </span></a>
                                    </div>
                                </li>
                                <!-- notification-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="ion-ios7-bell noti-icon"></i>
                                        <span class="badge badge-danger noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (3)</h5>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                            <p class="notify-details"><b>Your order is placed</b><small class="text-muted">Dummy text of the printing and typesetting industry.</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-warning"><i class="mdi mdi-message"></i></div>
                                            <p class="notify-details"><b>New Message received</b><small class="text-muted">You have 87 unread messages</small></p>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-info"><i class="mdi mdi-martini"></i></div>
                                            <p class="notify-details"><b>Your item is shipped</b><small class="text-muted">It is a long established fact that a reader will</small></p>
                                        </a>

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            View All
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="public/assets/images/users/avatar-1.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-wallet text-muted"></i> My Wallet</a>
                                        <a class="dropdown-item" href="#"><span class="badge badge-success pull-right m-t-5">5</span><i class="dripicons-gear text-muted"></i> Settings</a>
                                        <a class="dropdown-item" href="#"><i class="dripicons-lock text-muted"></i> Lock screen</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#"><i class="dripicons-exit text-muted"></i> Logout</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Page title -->
                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                                <li class="hide-phone list-inline-item app-search">
                                    <h3 class="page-title">Dripicons</h3>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <!-- ==================
                         PAGE CONTENT START
                         ================== -->

                    <div class="page-content-wrapper">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                            <h4 class="mt-0 header-title">Examples</h4>
                                            <p class="text-muted m-b-30 font-14">Use <code>&lt;i
                                                class="dripicons-zoom-out"&gt;&lt;/i&gt;</code>.
                                            </p>

                                            <div class="row icon-demo-content">
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-alarm"></i> dripicons-alarm
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-align-center"></i> dripicons-align-center
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-align-justify"></i> dripicons-align-justify
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-align-left"></i> dripicons-align-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-align-right"></i> dripicons-align-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-anchor"></i> dripicons-anchor
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-archive"></i> dripicons-archive
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-down"></i> dripicons-arrow-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-left"></i> dripicons-arrow-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-right"></i> dripicons-arrow-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-thin-down"></i> dripicons-arrow-thin-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-thin-left"></i> dripicons-arrow-thin-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-thin-right"></i> dripicons-arrow-thin-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-thin-up"></i> dripicons-arrow-thin-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-arrow-up"></i> dripicons-arrow-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class=" dripicons-article"></i> dripicons-article
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-backspace"></i> dripicons-backspace
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-basket"></i> dripicons-basket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-basketball"></i> dripicons-basketball
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-battery-empty"></i> dripicons-battery-empty
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-battery-full"></i> dripicons-battery-full
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-battery-low"></i> dripicons-battery-low
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-battery-medium"></i> dripicons-battery-medium
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-bell"></i> dripicons-bell
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-blog"></i> dripicons-blog
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-bluetooth"></i> dripicons-bluetooth
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-bold"></i> dripicons-bold
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-bookmark"></i> dripicons-bookmark
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-bookmarks"></i> dripicons-bookmarks
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-box"></i> dripicons-box
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-briefcase"></i> dripicons-briefcase
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-brightness-low"></i> dripicons-brightness-low
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-brightness-max"></i> dripicons-brightness-max
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-brightness-medium"></i> dripicons-brightness-medium
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-broadcast"></i> dripicons-broadcast
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-browser"></i> dripicons-browser
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-browser-upload"></i> dripicons-browser-upload
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-brush"></i> dripicons-brush
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-calendar"></i> dripicons-calendar
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-camcorder"></i> dripicons-camcorder
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-camera"></i> dripicons-camera
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-card"></i> dripicons-card
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cart"></i> dripicons-cart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-checklist"></i> dripicons-checklist
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-checkmark"></i> dripicons-checkmark
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-chevron-down"></i> dripicons-chevron-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-chevron-left"></i> dripicons-chevron-left
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-chevron-right"></i> dripicons-chevron-right
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-chevron-up"></i> dripicons-chevron-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-clipboard"></i> dripicons-clipboard
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-clock"></i> dripicons-clock
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-clockwise"></i> dripicons-clockwise
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cloud"></i> dripicons-cloud
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cloud-download"></i> dripicons-cloud-download
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cloud-upload"></i> dripicons-cloud-upload
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-code"></i> dripicons-code
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-contract"></i> dripicons-contract
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-contract-2"></i> dripicons-contract-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-conversation"></i> dripicons-conversation
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-copy"></i> dripicons-copy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-crop"></i> dripicons-crop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cross"></i> dripicons-cross
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-crosshair"></i> dripicons-crosshair
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-cutlery"></i> dripicons-cutlery
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-device-desktop"></i> dripicons-device-desktop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-device-mobile"></i> dripicons-device-mobile
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-device-tablet"></i> dripicons-device-tablet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-direction"></i> dripicons-direction
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-disc"></i> dripicons-disc
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-document"></i> dripicons-document
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-document-delete"></i> dripicons-document-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-document-edit"></i> dripicons-document-edit
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-document-new"></i> dripicons-document-new
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-document-remove"></i> dripicons-document-remove
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-dot"></i> dripicons-dot
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-dots-2"></i> dripicons-dots-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-dots-3"></i> dripicons-dots-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-download"></i> dripicons-download
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-duplicate"></i> dripicons-duplicate
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-enter"></i> dripicons-enter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-exit"></i> dripicons-exit
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-expand"></i> dripicons-expand
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-expand-2"></i> dripicons-expand-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-experiment"></i> dripicons-experiment
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-export"></i> dripicons-export
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-feed"></i> dripicons-feed
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-flag"></i> dripicons-flag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-flashlight"></i> dripicons-flashlight
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-folder"></i> dripicons-folder
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-folder-open"></i> dripicons-folder-open
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-forward"></i> dripicons-forward
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-gaming"></i> dripicons-gaming
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-gear"></i> dripicons-gear
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-graduation"></i> dripicons-graduation
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-graph-bar"></i> dripicons-graph-bar
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-graph-line"></i> dripicons-graph-line
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-graph-pie"></i> dripicons-graph-pie
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-headset"></i> dripicons-headset
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-heart"></i> dripicons-heart
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-help"></i> dripicons-help
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-home"></i> dripicons-home
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-hourglass"></i> dripicons-hourglass
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-inbox"></i> dripicons-inbox
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-information"></i> dripicons-information
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-italic"></i> dripicons-italic
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-jewel"></i> dripicons-jewel
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-lifting"></i> dripicons-lifting
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-lightbulb"></i> dripicons-lightbulb
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-link"></i> dripicons-link
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-link-broken"></i> dripicons-link-broken
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-list"></i> dripicons-list
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-loading"></i> dripicons-loading
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-location"></i> dripicons-location
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-lock"></i> dripicons-lock
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-lock-open"></i> dripicons-lock-open
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-mail"></i> dripicons-mail
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-map"></i> dripicons-map
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-loop"></i> dripicons-media-loop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-next"></i> dripicons-media-next
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-pause"></i> dripicons-media-pause
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-play"></i> dripicons-media-play
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-previous"></i> dripicons-media-previous
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-record"></i> dripicons-media-record
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-shuffle"></i> dripicons-media-shuffle
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-media-stop"></i> dripicons-media-stop
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-medical"></i> dripicons-medical
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-menu"></i> dripicons-menu
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-message"></i> dripicons-message
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-meter"></i> dripicons-meter
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-microphone"></i> dripicons-microphone
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-minus"></i> dripicons-minus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-monitor"></i> dripicons-monitor
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-move"></i> dripicons-move
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-music"></i> dripicons-music
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-network-1"></i> dripicons-network-1
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-network-2"></i> dripicons-network-2
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-network-3"></i> dripicons-network-3
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-network-4"></i> dripicons-network-4
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-network-5"></i> dripicons-network-5
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-pamphlet"></i> dripicons-pamphlet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-paperclip"></i> dripicons-paperclip
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-pencil"></i> dripicons-pencil
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-phone"></i> dripicons-phone
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-photo"></i> dripicons-photo
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-photo-group"></i> dripicons-photo-group
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-pill"></i> dripicons-pill
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-pin"></i> dripicons-pin
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-plus"></i> dripicons-plus
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-power"></i> dripicons-power
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-preview"></i> dripicons-preview
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-print"></i> dripicons-print
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-pulse"></i> dripicons-pulse
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-question"></i> dripicons-question
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-reply"></i> dripicons-reply
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-reply-all"></i> dripicons-reply-all
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-return"></i> dripicons-return
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-retweet"></i> dripicons-retweet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-rocket"></i> dripicons-rocket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-scale"></i> dripicons-scale
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-search"></i> dripicons-search
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-shopping-bag"></i> dripicons-shopping-bag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-skip"></i> dripicons-skip
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-stack"></i> dripicons-stack
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-star"></i> dripicons-star
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-stopwatch"></i> dripicons-stopwatch
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-store"></i> dripicons-store
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-suitcase"></i> dripicons-suitcase
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-swap"></i> dripicons-swap
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-tag"></i> dripicons-tag
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-tag-delete"></i> dripicons-tag-delete
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-tags"></i> dripicons-tags
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-thumbs-down"></i> dripicons-thumbs-down
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-thumbs-up"></i> dripicons-thumbs-up
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-ticket"></i> dripicons-ticket
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-time-reverse"></i> dripicons-time-reverse
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-to-do"></i> dripicons-to-do
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-toggles"></i> dripicons-toggles
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-trash"></i> dripicons-trash
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-trophy"></i> dripicons-trophy
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-upload"></i> dripicons-upload
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-user"></i> dripicons-user
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-user-group"></i> dripicons-user-group
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-user-id"></i> dripicons-user-id
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-vibrate"></i> dripicons-vibrate
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-view-apps"></i> dripicons-view-apps
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-view-list"></i> dripicons-view-list
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-view-list-large"></i> dripicons-view-list-large
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-view-thumb"></i> dripicons-view-thumb
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-volume-full"></i> dripicons-volume-full
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-volume-low"></i> dripicons-volume-low
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-volume-medium"></i> dripicons-volume-medium
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-volume-off"></i> dripicons-volume-off
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-wallet"></i> dripicons-wallet
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-warning"></i> dripicons-warning
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-web"></i> dripicons-web
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-weight"></i> dripicons-weight
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-wifi"></i> dripicons-wifi
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-wrong"></i> dripicons-wrong
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-zoom-in"></i> dripicons-zoom-in
                                                </div>
                                                <div class="col-xl-3 col-md-4 col-sm-6">
                                                    <i class="dripicons-zoom-out"></i> dripicons-zoom-out
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <?php include 'layouts/footer.php'; ?>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->

        <?php include 'layouts/footerScript.php'; ?>

        <!-- App js -->
        <script src="public/assets/js/app.js"></script>

    </body>
</html>