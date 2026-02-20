<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Xpansion Technologies</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
  <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
  <link rel="icon" href="assets/images/favicon.png">
  <!-- Main Style CSS -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/indexstyle.css">

  <!-- jQuery JS -->
  <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>

  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      color: #ffffff;
    }

    p {
      font-size: 15px;
      letter-spacing: 1px;
    }

    .service-card {
      border: 1px solid #cfcfcf;
    }

    .ht-team-member-style-one .move-up {
      -webkit-transform: translateY(0px);
      -ms-transform: translateY(0px);
      transform: translateY(0px);
      border: 1px solid #0959ae38;
      padding: 10px;
    }

    h6.name {
      font-weight: 400;
    }


    @media (max-width: 1000px) {
      .highlight-bar {
        font-size: 12px;
      }

      .carousel-indicators {
        margin-bottom: 0rem;
      }

      .carousel-indicators [data-bs-target] {
        width: 15px;
      }

      .carousel-control-next-icon,
      .carousel-control-prev-icon {
        width: 1.5rem;
      }
    }

    .xpn-core-item {
      cursor: pointer;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 5px;
      transition: 0.3s ease;
      font-weight: 500;
      color: #334155;
    }

    .xpn-core-item:hover {
      transform: translateY(-5px);
    }

    .xpn-core-icon {
      display: flex;
      align-items: center;
      justify-content: center;
      color: #16a34a;
      font-size: 14px;
      padding: 6px;
      border-radius: 50%;
      width: 30px;
      height: 30px;
    }

    .machine-learning-about-content .dec-text {
      text-align: justify;
    }

    .testimonial-slider__text {

      text-align: justify;
    }

    /* media query add */
    @media (min-width: 320px) and (max-width: 470px) {
      .machine-learning-about-content .dec-text {
        font-size: 14px;
        text-align: justify;
      }

      h6.name {
        
        font-size: 14px;
      }

      p:last-child {
        text-align: justify;
      }

      .testimonial-slider__text {
        font-size: 14px;
        text-align: justify;
      }
    }
  </style>

</head>

<body>

  <!--====================  header area ====================-->
  <div class="header-area" id="header">
    <?php
    include 'header.php';
    ?>
  </div>
  <!--====================  End of header area  ====================-->


  <!-- ================= HERO ================= -->
  <section class="hero-section text-white">
    <div id="carouselExampleCaptions" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <?php
        include('db_con.php');
        $result = $con->query("SELECT image_path, title, details FROM add_banner");
        $i = 0;
        ?>

        <?php while ($row = $result->fetch_assoc()): ?>
          <div class="carousel-item <?php echo ($i == 0) ? 'active' : ''; ?>">
            <img src="admin/<?php echo $row['image_path']; ?>" class="d-block w-100" alt="banner">

            <div class="carousel-caption d-none d-md-block">


              <h5 class="mb-2 text-uppercase">
                <?php
                $words = explode(' ', $row['title']);
                $chunks = array_chunk($words, 4);
                echo implode('<br>', array_map(function ($line) {
                  return implode(' ', $line);
                }, $chunks));
                ?>
              </h5>


              <p>
                <?php
                $words = explode(' ', $row['details']);
                $chunks = array_chunk($words, 10);
                echo implode('<br>', array_map(function ($line) {
                  return implode(' ', $line);
                }, $chunks));
                ?>
              </p>

            </div>
          </div>
          <?php
          $i++;
        endwhile;
        ?>

      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <div class="highlight-bar text-center text-white">
    SECURE, SCALABLE, SMART – IT SOLUTIONS FOR THE FUTURE.
  </div>



  <div class="software-innovation-about-company-area software-innovation-about-bg  pb-3 pt-5">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">
          <div class="image-inner-video-section">
            <img class="img-fluid border-radus-5" src="assets/images/banners/soft-s2-01.jpg" alt="">
          </div>
        </div>
        <div class="col-lg-6 ms-auto mt-30">
          <div class="machine-learning-about-content">
            <div class="section-title mb-20">
              <!-- section-title-wrap Start -->
              <div class="section-title-wrap text-left section-space--mb_30">
                <h6 class="section-sub-title mb-20">About Us</h6>
                <h3 class="heading text-dark">Your Strategic <span class="text-color-primary">IT & AI Partner</span>
                </h3>
              </div>
              <!-- section-title-wrap Start -->

              <p class="dec-text mt-20">Xpansion Technologies is a strategic IT and AI solutions partner committed to
                helping businesses achieve operational excellence, scalability, and sustainable growth. We combine Core
                Digital Operations, Intelligent Automation, Advanced Data Analytics, and Secure Cloud Solutions to build
                future-ready digital ecosystems. Our unified approach ensures stability, performance optimisation, and
                seamless AI integration across business processes, enabling organisations to move beyond maintenance and
                unlock measurable competitive advantage.</p>

              <section class="xpn-core-section">
                <div class="xpn-core-container">

                  <div class="xpn-core-grid">

                    <div class="xpn-core-item">
                      <i class="fa-solid fa-check xpn-core-icon"></i>
                      <span>24/7 Proactive IT Monitoring & Support</span>
                    </div>

                    <div class="xpn-core-item">
                      <i class="fa-solid fa-check xpn-core-icon"></i>
                      <span>High-Performance Application Management</span>
                    </div>

                    <div class="xpn-core-item">
                      <i class="fa-solid fa-check xpn-core-icon"></i>
                      <span>Security Operations Centre (SOC)</span>
                    </div>

                    <div class="xpn-core-item">
                      <i class="fa-solid fa-check xpn-core-icon"></i>
                      <span>Infrastructure Stability & Reliability</span>
                    </div>


                  </div>
                </div>
              </section>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- ================= SERVICES ================= -->
  <section class="py-5">
    <div class="container text-center">
      <h4 class="fw-bold text-dark">IT & AI Solutions Built for Small & Medium Businesses</h4>
      <p class="text-muted fw-bold">Simple. Secure. Scalable.</p>
      <p class="text-muted">Xpansion Technologies helps small and medium businesses run smarter by combining reliable
        IT, practical AI, and cost-effective cloud solutions.
        We focus on real outcomes reduced costs, improved efficiency, and better business decisions without complexity
        or unnecessary tools.</p>


      <div class="row mt-4">
        <div class="col-md-4">
          <div class="service-card">
            <img src="assets/images/service1.jpg" class="img-fluid">
            <h5 class="text-dark">Core IT & Digital Operations</h5>
            <p>Custom applications and modernization of systems.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <img src="assets/images/service2.jpg" class="img-fluid">
            <h5 class="text-dark">AI & Automation</h5>
            <p>Smarter workflows powered by AI-driven solutions.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <img src="assets/images/service3.jpg" class="img-fluid">
            <h5 class="text-dark">Data & Analytics</h5>
            <p>Dashboards and insights for better decisions.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================= OUR AMAZING PRODUCTS ================= -->


  <div class="team-member-wrapper section-space--pt_100 section-space--pb_40" style="background-color: #f8f8f8;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-title section-space--mb_60">
            <h3 class="heading text-dark">OUR <span class="text-color-primary">AMAZING </span> PRODUCTS</h3>
            <p class="text mt-30">Following are some of Our Amazing Products created using wide range of technologies.
              Products such as invoicing system, events management system, project management system, ect. are very
              popular with our clients </p>

          </div>
          <div class="contact-us-button mt-20 mb-10">
            <a href="products" class="btn btn--secondary">View All Products</a>
          </div>
        </div>
        <div class="col-lg-8 ht-team-member-style-one">
          <div class="row">
            <div class="col-lg-6 col-md-6 wow move-up" style="background-color: rgb(12 90 173) !important;">
              <div class="grid-item">
                <div class="ht-team-member mb-0">
                  <div class="team-image d-flex justify-content-center mt-3">
                    <img class="img-fluid"
                      src="https://portfolio.xpansion.com.au/assets/images/inner-page/collection/3.png" alt="">
                  </div>
                  <div class="team-info mb-3">
                    <h6 class="name text-light">Visitor Management System with real-time analytics, secure cloud access,
                      and paperless operations. </h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow move-up bg-success">
              <div class="grid-item">
                <div class="ht-team-member mb-0">
                  <div class="team-image d-flex justify-content-center mt-3">
                    <img class="img-fluid"
                      src="https://xpansion.com.au/mywpfiles/wp-content/uploads/2025/03/b2b-platform.png" alt="">
                  </div>
                  <div class="team-info mb-3">
                    <h6 class="name text-light">A B2B platform connecting food suppliers with HORECA businesses,
                      streamlining the entire supply chain. </h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow move-up bg-success">
              <div class="grid-item">
                <div class="ht-team-member mb-0">
                  <div class="team-image d-flex justify-content-center mt-3">
                    <img class="img-fluid"
                      src="https://portfolio.xpansion.com.au/assets/images/inner-page/collection/1.png" alt="">
                  </div>
                  <div class="team-info mb-3">
                    <h6 class="name text-light">End-to-end project management system with dashboards, reporting and team
                      collaboration tools.</h6>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 wow move-up" style="background-color: rgb(12 90 173) !important;">
              <div class="grid-item">
                <div class="ht-team-member mb-0">
                  <div class="team-image d-flex justify-content-center mt-3">
                    <img class="img-fluid"
                      src="https://portfolio.xpansion.com.au/assets/images/inner-page/collection/7.png" alt="">
                  </div>
                  <div class="team-info mb-3">
                    <h6 class="name text-light">Smart invoicing and billing platform with automation, tax support and
                      financial analytics. </h6>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="brand-logo-slider-area section-space--ptb_60">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- brand logo slider -->
          <div class="conact-us-wrap-three">
            <h6 class="mb-3 section-sub-title">Our Amazing Partners</h6>
            <h4 class="heading text-dark mb-3">We Partner With Top Leaders</h4>
          </div>
          <div class="brand-logo-slider__container-area">
            <div class="swiper-container brand-logo-slider__container">
              <div class="swiper-wrapper brand-logo-slider__four">
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/1.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/2.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/3.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/5.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/1.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/3.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/2.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/5.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
                <div class="swiper-slide brand-logo brand-logo--slider">
                  <a href="#">
                    <div class="brand-logo__image">
                      <img src="assets/images/partners/4.png" class="img-fluid" alt="">
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--====================  testimonial section ====================-->
  <div class="testimonial-slider-area bg-gray section-space--ptb_100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title-wrap text-center section-space--mb_40">
            <h6 class="section-sub-title mb-20">Testimonials</h6>
            <h3 class="heading text-dark">Transforming Businesses With <span class="text-color-primary">
                Technology</span></h3>
          </div>
          <div class="testimonial-slider">
            <div class="swiper-container testimonial-slider__container">
              <div class="swiper-wrapper testimonial-slider__wrapper">
                <?php
                include('db_con.php');
                $result = $con->query("SELECT name, review, designation, image_path FROM testimonials ORDER by id DESC");
                ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="swiper-slide">
                    <div class="testimonial-slider__one wow move-up">

                      <div class="testimonial-slider--info">
                        <div class="testimonial-slider__media">
                          <img src="admin/<?php echo $row['image_path']; ?>" class="img-fluid" alt="">
                        </div>

                        <div class="testimonial-slider__author">
                          <div class="testimonial-rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                          </div>
                          <div class="author-info">
                            <h6 class="name"><?php echo $row['name']; ?></h6>
                          </div>
                        </div>
                      </div>

                      <div class="testimonial-slider__text"> <?php echo $row['review']; ?></div>

                    </div>
                  </div>
                <?php endwhile; ?>

              </div>
              <div class="swiper-pagination swiper-pagination-t01 section-space--mt_30"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--====================  End of testimonial section  ====================-->


  <div class="contact-us-section-wrappaer machine-learning-contact-us-bg section-space--ptb_120">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 col-md-6">
          <div class="conact-us-wrap-three">
            <h6 class="mb-3 section-sub-title">Let’s Connect</h6>
            <h3 class="heading text-white">Start Your Digital & AI Transformation Journey With Us</h3>
          </div>
          <div class="contact-info-two mt-40 text-left">
            <div class="contact-us-button mt-20">
              <a href="contact-us" class="btn btn--secondary">Contact us</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="service-projects-wrapper section-space--ptb_100">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title-wrap text-center section-space--mb_60">
            <h6 class="section-sub-title mb-20">Latest news</h6>
            <h3 class="heading text-dark">Latest news are <span class="text-color-primary">on top all times</span></h3>
          </div>
        </div>
      </div>
      <div class="latest-news-wrap">
        <div class="row">
          <?php
          include('db_con.php');

          $sql = "SELECT blogs.id, blogs.blog_heading AS heading, blogs_images.image,
        blogs.blog_desc_first, blogs.blog_url, blogs.created_at
        FROM blogs 
        INNER JOIN blogs_images ON blogs.id = blogs_images.blog_id
        GROUP BY blogs.id
        ORDER BY blogs.id DESC
        LIMIT 5";

          $result = $con->query($sql);

          $blogs = [];
          if ($result && $result->num_rows > 0)
          {
            while ($r = $result->fetch_assoc())
            {
              $blogs[] = $r;
            }
          }
          ?>

          <!-- LEFT BIG BLOG -->
          <div class="col-lg-6">
            <?php if (!empty($blogs))
            {
              $b = $blogs[0]; ?>

              <div class="single-blog-lg-item wow move-up">
                <a href="blog/<?php echo $b['blog_url']; ?>">
                  <div class="post-blog-thumbnail">
                    <img class="img-fluid"
                      src="blog/blog_uploads/<?php echo !empty($b['image']) ? $b['image'] : 'default.jpg'; ?>" alt="">

                    <div class="post-meta mt-20">

                      <div class="post-date">
                        <span class="far fa-calendar meta-icon"></span>
                        <?php echo date("F d, Y", strtotime($b['created_at'])); ?>
                      </div>
                    </div>
                  </div>
                </a>

                <div class="post-info lg-blog-post-info mt-20">
                  <h4 class="post-title text-dark">
                    <a href="blog/<?php echo $b['blog_url']; ?>">
                      <?php echo $b['heading']; ?>
                    </a>
                  </h4>

                  <div class="post-excerpt mt-15">
                    <p><?php echo substr(strip_tags($b['blog_desc_first']), 0, 120); ?>...</p>
                  </div>

                  <div class="btn-text mt-15">
                    <a href="blog/<?php echo $b['blog_url']; ?>">
                      Read more <i class="ml-1 button-icon fas fa-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>

            <?php } ?>
          </div>


          <!-- RIGHT SMALL BLOG LIST -->
          <div class="col-lg-6 blog-list-service">
            <?php
            for ($i = 1; $i < count($blogs); $i++)
            {
              $b = $blogs[$i];
              ?>
              <div class="single-blog-lg-list wow move-up">
                <a href="blog/<?php echo $b['blog_url']; ?>">
                  <div class="post-blog-thumbnail">
                    <img class="img-fluid"
                      src="blog/blog_uploads/<?php echo !empty($b['image']) ? $b['image'] : 'default.jpg'; ?>" alt="">
                    <div class="post-meta mt-20">
                      <!-- <div class="post-author">
                        <img class="img-fluid avatar-96" src="assets/images/team/admin.webp" alt="">
                        Admin
                      </div> -->
                    </div>
                  </div>
                </a>

                <div class="post-info lg-blog-post-info">
                  <div class="post-meta mb-10">
                    <div class="post-date">
                      <span class="far fa-calendar meta-icon"></span>
                      <?php echo date("F d, Y", strtotime($b['created_at'])); ?>
                    </div>
                  </div>

                  <h5 class="post-title text-dark">
                    <a href="blog/<?php echo $b['blog_url']; ?>">
                      <?php echo $b['heading']; ?>
                    </a>
                  </h5>
                </div>
              </div>
            <?php } ?>
          </div>

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

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    let currentIndex = 0;
    const testimonials = document.querySelectorAll(".testimonial-item");
    const slideInterval = 4000; // 4 seconds

    function showTestimonial(index) {
      testimonials.forEach((item, i) => {
        item.classList.toggle("active", i === index);
      });
    }

    function autoSlide() {
      currentIndex = (currentIndex + 1) % testimonials.length;
      showTestimonial(currentIndex);
    }

    // Start auto sliding
    setInterval(autoSlide, slideInterval);
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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