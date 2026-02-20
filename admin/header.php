<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="icon" type="image/png" href="./assets/img/favicon.png" />
    <!-- GLOBAL MAINLY STYLES-->
    <link href="./assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="./assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/DataTables/datatables.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="assets/css/main.min.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->


    <!-- PLUGINS STYLES-->
    <link href="./assets/vendors/summernote/dist/summernote.css" rel="stylesheet" />
    <link href="./assets/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" />
    <!-- THEME STYLES-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <style>
        a {
            color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
            text-decoration: none !important;
        }
    </style>
</head>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <header class="header">
            <div class="page-brand">
                <a class="link" href="index.php">
                    <span class="brand">
                        <img src="./assets/img/logo.png" alt="" width="100px;">
                    </span>
                    <span class="brand-mini"> <img src="./assets/img/logo.png" alt="" width="100px;"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <!-- START TOP-LEFT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                </ul>
                <!-- END TOP-LEFT TOOLBAR-->
                <!-- START TOP-RIGHT TOOLBAR-->
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="./assets/img/favicon.png"
                                alt="Stylized green letter A with a green leaf overlay, representing an eco-friendly or nature-focused organization. The background is white and there is no additional text." />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <a class="dropdown-item" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
                <!-- END TOP-RIGHT TOOLBAR-->
            </div>
        </header>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active mt-5" href="index.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Dashboard</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a href="javascript:(0);"><img width="30" height="30"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/old-shop.png" /></i>
                            <span class="nav-label"> &nbsp;&nbsp;Banner</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_banner.php">Add New Banner</a>
                            </li>
                            <li>
                                <a href="banner_list.php">Banner List</a>
                            </li>
                        </ul>
                    </li>                    
                    <li>
                        <a href="javascript:;"><img width="25" height="25"
                                src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png"
                                alt="google-blog-search" />
                            <span class="nav-label"> &nbsp;&nbsp;Blog</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_blog.php">Add New Blog </a>
                            </li>
                            <li>
                                <a href="blog_list.php">Blog List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;"><img width="25" height="25"
                                src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/FFFFFF/external-feedback-feedback-kmg-design-glyph-kmg-design.png"
                                alt="publication" />
                            <span class="nav-label"> &nbsp;&nbsp;Testimonials</span><i
                                class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="add_testimonial.php">Add New Testimonials </a>
                            </li>
                            <li>
                                <a href="testimonials_list.php">Testimonials List</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="" href="querylist.php"><img width="25" height="25"
                                src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                alt="question-shield" />
                            <span class="nav-label"> &nbsp;&nbsp;contact query List</span>
                        </a>
                    </li>
                     <li>
                        <a class="" href="subsc_list.php"><img width="25" height="25"
                                src="https://img.icons8.com/ios/50/FFFFFF/subscription.png"
                                alt="question-shield" />
                            <span class="nav-label"> &nbsp;&nbsp;Subscription List</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>