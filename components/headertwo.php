<?php
// include config
require_once __DIR__ . '/../config.php';
/** @var string $BASE_URL */
?>

<!-- header-area -->
<header>
    <div id="header-sticky" class="td-header__area td-header-sticky-white td-header-spacing td-header-2-wrapper td-header-3-wrapper p-relative z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-2 col-4">
                    <div class="logo">
                        <a class="logo-1" href="<?= $BASE_URL ?>">
                            <img data-width="220" src="<?= $BASE_URL ?>assets/img/logo/ghost-logo.png" alt="Logo">
                        </a>
                        <a class="logo-2 d-none" href="<?= $BASE_URL ?>">
                            <img data-width="240" src="<?= $BASE_URL ?>assets/img/logo/ghost-logo1.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-xl-7 d-none d-xl-block">
                    <div class="tdmenu__wrap tdmenu-2-wrap">
                        <nav class="tdmenu__nav">
                            <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                                <ul class="navigation">
                                    <li><a href="<?= $BASE_URL ?>index.php">Home</a></li>
                                    <li><a href="<?= $BASE_URL ?>about">About</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="<?= $BASE_URL ?>service">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?= $BASE_URL ?>services-pages/audio-book">Audio Book</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/author-website">Author Website</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/proofreading">Proofreading</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-publishing">Book Publishing</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-ghostwriting">Book Ghostwriting</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-marketing">Book Marketing</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-illustration">Book Illustration</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-cover-design">Book Cover Design</a></li>
                                            <li><a href="<?= $BASE_URL ?>services-pages/book-formatting">Book Formatting</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li><a href="<?= $BASE_URL ?>portfolio">Portfolio</a></li>
                                    <li><a href="<?= $BASE_URL ?>contact">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-3 col-8">
                    <div class="td-header-right text-end">
                        <div class="d-none d-xl-inline-block">
                            <a href="javascript:void(0);"
                                class="td-header-2-btn ml-10"
                                style="background-color: white;"
                                onclick="openServicePopup()">
                                <span class="icon">
                                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.7767 7.47384C15.9198 7.62604 16 7.8316 16 8.04582C16 8.26004 15.9198 8.4656 15.7767 8.61781L8.92138 15.8429C8.77516 15.9903 8.58094 16.0729 8.37867 16.0737C8.27759 16.0732 8.17746 16.0529 8.08351 16.0134C7.94489 15.9522 7.8266 15.8488 7.74358 15.7167C7.66056 15.5845 7.61651 15.4294 7.61698 15.2709V8.84861H0.761697C0.559684 8.84861 0.365942 8.76404 0.223096 8.61348C0.0802502 8.46292 0 8.25874 0 8.04582C0 7.83291 0.0802502 7.62871 0.223096 7.47817C0.365942 7.32761 0.559684 7.24304 0.761697 7.24304H7.61698V0.820711C7.61651 0.662221 7.66056 0.507129 7.74358 0.374983C7.8266 0.242834 7.94489 0.139545 8.08351 0.0781301C8.2242 0.0202932 8.37756 0.00562 8.52585 0.0358103C8.67412 0.065999 8.81125 0.139818 8.92138 0.248724L15.7767 7.47384Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <span style="color: black !important;">Talk With Us</span>
                            </a>
                        </div>
                        <div class="d-inline-block ml-20">
                            <div class="tdmenu-offcanvas-open-btn d-xl-none mobile-nav-toggler d-flex align-items-center justify-content-center">
                                <span class="text mr-5">menu</span>
                                <div class="tdmenu-offcanvas-open-bar">
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="tdmobile__menu td-menu-large">
        <nav class="tdmobile__menu-box">
            <div class="close-btn"><i class="fa-solid fa-xmark"></i></div>
            <div class="nav-logo">
                <a href="<?= $BASE_URL ?>">
                    <img data-width="96" src="<?= $BASE_URL ?>assets/img/logo/ghost-logo1.png" alt="logo">
                </a>
            </div>
            <div class="tdmobile__menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
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
    <!-- End Mobile Menu -->

</header>
<!-- header-area-end -->


<!--<< Popup >>-->
<?php include 'components/popup.php'; ?>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const popupOverlay = document.getElementById("servicePopupOverlay");
    const popupClose = document.getElementById("servicePopupClose");
    const talkButton = document.querySelector(".td-header-2-btn");

    // Open popup
    talkButton.addEventListener("click", function(e) {
        e.preventDefault();
        popupOverlay.style.display = "flex";
        document.body.style.overflow = "hidden";
    });

    // Close popup
    popupClose.addEventListener("click", function() {
        popupOverlay.style.display = "none";
        document.body.style.overflow = "auto";
    });

    // Close popup on outside click
    popupOverlay.addEventListener("click", function(e) {
        if (e.target === popupOverlay) {
            popupOverlay.style.display = "none";
            document.body.style.overflow = "auto";
        }
    });
});
</script>
