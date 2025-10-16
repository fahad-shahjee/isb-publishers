<?php
require_once __DIR__ . '/../config.php'; // loads $BASE_URL

// figure out current file for "active" state
$currentFile = basename($_SERVER['SCRIPT_NAME']);

// helper for active menu items
$isActive = function ($files) use ($currentFile) {
    $files = (array) $files;
    return in_array($currentFile, $files, true);
};

// any page that should keep "Service" parent highlighted
$servicePages = [
    'service.php',
    'ghostwriting.php',
    'editing-proofreading.php',
    'illustration.php',
    'publishing-strategy.php',
    'marketing-plan.php',
];
?>
<header>

<div id="header-sticky" class="td-header__area td-header-spacing td-header-5-wrapper td-header-about-wrapper p-relative z-index-1">
    <div class="container-fluid container-1710">
        <div class="row align-items-center">
            <div class="col-xxl-2 col-xl-2 col-4">
                <div class="logo">
                    <a class="logo-1" href="<?= $BASE_URL ?>">
                        <img data-width="96" src="<?= $BASE_URL ?>assets/img/logo/logo-black.png" alt="Logo">
                    </a>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 d-none d-xl-block">
                <div class="tdmenu__wrap tdmenu-2-wrap text-center">
                    <nav class="tdmenu__nav">
                        <div class="tdmenu__navbar-wrap tdmenu__main-menu">
                            <ul class="navigation">
                                <li class="<?php if ($isActive(['index.php'])) echo 'active'; ?>">
                                    <a href="<?= $BASE_URL ?>">Home</a>
                                </li>

                                <li class="<?php if ($isActive(['about.php'])) echo 'active'; ?>">
                                    <a href="<?= $BASE_URL ?>about.php">About</a>
                                </li>

                                <li class="menu-item-has-children<?php if ($isActive($servicePages)) echo ' active'; ?>">
                                    <a href="<?= $BASE_URL ?>service.php">Service</a>
                                    <ul class="sub-menu">
                                        <li><a href="<?= $BASE_URL ?>services-pages/ghostwriting.php">Ghostwriting</a></li>
                                        <li><a href="<?= $BASE_URL ?>services-pages/editing-proofreading.php">Editing &amp; Proofreading</a></li>
                                        <li><a href="<?= $BASE_URL ?>services-pages/illustration.php">Illustration</a></li>
                                        <li><a href="<?= $BASE_URL ?>services-pages/publishing-strategy.php">Publishing Strategy</a></li>
                                        <li><a href="<?= $BASE_URL ?>services-pages/marketing-plan.php">Marketing Plan</a></li>
                                    </ul>
                                </li>

                                <li class="<?php if ($isActive(['portfolio.php'])) echo 'active'; ?>">
                                    <a href="<?= $BASE_URL ?>portfolio.php">Portfolio</a>
                                </li>

                                <li class="<?php if ($isActive(['contact.php'])) echo 'active'; ?>">
                                    <a href="<?= $BASE_URL ?>contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="col-xxl-2 col-xl-3 col-8">
                <div class="td-header-right text-end">
                    <a class="td-btn-12" href="javascript:void(0);" id="openServicePopup">Let's Talk</a>
                    <div class="d-inline-block ml-10">
                        <div class="tdmenu-offcanvas-open-btn mobile-nav-toggler">
                            <div class="tdmenu-offcanvas-open-bar d-inline-block">
                                <span></span>
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
                <img data-width="96" src="<?= $BASE_URL ?>assets/img/logo/logo-black.png" alt="logo">
            </a>
        </div>

        <div class="tdmobile__search">
            <form action="#">
                <input type="text" placeholder="Search here...">
                <button><i class="fas fa-search"></i></button>
            </form>
        </div>

        <div class="tdmobile__menu-outer d-xl-none">
            <!-- Same menu injected via JS -->
        </div>

        <div class="offCanvas__side-info mb-30 d-none ml-25 mr-25 d-xl-block">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>1322 N Pine Hills Road, Orlando, Fl, 32808</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>(786) 949-4620</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p>info@isbpublisher.com</p>
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
<!-- End Mobile Menu -->

</header>

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



