<?php include 'check_session.php' ?>
<?php
include('../db_con.php');
include('header.php');
// Get total count of projects
$total_banner = $con->query("SELECT COUNT(*) AS total FROM add_banner")->fetch_assoc()['total'];

$total_blog = $con->query("SELECT COUNT(*) AS total FROM blogs")->fetch_assoc()['total'];

$total_testimonials = $con->query("SELECT COUNT(*) AS total FROM testimonials")->fetch_assoc()['total'];

$total_con = $con->query("SELECT COUNT(*) AS total FROM contact")->fetch_assoc()['total'];
?>
<!-- END SIDEBAR-->
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="banner_list.php">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_banner; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Banners</div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/old-shop.png" /></i>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="blog_list.php">
                    <div class="ibox bg-info color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_blog; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Blogs</div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/ios-filled/50/FFFFFF/google-blog-search.png"
                                    alt="google-blog-search" /></i>

                        </div>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="testimonials_list.php">
                    <div class="ibox bg-success color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_testimonials; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Testimonials</div><i class="widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/external-kmg-design-glyph-kmg-design/32/FFFFFF/external-feedback-feedback-kmg-design-glyph-kmg-design.png"
                                    alt="ask-question" /></i>

                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6">
                <a href="querylist.php">
                    <div class="ibox bg-warning color-white widget-stat">
                        <div class="ibox-body">
                            <h2 class="m-b-5 font-strong"><?php echo $total_con; ?></h2>
                            <div class="m-b-5 fw-bold mt-2">Total Query </div><i class=" widget-stat-icon"><img
                                    width="50" height="50"
                                    src="https://img.icons8.com/glyph-neue/64/FFFFFF/question-shield.png"
                                    alt="google-blog-search" /></i>

                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    include('footer.php');
    ?>