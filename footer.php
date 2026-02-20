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
                            experience design, engineering, and managed services. We create digital solutions that
                            drive real impact today while laying the groundwork for future growth.</li>
                        <li><a href="mailto:info@xpansion.com.au" class="hover-style-link"><img width="28" height="28"
                                    src="https://img.icons8.com/color/circled-envelope.png"
                                    alt="circled-envelope" />info@xpansion.com.au</a></li>

                    </ul>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Quick links</h6>
                    <ul class="footer-widget__list">
                        <li><a href="index" class="hover-style-link">Home</a></li>
                        <li><a href="about-us" class="hover-style-link">About Us</a></li>
                        <li><a href="products" class="hover-style-link">Products</a></li>
                        <li><a href="case-studies" class="hover-style-link">Case Studies</a></li>
                        <li><a href="news-pr" class="hover-style-link">News & PR</a></li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">
                    <h6 class="footer-widget__title mb-20">Services</h6>
                    <ul class="footer-widget__list">




                        <li><a href="our-services" class="hover-style-link">Application Development &
                                Modernisation</a>
                        </li>
                        <li><a href="our-services" class="hover-style-link">IT Operations & Support</a>
                        </li>
                        <li><a href="our-services" class="hover-style-link">Intelligent Automation & Business
                                Intelligence</a></li>
                        <li><a href="our-services" class="hover-style-link">AI-Powered Process
                                Automation</a>
                        </li>
                        <li><a href="our-services" class="hover-style-link"> Data & Actionable Business
                                Intelligence</a></li>
                        <li><a href="our-services" class="hover-style-link"> Cloud Advisory, Implementation &
                                Migration Services</a></li>

                    </ul>
                </div>


                <div class="col-lg-3 col-md-4 col-sm-6 footer-widget">

                    <ul class="list ht-social-networks solid-rounded-icon">
                        <li>
                            <h6 class="footer-widget__title mb-20">Newsletter</h6>
                            <div class="contact-inner">
                                <form action="save_subscription.php" style="position: relative;" id="subsForm" method="POST">
                                    <label for="Newsletter">Subscribe to our newsletter to receive updates on the latest
                                        news!</label>
                                    <input name="email" type="email" id="sub_email" placeholder="Email *" required
                                        style="border: 1px solid;">
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
                                    src="https://img.icons8.com/ios-filled/50/twitterx--v1.png" alt="twitterx--v1">
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.facebook.com/xpansiontech/" target="_blank" aria-label="Facebook"
                                class="social-link hint--bounce hint--top hint--primary">
                                <img class="link-icon" width="30" height="30"
                                    src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new">
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.instagram.com/xpansiontechnologies/" target="_blank" aria-label="Instagram"
                                class="social-link hint--bounce hint--top hint--primary">
                                <img class="link-icon" width="30" height="30"
                                    src="https://img.icons8.com/fluency/48/instagram-new.png" alt="instagram-new">
                            </a>
                        </li>
                        <li class="item">
                            <a href="https://www.linkedin.com/company/xpansiontechnologies" target="_blank" aria-label="Linkedin"
                                class="social-link hint--bounce hint--top hint--primary">
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

    fetch('save_subscription.php', {
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
