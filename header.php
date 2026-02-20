<?php
ob_start(function($buffer){
    return preg_replace(
        '/<img(?![^>]*loading=)([^>]+)>/i',
        '<img loading="lazy"$1>',
        $buffer
    );

});
?>
<div class="header-bottom-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="header position-relative">

                    <div class="header-right flexible-image-slider-wrap justify-content-between d-xl-none">
                        <!-- brand logo -->
                        <div class="header__logo top-logo">
                            <a href="index">
                                <img src="assets/images/logo.png" aria-label="Xpansion Logo" width="160" height="48"
                                    class="img-fluid" alt="">
                            </a>
                        </div>

                        <!-- mobile menu -->
                        <div style="border: 1px solid #0959ae; padding: 5px; border-radius: 3px; background: #0959ae;">
                            <div class="mobile-navigation-icon d-block d-xl-none" id="mobile-menu-trigger" style="margin: 0px;">
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
                                            <a href="index"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a href="about-us"><span>About Us</span></a>
                                        </li>
                                        <li>
                                            <a href="our-services"><span>Our Services</span></a>
                                        </li>
                                        <li>
                                            <a href="products"><span>Products</span></a>
                                        </li>
                                        <li>
                                            <a href="case-studies"><span>Case Studies</span></a>
                                        </li>
                                        <li>
                                            <a href="news-pr"><span>News & PR</span></a>
                                        </li>
                                        <li>
                                            <a href="contact-us"><span>Contact Us</span></a>
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