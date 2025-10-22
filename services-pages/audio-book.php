<?php
require_once __DIR__ . '/../config.php';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Expert Audiobook Services | ISB Ghostwriters</title>
    <meta name="description" content="Parody - Digital Agency Portfolio Html Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= $BASE_URL ?>assets/img/logo/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/bootstrap.min.css">
    <!--<< magnific-popup.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/magnific-popup.css">
    <!--<< fontawesome-all.min.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/fontawesome-all.min.css">
    <!--<< swiper-bundle.min.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/swiper-bundle.min.css">
    <!--<< odometer.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/odometer.css">
    <!--<< ion.rangeSlider.min.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/ion.rangeSlider.min.css">
    <!--<< effect-slicer.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/effect-slicer.css">
    <!--<< animate.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/animate.css">
    <!--<< default.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/defauls-spacing.css">
    <!--<< main.css >>-->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/main.css">
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
    <?php include __DIR__ . '/../components/headerinner.php'; ?>
    <!-- header-area-end -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>


                <!-- td-about-area-start -->
                <div class="td-about-area td-about-main-spacing pb-140" style="padding-bottom: 50px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="td-about-main-wrapper pb-90" style="padding-bottom: 180px;">
                                    <h2 class="td-section-page-title td-title-anim text-center">
                                        Professional<br>
                                        <span>Audiobook Services</span>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="td-about-main-thumb mb-40 fix td-rounded-10 wow fadeInLeft" data-wow-delay=".5s" data-wow-duration="1s">
                                    <img data-speed=".9" class="w-100 td-rounded-10" src="<?= $BASE_URL ?>assets/img/about/main/about.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="td-about-main-content mb-40 wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                    <h3 class="td-about-main-title mb-20">Premium Audiobook Solutions for Writers</h3>
                                    <div class="td-about-main-text mt-30">
                                        <p class="mb-40">We are passionate about supporting authors and the incredible stories they have to tell. With years of publishing expertise, our team provides personalized, end-to-end solutions to help writers at every stage of their journey — from the first spark of an idea to the moment their book reaches readers around the world. We believe every story deserves to be told with care, creativity, and authenticity.</p>
                                        <div class="td-btn-group">
                                            <a class="td-btn-circle" href="<?= $BASE_URL ?>contact.php">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                            <a class="td-btn-2 td-btn-primary" href="<?= $BASE_URL ?>contact.php">Contact Us</a>
                                            <a class="td-btn-circle" href="<?= $BASE_URL ?>contact.php">
                                                <i class="fa-solid fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-about-area-end -->

                <!-- td-contact-area-start -->
                <div class="td-contact-area td-contact-2-wrap pt-85 fix pb-50" style="padding-top: 0px;">
                    <div class="td-contact-7-text-slider">
                        <div class="td-contact-7-text-btn text-center pt-30">
                            <a href="<?= $BASE_URL ?>contact.php">
                                <img class="td-live-anim-spin" src="<?= $BASE_URL ?>assets/img/contact/text.png" alt="">
                                <span class="icon">
                                    <svg width="29" height="30" viewBox="0 0 29 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.07031 22.0708L21.2124 7.92867" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M21.2124 22.0713V7.9292H7.07031" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                        <div class="swiper-container td-contact-7-slide-active">
                            <div class="swiper-wrapper slide-transtion">
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text">Work</h2>
                                </div>
                                <div class="swiper-slide">
                                    <h2 class="td-contact-7-slide-text yellows">TOGETHER</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-contact-area-end -->

                <!-- td-about-area-start -->
                <div class="td-about-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="td-about-left mb-30">
                                    <span>Empowering Your Words to Be Heard</span>
                                    <div class="td-about-left-thumb ml-60 fix td-rounded-10">
                                        <img data-speed=".9" src="<?= $BASE_URL ?>assets/img/about/main/about-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="td-about-content mb-30">
                                    <h2 class="td-about-title mb-30 td-text-invert" style="font-size: 40px">Every story deserves to be heard. Let us give your words a voice that inspires, connects, and leaves a lasting impression on hearts and minds everywhere.</h2>
                                    <p class="mb-45">Turning your written book into a captivating audiobook takes more than simply reading it aloud. It requires expert narration, meticulous editing, and top-tier production to truly capture the heart and soul of your story. Let us handle every detail for you. We’ll transform your book into an immersive audiobook experience — one that brings every emotion to life and makes your story impossible to ignore.</p>
                                    <div class="td-btn-group mb-35">
                                        <a class="td-btn-circle" href="<?= $BASE_URL ?>about.php">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                        <a class="td-btn-2 td-btn-primary" href="tel:(786) 949-4620">Free Consultation</a>
                                        <a class="td-btn-circle" href="<?= $BASE_URL ?>about.php">
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>
                                    </div>
                                    <div class="td-about-thumb-wrap d-flex align-items-center justify-content-end">
                                        <div class="mr-150 td-about-shape">
                                            <img class="td-live-anim-spin" src="<?= $BASE_URL ?>assets/img/about/shape.png" alt="">
                                        </div>
                                        <div class="td-about-thumb fix td-rounded-10">
                                            <img data-speed=".9" src="<?= $BASE_URL ?>assets/img/about/main/about-3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-about-area-end -->

                <!-- td-brands-area-start -->
                <div class="td-brands-area pt-115">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="td-brand-wrap">
                                    <div class="swiper-container td-brand-slide-active">
                                        <div class="swiper-wrapper slide-transtion">
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="td-brand-item">
                                                    <img src="<?= $BASE_URL ?>assets/img/brand/services/serv-logo1.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-brands-area-end -->

                <!-- td-service-process-area-start -->
                <div class="td-service-process-area pt-80">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="td-service-process-title-wrap text-center mb-50">
                                    <h2 class="td-testimonial-title td-text-invert">Complete Professional Audiobook
                                        <span>Solutions from Start to Finish</span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="row gx-0">
                            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <div class="td-service-process-item mt-120">
                                    <span class="icons mb-60 d-flex align-items-start justify-content-between">
                                        <!-- SVGs unchanged -->
                                        <img src="<?= $BASE_URL ?>assets\img\service\servicesico/initialcons.png" alt="Initial Consultation" width="64" height="64">
                                        <span class="number">01</span>
                                    </span>
                                    <h5 class="title mb-15">Initial Consultation</h5>
                                    <p class="para">We learn your vision and define the tone, style, and voice for your audiobook.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <div class="td-service-process-item">
                                    <span class="icons mb-60 d-flex align-items-start justify-content-between">
                                        <img src="<?= $BASE_URL ?>assets\img\service\servicesico/voiceselct.png" alt="Voice Selection" width="64" height="64">
                                        <span class="number">02</span>
                                    </span>
                                    <h5 class="title mb-15">Voice Selection</h5>
                                    <p class="para">Choose the perfect narrator whose voice captures your story’s essence.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-delay=".7s" data-wow-duration="1s">
                                <div class="td-service-process-item mt-120">
                                    <span class="icons mb-60 d-flex align-items-start justify-content-between">
                                        <img src="<?= $BASE_URL ?>assets\img\service\servicesico/rec_prod.png" alt="Recording & Production" width="64" height="64">
                                        <span class="number">03</span>
                                    </span>
                                    <h5 class="title mb-15">Recording & Production</h5>
                                    <p class="para">Then, we record and produce your audiobook with expert narration and top-quality sound.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6  wow fadeInUp" data-wow-delay=".9s" data-wow-duration="1s">
                                <div class="td-service-process-item">
                                    <span class="icons mb-60 d-flex align-items-start justify-content-between">
                                        <img src="<?= $BASE_URL ?>assets\img\service\servicesico/finalrev.png" alt="Final Review & Delivery" width="64" height="64">
                                        <span class="number">04</span>
                                    </span>
                                    <h5 class="title mb-15">Final Review & Delivery</h5>
                                    <p class="para">Finally, we review, polish, and deliver your audiobook ready for global release.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-service-process-area-end -->

                 <!-- td-faq-2-area-start -->
                <div class="td-faq-2-area pt-160">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="td-faq-2-thumb mb-30 fix td-rounded-10">
                                    <img data-speed=".9" class="td-rounded-10" src="<?= $BASE_URL ?>assets/img/about/main/about-4.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="td-faq-4-wrap-right td-faq-2-wrap-right mb-30">
                                    <h2 class="td-testimonial-title mb-20 td-text-invert">Frequently <span>asked questions</span></h2>
                                    <div class="td-faq-4-accordion  wow fadeInRight" data-wow-delay=".5s" data-wow-duration="1s">
                                        <div class="accordion" id="accordionExample">
                                           <div class="accordion-items">
                                              <h2 class="accordion-header">
                                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                    Why use professional audiobook production?
                                                    <span class="plus-icon"></span>
                                                 </button>
                                              </h2>
                                              <div id="collapseOne" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                    <p>Professional production ensures your story sounds clear, engaging, and emotionally authentic. It enhances the listening experience, captures the heart of your book, and helps your audiobook shine in a competitive market.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="accordion-items">
                                              <h2>
                                                 <button class="accordion-buttons" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    How much does it cost?
                                                    <span class="plus-icon"></span>
                                                 </button>
                                              </h2>
                                              <div id="collapseTwo" class="accordion-collapse collapse show"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                    <p>Costs vary by book length, narration style, and voice artist. Contact us for a custom quote based on your project.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="accordion-items">
                                              <h2 class="accordion-header">
                                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    How long does it take?
                                                    <span class="plus-icon"></span>
                                                 </button>
                                              </h2>
                                              <div id="collapseThree" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                    <p>Depending on length and production details, most audiobooks are completed within a few weeks to a couple of months.</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="accordion-items">
                                              <h2 class="accordion-header">
                                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    What genres do you work with?
                                                    <span class="plus-icon"></span>
                                                 </button>
                                              </h2>
                                              <div id="collapseFour" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                    <p>We produce all genres — fiction, non-fiction, self-help, memoirs, fantasy, romance, thrillers, and more</p>
                                                 </div>
                                              </div>
                                           </div>
                                           <div class="accordion-items">
                                              <h2 class="accordion-header">
                                                 <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Is this good for self-published authors?
                                                    <span class="plus-icon"></span>
                                                 </button>
                                              </h2>
                                              <div id="collapseFive" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionExample">
                                                 <div class="accordion-body">
                                                    <p>Absolutely. Professional production boosts your book’s reach, credibility, and listener appeal.</p>
                                                 </div>
                                              </div>
                                           </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-faq-2-area-end -->

                <!-- td-cta-area-start -->
                <div class="td-cta-area">
                    <div class="container">
                        <div class="col-lg-12">
                            <div class="td-cta-wrap p-relative z-index-1 text-center pt-135 pb-135 include-bg" data-background="<?= $BASE_URL ?>assets/img/cta/bg.jpg">
                                <img class="td-cta-shape d-none d-xl-block" src="<?= $BASE_URL ?>assets/img/cta/cta.png" alt="">
                                <h2 class="title p-relative d-inline-block">
                                    <img class="td-cta-shape-2 d-none d-md-block" src="<?= $BASE_URL ?>assets/img/cta/cta-2.png" alt="">
                                    <a class="td-text-invert" href="<?= $BASE_URL ?>contact.php">
                                        HAVE A<br>
                                        PROJECTS<br>
                                        IN MINDS
                                    </a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- td-cta-area-end -->
                
            </main>
            <!-- main-area-end -->

            <!-- footer Include-->
            <?php include __DIR__ . '/../components/footer.php'; ?>
            <!-- footer Include ended-->

        </div>
    </div>

    <!-- JS here -->
    <!--<< jquery.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/vendor/jquery.js"></script>
    <!--<< bootstrap.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/bootstrap.min.js"></script>
    <!--<< gsap.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap.js"></script>
   <!--<< gsap-scroll-smoother.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-smoother.js"></script>
   <!--<< gsap-scroll-trigger.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-trigger.js"></script>
   <!--<< gsap-scroll-to-plugin.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-to-plugin.js"></script>
    <!--<< gsap-split-text.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-split-text.js"></script>
    <!--<< isotope.pkgd.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/isotope.pkgd.min.js"></script>
    <!--<< ion.rangeSlider.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/ion.rangeSlider.min.js"></script>
    <!--<< effect-slicer.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/effect-slicer.js"></script>
    <!--<< imagesloaded.pkgd.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <!--<< jquery.magnific-popup.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!--<< jquery.odometer.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jquery.odometer.min.js"></script>
    <!--<< jquery-appear.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/jquery-appear.js"></script>
    <!--<< swiper-bundle.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/swiper-bundle.min.js"></script>
    <!--<< jquery.nice-select.min.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/nice-select.js"></script>
    <!--<< wow.Js >>-->    
    <script src="<?= $BASE_URL ?>assets/js/wow.js"></script>
    <!--<< ajax-form.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/ajax-form.js"></script>
    <!--<< main.Js >>-->
    <script src="<?= $BASE_URL ?>assets/js/main.js"></script>
</body>

</html>
