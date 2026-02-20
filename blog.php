<?php
include 'db_con.php';

if (isset($_GET['page_url']))
{

    $page_url = mysqli_real_escape_string($con, $_GET['page_url']);


    $blog_query = "SELECT * FROM blogs WHERE blog_url = '$page_url'";
    $blog_result = mysqli_query($con, $blog_query);

    if ($blog_result && mysqli_num_rows($blog_result) > 0)
    {

        $blog = mysqli_fetch_assoc($blog_result);


        $image_query = "SELECT * FROM blogs_images WHERE blog_id = '{$blog['id']}'";
        $image_result = mysqli_query($con, $image_query);
        ?>


        <?php
    } else
    {

        echo "<p>Product not found.</p>";
    }
} else
{

    echo "<p>No product URL provided.</p>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx" dir="ltr">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $blog['blog_desc_first'] ?></title>
    <meta name="description" content="<?php echo $blog['blog_desc_second'] ?>">
    <meta name="keywords" content="<?php echo $blog['blog_point_one'] ?>">
    <link rel="icon" href="../assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <style>
        p {
            box-sizing: border-box;
            margin-right: 0px;
            margin-bottom: 20px;
            margin-left: 0px;
            padding: 0px;
            color: #696969 !important;
            font-family: inherit !important;
            font-size: 15px;
            letter-spacing: 1px;
            text-align: justify;
        }


        .blog-content * {
            box-sizing: border-box;
            margin: 0 0 20px 0;
            padding: 0;
            color: #696969 !important;
            font-family: inherit !important;
            font-size: 15px;
            letter-spacing: 1px;
            text-align: justify;
        }

        .blog-content h1,
        .blog-content h2,
        .blog-content h3,
        .blog-content h4,
        .blog-content h5,
        .blog-content h6 {
            font-size: 20px !important;
            color: #000000 !important;
            font-weight: bold;

        }

        .page-sidebar-right {
            padding-left: 0px;
            background: #ededed;
            color: white;
            padding: 13px;
        }

        @media (min-width: 320px) and (max-width: 470px) {
            .blog-content * {

                font-size: 14px !important;
            }

            p {
                font-size: 14px !important;
            }


        }


        
    </style>
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
        <div class="header-bottom-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header position-relative">

                            <div class="header-right flexible-image-slider-wrap justify-content-between d-xl-none">
                                <!-- brand logo -->
                                <div class="header__logo top-logo">
                                    <a href="../index">
                                        <img src="assets/images/logo.png" aria-label="Xpansion Logo" width="160"
                                            height="48" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!-- mobile menu -->
                                <div
                                    style="border: 1px solid #0959ae; padding: 5px; border-radius: 3px; background: #0959ae;">
                                    <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger"
                                        style="margin: 0px;">
                                        <i></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-bottom-wrap bg-light d-md-block d-none header-sticky">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="header-bottom-inner position-relative">
                                <div class="header-bottom-left-wrap">

                                    <!-- navigation menu -->
                                    <div class="header__navigation d-none d-xl-block">


                                        <nav class="navigation-menu navigation-menu--text_white"
                                            style="display: flex; justify-content: space-between; padding: 10px; align-items: center;">
                                            <a href="index">
                                                <img src="assets/images/logo.png" aria-label="Xpansion Logo" width="160"
                                                    height="48" class="img-fluid" alt="">
                                            </a>
                                            <ul id="main-desktop-menu">
                                                <li>
                                                    <a href="../index"><span>Home</span></a>
                                                </li>
                                                <li>
                                                    <a href="../about-us"><span>About Us</span></a>
                                                </li>
                                                <li>
                                                    <a href="../our-services"><span>Our Services</span></a>
                                                </li>
                                                <li>
                                                    <a href="../products"><span>Products</span></a>
                                                </li>
                                                <li>
                                                    <a href="../case-studies"><span>Case Studies</span></a>
                                                </li>
                                                <li>
                                                    <a href="../news-pr"><span>News & PR</span></a>
                                                </li>
                                                <li>
                                                    <a href="../contact-us"><span>Contact Us</span></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--====================  mobile menu overlay ====================-->
        <div class="mobile-menu-overlay" id="mobile-menu-overlay">
            <div class="mobile-menu-overlay__inner">
                <div class="mobile-menu-overlay__header">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-md-6 col-8">
                                <!-- logo -->
                                <div class="logo">
                                    <a href="index">
                                        <img src="assets/images/logo.png" class="img-fluid" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-4">
                                <!-- mobile menu content -->
                                <div class="mobile-menu-content text-end">
                                    <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-overlay__body">
                    <nav class="offcanvas-navigation">
                        <!-- Desktop menu will auto load here -->
                    </nav>

                </div>
            </div>
        </div>
        <!--====================  End of mobile menu overlay  ====================-->
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
                                    <li class="breadcrumb-item"><a href="../index">Home</a></li>
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
            <!--====================  Blog Area Start ====================-->
            <div class="blog-pages-wrapper section-space--ptb_100">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 order-lg-2 order-2">
                            <div class="page-sidebar-content-wrapper page-sidebar-right small-mt__40 tablet-mt__40">

                                <!-- === Sidebar Widget Start === -->
                                <div class="sidebar-widget widget-blog-recent-post wow move-up">

                                    <h4 class="sidebar-widget-title mb-4">Recent News & PR</h4>

                                    <ul class="list-unstyled">
                                        <?php
                                        include('db_con.php');

                                        // Fetch latest 5 blogs
                                        $sql_recent = "
                                            SELECT b.id, b.blog_heading, b.blog_url, b.created_at, bi.image AS blog_image
                                            FROM blogs b
                                            LEFT JOIN blogs_images bi ON b.id = bi.blog_id
                                            GROUP BY b.id
                                            ORDER BY b.created_at DESC
                                            LIMIT 5
                                        ";

                                        $res_recent = mysqli_query($con, $sql_recent);

                                        if ($res_recent && mysqli_num_rows($res_recent) > 0)
                                        {
                                            while ($row = mysqli_fetch_assoc($res_recent))
                                            {
                                                $blog_id = $row['id'];
                                                $blog_heading = $row['blog_heading'];
                                                $blog_url = $row['blog_url'];
                                                $blog_image = !empty($row['blog_image']) ? "blog_uploads/" . $row['blog_image'] : "assets/images/blog/blog-sidebar-ads.webp";
                                                $blog_date = date("F d, Y", strtotime($row['created_at']));
                                                ?>
                                                <li class="d-flex align-items-start mb-3 sidebar-blog-item">
                                                    <a href="<?php echo $blog_url; ?>"
                                                        class="d-flex text-decoration-none align-items-start"
                                                        style="gap: 15px;">

                                                        <div class="recent-blog-thumb">
                                                            <img class="img-fluid rounded" src="<?php echo $blog_image; ?>"
                                                                alt="<?php echo $blog_heading; ?>"
                                                                style="width: 100px; height: 70px; object-fit: cover; border-radius: 8px;">
                                                        </div>

                                                        <div class="recent-blog-info">
                                                            <span class="text-muted d-block mb-1" style="font-size: 12px;">
                                                                <i class="far fa-calendar-alt"></i> <?php echo $blog_date; ?>
                                                            </span>
                                                            <p class="mb-0"
                                                                style="font-size: 14px; color: #333; line-height: 1.4;">
                                                                <?php echo strlen($blog_heading) > 50 ? substr($blog_heading, 0, 50) . '...' : $blog_heading; ?>
                                                            </p>
                                                        </div>

                                                    </a>

                                                </li>
                                                <?php
                                            }
                                        } else
                                        {
                                            echo "<li>No recent blogs found</li>";
                                        }
                                        ?>
                                    </ul>

                                </div>

                            </div>

                            <style>

                            </style>

                        </div>
                        <div class="col-lg-8 order-lg-1 order-1">
                            <div class="main-blog-wrap">
                                <!--======= Single Blog Item Start ========-->
                                <div class="single-blog-item">
                                    <!-- Post Feature Start -->
                                    <div class="post-feature blog-thumbnail wow move-up"> <?php

                                    $image_row = mysqli_fetch_assoc($image_result);
                                    if ($image_row)
                                    {
                                        echo "<img src='blog_uploads/{$image_row['image']}' class='img-fluid' />";
                                    } else
                                    {
                                        echo "<p>No product images available.</p>";
                                    }
                                    ?>
                                    </div>
                                    <!-- Post Feature End -->

                                    <!-- Post info Start -->
                                    <div class="post-info lg-blog-post-info  wow move-up">
                                        <div class="post-categories">
                                            <a href="#"> Success Story, Tips</a>
                                        </div>

                                        <h3 class="post-title">
                                            <?php echo $blog['blog_heading'] ?>
                                        </h3>

                                        <div class="post-meta mt-20">

                                            <div class="post-date">
                                                <span class="far fa-calendar meta-icon"></span>
                                                <?php echo date("F d, Y", strtotime($blog['created_at'])); ?>
                                            </div>


                                        </div>

                                        <div class="post-excerpt mt-15 blog-content">
                                            <p>
                                                <?php echo $blog['blog_desc_two'] ?>
                                            </p>





                                        </div>

                                    </div>
                                    <!-- Post info End -->
                                </div>
                                <!--===== Single Blog Item End =========-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Blog Area End  ====================-->


        </div>

        <!-- ================= FOOTER ================= -->
        <div class="footer-area-wrapper bg-gray">
            <div class="footer-area section-space--ptb_80">
                <div class="container">
                    <div class="row footer-widget-wrapper">
                        <div class="col-lg-4 col-md-6 col-sm-6 footer-widget">
                            <div class="footer-widget__logo mb-30">
                                <img src="assets/images/logo.png" width="160" height="48" class="img-fluid" alt="">
                            </div>
                            <ul class="footer-widget__list">
                                <li>Xpansion Technology is a global full-service digital partner, blending strategy,
                                    experience design, engineering, and managed services. We create digital solutions
                                    that
                                    drive real impact today while laying the groundwork for future growth.</li>
                                <li><a href="mailto:info@xpansion.com.au" class="hover-style-link"><img width="28"
                                            height="28" src="https://img.icons8.com/color/circled-envelope.png"
                                            alt="circled-envelope" />info@xpansion.com.au</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Quick links</h6>
                            <ul class="footer-widget__list">
                                <li><a href="../index" class="hover-style-link">Home</a></li>
                                <li><a href="../about-us" class="hover-style-link">About Us</a></li>
                                <li><a href="../products" class="hover-style-link">Products</a></li>
                                <li><a href="../case-studies" class="hover-style-link">Case Studies</a></li>
                                <li><a href="../news-pr" class="hover-style-link">News & PR</a></li>

                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                            <h6 class="footer-widget__title mb-20">Services</h6>
                            <ul class="footer-widget__list">




                                <li><a href="../our-services" class="hover-style-link">Application Development &
                                        Modernisation</a>
                                </li>
                                <li><a href="../our-services" class="hover-style-link">IT Operations & Support</a>
                                </li>
                                <li><a href="../our-services" class="hover-style-link">Intelligent Automation & Business
                                        Intelligence</a></li>
                                <li><a href="../our-services" class="hover-style-link">AI-Powered Process
                                        Automation</a>
                                </li>
                                <li><a href="../our-services" class="hover-style-link"> Data & Actionable Business
                                        Intelligence</a></li>
                                <li><a href="../our-services" class="hover-style-link"> Cloud Advisory, Implementation &
                                        Migration Services</a></li>

                            </ul>
                        </div>


                        <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">

                            <ul class="list ht-social-networks solid-rounded-icon">
                                <li>
                                    <h6 class="footer-widget__title mb-20">Newsletter</h6>
                                    <div class="contact-inner">
                                        <form action="../save_subscription.php" style="position: relative;"
                                            id="subsForm" method="POST">
                                            <label for="Newsletter">Subscribe to our newsletter to receive updates on
                                                the latest
                                                news!</label>
                                            <input name="email" type="email" id="sub_email" placeholder="Email *"
                                                required style="border: 1px solid;">
                                            <button type="submit"
                                                style="position: absolute; right: 5px; bottom: 8px; border: 1px solid #0959ae; border-radius: 4px; background: #000000e3;"><img
                                                    width="34" height="34"
                                                    src="https://img.icons8.com/sf-black-filled/64/FFFFFF/sent.png"
                                                    alt="sent" /></button>
                                        </form>

                                    </div>
                                </li>


                                <li class="item">
                                    <a href="https://x.com/XpansionTech" target="_blank" aria-label="Twitter"
                                        class="social-link hint--bounce hint--top hint--primary">

                                        <img class="link-icon" width="30" height="30"
                                            src="https://img.icons8.com/ios-filled/50/twitterx--v1.png"
                                            alt="twitterx--v1">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://www.facebook.com/xpansiontech/" target="_blank"
                                        aria-label="Facebook" class="social-link hint--bounce hint--top hint--primary">
                                        <img class="link-icon" width="30" height="30"
                                            src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://www.instagram.com/xpansiontechnologies/" target="_blank"
                                        aria-label="Instagram" class="social-link hint--bounce hint--top hint--primary">
                                        <img class="link-icon" width="30" height="30"
                                            src="https://img.icons8.com/fluency/48/instagram-new.png"
                                            alt="instagram-new">
                                    </a>
                                </li>
                                <li class="item">
                                    <a href="https://www.linkedin.com/company/xpansiontechnologies" target="_blank"
                                        aria-label="Linkedin" class="social-link hint--bounce hint--top hint--primary">
                                        <img class="link-icon" width="30" height="30"
                                            src="https://img.icons8.com/fluency/48/linkedin.png" alt="linkedin">
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-area section-space--pb_30">
                <div class="container">
                    <hr>
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center text-md-start">
                            <center><span class="copyright-text">© 2026 Xpansion Technologies . <a href="#"> All
                                        Rights Reserved.</a></span></center>
                        </div>

                    </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('subsForm').addEventListener('submit', function (e) {
            e.preventDefault();

            var emailInput = document.getElementById('sub_email');
            var sub_email = emailInput.value.trim();
            var submitBtn = this.querySelector('button[type="submit"]');

            // Check empty
            if (sub_email === "") {
                Swal.fire({
                    title: 'Required!',
                    text: 'Please fill the email field.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Validate email
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(sub_email)) {
                Swal.fire({
                    title: 'Invalid Email!',
                    text: 'Please enter a valid email address.',
                    icon: 'warning',
                    confirmButtonText: 'OK'
                });
                return;
            }

            // Disable button while sending
            submitBtn.disabled = true;
            submitBtn.style.opacity = 0.6;

            var formData = new FormData(this);

            fetch('../save_subscription.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.text())
                .then(result => {
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = 1;
                    result = result.trim();

                    if (result === 'success') {
                        Swal.fire({
                            title: 'Thank You!',
                            text: 'You are successfully subscribed to our newsletter.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then(() => emailInput.value = '');
                    } else if (result.includes('already subscribed')) {
                        Swal.fire({
                            title: 'Notice',
                            text: 'This email is already subscribed.',
                            icon: 'info',
                            confirmButtonText: 'OK'
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: result || 'Something went wrong. Please try again.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    submitBtn.disabled = false;
                    submitBtn.style.opacity = 1;
                    Swal.fire({
                        title: 'Error!',
                        text: 'Network error. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                    console.error('Subscription Error:', error);
                });
        });
    </script>


</body>

</html>