<?php
// Resolve root path (filesystem) and base URL (http://...)
$ROOT = dirname(__DIR__); // one level up from /services-pages

$scheme   = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host     = $_SERVER['HTTP_HOST'];

// Detect base folder (/isbpublishers/) automatically
$baseDir  = rtrim(str_replace('\\', '/', dirname(dirname($_SERVER['SCRIPT_NAME']))), '/');
$BASE_URL = $scheme . '://' . $host . $baseDir . '/';
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Parody - Digital Agency Portfolio Html Template</title>
    <meta name="description" content="Parody - Digital Agency Portfolio Html Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?= $BASE_URL ?>assets/img/logo/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/odometer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/effect-slicer.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/defauls-spacing.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>assets/css/main.css">
</head>

<body>

    <!-- Cursor Pointer -->
    <div class="mouse-follower">
        <span class="cursor-outline"></span>
        <span class="cursor-dot"></span>
    </div>

    <!-- Scroll-top -->
    <button class="scroll__top scroll-to-target" data-target="html">
        <i class="fa-sharp fa-regular fa-arrow-up"></i>
    </button>

    <!-- Header -->
    <?php include $ROOT . '/components/headerinner.php'; ?>
    <!-- Header End -->

    <!-- Mobile Menu -->
    <div class="tdmobile__menu td-menu-large">
        <nav class="tdmobile__menu-box">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
            <div class="nav-logo">
                <a href="<?= $BASE_URL ?>index.php">
                    <img data-width="96" src="<?= $BASE_URL ?>assets/img/logo/logo-black.png" alt="logo">
                </a>
            </div>
            <div class="tdmobile__search">
                <form action="#">
                    <input type="text" placeholder="Search here...">
                    <button><i class="fas fa-search"></i></button>
                </form>
            </div>
            <div class="tdmobile__menu-outer d-xl-none"></div>
            <div class="offCanvas__side-info mb-30 d-none ml-25 mr-25 d-xl-block">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p>123/A, Miranda City<br>Prikano, Dope</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p>+0989 7876 9865 9</p>
                    <p>+(090) 8765 86543 85</p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p>info@example.com</p>
                    <p>example.mail@hum.com</p>
                </div>
            </div>
            <div class="mt-30 ml-25 mr-25">
                <a href="<?= $BASE_URL ?>contact.php" class="td-btn td-btn-menu-black w-100 d-inline-block td-btn-switch-animation ml-10">
                    <span class="d-flex align-items-center justify-content-center">
                        <span class="btn-text"> Contact Us </span>
                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                        <span class="btn-icon"><i class="fa-sharp fa-solid fa-angle-right"></i></span>
                    </span>
                </a>
            </div>
            <div class="social-links">
                <ul class="list-wrap">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="tdmobile__menu-backdrop"></div>
    <!-- Mobile Menu End -->

    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>

                <!-- Example Service Hero -->
                <div class="td-service-area td-breadcrumb-spacing pb-45">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="td-section-page-title mb-35">Ghostwriting <span>Service</span></h2>
                                <div class="td-service-hero-thumb-2 td-rounded-10 pt-105 mb-30">
                                    <img src="<?= $BASE_URL ?>assets/img/service/hero/thumb-2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-40">Description of your service page here.</p>
                                <div class="td-service-hero-thumb td-rounded-10 pt-200">
                                    <img src="<?= $BASE_URL ?>assets/img/service/hero/thumb.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div class="td-cta-area">
                    <div class="container">
                        <div class="td-cta-wrap text-center pt-135 pb-135 include-bg"
                             data-background="<?= $BASE_URL ?>assets/img/cta/bg.jpg">
                            <img class="td-cta-shape d-none d-xl-block" src="<?= $BASE_URL ?>assets/img/cta/cta.png" alt="">
                            <h2 class="title d-inline-block">
                                <img class="td-cta-shape-2 d-none d-md-block" src="<?= $BASE_URL ?>assets/img/cta/cta-2.png" alt="">
                                <a class="td-text-invert" href="<?= $BASE_URL ?>contact.php">
                                    HAVE A<br>PROJECT<br>IN MIND
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>

            </main>

            <!-- Footer -->
            <?php include $ROOT . '/components/footer.php'; ?>
            <!-- Footer End -->
        </div>
    </div>

    <!-- JS -->
    <script src="<?= $BASE_URL ?>assets/js/vendor/jquery.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-smoother.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-trigger.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-scroll-to-plugin.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jsap/gsap-split-text.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/isotope.pkgd.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/ion.rangeSlider.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/effect-slicer.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jquery.odometer.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/jquery-appear.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/swiper-bundle.min.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/nice-select.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/wow.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/ajax-form.js"></script>
    <script src="<?= $BASE_URL ?>assets/js/main.js"></script>

</body>
</html>
