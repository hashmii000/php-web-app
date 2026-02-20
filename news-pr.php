<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>News & PR - Xpansion Technologies</title>
    <meta name="description"
        content="Xpansion Technology: Your global digital partner for strategy, experience design, engineering &amp; managed services. Drive impact today &amp; build for future growth with our innovative digital solutions." />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="News & PR - Xpansion Technologies" />
    <meta property="og:description"
        content="Xpansion Technology: Your global digital partner for strategy, experience design, engineering &amp; managed services. Drive impact today &amp; build for future growth with our innovative digital solutions." />
    <meta property="og:site_name" content="Xpansion Technologies" />

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

</head>

<body>

    <div class="preloader-activate preloader-active open_tm_preloader">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>

    <!--====================  header area ====================-->
    <div class="header-area" id="header">
        <?php
        include 'header.php';
        ?>

    </div>
    <!--====================  End of header area  ====================-->



    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!-- breadcrumb-area start -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb_box text-center">
                                <h2 class="breadcrumb-title">News & PR</h2>
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-list">
                                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                                    <img width="18" height="18"
                                        src="https://img.icons8.com/material-sharp/right--v2.png" alt="right--v2" />
                                    <li class="breadcrumb-item">News & PR</li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area end -->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">
                        <?php
                        include('db_con.php');

                        $sql = "SELECT b.id, b.blog_heading AS heading, b.blog_desc_first, b.blog_url, b.created_at, bi.image
        FROM blogs b
        LEFT JOIN blogs_images bi ON b.id = bi.blog_id
        AND bi.id = (SELECT MIN(id) FROM blogs_images WHERE blog_id = b.id)
        ORDER BY b.id DESC";

                        $result = $con->query($sql);

                        if ($result && $result->num_rows > 0)
                        {
                            while ($row = $result->fetch_assoc())
                            {
                                $heading = $row['heading'];
                                $created_at = $row['created_at'];
                                $image = $row['image'];
                                $blog_desc_first = $row['blog_desc_first'];
                                $blog_url = $row['blog_url'];
                                ?>
                                <div class="col-lg-4 col-md-6  mb-30 wow move-up">
                                    <!--======= Single Blog Item Start ========-->
                                    <div class="single-blog-item blog-grid">
                                        <!-- Post Feature Start -->
                                        <div class="post-feature blog-thumbnail">
                                            <a href="blog/<?php echo $blog_url; ?>">
                                                <img class="img-fluid" src="blog/blog_uploads/<?php echo $image; ?>"
                                                    alt="Blog Images">
                                            </a>
                                        </div>
                                        <!-- Post Feature End -->

                                        <!-- Post info Start -->
                                        <div class="post-info lg-blog-post-info">
                                            <div class="post-meta">
                                                <div class="post-date">
                                                    <span class="far fa-calendar meta-icon"></span>
                                                   <?php echo date("d M Y", strtotime($created_at)); ?>
                                                </div>
                                            </div>

                                            <h5 class="post-title font-weight--bold">
                                                <a href="blog/<?php echo $blog_url; ?>">Ideas for High Returns on Investment</a>
                                            </h5>

                                            <div class="post-excerpt mt-15">
                                                <p>Using the profit accumulator is one such way, and you should understand why
                                                    it increases your chances of the profits. …</p>
                                            </div>
                                            <div class="btn-text">
                                                <a href="blog/<?php echo $blog_url; ?>">Read more <i class="ml-1 button-icon fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                        <!-- Post info End -->
                                    </div>
                                    <!--===== Single Blog Item End =========-->

                                </div>
                                <?php
                            }
                        } else
                        {
                            ?>
                            <div class="col-12 text-center">
                                <div class="alert alert-warning" role="alert">
                                    Blog not found!
                                </div>
                            </div>
                            <?php
                        }
                        ?>



                    </div>
                </div>
            </div>



        </div>

        <!-- ================= FOOTER ================= -->
        <div class="footer-area-wrapper bg-gray" id="footer">
            <?php
            include 'footer.php';
            ?>
        </div>
        <!--====================  End of footer area  ====================-->



    </div>

    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->





    <!-- JS
    ============================================ -->
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>


    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.min.js"></script>


    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {

            // Desktop menu select karo
            const desktopMenu = document.querySelector("#main-desktop-menu");

            // Mobile nav container select karo
            const mobileNav = document.querySelector(".offcanvas-navigation");

            if (desktopMenu && mobileNav) {

                // Desktop UL clone karo
                const clonedMenu = desktopMenu.cloneNode(true);

                // Mobile nav me add karo
                mobileNav.appendChild(clonedMenu);
            }

        });
    </script>

</body>

</html>