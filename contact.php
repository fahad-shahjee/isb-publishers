<?php
$formStatus = $_GET['status'] ?? '';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Contact Us - ISB Ghostwriters</title>
    <meta name="description" content="Get in touch with ISB Ghostwriters for inquiries and support.">
    <link rel="canonical" href="https://isbghostwriters.com/contact.php">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--<< magnific-popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <!--<< fontawesome-all.min.css >>-->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!--<< swiper-bundle.min.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--<< odometer.css >>-->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!--<< ion.rangeSlider.min.css >>-->
    <link rel="stylesheet" href="assets/css/ion.rangeSlider.min.css">
    <!--<< effect-slicer.css >>-->
    <link rel="stylesheet" href="assets/css/effect-slicer.min.css">
    <!--<< animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--<< default.css >>-->
    <link rel="stylesheet" href="assets/css/defauls-spacing.min.css">
    <!--<< main.css >>-->
    <link rel="stylesheet" href="assets/css/main.min.css">
</head>

<body>

    <!-- Start Cursor Pointer -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>
    <!-- End Cursor Pointer -->

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fa-sharp fa-regular fa-arrow-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    <?php include 'components/headerinner.php'; ?>
    <!-- header-area-end -->
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- td-breadcrumb-area-start -->
                <div class="td-breadcrumb-area td-breadcrumb-spacing mb-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-xxl-9">
                                <div class="td-breadcrumb-wrap">
                                    <h1 class="td-section-page-title  wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">Would you like more<br> information? we are<br>
                                        happy <span>to help you!</span></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-breadcrumb-area-end -->

                <!-- td-contact-main-area -->
                <div class="td-contact-main pt-155 pb-120">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="td-contact-title-wrap mb-30  wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">
                                    <h2 class="td-contact-main-title">Let’s contact for<br>
                                        better <span>result</span></h2>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="td-contact-form-box mb-30  wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                    <form id="contact-form" action="assets/mail.php" method="POST">
                                        <div class="row">
                                            <div style="position:absolute; left:-9999px;" aria-hidden="true">
                                                <label for="website">Leave this field empty</label>
                                                <input type="text" name="website" id="website" tabindex="-1" autocomplete="off">
                                            </div>
                                            <div class="col-12 mb-25">
                                                <label for="name">Name</label>
                                                <input class="td-input" name="name" id="name" type="text">
                                            </div>
                                            <div class="col-md-6 mb-25">
                                                <label for="email">Email</label>
                                                <input class="td-input" name="email" id="email" type="text">
                                            </div>
                                            <div class="col-md-6 mb-25">
                                                <label for="phone">Phone</label>
                                                <input class="td-input" name="phone" id="phone" type="text">
                                            </div>
                                            <div class="col-12 mb-25">
                                                <label for="Subject">Subject</label>
                                                <input class="td-input" name="Subject" id="Subject" type="text">
                                            </div>
                                            <div class="col-md-12 mb-30">
                                                <label for="message">Message</label>
                                                <textarea class="td-input message" name="message" id="message" cols="30" rows="10"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="td-btn-group">
                                                    <span class="td-btn-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                    <span class="td-btn-2 td-btn-primary">Send message</span>
                                                    <span class="td-btn-circle">
                                                        <i class="fa-solid fa-arrow-right"></i>
                                                    </span>
                                                </button>
                                                <?php if ($formStatus === 'success'): ?>
                                                <p class="ajax-response success pt-20">Thank You! Your message has been sent.</p>
                                                <?php elseif ($formStatus === 'error'): ?>
                                                <p class="ajax-response error pt-20">Oops! Please complete the form and try again.</p>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-contact-main-emd -->

                <!-- td-contact-branch-area-start -->
                <div class="td-contact-branch-area pb-140">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center  wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <h2 class="td-section-page-title mb-105">Our Branch <span>Offices</span></h2>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="td-contact-branch-item td-contact-branch-border  wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <h3 class="td-contact-branch-name mb-20">Florida</h3>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-thumb mb-20">
                                                <img class="w-100 td-rounded-10" src="assets/img/contact/thumb.jpg" alt="ISB Ghostwriters Florida branch office" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-lucation ml-40 mb-20">
                                                <h5 class="td-contact-branch-lucation-title">Office Address</h5>
                                                <a class="lucation mb-110" href="#">1322 N Pine Hills Road, Orlando, Fl, 32808</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-number ml-40 mb-20">
                                                <a class="mb-30" href="tel:+17869494620">+1 786-949-4620</a>
                                                <a class="link" href="mailto:info@isbghostwriters.com">info@isbghostwriters.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="td-contact-branch-item wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <h3 class="td-contact-branch-name mb-20">California</h3>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-thumb mb-20">
                                                <img class="w-100 td-rounded-10" src="assets/img/contact/thumb-2.jpg" alt="ISB Ghostwriters California branch office" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-lucation ml-40 mb-20">
                                                <h5 class="td-contact-branch-lucation-title">Office Address</h5>
                                                <a class="lucation mb-110" href="#">2108 N St #10893, Sacramento, CA 95816, United States</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="td-contact-branch-number ml-40 mb-20">
                                                <a class="mb-30" href="tel:+17869494620">+1 786-949-4620</a>
                                                <a class="link" href="mailto:info@isbghostwriters.com">info@isbghostwriters.com</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-contact-branch-area-end -->

            </main>

            <!-- footer Include-->
            <?php include 'components/footer.php'; ?>
            <!-- footer Include ended-->

        </div>
    </div>

    <style>
        .td-footer-spacing {
            padding-top: 100px;
        }
        .ajax-response.success {
            color: #4caf50;
        }
        .ajax-response.error {
            color: #ff6b6b;
        }
    </style>



    <!-- JS here -->
    <!--<< jquery.Js >>-->
    <script src="assets/js/vendor/jquery.js"></script>
    <!--<< bootstrap.min.Js >>-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--<< gsap.Js >>-->
    <script src="assets/js/jsap/gsap.js"></script>
    <!--<< gsap-scroll-smoother.Js >>-->
    <script src="assets/js/jsap/gsap-scroll-smoother.js"></script>
    <!--<< gsap-scroll-trigger.Js >>-->
    <script src="assets/js/jsap/gsap-scroll-trigger.js"></script>
    <!--<< gsap-scroll-to-plugin.Js >>-->
    <script src="assets/js/jsap/gsap-scroll-to-plugin.js"></script>
    <!--<< gsap-split-text.Js >>-->
    <script src="assets/js/jsap/gsap-split-text.js"></script>
    <!--<< isotope.pkgd.min.Js >>-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--<< ion.rangeSlider.min.Js >>-->
    <script src="assets/js/ion.rangeSlider.min.js"></script>
    <!--<< effect-slicer.Js >>-->
    <script src="assets/js/effect-slicer.min.js"></script>
    <!--<< imagesloaded.pkgd.min.Js >>-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!--<< jquery.magnific-popup.min.Js >>-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< jquery.odometer.min.Js >>-->
    <script src="assets/js/jquery.odometer.min.js"></script>
    <!--<< jquery-appear.Js >>-->
    <script src="assets/js/jquery-appear.min.js"></script>
    <!--<< swiper-bundle.min.Js >>-->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!--<< jquery.nice-select.min.Js >>-->
    <script src="assets/js/nice-select.min.js"></script>
    <!--<< wow.Js >>-->
    <script src="assets/js/wow.min.js"></script>
    <!--<< main.Js >>-->
    <script src="assets/js/main.min.js"></script>
</body>

</html>